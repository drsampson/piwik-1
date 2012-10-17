
var Piwik_Insight_Client = (function() {
	
	/** jQuery */
	var $;
	
	/** Url of the Piwik root */
	var piwikRoot;
	
	/** Piwik idsite */
	var idSite;
	
	/** The current period and date */
	var period, date;
	
	/** Reference to the status bar DOM element */
	var statusBar;
	
	/** Load the client CSS */
	function loadCss() {
		var css = c('link').attr({
			rel:  'stylesheet',
			type: 'text/css',
			href: piwikRoot + 'plugins/Insight/client/insight.css'
		});
		$('head').append(css);
	}
	
	/**
	 * This method loads jQuery, if it is not there yet.
	 * The callback is triggered after jQuery is loaded.
	 */
	function loadJQuery(callback) {
		if (typeof jQuery != 'undefined') {
			$ = jQuery;
			callback();
		}
		else {
			Piwik_Insight_Client.loadScript('libs/jquery/jquery.js', function() {
				$ = jQuery;
				jQuery.noConflict();
				callback();
			});
		}
	}

	/**
	 * Notify Piwik of the current iframe location.
	 * This way, we can display additional metrics on the side of the iframe.
	 */
	function notifyPiwikOfLocation() {
		var iframe = c('iframe', false, {
			src: 'http://piwik-git.stage/index.php?module=Insight&action=notifyParentIframe#'
					+ window.location.href
		})
			.css({width: 0, height: 0, border: 0});
		
		$('body').append(iframe);
	}
	
	/** Create a jqueryfied DOM element */
	function c(tagName, className, attributes) {
		var el = $(document.createElement(tagName));
		
		if (className) {
			if (className.substring(0, 1) == '#') {
				var id = className.substring(1, className.length);
				id = 'PIS_' + id;
				el.attr('id', id);
			}
			else {
				className = 'PIS_' + className;
				el.addClass(className);
			}
		}
		
		if (attributes) {
			el.attr(attributes);
		}
		
		return el;
	}
	
	return {
		
		/** Initialize in-site analytics */
		initialize: function(pPiwikRoot, pIdSite, pPeriod, pDate) {
			piwikRoot = pPiwikRoot;
			idSite = pIdSite;
			period = pPeriod;
			date = pDate;
			
			var load = this.loadScript;
			var loading = this.loadingNotification;
			
			loadJQuery(function() {
				notifyPiwikOfLocation();
				loadCss();
				
				var finishLoadingInsight = loading('Loading Piwik Insight scripts');
				
				// translations
				load('plugins/Insight/client/translations.js', function() {
					Piwik_Insight_Translations.initialize(function() {
						finishLoadingInsight();
						
						// following pages
						var finishPages = loading('Loading following pages');
						load('plugins/Insight/client/followingpages.js', function() {
							Piwik_Insight_FollowingPages.initialize(finishPages);
						});
						
					});
				});
			});
		},
		
		/** Create a jqueryfied DOM element */
		createElement: function(tagName, className, attributes) {
			return c(tagName, className, attributes);
		},
		
		/** Load a script and wait for it to be loaded */
		loadScript: function(relativePath, callback) {
			var loaded = false;
			var onLoad = function() {
				if (!loaded) {
					loaded = true;
					callback();
				}
			};
			
			var head = document.getElementsByTagName('head')[0];
			var script = document.createElement('script');
			script.type = 'text/javascript';
			
			script.onreadystatechange = function () {
				if (this.readyState == 'loaded' || this.readyState == 'complete') {
					onLoad();
				}
			}
			script.onload = onLoad;
			
			script.src = piwikRoot+relativePath;
			head.appendChild(script);
		},
		
		/** Piwik Insight API Request */
		api: function(method, callback, additionalParams) {
			var url = piwikRoot+'index.php?module=API&method=Insight.'+method
					+'&idSite='+idSite+'&period='+period+'&date='+date+'&format=JSON';
					
			if (additionalParams) {
				url += '&' + additionalParams;
			}
			
			$.getJSON(url+"&jsoncallback=?", function(data) {
				if (typeof data.result != 'undefined' && data.result == 'error') {
					alert('Error: ' + data.message);
				}
				else {
					callback(data);
				}
			});
		},
		
		/**
		 * Initialize a loading notification
		 * To hide the notification use the returned callback
		 */
		loadingNotification: function(message) {
			if (!statusBar) {
				statusBar = c('div', '#StatusBar').css('opacity', .8);
				$('body').prepend(statusBar);
			}
			
			var loading = c('div', 'Item').html(message);
			statusBar.show().append(loading);
			
			return function() {
				loading.remove();
				if (statusBar.children().size() == 0) {
					statusBar.hide();
				}
			};
		}
		
	};
	
})();

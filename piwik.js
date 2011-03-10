/*
 * Piwik - Web Analytics
 *
 * JavaScript tracking client
 *
 * @link http://piwik.org
 * @source http://dev.piwik.org/trac/browser/trunk/js/piwik.js
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD
 */
if(!this.JSON2){this.JSON2={}}(function(){function d(f){return f<10?"0"+f:f}function k(m,l){var f=Object.prototype.toString.apply(m);if(f==="[object Date]"){return isFinite(m.valueOf())?m.getUTCFullYear()+"-"+d(m.getUTCMonth()+1)+"-"+d(m.getUTCDate())+"T"+d(m.getUTCHours())+":"+d(m.getUTCMinutes())+":"+d(m.getUTCSeconds())+"Z":null}if(f==="[object String]"||f==="[object Number]"||f==="[object Boolean]"){return m.valueOf()}if(f!=="[object Array]"&&typeof m.toJSON==="function"){return m.toJSON(l)}return m}var c=new RegExp("[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]","g"),g=new RegExp('[\\\\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]',"g"),h,b,j={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},i;
function a(f){g.lastIndex=0;return g.test(f)?'"'+f.replace(g,function(l){var m=j[l];return typeof m==="string"?m:"\\u"+("0000"+l.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+f+'"'}function e(r,o){var m,l,s,f,p=h,n,q=o[r];if(q&&typeof q==="object"){q=k(q,r)}if(typeof i==="function"){q=i.call(o,r,q)}switch(typeof q){case"string":return a(q);case"number":return isFinite(q)?String(q):"null";case"boolean":case"null":return String(q);case"object":if(!q){return"null"}h+=b;n=[];if(Object.prototype.toString.apply(q)==="[object Array]"){f=q.length;for(m=0;m<f;m+=1){n[m]=e(m,q)||"null"}s=n.length===0?"[]":h?"[\n"+h+n.join(",\n"+h)+"\n"+p+"]":"["+n.join(",")+"]";h=p;return s}if(i&&typeof i==="object"){f=i.length;for(m=0;m<f;m+=1){if(typeof i[m]==="string"){l=i[m];s=e(l,q);if(s){n.push(a(l)+(h?": ":":")+s)}}}}else{for(l in q){if(Object.prototype.hasOwnProperty.call(q,l)){s=e(l,q);if(s){n.push(a(l)+(h?": ":":")+s)}}}}s=n.length===0?"{}":h?"{\n"+h+n.join(",\n"+h)+"\n"+p+"}":"{"+n.join(",")+"}";h=p;
return s}}if(typeof JSON2.stringify!=="function"){JSON2.stringify=function(n,l,m){var f;h="";b="";if(typeof m==="number"){for(f=0;f<m;f+=1){b+=" "}}else{if(typeof m==="string"){b=m}}i=l;if(l&&typeof l!=="function"&&(typeof l!=="object"||typeof l.length!=="number")){throw new Error("JSON.stringify")}return e("",{"":n})}}if(typeof JSON2.parse!=="function"){JSON2.parse=function(n,f){var m;function l(r,q){var p,o,s=r[q];if(s&&typeof s==="object"){for(p in s){if(Object.prototype.hasOwnProperty.call(s,p)){o=l(s,p);if(o!==undefined){s[p]=o}else{delete s[p]}}}}return f.call(r,q,s)}n=String(n);c.lastIndex=0;if(c.test(n)){n=n.replace(c,function(o){return"\\u"+("0000"+o.charCodeAt(0).toString(16)).slice(-4)})}if((new RegExp("^[\\],:{}\\s]*$")).test(n.replace(new RegExp('\\\\(?:["\\\\/bfnrt]|u[0-9a-fA-F]{4})',"g"),"@").replace(new RegExp('"[^"\\\\\n\r]*"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?',"g"),"]").replace(new RegExp("(?:^|:|,)(?:\\s*\\[)+","g"),""))){m=eval("("+n+")");
return typeof f==="function"?l({"":m},""):m}throw new SyntaxError("JSON.parse")}}}());var _paq=_paq||[],Piwik=Piwik||(function(){var m,w={},d=document,j=navigator,v=screen,G=window,h=false,B=[],e=G.encodeURIComponent,H=G.decodeURIComponent,F,C;function b(i){return typeof i!=="undefined"}function a(i){return typeof i==="function"}function n(i){return typeof i==="object"}function q(i){return typeof i==="string"||i instanceof String}function z(I){var i=I.shift();if(q(i)){F[i].apply(F,I)}else{i.apply(F,I)}}function t(K,J,I,i){if(K.addEventListener){K.addEventListener(J,I,i);return true}if(K.attachEvent){return K.attachEvent("on"+J,I)}K["on"+J]=I}function g(J,M){var I="",L,K;for(L in w){K=w[L][J];if(a(K)){I+=K(M)}}return I}function A(){var i;g("unload");if(m){do{i=new Date()}while(i.getTime()<m)}}function k(){var I;if(!h){h=true;g("load");for(I=0;I<B.length;I++){B[I]()}}return true}function x(){var I;if(d.addEventListener){t(d,"DOMContentLoaded",function i(){d.removeEventListener("DOMContentLoaded",i,false);
k()})}else{if(d.attachEvent){d.attachEvent("onreadystatechange",function i(){if(d.readyState==="complete"){d.detachEvent("onreadystatechange",i);k()}});if(d.documentElement.doScroll&&G===G.top){(function i(){if(!h){try{d.documentElement.doScroll("left")}catch(J){setTimeout(i,0);return}k()}}())}}}if((new RegExp("WebKit")).test(j.userAgent)){I=setInterval(function(){if(h||/loaded|complete/.test(d.readyState)){clearInterval(I);k()}},10)}t(G,"load",k,false)}function f(){var i="";try{i=G.top.document.referrer}catch(J){if(G.parent){try{i=G.parent.document.referrer}catch(I){i=""}}}if(i===""){i=d.referrer}return i}function y(i){var J=new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)"),I=J.exec(i);return I?I[1]:i}function p(J,I){var M=new RegExp("^(?:https?|ftp)(?::/*(?:[^?]+)[?])([^#]+)"),L=M.exec(J),K=new RegExp("(?:^|&)"+I+"=([^&]*)"),i=L?K.exec(L[1]):0;return i?H(i[1]):""}function s(N,K,J,M,I,L){var i;if(J){i=new Date();i.setTime(i.getTime()+J)}d.cookie=N+"="+e(K)+(J?";expires="+i.toGMTString():"")+";path="+(M?M:"/")+(I?";domain="+I:"")+(L?";secure":"")
}function E(J){var i=new RegExp("(^|;)[ ]*"+J+"=([^;]*)"),I=i.exec(d.cookie);return I?H(I[2]):0}function r(i){return unescape(e(i))}function u(Y){var K=function(W,i){return(W<<i)|(W>>>(32-i))},Z=function(af){var ae="",ad,W;for(ad=7;ad>=0;ad--){W=(af>>>(ad*4))&15;ae+=W.toString(16)}return ae},N,ab,aa,J=[],R=1732584193,P=4023233417,O=2562383102,M=271733878,L=3285377520,X,V,U,T,S,ac,I,Q=[];Y=r(Y);I=Y.length;for(ab=0;ab<I-3;ab+=4){aa=Y.charCodeAt(ab)<<24|Y.charCodeAt(ab+1)<<16|Y.charCodeAt(ab+2)<<8|Y.charCodeAt(ab+3);Q.push(aa)}switch(I&3){case 0:ab=2147483648;break;case 1:ab=Y.charCodeAt(I-1)<<24|8388608;break;case 2:ab=Y.charCodeAt(I-2)<<24|Y.charCodeAt(I-1)<<16|32768;break;case 3:ab=Y.charCodeAt(I-3)<<24|Y.charCodeAt(I-2)<<16|Y.charCodeAt(I-1)<<8|128;break}Q.push(ab);while((Q.length&15)!==14){Q.push(0)}Q.push(I>>>29);Q.push((I<<3)&4294967295);for(N=0;N<Q.length;N+=16){for(ab=0;ab<16;ab++){J[ab]=Q[N+ab]}for(ab=16;ab<=79;ab++){J[ab]=K(J[ab-3]^J[ab-8]^J[ab-14]^J[ab-16],1)}X=R;V=P;U=O;T=M;S=L;
for(ab=0;ab<=19;ab++){ac=(K(X,5)+((V&U)|(~V&T))+S+J[ab]+1518500249)&4294967295;S=T;T=U;U=K(V,30);V=X;X=ac}for(ab=20;ab<=39;ab++){ac=(K(X,5)+(V^U^T)+S+J[ab]+1859775393)&4294967295;S=T;T=U;U=K(V,30);V=X;X=ac}for(ab=40;ab<=59;ab++){ac=(K(X,5)+((V&U)|(V&T)|(U&T))+S+J[ab]+2400959708)&4294967295;S=T;T=U;U=K(V,30);V=X;X=ac}for(ab=60;ab<=79;ab++){ac=(K(X,5)+(V^U^T)+S+J[ab]+3395469782)&4294967295;S=T;T=U;U=K(V,30);V=X;X=ac}R=(R+X)&4294967295;P=(P+V)&4294967295;O=(O+U)&4294967295;M=(M+T)&4294967295;L=(L+S)&4294967295}ac=Z(R)+Z(P)+Z(O)+Z(M)+Z(L);return ac.toLowerCase()}function o(J,i,I){if(J==="translate.googleusercontent.com"){if(I===""){I=i}i=p(i,"u");J=y(i)}else{if(J==="cc.bingj.com"||J==="webcache.googleusercontent.com"||J.slice(0,5)==="74.6."){i=d.links[0].href;J=y(i)}}return[J,i,I]}function l(I){var i=I.length;if(I.charAt(--i)==="."){I=I.slice(0,i)}if(I.slice(0,2)==="*."){I=I.slice(1)}return I}function D(ay,aw){var aj=o(d.domain,G.location.href,f()),W=l(aj[0]),T=aj[1],az=aj[2],K="GET",aa=ay||"",aQ=aw||"",aJ,aP=d.title,af="7z|aac|ar[cj]|as[fx]|avi|bin|csv|deb|dmg|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|ms[ip]|od[bfgpst]|og[gv]|pdf|phps|png|ppt|qtm?|ra[mr]?|rpm|sea|sit|tar|t?bz2?|tgz|torrent|txt|wav|wm[av]|wpd||xls|xml|z|zip",aB=[W],M=[],aC=[],aF=[],Z=500,J,ah,ai,au,aD="_pk_",P,ax,L,aq,aR=63072000000,ad=1800000,Y=15768000000,aG=false,R=100,al={},ap=false,Q=false,X,aN,an,aI=u,av;
function aK(aT){var aS;if(ai){aS=new RegExp("#.*");return aT.replace(aS,"")}return aT}function ao(aV){var aT,aS,aU;for(aT=0;aT<aB.length;aT++){aS=l(aB[aT].toLowerCase());if(aV===aS){return true}if(aS.slice(0,1)==="."){if(aV===aS.slice(1)){return true}aU=aV.length-aS.length;if((aU>0)&&(aV.slice(aU)===aS)){return true}}}return false}function i(aS){var aT=new Image(1,1);aT.onLoad=function(){};aT.src=aa+(aa.indexOf("?")<0?"?":"&")+aS}function V(aS){try{var aU=G.XMLHttpRequest?new G.XMLHttpRequest():G.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):null;aU.open("POST",aa,true);aU.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");aU.send(aS)}catch(aT){i(aS)}}function aM(aU,aT){var aS=new Date();if(!L){if(K==="POST"){V(aU)}else{i(aU)}m=aS.getTime()+aT}}function N(aS){return aD+aS+"."+aQ+"."+av}function at(){var aS=N("testcookie");if(!b(j.cookieEnabled)){s(aS,"1");return E(aS)==="1"?"1":"0"}return j.cookieEnabled?"1":"0"}function ag(){av=aI((P||W)+(ax||"/")).slice(0,4)
}function U(){var aT=N("cvar"),aS=E(aT);if(aS.length){aS=JSON2.parse(aS);if(n(aS)){return aS}}return{}}function aE(){if(aG===false){aG=U()}}function O(aS){var aT=new Date();X=aT.getTime()}function aA(){var aT=new Date(),aS=Math.round(aT.getTime()/1000),aV=E(N("id")),aU;if(aV){aU=aV.split(".");aU.unshift("0")}else{aU=["1",aI((j.userAgent||"")+(j.platform||"")+JSON2.stringify(al)+aS).slice(0,16),aS,0,aS,""]}return aU}function ak(aT,bd,bf){var bb,aS=new Date(),aZ=Math.round(aS.getTime()/1000),be,bg,bc,aV,a6,a9,aY,aX,ba,aU=1024,bh,a2,a8=aG,a4=N("id"),a0=N("ses"),a1=N("ref"),bi=N("cvar"),a7=aA(),a3=E(a0),aW=E(a1),a5=d.location.protocol==="https";if(L){s(a4,"",-1,ax,P);s(a0,"",-1,ax,P);s(bi,"",-1,ax,P);s(a1,"",-1,ax,P);return""}bg=a7[0];bc=a7[1];a6=a7[2];aV=a7[3];a9=a7[4];aY=a7[5];if(aW){be=aW.indexOf(".");aX=aW.slice(0,be);ba=aW.slice(be+1)}else{aX=0;ba=""}if(!a3){aV++;aY=a9;bh=y(az);a2=aW?y(aW):"";if(bh.length&&!ao(bh)&&(!aq||!a2.length||ao(a2))){aX=aZ;ba=az;s(a1,aX+"."+ba.slice(0,aU),Y,ax,P,a5)
}}aT+="&idsite="+aQ+"&rec=1&rand="+Math.random()+"&h="+aS.getHours()+"&m="+aS.getMinutes()+"&s="+aS.getSeconds()+"&url="+e(aK(aJ||T))+"&urlref="+e(aK(az))+"&_id="+bc+"&_idts="+a6+"&_idvc="+aV+"&_idn="+bg+"&_ref="+e(aK(ba.slice(0,aU)))+"&_refts="+aX+"&_viewts="+aY;for(bb in al){aT+="&"+bb+"="+al[bb]}if(bd){aT+="&data="+e(JSON2.stringify(bd))}else{if(au){aT+="&data="+e(JSON2.stringify(au))}}if(aG){aT+="&_cvar="+e(JSON2.stringify(aG));for(bb in a8){if(aG[bb][0]===""||aG[bb][1]===""){delete aG[bb]}}s(bi,JSON2.stringify(aG),ad,ax,P,a5)}s(a4,bc+"."+a6+"."+aV+"."+aZ+"."+aY,aR,ax,P,a5);s(a0,"*",ad,ax,P,a5);aT+=g(bf);return aT}function I(aV,aW){var aS=new Date(),aU=ak("action_name="+e(aV||aP),aW,"log");aM(aU,Z);if(J&&ah&&!Q){Q=true;t(d,"click",O);t(d,"mouseup",O);t(d,"mousedown",O);t(d,"mousemove",O);t(d,"mousewheel",O);t(G,"DOMMouseScroll",O);t(G,"scroll",O);t(d,"keypress",O);t(d,"keydown",O);t(d,"keyup",O);t(G,"resize",O);t(G,"focus",O);t(G,"blur",O);X=aS.getTime();setTimeout(function aT(){var aX=new Date(),aY;
if((X+ah)>aX.getTime()){if(J<aX.getTime()){aY=ak("ping=1",aW,"ping");aM(aY,Z)}setTimeout(aT,ah)}},ah)}}function aL(aS,aV,aU){var aT=ak("idgoal="+aS,aU,"goal");if(aV){aT+="&revenue="+aV}aM(aT,Z)}function ae(aT,aS,aV){var aU=ak(aS+"="+e(aK(aT)),aV,"link");aM(aU,Z)}function ar(aU,aT){var aV,aS="(^| )(piwik[_-]"+aT;if(aU){for(aV=0;aV<aU.length;aV++){aS+="|"+aU[aV]}}aS+=")( |$)";return new RegExp(aS)}function aO(aV,aS,aW){if(!aW){return"link"}var aU=ar(aC,"download"),aT=ar(aF,"link"),aX=new RegExp("\\.("+af+")([?&#]|$)","i");return aT.test(aV)?"link":(aU.test(aV)||aX.test(aS)?"download":0)}function S(aX){var aV,aT,aS;while(!!(aV=aX.parentNode)&&((aT=aX.tagName)!=="A"&&aT!=="AREA")){aX=aV}if(b(aX.href)){var aY=aX.hostname||y(aX.href),aZ=aY.toLowerCase(),aU=aX.href.replace(aY,aZ),aW=new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript):","i");if(!aW.test(aU)){aS=aO(aX.className,aU,ao(aZ));if(aS){ae(aU,aS)}}}}function ab(aS){var aT,aU;aS=aS||G.event;aT=aS.which||aS.button;aU=aS.target||aS.srcElement;
if(aS.type==="click"){if(aU){S(aU)}}else{if(aS.type==="mousedown"){if((aT===1||aT===2)&&aU){aN=aT;an=aU}else{aN=an=null}}else{if(aS.type==="mouseup"){if(aT===aN&&aU===an){S(aU)}aN=an=null}}}}function aH(aT,aS){if(aS){t(aT,"mouseup",ab,false);t(aT,"mousedown",ab,false)}else{t(aT,"click",ab,false)}}function am(aT){if(!ap){ap=true;var aU,aS=ar(M,"ignore"),aV=d.links;if(aV){for(aU=0;aU<aV.length;aU++){if(!aS.test(aV[aU].className)){aH(aV[aU],aT)}}}}}function ac(){var aS,aT,aU={pdf:"application/pdf",qt:"video/quicktime",realp:"audio/x-pn-realaudio-plugin",wma:"application/x-mplayer2",dir:"application/x-director",fla:"application/x-shockwave-flash",java:"application/x-java-vm",gears:"application/x-googlegears",ag:"application/x-silverlight"};if(j.mimeTypes&&j.mimeTypes.length){for(aS in aU){aT=j.mimeTypes[aU[aS]];al[aS]=(aT&&aT.enabledPlugin)?"1":"0"}}if(typeof navigator.javaEnabled!=="unknown"&&b(j.javaEnabled)&&j.javaEnabled()){al.java="1"}if(a(G.GearsFactory)){al.gears="1"}al.res=v.width+"x"+v.height;
al.cookie=at()}ac();ag();return{getVisitorId:function(){return(aA())[1]},getVisitorInfo:function(){return aA()},setTrackerUrl:function(aS){aa=aS},setSiteId:function(aS){aQ=aS},setCustomData:function(aS,aT){if(n(aS)){au=aS}else{if(!au){au=[]}au[aS]=aT}},getCustomData:function(){return au},setCustomVariable:function(aT,aS,aU){aE();if(aT>0&&aT<=5){aG[aT]=[aS.slice(0,R),aU.slice(0,R)]}},getCustomVariable:function(aT){var aS;aE();aS=aG[aT];if(aS&&aS[0]===""){return}return aG[aT]},deleteCustomVariable:function(aS){if(this.getCustomVariable(aS)){this.setCustomVariable(aS,"","")}},setLinkTrackingTimer:function(aS){Z=aS},setDownloadExtensions:function(aS){af=aS},addDownloadExtensions:function(aS){af+="|"+aS},setDomains:function(aS){aB=q(aS)?[aS]:aS;aB.push(W)},setIgnoreClasses:function(aS){M=q(aS)?[aS]:aS},setRequestMethod:function(aS){K=aS||"GET"},setReferrerUrl:function(aS){az=aS},setCustomUrl:function(aS){aJ=aS},setDocumentTitle:function(aS){aP=aS},setDownloadClasses:function(aS){aC=q(aS)?[aS]:aS
},setLinkClasses:function(aS){aF=q(aS)?[aS]:aS},discardHashTag:function(aS){ai=aS},setCookieNamePrefix:function(aS){aD=aS;aG=U()},setCookieDomain:function(aS){P=l(aS);ag()},setCookiePath:function(aS){ax=aS;ag()},setVisitorCookieTimeout:function(aS){aR=aS*1000},setSessionCookieTimeout:function(aS){ad=aS*1000},setReferralCookieTimeout:function(aS){Y=aS*1000},setConversionAttributionFirstReferrer:function(aS){aq=aS},setDoNotTrack:function(aS){L=aS&&j.doNotTrack},addListener:function(aT,aS){aH(aT,aS)},enableLinkTracking:function(aS){if(h){am(aS)}else{B.push(function(){am(aS)})}},setHeartBeatTimer:function(aU,aT){var aS=new Date();J=aS.getTime()+aU*1000;ah=aT*1000},killFrame:function(){if(G.location!==G.top.location){G.top.location=G.location}},redirectFile:function(aS){if(G.location.protocol==="file:"){G.location=aS}},trackGoal:function(aS,aU,aT){aL(aS,aU,aT)},trackLink:function(aT,aS,aU){ae(aT,aS,aU)},trackPageView:function(aS,aT){I(aS,aT)}}}function c(){return{push:z}}t(G,"beforeunload",A,false);
x();F=new D();for(C=0;C<_paq.length;C++){z(_paq[C])}_paq=new c();return{addPlugin:function(i,I){w[i]=I},getTracker:function(i,I){return new D(i,I)},getAsyncTracker:function(){return F}}}()),piwik_track,piwik_log=function(b,f,d,g){function a(h){try{return eval("piwik_"+h)}catch(i){}return}var c,e=Piwik.getTracker(d,f);e.setDocumentTitle(b);e.setCustomData(g);if(!!(c=a("tracker_pause"))){e.setLinkTrackingTimer(c)}if(!!(c=a("download_extensions"))){e.setDownloadExtensions(c)}if(!!(c=a("hosts_alias"))){e.setDomains(c)}if(!!(c=a("ignore_classes"))){e.setIgnoreClasses(c)}e.trackPageView();if((a("install_tracker"))){piwik_track=function(i,k,j,h){e.setSiteId(k);e.setTrackerUrl(j);e.trackLink(i,h)};e.enableLinkTracking()}};
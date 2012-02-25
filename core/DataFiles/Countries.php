<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @version $Id$
 *
 * @category Piwik
 * @package DataFiles
 */

/**
 * Country code and continent database.
 *
 * The mapping of countries to continents is from MaxMind with the exception
 * of Central America.  MaxMind groups Central American countries with
 * North America.  Piwik previously grouped Central American countries with
 * South America.  Given this conflict and the fact that most of Central
 * America lies on its own continental plate (i.e., the Caribbean Plate), we
 * currently use a separate continent code (amc).
 */
if(!isset($GLOBALS['Piwik_CountryList']))
{
	// Primary reference: ISO 3166-1 alpha-2
	$GLOBALS['Piwik_CountryList'] = array(
		'ad' => 'eur',
		'ae' => 'asi',
		'af' => 'asi',
		'ag' => 'amc',
		'ai' => 'amc',
		'al' => 'eur',
		'am' => 'asi',
		'ao' => 'afr',
		'aq' => 'ant',
		'ar' => 'ams',
		'as' => 'oce',
		'at' => 'eur',
		'au' => 'oce',
		'aw' => 'amc',
		'ax' => 'eur',
		'az' => 'asi',
		'ba' => 'eur',
		'bb' => 'amc',
		'bd' => 'asi',
		'be' => 'eur',
		'bf' => 'afr',
		'bg' => 'eur',
		'bh' => 'asi',
		'bi' => 'afr',
		'bj' => 'afr',
		'bl' => 'amc',
		'bm' => 'amc',
		'bn' => 'asi',
		'bo' => 'ams',
		'bq' => 'amc',
		'br' => 'ams',
		'bs' => 'amc',
		'bt' => 'asi',
		'bv' => 'ant',
		'bw' => 'afr',
		'by' => 'eur',
		'bz' => 'amc',
		'ca' => 'amn',
		'cc' => 'asi',
		'cd' => 'afr',
		'cf' => 'afr',
		'cg' => 'afr',
		'ch' => 'eur',
		'ci' => 'afr',
		'ck' => 'oce',
		'cl' => 'ams',
		'cm' => 'afr',
		'cn' => 'asi',
		'co' => 'ams',
		'cr' => 'amc',
		'cu' => 'amc',
		'cv' => 'afr',
		'cw' => 'amc',
		'cx' => 'asi',
		'cy' => 'eur',
		'cz' => 'eur',
		'de' => 'eur',
		'dj' => 'afr',
		'dk' => 'eur',
		'dm' => 'amc',
		'do' => 'amc',
		'dz' => 'afr',
		'ec' => 'ams',
		'ee' => 'eur',
		'eg' => 'afr',
		'eh' => 'afr',
		'er' => 'afr',
		'es' => 'eur',
		'et' => 'afr',
		'fi' => 'eur',
		'fj' => 'oce',
		'fk' => 'ams',
		'fm' => 'oce',
		'fo' => 'eur',
		'fr' => 'eur',
		'ga' => 'afr',
		'gb' => 'eur',
		'gd' => 'amc',
		'ge' => 'asi',
		'gf' => 'ams',
		'gg' => 'eur',
		'gh' => 'afr',
		'gi' => 'eur',
		'gl' => 'amn',
		'gm' => 'afr',
		'gn' => 'afr',
		'gp' => 'amc',
		'gq' => 'afr',
		'gr' => 'eur',
		'gs' => 'ant',
		'gt' => 'amc',
		'gu' => 'oce',
		'gw' => 'afr',
		'gy' => 'ams',
		'hk' => 'asi',
		'hm' => 'ant',
		'hn' => 'amc',
		'hr' => 'eur',
		'ht' => 'amc',
		'hu' => 'eur',
		'id' => 'asi',
		'ie' => 'eur',
		'il' => 'asi',
		'im' => 'eur',
		'in' => 'asi',
		'io' => 'asi',
		'iq' => 'asi',
		'ir' => 'asi',
		'is' => 'eur',
		'it' => 'eur',
		'je' => 'eur',
		'jm' => 'amc',
		'jo' => 'asi',
		'jp' => 'asi',
		'ke' => 'afr',
		'kg' => 'asi',
		'kh' => 'asi',
		'ki' => 'oce',
		'km' => 'afr',
		'kn' => 'amc',
		'kp' => 'asi',
		'kr' => 'asi',
		'kw' => 'asi',
		'ky' => 'amc',
		'kz' => 'asi',
		'la' => 'asi',
		'lb' => 'asi',
		'lc' => 'amc',
		'li' => 'eur',
		'lk' => 'asi',
		'lr' => 'afr',
		'ls' => 'afr',
		'lt' => 'eur',
		'lu' => 'eur',
		'lv' => 'eur',
		'ly' => 'afr',
		'ma' => 'afr',
		'mc' => 'eur',
		'md' => 'eur',
		'me' => 'eur',
		'mf' => 'amc',
		'mg' => 'afr',
		'mh' => 'oce',
		'mk' => 'eur',
		'ml' => 'afr',
		'mm' => 'asi',
		'mn' => 'asi',
		'mo' => 'asi',
		'mp' => 'oce',
		'mq' => 'amc',
		'mr' => 'afr',
		'ms' => 'amc',
		'mt' => 'eur',
		'mu' => 'afr',
		'mv' => 'asi',
		'mw' => 'afr',
		'mx' => 'amn',
		'my' => 'asi',
		'mz' => 'afr',
		'na' => 'afr',
		'nc' => 'oce',
		'ne' => 'afr',
		'nf' => 'oce',
		'ng' => 'afr',
		'ni' => 'amc',
		'nl' => 'eur',
		'no' => 'eur',
		'np' => 'asi',
		'nr' => 'oce',
		'nu' => 'oce',
		'nz' => 'oce',
		'om' => 'asi',
		'pa' => 'amc',
		'pe' => 'ams',
		'pf' => 'oce',
		'pg' => 'oce',
		'ph' => 'asi',
		'pk' => 'asi',
		'pl' => 'eur',
		'pm' => 'amn',
		'pn' => 'oce',
		'pr' => 'amc',
		'ps' => 'asi',
		'pt' => 'eur',
		'pw' => 'oce',
		'py' => 'ams',
		'qa' => 'asi',
		're' => 'afr',
		'ro' => 'eur',
		'rs' => 'eur',
		'ru' => 'eur',
		'rw' => 'afr',
		'sa' => 'asi',
		'sb' => 'oce',
		'sc' => 'afr',
		'sd' => 'afr',
		'se' => 'eur',
		'sg' => 'asi',
		'sh' => 'afr',
		'si' => 'eur',
		'sj' => 'eur',
		'sk' => 'eur',
		'sl' => 'afr',
		'sm' => 'eur',
		'sn' => 'afr',
		'so' => 'afr',
		'sr' => 'ams',
		'ss' => 'afr',
		'st' => 'afr',
		'sv' => 'amc',
		'sx' => 'amc',
		'sy' => 'asi',
		'sz' => 'afr',
		'tc' => 'amc',
		'td' => 'afr',
		'tf' => 'ant',
		'tg' => 'afr',
		'th' => 'asi',
		'ti' => 'asi',
		'tj' => 'asi',
		'tk' => 'oce',
		'tl' => 'asi',
		'tm' => 'asi',
		'tn' => 'afr',
		'to' => 'oce',
		'tr' => 'eur',
		'tt' => 'amc',
		'tv' => 'oce',
		'tw' => 'asi',
		'tz' => 'afr',
		'ua' => 'eur',
		'ug' => 'afr',
		'um' => 'oce',
		'us' => 'amn',
		'uy' => 'ams',
		'uz' => 'asi',
		'va' => 'eur',
		'vc' => 'amc',
		've' => 'ams',
		'vg' => 'amc',
		'vi' => 'amc',
		'vn' => 'asi',
		'vu' => 'oce',
		'wf' => 'oce',
		'ws' => 'oce',
		'ye' => 'asi',
		'yt' => 'afr',
		'za' => 'afr',
		'zm' => 'afr',
		'zw' => 'afr',
	);

	// codes for internal use
	$GLOBALS['Piwik_CountryList_Extras'] = array(
		// unknown
		'xx' => 'unk',

		// exceptionally reserved
		'ac' => 'afr', // .ac TLD
		'cp' => 'amc',
		'dg' => 'asi',
		'ea' => 'afr',
		'eu' => 'eur', // .eu TLD
		'fx' => 'eur',
		'ic' => 'afr',
		'su' => 'eur', // .su TLD
		'ta' => 'afr',
		'uk' => 'eur', // .uk TLD

		// transitionally reserved
		'an' => 'amc', // former Netherlands Antilles
		'bu' => 'asi',
		'cs' => 'eur', // former Serbia and Montenegro
		'nt' => 'asi',
		'sf' => 'eur',
		'tp' => 'oce', // .tp TLD
		'yu' => 'eur', // .yu TLD
		'zr' => 'afr',

		// MaxMind GeoIP specific
		'a1' => 'unk',
		'a2' => 'unk',
		'ap' => 'asi',
		'o1' => 'unk',

		// Catalonia (Spain)
		'cat' => 'eur',
	);
}

if(!isset($GLOBALS['Piwik_ContinentList']))
{
	// Primary reference: ISO 3166-1 alpha-2
	$GLOBALS['Piwik_ContinentList'] = array(
		'unk', // unknown
		'amn', // North America
		'amc', // Central America
		'ams', // South America
		'eur', // Europe
		'afr', // Africa
		'asi', // Asia
		'oce', // Oceania
		'ant', // Antarctica
	);
}

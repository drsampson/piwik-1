<?php 
$translations = array(
	'General_Locale' => 'es_ES.UTF-8',
	'General_TranslatorName' => 'Alejandro Escario',
	'General_TranslatorEmail' => 'escarion@gmail.com',
	'General_EnglishLanguageName' => 'Spanish',
	'General_OriginalLanguageName' => 'Español',
	'General_Unknown' => 'Desconocido',
	'General_Required' => '%s necesario',
	'General_Error' => 'Error',
	'General_Warning' => 'Advertencia',
	'General_BackToHomepage' => 'Volver a la página de inicio',
	'General_Yes' => 'Si',
	'General_No' => 'No',
	'General_Delete' => 'Borrar',
	'General_Edit' => 'Editar',
	'General_Ok' => 'Ok',
	'General_Close' => 'Cerrar',
	'General_Logout' => 'Desconectarse',
	'General_Done' => 'Hecho',
	'General_LoadingData' => 'Cargando...',
	'General_ErrorRequest' => 'Oops&hellip; Problema durante la petición, por favor pruebe de nuevo.',
	'General_Next' => 'Siguiente',
	'General_Previous' => 'Anterior',
	'General_Table' => 'Tabla',
	'General_Piechart' => 'Gráfico circular',
	'General_TagCloud' => 'Nube de etiquetas',
	'General_VBarGraph' => 'Gráfico de barras',
	'General_Refresh' => 'Actualizar página',
	'General_ColumnNbUniqVisitors' => 'Visitantes únicos',
	'General_ColumnNbVisits' => 'Visitas',
	'General_ColumnLabel' => 'Etiqueta',
	'General_Save' => 'Guardar',
	'CorePluginsAdmin_Plugins' => 'Plugins',
	'CorePluginsAdmin_Activated' => 'Activado',
	'CorePluginsAdmin_ActivatedHelp' => 'Este plugin no se puede desactivar',
	'CorePluginsAdmin_Deactivate' => 'Desactivar',
	'CorePluginsAdmin_Activate' => 'Activar',
	'CorePluginsAdmin_MenuPlugins' => 'Plugins',
	'API_QuickDocumentation' => '<h2>Documentación de API</h2><p>Si usted no tiene datos hoy, primero puedes <a href=\'misc/generateVisits.php\' target=_blank>generar algunos datos</a> usando el script de generación de visitas.</p><p>Usted puede probar los distintos formatos disponibles para cada método. Es realmente sencillo extraer el dato que usted desee desde piwik!</p><p><b>Para más información échale un  ojo a<a href=\'http://dev.piwik.org/trac/wiki/API\'>La documentación oficial de API</a> o la <a href=\'http://dev.piwik.org/trac/wiki/API/Reference\'>Referencia API</a>.</b></P><h2>Autentificación de usuario</h2><p>Si desea <b>obtener los datos en tus scripts, en un crontab, etc. </b> necesitarás añadir el parámetro  <code><u>&token_auth=%s</u></code> a las llamadas de la API a URLs que requieren la identificación del usuario.</p><p>Esta token_auth es secreta, así como tu contraseña de usuario, <b>¡no se la dé a nadie!</p>',
	'API_LoadedAPIs' => 'Se han cargado %s APIs con éxito',
	'CoreHome_NoPrivileges' => 'Estás identificado como \'%s\', pero parece que no tienes los permisos en Piwik.<br />Contacta con el administrador de ti sistema Piwik para que te dé acceso para entrar a la página.',
	'CoreHome_JavascriptDisabled' => 'JavaScript tiene que estar activado si quiere ver Piwik de la forma estándar.<br>Parece que su navegador no soporta JavaScipt, o que está deshabilitado.<br>Para usar la vista estándar, active JavaScript desde las opciones de su navegador, después %1svuelva a intentarlo%2s.<br>',
	'CoreHome_TableNoData' => 'No hay datos para esta tabla.',
	'CoreHome_CategoryNoData' => 'No hay datos en esta categoría. Intente "Incluir todos los datos".',
	'CoreHome_ShowJSCode' => 'Ver el código javascript para insertar',
	'CoreHome_IncludeAllPopulation_js' => 'Incluir todos los datos',
	'CoreHome_ExcludeLowPopulation_js' => 'Excluir los datos menos relevantes',
	'CoreHome_PageOf_js' => '%s de %s',
	'CoreHome_Loading_js' => 'Cargando...',
	'CoreHome_LocalizedDateFormat' => '%A %d %B %Y',
	'CoreHome_PeriodDay' => 'Día',
	'CoreHome_PeriodWeek' => 'Semana',
	'CoreHome_PeriodMonth' => 'Mes',
	'CoreHome_PeriodYear' => 'Año',
	'CoreHome_DaySu_js' => 'D',
	'CoreHome_DayMo_js' => 'L',
	'CoreHome_DayTu_js' => 'M',
	'CoreHome_DayWe_js' => 'X',
	'CoreHome_DayTh_js' => 'J',
	'CoreHome_DayFr_js' => 'V',
	'CoreHome_DaySa_js' => 'S',
	'CoreHome_MonthJanuary_js' => 'Enero',
	'CoreHome_MonthFebruary_js' => 'Febrero',
	'CoreHome_MonthMarch_js' => 'Marzo',
	'CoreHome_MonthApril_js' => 'Abril',
	'CoreHome_MonthMay_js' => 'Mayo',
	'CoreHome_MonthJune_js' => 'Junio',
	'CoreHome_MonthJuly_js' => 'Julio',
	'CoreHome_MonthAugust_js' => 'Agosto',
	'CoreHome_MonthSeptember_js' => 'Septiembre',
	'CoreHome_MonthOctober_js' => 'Octubre',
	'CoreHome_MonthNovember_js' => 'Noviembre',
	'CoreHome_MonthDecember_js' => 'Diciembre',
	'Actions_SubmenuPages' => 'Páginas',
	'Actions_SubmenuOutlinks' => 'Enlaces externos',
	'Actions_SubmenuDownloads' => 'Descargas',
	'Dashboard_AddWidget' => 'Añadir un widget ...',
	'Dashboard_DeleteWidgetConfirm' => '¿Está seguro de que desea borrar este widget desde el tablón?',
	'Dashboard_SelectWidget' => 'Seleccione un widget para añadirlo en el tablón',
	'Dashboard_AddPreviewedWidget' => 'Añadir la previsualización del wiget al tablón',
	'Dashboard_WidgetPreview' => 'Previsualización del widget',
	'Dashboard_TitleWidgetInDashboard_js' => 'El widget ya se encuentra en el tablón',
	'Dashboard_TitleClickToAdd_js' => 'Clic para añadir al tablón',
	'Dashboard_LoadingPreview_js' => 'Cargando vista previa, espere por favor...',
	'Dashboard_LoadingWidget_js' => 'Cargando widget, espere por favor...',
	'Dashboard_WidgetNotFound_js' => 'Widget no encontrado',
	'Referers_SearchEngines' => 'Motores de búsqueda',
	'Referers_Keywords' => 'Palabras clave',
	'Referers_DirectEntry' => 'Entrada directa',
	'Referers_Websites' => 'Páginas web',
	'Referers_Partners' => 'Compañeros',
	'Referers_Newsletters' => 'Boletines',
	'Referers_Campaigns' => 'Campañas',
	'Referers_Evolution' => 'Evolución en el periodo',
	'Referers_Type' => 'Tipo de Referer',
	'Referers_TypeDirectEntries' => '%s entradas directas',
	'Referers_TypeSearchEngines' => '%s  desde motores de búsqueda',
	'Referers_TypePartners' => '%s desde compañeros',
	'Referers_TypeWebsites' => '%s desde otras webs',
	'Referers_TypeNewsletters' => '%s desde boletines',
	'Referers_TypeCampaigns' => '%s desde campañas',
	'Referers_Other' => 'Otros',
	'Referers_OtherDistinctSearchEngines' => '%s motores de búsqueda distintos',
	'Referers_OtherDistinctKeywords' => '%s palabras clave distintas',
	'Referers_OtherDistinctWebsites' => '%1s páginas web distintas (usando %2s URLs diferentes)',
	'Referers_OtherDistinctPartners' => '%1s compañeros distintas (usando %2s URLs diferentes)',
	'Referers_OtherDistinctCampaigns' => '%s campañas distintas',
	'Referers_TagCloud' => 'Nube de etiquetas de salida',
	'Referers_SubmenuEvolution' => 'Evolución',
	'Referers_SubmenuSearchEngines' => 'Motores de búsqueda y palabras clave',
	'Referers_SubmenuWebsites' => 'Páginas web',
	'Referers_SubmenuCampaigns' => 'Campañas',
	'Referers_SubmenuPartners' => 'Compañeros',
	'Referers_WidgetKeywords' => 'Lista de palabras clave',
	'Referers_WidgetPartners' => 'Lista de compañeros',
	'Referers_WidgetCampaigns' => 'Lista de campañas',
	'Referers_WidgetExternalWebsites' => 'Lista de webs externas',
	'Referers_WidgetSearchEngines' => 'Mejores motores de búsqueda',
	'Referers_WidgetOverview' => 'General',
	'UserSettings_BrowserFamilies' => 'Familias de navegadores',
	'UserSettings_Browsers' => 'Navegadores',
	'UserSettings_Plugins' => 'Plugins',
	'UserSettings_Configurations' => 'Configuraciones',
	'UserSettings_OperatinsSystems' => 'Sistemas Operativos',
	'UserSettings_Resolutions' => 'Resoluciones',
	'UserSettings_WideScreen' => 'Pantalla panorámica',
	'UserSettings_WidgetResolutions' => 'Resoluciones de pantalla',
	'UserSettings_WidgetBrowsers' => 'Navegadores de los visitantes',
	'UserSettings_WidgetPlugins' => 'Lista de plugins',
	'UserSettings_WidgetWidescreen' => 'Normal / Panorámica',
	'UserSettings_WidgetBrowserFamilies' => 'Buscadores por familia',
	'UserSettings_WidgetOperatingSystems' => 'Sistemas Operativos',
	'UserSettings_WidgetGlobalVisitors' => 'Configuración global de visitantes',
	'UserSettings_SubmenuSettings' => 'Ajustes',
	'UserCountry_Country' => 'País',
	'UserCountry_Continent' => 'Continente',
	'UserCountry_DistinctCountries' => '%s continentes distintos',
	'UserCountry_SubmenuLocations' => 'Lugares',
	'UserCountry_WidgetContinents' => 'Continentes de los visitantes',
	'UserCountry_WidgetCountries' => 'Países de los visitantes',
	'UserCountry_country_ac' => 'Isla Ascensión',
	'UserCountry_country_ad' => 'Andorra',
	'UserCountry_country_ae' => 'Emiratos Árabes Unidos',
	'UserCountry_country_af' => 'Afganistán',
	'UserCountry_country_ag' => 'Antigua y Barbuda',
	'UserCountry_country_ai' => 'Anguila',
	'UserCountry_country_al' => 'Albania',
	'UserCountry_country_am' => 'Armenia',
	'UserCountry_country_an' => 'Antillas Neerlandesas',
	'UserCountry_country_ao' => 'Angola',
	'UserCountry_country_aq' => 'Antártida',
	'UserCountry_country_ar' => 'Argentina',
	'UserCountry_country_as' => 'América Samoa',
	'UserCountry_country_at' => 'Austria',
	'UserCountry_country_au' => 'Australia',
	'UserCountry_country_aw' => 'Aruba',
	'UserCountry_country_az' => 'Azerbaiyán',
	'UserCountry_country_ba' => 'Bosnia Herzegovina',
	'UserCountry_country_bb' => 'Barbados',
	'UserCountry_country_bd' => 'Bangladesh',
	'UserCountry_country_be' => 'Bélgica',
	'UserCountry_country_bf' => 'Burkina Faso',
	'UserCountry_country_bg' => 'Bulgaria',
	'UserCountry_country_bh' => 'Bahrein',
	'UserCountry_country_bi' => 'Burundi',
	'UserCountry_country_bj' => 'Benin',
	'UserCountry_country_bm' => 'Bermudas',
	'UserCountry_country_bn' => 'Bruneo',
	'UserCountry_country_bo' => 'Bolivia',
	'UserCountry_country_br' => 'Brasil',
	'UserCountry_country_bs' => 'Bahamas',
	'UserCountry_country_bt' => 'Bután',
	'UserCountry_country_bv' => 'Isla Bouvet',
	'UserCountry_country_bw' => 'Botsuana',
	'UserCountry_country_by' => 'Bielorrusia',
	'UserCountry_country_bz' => 'Belice',
	'UserCountry_country_ca' => 'Canadá',
	'UserCountry_country_cc' => 'Islas Cocos',
	'UserCountry_country_cd' => 'Congo, La República Democrática',
	'UserCountry_country_cf' => 'República Centroafricana',
	'UserCountry_country_cg' => 'Congo',
	'UserCountry_country_ch' => 'Suiza',
	'UserCountry_country_ci' => 'Cote D\'Ivoire',
	'UserCountry_country_ck' => 'Islas Cook',
	'UserCountry_country_cl' => 'Chile',
	'UserCountry_country_cm' => 'Camerún',
	'UserCountry_country_cn' => 'China',
	'UserCountry_country_co' => 'Colombia',
	'UserCountry_country_cr' => 'Costa Rica',
	'UserCountry_country_cs' => 'Serbia Montenegro',
	'UserCountry_country_cu' => 'Cuba',
	'UserCountry_country_cv' => 'Cabo verde',
	'UserCountry_country_cx' => 'Islas Christmas',
	'UserCountry_country_cy' => 'Chipre',
	'UserCountry_country_cz' => 'República Checa',
	'UserCountry_country_de' => 'Alemania',
	'UserCountry_country_dj' => 'Yibuti',
	'UserCountry_country_dk' => 'Dinamarca',
	'UserCountry_country_dm' => 'Dominica',
	'UserCountry_country_do' => 'República Dominicana',
	'UserCountry_country_dz' => 'Argelia',
	'UserCountry_country_ec' => 'Ecuador',
	'UserCountry_country_ee' => 'Estonia',
	'UserCountry_country_eg' => 'Egipto',
	'UserCountry_country_eh' => 'Sáhara Occidental',
	'UserCountry_country_er' => 'Eritrea',
	'UserCountry_country_es' => 'España',
	'UserCountry_country_et' => 'Etiopía',
	'UserCountry_country_fi' => 'Finlandia',
	'UserCountry_country_fj' => 'Fiji',
	'UserCountry_country_fk' => 'Malvinas',
	'UserCountry_country_fm' => 'Micronesia, Estados Federados',
	'UserCountry_country_fo' => 'Islas Feroe',
	'UserCountry_country_fr' => 'Francia',
	'UserCountry_country_ga' => 'Gabón',
	'UserCountry_country_gd' => 'Granada',
	'UserCountry_country_ge' => 'Georgia',
	'UserCountry_country_gf' => 'Guayana Francesa',
	'UserCountry_country_gg' => 'Guernsey',
	'UserCountry_country_gh' => 'Ghana',
	'UserCountry_country_gi' => 'Gibraltar',
	'UserCountry_country_gl' => 'Groenlandia',
	'UserCountry_country_gm' => 'Gambia',
	'UserCountry_country_gn' => 'Guinea',
	'UserCountry_country_gp' => 'Guadalupe',
	'UserCountry_country_gq' => 'Guinea Ecuatorial',
	'UserCountry_country_gr' => 'Grecia',
	'UserCountry_country_gs' => 'Islas Georgia del Sur y  Sandwich del Sur',
	'UserCountry_country_gt' => 'Guatemala',
	'UserCountry_country_gu' => 'Guam',
	'UserCountry_country_gw' => 'Guinea-Bissau',
	'UserCountry_country_gy' => 'Guayana',
	'UserCountry_country_hk' => 'Hong Kong',
	'UserCountry_country_hm' => 'Islas Heard y McDonald',
	'UserCountry_country_hn' => 'Honduras',
	'UserCountry_country_hr' => 'Croacia',
	'UserCountry_country_ht' => 'Haiti',
	'UserCountry_country_hu' => 'Hungría',
	'UserCountry_country_id' => 'Indonesia',
	'UserCountry_country_ie' => 'Irlanda',
	'UserCountry_country_il' => 'Israel',
	'UserCountry_country_im' => 'Isla de Man',
	'UserCountry_country_in' => 'India',
	'UserCountry_country_io' => 'Territorio Británico del Océano Índico',
	'UserCountry_country_iq' => 'Iraq',
	'UserCountry_country_ir' => 'Irán, República Islámica',
	'UserCountry_country_is' => 'Islandia',
	'UserCountry_country_it' => 'Italia',
	'UserCountry_country_je' => 'Jersey',
	'UserCountry_country_jm' => 'Jamaica',
	'UserCountry_country_jo' => 'Jordania',
	'UserCountry_country_jp' => 'Japón',
	'UserCountry_country_ke' => 'Kenia',
	'UserCountry_country_kg' => 'Kirguistán',
	'UserCountry_country_kh' => 'Camboya',
	'UserCountry_country_ki' => 'Kiribati',
	'UserCountry_country_km' => 'Comores',
	'UserCountry_country_kn' => 'San Kitts and Nevis',
	'UserCountry_country_kp' => 'Corea, República Democrática Popular de',
	'UserCountry_country_kr' => 'Corea, República de',
	'UserCountry_country_kw' => 'Kuwait',
	'UserCountry_country_ky' => 'Islas Caimán',
	'UserCountry_country_kz' => 'Kazajstán',
	'UserCountry_country_la' => 'Laos',
	'UserCountry_country_lb' => 'Líbano',
	'UserCountry_country_lc' => 'Santa Lucía',
	'UserCountry_country_li' => 'Liechtenstein',
	'UserCountry_country_lk' => 'Sri Lanka',
	'UserCountry_country_lr' => 'Liberia',
	'UserCountry_country_ls' => 'Lesotho',
	'UserCountry_country_lt' => 'Lituania',
	'UserCountry_country_lu' => 'Luxemburgo',
	'UserCountry_country_lv' => 'Letonia',
	'UserCountry_country_ly' => 'Libia',
	'UserCountry_country_ma' => 'Marruecos',
	'UserCountry_country_mc' => 'Mónaco',
	'UserCountry_country_md' => 'Moldavia, República de',
	'UserCountry_country_mg' => 'Madagascar',
	'UserCountry_country_mh' => 'Islas Marshall',
	'UserCountry_country_mk' => 'Macedonia',
	'UserCountry_country_ml' => 'Mali',
	'UserCountry_country_mm' => 'Myanmar',
	'UserCountry_country_mn' => 'Mongolia',
	'UserCountry_country_mo' => 'Macao',
	'UserCountry_country_mp' => 'Islas Marianas del Norte',
	'UserCountry_country_mq' => 'Martinica',
	'UserCountry_country_mr' => 'Mauritania',
	'UserCountry_country_ms' => 'Monserrat',
	'UserCountry_country_mt' => 'Malta',
	'UserCountry_country_mu' => 'Mauricio',
	'UserCountry_country_mv' => 'Maldivas',
	'UserCountry_country_mw' => 'Malawi',
	'UserCountry_country_mx' => 'Mexico',
	'UserCountry_country_my' => 'Malasia',
	'UserCountry_country_mz' => 'Mozambique',
	'UserCountry_country_na' => 'Namibia',
	'UserCountry_country_nc' => 'Nueva Caledonia',
	'UserCountry_country_ne' => 'Niger',
	'UserCountry_country_nf' => 'Isla Norfolk',
	'UserCountry_country_ng' => 'Nigeria',
	'UserCountry_country_ni' => 'Nicaragua',
	'UserCountry_country_nl' => 'Países bajos',
	'UserCountry_country_no' => 'Noruega',
	'UserCountry_country_np' => 'Nepal',
	'UserCountry_country_nr' => 'Nauru',
	'UserCountry_country_nu' => 'Niue',
	'UserCountry_country_nz' => 'Nueva Zelanda',
	'UserCountry_country_om' => 'Omán',
	'UserCountry_country_pa' => 'Panamá',
	'UserCountry_country_pe' => 'Perú',
	'UserCountry_country_pf' => 'Polinesia Francesa',
	'UserCountry_country_pg' => 'Papua Nueva Guinea',
	'UserCountry_country_ph' => 'Filipinas',
	'UserCountry_country_pk' => 'Pakistán',
	'UserCountry_country_pl' => 'Polonia',
	'UserCountry_country_pm' => 'San Pedro y Miquelón',
	'UserCountry_country_pn' => 'Pitcairn',
	'UserCountry_country_pr' => 'Puesto Rico',
	'UserCountry_country_ps' => 'Territorio Palestino',
	'UserCountry_country_pt' => 'Portugal',
	'UserCountry_country_pw' => 'Palau',
	'UserCountry_country_py' => 'Paraguay',
	'UserCountry_country_qa' => 'Qatar',
	'UserCountry_country_re' => 'Isla de Reunion',
	'UserCountry_country_ro' => 'Rumanía',
	'UserCountry_country_ru' => 'Federación Rusa',
	'UserCountry_country_rs' => 'Rusia',
	'UserCountry_country_rw' => 'Ruanda',
	'UserCountry_country_sa' => 'Arabia Saudí',
	'UserCountry_country_sb' => 'Islas Salomón',
	'UserCountry_country_sc' => 'Seychelles',
	'UserCountry_country_sd' => 'Sudán',
	'UserCountry_country_se' => 'Suiza',
	'UserCountry_country_sg' => 'Singaur',
	'UserCountry_country_sh' => 'Santa Helena',
	'UserCountry_country_si' => 'Eslovenia',
	'UserCountry_country_sj' => 'Svalbard',
	'UserCountry_country_sk' => 'Eslovaquia',
	'UserCountry_country_sl' => 'Sierra Leona',
	'UserCountry_country_sm' => 'San Marino',
	'UserCountry_country_sn' => 'Senegal',
	'UserCountry_country_so' => 'Somalia',
	'UserCountry_country_sr' => 'Surinam',
	'UserCountry_country_st' => 'Santo Tomé y Príncipe',
	'UserCountry_country_su' => 'Antigua U.S.S.R.',
	'UserCountry_country_sv' => 'El Salvador',
	'UserCountry_country_sy' => 'República Árabe Siria',
	'UserCountry_country_sz' => 'Suazilandia',
	'UserCountry_country_tc' => 'Islas Turcas y Caicos',
	'UserCountry_country_td' => 'Chad',
	'UserCountry_country_tf' => 'Territorios Franceses del Sur',
	'UserCountry_country_tg' => 'Togo',
	'UserCountry_country_th' => 'Tailandia',
	'UserCountry_country_tj' => 'Tayikistán',
	'UserCountry_country_tk' => 'Tokelau',
	'UserCountry_country_tm' => 'Turkmenistán',
	'UserCountry_country_tn' => 'Túnez',
	'UserCountry_country_to' => 'Tonga',
	'UserCountry_country_tp' => 'Timor Oriental',
	'UserCountry_country_tr' => 'Turquía',
	'UserCountry_country_tt' => 'Trinidad y Tobago',
	'UserCountry_country_tv' => 'Tuvalu',
	'UserCountry_country_tw' => 'Taiwán',
	'UserCountry_country_tz' => 'Tanzania, República Unida de',
	'UserCountry_country_ua' => 'Ucrania',
	'UserCountry_country_ug' => 'Uganda',
	'UserCountry_country_uk' => 'Reino Unido',
	'UserCountry_country_gb' => 'Gran Bretaña',
	'UserCountry_country_um' => 'Islas Menores de los EEUU',
	'UserCountry_country_us' => 'Estados Unidos',
	'UserCountry_country_uy' => 'Uruguay',
	'UserCountry_country_uz' => 'Uzbekistán',
	'UserCountry_country_va' => 'Ciudad del Vaticano',
	'UserCountry_country_vc' => 'San Vicente y las Granadinas',
	'UserCountry_country_ve' => 'Venezuela',
	'UserCountry_country_vg' => 'Islas Vírgenes Británicas',
	'UserCountry_country_vi' => 'Islas Vírgenes, EE.UU. ',
	'UserCountry_country_vn' => 'Vietnam',
	'UserCountry_country_vu' => 'Vanuatu',
	'UserCountry_country_wf' => 'Wallis y Futuna',
	'UserCountry_country_ws' => 'Samoa',
	'UserCountry_country_ye' => 'Yemen',
	'UserCountry_country_yt' => 'Mayotte',
	'UserCountry_country_yu' => 'Yugoslavia',
	'UserCountry_country_za' => 'Sudáfrica',
	'UserCountry_country_zm' => 'Zambia',
	'UserCountry_country_zr' => 'Zaire',
	'UserCountry_country_zw' => 'Zimbabue',
	'UserCountry_continent_eur' => 'Europa',
	'UserCountry_continent_afr' => 'África',
	'UserCountry_continent_asi' => 'Asia',
	'UserCountry_continent_ams' => 'América del Sur y Central',
	'UserCountry_continent_amn' => 'América del Norte',
	'UserCountry_continent_oce' => 'Oceanía',
	'VisitsSummary_NbVisits' => '%s visitas',
	'VisitsSummary_NbUniqueVisitors' => '%s visitas únicas',
	'VisitsSummary_NbActions' => '%s acciones (impresiones de página)',
	'VisitsSummary_TotalTime' => '%s tiempo total de los usuarios online',
	'VisitsSummary_MaxNbActions' => '%s acciones máximas en una visita',
	'VisitsSummary_NbBounced' => '%s visitantes han salido (salido de la página después de una página)',
	'VisitsSummary_Evolution' => 'Evolución en los últimos 30 %ss',
	'VisitsSummary_Report' => 'Informe',
	'VisitsSummary_GenerateTime' => '%s segundos para generar la página',
	'VisitsSummary_GenerateQueries' => '%s consultas ejecutadas',
	'VisitsSummary_WidgetLastVisits' => 'Gráfico de las últimas visitas ',
	'VisitsSummary_WidgetVisits' => 'Visión general de visitas',
	'VisitsSummary_WidgetLastVisitors' => 'Gráfico de últimos visitantes únicos',
	'VisitsSummary_WidgetOverviewGraph' => 'Visión general con gráfico',
	'VisitsSummary_SubmenuOverview' => 'Visión general',
	'VisitFrequency_Evolution' => 'Evolución en el periodo',
	'VisitFrequency_ReturnVisits' => '%s visitantes que han vuelto',
	'VisitFrequency_ReturnActions' => '%s acciones realizadas por los visitantes que han vuelto',
	'VisitFrequency_ReturnMaxActions' => '%s máximo de acciones por un sistante que vuelve',
	'VisitFrequency_ReturnTotalTime' => '%s tiempo total empleado por visitantes que han vuelto',
	'VisitFrequency_ReturnBounces' => '%s veces que ha abandonado la página un visitante que ha vuelto',
	'VisitFrequency_WidgetOverview' => 'Listado de frecuencias',
	'VisitFrequency_WidgetGraphReturning' => 'Gráfico de visitantes que vuelven',
	'VisitFrequency_SubmenuFrequency' => 'Frecuencia',
	'VisitTime_LocalTime' => 'Visitas por hora local',
	'VisitTime_ServerTime' => 'Visitas por hora del servidor',
	'VisitTime_WidgetLocalTime' => 'Visitas por hora local',
	'VisitTime_WidgetServerTime' => 'Visitas por hora del servidor',
	'VisitTime_SubmenuTimes' => 'Tiempos',
	'VisitorInterest_VisitsPerDuration' => 'Visitas por duración',
	'VisitorInterest_VisitsPerNbOfPages' => 'Visitas por número de páginas visitadas',
	'VisitorInterest_WidgetLengths' => 'Duración de las visitas',
	'VisitorInterest_WidgetPages' => 'Páginas vistas por visita',
	'VisitorInterest_SubmenuFrequencyLoyalty' => 'Frecuencia y Lealtad',
	'Provider_WidgetProviders' => 'Proveedores',
	'Provider_SubmenuLocationsProvider' => 'Localizaciones y proveedores',
	'Login_LoginPasswordNotCorrect' => 'Usuario y contraseña incorrectos',
	'Login_Login' => 'Usuario',
	'Login_Password' => 'Contraseña',
	'Login_LoginOrEmail' => 'Login o E-mail',
	'Login_LogIn' => 'Conectar',
	'Login_Logout' => 'Desconectar',
	'Login_LostYourPassword' => '¿Olvidó la contraseña?',
	'Login_RemindPassword' => 'Recordar Contraseña',
	'Login_PasswordReminder' => 'Por favor, introduzca su nombre de usuario o dirección de email. Recibirá una nueva contraseña por email',
	'Login_InvalidUsernameEmail' => 'Nombre de usuario y/o email incorrectos',
	'Login_MailTopicPasswordRecovery' => 'Recuperar contraseña',
	'Login_MailPasswordRecoveryBody' => 'Hola %1s,\n\n Tu nueva contraseña es: %2s\n\n Puedes conectarte ahora en: %3s',
	'Login_PasswordSent' => 'La contraseña acaba de ser enviada. Comprueba tu email.',
	'Login_ContactAdmin' => 'Posible razón: su hosting puede tener deshabilitado la función mail().<br>Por favor contacte con su administrador de piwik.',
	'UsersManager_ManageAccess' => 'Administrar el Acceso',
	'UsersManager_Sites' => 'Sitios',
	'UsersManager_AllWebsites' => 'Todas las webs',
	'UsersManager_ApplyToAllWebsites' => 'Aplicar a todos los sitios',
	'UsersManager_User' => 'Usuario',
	'UsersManager_PrivNone' => 'Acceso denegado',
	'UsersManager_PrivView' => 'Ver',
	'UsersManager_PrivAdmin' => 'Admin',
	'UsersManager_ChangeAllConfirm' => '¿Está seguro que quiere cambiar \'%s\' permisos en todas las páginas web?',
	'UsersManager_Login' => 'Conectar',
	'UsersManager_Password' => 'Contraseña',
	'UsersManager_Email' => 'Email',
	'UsersManager_Alias' => 'Alias',
	'UsersManager_Token' => 'token_auth',
	'UsersManager_Edit' => 'Editar',
	'UsersManager_AddUser' => 'Añadir un nuevo usuario',
	'UsersManager_MenuUsers' => 'Usuario',
	'UsersManager_DeleteConfirm_js' => '¿Está seguro que desea eliminar al usuario %s?',
	'UsersManager_ExceptionLoginExists' => 'Login \'%s\' ya existe.',
	'UsersManager_ExceptionEmailExists' => 'Ya existe un usuario con el email \'%s\'.',
	'UsersManager_ExceptionInvalidLogin' => 'El login solo puede contener letras, números, \'_\' , \'-\' o \'.\'',
	'UsersManager_ExceptionInvalidPassword' => 'La longitud de la contraseña ha de estar entre 6 y 26 caracteres',
	'UsersManager_ExceptionInvalidEmail' => 'El email no tiene un formato correcto.',
	'UsersManager_ExceptionDeleteDoesNotExist' => 'El usuario \'%s\' no existe, por lo que, no puede ser borrado.',
	'UsersManager_ExceptionAdminAnonymous' => 'No puede concederle el acceso de \'administrador\' a un usuario \'anónimo\'.',
	'UsersManager_ExceptionEditAnonymous' => 'El usuario anónimo no puede ser borrado o editado, ya que es usado por Piwik para identificar a usuarios  no conectados. Por ejemplo, puede hacer sus estadísticas públicas para permitirle la visión a los visitantes \'anónimos\'.',
	'UsersManager_ExceptionUserDoesNotExist' => 'El usuario \'%s\' no existe.',
	'UsersManager_ExceptionAccessValues' => 'El parámetro debe tener acceso a uno de los siguientes valores: [%s]',
	'SitesManager_Sites' => 'Sitios',
	'SitesManager_JsCode' => 'Código Javascript',
	'SitesManager_JsCodeHelp' => 'Aquí está el código Javascript que ha de incluir en todas sus páginas',
	'SitesManager_ShowJsCode' => 'mostrar código',
	'SitesManager_NoWebsites' => 'Usted no tiene ninguna web que administrar',
	'SitesManager_AddSite' => 'Añadir un sitio',
	'SitesManager_Id' => 'ID',
	'SitesManager_Name' => 'Nombre',
	'SitesManager_Urls' => 'URLs',
	'SitesManager_MenuSites' => 'Sitios',
	'SitesManager_DeleteConfirm_js' => '¿Está seguro de querer borrar el sitio %s?',
	'SitesManager_ExceptionDeleteSite' => 'No es posible borrar este sitio ya que es el único que hay registrado. Antes de borrarlo, añada uno nuevo.',
	'SitesManager_ExceptionNoUrl' => 'Debe especificar al menos una URL de su sitio.',
	'SitesManager_ExceptionEmptyName' => 'El nombre del sitio no puede estar vacío.',
	'SitesManager_ExceptionInvalidUrl' => 'La URL \'%s\' no es una URL válida.',
	'Installation_Installation' => 'Instalación',
	'Installation_InstallationStatus' => 'Estado de la instalación',
	'Installation_PercentDone' => '%s %%Hecho',
	'Installation_NoConfigFound' => 'El archivo de configuración de Piwik no se ha encontrado, y usted está intentando acceder a una página de Piwik.<br><b>&nbsp;&nbsp;&raquo; Puede <a href=\'index.php\'>instalar Piwik ahora</a></b><br><small>Si instaló Piwik con anterioridad y tiene tablas en su base de datos, no se preocupe, puede reutilizar dichas tablas y mantener los datos que se encuentran en ellas!</small>',
	'Installation_MysqlSetup' => 'Instalación de la base de datos Mysql',
	'Installation_MysqlErrorConnect' => 'Error al intentar conectar con la base de datos',
	'Installation_JsTag' => 'Etiqueta Javascript',
	'Installation_JsTagHelp' => '<p>Para contar todos los visitantes, debe insertar el código Javascript en todas las páginas.</p><p>Sus páginas no han de estar hechas en PHP, Piwik funcionará en todas las páginas (tanto si es HTML, ASP, Perl o cualquier otro lenguaje).</p><p>Aquí está el código que ha de insertar: (cópialo y págalo en todas tus páginas) </p>',
	'Installation_Congratulations' => 'Enhorabuena',
	'Installation_CongratulationsHelp' => '<p>¡Enhorabuena! La instalación de Piwik ha sido completada.</p><p>Asegúrese de haber introducido el código Javascript en todas las páginas, y ahora, ¡espere a los primeros visitantes!</p>',
	'Installation_GoToPiwik' => 'Ir a Piwik',
	'Installation_SetupWebsite' => 'Configurar una página web',
	'Installation_SetupWebsiteError' => 'Hubo un error al añadir el sitio',
	'Installation_GeneralSetup' => 'Configuración general',
	'Installation_GeneralSetupSuccess' => 'Configuración general realizada con éxito',
	'Installation_SystemCheck' => 'Comprobación del sitio',
	'Installation_SystemCheckPhp' => 'Versión PHP',
	'Installation_SystemCheckPdo' => 'Extensión Pdo',
	'Installation_SystemCheckPdoMysql' => 'Extensión Pdo_Mysql',
	'Installation_SystemCheckPdoError' => 'Necesita habilitar las extensiones PDO y PDO_MYSQL en usu archivo php.ini.',
	'Installation_SystemCheckPdoHelp' => 'En un servidor Windows usted puede añadir las siguientes lineas en su php.ini %s<br><br>En un servidor Linux puede compilar php con las siguiente opción %s en su php.ini, añada las siguientes líneas %s<br><br>Más información en <a style="color:red" href="http://php.net/pdo">la web de PHP</a>.',
	'Installation_SystemCheckWriteDirs' => 'Directorios con permisos de escritura',
	'Installation_SystemCheckWriteDirsHelp' => 'Para arreglar este error en su sistema Linux, intente tecleando los siguientes comandos',
	'Installation_SystemCheckMemoryLimit' => 'Límite de memoria',
	'Installation_SystemCheckMemoryLimitHelp' => 'En un sitio web con un tráfico elevado, el proceso de archivado puede requerir mas memoria de la que está disponible.<br>Mire el apartado memory_limit en su archivo php.ini si es necesario.',
	'Installation_SystemCheckGD' => 'GD &gt; 2.x (gráficos)',
	'Installation_SystemCheckGDHelp' => 'Los sparklines (gráficos pequeños) no funcionarán.',
	'Installation_SystemCheckTimeLimit' => 'set_time_limit() permitido',
	'Installation_SystemCheckTimeLimitHelp' => 'En un sitio web con un tráfico elevado, el proceso de archivado puede requerir mas memoria de la que está disponible.<br>Mire la directiva max_execution_time en su archivo php.ini si es necesario',
	'Installation_SystemCheckMail' => 'mail() permitido',
	'Installation_SystemCheckError' => 'Ha habido un error - Debe de ser arreglado antes de continuar',
	'Installation_SystemCheckWarning' => 'Piwik funcionará correctamente, pero algunas características pueden faltar',
	'Installation_Tables' => 'Creando las tablas',
	'Installation_TablesWarning' => 'Algunas <span id="linkToggle">tablas de Piwik</span> están ya instaladas en la base de datos',
	'Installation_TablesFound' => 'Las siguientes tablas se han encontrado en la base de datos',
	'Installation_TablesWarningHelp' => 'O bien optar por la reutilización de tablas de bases de datos existentes o seleccionar una instalación limpia para borrar todos los datos existentes en la base de datos.',
	'Installation_TablesReuse' => 'Reutilizar las tablas ya existentes',
	'Installation_TablesDelete' => 'Borrar las tablas detectadas',
	'Installation_TablesDeletedSuccess' => 'Tablas existentes de piwik borradas con éxito',
	'Installation_TablesCreatedSuccess' => '¡Tablas creadas con éxito!',
	'Installation_TablesDeleteConfirm' => '¿Está seguro de querer borrar todas las tablas de Piwik de esta base de datos?',
	'Installation_Welcome' => '¡Bienvenido!',
	'Installation_WelcomeHelp' => '<p>Piwik es un software de código abierto de estadísticas que te permitirá recopilar información sobre tu sitio fácilmente.</p><p>Este proceso se divide en %s pasos sencillos que le llevarán en torno a 5 minutos.</p>',
	'TranslationsAdmin_MenuTranslations' => 'Traducciones',
	'TranslationsAdmin_MenuLanguages' => 'Idiomas',
	'TranslationsAdmin_Plugin' => 'Plugin',
	'TranslationsAdmin_Definition' => 'Definición',
	'TranslationsAdmin_DefaultString' => 'Cadena por defecto (Español)',
	'TranslationsAdmin_TranslationString' => 'Cadena traducida (Idioma actual: %s)',
	'TranslationsAdmin_Translations' => 'Traducciones',
	'TranslationsAdmin_FixPermissions' => 'Por favor arregle los permisos de los ficheros',
	'TranslationsAdmin_AvailableLanguages' => 'Idiomas disponibles',
	'TranslationsAdmin_AddLanguage' => 'Añadir un idioma',
	'TranslationsAdmin_LanguageCode' => 'Código de idioma',
	'TranslationsAdmin_Export' => 'Exportar idioma',
	'TranslationsAdmin_Import' => 'Importar idioma',
);
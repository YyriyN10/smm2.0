<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smmstudio
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEME_PATH;?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_PATH;?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_PATH;?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_PATH;?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo THEME_PATH;?>/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#221EC4">
    <meta name="msapplication-TileImage" content="<?php echo THEME_PATH;?>/assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#221EC4">

	<?php wp_head(); ?>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PKXWWJD');</script>
<!-- End Google Tag Manager -->

<!-- <script src="//code.jivosite.com/widget/MP2o7AXE1B" async></script> -->
<!-- <script type='text/javascript'>
(function(){ document.jivositeloaded=0;var widget_id = 'MP2o7AXE1B';var d=document;var w=window;function l(){var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
function zy(){
    
    if(w.detachEvent){
        w.detachEvent('onscroll',zy);
        w.detachEvent('onmousemove',zy);
        w.detachEvent('ontouchmove',zy);
        w.detachEvent('onresize',zy);
    }else {
        w.removeEventListener("scroll", zy, false);
        w.removeEventListener("mousemove", zy, false);
        w.removeEventListener("touchmove", zy, false);
        w.removeEventListener("resize", zy, false);
    }
    
    if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}
    
    var cookie_date = new Date ( );
    cookie_date.setTime ( cookie_date.getTime()+60*60*28*1000); 
    d.cookie = "JivoSiteLoaded=1;path=/;expires=" + cookie_date.toGMTString();
}
if (d.cookie.search ( 'JivoSiteLoaded' )<0){
    if(w.attachEvent){
        w.attachEvent('onscroll',zy);
        w.attachEvent('onmousemove',zy);
        w.attachEvent('ontouchmove',zy);
        w.attachEvent('onresize',zy);
    }else {
        w.addEventListener("scroll", zy, {capture: false, passive: true});
        w.addEventListener("mousemove", zy, {capture: false, passive: true});
        w.addEventListener("touchmove", zy, {capture: false, passive: true});
        w.addEventListener("resize", zy, {capture: false, passive: true});
    }
}else {zy();}
})();</script> -->

<style>
    .contact-form .messengers-wrapper .messengers{
      justify-content: space-around !important;
    }
  </style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKXWWJD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
    global $siteLang;
    global $allCasesText;
    global $moreCasesText;
    global $lidForText;
    global $salesForText;
    global $lidCostText;
    global $saleCostText;
    global $workDayText;
    global $lidNameText;
    global $budgetText;
    global $questionTextInQuiz;
    global $inTextInQuiz;
    global $youAnsvTextInQuiz;
    global $onMoreAnsvTextInQuiz;
    global $prevTextBtnQuiz;
    global $nextTextBtnQuiz;
    global $nameTextForm;
    global $messTextForm;
    global $errorTextForm;
    global $addPravicyText;
    global $linkPravPol;
    global $brifAnimationTextHea;
    global $brifAnimationTextLb1;
    global $brifAnimationTextLb2;
    global $brifAnimationTextLb3;
    global $textMoreCases;
    global $caseCatId;
    global $textMore;
    global $caseDevCatId;
    global $caseSmmCatId;
    global $textTarget;
    global $textStartData;
    global $textWhatDid;
    global $textResult;
    global $textColor;
    global $textTipograf;
    global $textThxWatch;
    global $textThxWatchTo;
    global $textThxLink;
    global $textSolution;
    global $titleMoreProjectCases;
    global $textView;
    global $formChSrSocialAdvertising;
    global $formChSrMaintainingSocial;
    global $formChSrContextualAdvertising;
    global $formChSrWebsiteDevelopment;
    global $formChSrSalesAutomation;
    global $formChSrDesign;
    global $formStep1Name;
    global $formStep2Name;
    global $exampleOfFillingBriefText;
    global $sendBriefBtnText;
    global $textLassCases;
    global $btnGetSolutionText;
    global $otherCasesTitle;
    global $getAuditCaseBlockTarget;
    global $getAuditCaseBlockDev;
    global $reviewsCaseBlockTitle;
    global $casePageContactForm;
    global $textDisignSmmCase;
    global $textContentPartSmmCase;


    $siteLang = get_bloginfo('language');

    $allCasesText = get_field('tekst_knopki_vse_kejsy', 'options');

    $moreCasesText = get_field('tekst_knopki_bolshe_kejsov', 'options');

    $lidForText = get_field('podpis_polya_zayavok_za_period', 'options');

    $salesForText = get_field('podpis_polya_prodazh_za_period', 'options');

    $lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');

    $saleCostText = get_field('podpis_polya_stoimost_prodazhi', 'options');

    $workDayText = get_field('podpis_polya_dnej_raboty', 'options');

    $lidNameText = get_field('podpis_nazvanie_sdelki', 'options');

    $budgetText = get_field('podpis_byudzhet', 'options');

    $questionTextInQuiz = get_field('podpis_vopros_v_kvize', 'options');

    $inTextInQuiz = get_field('slovo_iz_v_voprosah_kviza', 'options');

    $youAnsvTextInQuiz = get_field('podpis_vvedite_vash_otvet_v_kvize', 'options');

    $onMoreAnsvTextInQuiz = get_field('podpis_vyberite_odin_ili_neskolko_variantov_v_kvize', 'options');

    $prevTextBtnQuiz = get_field('tekst_knopka_nazad_v_kvize', 'options');

    $nextTextBtnQuiz = get_field('tekst_knopka_dalee_v_kvize', 'options');

    $nameTextForm = get_field('podpis_polya_imya_v_forme', 'options');

    $messTextForm = get_field('podpis_polya_soobshhenie_v_forme', 'options');

    $errorTextForm = get_field('podpis_oshibki_dlya_ne_zapolennogo_polya_formy', 'options');

    $addPravicyText = get_field('tekst_flazhka_soglasiya_s_politikoj_konfidenczialnosti_v_forme', 'options');

    $linkPravPol = get_field('ssylka_na_straniczu_politiki_konfidenczialnosti', 'options');

    $brifAnimationTextHeader = get_field('tekst_dlya_animaczii_zapolneniya_brifa_brif_po_proektu', 'options');

    $brifAnimationTextLb1 = get_field('tekst_dlya_animaczii_zapolneniya_brifa_nazvanie_proekta', 'options');

    $brifAnimationTextLb2 = get_field('tekst_dlya_animaczii_zapolneniya_brifa_ssylka_na_sajt', 'options');

    $brifAnimationTextLb3 = get_field('tekst_dlya_animaczii_zapolneniya_brifa_opeshite_voronku', 'options');

    $textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');

    $textLassCases = get_field('tekst_knopki_menshe_kejsov', 'options');

    //dev
    $textMore = get_field('tekst_knopka_podrobnee', 'options');

    //case
    $textTarget = get_field('podpis_zadacha_v_kejse', 'options');

    $textStartData = get_field('podpis_ishodnye_dannye_v_kejse', 'options');

    $textWhatDid = get_field('podpis_chto_sdelali_v_kejse', 'options');

    $textResult = get_field('podpis_rezultaty_v_kejse', 'options');

    $textColor = get_field('podpis_v_kejsah_czveta', 'options');

    $textTipograf = get_field('podpis_v_kejsah_tipografika', 'options');

    $textThxWatch = get_field('zagolovok_spasibo_za_prosmotr_na_stranicze_kejsa', 'options');

    $textThxWatchTo = get_field('tekst_sajt_smotrite_po_na_stranicze_kejsa', 'options');

    $textThxLink = get_field('slovo_ssylke_na_stranicze_kejsa', 'options');

    $textSolution = get_field('podpis_reshenie_v_kejse', 'options');

    $titleMoreProjectCases = get_field('zagolovok_bloka_drugie_kejsy_po_proektu', 'options');

    $textView = get_field('tekst_knopki_prosmotret', 'options');

    $otherCasesTitle = get_field('zagolovok_bloka_drugie_kejsy_stranicza_kejsa', 'options');

    $getAuditCaseBlockTarget = get_field('blok_s_knopkoj_poluchit_audit_stranicza_kejsa_target','options');

    $getAuditCaseBlockDev = get_field('blok_s_knopkoj_poluchit_audit_stranicza_kejsa_razrabotka','options');

    $reviewsCaseBlockTitle = get_field('zagolovok_bloka_s_otzyvami_stranicza_kejsa', 'options');

    $casePageContactForm = get_field('forma_obratnoj_svyazi_na_stranicze_kejsa', 'options');

    $textDisignSmmCase = get_field('tekst_podpisi_v_kejsah_po_smm_dizajn', 'options');

    $textContentPartSmmCase = get_field('tekst_podpisi_v_kejsah_po_smm_osnovni_napryami_kontentu', 'options');

    //Form ch buttons

    $formChSrSocialAdvertising = get_field('tekst_knopki_vybora_uslugi_v_forme_reklama_v_soczsetyah', 'options');
    $formChSrMaintainingSocial = get_field('tekst_knopki_vybora_uslugi_v_forme_vedenie_stranicz_v_soczsetyah', 'options');
    $formChSrContextualAdvertising = get_field('tekst_knopki_vybora_uslugi_v_forme_kontekstnaya_reklama', 'options');
    $formChSrWebsiteDevelopment = get_field('tekst_knopki_vybora_uslugi_v_forme_razrabotka_sajtov', 'options');
    $formChSrSalesAutomation = get_field('tekst_knopki_vybora_uslugi_v_forme_avtomatizacziya_marketinga_i_prodazh', 'options');
    $formChSrDesign = get_field('tekst_knopki_vybora_uslugi_v_forme_dizajn', 'options');


    //Form steps name

    $formStep1Name = get_field('nazvanie_shaga_1_v_forme', 'options');
    $formStep2Name = get_field('nazvanie_shaga_2_v_forme', 'options');

    //Brief
    $exampleOfFillingBriefText = get_field('podpis_primer_zapolneniya_v_brife', 'options');
    $sendBriefBtnText = get_field('tekst_knopki_otpravit_brif', 'options');

    //SMM
    $btnGetSolutionText = get_field('knopka_poluchit_reshenie', 'options');


    //target
    $allCasesText = $allCasesText[$siteLang];
    $moreCasesText = $moreCasesText[$siteLang];
    $lidForText = $lidForText[$siteLang];
    $salesForText = $salesForText[$siteLang];
    $lidCostText = $lidCostText[$siteLang];
    $saleCostText = $saleCostText[$siteLang];
    $workDayText = $workDayText[$siteLang];
    $lidNameText = $lidNameText[$siteLang];
    $budgetText = $budgetText[$siteLang];
    $questionTextInQuiz = $questionTextInQuiz[$siteLang];
    $inTextInQuiz = $inTextInQuiz[$siteLang];
    $youAnsvTextInQuiz = $youAnsvTextInQuiz[$siteLang];
    $onMoreAnsvTextInQuiz = $onMoreAnsvTextInQuiz[$siteLang];
    $prevTextBtnQuiz = $prevTextBtnQuiz[$siteLang];
    $nextTextBtnQuiz = $nextTextBtnQuiz[$siteLang];
    $nameTextForm = $nameTextForm[$siteLang];
    $messTextForm = $messTextForm[$siteLang];
    $errorTextForm = $errorTextForm[$siteLang];
    $addPravicyText = $addPravicyText[$siteLang];
    $linkPravPol = $linkPravPol[$siteLang];
    $brifAnimationTextHeader = $brifAnimationTextHeader[$siteLang];
    $brifAnimationTextLb1 = $brifAnimationTextLb1[$siteLang];
    $brifAnimationTextLb2 = $brifAnimationTextLb2[$siteLang];
    $brifAnimationTextLb3 = $brifAnimationTextLb3[$siteLang];
    $textMoreCases = $textMoreCases[$siteLang];
    $textLassCases = $textLassCases[$siteLang];
    //dev
    $textMore = $textMore[$siteLang];
    //case
    $textTarget = $textTarget[$siteLang];
    $textStartData = $textStartData[$siteLang];
    $textWhatDid = $textWhatDid[$siteLang];
    $textResult = $textResult[$siteLang];
    $textColor = $textColor[$siteLang];
    $textTipograf = $textTipograf[$siteLang];
    $textThxWatch = $textThxWatch[$siteLang];
    $textThxWatchTo = $textThxWatchTo[$siteLang];
    $textThxLink = $textThxLink[$siteLang];
    $textSolution = $textSolution[$siteLang];
    $titleMoreProjectCases = $titleMoreProjectCases[$siteLang];
    $textView = $textView[$siteLang];
    $textDisignSmmCase = $textDisignSmmCase[$siteLang];
    $textContentPartSmmCase = $textContentPartSmmCase[$siteLang];
    //form ch buttons
    $formChSrSocialAdvertising = $formChSrSocialAdvertising[$siteLang];
    $formChSrMaintainingSocial = $formChSrMaintainingSocial[$siteLang];
    $formChSrContextualAdvertising = $formChSrContextualAdvertising[$siteLang];
    $formChSrWebsiteDevelopment = $formChSrWebsiteDevelopment[$siteLang];
    $formChSrSalesAutomation = $formChSrSalesAutomation[$siteLang];
    $formChSrDesign = $formChSrDesign[$siteLang];
    $otherCasesTitle = $otherCasesTitle[$siteLang];
    $getAuditCaseBlockTarget = $getAuditCaseBlockTarget[$siteLang];
    $getAuditCaseBlockDev = $getAuditCaseBlockDev[$siteLang];
    $reviewsCaseBlockTitle = $reviewsCaseBlockTitle[$siteLang];
    $casePageContactForm = $casePageContactForm[$siteLang];
    //form steps name
    $formStep1Name = $formStep1Name[$siteLang];
    $formStep2Name = $formStep2Name[$siteLang];
    //brief
    $exampleOfFillingBriefText = $exampleOfFillingBriefText[$siteLang];
    $sendBriefBtnText = $sendBriefBtnText[$siteLang];
    //SMM
    $btnGetSolutionText = $btnGetSolutionText[$siteLang];



    if ( $siteLang == 'ua'){
        $caseCatId = 20;
        $caseDevCatId = 27;
        $caseSmmCatId = 176;
    }elseif ( $siteLang == 'ru'){
        $caseCatId = 10;
        $caseDevCatId = 22;
    }elseif ( $siteLang == 'en'){
        $caseCatId = 139;
        $caseDevCatId = 137;
    }
?>
<div  class="wrapper">
	<header>
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <?php
                        $linkTrigger = get_bloginfo('language');
                        $domName = home_url();
                        $logoLink = '';

                        if( $linkTrigger == 'ua' ){
	                        $logoLink = $domName.'/ua/target-2';
                        }elseif ( $linkTrigger == 'ru' ){
	                        $logoLink = $domName.'/target';
                        }elseif ( $linkTrigger == 'en' ) {
                            $logoLink = $domName . '/en/target-en';
                            $workTime = $workTime['en'];
                        }
                    ?>
                    <a href="<?php echo $logoLink;?>" class="logo">
                        <svg width="200" height="41" viewBox="0 0 200 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clipHeaderLogo)">
                                <path d="M67.2818 19.2413C64.2707 18.5226 63.5583 17.9672 63.5583 16.7585C63.5583 15.6804 64.4973 14.831 66.1162 14.831C67.5409 14.831 68.9655 15.3864 70.3578 16.4644L71.8471 14.3736C70.2606 13.0995 68.4474 12.3808 66.1486 12.3808C63.0403 12.3808 60.8062 14.2429 60.8062 16.9545C60.8062 19.8947 62.6841 20.9075 66.0191 21.6915C68.9331 22.4103 69.5483 22.9983 69.5483 24.1417C69.5483 25.3832 68.4798 26.1672 66.7638 26.1672C64.8211 26.1672 63.3317 25.4158 61.8099 24.1091L60.1586 26.1019C62.0366 27.8007 64.303 28.6174 66.699 28.6174C70.0016 28.6174 72.2681 26.8533 72.2681 23.9131C72.3004 21.2342 70.5844 20.0581 67.2818 19.2413Z" fill="white"/>
                                <path d="M88.0039 12.6103L83.2443 20.0589L78.4847 12.6103H75.5706V28.3896H78.258V17.1187L83.1471 24.5019H83.2443L88.1981 17.0533V28.3896H90.9503V12.6103H88.0039Z" fill="white"/>
                                <path d="M107.431 12.6103L102.671 20.0589L97.9116 12.6103H94.9651V28.3896H97.6849V17.1187L102.574 24.5019H102.671L107.593 17.0533V28.3896H110.345V12.6103H107.431Z" fill="white"/>
                                <path d="M120.414 19.2421C117.403 18.5234 116.691 17.968 116.691 16.7593C116.691 15.6812 117.63 14.8318 119.249 14.8318C120.673 14.8318 122.066 15.3872 123.49 16.4652L124.98 14.3744C123.393 13.1003 121.58 12.3816 119.281 12.3816C116.173 12.3816 113.939 14.2437 113.939 16.9553C113.939 19.8955 115.817 20.9083 119.152 21.6923C122.033 22.4111 122.681 22.9991 122.681 24.1425C122.681 25.384 121.612 26.168 119.896 26.168C117.954 26.168 116.464 25.4166 114.975 24.1099L113.324 26.1027C115.202 27.8015 117.468 28.6182 119.864 28.6182C123.167 28.6182 125.465 26.8541 125.465 23.9138C125.433 21.235 123.717 20.0589 120.414 19.2421Z" fill="white"/>
                                <path d="M127.214 12.6103V15.1912H132.168V28.4222H134.952V15.1912H139.906V12.6103H127.214Z" fill="white"/>
                                <path d="M153.214 12.6103V21.6924C153.214 24.5999 151.724 26.1027 149.263 26.1027C146.803 26.1027 145.313 24.5346 145.313 21.5944V12.6103H142.561V21.6924C142.561 26.2661 145.151 28.6509 149.231 28.6509C153.343 28.6509 155.966 26.2661 155.966 21.5617V12.6103H153.214Z" fill="white"/>
                                <path d="M165.582 12.6103H159.754V28.3896H165.582C170.504 28.3896 173.903 24.9266 173.903 20.4836C173.903 16.0079 170.504 12.6103 165.582 12.6103ZM165.582 25.874H162.506V15.1258H165.582C168.885 15.1258 171.022 17.38 171.022 20.4836C171.022 23.6199 168.885 25.874 165.582 25.874Z" fill="white"/>
                                <path d="M177.4 12.6103V28.3896H180.152V12.6103H177.4Z" fill="white"/>
                                <path d="M191.841 12.349C187.016 12.349 183.649 16.0733 183.649 20.5163C183.649 24.992 187.016 28.6836 191.808 28.6836C196.633 28.6836 200.032 24.9593 200.032 20.5163C200 16.0079 196.633 12.349 191.841 12.349ZM191.841 26.1028C188.732 26.1028 186.498 23.5546 186.498 20.4836C186.498 17.38 188.668 14.8645 191.776 14.8645C194.884 14.8645 197.086 17.4127 197.086 20.4836C197.086 23.6199 194.917 26.1028 191.841 26.1028Z" fill="white"/>
                                <path d="M44.6171 20.4835C44.6171 22.3457 44.4876 24.2078 44.261 26.0046L0 21.5616V19.4054L44.2933 14.9624C44.52 16.7919 44.6171 18.6214 44.6171 20.4835Z" fill="white"/>
                                <path d="M43.4839 10.1928L43.3544 10.2255L0 17.3474V15.1259L39.1776 0.228685L39.7604 0C41.3793 3.20159 42.6421 6.63187 43.4839 10.1928Z" fill="white"/>
                                <path d="M43.4515 30.8726C42.6097 34.4335 41.3469 37.8311 39.7604 41.0001L39.1776 40.7714L0 25.8742V23.6527L43.322 30.7746V30.8399L43.4515 30.8726Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clipHeaderLogo">
                                    <rect width="200" height="41" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
	                <?php
		                wp_nav_menu(
			                array(
				                'theme_location' => 'menu-1',
				                'menu_id'        => 'primary-menu',
				                'container' => false,
				                'menu_class' => 'main-menu',
			                )
		                );
	                ?>
                    <div class="phone-lang-wrapper">
	                    <?php
		                    $mainPhone = get_field('telefon', 'options');

		                    $phoneToCall = preg_replace( '/[^0-9]/', '', $mainPhone);
	                    ?>
                        <a href="tel:<?php echo $phoneToCall;?>" class="phone binct-phone-number-1">
                        <span> 
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clipHeaderPhone)">
                                    <path d="M9.72782 7.33899L8.33229 5.94346C7.83389 5.44506 6.9866 5.64444 6.78724 6.29234C6.63772 6.74093 6.13932 6.99013 5.69076 6.89043C4.69395 6.64123 3.34826 5.34538 3.09906 4.29873C2.94954 3.85015 3.24858 3.35174 3.69714 3.20224C4.34507 3.00288 4.54443 2.1556 4.04602 1.65719L2.65049 0.261662C2.25177 -0.0872206 1.65369 -0.0872206 1.30481 0.261662L0.357839 1.20863C-0.589128 2.20544 0.45752 4.84697 2.80002 7.18947C5.14251 9.53197 7.78405 10.6285 8.78086 9.63165L9.72782 8.68468C10.0767 8.28596 10.0767 7.68787 9.72782 7.33899Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clipHeaderPhone">
                                        <rect width="10" height="10" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>

		                    <?php echo $mainPhone;?>
                        </a>
                        <ul class="lang-wrapper" id="lang-nav">
                            <?php

                                $langArgs = array(
                                    'show_names' => 1,
                                    'display_names_as' => 'slug',
                                    'show_flags' => 0,
                                    'hide_current' => 0,
                                    'hide_if_no_translation' => 1
                                );

                                pll_the_languages($langArgs);

                            ?>
                            <!--<p class="current-lang" id="active-lang-cl"></p>
                            <ul class="lang-list">
                                <?php
/*
                                    $langArgs = array(
                                        'show_names' => 1,
                                        'display_names_as' => 'slug',
                                        'show_flags' => 0,
                                        'hide_current' => 0
                                    );

                                    pll_the_languages($langArgs);

                                */?>
                            </ul>-->
                            <!--<a href="#" class="lang-btn" id="lang-btn">
                                <svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.99997 4.5C2.87233 4.49936 2.74643 4.47031 2.6314 4.41496C2.51638 4.35961 2.41512 4.27935 2.33497 4.18L0.229974 1.63C0.106971 1.47648 0.0295666 1.2915 0.00658211 1.09613C-0.0164023 0.900766 0.0159572 0.702871 0.0999735 0.525C0.168113 0.370413 0.27931 0.238707 0.420283 0.145611C0.561256 0.0525159 0.726047 0.00196653 0.894974 0H5.10497C5.2739 0.00196653 5.43869 0.0525159 5.57966 0.145611C5.72064 0.238707 5.83183 0.370413 5.89997 0.525C5.98399 0.702871 6.01635 0.900766 5.99337 1.09613C5.97038 1.2915 5.89298 1.47648 5.76997 1.63L3.66497 4.18C3.58482 4.27935 3.48357 4.35961 3.36854 4.41496C3.25352 4.47031 3.12762 4.49936 2.99997 4.5Z" fill="white"/>
                                </svg>
                            </a>-->
                        </ul>
                        <a href="#" class="mob-menu-btn" id="menu-btn">
                            <div></div>
                            <div></div>
                            <div></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-container">
            <?php
                $mainPhone = get_field('telefon', 'options');

                $phoneToCall = preg_replace( '/[^0-9]/', '', $mainPhone);
            ?>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container' => false,
                        'menu_class' => 'main-menu',
                    )
                );
            ?>
            <a href="tel:<?php echo $phoneToCall;?>" class="mobile-phone binct-phone-number-1">
                            <span>
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clipHeaderPhone)">
                                        <path d="M9.72782 7.33899L8.33229 5.94346C7.83389 5.44506 6.9866 5.64444 6.78724 6.29234C6.63772 6.74093 6.13932 6.99013 5.69076 6.89043C4.69395 6.64123 3.34826 5.34538 3.09906 4.29873C2.94954 3.85015 3.24858 3.35174 3.69714 3.20224C4.34507 3.00288 4.54443 2.1556 4.04602 1.65719L2.65049 0.261662C2.25177 -0.0872206 1.65369 -0.0872206 1.30481 0.261662L0.357839 1.20863C-0.589128 2.20544 0.45752 4.84697 2.80002 7.18947C5.14251 9.53197 7.78405 10.6285 8.78086 9.63165L9.72782 8.68468C10.0767 8.28596 10.0767 7.68787 9.72782 7.33899Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clipHeaderPhone">
                                            <rect width="10" height="10" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>

                <?php echo $mainPhone;?>
            </a>
            <p class="working-time"><?php echo $workTime;?></p>
            <ul class="lang-list">
                <?php

                    $langArgs = array(
                        'show_names' => 1,
                        'display_names_as' => 'slug',
                        'show_flags' => 0,
                        'hide_current' => 0,
                        'hide_if_no_translation' => 1
                    );

                    pll_the_languages($langArgs);

                ?>
            </ul>
        </div>
	</header><!-- #masthead -->

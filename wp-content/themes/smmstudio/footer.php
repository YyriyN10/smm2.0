<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smmstudio
 */


$siteLang = get_bloginfo('language');

$workTime = get_field('vremya_raboty', 'options');
$textContacts = get_field('podpis_kontakty', 'options');
$textPravPoly = get_field('podpis_politika_konfidenczialnosti', 'options');
$linkPravPol = get_field('ssylka_na_straniczu_politiki_konfidenczialnosti', 'options');


$workTime = $workTime[$siteLang];
$textContacts = $textContacts[$siteLang];
$textPravPoly = $textPravPoly[$siteLang];
$linkPravPol = $linkPravPol[$siteLang];


?>

<footer>
    <div class="container">
        <div class="row">
            <div class="content col-12">
                <?php
                $linkTrigger = $siteLang;
                $domName = home_url();
                $logoLink = '';

                if ($linkTrigger == 'ua') {
                    $logoLink = $domName . '/ua/target-2';
                } elseif ($linkTrigger == 'ru') {
                    $logoLink = $domName . '/target';
                }
                ?>
                <a href="<?php echo $logoLink; ?>" class="logo">
                    <svg width="200" height="41" viewBox="0 0 200 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clipHeaderLogo)">
                            <path d="M67.2818 19.2413C64.2707 18.5226 63.5583 17.9672 63.5583 16.7585C63.5583 15.6804 64.4973 14.831 66.1162 14.831C67.5409 14.831 68.9655 15.3864 70.3578 16.4644L71.8471 14.3736C70.2606 13.0995 68.4474 12.3808 66.1486 12.3808C63.0403 12.3808 60.8062 14.2429 60.8062 16.9545C60.8062 19.8947 62.6841 20.9075 66.0191 21.6915C68.9331 22.4103 69.5483 22.9983 69.5483 24.1417C69.5483 25.3832 68.4798 26.1672 66.7638 26.1672C64.8211 26.1672 63.3317 25.4158 61.8099 24.1091L60.1586 26.1019C62.0366 27.8007 64.303 28.6174 66.699 28.6174C70.0016 28.6174 72.2681 26.8533 72.2681 23.9131C72.3004 21.2342 70.5844 20.0581 67.2818 19.2413Z"
                                  fill="white"/>
                            <path d="M88.0039 12.6103L83.2443 20.0589L78.4847 12.6103H75.5706V28.3896H78.258V17.1187L83.1471 24.5019H83.2443L88.1981 17.0533V28.3896H90.9503V12.6103H88.0039Z"
                                  fill="white"/>
                            <path d="M107.431 12.6103L102.671 20.0589L97.9116 12.6103H94.9651V28.3896H97.6849V17.1187L102.574 24.5019H102.671L107.593 17.0533V28.3896H110.345V12.6103H107.431Z"
                                  fill="white"/>
                            <path d="M120.414 19.2421C117.403 18.5234 116.691 17.968 116.691 16.7593C116.691 15.6812 117.63 14.8318 119.249 14.8318C120.673 14.8318 122.066 15.3872 123.49 16.4652L124.98 14.3744C123.393 13.1003 121.58 12.3816 119.281 12.3816C116.173 12.3816 113.939 14.2437 113.939 16.9553C113.939 19.8955 115.817 20.9083 119.152 21.6923C122.033 22.4111 122.681 22.9991 122.681 24.1425C122.681 25.384 121.612 26.168 119.896 26.168C117.954 26.168 116.464 25.4166 114.975 24.1099L113.324 26.1027C115.202 27.8015 117.468 28.6182 119.864 28.6182C123.167 28.6182 125.465 26.8541 125.465 23.9138C125.433 21.235 123.717 20.0589 120.414 19.2421Z"
                                  fill="white"/>
                            <path d="M127.214 12.6103V15.1912H132.168V28.4222H134.952V15.1912H139.906V12.6103H127.214Z"
                                  fill="white"/>
                            <path d="M153.214 12.6103V21.6924C153.214 24.5999 151.724 26.1027 149.263 26.1027C146.803 26.1027 145.313 24.5346 145.313 21.5944V12.6103H142.561V21.6924C142.561 26.2661 145.151 28.6509 149.231 28.6509C153.343 28.6509 155.966 26.2661 155.966 21.5617V12.6103H153.214Z"
                                  fill="white"/>
                            <path d="M165.582 12.6103H159.754V28.3896H165.582C170.504 28.3896 173.903 24.9266 173.903 20.4836C173.903 16.0079 170.504 12.6103 165.582 12.6103ZM165.582 25.874H162.506V15.1258H165.582C168.885 15.1258 171.022 17.38 171.022 20.4836C171.022 23.6199 168.885 25.874 165.582 25.874Z"
                                  fill="white"/>
                            <path d="M177.4 12.6103V28.3896H180.152V12.6103H177.4Z" fill="white"/>
                            <path d="M191.841 12.349C187.016 12.349 183.649 16.0733 183.649 20.5163C183.649 24.992 187.016 28.6836 191.808 28.6836C196.633 28.6836 200.032 24.9593 200.032 20.5163C200 16.0079 196.633 12.349 191.841 12.349ZM191.841 26.1028C188.732 26.1028 186.498 23.5546 186.498 20.4836C186.498 17.38 188.668 14.8645 191.776 14.8645C194.884 14.8645 197.086 17.4127 197.086 20.4836C197.086 23.6199 194.917 26.1028 191.841 26.1028Z"
                                  fill="white"/>
                            <path d="M44.6171 20.4835C44.6171 22.3457 44.4876 24.2078 44.261 26.0046L0 21.5616V19.4054L44.2933 14.9624C44.52 16.7919 44.6171 18.6214 44.6171 20.4835Z"
                                  fill="white"/>
                            <path d="M43.4839 10.1928L43.3544 10.2255L0 17.3474V15.1259L39.1776 0.228685L39.7604 0C41.3793 3.20159 42.6421 6.63187 43.4839 10.1928Z"
                                  fill="white"/>
                            <path d="M43.4515 30.8726C42.6097 34.4335 41.3469 37.8311 39.7604 41.0001L39.1776 40.7714L0 25.8742V23.6527L43.322 30.7746V30.8399L43.4515 30.8726Z"
                                  fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clipHeaderLogo">
                                <rect width="200" height="41" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <div class="footer-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'menu_id' => 'footer-menu',
                            'container' => false,
                            'menu_class' => 'second-menu',
                        )
                    );
                    ?>
                </div>
                <div class="our-contacts">
                    <h3 class="cont<?php echo $siteLang;?>"><?php echo $textContacts; ?></h3>
                    <?php
                    $mainPhone = get_field('telefon', 'options');

                    $phoneToCall = preg_replace('/[^0-9]/', '', $mainPhone);
                    ?>
                    <a href="tel:<?php echo $phoneToCall; ?>" class="phone cont<?php echo $siteLang;?> binct-phone-number-1">
                      
                        <?php echo $mainPhone; ?>
                    </a>
                    <p class="working-time cont<?php echo $siteLang;?>"><?php echo $workTime; ?></p>
                    <div class="social">
                        <a href="<?php echo get_field('ssylka_na_instagramm', 'options') ?>" target="_blank">
                            <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0footInst)">
                                    <path d="M31.9997 34.8373C-8.23497 76.6293 -0.000306403 121.024 -0.000306403 255.893C-0.000306403 367.893 -19.5416 480.171 82.7304 506.603C114.666 514.816 397.632 514.816 429.525 506.56C472.106 495.573 506.752 461.035 511.488 400.811C512.149 392.405 512.149 119.531 511.466 110.955C506.432 46.8053 466.944 9.83464 414.912 2.34664C402.986 0.618639 400.597 0.106639 339.413 -2.74732e-05C122.389 0.106639 74.8157 -9.55736 31.9997 34.8373V34.8373Z" fill="url(#paint0_linearfootInst)"/>
                                    <path d="M255.957 66.9653C178.496 66.9653 104.938 60.0747 76.8423 132.181C65.237 161.963 66.9223 200.64 66.9223 256.021C66.9223 304.619 65.365 350.293 76.8423 379.84C104.874 451.989 179.029 445.077 255.914 445.077C330.09 445.077 406.57 452.8 435.008 379.84C446.634 349.76 444.928 311.659 444.928 256.021C444.928 182.165 449.002 134.485 413.184 98.688C376.917 62.4213 327.872 66.9653 255.872 66.9653H255.957ZM239.018 101.035C400.597 100.779 421.162 82.816 409.813 332.352C405.781 420.608 338.581 410.923 255.978 410.923C105.365 410.923 101.034 406.613 101.034 255.936C101.034 103.509 112.981 101.12 239.018 100.992V101.035ZM356.864 132.416C344.341 132.416 334.186 142.571 334.186 155.093C334.186 167.616 344.341 177.771 356.864 177.771C369.386 177.771 379.541 167.616 379.541 155.093C379.541 142.571 369.386 132.416 356.864 132.416V132.416ZM255.957 158.933C202.346 158.933 158.89 202.411 158.89 256.021C158.89 309.632 202.346 353.088 255.957 353.088C309.568 353.088 353.002 309.632 353.002 256.021C353.002 202.411 309.568 158.933 255.957 158.933V158.933ZM255.957 193.003C339.264 193.003 339.37 319.04 255.957 319.04C172.672 319.04 172.544 193.003 255.957 193.003Z" fill="white"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linearfootInst" x1="32.9815" y1="479.298" x2="508.831" y2="67.4554" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFDD55"/>
                                        <stop offset="0.5" stop-color="#FF543E"/>
                                        <stop offset="1" stop-color="#C837AB"/>
                                    </linearGradient>
                                    <clipPath id="clip0footInst">
                                        <rect width="512" height="512" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="<?php echo get_field('ssylka_na_fejsbuk', 'options') ?>" target="_blank">
                            <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0footFb)">
                                    <path d="M31.9997 34.8373C-8.23497 76.6293 -0.000306403 121.024 -0.000306403 255.893C-0.000306403 367.893 -19.5416 480.171 82.7304 506.603C114.666 514.816 397.632 514.816 429.525 506.56C472.106 495.573 506.752 461.035 511.488 400.811C512.149 392.405 512.149 119.531 511.466 110.955C506.432 46.8053 466.944 9.83464 414.912 2.34664C402.986 0.618639 400.597 0.106639 339.413 -2.74732e-05C122.389 0.106639 74.8157 -9.55736 31.9997 34.8373V34.8373Z" fill="#3B5999"/>
                                    <path d="M352 256V192C352 174.336 366.336 176 384 176H416V96H352C298.965 96 256 138.965 256 192V256H192V336H256V512H352V336H400L432 256H352Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0footFb">
                                        <rect width="512" height="512" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer-info col-12">
                <p class="copy">© 2014-<?php echo date('Y'); ?> SMMSTUDIO</p>
                <a href="<?php echo $linkPravPol; ?>" target="_blank"><?php echo $textPravPoly; ?></a>
            </div>
        </div>
    </div>
    <style type="text/css">
        footer .content .our-contacts .phone svg{
                display: none;
            }

            footer .content .our-contacts .working-time {
                padding-left: 0;
            }
    </style>
</footer><!-- #colophon -->
    <?php include ('template-parts/popup.php');?>
</div><!-- #page -->

<!-- binotel -->
<script type="text/javascript">
    (function(d, w, s) {
    var widgetHash = 'v2xi07ep01pa3523tldc', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
    ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
    var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
    })(document, window, 'script');
</script>

<?php wp_footer(); ?>

</body>
</html>

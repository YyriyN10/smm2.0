<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package smmstudio
 */

get_header();
?>

    <section class="error-404 not-found">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <div class="text-404">
                        <p>4
                            <span class="raund-wrapper">
                                <span class="bottom-raund">
                                    <img src="<?php echo THEME_PATH; ?>/assets/img/travolta.gif" alt="">
                                </span>
                            </span>
                            4
                        </p>
                    </div>
                    <?php
                        $siteLang = get_bloginfo('language');

                        if ( $siteLang == 'ru' ):
                    ?>
                        <h3>Упс... кажется что-то пошло не так. Страница, которую вы ищите не существует или была удалена.</h3>
                        <a href="<?php echo get_home_url();?>/target" class="button">вернуться на сайт</a>
                    <?php elseif ( $siteLang == 'ua' ):?>
                        <h3>Упс… Здається, щось пішло не так. Сторінка, яку ви шукаєте, не існує або видалена.</h3>
                        <a href="<?php echo get_home_url();?>/target-2" class="button">Повернутися на сайт</a>
                    <?php elseif ( $siteLang == 'en' ):?>
                        <h3>Oops... something seems to have gone wrong. The page you are looking for does not exist or has been deleted.</h3>
                        <a href="<?php echo get_home_url();?>" class="button">Return to site</a>
                    <?php else:?>
                    <?php endif;?>
                </div>

            </div>
        </div>
    </section><!-- .error-404 -->

<?php
get_footer();

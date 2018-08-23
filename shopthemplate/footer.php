<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShopThemplate
 */

?>

        <footer class="main">
            <section class="contact">
                <div class="container">
                    <div class="contact-form row">
                        <div class="col-xs-12 col-md-6">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2>
                                Masz jakieś pytania?
                            </h2>
                            <div role="form" class="wpcf7" id="wpcf7-f85-o1" lang="pl-PL" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="/#wpcf7-f85-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="85">
                                        <input type="hidden" name="_wpcf7_version" value="5.0.3">
                                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f85-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                    </div>
                                    <p>

                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="your-email" placeholder="Wpisz swój email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false">
                                        </span>
                                        </label>
                                    </p>
                                    <p>

                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea placeholder="Treść ..." name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                        </span>
                                        </label>
                                    </p>
                                    <p>
                                        <input type="submit" value="Wyślij" class="wpcf7-form-control wpcf7-submit">
                                        <span class="ajax-loader"></span>
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="footer_copyright">
                Wszystkie prawa zastrzeżone &copy; 2018
            </section>
        </footer>
        </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.tabSlideOut.js"></script>

    <div id="my-tab">
        <span class="handle">
            <i class="fab fa-facebook-f"></i>
        </span>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNewTekIlonaGrzeskowiak%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>

    <script>

        $('#my-tab').tabSlideOut({
            tabLocation: 'right',
            action: 'click',
            offset: '200px'
        });

    </script>
</body>
<!-- Script -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/rangeSlider.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<!-- Script END-->
<?php wp_footer();?>
</html>
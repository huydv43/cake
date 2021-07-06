<?php
class Home 
{
    public static function slider() 
    {
        ?>
            <div class="hero__slider owl-carousel">
                <div class="hero__item set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-1.jpg">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <div class="hero__text">
                                    <h2>Making your life sweeter one bite at a time!</h2>
                                    <a href="#" class="primary-btn">Our cakes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-1.jpg">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <div class="hero__text">
                                    <h2>Making your life sweeter one bite at a time!</h2>
                                    <a href="#" class="primary-btn">Our cakes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
}
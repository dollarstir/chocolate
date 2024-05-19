<?php
class Website{


    public static function footer(): string
    {
 return '	<footer id="main-footer">



 <div id="footer-bottom">
     <div class="container clearfix">
         <ul class="et-social-icons">

             <li class="et-social-icon et-social-facebook">
                 <a href="https://www.facebook.com/The-Chocolate-Factory-441643873026816/" class="icon">
                     <span>Facebook</span>
                 </a>
             </li>
             <li class="et-social-icon et-social-instagram">
                 <a href="https://www.instagram.com/chocolatefactory_stmaryslondon/" class="icon">
                     <span>Instagram</span>
                 </a>
             </li>
             <li class="et-social-icon et-social-rss">
                 <a href="feed/index.rss" class="icon">
                     <span>RSS</span>
                 </a>
             </li>

         </ul>
     </div>
 </div>
</footer>';
    }

    public static function topbar(): string
    {
        return '<div id="top-header">
        <div class="container clearfix">


            <div id="et-info">
                <span id="et-info-phone">+1619-240-4437</span>

                <a href="mailto:info@richeddychocolatecompany.com"><span
                        id="et-info-email">info@richeddychocolatecompany.com</span></a>

                <ul class="et-social-icons">

                    <li class="et-social-icon et-social-facebook">
                        <a href="https://www.facebook.com/" class="icon">
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li class="et-social-icon et-social-instagram">
                        <a href="https://www.instagram.com/" class="icon">
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li class="et-social-icon et-social-rss">
                        <a href="feed/index.rss" class="icon">
                            <span>RSS</span>
                        </a>
                    </li>

                </ul>
            </div>


            <div id="et-secondary-menu">
                <div class="et_duplicate_social_icons">
                    <ul class="et-social-icons">

                        <li class="et-social-icon et-social-facebook">
                            <a href="https://www.facebook.com/" class="icon">
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="et-social-icon et-social-instagram">
                            <a href="https://www.instagram.com/" class="icon">
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li class="et-social-icon et-social-rss">
                            <a href="feed/index.rss" class="icon">
                                <span>RSS</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>


    <header id="main-header" data-height-onload="66">
        <div class="container clearfix et_menu_container">
            <div class="logo_container">
                <span class="logo_helper"></span>
                <a href="index.php">
                    <img src="wp-content/uploads/2018/01/chocolate-factory-logo.png" width="250" height="159"
                        alt="The Chocolate Factory" id="logo" data-height-percentage="100" />
                </a>
            </div>
            <div id="et-top-navigation" data-height="66" data-fixed-height="40">
                <nav id="top-menu-nav">
                    <ul id="top-menu" class="nav">
                        <li id="menu-item-48694"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-48694">
                            <a href="index.php" aria-current="page">HOME</a></li>
                        <li id="menu-item-50332"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-50332">
                            <a href="#">SEASONAL SPECIALS</a>
                            <ul class="sub-menu">
                                <li id="menu-item-49879"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49879">
                                    <a href="easter/index.php">EASTER</a></li>
                                <li id="menu-item-50131"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50131">
                                    <a href="valentines/index.php">VALENTINES</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-50375"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50375"><a
                                href="chocolate-gallery/index.php">CHOCOLATES</a></li>
                        <li id="menu-item-48693"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48693"><a
                                href="#">CORPORATE GIFTS</a></li>
                    </ul>
                </nav>




                <div id="et_mobile_nav_menu">
                    <div class="mobile_nav closed">
                        <span class="select_page">Select Page</span>
                        <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                    </div>
                </div>
            </div> <!-- #et-top-navigation -->
        </div> <!-- .container -->
    </header> <!-- #main-header -->';

    }

   public static function head()
   {

    require_once __DIR__ . '/head.php';
   }


   public static function footerTop (): string
   {
    return '<div class="et_pb_section et_pb_section_9 et_pb_section_parallax et_pb_with_background et_section_regular">

    <span class="et_parallax_bg_wrap"><span class="et_parallax_bg" style="background-image: url(wp-content/uploads/2018/02/contact-bg.jpg);"></span></span>




    <div class="et_pb_row et_pb_row_13 et_pb_row_fullwidth et_animated et_pb_equal_columns et_pb_gutters1">
        <div class="et_pb_column et_pb_column_1_2 et_pb_column_24  et_pb_css_mix_blend_mode_passthrough">




            <div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_dark">




                <div class="et_pb_text_inner">
                    <h2>london  market</h2>
                </div>
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_left et_pb_bg_layout_dark">




                <div class="et_pb_text_inner">
                    <h4>56 Shoreditch High Street<br />London, E1 6JJ<br />United Kingdom</h4>
                    <p>Tel/fax : 619-240-4437<br />info@richeddychocolatecompany.com</p>
                </div>
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_12  et_pb_text_align_left et_pb_bg_layout_dark">




                <div class="et_pb_text_inner">
                    <h4>Monday &#8211; Friday</h4>
                    <p>10:00 AM &#8211; 5:30 PM</p>
                    <h4>Saturday</h4>
                    <p>10 AM &#8211; 5 PM</p>
                    <h4>Sunday</h4>
                    <p>11 AM &#8211; 4 PM</p>
                    <h4> </h4>
                    <h4>EXTENDED HOURS FOR SEASONAL OCCASIONS<br />PLEASE PHONE FOR
                        DETAILS</h4>
                </div>
            </div>
        </div>
        <div class="et_pb_column et_pb_column_1_2 et_pb_column_25  et_pb_css_mix_blend_mode_passthrough et-last-child">




            <div class="et_pb_module et_pb_text et_pb_text_13  et_pb_text_align_left et_pb_bg_layout_dark">




                <!-- <div class="et_pb_text_inner">
                    <h2>london covent garden market</h2>
                </div> -->
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_14  et_pb_text_align_left et_pb_bg_layout_dark">




                <!-- <div class="et_pb_text_inner">
                    <h4>130 King Street<br />London, Ontario<br />N6A 1C5</h4>
                    <p>tel : 619-240-4437</p>
                </div> -->
            </div>
            <div class="et_pb_module et_pb_text et_pb_text_15  et_pb_text_align_left et_pb_bg_layout_dark">




                <!-- <div class="et_pb_text_inner">
                    <h4>Monday &#8211; Saturday : 8 am &#8211; 6 pm<br />Sunday 11 am
                        &#8211; 4 pm</h4>
                </div> -->
            </div>
        </div>




    </div>


</div>';

   }
}
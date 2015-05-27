<?php
// source: /var/www/analyza/app/presenters/templates/Homepage/default.latte

class Templatebb50b804dd20ffa5f1fa07a54999c9c1 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('08c86f828d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbe5af369e6f_content')) { function _lbe5af369e6f_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><!-- Start Switcher -->
<div class="demo_changer">
    <div class="demo-icon">
        <i class="fa fa-cog fa-spin fa-2x"></i>
    </div><!-- end opener icon -->
    <div class="form_holder">
        <div class="row">
            <div class="col-sm-12">
                <div class="predefined_styles"> 
                    <!-- MODULE #1 -->
                    <a href="" data-rel="width-full" class="styleswitch2">Full Width</a><br>
                    <a href="" data-rel="width-boxed" class="styleswitch2">Boxed Layout</a> 
                    <!-- END MODULE #1 -->
                    <hr>
                    <h4>Colors</h4>
                    <!-- MODULE #2 -->
                    <a href="" data-rel="main-css" class="styleswitch"><div class="btn orange-css-square"></div></a>
                    <a href="" data-rel="blue" class="styleswitch"><div class="btn blue-css-square"></div></a>    
                    <a href="" data-rel="green" class="styleswitch"><div class="btn green-css-square"></div></a>
                    <a href="" data-rel="purple" class="styleswitch"><div class="btn purple-css-square"></div></a>
                    <a href="" data-rel="dark-blue" class="styleswitch"><div class="btn dark-blue-css-square"></div></a>
                    <a href="" data-rel="red" class="styleswitch"><div class="btn red-css-square"></div></a>
                    <a href="" data-rel="silver" class="styleswitch"><div class="btn silver-css-square"></div></a>
                    <a href="" data-rel="seagul" class="styleswitch"><div class="btn seagul-css-square"></div></a>
                    <a href="" data-rel="pinkish" class="styleswitch"><div class="btn pinkish-css-square"></div></a>
                    <!-- END MODULE #2 -->
                </div><!-- end predefined_styles -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end form_holder -->
</div><!-- end demo_changer -->
<!-- End Switcher -->

<!-- Begin Boxed or Fullwidth Layout -->
<div id="bg-boxed">
    <div class="boxed">

        <!-- Begin Header -->
        <header>

            <!-- Begin Top Bar -->
            <div class="top-bar">
                <div class="container container-header">
                    <div class="row top-bar-row">
                        <!-- Address and Phone -->
                        <div class="col-sm-7 hidden-xs contact-info">
                            <span class="ion-android-system-home home-icon"></span>Bright Passage, Fond du Lac, 63138 USA<span class="ion-ios7-telephone phone-icon"></span>1702983921
                        </div>
                        <!-- Social Buttons -->
                        <div class="col-sm-5 text-right topmenu-holder">
                            <ul class="topbar-list list-inline">
                                <li><a data-toggle="modal" data-target="#login">Login</a></li>
                                <li><a href="pages-forms-register-login.html">Register</a></li>
                                <li>						
                                    <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--/row --> 
                </div><!--/container header -->   
            </div><!--/top bar -->   
            <!-- End Top Bar -->

            <!-- Login -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">�</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="loginLabel">Login</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Do you flex?
                                    </label>
                                </div>
                            </form><!-- /form -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-rw btn-primary">Login</button>
                        </div>
                    </div><!-- /modal content -->
                </div><!-- /modal dialog -->
            </div><!-- /modal holder -->
            <!-- End Login -->

            <!-- Begin Navigation -->
            <div class="navbar">
                <div class="container container-header">
                    <div class="navbar-header">
                        <!-- Brand -->
                        <a href="index.html" class="navbar-brand">
                            <div class="css-logo"></div> <img src="images/logo.png" class="raleway-logo" alt="Raleway Responsive Parallax Bootstrap 3 Template">
                        </a>
                        <!-- Mobile Navigation -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!-- /navbar header -->   

                    <!-- Main Navigation -->
                    <nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown active">
                                <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Home<span class="fa fa-angle-down dropdown-arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Option 1: Home</a></li>
                                    <li><a href="index-home.html">Option 2: aHome</a></li>
                                    <li><a href="index-home-b.html">Option 3: bHome</a></li>
                                    <li><a href="index-carousel-subnav.html">Option 4: Carousel Subnav</a></li>
                                    <li><a href="dark-navigation-example.html">Dark Navigation</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Footer Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-footer-options.html">Dark</a></li>
                                            <li><a tabindex="-1" href="features-footer-options-2.html">Light</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Pages<span class="fa fa-angle-down dropdown-arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="trigger">About us &amp; Team</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pages-about-us-1.html">About us 1</a></li>
                                            <li><a tabindex="-1" href="pages-about-us-2.html">About us 2</a></li>
                                            <li><a tabindex="-1" href="pages-about-us-team.html">About us &amp; Team</a></li>
                                            <li><a tabindex="-1" href="pages-team-1.html">The Team 1</a></li>
                                            <li><a tabindex="-1" href="pages-team-2.html">The Team 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pages-services-1.html">Option 1</a></li>
                                            <li><a tabindex="-1" href="pages-services-2.html">Option 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">About Me</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pages-user-profile-1.html">User Profile 1</a></li>
                                            <li><a tabindex="-1" href="pages-user-profile-2.html">User Profile 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-freebies.html">Freebies</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Forms</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pages-forms-register-login.html">Register &amp; Login</a></li>
                                            <li><a tabindex="-1" href="pages-contact-1.html">Contact 1</a></li>
                                            <li><a tabindex="-1" href="pages-contact-2.html">Contact 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">404</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pages-404-default.html">Default</a></li>
                                            <li><a tabindex="-1" href="pages-404-default-image.html">Image</a></li>
                                            <li><a tabindex="-1" href="pages-404-fullscreen.html">Fullscreen</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Basic Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="pages-sidebar-right.html">Sidebar Right</a></li>
                                            <li><a tabindex="-1" href="pages-sidebar-left.html">Sidebar Left</a></li>
                                            <li><a tabindex="-1" href="pages-menu-right.html">Menu Right</a></li>
                                            <li><a tabindex="-1" href="pages-menu-left.html">Menu Left</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Features<span class="fa fa-angle-down dropdown-arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="features-parallax.html">Parallax</a></li>
                                    <li><a href="features-animations.html">Animations</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Icons</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-icons-fontawesome.html">FontAwesome</a></li>
                                            <li><a tabindex="-1" href="features-icons-ionicons.html">Ionicons</a></li>
                                            <li><a tabindex="-1" href="features-icons-glyphicons.html">Glyphicons</a></li>
                                            <li><a tabindex="-1" href="features-icons-raleway.html">Raleway</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Buttons</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-buttons-basic.html">Basic</a></li>
                                            <li><a tabindex="-1" href="features-buttons-social.html">Social</a></li>
                                            <li><a tabindex="-1" href="features-buttons-library.html">Library</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="features-columns.html">Columns</a></li>
                                    <li><a href="features-typography.html">Typography</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Components</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-alerts.html">Alerts</a></li>
                                            <li><a tabindex="-1" href="features-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                            <li><a tabindex="-1" href="features-lists.html">Lists</a></li>
                                            <li><a tabindex="-1" href="features-thumbnails.html">Thumbnails</a></li>
                                            <li><a tabindex="-1" href="features-tables.html">Tables</a></li>
                                            <li><a tabindex="-1" href="features-dividers.html">Dividers</a></li>
                                            <li><a tabindex="-1" href="features-headings.html">Headings</a></li>
                                            <li><a tabindex="-1" href="features-progress-bars.html">Progress Bars</a></li>
                                            <li><a tabindex="-1" href="features-modals.html">Modals</a></li>
                                            <li><a tabindex="-1" href="features-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                                            <li><a tabindex="-1" href="features-labels-badges.html">Labels &amp; Badges</a></li>
                                            <li><a tabindex="-1" href="features-forms.html">Forms</a></li>
                                            <li><a tabindex="-1" href="features-panels.html">Panels</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="features-sliders.html">Sliders</a></li>
                                    <li><a href="features-pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="features-calltoactions.html">Call to Action</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Content Boxes</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-content-boxes-icon-big.html">Icon Big</a></li>
                                            <li><a tabindex="-1" href="features-content-boxes-icon-small.html">Icon Small</a></li>
                                            <li><a tabindex="-1" href="features-content-boxes-icon-left.html">Icon Left Aligned</a></li>
                                            <li><a tabindex="-1" href="features-content-boxes.html">Boxes</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Header Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-header-1.html">Default</a></li>
                                            <li><a tabindex="-1" href="features-header-2.html">Option 2</a></li>
                                            <li><a tabindex="-1" href="features-header-3.html">Option 3</a></li>
                                            <li><a tabindex="-1" href="features-header-parallax.html">Parallax</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Team Member Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-team-members-1.html">Option 1</a></li>
                                            <li><a tabindex="-1" href="features-team-members-2.html">Option 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="features-recent-projects.html">Recent Projects</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Footer Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="features-footer-options.html">Dark</a></li>
                                            <li><a tabindex="-1" href="features-footer-options-2.html">Light</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="features-image-video-zoom.html">Image &amp; Video Zoom</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Portfolio<span class="fa fa-angle-down dropdown-arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Boxed</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="portfolio-fixed-3-columns.html">3 Columns</a></li>
                                            <li><a tabindex="-1" href="portfolio-fixed-4-columns.html">4 Columns</a></li>
                                            <li><a tabindex="-1" href="portfolio-fluid-boxed.html">Fluid</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Circle</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="portfolio-fixed-3-columns-circle.html">3 Columns</a></li>
                                            <li><a tabindex="-1" href="portfolio-fixed-4-columns-circle.html">4 Columns</a></li>
                                            <li><a tabindex="-1" href="portfolio-fluid-circle.html">Fluid</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="trigger">Borderless</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="portfolio-borderless-example.html">Borderless Example</a></li>
                                            <li><a tabindex="-1" href="portfolio-fluid-borderless.html">Fluid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio-single-project.html">Single Project</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Blog<span class="fa fa-angle-down dropdown-arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-posts-1.html">Posts 1 Column</a></li>
                                    <li><a href="blog-single-post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-contact-2.html">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                                <ul class="dropdown-menu dropdown-menu-user">
                                    <li id="dropdownForm">
                                        <div class="dropdown-form">
                                            <form class="form-default form-inline p15">
                                                <div class="input-group">
                                                    <input type="text" class="form-control search-input" placeholder="Search...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-rw btn-primary search-btn" type="button">Go!</button>
                                                    </span>
                                                </div><!-- /input group -->  
                                            </form><!-- /searh form -->  
                                        </div><!-- /dropdown form -->  
                                    </li><!-- /dropdownForm list item -->  
                                </ul><!-- /search dropdown -->
                            </li><!-- /search navbar list item -->  
                        </ul><!-- /navbar right -->  
                    </nav><!-- /nav -->  

                </div><!-- /container header -->   
            </div><!-- /navbar -->   
            <!-- End Navigation -->

        </header><!-- /header -->
        <!-- End Header -->

        <!-- Begin Carousel -->
        <div class="carousel">
            <div id="carouselHome" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselHome" data-slide-to="1"></li>
                    <li data-target="#carouselHome" data-slide-to="2"></li>
                </ol>

                <!-- Begin Wrapper for slides -->
                <div class="carousel-inner">

                    <!-- Begin Item 1 -->
                    <div class="item active">
                        <!-- Item BG -->
                        <div class="background-main" style="background-image:url('images/backgrounds/bg1.png');" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">
                            <div class="container">
                                <div class="row carousel-content center-vertically-right">
                                    <!-- Content -->
                                    <div class="fadeInRight-animated" data-animation="fadeInRight">
                                        <div class="carousel-description col-sm-5">
                                            <h3 class="heavy text-white"><span class="carousel-title-bgclear">Clean Code + Design</span></h3><h3 class="heavy text-white"><span class="carousel-title-bgclear">HTML5 and CSS3</span></h3><h3 class="heavy text-white"><span class="carousel-title-bgclear">70+ Pages Total</span></h3>
                                            <p>With over 90% of Bootstraps components restyled, over 35 pages of shortcode features, and over 30 pages for you to use, this is the <b>ultimate</b> parallax, responsive Bootstrap 3 template.</p>
                                        </div>
                                    </div>
                                    <div class="fadeInLeft-animated" data-animation="fadeInLeft">
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <img src="images/showcase-full.png" class="img-responsive carousel-image" alt="Responsive Showcase">
                                        </div>
                                    </div>
                                </div><!-- /content container -->
                            </div><!-- /container -->
                        </div><!-- /bg div -->
                    </div><!-- /item -->
                    <!-- End Item 1 -->

                    <!-- Begin Item 2 -->
                    <div class="item">
                        <!-- Item BG -->
                        <div style="background-image:url('images/backgrounds/bg4.jpg');" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">
                            <div class="container">
                                <div class="row carousel-content center-vertically-left">
                                    <!-- Img -->
                                    <div class="fadeInLeft-animated" data-animation="fadeInLeft">
                                        <div class="col-sm-6 hidden-xs">
                                            <img src="images/showcase2.png" class="img-responsive carousel-image" alt="Responsive Showcase">
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="fadeInRight-animated" data-animation="fadeInRight">
                                        <div class="carousel-description mt10 col-sm-5 col-sm-offset-1">
                                            <h4 class="heavy text-white"><span class="carousel-title-bg">Many Javascript Plugins</span></h4>
                                            <h4 class="heavy text-white"><span class="carousel-title-bg">Responsive Video Content</span></h4>
                                            <h4 class="heavy text-white"><span class="carousel-title-bg">Shortcodes Pages + Docs</span></h4>
                                            <p>Flexible for any project. And hey, we made sure you have all the features you need for any website. Also shortcodes on every features page, just copy & paste where you need.</p>
                                            <a href="features.html" class="btn btn-rw btn-primary">
                                                Features &nbsp;&nbsp;<span class="ion-ios7-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /content container -->
                            </div><!-- /container -->
                        </div><!-- /bg div -->
                    </div><!-- /item -->
                    <!-- End Item 2 -->

                    <!-- Begin Item 3 -->
                    <div class="item">
                        <!-- Item BG -->
                        <div style="background-image:url('images/backgrounds/bg5.jpg');" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">
                            <div class="container">
                                <div class="row carousel-content center-vertically-right">
                                    <div class="fadeInUpBig-animated" data-animation="fadeInUpBig">
                                        <div class="carousel-description col-sm-8 col-sm-offset-2 text-center">
                                            <!-- Content -->
                                            <span class="fa fa-heartbeat fa-4x text-white"></span>
                                            <h2 class="heavy text-white"><span class="carousel-title-bgclear">Clean Code + Design</span></h2>
                                            Raleway comes packed with over 30 pages and 50 components. All restyled to refresh your visitors. We have pricing tables, 404 pages, coming soon pages, about pages, and many more.<br>
                                        </div>
                                    </div>
                                </div><!-- /content container -->
                            </div><!-- /container -->
                        </div><!-- /bg div -->
                    </div><!-- /item -->
                    <!-- End Item 3 -->

                </div><!-- /carousel inner -->
                <!-- End Wrapper for slides -->

                <!-- Controls -->
                <a class="left carousel-control" href="#carouselHome" role="button" data-slide="prev">
                    <span class="ion-ios7-arrow-left carousel-arrow-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carouselHome" role="button" data-slide="next">
                    <span class="ion-ios7-arrow-right carousel-arrow-right" aria-hidden="true"></span>
                </a>

            </div><!-- /carousel id div -->
        </div><!-- /carousel div -->
        <!-- End Carousel -->

        <!-- Begin 3 Services -->
        <div class="background-light-grey pt60 pb60 border-bottom">
            <div class="container">
                <div class="row">
                    <!-- Content 1 -->
                    <div class="col-sm-4 fadeInUp-animated text-center">
                        <span class="ion-beaker bordered-icon-sm"></span>
                        <h4 class="mt15">We do parallax.</h4>
                        <p class="p15xs no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
                    </div>
                    <!-- Content 2 -->
                    <div class="col-sm-4 fadeInUp-animated text-center mt20-xs">
                        <span class="ion-beer bordered-icon-sm"></span>
                        <h4 class="mt15">We do animations.</h4>
                        <p class="p15xs no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
                    </div>
                    <!-- Content 3 -->
                    <div class="col-sm-4 fadeInUp-animated text-center mt20-xs">
                        <span class="ion-help-buoy bordered-icon-sm"></span>
                        <h4 class="mt15">We do responsive.</h4>
                        <p class="p15xs no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
                    </div>
                </div>
            </div><!-- /container -->
        </div><!-- /cta -->
        <!-- End 3 Services -->

        <!-- Begin Accordion + IMG  -->
        <div class="mt40 mb40">
            <div class="container">

                <!-- Begin Title -->
                <div class="row">
                    <div class="col-sm-12 mb20">
                        <div class="heading"><h4>About us</h4></div>
                    </div>
                </div>

                <!-- Begin Accordion Row -->
                <div class="row">

                    <div class="col-sm-6" data-sr="enter left">

                        <!-- Begin Accordion -->
                        <div class="panel-group" id="accordion">
                            <!-- Item 1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            We have over <b>30+</b> features pages.
                                        </a>
                                    </h4>
                                </div><!-- /panel heading -->
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        We built this template keeping in mind the features you might need on your next project. Giving you a variety of components to utilize, a variety of pages to build on, and all of the plugins you might need, already configured for Bootstrap 3. Aliquam erat volutpat. Aenean euismod nisl sed justo pharetra, et pretium mauris porttitor. Mauris luctus justo eget tempus ornare. Pellentesque vitae sollicitudin ante.
                                    </div>
                                </div><!-- /panel collapse -->
                            </div><!-- /panel -->

                            <!-- Item 2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            We like pre built <i>components</i>.
                                        </a>
                                    </h4>
                                </div><!-- /panel heading -->
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur. Aliquam erat volutpat. Aenean euismod nisl sed justo pharetra, et pretium mauris porttitor. Mauris luctus justo eget tempus ornare. Pellentesque vitae sollicitudin ante.
                                    </div>
                                </div><!-- /panel collapse -->
                            </div><!-- /panel -->

                            <!-- Item 3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            We like to sleep.
                                        </a>
                                    </h4>
                                </div><!-- /panel heading -->
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur. Aliquam erat volutpat. Aenean euismod nisl sed justo pharetra, et pretium mauris porttitor. Mauris luctus justo eget tempus ornare. Pellentesque vitae sollicitudin ante.
                                    </div>
                                </div><!-- /panel collapse -->
                            </div><!-- /panel -->
                        </div><!-- /panel group -->

                        <!-- Button -->
                        <div class="text-center">
                            <a href="pages-about-us-team.html" class="btn btn-rw btn-primary">
                                About us
                            </a>
                        </div><!-- /button -->

                    </div><!-- /column -->

                    <!-- Begin Image -->
                    <div class="col-sm-6" data-sr="enter bottom" >
                        <img src="images/showcase.png" class="img-responsive showcase-image" alt="Responsive Showcase 2">
                    </div><!-- /column -->

                </div><!-- /row -->
                <!-- End Accordion Row -->

            </div><!-- /container -->
        </div><!-- /content -->
        <!-- End Accordion + IMG -->

        <!-- Begin Carousel + Intro -->
        <div class="background-light-grey pt40 pb40 border-top">
            <div class="container">
                <!-- Begin Carousel + Content -->
                <div class="row">

                    <!-- Begin Carousel -->
                    <div class="col-sm-4" data-sr="enter left">
                        <div id="homeCarousel2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#homeCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#homeCarousel2" data-slide-to="1"></li>
                                <li data-target="#homeCarousel2" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div style="background-image:url('images/backgrounds/stock2.jpg'); height:260px;"></div>
                                </div>
                                <div class="item">
                                    <div style="background-image:url('images/backgrounds/stock7.jpg'); height:260px"></div>
                                </div>
                                <div class="item">
                                    <div style="background-image:url('images/backgrounds/stock1.jpg'); height:260px"></div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#homeCarousel2" role="button" data-slide="prev">
                                <span class="ion-ios7-arrow-left carousel-arrow-left" aria-hidden="true"></span>
                            </a>
                            <a class="right carousel-control" href="#homeCarousel2" role="button" data-slide="next">
                                <span class="ion-ios7-arrow-right carousel-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- /column -->
                    <!-- End Carousel -->

                    <!-- Content Inside -->
                    <div class="col-sm-8">
                        <div class="heading mb20 mt30-xs"><h4><span class="ion-beaker mr15"></span>The Studio</h4></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu risus libero. Donec et lorem lacinia, <a class="tooltip-active" data-toggle="tooltip" data-placement="top" title="Tooltip on top">adipiscing</a> nunc nec, hendrerit sapien. Sed in scelerisque tortor. Praesent porttitor odio non ullamcorper gravida.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu risus libero. Donec et lorem lacinisent porttitor odio non ullamcorper gravida.</p>
                        <!-- List -->
                        <ul class="list-arrow-2-color no-margin">
                            <li><small>Etiam mollis pharetra adipiscing. Etiam porta in sem vitae suscipit. </small></li>
                            <li><small>Consectetur adipiscing elit. Maecenas tempsam suscipit sagittis vestibulum.</small></li>
                            <li><small>Nulla volutpat aliquam velit</small></li>
                            <li><small>Faucibus porta lacus fringilla vel</small></li>
                        </ul>  
                    </div><!-- /column -->
                    <!-- End Content Inside -->

                </div><!-- /row -->
                <!-- End Carousel + Content -->

            </div><!-- /container -->
        </div><!-- /content -->
        <!-- End Carousel + Intro -->

        <!-- Begin Recent Work + Clients -->
        <section class="pt40 mb40 border-top">
            <div class="container">		
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading mb30">
                            <h4><span class="ion-android-social-user mr15"></span>Recent Work</h4>
                            <div class="owl-controls">
                                <div id="customNav" class="owl-nav"></div>
                            </div>
                        </div>
                        <div id="owl-carousel-thumb" class="owl-carousel">
                            <div class="thumbnail">
                                <div class="caption v-wrap">
                                    <div class="thumbnail-caption-holder v-box">
                                        <h4 class="text-white">The Latia Project</h4>
                                        <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                    </div>
                                </div>
                                <img src="images/backgrounds/stock1.jpg" alt="...">
                            </div>
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="thumbnail-caption-holder">
                                        <h4 class="text-white">Goose UI</h4>
                                        <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                    </div>
                                </div>
                                <img src="images/backgrounds/stock2.jpg" alt="...">
                            </div>
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="thumbnail-caption-holder">
                                        <h4 class="text-white">Schroder's List</h4>
                                        <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                    </div>
                                </div>
                                <img src="images/backgrounds/stock3.jpg" alt="...">
                            </div>
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="thumbnail-caption-holder">
                                        <h4 class="text-white">NO Pelicans</h4>
                                        <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                    </div>
                                </div>
                                <img src="images/backgrounds/stock4.jpg" alt="...">
                            </div>
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="thumbnail-caption-holder">
                                        <h4 class="text-white">Fanbango</h4>
                                        <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                    </div>
                                </div>
                                <img src="images/backgrounds/stock5.jpg" alt="...">
                            </div>
                            <div class="thumbnail">
                                <div class="caption">
                                    <div class="thumbnail-caption-holder">
                                        <h4 class="text-white">The Latia Project</h4>
                                        <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                    </div>
                                </div>
                                <img src="images/backgrounds/stock6.jpg" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Client 1 -->
                    <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left" >
                        <a href="#"><img src="images/logos/boomerang.png" class="img-responsive clients-img" alt="Client 1"></a>
                    </div>

                    <!-- Client 2 -->
                    <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
                        <a href="#"><img src="images/logos/backlight.png" class="img-responsive clients-img" alt="Client 2"></a>
                    </div>

                    <!-- Client 3 -->
                    <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
                        <a href="#"><img src="images/logos/equi.png" class="img-responsive clients-img" alt="Client 3"></a>
                    </div>

                    <!-- Client 4 -->
                    <div class="col-sm-2 col-xs-4" data-sr="enter left">
                        <a href="#"><img src="images/logos/ome.png" class="img-responsive clients-img" alt="Client 4"></a>
                    </div>

                    <!-- Client 5 -->
                    <div class="col-sm-2 col-xs-4" data-sr="enter left">
                        <a href="#"><img src="images/logos/euro.png" class="img-responsive clients-img" alt="Client 5"></a>
                    </div>

                    <!-- Client 6 -->
                    <div class="col-sm-2 col-xs-4" data-sr="enter left">
                        <a href="#"><img src="images/logos/micro.png" class="img-responsive clients-img" alt="Client 6"></a>
                    </div>
                </div><!-- /row -->

            </div><!-- /container -->
        </section><!-- /section -->
        <!-- End Recent Work + Clients -->

        <!-- Begin Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-sm-3">
                        <div class="heading-footer"><h4>About</h4></div>
                        <p>Raleway Bootstrap 3 Template is what you need for your next project or client.</p>
                        <a href="features.html" class="btn btn-primary btn-rw mt10">
                            Buy now
                        </a>
                    </div>

                    <!-- Social -->
                    <div class="col-sm-3 mg25-xs">
                        <div class="heading-footer"><h4>Social Networks</h4></div>
                        <a class="btn btn-social-icon btn-twitter btn-lg">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-instagram btn-lg">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-facebook btn-lg">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-social-icon btn-vimeo btn-lg">
                            <i class="fa fa-vimeo-square"></i>
                        </a>
                        <a class="btn btn-social-icon btn-linkedin btn-lg">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="btn btn-social-icon btn-google-plus btn-lg">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-social-icon btn-adn btn-lg">
                            <i class="fa fa-adn"></i>
                        </a>
                        <a class="btn btn-social-icon btn-bitbucket btn-lg">
                            <i class="fa fa-bitbucket"></i>
                        </a>
                        <a class="btn btn-social-icon btn-tumblr btn-lg">
                            <i class="fa fa-tumblr"></i>
                        </a>
                        <a class="btn btn-social-icon btn-flickr btn-lg">
                            <i class="fa fa-flickr"></i>
                        </a>
                    </div>

                    <!-- Contact -->
                    <div class="col-sm-3 mg25-xs">
                        <div class="heading-footer"><h4>Contact us</h4></div>
                        <p><span class="ion-home footer-info-icons"></span><small class="address">228 Park Ave S New York, NY 10003</small></p>
                        <p><span class="ion-email footer-info-icons"></span><small class="address"><a href="mailto:info@raleway.com">info@raleway.com</a></small></p>
                        <p><span class="ion-ios7-telephone footer-info-icons"></span><small class="address">+11192386513</small></p>
                    </div>

                    <!-- Recent Work -->
                    <div class="col-sm-3 hidden-xs">
                        <div class="heading-footer"><h4>Recent Work</h4></div>
                        <div class="col-xs-4 recent-work-padding">
                            <a href="images/projects/web2.jpg" class="thumbnail image-zoom-link">
                                <img src="images/projects/thumbs/web2.jpg" alt="..." class="thumbnail img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4 recent-work-padding">
                            <a href="images/projects/web3.jpg" class="thumbnail image-zoom-link">
                                <img src="images/projects/thumbs/web3.jpg" alt="..." class="thumbnail img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4 recent-work-padding">
                            <a href="images/projects/illustration1.jpg" class="thumbnail image-zoom-link">
                                <img src="images/projects/thumbs/illustration1.jpg" alt="..." class="thumbnail img-responsive">
                            </a>
                        </div>
                    </div>
                </div><!-- /row -->

                <!-- Copyright -->
                <div class="row">
                    <hr class="dark-hr">
                    <div class="col-sm-11 col-xs-10">
                        <p class="copyright">� 2013 Raleway. All rights reserved. Theme by <b>Denis Samardjiev</b>.</p>
                    </div>
                    <div class="col-sm-1 col-xs-2 text-right">
                        <a href="#" class="scroll-top"><div class="footer-scrolltop-holder"><span class="ion-ios7-arrow-up footer-scrolltop"></span></div></a>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </footer><!-- /footer -->
        <!-- End Footer --> 

    </div><!-- /boxed -->
</div><!-- /bg boxed-->
<!-- End Boxed or Fullwidth Layout --><?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['
 
 _firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#">

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#">

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html lang="en-US" prefix="og: http://ogp.me/ns#">

<!--<![endif]-->

<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="UTF-8">
	<title>SSDP Chapter Activity Tracker</title>
	<meta name="description" content="Students for Sensible Drug Policy Chapter Activity Tracker" />
	<!-- Mobile Specific Metas
	================================================== -->

	
<link rel="icon" type="image/x-icon" href="https://ssdp.org/wp-content/uploads/2015/12/ssdp_favicon.png">	
	
<link rel="canonical" href="https://cat.ssdp.org/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="SSDP Chapter Activity Tracker" />
<meta property="og:url" content="https://cat.ssdp.org/" />
<meta property="og:site_name" content="SSDP CAT" />
<meta name="twitter:card" content="" />
<meta name="twitter:title" content="SSDP Chapter Activity Tracker" />

<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//secure.gravatar.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />

<link rel='stylesheet' id='ot-google-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans:300,regular,600' type='text/css' media='all' />

<style id='go-portfolio-styles-inline-css' type='text/css'>
@media only screen and (min-width: 768px) and (max-width: 959px) {
		.gw-gopf-posts { letter-spacing:10px; }
		.gw-gopf {
			
			margin:0 auto;
		}
		.gw-gopf-1col .gw-gopf-col-wrap { 
        	float:left !important;		
			margin-left:0 !important;
        	width:100%;		
		} 
		.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-10cols .gw-gopf-col-wrap { width:50% !important; }		
	}

		@media only screen and (min-width: 480px) and (max-width: 767px) {
		.gw-gopf-posts { letter-spacing:20px; }
		.gw-gopf {
			
			margin:0 auto;
		}		
		.gw-gopf-1col .gw-gopf-col-wrap,
		.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-10cols .gw-gopf-col-wrap { 
        	float:left !important;		
			margin-left:0 !important;
        	width:100%;
		}

		/* RTL */
		.gw-gopf-rtl.gw-gopf-1col .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-10cols .gw-gopf-col-wrap { float:right !important; }
		
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-1col .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-10cols .gw-gopf-col-wrap { float:left !important; }
		
	}
	
	
		@media only screen and (max-width: 479px) {
		.gw-gopf-posts { letter-spacing:30px; }
		.gw-gopf {
			max-width:400px;
			margin:0 auto;
		}
		.gw-gopf-1col .gw-gopf-col-wrap,
		.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-10cols .gw-gopf-col-wrap {
        	margin-left:0 !important;
        	float:left !important;
        	width:100%;
         }
		 
		/* RTL */
		.gw-gopf-rtl.gw-gopf-1col .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-rtl.gw-gopf-10cols .gw-gopf-col-wrap { float:right !important; }
		
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-1col .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-2cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-3cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-4cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-5cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-6cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-7cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-8cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-9cols .gw-gopf-col-wrap,
		.gw-gopf-slider-type.gw-gopf-rtl.gw-gopf-10cols .gw-gopf-col-wrap { float:left !important; }		
		 
	}
</style>
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://ssdp.org/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.0.6' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<link rel='stylesheet' id='parent-style-css'  href='https://ssdp.org/wp-content/themes/fortuna/style.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='popcontact-css'  href='https://ssdp.org/wp-content/themes/fortuna-child/css/bootstrap.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='boc-grid-css'  href='https://ssdp.org/wp-content/themes/fortuna/stylesheets/grid.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='boc-icon-css'  href='https://ssdp.org/wp-content/themes/fortuna/stylesheets/icons.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='boc-main-styles-css'  href='https://ssdp.org/wp-content/themes/fortuna-child/style.css?ver=4.8' type='text/css' media='all' />
<style id='boc-main-styles-inline-css' type='text/css'>
* {font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;}

				#menu > ul > li > a {

					font-size: 11px;

				}


				#menu > ul > li ul > li > a {

					font-family: 'Open Sans', Montserrat, Arial, Helvetica, sans-serif;

				}


				#menu > ul > li ul > li > a {

					font-size: 11px;

				}


				#menu > ul > li ul > li > a {

					text-transform: none;

				}


				#menu > ul > li ul > li > a {

					letter-spacing: -0.01em;

				}


				h1, h2, h3, h4, h5, h6, .title, .heading_font, .counter-digit, .htabs a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li {

					font-family: 'Open Sans', Montserrat, Arial, Helvetica, sans-serif;

				}


				body, .body_font, .body_font h1, .body_font h2, .body_font h3, .body_font h4, .body_font h5 {

					font-family: 'Open Sans', Arial, Helvetica, sans-serif;

				}


				body {

					font-size: 14px;

				}


				.button, a.button, button, input[type='submit'], input[type='reset'], input[type='button'] {

					text-transform: uppercase;

				}


				.button, a.button, button, input[type='submit'], input[type='reset'], input[type='button'] {

					font-weight: bold;

				}


				.button, a.button, button, input[type='submit'], input[type='reset'], input[type='button'] {

					letter-spacing: 0.08em;

				}
	

					#header.scrolled {

						background: rgba(255,255, 255, 1);}

					}

				

				#menu > ul > li:not(.boc_nav_button):hover > a, #header .header_cart li a.icon:hover { color: #08ada7; }

				#menu > ul > li.boc_nav_button a:hover{ background: #08ada7; border: 2px solid #08ada7; }


				.main_menu_underline_effect #menu > ul > li > a:after{ background-color: #09c1c1; }


				.custom_menu_1 #menu > ul > li div { border-top: 2px solid #136f8d; }



				.custom_menu_2 #menu > ul > li div { border-top: 2px solid #136f8d; }



				.custom_menu_3 #menu > ul > li div { border-top: 2px solid #136f8d;}

				.custom_menu_3 #menu > ul > li ul > li > a:hover { background-color: #136f8d;}



				.custom_menu_4 #menu > ul > li div { border-top: 2px solid #136f8d;}			

				.custom_menu_4 #menu > ul > li ul > li > a:hover { background-color: #136f8d;}

				

				.custom_menu_5 #menu > ul > li ul > li > a:hover { background-color: #136f8d;}

				.custom_menu_5 #menu > ul > li:hover > a { border-top: 2px solid #136f8d;}



				.custom_menu_6 #menu > ul > li ul > li > a:hover { background-color: #136f8d;}

				.custom_menu_6 #menu > ul > li:not(.boc_nav_button):hover > a { border-top: 2px solid #136f8d;}

				

				a:hover, a:focus,

				.post_content a:not(.button), 

				.post_content a:not(.button):visited {	color: #136f8d; }

				

				.boc_preloader_icon:before { border-color: #136f8d rgba(0,0,0,0) rgba(0,0,0,0); }

				

				.dark_links a:hover, .white_links a:hover, .dark_links a:hover h2, .dark_links a:hover h3 { color: #136f8d !important; }

				

				.side_icon_box h3 a:hover, 

				.post_content .team_block h4 a:hover,

				.team_block .team_icons a:hover{ color:#136f8d; }



				.button:hover,a:hover.button,button:hover,input[type="submit"]:hover,input[type="reset"]:hover,	input[type="button"]:hover, .btn_theme_color, a.btn_theme_color { color: #fff; background-color:#136f8d;}

				input.btn_theme_color, a.btn_theme_color, .btn_theme_color { color: #fff; background-color:#136f8d;}

				.btn_theme_color:hover, input.btn_theme_color:hover, a:hover.btn_theme_color { color: #fff; background-color: #444444;}

				

				input.btn_theme_color.btn_outline, a.btn_theme_color.btn_outline, .btn_theme_color.btn_outline {

					color: #136f8d !important;

					border: 2px solid #136f8d;

				}

				input.btn_theme_color.btn_outline:hover, a.btn_theme_color.btn_outline:hover, .btn_theme_color.btn_outline:hover{

					background-color: #136f8d !important;

				}
	a, p {
		font-size: 14px;
	}
	

				

				#boc_searchform_close:hover { color:#136f8d;}

				

				.section_big_title h1 strong, h1 strong, h2 strong, h3 strong, h4 strong, h5 strong { color:#136f8d;}

				.top_icon_box h3 a:hover { color:#136f8d;}



				.htabs a.selected  { border-top: 2px solid #136f8d;}

				.resp-vtabs .resp-tabs-list li.resp-tab-active { border-left: 2px solid #136f8d;}

				.minimal_style.horizontal .resp-tabs-list li.resp-tab-active,

				.minimal_style.resp-vtabs .resp-tabs-list li.resp-tab-active { background: #136f8d;}

				

				#s:focus {	border: 1px solid #136f8d;}

				

				.breadcrumb a:hover{ color: #136f8d;}



				.tagcloud a:hover { background-color: #136f8d;}

				.month { background-color: #136f8d;}

				.small_month  { background-color: #136f8d;}



				.post_meta a:hover{ color: #136f8d;}

				

				.horizontal .resp-tabs-list li.resp-tab-active { border-top: 2px solid #136f8d;}

				.resp-vtabs li.resp-tab-active { border-left: 2px solid #136f8d; }



				#portfolio_filter { background-color: #136f8d;}

				#portfolio_filter ul li div:hover { background-color: #136f8d;}

				.portfolio_inline_filter ul li div:hover { background-color: #136f8d;}



				.counter-digit { color: #136f8d;}



				.tp-caption a:hover { color: #136f8d;}



				.more-link1:before { color: #136f8d;}

				.more-link2:before { background: #136f8d;}



				.image_featured_text .pos { color: #136f8d;}



				.side_icon_box .icon_feat i.icon { color: #136f8d;}

				.side_icon_box .icon_feat.icon_solid { background-color: #136f8d; }

				

				.boc_list_item .li_icon i.icon { color: #136f8d;}

				.boc_list_item .li_icon.icon_solid { background: #136f8d; }



				.top_icon_box.type1 .icon_holder .icon_bgr { background-color: #136f8d; }

				.top_icon_box.type1:hover .icon_holder .icon_bgr { border: 2px solid #136f8d; }

				.top_icon_box.type1 .icon_holder .icon_bgr:after,

				.top_icon_box.type1:hover .icon_holder .icon_bgr:after { border: 2px solid #136f8d; }

				.top_icon_box.type1:hover .icon_holder i { color: #136f8d;}



				.top_icon_box.type2 .icon_holder .icon_bgr { background-color: #136f8d; }

				.top_icon_box.type2:hover .icon_holder .icon_bgr { background-color: #fff; }

				.top_icon_box.type2:hover .icon_holder i { color: #136f8d;}



				.top_icon_box.type3 .icon_holder .icon_bgr:after { border: 2px solid #136f8d; }

				.top_icon_box.type3:hover .icon_holder .icon_bgr { background-color: #136f8d; }

				.top_icon_box.type3:hover .icon_holder .icon_bgr:after { border: 2px solid #136f8d; }

				.top_icon_box.type3 .icon_holder i { color: #136f8d;}

				.top_icon_box.type3:hover .icon_holder i { color: #fff; }



				.top_icon_box.type4:hover .icon_holder .icon_bgr { border: 2px solid #136f8d; }

				.top_icon_box.type4:hover .icon_holder .icon_bgr:after { border: 3px solid #136f8d; }

				.top_icon_box.type4 .icon_holder i{ color: #136f8d; }

				.top_icon_box.type4:hover .icon_holder i { color:  #136f8d; }



				.top_icon_box.type5 .icon_holder i{ color: #136f8d; }

				.top_icon_box.type5:hover .icon_holder i { color: #136f8d; }



				h2.title strong {  color: #136f8d;}

				ul.theme_color_ul li:before { color: #136f8d; }



				.custom_slides.nav_design_1 .cs_nav_item.active .cs_nav_icon i.icon{ color: #136f8d;}

				.custom_slides.nav_style_1.nav_design_1 .cs_nav_item:hover .cs_nav_icon i.icon,

				.custom_slides.nav_style_1.nav_design_2 .cs_nav_item:hover .cs_nav_icon i.icon { color: #136f8d;}

				.custom_slides.nav_design_2 .cs_nav_item.active .cs_nav_icon { background: #136f8d;}

				.cs_nav_item.has_no_text:hover .cs_nav_icon i.icon { color: #136f8d;}

				.custom_slides.nav_style_2 .cs_txt { color: #136f8d;}



				.acc_control, .active_acc .acc_control,

				.acc_holder.with_bgr .active_acc .acc_control { background-color: #136f8d;}



				.text_box.left_border {	border-left: 3px solid #136f8d; }



				.owl-theme .owl-controls .owl-nav div { background: #136f8d;}

				.owl-theme .owl-dots .owl-dot.active span { background: #136f8d;}

				.img_slider.owl-theme .owl-controls .owl-nav div:not(.disabled):hover { background: #136f8d;}		



				.testimonial_style_big.owl-theme .owl-controls .owl-nav div:hover,

				.posts_carousel_holder.owl_side_arrows .owl-theme .owl-controls .owl-nav div:hover, 

				.img_carousel_holder.owl_side_arrows .owl-theme .owl-controls .owl-nav div:hover,

				.portfolio_carousel_holder.owl_side_arrows .owl-theme .owl-controls .owl-nav div:hover	{ color: #136f8d;}



				.post_item_block.boxed .pic { border-bottom: 3px solid #136f8d; }



				.team_block .team_desc { color: #136f8d;}



				.bar_graph span, .bar_graph.thin_style span { background-color: #136f8d; }



				.pagination .links a:hover{ background-color: #136f8d;}

				.hilite{ background: #136f8d;}

				.price_column.price_column_featured ul li.price_column_title{ background: #136f8d;}



				blockquote{ border-left: 3px solid #136f8d; }

				.text_box.left_border { border-left: 3px solid #136f8d; }



				.fortuna_table tr:hover td { background: rgba(19,111, 141, 0.08);}



				.header_cart ul.cart_list li a, .header_cart ul.product_list_widget li a { color: #136f8d;}

				.header_cart .cart-notification { background-color: #136f8d;}

				.header_cart .cart-notification:after { border-bottom-color: #136f8d;}

				

				.woocommerce .product_meta a { color: #136f8d;}

				

				.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button { background-color: #136f8d!important; }

				.header_cart .cart-wrap	{ background-color: #136f8d; }

				.header_cart .cart-wrap:before { border-color: transparent #136f8d transparent; }

				.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range{ background-color: #136f8d !important;}



				.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus{ background-color: #136f8d !important;}

				

				.info h2{ background-color: #136f8d;}

				#footer a:hover { color: #136f8d;}

				

				

				

				a .pic_info.type1 .plus_overlay {	border-bottom: 50px solid rgba(19,111, 141, 0.8);}

				a:hover .pic_info.type1 .plus_overlay { border-bottom: 1000px solid rgba(19,111, 141, 0.8); }

				

				a .pic_info.type2 .plus_overlay { border-bottom: 50px solid rgba(19,111, 141, 0.75); }

				a:hover .pic_info.type2 .plus_overlay {	border-bottom: 860px solid rgba(19,111, 141, 0.8);}

				

				a .pic_info.type3  .img_overlay_icon {	background: rgba(19,111, 141, 0.8); }

				a:hover .pic_info.type3 .img_overlay_icon {	background: rgba(19,111, 141, 0.8);}

				

				a .pic_info.type4 .img_overlay_icon { border-bottom: 2px solid rgba(19,111, 141, 0.9);}

				

				a:hover .pic_info.type5 .info_overlay {	background: #136f8d;}

				

				.pic_info.type6 .info_overlay {	background: #136f8d;}

				a .pic_info.type6 .plus_overlay { border-bottom: 50px solid #136f8d; }

				

				.pic_info.type7 .info_overlay {	background: rgba(19,111, 141, 0.85);}				



			

			.breadcrumb {

				display: none;

			}


			#footer {

				position: relative;

			}




.cssClass li{
list-style-type: disc;
list-style-position: inside;
text-indent: -5em;
}

.vc_single_image-wrapper {
    height: 100%;
}


.owl-theme .owl-dots .owl-dot.active span {
    background: #17bebb none repeat scroll 0% 0%;
}

#footer {
    background: #003249;
}
.footer_btm {
    background: #003249;
    border-top: #003249;
}
.annual_report .image_featured_text.img_3d img{
    border: 1px solid #e1e1e1;
}

</style>
<link rel='stylesheet' id='js_composer_front-css'  href='https://ssdp.org/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.2' type='text/css' media='all' />
<link rel='stylesheet' id='boc-animation-styles-css'  href='https://ssdp.org/wp-content/themes/fortuna/stylesheets/animations.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='boc-responsive-style-css'  href='https://ssdp.org/wp-content/themes/fortuna/stylesheets/grid_responsive.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='boc-fonts-css'  href='//fonts.googleapis.com/css?family=Droid%2BSerif%3A400%2C700%2C400italic%2C700italic%7CLato%3A300%2C400%2C700%2C400italic%7CMontserrat%3A400%2C700&#038;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='bsf-Defaults-css'  href='https://ssdp.org/wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=4.8' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-style-min-css'  href='https://ssdp.org/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css?ver=3.14.1' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='https://ssdp.org/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox-1.3.8.min.css?ver=1.6' type='text/css' media='screen' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://ssdp.org/wp-content/plugins/jetpack/css/jetpack.css?ver=5.1' type='text/css' media='all' />


<style type="text/css" data-type="vc_custom-css">.vc_custom_1452823771882{
    height:100%;
}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1452581997983{margin-top: -20px !important;margin-bottom: 0px !important;padding-bottom: 0px !important;}.vc_custom_1460722155265{margin-top: -40px !important;margin-bottom: 0px !important;border-top-width: 0px !important;background-color: #f7f7f7 !important;border-top-color: #eeeeee !important;border-top-style: solid !important;}.vc_custom_1486358298514{padding-top: 0px !important;}.vc_custom_1449270910480{margin-top: 20px !important;margin-bottom: 100px !important;}.vc_custom_1452582654242{padding-bottom: -30px !important;}.vc_custom_1490691670342{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #08ada7 !important;}.vc_custom_1452582427823{margin-top: 25px !important;margin-bottom: 25px !important;}.vc_custom_1452582488338{margin-top: -15px !important;}.vc_custom_1491211462343{padding-top: 35px !important;padding-right: 75px !important;padding-bottom: 35px !important;padding-left: 75px !important;background: #bce051 url(https://ssdp.org/wp-content/uploads/2014/11/bgr_icon_planet.png?id=21504) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1491211474971{padding-top: 35px !important;padding-right: 75px !important;padding-bottom: 35px !important;padding-left: 75px !important;background: #07a8a2;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1491211487882{padding-top: 35px !important;padding-right: 75px !important;padding-bottom: 35px !important;padding-left: 75px !important;background: #2a3636 url(https://ssdp.org/wp-content/uploads/2014/11/bgr_icon_mic.png?id=21503) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1426452890700{padding-top: 100px !important;}.vc_custom_1452823892460{padding-top: 80px !important;padding-right: 70px !important;padding-bottom: 60px !important;padding-left: 70px !important;background-color: #136f8d !important;}.vc_custom_1452823771882{padding-top: 70px !important;padding-right: 100px !important;padding-bottom: 70px !important;padding-left: 100px !important;background-image: url(https://ssdp.org/wp-content/uploads/2015/12/8601703808_7b41e78d85_o.jpg?id=25081) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1427987809551{padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}.vc_custom_1427987815993{padding-top: 20px !important;padding-right: 20px !important;padding-bottom: 20px !important;padding-left: 20px !important;}.vc_custom_1449272759157{padding-top: -20px !important;padding-right: 70px !important;}.vc_custom_1449272364238{padding-top: 20px !important;padding-bottom: 20px !important;}.vc_custom_1426426069052{padding-top: 70px !important;padding-right: 100px !important;padding-bottom: 50px !important;padding-left: 100px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	
	
</head>
<body class="home page-template-default page page-id-23704 tribe-no-js wpb-js-composer js-comp-ver-5.2 vc_responsive">
<div id="page-wrapper" style = "background-color: white"><div id="page">

 <!-- Header::START -->
	<header  id="header" >
		<!-- SubHeader -->
		<div class="full_header">
			<div class="container" id="subheader">
				<div class="section">
					<div class="header_contacts">
						<a class="" data-placement="" data-toggle="tooltip" href="mailto:ssdp@ssdp.org" target="" title="">
						<div class="header_contact_item">
							<span><img src="http://d3n8a8pro7vhmx.cloudfront.net/themes/596913035ee54d5ca5000000/attachments/original/1494731816/topbar-icon_email.png?1494731816" alt="email"></span> ssdp@ssdp.org
						</div></a>
						<div class="header_contact_item">
							<span><img src="http://d3n8a8pro7vhmx.cloudfront.net/themes/596913035ee54d5ca5000000/attachments/original/1494731818/topbar-icon_phone.png?1494731818" alt="phone"></span> 202-393-5280
						</div>
					</div><a class='header_soc_icon' href='https://www.youtube.com/user/SSDP' target='_blank' title='YouTube'><span><img src="http://d3n8a8pro7vhmx.cloudfront.net/themes/596913035ee54d5ca5000000/attachments/original/1494729631/topbar-icon_youtube.png?1494729631" alt="Youtube"></span></a> <a class='header_soc_icon' href='https://www.instagram.com/schoolsnotprisons/' target='_blank' title='Instagram'><span><img src="http://d3n8a8pro7vhmx.cloudfront.net/themes/596913035ee54d5ca5000000/attachments/original/1494729632/topbar-icon_instagram.png?1494729632" alt="Instagram"></span></a> <a class='header_soc_icon' href='https://twitter.com/ssdp' target='_blank' title='Twitter'><span><img src="http://d3n8a8pro7vhmx.cloudfront.net/themes/596913035ee54d5ca5000000/attachments/original/1494729632/topbar-icon_twitter.png?1494729632" alt="Twtter"></span></a> <a class='header_soc_icon' href='https://www.facebook.com/ssdp/' target='_blank' title='Facebook'><span><img src="http://d3n8a8pro7vhmx.cloudfront.net/themes/596913035ee54d5ca5000000/attachments/original/1494729631/topbar-icon_facebook.png?1494729631" alt="Facebook"></span></a>
				</div>
			</div>
		</div>
		<div class="rel_pos">
			<div class="container">
				<div class="section rel_pos">
					<div id="logo">
						<div class='logo_img'>
							<a href="https://ssdp.org/" rel="home" title="SSDP"><img alt="SSDP" src="https://ssdp.org/wp-content/uploads/2015/12/rsz_ssdp-logo-white-justletters_180x54.png"></a>
						</div>
					</div>
					<div id="mobile_menu_toggler">
						<div class="m_nav" id="m_nav_menu">
							<div class="m_nav_ham button_closed" id="m_ham_1"></div>
							<div class="m_nav_ham button_closed" id="m_ham_2"></div>
							<div class="m_nav_ham button_closed" id="m_ham_3"></div>
						</div>
					</div>
					<div class="custom_menu_2 main_menu_underline_effect">
						<div class="menu-fortuna-main-navigation-container" id="menu" style = "float: none; margin-top: 50px">
							<ul>
								<li >
									<a href="https://cat.ssdp.org/">Home</a>
								</li>
								<li>
									<a href="https://cat.ssdp.org/leaderboard/">Leaderboard</a>
								</li>
								<li>
									<a href="https://cat.ssdp.org/available-activities">Available Activities</a>
								</li>
								<li>
									<a href="https://cat.ssdp.org/content/how-tofaq">How-to/FAQ</a>
								</li>
<li>
					<a href="https://cat.ssdp.org/content/store">Store</a>
				</li>
							</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="mobile_menu">
			<ul>
				<li>
					<a href="https://cat.ssdp.org/">Home</a>
				</li>
				<li>
					<a href="https://cat.ssdp.org/leaderboard/">Leaderboard</a>
				</li>
				<li>
					<a href="https://cat.ssdp.org/available-activities">Available Activities</a>
				</li>
				<li>
					<a href="https://cat.ssdp.org/content/how-tofaq">How-to/FAQ</a>
				</li>
<li>
					<a href="https://cat.ssdp.org/content/store">Store</a>
				</li>
			</ul>
		</div>
	</header>
<!-- End test code -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix" style = "margin-top: 172px;"><div id="main" class="clearfix">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?> 
          
          
          <?php if ( !empty($node) && $node->type == 'stats') { } else { ?>
          
          <span style="float:right;">
          <span style="margin-bottom:-5px; margin-top:10px; height:20px;">
          <a id="tweet-test" href="https://twitter.com/share" class="twitter-share-button" data-text="">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></span>


<div class="fb-share-button" data-href="" data-layout="button_count"></div></span>
<?php } ?>





        </h1>
      <?php endif; ?>
      
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
      

    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->

  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
    <div id="triptych-wrapper"><div id="triptych" class="clearfix">
      <?php print render($page['triptych_first']); ?>
      <?php print render($page['triptych_middle']); ?>
      <?php print render($page['triptych_last']); ?>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->
  <?php endif; ?>

   <div class="section"><div id="footer-wrapper" style = "background-color: #003249;">

    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
      <div id="footer-columns" class="clearfix">
        <?php print render($page['footer_firstcolumn']); ?>
        <?php print render($page['footer_secondcolumn']); ?>
        <?php print render($page['footer_thirdcolumn']); ?>
        <?php print render($page['footer_fourthcolumn']); ?>
      </div> <!-- /#footer-columns -->
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer" class="clearfix" style = "border-top: none; position:relative;">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

   <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->

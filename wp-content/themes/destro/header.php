<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php global $query_string; ?><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <title><?php wp_title(); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> " type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   
    
    <?php
    include_once('./functions.php');

    // Destro_browser_body_class();
    global $is_NS4, $is_gecko;
    if ($is_NS4 || $is_gecko) {
        wp_enqueue_style('Destro_aquastyle_NS', '/wp-content/themes/destro/liteNS4.css');
    }
    
    ?>
	 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Wrapper one starts here -->
	<div id="wrapper_one">	
	<!-- Wrapper four starts here -->
	<div id="wrapper_four">    

		<!-- Wrapper one starts here -->
		<div id="wrapper_two">

        	<!-- Header socialn search starts here -->
            <!--<div id="header_social_cont">
            
            	<div id="header_social">
                
                	<div class="header_rss">
                    
                    	<p><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rss.png" width="35" height="35" border="0" alt="Rss" /></a></p>
                    
                    </div>
                    
                	<div class="header_search_cont">
                    	<?php get_search_form(); ?>
                    </div> 
                    
                	<div class="header_social_icons">
                    
                                    <ul>
    
                                        <?php if(of_get_option('redit_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('redit_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/redit.png" alt="redit" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('delicious_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('delicious_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/delicious.png" alt="delicious" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('stumble_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('stumble_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stumble.png" alt="stumble" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('youtube_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('youtube_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="youtube" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('flickr_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('flickr_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flickr.png" alt="flickr" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('linkedin_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('linkedin_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="linkedin" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('google_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('google_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" alt="google" /></a></li>
                                        <?php endif; ?>

                                                                        
                                    </ul>                    
                    
                    
                    
                    </div>                                       
                
            
            	</div>
           
            </div> -->
            <!-- Header socialn search starts here -->
            
			<!-- Wrapper three starts here -->
			<div id="wrapper_three">
            

                 <!-- Logo Section starts here -->
                 <div id="logo_section_l">

                            <div id="logo">
                                <p class="logo_img"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2013/10/logo_opendtp_half-150x150.png"></p>
                                <p class="logo_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
                                <p class="fix"></p>
                                <p class="logo_desc"><?php bloginfo('description'); ?></p>

                            </div>
            
                </div>	
                <!-- Logo Section ends here -->	                 			

                  
                <!-- Content Section starts here -->
                <div id="content_section">

                    
   
                    
                    <!-- Menu Section starts here -->
                    
            			<div id="menu">
							<?php wp_nav_menu( array( 'theme_location' => 'mainmenu', 'menu_class' => 'dropdown dropdown-horizontal','fallback_cb'     => 'Destro_backupmenu', 'menu_id'=>'Main_nav', 'container'=>'') ); ?>

                            <div id="logo_search_count">
                                <?php get_search_form(); ?>
                           </div>
                        </div>
 

                   
                    <!-- Menu Section ends here -->	                                      
<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>
    
        <div id="content">
        
            <?php $theme->hook('content_before'); ?>
        
            <div class="entry">
                <?php _e("La page que vous recherchez n'existe pas ou plus.",'themater'); ?>
            </div>

            <div id="javascripthistory">
                <a href=javascript:history.go(-1)>Retour a la derniere page
            </div>
            
            <div id="content-search">
                <?php get_search_form(); ?>
            </div>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>

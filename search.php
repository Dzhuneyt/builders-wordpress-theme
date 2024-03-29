<?php get_header(); ?>

                <div id="body">
                    
                    <?php get_sidebar(); ?>
    
    			<div id="main-content">
                            
                            <h2 style="font-size: 2em;text-align: center;">Search Results</h2>
                            
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            
                            
                                <a href="<?php the_permalink() ?>"><p class="post-title"><?php the_title() ?></p></a>
				<div class="post-content">
                                        
                                    <?php if(has_post_thumbnail()):
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(150, 150));
                                    $thumb = $thumb[0];
                                    ?>
                                    <img src="<?php echo $thumb ?>" class="post-image">
                                    <?php endif; ?>
                                    
                                    <?php
                                    if(has_excerpt()) the_excerpt();
                                    else the_content()
                                    ?>
                                    
                                    <a href="<?php the_permalink() ?>#comments"><div class="post-comments">Comments</div></a>
                                    <div class="post-meta"><?php the_date() ?><span><!--Sticker like outside effect--></span></div>
				</div><!--/post-content-->
                                
                            <?php endwhile; ?>
                            <?php endif; ?>
				
			</div>
		</div><!--/body-->
		
		<div class="clear"></div>
                
                <?php include('footerwidgets.php') ?>
                
                <?php get_footer(); ?>
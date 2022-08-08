<?php get_header(); ?>

<div class="container page-section mt-8 mx-auto px-4 sm:px-0">
      
      
      <div class="text-base mb-8 mx-auto">   
        <div>
          <h3 class=" pb-4"><?php the_title(); ?></h3>
            <div class="w-auto inline-block bg-blue-200 rounded mb-4 p-2">
              <p> 
                <span class="text-base">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?><br> in the <?php echo get_the_category_list(', '); ?> category.</span>
              </p>
            </div> 
        </div>       
                <?php the_content(); ?>        
      </div>

      </div>
    

    
  <?php get_footer(); ?>
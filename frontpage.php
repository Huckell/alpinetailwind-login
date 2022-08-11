<?php get_header(); ?>
<div class="container page-section my-4 mx-auto">
<div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4">  

<?php
  while(have_posts()) {
    the_post(); ?>

    <div class="border border-gray-400 border-solid rounded mb-8">

      <div class="mb-4">
        <?php the_post_thumbnail(); ?>
      </div> 

      <div class="p-4">
        <h2 class="text-2xl font-medium mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <div class="w-auto inline-block bg-blue-200 rounded mb-4 p-2">
          <p class="text-base">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
        </div>
        
        <div class="">
          <p class="text-base mb-4">
            <?php the_excerpt(); ?>
          </p>
          <button class="inline-block bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 my-4 rounded transition duration-150 ease-in-out"><a href="<?php the_permalink(); ?>">Continue reading</a></button>
        </div>
      </div>
    </div>
  
  <?php } ?> 

  </div><!--end grid-->
  
  <div class="font-normal text-base mb-8">
    <?php echo paginate_links();?>
  </div>

</div>

<?php get_footer(); ?>
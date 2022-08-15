<?php get_header(); ?>

<section class="relative h-screen flex flex-col items-center justify-center text-center text-black py-0 px-3 bg-white dark:bg-black">
    <div class="div-video absolute top-0 left-0 w-full h-full overflow-hidden">
        <video class="min-w-full min-h-full absolute object-cover" src="/wp-content/uploads/2022/08/pexels-rostislav-uzunov-7385122.mp4" type="video/mp4" autoplay muted loop></video>
    </div>
    <div class="z-10">
        <h1 class="">Huckleberry Studio</h1>
        <p class="">WordPress development with Accessability & SEO as standard.</p>
    </div>
</section>

<?php the_content(); ?>  

<?php get_footer(); ?>
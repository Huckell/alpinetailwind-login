<?php get_header(); ?>

<div class="container page-section mt-8 mx-auto md: px-4">

    <div class="border-2 border-solid rounded border-blue-400 p-20 my-10">
        <h2 class="text-2xl font-medium mb-2">
            404 Error.
        </h2>
        <p class="text-base mb-2">
            The page you are looking for has been moved or no longer exists. 
            It is also possilble the link you clicked or 
            what you typed into the url is incorrect.
        </p>
        <p class="text-base mb-2">
        <strong>Press</strong> the <strong>"s"</strong> key or <strong>click</strong> the <strong>search icon</strong> in the navigation to find what you are looking for.
        </p>
        <a href="<?php get_site_url(); ?>/">
            <button class="inline-block bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 my-4 rounded transition duration-150 ease-in-out">
                Home
            </button>
        </a>
    </div>    
</div>
<?php  get_footer(); ?>
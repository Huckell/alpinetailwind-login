<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('darkMode') || 'false' }"
      x-init="$watch('darkMode', (val) => localStorage.setItem('darkMode', val))"
      :class="{ 'dark': darkMode === 'true' }" x-cloak
      <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<header class="bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-500 shadow-md shadow-gray-200/50 dark:shadow-md dark:shadow-gray-900/50">

<nav class="grid place-items-center cw-2xl">
  <div class="w-full text-gray-700">

    <div x-data="{ open: false }" class="flex flex-col mx-auto ax-w-screen lg:flex-row">
      
    <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 dark:text-white focus:outline-none focus:shadow-outline">
              Huckleberry Studio
              <span class="sr-only">Home</span>
      </a>

      <div style="place-content:flex-end; margin-top:-36px;" class="flex flex-row items-center justify-between px-4 py-2">

          <button class="mr-8 rounded-lg md:mr-12 lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg class="light-svg h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="#FFF" viewBox="0 0 512.001 512.001" x-show="open" style="display: none;">
              <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"></path>
            </svg>
            <svg class="dark-svg h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="#000" viewBox="0 0 512.001 512.001" x-show="open" style="display: none;">
              <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"></path>
            </svg>
             <!--Todo : exclude the (svg) oposite color on dark / light modes-->
            <span class="sr-only" x-show="open" style="display: none;">
              Close Menu
            </span><!-- /.sr-only -->

            <svg class="light-svg h-6 w-6" fill="#FFF" width="40" height="40" viewBox="0 0 100 80" x-show="!open">
              <path d="M0 0h100v10H0zm0 30h100v10H0zm0 30h100v10H0z"></path>
            </svg>
            <svg class="dark-svg h-6 w-6" fill="#000" width="40" height="40" viewBox="0 0 100 80" x-show="!open">
              <path d="M0 0h100v10H0zm0 30h100v10H0zm0 30h100v10H0z"></path>
            </svg>
            <!--Todo : exclude the (svg) oposite color on dark / light modes-->
            <span class="sr-only" x-show="!open">
              Open Menu
            </span><!-- /.sr-only -->
          </button>
        </div>
        

      <nav class="flex-col flex-grow hidden h-screen pb-4 lg:pb-0 lg:flex lg:justify-start lg:flex-row lg:h-auto lg:relative" aria-label="Main Navigation" :class="{'flex': open, 'hidden': !open}">
      
        <ul class="flex flex-col flex-wrap pl-0 mt-4 lg:flex-row lg:-mt-2 dark:text-white">
          <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2" x-data="{isOpen:false }" @mouseleave="isOpen = false">
              <a href="#" class="py-2 px-4 group-hover:text-blue-500" @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">

                  Website Design
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000" width="16" height="16" class="hidden dark-svg lg:inline-block relative top-0 right-0 transform rotate-90" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!--Todo : exclude the oposite color on dark / light modes-->
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" width="16" height="16" class="hidden light-svg lg:inline-block relative top-0 right-0 transform rotate-90" viewBox="0 0 16 16"> 
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>                 
              </a>    
                                
                <ul class="m-4" aria-label="submenu" x-show="isOpen" x-transition.duration.400ms @click.away="isOpen = false" style="display: none;">
                  
                <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                     <a href="<?php get_site_url(); ?>/website-design" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">
                      
                    Website design
                    
                    </a>
                  </li>

                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                     <a href="<?php get_site_url(); ?>/website-design/design-build-process" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">
                      
                    The design and build process
                    
                    </a>
                  </li>
                   
                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                    <a href="<?php get_site_url(); ?>/website-design/building-fast-reliable-websites" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">

                    Building fast reliable websites
                    
                    </a>
                  </li>

                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                    <a href="<?php get_site_url(); ?>/website-design/ongoing-support" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">

                    Ongoing support
                    
                    </a>
                  </li>
                       
                </ul>
                  </li>
                      
                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">

                    <a href="<?php get_site_url(); ?>/website/maintenance" class="py-2 px-4 group-hover:text-blue-500">

                    Website Maintenance
                    
                    </a>
  
                  </li>

                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2" x-data="{isOpen:false }" @mouseleave="isOpen = false">
              <a href="#" class="py-2 px-4 group-hover:text-blue-500" @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">

                  Website Speed
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000" width="16" height="16" class="hidden dark-svg lg:inline-block relative top-0 right-0 transform rotate-90" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!--Todo : exclude the oposite color on dark / light modes-->
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" width="16" height="16" class="hidden light-svg lg:inline-block relative top-0 right-0 transform rotate-90" viewBox="0 0 16 16"> 
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>                 
              </a>    
                                
                <ul class="m-4" aria-label="submenu" x-show="isOpen" x-transition.duration.400ms @click.away="isOpen = false" style="display: none;">
                  
                <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                     <a href="<?php get_site_url(); ?>/website-speed" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">
                      
                     Website speed
                    
                    </a>
                  </li>

                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                     <a href="<?php get_site_url(); ?>/website-speed/improve-my-google-ranking" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">
                      
                    Improve my google ranking
                    
                    </a>
                  </li>
                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                     <a href="<?php get_site_url(); ?>/website-speed/why-is-my-website-slow" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">
                      
                    Why is my website slow?
                    
                    </a>
                  </li>

                       
                </ul>
                  </li>
                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">

                    <a href="<?php get_site_url(); ?>/contact" class="py-2 px-4 group-hover:text-blue-500">

                    Contact

                    </a>
  
                  </li>
        
                </ul>

                <?php if(is_user_logged_in()) { ?>
                  <ul class="flex flex-col flex-wrap pl-0 mt-4 lg:flex-row lg:mt-0 lg:absolute lg:right-0"> 
                    <li class="px-4">  
                      <a class="hover:text-blue-500" href="<?php get_site_url(); ?>/dashboard">
                          Dashboard                    
                      </a>
                    </li>
                    <li class="pl-4">  
                      <a class="hover:text-blue-500" href="<?php echo wp_logout_url(); ?>">
                          Log Out                     
                      </a>
                    </li>
                  </ul>
                  
                <?php } else { ?>
                  
                  <ul class="flex flex-col flex-wrap pl-0 mt-4 lg:flex-row lg:mt-0 lg:absolute lg:right-0"> 
                    <li class="px-4">
                      <a class="hover:text-blue-500" href="<?php echo wp_login_url(); ?>" class="dark:text-white"">
                        Login
                      </a>
                    </li>
                    <li class="px-4">
                      <a class="hover:text-blue-500" href="<?php echo wp_registration_url(); ?>" class="dark:text-white"">
                        Sign Up
                      </a>
                    </li>
                  </ul>                     
                <?php } ?>
               
        </div>
      
    </nav>
    </nav>
        
    <!--end nav-->
      
</header>
  

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo get_bloginfo('description')?>">
    <script src="https://kit.fontawesome.com/9d426a8111.js" crossorigin="anonymous"></script>
	<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
	<body class="w-screen overflow-x-hidden" <?php body_class(); ?>>
    <header class="w-full bg-primary flex flex-col justify-center text-white">

        <div class="w-full bg-primary flex justify-center text-white bg-secondary ">
                <div class="flex pl-1 flex-row justify-end w-4/5 ">
                    <ul class="flex flex-row">
                        <li class="ml-5 text-xs sm:text-base text-white">Tlf: +45 31 51 27 60</li>
                        <li class="ml-5 text-xs sm:text-base text-white">info@theilmann-IT.dk</li>
                    </ul>
                </div>
        </div>
        <div class="bg-primary flex justify-center content-center text-white bg-primary ">
            <div class="flex flex-col w-4/5">
                <div class="flex flex-row justify-between py-2 w-full">
                    <div class="flex w-20 content-end">
                            <a class="text-sm uppercase font-medium border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out " href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                    </div>
                    
                    <div class="self-center hidden sm:block ">
                                <?php $defaults = array( 
                                    'container_class' => 'w-full flex flex-wrap', 
                                    'menu_class'      => 'flex flex-row justify-around ', 
                                    'items_wrap'      => '<ul class="flex">%3$s</ul>',
                                    'add_a_class'     => 'ml-5 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out capitalize ',
                                ); ?>
                                <?php wp_nav_menu( $defaults ); ?>
                    </div>
                    <div class="block sm:hidden self-center">
                        <i class="text-xl fas fa-bars" onclick="burgermenu()"></i>
                    </div>

                </div>
        
            </div>
        </div> 



    </header>

    <div id="menu" class="fixed w-full bg-primary h-screen text-center text-white sm:hidden z-50" style="transition: left 1s ease-in-out; left: -100%; ">
            <?php $defaults = array( 
               'container_class' => 'w-full', 
                'menu_class'      => 'flex flex-row justify-around ', 
                'items_wrap'      => '<ul class="flex flex-col h-96 justify-evenly">%3$s</ul>',
                'add_a_class'     => 'mt-5 border-b border-transparent text-2xl hover:border-gray-500 transition duration-500 ease-in-out capitalize ',
            ); ?>
            <?php wp_nav_menu( $defaults ); ?>
        </div>


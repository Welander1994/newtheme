<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
    <header class="w-full bg-primary flex flex-col justify-center text-white">

        <div class="w-full bg-primary flex justify-center text-white bg-secondary ">
                <div class="flex pl-1 flex-row justify-end w-4/5 ">
                    <ul class="flex flex-row">
                        <li class="ml-5 text-white text-opacity-50">Telf: +45 31 51 27 60</li>
                        <li class="ml-5 text-white text-opacity-50">info@theilmann-IT.dk</li>
                    </ul>
                </div>
        </div>
        <div class="bg-primary flex justify-center content-center text-white bg-primary ">
            <div class="flex flex-col w-4/5">
                <div class="flex flex-row justify-between w-full">
                    <div class="flex w-44 content-end">
                            <h1 class="text-m uppercase font-medium "><?php bloginfo( 'name' ); ?></h1>
                    </div>
                    
                    <div class="self-center">
                                <?php $defaults = array( 
                                    'container_class' => 'w-full flex flex-wrap', 
                                    'menu_class'      => 'flex flex-row justify-around ', 
                                    'items_wrap'      => '<ul class="flex">%3$s</ul>',
                                    'add_a_class'     => 'ml-5 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out  capitalize ',
                                ); ?>
                                <?php wp_nav_menu( $defaults ); ?>
                    </div>

                </div>
        
            </div>
        </div> 
    </header>


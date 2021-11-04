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
    <header class=" flex bg-gray-300">
    <h1 class="text-3xl uppercase"><?php bloginfo( 'name' ); ?></h1>
        <?php $defaults = array( 
            'container_class' => 'w-full  flex flex-wrap justify-center  content-center', 
            'menu_class'      => 'flex flex-row justify-around', 
            'items_wrap'      => '<ul class="flex justify-between">%3$s</ul>',
            'add_a_class'     => 'px-5 hover:bg-green-500 uppercase',
        ); ?>

<?php wp_nav_menu( $defaults ); ?>


        
    </header>


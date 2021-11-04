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
    <header class="bg-gray-300">
        this is the header, this is a test 2
        <?php $defaults = array( 
            'container_class' => 'bg-blue-500', 
            'menu_class'      => 'flex', 
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'add_a_class'     => 'pl-2 bg-green-500',
        ); ?>

<?php wp_nav_menu( $defaults ); ?>


        
    </header>


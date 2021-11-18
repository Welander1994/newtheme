<?php get_header();?>

<?php if ( is_front_page() ) { ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="body z-50">
	<div class="w-screen overflow-hidden">


		<div class="main flex flex-col justify-center">
<!-- 				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1> -->

					<section class="h-screen flex flex-col justify-center text-white text-center w-sceen">
<!-- 						<h1 class="text-6xl p-2 uppercase font-black" ><?php bloginfo( 'name' ); ?></h1> -->
						<h1 class="text-4xl sm:text-8xl p-2 uppercase font-black" >theilmann</h1>
						<h1 class="text-2xl sm:text-6xl p-0 uppercase font-normal tracking-widest" >it/automation</h1>
						<p class="text-xl p-2">Make It simple</p>
						<div class="py-5">
							<a class="bg-primary p-1 px-5 m-2 rounded-m text-white text-xl font-medium uppercase hover:bg-white hover:text-black transition duration-500 ease-in-out" href="#">services</a>
							<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-white text-xl text-white font-medium uppercase hover:bg-white hover:text-black transition duration-500 ease-in-out" href="#">kontakt</a>
						</div>
					</section>
		<div class="w-full bg-gray-100">
			<div class="w-4/5 m-auto ">

				<div class=" text-center py-5">
					<div class="flex flex-row justify-between">
						<?php 
							$id=83; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
						?>
							<?php echo $content; ?>
					</div>
					<div class="py-20">
						<?php 
							$id=13; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
						?>
							<h2 class="text-2xl py-5 font-bold"><?php echo get_the_title( $ID );?> </h2>
							<p><?php echo $content; ?> </p>
					</div>
				</div>
			<ul class="flex flex-col sm:flex-row sm:flex-wrap md:flex-row md:flex-nowrap justify-between text-black w-full">	
				<?php 
				// Define our WP Query Parameters
				$the_query = new WP_Query( 'posts_per_page=5' ); ?>
				
				
				<?php 
				// Start our WP Query
				while ($the_query -> have_posts()) : $the_query -> the_post(); 
				// Display the Post Title with Hyperlink
				?>
				
				
				<li class="p-4 flex flex-col justify-center content-center text-center m-4 sm:p-0 sm:w-5/12  md:w-1/4 h-96 border-2 bg-white">
						
				<a class="text-xl font-bold capitalize mt-5" href="<?php the_permalink() ?>">
					<?php if ( has_post_thumbnail() ) :
						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' ); ?>
						<img 
							src="<?php echo $featured_image[0]; ?>" 
							alt='' 
							class="w-2/5 m-auto pt-10"
						/>
					<?php endif; ?>
				</a>
						<a class="text-xl font-bold capitalize mt-5" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					<?php 
						$myExcerpt = get_the_excerpt();
						$tags = array("<p>", "</p>");
						$myExcerpt = str_replace($tags, "", $myExcerpt);
						?>
						
						<p class="text-sm m-5 pb-5">
							<?php   echo $myExcerpt; ?>
						
						</p>
				</li>
				
				
				<?php 
				// Repeat the process and reset once it hits the limit
				endwhile;
				wp_reset_postdata();
				?>
			</ul>
					<!-- this is the section where we descript the owner -->
					<div class="w-full h-full py-20 flex flex-col sm:flex-row justify-evenly">
						<div class="w-full sm:w-1/3 flex flex-wrap content-center order-last sm:order-none">
							<div class="text-center pt-5 sm:pt-0 sm:text-left">
								<a class="text-2xl font-bold capitalize mt-5" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								<?php 
									$myExcerpt = get_the_excerpt();
									$tags = array("<p>", "</p>");
									$myExcerpt = str_replace($tags, "", $myExcerpt);
								?>
								
								<p class="text-m py-5">
									<?php   echo $myExcerpt; ?>
								</p>
							</div>
							<div class="flex flex-row m-auto py-5">
								<a class="bg-primary p-1 px-5 m-2 rounded-m text-white text-xl font-medium uppercase hover:bg-white hover:text-black transition duration-500 ease-in-out" href="#">services</a>
								<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-primary text-xl text-primary font-medium uppercase hbg-primary hover:text-white hover:border-0 transition duration-500 ease-in-out" href="#">kontakt</a>
							</div>
						</div>
						<div class="w-full">
							<a href="<?php the_permalink() ?>">
								<?php if ( has_post_thumbnail() ) :
									$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
									<img 
										src="<?php echo $featured_image[0]; ?>" 
										alt='' 
										class=" w-3/4 m-auto md:w-2/4"
									/>
								<?php endif; ?>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
	<canvas class="" id="c"></canvas>


<?php } else {




   while ( have_posts() ) : the_post(); ?>

<?php
	// Run code only for Single post page
	if ( is_single() && 'post' == get_post_type() ) {
		?> 
<section class="h-3/6 flex flex-col justify-center text-white text-center w-sceen">
	<a class="text-8xl font-bold capitalize m-14" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</section>
	<div class="w-full bg-gray-100">
		<div class="w-4/5 h-screen m-auto ">
			<div class="">
				<div class="flex justify-center">
						<div>
								<?php 
									$myContent = get_the_content();
									$tags = array("<p>", "</p>");
									$myContent = str_replace($tags, "", $myContent);
								?>
									
							<p class="text-m py-5">
								<?php   echo $myContent; ?>
							</p>
						</div>
						<div class="w-max">
							<a href="<?php the_permalink() ?>">
								<?php if ( has_post_thumbnail() ) :
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
							<img 
								src="<?php echo $featured_image[0]; ?>" 
								alt='' 
								class="w-2/3"
							/>
						<?php endif; ?>
					</a>
				</div>
			</div>

		</div>
	</div>
	<canvas class="" id="c"></canvas>

		<?php
	} else {
	// Run code for single page
		?> 
		
<section class="h-3/6 flex flex-col justify-center text-white text-center w-sceen">
	<a class="text-8xl font-bold capitalize m-14" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</section>
	<div class="w-full bg-gray-100">
		<div class="w-4/5 h-screen m-auto ">
			<div class="">
				<div class="flex justify-center">
						<div class="py-5">
								<?php 
									$myContent = get_the_content();
									$tags = array("<p>", "</p>");
									$myContent = str_replace($tags, "", $myContent);
								?>
									
							<p class="text-m py-5">
								<?php   echo $myContent; ?>
							</p>
						</div>
						<div class="w-max">
							<a href="<?php the_permalink() ?>">
								<?php if ( has_post_thumbnail() ) :
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
							<img 
								src="<?php echo $featured_image[0]; ?>" 
								alt='' 
								class="w-2/3"
							/>
						<?php endif; ?>
					</a>
				</div>
			</div>
			
			<div>
				<ul class="flex flex-wrap justify-center text-black w-full">	
					<?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'posts_per_page=5' ); ?>
					
					
					<?php 
					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					?>
					
					
					<li class="p-8 flex flex-row justify-evenly content-center text-left m-4 w-2/5 border-2 bg-white">
							
					<a class="text-xl font-bold capitalize mt-5" href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) :
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' ); ?>
							<img 
								src="<?php echo $featured_image[0]; ?>" 
								alt='' 
								class="w-full m-auto"
							/>
						<?php endif; ?>
					</a>
						<div class="w-2/4">
							<a class="text-xl font-bold capitalize" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							<?php 
							$myExcerpt = get_the_excerpt();
							$tags = array("<p>", "</p>");
							$myExcerpt = str_replace($tags, "", $myExcerpt);
							?>
							
							<p class="text-sm">
								<?php   echo $myExcerpt; ?>
							
							</p>
						</div>
					</li>
					
					
					<?php 
					// Repeat the process and reset once it hits the limit
					endwhile;
					wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
	</div>

	


<canvas class="" id="c"></canvas>




		<?php
	}
?>

  <?php endwhile; 
} ?>


<script type="module"> 

	import * as THREE from 'https://cdn.skypack.dev/pin/three@v0.134.0-dfARp6tVCbGvQehLfkdx/mode=imports/optimized/three.js';

	// Canvas
	const canvas = document.querySelector('#c')

	// Scene
	const scene = new THREE.Scene()

	// Objects
	const geometry = new THREE.TorusGeometry( .7, .2, 16, 100 );
	
	const particlesGeometry = new THREE.BufferGeometry;
	const particlesCnt = 5000;

	const posArray = new Float32Array(particlesCnt * 3);
	// xyz, xyz, xyz, xyz

	for(let i = 0; i < particlesCnt * 3; i++) {
		posArray[i] = (Math.random() - 0.5) * 5;
	};

	particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3))
	// Materials

	const material = new THREE.PointsMaterial({
		size: 0.005
	})

	const particlesMaterial = new THREE.PointsMaterial({
		size: 0.003
	})
	

	// Mesh
	// const sphere = new THREE.Points(geometry,material)
	const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial)
	scene.add(particlesMesh)

	// Lights

	const pointLight = new THREE.PointLight(0xffffff, 0.1)
	pointLight.position.x = 2
	pointLight.position.y = 3
	pointLight.position.z = 4
	scene.add(pointLight)

	/**
	 * Sizes
	 */
	const sizes = {
		width: window.innerWidth,
		height: window.innerHeight
	}

	window.addEventListener('resize', () =>
	{
		// Update sizes
		sizes.width = window.innerWidth
		sizes.height = window.innerHeight

		// Update camera
		camera.aspect = sizes.width / sizes.height
		camera.updateProjectionMatrix()

		// Update renderer
		renderer.setSize(sizes.width, sizes.height)
		renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
	})

	/**
	 * Camera
	 */
	// Base camera
	const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
	camera.position.x = 0
	camera.position.y = 0
	camera.position.z = 2
	scene.add(camera)

	// Controls
	// const controls = new OrbitControls(camera, canvas)
	// controls.enableDamping = true

	/**
	 * Renderer
	 */
	const renderer = new THREE.WebGLRenderer({
		canvas: canvas
	})
	renderer.setSize(sizes.width, sizes.height)
	renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
	renderer.setClearColor(new THREE.Color('#21282a'), 1 )

	/**
	 * Animate
	 */

	const clock = new THREE.Clock()

	const tick = () =>
	{

		const elapsedTime = clock.getElapsedTime()

		// Update objects
		// sphere.rotation.y = .5 * elapsedTime
		particlesMesh.rotation.y = .03 * elapsedTime;
		particlesMesh.rotation.x = -.02 * elapsedTime;
		// Update Orbital Controls
		// controls.update()

		// Render
		renderer.render(scene, camera)

		// Call tick again on the next frame
		window.requestAnimationFrame(tick)
	}

	tick()

</script>
<?php get_footer();?>
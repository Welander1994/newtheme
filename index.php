<?php get_header();?>

<?php if ( is_front_page() ) { ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="body  z-50">
	<div class=" w-sceen">


		<div class="main flex flex-col justify-center">
<!-- 				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1> -->

					<section class="p-80 text-white text-center w-sceen">
<!-- 						<h1 class="text-6xl p-2 uppercase font-black" ><?php bloginfo( 'name' ); ?></h1> -->
						<h1 class="text-8xl p-2 uppercase font-black" >theilmann</h1>
						<h1 class="text-6xl p-0 uppercase font-normal tracking-widest" >it/automation</h1>
						<p class="text-xl p-2">Make It simple</p>

					</section>

				<div class="w-4/5 m-auto bg-white">


					<?php 
					$phrase = get_the_content();
					// This is where wordpress filters the content text and adds paragraphs
					$phrase = apply_filters('the_content', $phrase);
					$replace = '<p class="text-black">';
					
					$content = str_replace('<p>', $replace, $phrase);
					echo $content;
				?>

			<ul class="text-white flex flex row">	
				<?php 
				// Define our WP Query Parameters
				$the_query = new WP_Query( 'posts_per_page=5' ); ?>
				
				
				<?php 
				// Start our WP Query
				while ($the_query -> have_posts()) : $the_query -> the_post(); 
				// Display the Post Title with Hyperlink
				?>
				
				
				<li class="p-4">
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						<?php if ( has_post_thumbnail() ) :
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
							<img 
								src="<?php echo $featured_image[0]; ?>" 
								alt='' 
								class="w-40"
							/>
						<?php endif; ?>
					<?php 
						$myExcerpt = get_the_excerpt();
						$tags = array("<p>", "</p>");
						$myExcerpt = str_replace($tags, "", $myExcerpt);
						?>
						
						<p class="bg-black">
							<?php   echo $myExcerpt; ?>
						
						</p>
				</li>
				
				
				<?php 
				// Repeat the process and reset once it hits the limit
				endwhile;
				wp_reset_postdata();
				?>
			</ul>

<!-- 				<img class="w-200" src="<?php echo catch_that_image() ?>" alt="test">
				<?php 
               echo preg_replace('/<img[^>]+./','',$content);
			   
?> -->





				</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
	<canvas class="" id="c"></canvas>

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

<?php } else {
   while ( have_posts() ) : the_post(); ?>
  <div class="body  z-50">
	  <div class="container w-900">
  
  
		  <div class="main">
			  <div class="post content">
  <!-- 				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1> -->
  
				  <div class="content">
  <!-- 					<?php the_content(); ?> -->
  
					  <h1 class="text-4xl"><?php the_title(); ?></h1>
  
					  <?php 
					  $phrase = get_the_content();
					  // This is where wordpress filters the content text and adds paragraphs
					  $phrase = apply_filters('the_content', $phrase);
					  $replace = '<p class="text-white">';
					  
					  $content = str_replace('<p>', $replace, $phrase);
  
				  ?>
				  <img class="w-200" src="<?php echo catch_that_image() ?>" alt="test">
				  <?php 
				 echo preg_replace('/<img[^>]+./','',$content);
  ?>
  
  
  
  
  
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
  <?php endwhile; 
} ?>
<?php get_footer();?>
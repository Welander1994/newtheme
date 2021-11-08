<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="body bg-gray-600">
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
					$replace = '<p class="bg-white">';
					
					$content = str_replace('<p>', $replace, $phrase);

				?>
				<img class="w-200" src="<?php echo catch_that_image() ?>" alt="test">
				<?php 
               echo preg_replace('/<img[^>]+./','',$content);
?>


<?php if ( is_front_page() ) { ?>
	<div class="bottom-0 ">
		<canvas class="bg-black " id="c"></canvas>
	</div>
	<script type="module"> 
		console.log("this is a module")

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
			canvas: canvas,
			alpha: true
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

<?php } ?>


				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>
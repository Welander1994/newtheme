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
	<div class="w-full">
		<canvas id="c"></canvas>
	</div>
	<script type="module"> 
		console.log("this is a module")

		import * as THREE from 'https://cdn.skypack.dev/pin/three@v0.134.0-dfARp6tVCbGvQehLfkdx/mode=imports/optimized/three.js';


		function main() {
			const canvas = document.querySelector('#c');
			const renderer = new THREE.WebGLRenderer({
				canvas: canvas,
				alpha: true
			});

			const fov = 75;
			const aspect = 2;  // the canvas default
			const near = 0.1;
			const far = 50;
			const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
			camera.position.z = 20;

			const scene = new THREE.Scene();

			{
				const color = 0xFFFFFF;
				const intensity = 2;
				const light = new THREE.DirectionalLight(color, intensity);
				light.position.set(-1, 2, 4);
				scene.add(light);
			}

			const boxWidth = 3;
			const boxHeight = 3;
			const boxDepth = 3;
			const geometry = new THREE.BoxGeometry(boxWidth, boxHeight, boxDepth);

			function makeInstance(geometry, color, x) {
				const material = new THREE.MeshPhongMaterial({color});

				const cube = new THREE.Mesh(geometry, material);
				scene.add(cube);

				cube.position.x = x;

				return cube;
			}

			const cubes = [
				makeInstance(geometry, 0x44aa88,  0),
				makeInstance(geometry, 0x8844aa, -12),
				makeInstance(geometry, 0xaa8844,  12),
			];

			function render(time) {
				time *= 0.0002;

				cubes.forEach((cube, ndx) => {
				const speed = 1 + ndx * .1;
				const rot = time * speed;
				cube.rotation.x = rot;
				cube.rotation.y = rot;
				});

				renderer.render(scene, camera);

				requestAnimationFrame(render);
			}

			requestAnimationFrame(render);
		}

			main();

	</script>

<?php } ?>


				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>
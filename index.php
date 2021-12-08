<?php get_header();?>

<?php 

// Global varibles
$service = 13;
$kontakt = 137;
$omVirksomheden = 135;
$produktImages = 83;
$forside = 11;
$domain = "https://thisisatest.dev/?page_id=";

?>

<?php if ( is_front_page() ) { ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="body z-50">
	<div class="w-screen overflow-hidden">


		<div class="main flex flex-col justify-center">
<!-- 				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1> -->

					<section class="h-screen flex flex-col justify-center text-white text-center w-sceen">
<!-- 						<h1 class="text-6xl p-2 uppercase font-black" ><?php bloginfo( 'name' ); ?></h1> -->
						<h1 class="text-4xl sm:text-6xl md:text-8xl p-2 uppercase font-black" >theilmann</h1>
						<h1 class="text-2xl sm:text-4xl md:text-6xl p-0 uppercase font-normal tracking-widest" >it/automation</h1>
						<p class="text-xl p-2">Make It simple</p>
						<div class="py-5">
							<!-- Her skal du ændre id i href så det matcher det id din service side har -->
							<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-white text-xl text-white font-medium uppercase hover:bg-white hover:text-black transition duration-500 ease-in-out" href="<?php echo $domain; echo $service; ?>">services</a>
								<!-- Her skal du ændre id i href så det matcher det id din kontakt side har -->
							<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-white text-xl text-white font-medium uppercase hover:bg-white hover:text-black transition duration-500 ease-in-out" href="<?php echo $domain; echo $kontakt; ?>">kontakt</a>
						</div>
					</section>
		<div class="w-full bg-gray-100">
			<div class="w-2/3 m-auto ">

				<div class=" text-center py-5">
					<div class="flex flex-row justify-between">
						<!-- Her skal du ændre id i $id så det matcher det id din post med billederne har -->
<!-- 						<?php 
							$id = $produktImages; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
						?>
							<?php echo $content; ?> -->
					</div>
					<div class="m-auto py-20 w-3/4">
						<!-- Her skal du ændre id i $id så det matcher det id din service side har -->
						<?php 
							$id=$service; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
						?>
							<!-- <h2 class="text-2xl pt-5 font-light"><?php echo get_the_title( $ID );?> </h2> -->
							<h3 class="text-xl pb-5 font-bold">Vi stiler efter at skabe bedre it-sikkerhedsgrundlag, så vi sammen kan udvikle os</h3>
							<p><?php echo $content; ?> </p>
							<br>
							<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-primary text-xl text-primary font-medium uppercase hbg-primary hover:text-white hover:border-0 transition duration-500 ease-in-out" href="<?php echo $domain; echo $service; ?>">services</a>
					</div>
					
				</div>
<!-- 
			<ul class="flex flex-col sm:flex-row sm:flex-wrap md:flex-row md:flex-nowrap justify-center text-black w-full">	
				<?php 
				// Define our WP Query Parameters
				$the_query = new WP_Query( 'posts_per_page=5' ); ?>
				
				
				<?php 
				// Start our WP Query
				while ($the_query -> have_posts()) : $the_query -> the_post(); 
				// Display the Post Title with Hyperlink
				?>
				
				
				<li class="p-4 flex flex-col justify-center content-center text-center m-4 sm:p-0 sm:w-5/12 md:w-2/4 h-96 border-2 bg-white">
						
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
			</ul> -->
					<!-- this is the section where we descript the owner -->
					<div class="w-full h-full py-20 flex flex-col sm:flex-row justify-evenly md:justify-center">
						<div class="w-full sm:w-1/3 flex flex-wrap content-center order-last sm:order-none">
							<div class="text-center pt-5 sm:pt-0 sm:text-left">
								<p class="text-2xl font-light capitalize mt-5">OM THEILMANN IT/AUTOMATION</p>
								<?php 
									$myExcerpt = get_the_excerpt();
									$tags = array("<p>", "</p>");
									$myExcerpt = str_replace($tags, "", $myExcerpt);
								?>
								
								<p class="text-m py-5">
									<?php   echo $myExcerpt; ?>
								</p>
							</div>
							<div class="flex flex-col md:flex-row m-auto py-5">
								<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-primary text-xl text-primary font-medium uppercase hbg-primary hover:text-white hover:border-0 transition duration-500 ease-in-out" href="https://thisisatest.dev/?page_id=135">Om virksomheden</a>
								<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-primary text-xl text-primary font-medium uppercase hbg-primary hover:text-white hover:border-0 transition duration-500 ease-in-out" href="https://thisisatest.dev/?page_id=137">kontakt</a>
							</div>
						</div>
						<div class="">
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
				<div class="flex flex-col md:flex-row justify-center">
					<div class="md:w-2/3">
						<?php 
							$myContent = get_the_content();
							$tags = array("<p>", "</p>");
							$myContent = str_replace($tags, "", $myContent);
						?>
									
						<p class="text-m py-5">
							<?php   echo $myContent; ?>
						</p>
						<a class="bg-primary p-1 px-5 my-2 rounded-m text-white text-xl font-medium uppercase hover:bg-white hover:text-black transition duration-500 ease-in-out" href="https://thisisatest.dev/?page_id=137">Kontakt</a>
					</div>
					<div class="w-max self-center my-5 order-first md:order-last">
						<a href="<?php the_permalink() ?>">
							<?php if ( has_post_thumbnail() ) :
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
						<img 
							src="<?php echo $featured_image[0]; ?>" 
							alt='' 
							class="p-5 w-3/3"
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
	<a class="text-4xl sm:text-4xl md:text-6xl p-2 uppercase font-black m-14" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</section>
		<div class="w-full bg-gray-100">
			<div class="w-4/5 m-auto ">


			<?php
			
	// Service content 
	// Her skal du ændre id i href så det matcher det id din service side har 
	global $post;
	if( $post->ID == $service) { ?>
		<div class="flex flex-col">
		<div class="flex justify-center md:w-2/3 self-center">
					<div>
						<?php 
							$myContent = get_the_content();
							$tags = array("<p> ", "</p>");
							$myContent = str_replace($tags, "", $myContent);
						?>
									
						<p class="text-m py-5 w-2/3 m-auto">
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
					<ul class="flex flex-col sm:flex-row sm:flex-wrap md:flex-row md:flex-nowrap md:w-2/3 m-auto justify-center text-black w-full">	
						<?php 
						// Define our WP Query Parameters
						$the_query = new WP_Query( 'posts_per_page=5' ); ?>
						
						
						<?php 
						// Start our WP Query
						while ($the_query -> have_posts()) : $the_query -> the_post(); 
						// Display the Post Title with Hyperlink
						?>
						
						
						<li class="p-4 flex flex-col justify-center content-center text-center mr-4 sm:p-0 sm:w-5/12  md:w-2/4 h-96 border-2 bg-white">
								

							<?php if ( has_post_thumbnail() ) :
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small' ); ?>
								<img 
									src="<?php echo $featured_image[0]; ?>" 
									alt='' 
									class="w-2/5 md:w-1/5 m-auto pt-10"
								/>
							<?php endif; ?>
								<p class="text-xl font-bold capitalize mt-5"><?php the_title(); ?></p>
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
				</div>

				<div class="flex flex-col justify-center w-full my-5">
					<div class="self-center">
						<h2 class="text-2xl font-bold capitalize mt-5">Værdier</h2>
					</div>
					<div class="py-5 self-center">
						<p class="md:w-2/3 md:m-auto md:text-left">
						I takt med at de danske virksomheder bliver mere digitaliseret, står vi alle over for en større udfordring, da hackerne i takt med vores udvikling bliver mere snedige og effektive. Det er derfor vigtigt at du sikrer din virksomhed. Mangler du hjælp til hvordan du beskytter dig og din virksomhed, så kommer der her et par gode råd.
						</p>
					</div>
					<div class="md:w-2/3 self-center">
						
						<ul>
							<li class="py-5">
								<h2 class="font-bold">Gode råd 1 - Installer sikkerhedspakke</h2>
								<p>Alle virksomhedens pc’er bør have en sikkerhedspakke installeret, som indeholder følgende: En firewall, Et antivirusprogram, Et spamfilter og Et phisingfilter</p>
							</li>
							<li class="py-5">
								<h2 class="font-bold">Gode råd 2 - Backup din data</h2>
								<p>I tilfælde af at hacker har fået adgang til jeres data, så er det vigtigt at man har lavet en kopi. Så hvis de sletter data, at man kan generaer det igen</p>
							</li>
						</ul>
					</div>
				</div>

				<!-- FAQ -->
				<div class="flex flex-col my-5">
					<div class="self-center text-center md:w-1/2">
						<h2 class="text-xl font-thin">FAQ <!-- - Frequently asked questions --></h2>
						<h2 class="text-xl font-bold mt-2">Mangler du svar på et spørgsmål?</h2>
						<p class="text-l my-1">Få et overblik over de mest stillede spørgsmål og svarene til dem.</p>
					</div>
					<div class="py-5 md:w-2/3 self-center">
						<details class="p-5 my-2 border-2 bg-white pointer-events-auto">
							<summary class="py-2">Hvorfor skal ens it programmer være opdateret?</summary> 
							<hr>
							<p class="py-2">Hacker arbejde konstant på at finde smurt huller i programmer og jo længere tid siden jeres programmer er opdateret. desto større er chancen for at de har fundet en vej ind.</p> 
						</details>
						<details class="p-5 my-2 border-2 bg-white">
							<summary class="py-2"> Hvad er et godt adgangskode?</summary> 
							<hr>
							<p class="py-2">Et godt kodeord skal helst indholde over 8 cifre, kombiner store og små bogstaver, tal og symboler. Før at beskytter dig i tilfælde af et at dine kodeord er blevet hacket, så brug aldrig det samme kodeord til flere kontorer</p> 
						</details>
						<details class="p-5 my-2 border-2 bg-white">
							<summary class="py-2">Hvad er IT-kriminalitet?</summary> 
							<hr>
							<p class="py-2">Disse forbrydelser går ud på at skade en persons eller virksomheds it-system. Det er forbrydelser, der angriber computeren. Fx hacking, distribuering af malware, fx vira, orme og trojanske heste eller såkaldte DDoS-angreb, der går ud på at overbelaste en internetside.</p> 
						</details>

					</div>
				</div>
				<div class="self-center text-center mb-14">
					<p class="py-5">Fandt du ikke svar på det du var efter? Så er du velkommen til at kontakte mig</p>
					<a class="bg-transperent p-1 px-5 m-2 border rounded-m border-primary text-xl text-primary font-medium uppercase hbg-primary hover:text-white hover:border-0 transition duration-500 ease-in-out" href="https://thisisatest.dev/?page_id=137">Kontakt</a>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>

	<?php
			
	// Om virksomheden content
	// Her skal du ændre id i href så det matcher det id din "Om virksomheden" side har 
	global $post;
	if( $post->ID == $omVirksomheden) { ?>
		<div class="flex flex-col">
			<div>
				<div class="w-full h-full m-auto py-20 flex flex-col md:flex-row justify-evenly ">
					<div class="w-full sm:w-1/3 flex flex-wrap order-last md:order-none">
						<div class="text-center pt-5 sm:pt-0 sm:text-left">
							<a class="text-2xl font-bold capitalize mt-5" href="<?php the_permalink() ?>">Om theilmann IT/Automation</a>
							<?php 
								$myContent = get_the_content();
								$tags = array("<p>", "</p>");
								$myContent = str_replace($tags, "", $myContent);
							?>
											
							<p class="text-m  py-5">
								<?php   echo $myContent; ?>
							</p>
						</div>
					</div>
					<div class="w-fullmd:w-1/2">
						<a href="<?php the_permalink() ?>">
							<?php if ( has_post_thumbnail() ) :
								$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
								<img 
									src="<?php echo $featured_image[0]; ?>" 
									alt='' 
									class=" w-3/4 m-auto md:w-3/4"
								/>
							<?php endif; ?>
						</a>
					</div>
				</div>
				<div class="w-2/3 m-auto h-full flex flex-col ">
					<h2 class="text-2xl font-bold text-center  capitalize my-5">Vores mål</h2>
					<div class="flex flex-col sm:flex-row justify-between">
						<div class="flex flex-col sm:w-3/5 border-2 bg-white p-5 sm:mr-1">
							<h2 class="py-5 font-bold">Mission</h2>
							<p>Vi stiler efter at skabe bedre sikkerhedsgrundlag for danske virksomheder, så vi sammen kan udvikle os </p>
						</div>
						<div class="flex flex-col sm:w-3/5 border-2 bg-white p-5 sm:ml-1">
							<h2 class="py-5 font-bold">Vision</h2>
							<p>Vi hjælper virksomheder med at sikre deres data. ved at implementer sikkerhedsløsninger, for SMV’er i Sydjylland</p>
						</div>
					</div>
				</div>
				<div class="flex flex-col justify-center w-full my-5">
					<div class="self-center">
						<h2 class="text-2xl font-bold capitalize mt-5">Værdier</h2>
					</div>
					<div class="p-5 self-center">
						<p>
						Vi vil sikre din virksomhed, så i trygt kan varetage jeres kunder og deres behov. Ved at styrke jeres it-sikkerhed, skaber vi mere 

						</p>
					</div>
					<div class="w-2/3 self-center">
						<ul>
							<li class="py-5">
								<h2 class="font-bold">Value proposition 1.</h2>
								<p>Hjælp til at implementere IT-sikkerhed og opdatering af nuværende produkter og systemer</p>
							</li>
							<li class="py-5">
								<h2 class="font-bold">Value proposition 2.</h2>
								<p>Skaber tryghed for virksomheden og deres kunder</p>
							</li>
							<li class="py-5">
								<h2 class="font-bold">Value proposition 3.</h2>
								<p>Sikre deres kunders data mod potentiel IT-kriminalitet</p>
							</li>
						</ul>
					</div>
				</div>
			</div>			
		</div>
		
	<?php } ?>

	<?php
			
			// kontakt content
			// Her skal du ændre id i href så det matcher det id din "kontakt" side har  
			global $post;
			if( $post->ID == $kontakt) { ?>
				<div class="flex flex-col">
					<div class="self-center bg-white p-5 sm:my-80 md:my-0 w-full md:w-3/4">
						<div class="text-center">
							<h2 class="text-2xl font-bold text-primary">Kontakt os</h2>
						</div>
						<?php the_content(); ?>
						<div>
							<ul class="flex flex-col sm:flex-row justify-between">
								<li> <p>Tlf: +45 31 51 27 60</p> </li>
								<li> <p>info@theilmann-it.dk</p> </li>
								<li> <p>Teglgård 1 6330 Vilsbæk</p> </li>
								<li> <p>CVR: 42049131</p> </li>
							</ul>
						</div>
					</div>
			
				</div>
				
			<?php } ?>

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
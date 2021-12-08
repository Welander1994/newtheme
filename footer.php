<?php 

// Global varibles

$service = 13;
$kontakt = 137;
$omVirksomheden = 135;
$produktImages = 83;
$forside = 11;
$domain = "https://thisisatest.dev/?page_id=";

?>


<footer class="w-full py-6 bg-3 flex flex-col justify-center text-white">
    <div class="m-auto w-5/6 flex flex-col md:flex-row justify-between border-b border-gray-500">  
        <div class="w-full py-4 md:w-2/4">
            <h1 class="pb-2 text-m uppercase font-medium w-6"><?php bloginfo( 'name' ); ?></h1>
            <p class="py-2"><?php echo get_bloginfo('description')?></p>
        </div>

        <div class="flex justify-between w-full md:w-2/5 text-xs md:text-sm">
            <!-- Her skal du ændre id i href så det matcher det id din "service" side har -->
            <ul>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $service; ?>"><b>Service</b></a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $service; ?>">Ydelser</a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $service; ?>">FAQ</a></li>
            </ul>

            <!-- Her skal du ændre id i href så det matcher det id din "om virksomheden" side har -->
            <ul>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $omVirksomheden; ?>"><b>Om Virksomheden</b></a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $omVirksomheden; ?>">Vison</a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $omVirksomheden; ?>">Mission</a></li>
            </ul>
            
            <!-- Her skal du ændre id i href så det matcher det id din "kontakt" side har -->
            <ul>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $kontakt; ?>"><b>Kontakt</b></a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $kontakt; ?>">Tlf: +45 31 51 27 60</a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $kontakt; ?>">info@theilmann-it.dk</a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $kontakt; ?>">Teglgård 1 6330 Vilsbæk</a></li>
                <li class="mb-2 border-b border-transparent hover:border-gray-500 transition duration-500 ease-in-out"><a href="<?php echo $domain; echo $kontakt; ?>">CVR: 42049131</a></li>
            </ul>
        </div>
    </div>

    <div class="m-auto pt-6">
        <p>© All rights reserved Theilmann IT/Automation</p>
    </div>
    


</footer>


<?php wp_footer(); ?>
	</body>
</html>


<footer class="w-full py-6 bg-3 flex flex-col justify-center text-white">
    <div class="m-auto w-5/6 flex flex-col md:flex-row justify-between border-b border-gray-500">  
        <div class="w-full py-4 md:w-2/4">
            <h1 class="pb-2 text-m uppercase font-medium w-6"><?php bloginfo( 'name' ); ?></h1>
            <p class="py-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        </div>

        <div class="flex justify-between w-full md:w-3/6 text-sm">
            <!-- Her skal du ændre id i href så det matcher det id din "service" side har -->
            <ul>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=13"><b>Service</b></a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=13">Ydelser</a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=13">FAQ</a></li>
            </ul>

            <!-- Her skal du ændre id i href så det matcher det id din "om virksomheden" side har -->
            <ul>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=135"><b>Om Virksomheden</b></a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=135">Vison</a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=135">Mission</a></li>
            </ul>
            
            <!-- Her skal du ændre id i href så det matcher det id din "kontakt" side har -->
            <ul>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=137"><b>Kontakt</b></a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=137">Tlf: +45 31 51 27 60</a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=137">info@theilmann-it.dk</a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=137">Teglgård 1 6330 Vilsbæk</a></li>
                <li class="pb-2"><a href="https://thisisatest.dev/?page_id=137">CVR: 42049131</a></li>
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

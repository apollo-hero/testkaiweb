<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Content Creator System
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Sep 2, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/7.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">Ranking System</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["If you wanna join  our Content Creator, open a ticket on Kaisen Discord"];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>  
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Content Creator [Silver]", 
						  "Content Creator [Gold]", 
						  "Content Creator [Platinum]", 
						  "Content Creator [Diamond]", 
						  "Content Creator [Ascendant]", 
						  "Content Creator [Inmortal]",
						  "Content Creator [Radiant]",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
</div>         
			<br />
			   <h1 class="text text-2xl font-bold mb-4">Views System</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["[Youtube]", 
				          "100-149 monthly views for Silver Content Creator", 
				          "150-299 monthly views for Gold Content Creator", 
				          "300-499 monthly views for Platinum Content Creator", 
				          "500-1249 monthly views for Diamond Content Creator", 
				          "1250-1999 monthly views for Ascendant Content Creator", 
				          "2000-3499 monthly views for Inmortal Content Creator", 
				          "3500+ monthly views for Radiant Content Creator",
				          "------------------------------------------------------------",
				          "[Twitch]",
				          "50-99 monthly views for Silver Content Creator", 
				          "100-249 monthly views for Gold Content Creator", 
				          "250-399 monthly views for Platinum Content Creator", 
				          "400-799 monthly views for Diamond Content Creator", 
				          "800-1249 monthly views for Ascendant Content Creator", 
				          "1250-1749 monthly views for Inmortal Content Creator", 
				          "1750+ monthly views for Radiant Content Creator",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
				<br />
				</div>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["All the views will be counted on 28th  of every month."];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>  
			    <h1 class="text text-2xl font-bold mb-4">Rules</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["If content Creators doing content for other  servers, it shouldn't be related with Kaisen (Comparisons between Kaisen and other servers  are forbidden)", 
						  "Rules of Kaisen should be applied in all content (If someone break the rules we may remove  them from Content Creator)", 
						  "Content Creators need to upload at least 5 videos / streams in each month)",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
				<br />
				<br />
            <div class="flex w-100">
			</div>  
			    <h1 class="text text-2xl font-bold mb-4">Rewards</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["In-Game Title for every rank",
						  "Special Role on kaisen discord (depending on rank)", 
						  "Monthly Coins to giveaways for subscribers (twitch/youtube)", 
						  "Special ingame name tag on reached rank",
						  "Monthly Coin Prizes - Ammount deppends on reached  rank and will be send 28th of every month.",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
				<br />
				<br />
			 <br />
                </div>
            <?php
            ?>
        </div>
                </div>
            <?php
            ?>
        </div>
    </div>
	<title>Kaisen - News - Launch Notes </title>
    <div class="w-100  ">
        <?php include "includes/footer.php"; ?>
    </div>
</div>
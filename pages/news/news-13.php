<div class="flex flex-col min-h-screen ">

    <div class="w-full container mx-auto p-4 flex flex-col max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-col gap-8 mb-8">
            <div class="text-sm breadcrumbs w-full mb-8">
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='/news/'>News&Info</a></li>
                </ul>
            </div>
            <div class="flex justify-between w-full mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Patch 1.0.10
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Oct 19, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-fulll ">
                <img src='https://nkaisen.com/assets/img/media1/13.png' class="w-full h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-col w-full justify-center p-2  max-w-3xl">
            
            <img  src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
			<p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-col mb-4 sm:mb-8 ">
                <?php
                $items = ["Added New Pet to the game Docile Mini Snowball.", 
						  "Added New Costume Plague.", 
						  "Added extra check for Upgrade Item if the item is already upgraded.", 
						  "Implemented new type for Fairy Bead ", 
						  "Implemented buttons for Discord RPC", 
						  "Increased the hero experience for ACT 6.1 ~ 6.2", 
						  "Increased normal experience 1-99", 
						  "Family Extension Lv.1 (70 —> 100 members)", 
						  "Family Extension Lv.2 (100 —> 200 members)", 
						  "Window won't close anymore after you upgraded your sp/item/perfection.", 
						  "Reputation rankings are now refreshed every 30 minutes instead of once per day.", 
						  "Compliment rankings are now refreshed every 30 minutes instead of once per day.", 
						  "Points rankings are now refreshed every 30 minutes instead of once per day.", 
						  "Removed the penalty Experience when in Party.", 
						  "Reduced the amount of mobs in Instant Combat.", 
						  "Reduced required amount of monsters killed and items for many main quests.", 
						  "Fixed some Issues with Alitus PSP", 
						  "Fixed Right Click Partner Information.", 
						  "Fixed Fairy Bead Issues.", 
						  "Fixed some partners/pets skill issues.", 
						  "Fixed some issues with weekly quests not refreshing properly.", 
						  "Fixed Issue with dailies ACT 6.1 ~ 6.2", 
						  "Fixed Bazaar listing issue", 
						  "Fixed a bug where some pets disappear from pet list in c haracter info & miniland.", 
						  "Fixed a bug with partner not showing cooldown.", 
					      "Enjoy the following Events : (Duration: 19/10 10 AM CEST TIME - 24/10 10 AM CEST TIME) ",
						  "Double Gold Drops: (100 extra bonus gold)", 
						  "Higher Raid Box Chances: the chance of receiving two raid boxes is increased by 30%.",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- Raid -->
			<br />
			<br />
            <img  src="/assets/divider.svg" class="mb-4" />
            <div class="flex flex-col gap-1 ml-12 sm:ml-16 mb-8">
            </div>
            <div class="flex flex-col gap-4 text-stone-500 mb-4">
			<br/>
			<br />
        <h1 class="text text-2xl font-bold mb-4">NosMall Changes</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Below you can find the random boxes from the shop (All the boxes from the rotation can be earned by mystery box in-game with a 3% probability to get 10x boxes randomly)</p>
            <div class="flex flex-col mb-4 sm:mb-8 ">
                <?php
                $items = ["Docile Mini Snowball Random Box", 
						  "All attacks are increased by 10%.",
				          "Reduces cooldown of skills by 10%.", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-fulll">
                <img src='https://nkaisen.com/assets/img/media2/29.png' class="w-full h-full" />
            </div>
			 <br />
            <div class="flex flex-col mb-4 sm:mb-8 ">
                <?php
                $items = ["Fabulously Freaky Random Box", 
						  "Fabulous (Title) [Your Specialist's attack skill points are increased by 10.]",
				          "All attacks are increased by 5%.",
				          "defence is increased by 5%.",
				          "Experience gain is increased by 10%.",
				          "Increases Champion experience received by 10%.",
				          "Movement speed is increased by 1.", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-fulll">
                <img src='https://nkaisen.com/assets/img/media2/30.png' class="w-full h-full" />
                <?php
                ?>
            </div>
			 <br />
            <div class="flex flex-col mb-4 sm:mb-8 ">
                <?php
                $items = ["Crystal Wings Random Box", 
						  "Movement speed is increased by 1.",
				          "Up to level 4 there is a 15% chance of never getting a bad effect.",
				          "Every 4 seconds: Restores 12(Player Level*3) HP.",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-fulll">
                <img src='https://nkaisen.com/assets/img/media2/6.png' class="w-full h-full" />
                <?php
                ?>
            </div>
                </div>
            <?php
            ?>
        </div>
    </div>
	<title>Kaisen - News - Launch Notes </title>
    <div class="w-full  ">
        <?php include "includes/footer.php"; ?>
    </div>
</div>
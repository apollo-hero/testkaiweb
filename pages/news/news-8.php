<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Patch 1.0.5
                </h1>
                <div class="flex">
                    <div class="badge badge-info h-8">
                        Sep 7, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/8.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added Half Moon to NPC (25K)", 
				          "Added Powerful NosMate/Partner Guardian (Restores 100% of your pet/partner HP)",
				          "Added Premium Pet Food (Increase pet loyalty to the maximum)",
				          "Added Cellon lvl 5-6 drop for act 2 Raid",
				          "Added Cellon lvl 7 drop for Draco/Glacerus/Robber Raid",
				          "Changed Unknown Land Drop Rate Perfection from 0,5% —> 1,5%",
				          "Changed A4 Raids Lobby Drop Rate Perfection from 1.5% to 2.5%",
				          "Changed Gillion Drop Raid  1 —> 3",
				          "Changed Full Moon Crystal Drop Raid  1 —> 2",
				          "Changed Level & Up Reward Lvl 88/90 items from r0+0 to r5+5 by default",
				          "Reduced the amount of items needed for crafting act 6.1 equipment", 
				          "Increased the bar progress for act4 (Open faster raid)", 
				          "Increased Rewards from PTS", 
				          "Decreased a lot the usseles drops from act 5.2/6.1", 
				          "Fixed Skill Combo for sp 5-6", 
				          "Fixed NosBazar Issue where you can't see listing items", 
						  "Fixed an issue created by Buff Helper where you don't lose attack potions etc", 
						  "Removed Cellon lvl 2-3-4 From Act 2 Raids", 
						  "Removed Cellon lvl 5-6 From Draco-Glacerus Raid", 
				          "Removed Gold from Comet Meadow",
						  "Removed Loyalty lost for Partner",];
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
                $items = ["Reworked Mystery Box Rewards to the following:"];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["Speaker x10", 
				          "Attack Potion x10", 
						  "Wings of Friendship x10", 
						  "Experience Potion x3", 
						  "Cylloan x50", 
						  "Tarot Card Game x2", 
						  "Angel's Feather x20", 
						  "Full Moon Crystal x10", 
						  "Gouermet Pet Food x5", 
						  "Partner Medicine x5", 
						  "Golden Equipment Scroll x1", 
						  "Stronge  Ice Flower Oil x1", 
						  "Draco Claw x5", 
						  "Glacerus  Mane x5", 
						  "Buff Helper x2", 
						  "Partner Skill Ticket (Single) x1", 
						  "Magic Speed Booster (1 Day)", 
						  "Magic Convertible (Vehicle)", 
						  "Main Reward (Rotation Boxes)",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>        
				<br />
				<br />
				<h1 class="text text-2xl font-bold mb-4">NosMall Changes</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Below you can find the random boxes from the shop (All the boxes from the rotation can be earned by mystery box in-game with a 3% probability to get 10x boxes randomly)</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Fairy Wings", 
				          "Movement Speed is increased by 1.",
						  "The equipped fairy's element increases by 10.",
						  "Provides a 10% chance to reset the cooldown of the attack skill used.",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/12.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Gecko Paladin", 
				          "All attacks are increased by 10%.", 
						  "Damage from criticala hits is reduced by 10%.", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/13.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Honeybee Costume Set", 
						  "All attacks are increased by 5%.",
				          "Defence is increased by 5%.", 
						  "All elementals are increased by 10%.",
						  "All elemental resistance is increased by 10.",
						  "The equipped fairy's element increases by 10.", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/14.png' class="w-100 h-full" />
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
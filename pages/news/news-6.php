<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Patch 1.0.4
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Sep 1, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/6.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Thanks a gain for all your feedback. We listen almost every single feedback from our comunity and implemented everything we could to  make a good gameplay. We're constantly working hard to provide new content & create a fun and fair server where the time you spent is recognisesd and we are closer with every patch to that goal.</p>
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added Reputation Medals inside Level & Up Reward Box",
				          "Added Ice Oil Malcom Mix NPC (200k)", 
						  "Added Red/Blue/Green Gunk drop from all monsters Laboratory 1,2,3", 
						  "Added Shining Res (Limited) 42% to Utility NPC (Note: The resistance cannot be increased) ", 
						  "Changed aggro  per entity 10 —> 20", 
						  "Changed the price for Shining Green Soul 25k —> 35k", 
						  "Changed the price for Shining Red Soul 50k —> 70k", 
						  "Changed the price for Shining Blue Soul 100k —> 150k", 
						  "Changed timeout from monster  10 —> 15", 
						  "Changed Buff Helper Duration from 30 minutes —> 60 minutes", 
						  "Changed daily reward Mysterious Treasure  2 —> 3", 
						  "Increased the drops from Mysterious Treasure", 
						  "Increased the drop rate for Wild Sound Flower", 
						  "Increased the drops from act 5.2 / 6.1", 
						  "Increased the monsters amount from act 5.2", 
						  "Fixed Ancelloan's Secondary Weapon Production Drops", 
						  "Fixed issue where you received lvl  10 box 2 times", 
						  "Removed bacoom Tail sellable price", 
						  "Mapple Devils can now summon their Strong Punkies more often 2x instead of 1x", 
						  "Earthworms and Terramonsters now have a considerably reduced chance to stun their opponents", 
						  "The broken Red Plate and Shocked Soldier now respawn inmediately after their death", 
						  "Flame Giant and Blazing Creatures respawn time have been reduced",  ];
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
                $items = ["The following items have their harvest chances tremendously increase:"];
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
                $items = ["Fragrant Grass", 
				          "Blossom Tree Fruits", 
						  "Glittering Water", 
						  "Wheat", 
						  "Iron Ore ", 
						  "Seed of Damanation", 
						  "Cloudy Water", 
						  "Polluted Water", 
						  "Filthy Water", 
						  "Clear Water", 
						  "Holy Water Bottle", 
						  "Gold Stamen", 
						  "Fruit Juice", 
						  "Daisy", 
						  "Iris",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>  
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Removed The following Quest from the game:"];
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
                $items = ["Collect Red Fruits", 
				          "Collect 3 wooden Hammer", 
						  "Deliver Glittering Water", 
						  "Get some Iron Ore from Miner Mudog",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>            
			<div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added the next rewards for the players who climb with quests:"];
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
                $items = ["TS 49 Quest (Lvl 60 Combi B (Limited) Light Set 120% - (Note: The resistance cannot be increased)", 
					      "TS 50 Quest (Lvl 60 Combi B (Limited) Water Set 120% - (Note: The resistance cannot be increased)", 
						  "TS 51 Quest (Lvl 60 Combi B (Limited) Fire Set 120% - (Note: The resistance cannot be increased)", 
						  "TS 52 Quest (Lvl 60 Combi B (Limited) Shadow Set 120% - (Note: The resistance cannot be increased)",];
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
			   <h1 class="text text-2xl font-bold mb-4">Adjustments for leveling up</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["ACT 5.1 Rashid Temple Catacombs 90 —> 85", 
				          "Act 5.1 Intermediary Seal of the Burning Sword 90 —> 85", 
						  "Act 5.1 Inner Seal of the Burning Sword 90 —> 85", 
						  "Act 7.2 The maddnes of Demons 90 —> 88", 
						  "Act 7.2 The Spirit King's Test 90 —> 88", 
						  "Act 7.2 The needle of the Holy Light 90 —> 88", 
						  "Act 7.2  The  Thread of the Holy Light 90 —> 88", 
						  "Act 7.2 The Holy Ritual 90 —> 88", 
						  "NOTE: ACT 7 timespace is Implemented but not used for the moment ",];
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
			    <h1 class="text text-2xl font-bold mb-4">Requirement levels for raids/quests and Equipment</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Raid Kertos level required 90 —> 85", 
						  "Raid Valakus level required 90 —> 85", 
						  "Raid Grenigas level required 90 —> 85", 
						  "Raid Erenia level required 90 —> 85", 
						  "Raid Zenas level required 90 —> 85", 
						  "ACT 5.2 Quest Level Required 90 —> 85", 
						  "Equipment lvl 90/91 (weapon/armor/secondary/boots/gloves 90/91 —> 85)", 
						  "Equipment lvl 92/93 (weapon/armor/secondary/boots/gloves 92/93 —> 88)", 
						  "Equipment lvl 95/96 (weapon/armor/secondary/boots/gloves 95/96 —> 90)"];
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
            <div class="flex w-100l">
                <img src='https://nkaisen.com/assets/img/media2/10.png' class="w-100 h-full" />
            </div>
			</div>
			<br />
			    <h1 class="text text-2xl font-bold mb-4">Adjustments for Raids</h1>
				<div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["We have decided to make almost all raids only boss room so we made the following changes to keep it balanced:"];
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
                $items = ["ACT 1 Chicken King/Namaju HP Decreased by 25%",
						  "ACT 2 Castra/Spider HP Increased by 25%",
						  "ACT 2 Slade HP Decreased by 50%",
						  "ACT 5 Draco HP Decreased by 25%",
						  "ACT 5 Glacerus HP Decreased by 25%",
						  "Act 5 Ibrahim/Kertos/Valakus HP Decreased by 30%",
						  "Act 5 Grenigas HP Decreased by 25%",
						  "Act 6 Raids HP Decreased by 30%",
						  "Ibrahim Protection Blessing 90 seconds —> 30 seconds",
						  "There is a 100% chance that damage from all attacks is reduced by 95% —> 50%",];
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
				<h1 class="text text-2xl font-bold mb-4">NosMall Changes</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Below you can find the random boxes from the shop (All the boxes from the rotation can be earned by mystery box in-game with a 3% probability to get 10x boxes randomly)</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Onyx Wings Random Box", 
				          "Movement speed is increased by 1.", 
						  "Increased damage from critical hits by 5%.", 
						  "When attacking, there is a 20% chance of summoning a shadow clone to carry out an additional attack."];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-100l">
                <img src='https://nkaisen.com/assets/img/media2/11.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Otter", 
				          "All attacks are increased by 10%.",
						  "All defences are increased by 10%.",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-100l">
                <img src='https://nkaisen.com/assets/img/media2/9.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Magic Student Yuna's Random Box", 
				          "Experience gaint is increased by 2/3/5/6/7/10", 
						  "Increases  Champion Experience by 2/3/5/6/7/10", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <div class="flex w-100l">
                <img src='https://nkaisen.com/assets/img/media2/8.png' class="w-100 h-full" />
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
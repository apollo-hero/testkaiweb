<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Act 6.2 Changes
                </h1>
                <div class="flex">
                    <div class="badge badge-info h-8">
                        Sep 15, 2022
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <h1 class="text text-2xl font-bold mb-4">Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Hero lvl 25 required to join act 6.2 Maps", 
					      "Increased overall experience for lvl 1-99 0-30 hlvl once with act 6.2 release.", 
					      "Gold will be now send automatically to your inventory.", 
					      "Added Autoloot Items for Website & Mysterious Treasure on Main Reward", 
					      "Added [GS] Tag for supports", 
					      "Added Changer Class Item (Swordsman/Archer/Mage)", 
					      "Added Cellon Eraser", 
					      "Added Perfection Eraser", 
					      "Added Buff Wing working for /Blade/Petal/Lunar/Retro Wings", 
					      "Changed Max Hero Level 30 —> 50", 
					      "Fixed the Daily Quest Issue", 
					      "Added New Daily Quest for Incomplete Fernon!", 
					      "New teleport added for Airship Captain to Fernon Raid", 
					      "Implemented full Questline act 6.1", 
					      "Implemented full Questline act 6.2",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
			<h1 class="text text-2xl font-bold mb-4">Balance</h1>
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["Shining Green Soul = 35k", 
						  "Shining Red Soul =  70k", 
						  "Shining Blue Soul = 150k", 
						  "Fernon's Energy = 100k", 
						  "Fernon Gloves = 2kk", 
						  "Fernon Boots = 2kk", 
						  "Element of Balance = 20k",
						  "Relic of the First Tribes = 25k",
						  "Intact Relic of the First Tribes = 60k",
						  "Element of Balance = 20k",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>
           

            <!-- Raid -->
            <h1 class="text text-2xl font-bold mb-4 sm:mb-8">Reworked Equipment</h1>
            <p class="text-stone-500 mb-4">
                Reworked Act 6.2 Equipment stats:
            </p>
            <div class="flex flex-column gap-1 ml-12 sm:ml-16 mb-8">
            </div>
            <div class="flex flex-column gap-4 text-stone-500 mb-4">
            </div>
            <?php
            $items = [
                [
                    "title" => 'Azrael Wings',
                    "img"=>'/assets/img/items/2816.png',
                    "items" => [
                        "Champion Level: 45",
                        "Min Dmg: 546 —> 630",
                        "Max Dmg: 713 —> 800",
                        "Hit Rate: 465",
                        "Crit Chance: 16% —> 18%",
                        "Crit Dmg: 190% —> 210%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 23.",
						"All element energies are increased by 185.",
						"Increases damage with a probability of 35% by 45%.",
					]
                ],
				[
				        "title" => 'Broken Krem Left Blade',
						"img"=>'/assets/img/items/2814.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 531",
							"Max Dmg: 602",
							"Hit Rate: 479 —> 540",
							"Crit Chance: 18% —> 20%",
							"Crit Dmg: 350% —> 365%",
                    ],
					"orange" => [
						"Increases damage with a probability of 6% by 70%.",
						"Reduces the enemy 's elemental resistances by 15.",
						"Hit rate of all attacks is increased by 120."
					]
                ],
				[
				        "title" => 'Leather Armour of Silver Soul Glacernon',
						"img"=>'/assets/img/items/2820.png',
						"items" => [
							"Champion Level: 48",
							"MeleeDefence: 410 —> 510",
							"RangedDefence: 475 —> 575",
							"MagicDefence: 477 —> 577",
							"Dodge: 556 —> 575",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 10%.",
						"Damage from critical hits is decreased by 55%.",
						"Maximum HP is increased by 6500.",
						"Dodge is increased by 150.",
					]
                ],
				[
				        "title" => 'Seli-Lusha Branch of Light',
						"img"=>'/assets/img/items/2817.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 618 —> 705",
							"Max Dmg: 726 —> 810",
							"Concentration: 75",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 24.",
						"All element energies are increased by 220.",
						"Increases damage with a probability of 25% by 55%.",
						"Maximum MP is increased by 8000.",
					]
                ],
				[
				        "title" => 'Abyssal Lortens Spell Gun',
						"img"=>'/assets/img/items/2818.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 588 —> 665",
							"Max Dmg: 679 —> 765",
							"Hit Rate: 458 —> 510",
							"Crit Chance: 15% —> 17%",
							"Crit Dmg: 200% —> 220%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 15.",
						"Increases damage with a probability of 25% by 50%.",
						"Maximum MP is increased by 2500",
					]
                ],
				[
				        "title" => 'Mukraju Robe',
						"img"=>'/assets/img/items/2821.png',
						"items" => [
							"Champion Level: 48",
							"MeleeDefence: 395 —> 445",
							"RangedDefence: 461 —> 536",
							"MagicDefence: 574 —> 674",
							"Dodge: 494",
                    ],
					"orange" => [
						"Probability to receive critical hits isi decreased by 11%.",
						"Maximum HP is increased by 8500.",
						"Damage from critical hits is reduced by 45%",
						"Reduces the enemy's elemental resistances by 10.",
					]
                ],
				[
				        "title" => 'Broken Krem Right Blade',
						"img"=>'/assets/img/items/2813.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 628 —> 710",
							"Max Dmg: 715 —> 805",
							"Hit Rate: 485 —> 515",
							"Crit Chance: 14%",
							"Crit Dmg: 2200% —> 20%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 24.",
						"All element energies are increased by 185.",
						"Increases damage with a probability of 40% by 40%.",
					]
                ],
				[
				        "title" => 'Luminiel Shining Crossbow',
						"img"=>'/assets/img/items/2815.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 553 —> 594",
							"Max Dmg: 669 —> 740",
							"Hit Rate: 462 —> 510",
							"Crit Chance: 16% —> 18%",
							"Crit Dmg: 190% —> 220%",
                    ],
					"orange" => [
						"All defence powers are increased by 220.",
						"Reduces the enemy's elemental resistances by 15.",
						"Increases damage with a probability of  10% by 40%",
					]
                ],
								[
				        "title" => 'Brave Shares Heavy Armour',
						"img"=>'/assets/img/items/2819.png',
						"items" => [
							"Champion Level: 48",
							"MeleeDefence: 609 —> 709",
							"RangedDefence: 524 —> 594",
							"MagicDefence: 406 —> 458",
							"Dodge: 462 —> 475",
                    ],
					"orange" => [
						"Damage from critical hits is reduced by 70%",
						"Maximum HP is increased by 9000.",
						"Probability  to receive critical hits is decreased by 10%.",
						"All elemental  resistance is increased by 10.",
					]
                ],
								[
				        "title" => 'Fernon Gloves',
						"img"=>'/assets/img/items/2940.png',
						"items" => [
							"MeleeDefence: 50",
							"RangedDefence: 50",
							"MagicDefence: 50",
							"Dodge: 50",
							"FireResistance: 12",
							"WaterResistance: 12",
							"LightResistance: 12",
							"ShadowResistance: 12",
                    ],
					"orange" => [
						"Dodge is increased by 25.",
						"All element energies are increased by 75",
					]
                ],
								[
				        "title" => 'Fernon Boots',
						"img"=>'/assets/img/items/2949.png',
						"items" => [
							"MeleeDefence: 50",
							"RangedDefence: 50",
							"MagicDefence: 50",
							"Dodge: 50",
							"FireResistance: 12",
							"WaterResistance: 12",
							"LightResistance: 12",
							"ShadowResistance: 12",
                    ],
					"orange" => [
						"Dodge is increased by 25.",
						"All element energies are increased by 75",
					]
                ],
								[
				        "title" => 'Azrael Mask',
						"img"=>'/assets/img/items/2825.png',
						"items" => [
							"MeleeDefence: 0",
							"RangedDefence: 0",
							"MagicDefence: 0",
							"Dodge: 0",
							"FireResistance: 0",
							"WaterResistance: 0",
							"LightResistance: 0",
							"ShadowResistance: 0",
                    ],
					"orange" => [
						"Up to level 4 there is a 10% chance of never getting a bad effect.",
						"Increases PvP attack power by 5%.",
						"Reduces damage received in PvP by 5%.",
						"Light resistance is increased by 10.",
					]
                ],
            ];
            for ($i = 0; $i < count($items); $i++) {
            ?>
             <div class="flex container mb-2">
                            <div class="accordion container" id="accordionExample">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center" id="heading-<?php echo $i; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                        <img src='<?php echo $items[$i]['img']; ?>' width="30" height="30" class="mr-2">
                                        </img>
                                        <?php echo $items[$i]['title']; ?>
                                    </div>

                                    <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="flex flex-column ml-5 p-2 sm:p-4 ">
                                                <?php
                                                for ($j = 0; $j < count($items[$i]["items"]); $j++) {
                                                ?>
                                                    <?php echo $items[$i]["items"][$j]; ?>
                                                    <br />

                                                <?php } ?>
                                                <?php if (array_key_exists("orange", $items[$i])) {
                                                ?><div class="text-warning"> <?php
                                                                        for ($j = 0; $j < count($items[$i]["orange"]); $j++) {
                                                                        ?>
                                                            <div class="text-wo-icon"><?php echo $items[$i]["orange"][$j]; ?></div>

                                                        <?php } ?>
                                                    </div><?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
            }
            ?>
			<br/>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Reworked Fernon Resistance/Mask to the following:"];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
            <?php
            $items = [
                [
				        "title" => 'Fernon Gloves',
						"img"=>'/assets/img/items/2940.png',
						"items" => [
							"MeleeDefence: 50",
							"RangedDefence: 50",
							"MagicDefence: 50",
							"Dodge: 50",
							"FireResistance: 12",
							"WaterResistance: 12",
							"LightResistance: 12",
							"ShadowResistance: 12",
                    ],
					"orange" => [
						"Dodge is increased by 25.",
						"All element energies are increased by 75",
					]
                ],
								[
				        "title" => 'Fernon Boots',
						"img"=>'/assets/img/items/2949.png',
						"items" => [
							"MeleeDefence: 50",
							"RangedDefence: 50",
							"MagicDefence: 50",
							"Dodge: 50",
							"FireResistance: 12",
							"WaterResistance: 12",
							"LightResistance: 12",
							"ShadowResistance: 12",
                    ],
					"orange" => [
						"Dodge is increased by 25.",
						"All element energies are increased by 75",
					]
                ],
								[
				        "title" => 'Azrael Mask',
						"img"=>'/assets/img/items/2825.png',
						"items" => [
							"MeleeDefence: 0",
							"RangedDefence: 0",
							"MagicDefence: 0",
							"Dodge: 0",
							"FireResistance: 0",
							"WaterResistance: 0",
							"LightResistance: 0",
							"ShadowResistance: 0",
                    ],
					"orange" => [
						"Up to level 4 there is a 10% chance of never getting a bad effect.",
						"Increases PvP attack power by 5%.",
						"Reduces damage received in PvP by 5%.",
						"Light resistance is increased by 10.",
					]
                ],
            ];
            for ($i = 0; $i < count($items); $i++) {
            ?>
                <div class="flex container mb-2">
                            <div class="accordion container" id="accordionExample">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center" id="heading-<?php echo $i; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                        <img src='<?php echo $items[$i]['img']; ?>' width="30" height="30" class="mr-2">
                                        </img>
                                        <?php echo $items[$i]['title']; ?>
                                    </div>

                                    <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="flex flex-column ml-5 p-2 sm:p-4 ">
                                                <?php
                                                for ($j = 0; $j < count($items[$i]["items"]); $j++) {
                                                ?>
                                                    <?php echo $items[$i]["items"][$j]; ?>
                                                    <br />

                                                <?php } ?>
                                                <?php if (array_key_exists("orange", $items[$i])) {
                                                ?><div class="text-warning"> <?php
                                                                        for ($j = 0; $j < count($items[$i]["orange"]); $j++) {
                                                                        ?>
                                                            <div class="text-wo-icon"><?php echo $items[$i]["orange"][$j]; ?></div>

                                                        <?php } ?>
                                                    </div><?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
            }
            ?>
			<br/>
			<br/>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media2/18.png' class="w-100 h-full">
                </img>
            </div>
			<br/>
            <h1 class="text text-2xl font-bold mb-4 sm:mb-8">Raid Changes</h1>
            <p class="text-stone-500 mb-4">
                Our approach has been mainly on time and worth. Some of the changes we have applied are to keep the areas fresh and to provide a better output for players.
            </p>
             <br/>
            <br/>
            <?php
            $items = [
                [
                    "title" => 'Fernon Raid Box',
                    "img"=>'/assets/img/items/4762.png',
                    "items" => [
                        "Ancelloan's Herald Title",
                        "Broken Krem's Left Blade",
                        "Seli-Lusha Branch of Light",
                        "Azrael's Mask",
                        "Fernon's Gloves",
                        "Fernon's Shoes",
                        "Archdaemon Wings",
                        "Archangel Wings",
                        "Luminiel's Shining Crossbow",
                        "Abyssal Lorten's Spell Gun",
                        "Broken Krem's Left Blade",
                        "Brave Share's Heavy Armour",
                        "Mukraju's Robe",
                        "Leather Armour of Silver Soul Glacernon",
                        "Cellon (Level 10)",
                        "Cellon (Level 9) x2",
                        "Crystal of Balance x3",
                        "Damage Orichalcum x3",
                        "Unidentified Metal x10",
                        "Experience Potion x3",
                        "Divine Recovery Potion x35",
                    ],
                ],
            ];
            for ($i = 0; $i < count($items); $i++) {
            ?>
                <div class="flex container mb-2">
                            <div class="accordion container" id="accordionExample">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center" id="heading-<?php echo $i; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                        <img src='<?php echo $items[$i]['img']; ?>' width="30" height="30" class="mr-2">
                                        </img>
                                        <?php echo $items[$i]['title']; ?>
                                    </div>

                                    <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="flex flex-column ml-5 p-2 sm:p-4 ">
                                                <?php
                                                for ($j = 0; $j < count($items[$i]["items"]); $j++) {
                                                ?>
                                                    <?php echo $items[$i]["items"][$j]; ?>
                                                    <br />

                                                <?php } ?>
                                                <?php if (array_key_exists("orange", $items[$i])) {
                                                ?><div class="text-warning"> <?php
                                                                        for ($j = 0; $j < count($items[$i]["orange"]); $j++) {
                                                                        ?>
                                                            <div class="text-wo-icon"><?php echo $items[$i]["orange"][$j]; ?></div>

                                                        <?php } ?>
                                                    </div><?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                $items = ["Lunar Wings", 
				          "On attack, there is a 10% chance of receiving Lunar Power.",
						  "Movement speed is increased by 2.",
						  "The equippeded fairy's element increases by 10.",
						  "Lunar Power Effect: All attacks  are increased by 7% | Reduces the enemy's elemental resistances by 7.",];
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
                <img src='https://nkaisen.com/assets/img/media2/19.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Ice With Costume Set", 
				          "Water element is increased by 10%.", 
				          "If you are attacked with the water element, there is a 100% chance the damage will be reduced by 10%.", 
				          "With a 20% probability water attack damage is increased by 30%.", 
				          "There is a 2% chance of causing Slight Freeze.", 
						  "Movement speed is increased by 2 (Total)",
						  "Slight Freeze Effect: No attack Posible | No movement possible for 4 seconds.", ];
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
                <img src='https://nkaisen.com/assets/img/media2/20.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Wisden Pet", 
						  "All attacks are increased by 10%.",
				          "All elemental resistance is increased by 10.",];
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
                <img src='https://nkaisen.com/assets/img/media2/21.png' class="w-100 h-full" />
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
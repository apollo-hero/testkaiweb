<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Trophy System
                </h1>
                <div class="flex">
                    <div class="badge badge-info h-5">
                        Sep 22, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/11.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <img  src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
			<p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Implemented Upgrade Item (You can upgrade your actual Items to the next level)", 
					      "Increased the gold earning  from TimeSpace", 
					      "Removed Crossbow Arrows-Short & Long from the game (Not Used anymore)", 
					      "Minor Trophies are now  tradeable", 
					      "Act 1 Trophies are now sellable at any npc for 1.000.000 Gold", 
					      "Act 2 Trophies are now sellable at any npc for 1.500.000 Gold", 
					      "Act 5.2 Trophies are now sellable at any npc for 2.000.000 Gold",
					      "Adjustments for act 6.1 Raids (Boss have the default HP value)",
					      "Adjustments for act 6.2 Raids (Boss have the default HP value)",
					      "Fixed Issue with gold bonus party & Raids", 
					      "Fixed Changer Class Equipment Issue", 
					      "Fixed HP Issue not recover after 10% XP", 
					      "Fixed Ice Witch Costume Effect"];
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
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["The following items got removed in Act 5.2, 6.1 and 6.2 maps:"];
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
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["Cereal Grains", 
						  "Vegetables",
						  "Fruit",
						  "Meat",
						  "Seafood",
						  "Apple",
						  "Pyrostone",
						  "Aquastone",
						  "Photostone",
						  "Shadowstone",
						  "Sugar Beet",
						  "Herb",
						  "Red Fruits",
						  "Lamb",
						  "Groundwater",
						  "Huge Strawberry Box",
						  "Ripe Grape Box",
						  "Red Apple Box",
						  "Water",
						  "Hot Leather",
						  "Blazing Piece of red Metal",
						  "Godly Crystal",
						  "Godly Magic Crystal",
						  "Dark Magic Crystal",
						  "Hot Silver Thread",
						  "Hot Fabric",
						  "Light Blue Pumpkin Stone",
						  "Violet Pumpkin Stone",
						  "Orange Pumpkin Stone",
						  "Mysterious Ink",
						  "Mysterious Stone"];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["The following Buffs/debuffs were removed from act 6.1 - 6.2"];
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
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["There is a 2% chance of causing Soul Drain.", 
						 "There is a 100% chance of causing Morale Increase.", 
						 "There is a chance of causing Soul Drain.", 
						 "There is a chance of causing Paralysis .", 
						 "There is a chance of causing Mana Drain."];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Increased the amount of monsters inside the following Act 6.1 maps:"];
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
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["Hell's Gate 1", 
						  "Hell's Gate 2", 
						  "Hell's Gate 3", 
						  "Hell's Gate 4", 
						  "Hell's Ruins 1", 
						  "Hell's Ruins 2",
						  "Heaven's Gate 1", 
						  "Heaven's Gate 2", 
						  "Heaven's Gate 3", 
						  "Heaven's Gate 4", 
						  "Heaven's Ruins 1", 
						  "Heaven's Ruins 2", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Increased the amount of monsters inside the following Act 6.2 maps:"];
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
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["Ancelloan's Will 1", 
						  "Ancelloan's Will 2", 
						  "Ancelloan's Will 3", 
						  "Ancelloan's Will 4", 
						  "Ancelloan's Will 5", 
						  "Ancelloan's Will 6",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
            </div>
       <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/24.png' class="w-100 h-full" />
            </div>
			 <br />
			  <br />

            <h1 class="text text-2xl font-bold mb-4">Trophy System</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Once you collected 11 minor trophies, you can exchange it for Class Trophy or Major Trophy, you can upgrade your actual Class Trophy & Major Trophy to Tier II and III. In order to craft the Major Trophies you must go to Venom in NosViille and give him all the trophies  you collected. There you can also buy the Trophy Upgrade for 50.000.000 Gold In order to upgrade your trophies.</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Implemented the Following Class Trophy:"];
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
            <?php
            $items = [
                [
                    "title" => 'Archer Trophy',
                    "img"=>'/assets/img/items/2854.png',
                    "items" => [
                    ],
					"orange" => [
						"[Archer Tier I]",
						"Ranged attack is increased by 50.",
						"Maximum HP is increased by 500.",
						"Maximum MP is increased by 500.",
						"Increases damage from critical hits by 5%.",
						"--------------------------------------------",
						"[Archer Tier II]",
						"Ranged attack is increased by 100.",
						"Maximum HP is increased by 1000.",
						"Maximum MP is increased by 1000.",
						"Increases damage from critical hits by 7%.",
						"--------------------------------------------",
						"[Archer Tier III]",
						"Ranged attack is increased by 200.",
						"Maximum HP is increased by 2000.",
						"Maximum MP is increased by 2000.",
						"Increases damage from critical hits by 10%.",
					]
                ],
				[
				        "title" => 'Swordsman Trophy',
						"img"=>'/assets/img/items/2342.png',
						"items" => [
                    ],
						"orange" => [
						"[Swordsman Tier I]",
						"Melee attack is increased by 50.",
						"Maximum HP is increased by 1000.",
						"All defences are increased by 5%.",
						"--------------------------------------------",
						"[Swordsman Tier II]",
						"Melee attack is increased by 100.",
						"Maximum HP is increased by 2500.",
						"All defences are increased by 5%.",
						"--------------------------------------------",
						"[Swordsman Tier III]",
						"Melee attack is increased by 200.",
						"Maximum HP is increased by 5000.",
						"All defences are increased by 5%.",
					]
                ],
				[
				        "title" => 'Mage Trophy',
						"img"=>'/assets/img/items/2398.png',
						"items" => [
                    ],
						"orange" => [
						"[Mage Tier I]",
						"Magic attack power is increased by 50.",
						"Maximum MP is increased by 500.",
						"Reduces cooldown of skills by 5%.",
						"Mana for using skills is decreased by 2%. (Includes magic.)",
						"--------------------------------------------",
						"[Mage Tier II]",
						"Magic attack power is increased by 100.",
						"Maximum MP is increased by 1000.",
						"Reduces cooldown of skills by 7%.",
						"Mana for using skills is decreased by 3%. (Includes magic.)",
						"--------------------------------------------",
						"[Mage Tier III]",
						"Magic attack power is increased by 200.",
						"Maximum MP is increased by 2000.",
						"Reduces cooldown of skills by 10%.",
						"Mana for using skills is decreased by 5%. (Includes magic.)",
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
<div class="flex flex-column mb-4 sm:mb-8 ">
<br />
                <?php
                $items = ["Implemented the Following Major Trophy:"];
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
            <?php
            $items = [
                [
                    "title" => 'Fernon Destruction',
                    "img"=>'/assets/img/items/2851.png',
                    "items" => [
                    ],
					"orange" => [
						"[Fernon Destruction Tier I]",
						"Increases PvP attack power by 5%.",
						"Movement speed is increased by 1.",
						"--------------------------------------------",
						"[Fernon Destruction Tier II]",
						"Increases PvP attack power by 7%.",
						"Movement speed is increased by 1.",
						"--------------------------------------------",
						"[Fernon Destruction Tier III]",
						"Increases PvP attack power by 10%.",
						"Movement speed is increased by 2.",
					]
                ],
				[
				        "title" => 'Fernon Shield',
						"img"=>'/assets/img/items/2850.png',
						"items" => [
                    ],
						"orange" => [
						"[Fernon Shield Tier I]",
						"Reduces damage received in  PvP by 5%.",
						"Movement speed is increased by 1.",
						"--------------------------------------------",
						"[Fernon Shield Tier II]",
						"Reduces damage received in  PvP by 7%.",
						"Movement speed is increased by 1.",
						"--------------------------------------------",
						"[Fernon Shield Tier III]",
						"Reduces damage received in  PvP by 10%.",
						"Movement speed is increased by 2.",
					]
                ],
				[
				        "title" => 'Shadow Master',
						"img"=>'/assets/img/items/2831.png',
						"items" => [
                    ],
						"orange" => [
						"[Shadow Master Tier I]",
						"Reduces cooldown of skills by 5%.",
						"There is a 5% chance that damage from all attacks is reduced by 50%.",
						"When attacking, there is a 5% chance of summoning a shadow clone to carry out an additional attack.",
						"--------------------------------------------",
						"[Shadow Master Tier II]",
						"Reduces cooldown of skills by 7%.",
						"There is a 7% chance that damage from all attacks is reduced by 50%.",
						"When attacking, there is a 7% chance of summoning a shadow clone to carry out an additional attack.",
						"--------------------------------------------",
						"[Shadow Master Tier III]",
						"Reduces cooldown of skills by 10%.",
						"There is a 10% chance that damage from all attacks is reduced by 50%.",
						"When attacking, there is a 10% chance of summoning a shadow clone to carry out an additional attack.",
					]
                ],
				[
				        "title" => 'Elemental Master',
						"img"=>'/assets/img/items/2832.png',
						"items" => [
                    ],
						"orange" => [
						"[Elemental Master Tier I]",
						"Reduces the enemy's elemental resistances by 5.",
						"Maximum MP is increased by 5000.",
						"The equipped fairy's element increases by 5.",
						"--------------------------------------------",
						"[Elemental Master Tier II]",
						"Reduces the enemy's elemental resistances by 7.",
						"Maximum MP is increased by 7500.",
						"The equipped fairy's element increases by 7.",
						"--------------------------------------------",
						"[Elemental Master Tier III]",
						"Reduces the enemy's elemental resistances by 10.",
						"Maximum MP is increased by 10000.",
						"The equipped fairy's element increases by 10.",
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
            <!-- Raid -->
            <img  src="/assets/divider.svg" class="mb-4" />
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
                        "Min Dmg: 546 —> 670",
                        "Max Dmg: 713 —> 840",
                        "Hit Rate: 465",
                        "Crit Chance: 16% —> 18%",
                        "Crit Dmg: 190% —> 210%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 23.",
						"All element energies are increased by 185.",
						"Increases damage with a probability of 35% by 45%.",
						"There is a 4% chance of causing Azrael, Angel of Death.",
					]
                ],
				[
				        "title" => 'Broken Krem Left Blade',
						"img"=>'/assets/img/items/2814.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 531 —> 571",
							"Max Dmg: 602 —> 642",
							"Hit Rate: 479 —> 540",
							"Crit Chance: 18% —> 20%",
							"Crit Dmg: 350% —> 365%",
                    ],
					"orange" => [
						"Increases damage with a probability of 6% by 70%.",
						"Reduces the enemy 's elemental resistances by 15.",
						"Hit rate of all attacks is increased by 120.",
						"There is a 7% chance of causing Krem's Ego.",
					]
                ],
				[
				        "title" => 'Leather Armour of Silver Soul Glacernon',
						"img"=>'/assets/img/items/2820.png',
						"items" => [
							"Champion Level: 48",
							"MeleeDefence: 410 —> 580",
							"RangedDefence: 475 —> 645",
							"MagicDefence: 477 —> 647",
							"Dodge: 556 —> 575",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 10%.",
						"Damage from critical hits is decreased by 55%.",
						"Maximum HP is increased by 6500.",
						"There is a 2% chance of causing Glacernon's Echo.",
					]
                ],
				[
				        "title" => 'Seli-Lusha Branch of Light',
						"img"=>'/assets/img/items/2817.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 618 —> 745",
							"Max Dmg: 726 —> 850",
							"Concentration: 75",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 24.",
						"All element energies are increased by 220.",
						"Increases damage with a probability of 25% by 55%.",
						"There is a 10% chance of causing Seli-Lusha's Essence.",
					]
                ],
				[
				        "title" => 'Abyssal Lortens Spell Gun',
						"img"=>'/assets/img/items/2818.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 588 —> 705",
							"Max Dmg: 679 —> 805",
							"Hit Rate: 458 —> 510",
							"Crit Chance: 15% —> 17%",
							"Crit Dmg: 200% —> 220%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 15.",
						"Increases damage with a probability of 25% by 50%.",
						"Maximum MP is increased by 2500",
						"There is a 5% chance of causing Lorten's Dusk",
					]
                ],
				[
				        "title" => 'Mukraju Robe',
						"img"=>'/assets/img/items/2821.png',
						"items" => [
							"Champion Level: 48",
							"MeleeDefence: 395 —> 515",
							"RangedDefence: 461 —> 601",
							"MagicDefence: 574 —> 744",
							"Dodge: 494",
                    ],
					"orange" => [
						"Probability to receive critical hits isi decreased by 11%.",
						"Maximum HP is increased by 8500.",
						"Damage from critical hits is reduced by 45%",
						"There is a 2% chance of causing Mukraju's Wisdom.",
					]
                ],
				[
				        "title" => 'Broken Krem Right Blade',
						"img"=>'/assets/img/items/2813.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 628 —> 750",
							"Max Dmg: 715 —> 845",
							"Hit Rate: 485 —> 515",
							"Crit Chance: 14%",
							"Crit Dmg: 200% —> 220%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 24.",
						"All element energies are increased by 185.",
						"Increases damage with a probability of 40% by 40%.",
						"There is a 8% chance of causing Krem's Ego.",
					]
                ],
				[
				        "title" => 'Luminiel Shining Crossbow',
						"img"=>'/assets/img/items/2815.png',
						"items" => [
							"Champion Level: 45",
							"Min Dmg: 553 —> 640",
							"Max Dmg: 669 —> 790",
							"Hit Rate: 462 —> 510",
							"Crit Chance: 16% —> 18%",
							"Crit Dmg: 190% —> 220%",
                    ],
					"orange" => [
						"All defence powers are increased by 220.",
						"Reduces the enemy's elemental resistances by 15.",
						"Increases damage with a probability of  10% by 40%",
						"There is a 5% chance of c ausing Rumial's Dawn",
					]
                ],
								[
				        "title" => 'Brave Shares Heavy Armour',
						"img"=>'/assets/img/items/2819.png',
						"items" => [
							"Champion Level: 48",
							"MeleeDefence: 609 —> 709",
							"RangedDefence: 524 —> 614",
							"MagicDefence: 406 —> 491",
							"Dodge: 462 —> 475",
                    ],
					"orange" => [
						"Damage from critical hits is reduced by 70%",
						"Maximum HP is increased by 9000.",
						"Probability  to receive critical hits is decreased by 10%.",
						"There is a 2% chance of causing Shares' Battle Cry.",
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
			<br />
        <h1 class="text text-2xl font-bold mb-4">NosMall Changes</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Below you can find the random boxes from the shop (All the boxes from the rotation can be earned by mystery box in-game with a 3% probability to get 10x boxes randomly)</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Retro Wings", 
				          "On attack, there is a 10% chance of receiving Energy Boost",
						  "Movement speed is increased by 1.",
						  "Up to level 4 there is a 10% chance of never getting a bad effect.",
						  "Energy Boost Effect: All attacks  are increased by 15% | Reduces cooldown of skills  by 5%",];
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
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/22.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Pixie Costume Set", 
				          "All attacks are increased by 5%.", 
				          "Defence is increased by 5%.", 
				          "Light element is increased by 15.", 
				          "There is a 2% chance of  causing Slight Blackout.", 
						  "The equipped fairy's element increases by 10.", ];
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
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/23.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Otter Pet", 
						  "All attacks are increased by 10%.",
				          "All defences are increased by 10%.",];
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
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/9.png' class="w-100 h-full" />
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
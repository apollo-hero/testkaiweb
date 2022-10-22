<div class="flex flex-column min-h-screen ">

    <div class="container">
        <div class="container">
            <div class="d-flex justify-content-between" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Act 6.1 Changes
                </h1>
                <div class="flex">
                    <div class="badge badge-info">
                        Aug 19, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/1.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-content-center p-2  max-w-3xl">
            
            <img  src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
                We approached Act 6.1 by distributing more monsters on key maps and also adjusted certain Act 6.1 equipment we felt would help assisting with levelling further. Our balance decisions have been based around key releases such as Act 7.1 where again this act will require adjustments to fit our goal.</p>
                You can find all changes applied to Act 6.1 below:</p>
			<p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Cylloan access when a player has reached level 90 instead of 88.", "Improved Act 6.1 equipment sale prices to aid with economy.", "Rewards inside item Hellord Military Supplies have been reworked to the following:",];
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
                $items = ["Crystal of Balance x5", "Dark Energy Stone  x5", "Abyssal Essence x2", "Turik's Essence x1", "Sellaim's Essence x1", "Energy Potion x10", "Attack Potion x10", "Defence Potion x10", "Golden Thread x1", "Silver Thread x10", "Unidentified Metal x30",];
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
                $items = ["Rewards inside item Mystic Heaven Military Supplies have been reworked to the following:"];
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
                $items = ["Crystal of Balance x5", "Holy Blood x5", "Twilight Essence x2", "Eperial's Essence x1", "Woondine's Essence x1", "Energy Potion x10", "Attack Potion x10", "Defence Potion x10", "Golden Thread x1", "Silver Thread x10", "Unidentified Metal x30",];
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
           

            <!-- Raid -->
            <img  src="/assets/divider.svg" class="mb-4" />
            <h1 class="text text-2xl font-bold mb-4 sm:mb-8">Reworked Equipment</h1>
            <p class="text-stone-500 mb-4">
                We took a hard look at every item from act 6.1 to bring a perfect balance to gameplay!
            </p>

            <div class="flex flex-column gap-1 ml-12 sm:ml-16 mb-8">
            </div>
            <div class="flex flex-column gap-4 text-stone-500 mb-4">
            </div>
            <br/>
            <?php
            $items = [
                [
                    "title" => 'Sealed Heavenly Sword',
                    "img"=>'/assets/img/items/2759.png',
                    "items" => [
                        "Champion Level: 25",
                        "Min Dmg: 603",
                        "Max Dmg: 685",
                        "Hit Rate: 509",
                        "Crit Chance: 16",
                        "Crit Dmg: 190%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 20.",
						"All element energies are increased by 185.",
						"Increases damage with a probability of 40% by 35%."
					]
                ],
				[
				        "title" => 'Sealed Heavenly Staff',
						"img"=>'/assets/img/items/2760.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 643",
							"Max Dmg: 736",
							"Concentration: 85",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 21.",
						"All element energies are increased by 220.",
						"Increases damage with a probability of 25% by 50%",
						"Maximum MP is increased by 8000"
					]
                ],
				[
				        "title" => 'Sealed Heavenly Bow',
						"img"=>'/assets/img/items/2761.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 561",
							"Max Dmg: 723",
							"Hit Rate: 510",
							"Crit Chance: 20",
							"Crit Dmg: 185%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 20.",
						"All element energies are increased by 160.",
						"Increases damage with a probability of 30% by 45%",
					]
                ],
				[
				        "title" => 'Sealed Heavenly Crossbow',
						"img"=>'/assets/img/items/2762.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 528",
							"Max Dmg: 639",
							"Hit Rate: 486",
							"Crit Chance: 18",
							"Crit Dmg: 180%",
                    ],
					"orange" => [
						"All attacks are increased by 190.",
						"All defence powers are increased by 190.",
						"All element energies are increased by 12.",
						"Reduces the enemy's elemental resistances by 12."
					]
                ],
				[
				        "title" => 'Sealed Heavenly Spell Gun',
						"img"=>'/assets/img/items/2763.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 603",
							"Max Dmg: 689",
							"Hit Rate: 482",
							"Crit Chance: 19",
							"Crit Dmg: 195%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 10.",
						"Increases damage with a probability of 25% by 30%.",
						"Maximum MP is increased by 2200",
						"All element energies are increased by 60."
					]
                ],
				[
				        "title" => 'Sealed Heavenly Dagger',
						"img"=>'/assets/img/items/2764.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 546",
							"Max Dmg: 612",
							"Hit Rate: 503",
							"Crit Chance: 21",
							"Crit Dmg: 345%",
                    ],
					"orange" => [
						"Increases damage with a probability of 6% by 65%",
						"Hit rate of all attacks is increased by 100.",
						"All element energies are increased by 10.",
						"Reduces the enemy's elemental resistances by 10."
					]
                ],
				[
				        "title" => 'Sealed Hellord Sword',
						"img"=>'/assets/img/items/2767.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 653",
							"Max Dmg: 745",
							"Hit Rate: 460",
							"Crit Chance: 12",
							"Crit Dmg: 210%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 20.",
						"All element energies are increased by 185.",
						"Increases damage with a probability of 40% by 35%.",
					]
                ],
				[
				        "title" => 'Sealed Hellord Wand',
						"img"=>'/assets/img/items/2768.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 683",
							"Max Dmg: 796",
							"Concentration: 75",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 21.",
						"All element energies are increased by 220.",
						"Increases damage with a probability of 25% by 50%.",
						"Maximum MP is increased by 8000.",
					]
                ],
								[
				        "title" => 'Sealed Hellord Bow',
						"img"=>'/assets/img/items/2769.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 621",
							"Max Dmg: 783",
							"Hit Rate: 440",
							"Crit Chance: 15",
							"Crit Dmg: 200%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 20.",
						"All element energies are increased by 160.",
						"Increases damage with a probability of 30% by 45%.",
					]
                ],
				[
				        "title" => 'Sealed Hellord Crossbow',
						"img"=>'/assets/img/items/2780.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 578",
							"Max Dmg: 699",
							"Hit Rate: 437",
							"Crit Chance: 14",
							"Crit Dmg: 200%",
                    ],
					"orange" => [
						"All attacks are increased by 190.",
						"All defence powers are increased by 190.",
						"All element energies are increased by 12.",
						"Reduces the enemy's elemental resistances by 12.",
					]
                ],
				[
				        "title" => 'Sealed Hellord Spell Gun',
						"img"=>'/assets/img/items/2765.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 653",
							"Max Dmg: 749",
							"Hit Rate: 433",
							"Crit Chance: 15",
							"Crit Dmg: 215%",
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 10.",
						"Increases damage with a probability of 25% by 30%.",
						"All element energies are increased by 60.",
						"Reduces the enemy's elemental resistances by 10.",
					]
                ],
				[
				        "title" => 'Sealed Hellord Dagger',
						"img"=>'/assets/img/items/2766.png',
						"items" => [
							"Champion Level: 25",
							"Min Dmg: 596",
							"Max Dmg: 672",
							"Hit Rate: 453",
							"Crit Chance: 17",
							"Crit Dmg: 365%",
                    ],
					"orange" => [
						"Increases damage with a probability of 6% by 65%.",
						"Hit rate of all attacks is increased by 100.",
						"All element energies are increased by 10.",
						"Reduces the enemy's elemental resistances by 10.",
					]
                ],
				                [
                    "title" => 'Sealed Heavy Heavenly Armour',
                    "img"=>'/assets/img/items/2774.png',
                    "items" => [
                        "Champion Level: 28",
                        "MeleeDefence: 584",
                        "RangedDefence: 504",
                        "MagicDefence: 391",
                        "Dodge: 469",
                    ],
					"orange" => [
						"Damage from critical hits is reduced by 60%.",
						"Probability to receive critical hits is decreased by 9%.",
						"Maximum HP is increased by 5000.",
						"All elemental resistance is increased by 10.",
					]
                ],
                [
                    "title" => 'Sealed Heavenly Robe',
                    "img"=>'/assets/img/items/2775.png',
                    "items" => [
                        "Champion Level: 28",
                        "MeleeDefence: 380",
                        "RangedDefence: 441",
                        "MagicDefence: 549",
                        "Dodge: 518",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 11%.",
						"Maximum HP is increased by 7000.",
						"Damage from critical hits is reduced by 40%.",
						"All elemental resisitance is increased by 10.",
					]
                ],
                [
                    "title" => 'Sealed Heavenly Leather Armour',
                    "img"=>'/assets/img/items/2776.png',
                    "items" => [
                        "Champion Level: 28",
                        "MeleeDefence: 390",
                        "RangedDefence: 455",
                        "MagicDefence: 457",
                        "Dodge: 593",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 10%.",
						"Damage from critical hits is reduced by 45%.",
						"All elemental resisitance is increased by 7.",
						"Maximum HP is increased by 7000.",
					]
                ],
                [
                    "title" => 'Sealed Hellord Heavy Armour',
                    "img"=>'/assets/img/items/2777.png',
                    "items" => [
                        "Champion Level: 28",
                        "MeleeDefence: 634",
                        "RangedDefence: 544",
                        "MagicDefence: 421",
                        "Dodge: 454",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 9%.",
						"Damage from critical hits is reduced by 60%.",
						"All elemental resisitance is increased by 10.",
						"Maximum HP is increased by 5000.",
					]
                ],
                [
                    "title" => 'Sealed Hellord Robe',
                    "img"=>'/assets/img/items/2778.png',
                    "items" => [
                        "Champion Level: 28",
                        "MeleeDefence: 410",
                        "RangedDefence: 481",
                        "MagicDefence: 599",
                        "Dodge: 469",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 11%.",
						"Damage from critical hits is reduced by 40%.",
						"All elemental resisitance is increased by 10.",
						"Maximum HP is increased by 7000.",
					]
                ],
                [
                    "title" => 'Sealed Hellord Leather Armour',
                    "img"=>'/assets/img/items/2779.png',
                    "items" => [
                        "Champion Level: 28",
                        "MeleeDefence: 430",
                        "RangedDefence: 495",
                        "MagicDefence: 497",
                        "Dodge: 519",
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 10%.",
						"Damage from critical hits is reduced by 45%.",
						"All elemental resisitance is increased by 7.",
						"Maximum HP is increased by 3500.",
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
            <h1 class="text text-2xl font-bold mb-4 sm:mb-8">Raid Changes</h1>
            <p class="text-stone-500 mb-4">
                We took a hard look at how the current Raids work in Glacernon. Our approach has been mainly on time and worth. Some of the changes we have applied are to keep the areas fresh and to provide a better output for players.
            </p>
             <br/>
            <br/>
            <?php
            $items = [
                [
                    "title" => 'Zenas Raid Box',
                    "img"=>'/assets/img/items/50281.png',
                    "items" => [
                        "Little Angel (Damage to Demons is increased by 10%.)",
                        "Archangel Wings",
                        "Guardian Lucifer's Specialist Partner Card",
                        "Sealed Heavenly Gloves",
                        "Sealed Heavenly Shoes",
                        "Zenas Necklace",
                        "Zenas Ring",
                        "Zenas Bracelet",
                        "Sealed Heavenly Sword",
                        "Sealed Heavenly Staff",
                        "Sealed Heavenly Bow",
                        "Sealed Heavenly Crossbow",
                        "Sealed Heavenly Spell Gun",
                        "Sealed Heavenly Dagger",
                        "Sealed Heavy Heavenly Armour",
                        "Sealed Heavenly Robe",
                        "Sealed Heavenly Leather Armour",
                        "Floatstone",
                        "Experience Potion x30",
                        "Essence of Balance x10~15",
                        "Element of Balance x20~40",
                        "Divine Recovery Potion x10",
                        "Experience Potion x30",
                        "Cellon (Level 9) x2",	
                    ],
                ],
                [
                    "title" => 'Erenia Raid Box',
                    "img"=>'/assets/img/items/50282.png',
                    "items" => [
                        "Little Devil (Damage to Angels is increased by 10%.)",
                        "Archdaemon Wings",
                        "Archdaemon Amon's Specialist Partner Card",
                        "Sealed Hellord Gloves",
                        "Sealed Hellord Shoes",
                        "Erenia Necklace",
                        "Erenia Ring",
                        "Erenia Bracelet",
                        "Sealed Hellord Sword",
                        "Sealed Hellord Staff",
                        "Sealed Hellord Bow",
                        "Sealed Hellord Crossbow",
                        "Sealed Hellord Spell Gun",
                        "Sealed Hellord Dagger",
                        "Sealed Heavy Hellord Armour",
                        "Sealed Hellord Robe",
                        "Sealed Hellord Leather Armour",
                        "Floatstone",
                        "Experience Potion x30",
                        "Essence of Balance x10~15",
                        "Element of Balance x20~40",
                        "Divine Recovery Potion x10",
                        "Experience Potion x30",
                        "Cellon (Level 9) x2",	
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
        </div>

    </div>
	
	<title>Kaisen - News - Act 6.1 </title>
    <div class="w-100  ">
        <?php include "includes/footer.php"; ?>
    </div>
</div>
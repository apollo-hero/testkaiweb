<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="text-sm breadcrumbs w-100 mb-8">
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='/news/'>News&Info</a></li>
                </ul>
            </div>
            <div class="flex justify-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Summer Event!
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Sep 10, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/9.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <img  src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Reworked Lola Lopears' Raid", 
				          "Added title for game supports in-game",
				          "Increased Attention time from Mob",
				          "Increased the rates by a lot for sp 7-8 crafts mats",
				          "Increased a bit the hero experience for 0-20 (It will be more increased in the next weekend with act 6.2)",
				          "Decreased Lola Lopears hp by 30%",
				          "Mobs drop Lola Lopears' Raid Seal with a probability of 0,5%",
				          "Fixed a issue that won't let you start daily quests again",
				          "Fixed the prices for accessories",
						  "Fixed jajamaru minion issue",];
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
                $items = ["You can get the following Items From Lola Lopears' Raid"];
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
                $items = ["Lucy Lopears Specialist Partner Card", 
				          "Wanderer's Chest", 
						  "Imp Raid Box", 
						  "Foxy's Wonder Chest", 
						  "Golden Arena Chest", 
						  "Caligor's Glowing Treasure Chest", 
						  "Laurena's Ancient Witch's Quest", 
						  "Lopears Title [Hit rate is increased by 5% |Concentration is increased by 3%]", 
						  "Fluffy Rabit Ears/Costume (m)/(f) (1 Day)", 
						  "Fluffy Rabit Ears/Costume (m)/(f) (7 Day)", 
						  "Fluffy Rabit Ears/Costume (m)/(f) (permanent)", 
						  "Angel's Feather x20",
						  "Full Moon Crystal x10",
						  "Green Gem x10",
						  "Summer Coin x3",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>

                    </div>
                <?php
                }
                ?>
				<br />
				<br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Reworked the following  Boxes:"];
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
                    "title" => 'Wanderer Chest',
                    "img"=>'/assets/img/items/2678.png',
                    "items" => [
                        "Mysterious Hair Dye x3",
                        "Ancelloan's Blessing x3",
                        "Cylloan Spring Water x30",
                        "Tarot Card Game x3",
                        "Sealed Vessel x10",
                        "Large Special Potion x3",
                        "Wings of Friendship x50",
                        "Speaker x50",
                    ],
                ],
				[
                    "title" => 'Imp Raid Box',
                    "img"=>'/assets/img/items/2693.png',
                    "items" => [
                        "Hongbi's Specialist Partner Card",
                        "Cheongbi's Specialist Partner Card",
                        "Mysterious Hair Dye x3",
                        "Ancelloan's Blessing x3",
                        "Ayam (7 Days)",
                        "Rose Hanbok (7 Days)",
                        "Blue Founder Hat (7 Days)",
                        "Summer Hanbok (7 Days)",
                        "Imp Cudgel Skin (30 Days)",
                        "Wildflower Bow Skin (30 Days)",
                        "Uchiwa Skin (30 Days)",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10",
                        "Small Ruby of Completion",
                        "Small Sapphire of Completion x5",
                        "Small Obsidian of Completion x5",
                        "Small Topaz of Completion x5",
                        "Ruby of Completion x5",
                        "Sapphire of Completion x5",
                        "Obsidian of Completion x5",
                        "Topaz of Completion x5",
                        "Evil Twin Title [Magic Defence is increased by 5%]",
                    ],
                ],
				[
                    "title" => 'Foxy Wonder Chest',
                    "img"=>'/assets/img/items/2663.png',
                    "items" => [
                        "Foxy's Specialist Partner Card",
                        "Fiona's Specialist Partner Card",
                        "Obsidian of Completion x10",
                        "Spooky Tarot Card [Ghost]",
                        "Spooky Tarot Card [Dracula]",
                        "Spooky Tarot Card [Scarecrow]",
                        "Glowing Pumpkin Hat (1day/7days/30days/permanent)",
                        "Halloween Signpost x5",
                        "Cylloan Spring Water x30",
                        "Huge Recovery Potion x50",
                        "Sly Dog Title [Maximum HP is increased by 1000. | Maximum MP is increased by 1000.]",
                    ],
                ],
				[
                    "title" => 'Golden Arena Chest',
                    "img"=>'/assets/img/items/1402.png',
                    "items" => [
                        "Wave Rune",
                        "Cloud Rune",
                        "Wind Rune",
                        "Fire Rune",
                        "Lightning Rune",
                        "Shining Blue Soul x3",
                        "Ruby of Completion x5",
                        "Sapphire of Completion x5",
                        "Small Ruby of Completion x5",
                        "Small Sapphire of Completion x5",
                        "Small Obsidian of Completion x5",
                        "Small Topaz of Completion x5",
                    ],
                ],
				[
                    "title" => 'Caligor Glowing Treasure Chest',
                    "img"=>'/assets/img/items/4773.png',
                    "items" => [
                        "Death Reaper Specialist Card",
                        "Demon Hunter Specialist Card",
                        "Seer Specialist Card",
                        "Shares' Steel Helm",
                        "Glacernon Leather Hat",
                        "Mukraju's Circlet",
                        "Caligor's Golden Horn",
                        "Dragon Heart x3",
                        "Angel's Feather x99",
                        "Full Moon Crystal x 75",
                        "Shining Blue Soul x10",
                        "Ruby of Completion x10",
                        "Sapphire of Completion x10",
                        "Obsidian of Completion x10",
                        "Topaz of Completion x10",
                        "Small Ruby of Completion x10",
                        "Small Sapphire of Completion x10",
                        "Small Obsidian of Completion x10",
                        "Small Topaz of Completion x10",
                    ],
                ],
				[
                    "title" => 'Laurena Ancient Witch Chest',
                    "img"=>'/assets/img/items/4758.png',
                    "items" => [
                        "Title Little Witch [Reduces cooldown of skills by 5%]",
                        "Laurena's Witch Hat",
                        "Archmage Specialist Card",
                        "Avenging Angel  Specialist Card",
                        "Renegade  Specialist Card",
                        "Laurena's Specialist Partner Card",
                        "Laurena's Specialist Partner Card",
                        "Archangel Lucifer's Specialist Partner Card",
                        "Laurena's Witch Hat",
                        "Laurena's Necklace",
                        "Laurena's Ring",
                        "Laurena's Bracelet",
                        "Twilight Essence",
                        "Small Ruby of Completion x5",
                        "Small Sapphire of Completion x5",
                        "Small Obsidian of Completion x5",
                        "Small Topaz of Completion x5",
                        "Ruby of Completion x5",
                        "Sapphire of Completion x5",
                        "Obsidian of Completion x5",
                        "Topaz of Completion x5",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10",
                        "Shining Blue Soul x5",
                        "Yellow Grem x20",
                        "Green Grem x10",
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
        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">       
				<br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Reworked the following  Skins:"];
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
                    "title" => 'Baseball Bat Skin',
                    "img"=>'/assets/img/items/2887.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 5%.",
						"There is a 5% chance that you will receive an extra Raidbox after completing a Raid."
					]
                ],
				[
                    "title" => 'Recurve Bow Skin',
                    "img"=>'/assets/img/items/2888.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 5%.",
						"There is a 5% chance that you will receive an extra Raidbox after completing a Raid."
					]
                ],
				[
                    "title" => 'Tennis Racquet Skin',
                    "img"=>'/assets/img/items/2889.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 5%.",
						"There is a 5% chance that you will receive an extra Raidbox after completing a Raid."
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
        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl"> 
</div>		
</div>
				<br />
				<br />
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/15.png' class="w-100 h-full" />
            </div>
			<br />
			<br />
				<h1 class="text text-2xl font-bold mb-4">Summer Event</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Look out, Lucy's evil sister is here! Confront her in this raid, but be careful with  the bunnies that lola  is spawning, make sure to take  your  nosmate/partner to the war & build  the best team possible in order to take Lola Super Rewards!</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Event will last until September 25th ", 
						  "Take the Daily Quest from Raphael!",];
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
                <img src='https://nkaisen.com/assets/img/media2/16.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Craft all the unique rewards from the event!", ];
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
                <img src='https://nkaisen.com/assets/img/media2/17.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Reworked the following Titles:",];
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
                    "title" => 'Title Wordsmith',
                    "img"=>'/assets/img/items/4144.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 7%.",
						"All defences are increased by 7%."
					]
                ],
				[
                    "title" => 'Title Survivor',
                    "img"=>'/assets/img/items/4144.png',
                    "items" => [
                    ],
					"orange" => [
						"Increases champion experience received by 10%.",
						"Experience gain is increased by 10%.",
						"Movement speed is increased by 1.",
					]
                ],
				[
                    "title" => 'Title in Boots',
                    "img"=>'/assets/img/items/4144.png',
                    "items" => [
                    ],
					"orange" => [
						"When attacking, there is a 5% chance of summoning a shadow clone to carry out an additional attack.",
						"All attacks are increased by 5%.",
					]
                ],
				[
                    "title" => 'Title Warm Heart',
                    "img"=>'/assets/img/items/4144.png',
                    "items" => [
                    ],
					"orange" => [
						"Increases Gold Earned by 10%.",
						"When a hunted monster drops an item, there's a 5% chance that it drops the item a second time.",
						"Movement speed is increased by 1.",
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
                <?php
                $items = ["Reworked the following Title for promoter:",];
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
                    "title" => 'Title Promoter',
                    "img"=>'/assets/img/items/4144.png',
                    "items" => [
                    ],
					"orange" => [
						"Increases Gold earned by 10%.",
						"There is a 5% chance that you will receive an extra Raidbox after completing a Raid",
						"Movement speed is increased by 1.",
					]
                ],
            ];
            for ($i = 0; $i < count($items); $i++) {
            ?>
                <div tabindex="0" class="collapse border border-base-300 bg-base-100 rounded-box hover-animate-title mb-4">
                    <div class="collapse-title text-xl sm:text-2xl p-4 flex gap-2 items-center sm:p-8">
                        <!-- <span class="iconify" data-icon="ion:dice-outline">
                        </span> -->
                        <img src = '<?php echo $items[$i]['img']; ?>'>
                        </img>
                        <?php echo $items[$i]['title']; ?>
                    </div>
                    <div class="collapse-content ">
                        <div class="flex flex-column gap-4 p-2 sm:p-4 ">
                            <?php
                            for ($j = 0; $j < count($items[$i]["items"]); $j++) {
                            ?>
                                <?php echo $items[$i]["items"][$j]; ?>
                                <br />

                            <?php } ?>
							<?php if(array_key_exists("orange",$items[$i]))
							{
								?><div class="small text-warning"> <?php
								for ($j = 0; $j < count($items[$i]["orange"]); $j++) {
                            ?>
                                <div class="text-wo-icon"><?php echo $items[$i]["orange"][$j]; ?></div>

                            <?php }?> </div><?php } ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
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
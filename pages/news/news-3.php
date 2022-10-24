<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Launch Notes
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Aug 19, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/3.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-content-center p-2  max-w-3xl">
            
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Here we provide almost every change that we made so far in the game. Our point is to create a nice balance for every player that loves Nostale!</p>
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Increased mob hostility count from 5 to 10.", "NPC Items Changed Default r0+0 —> r5+7", "Timespace Items Reward changed Default +0 —> +7", "Added Buff Helper Item (Applied for pet/partners too)", "Cylloan Lvl Requirement 88 —> 90", "Removed Level Requirement for (Individual/Groupal/Raid Time-Space Piece)", "Improved rewards for (Individual/Groupal/Raid Time-Space)", "Disabled access to Act 3.2.", "Disabled Legendary Hunter Quests.", "Set the minimum player to do instant combat to 1 and Max to 50.", "Decreased the monsters from instant battle by 30%.", "Increased reward rates for Time-Space x10.", "Decreased Loyalty Penalty 50 —> 25.", "Adjusted SP7 and SP8 crafting recipes at Sarakael and Lilith.", "Added Custom NPCS to NosVille and Citadel.", "Improved Quest Gold Rate x10", "Quest Fragrant Grass decreased ammount 30 —> 15.", "Quest Wheat Grass decreased ammount 20 —> 10.", "Capture skill chances to capture from 50% —> 100%.", "Decreased family leave penalty  24 hours —> 10 minutes.", "Decreased HP by 25% For ACT_3 | Instant Battle", "Decreased HP by 30% For LOD | ACT 5.1", "Decreased HP by 35% ACT 5.2 | ACT 6.1", "All boss room HP got nerfed by 30%", "The following game features have been given an IP Check to help prevent against any abuse:"];
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
                $items = ["Timespace Rewards (Reward divided by IP character used)", "Kill/Deaths in Glacernon", "Raid Entrance (2 Characters Max)", "Commend"];
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
                $items = ["The following items sale value have been modified:"];
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
                $items = ["Normal Metal = 15k", "Normal Wood = 15k", "Normal Rag = 15k", "Normal Leather = 15k", "Element of Balance = 20k", "Earth Element = 20k", "Relic of the First Tribes = 25k", "Shining Green Soul = 25k", "High Quality Metal = 30k", "High Quality Wood = 30k", "High Quality Rag = 30k", "High Quality Leather = 30k", "Shining Red Soul = 50k", "Hot Wood = 50k", "Mark of the Zealot = 50k", "Bacoom Horn = 50k", "Intact Relic of the First Tribes = 60k", "Spring Water = 100k", "Dragon Skin = 100k", "Essence of Balance = 100k", "Holy Blood = 100k", "Shining Blue Soul = 100k", "Antique Mask = 150k", "Lava Ghost Helmet = 150k",  "Dragon Blood = 200k", "Draco's Claw = 250k", "Glacerus' Mane = 250k", "Sea View Gloves/Boots = 250k", "Black Stone Gloves/Boots = 250k", "Dragon Heart = 350k", "Earth Crystal = 500k", "Crystal of Balance = 500k", "Robber Gang's Silver Gloves/Boots = 1kk", "Master Robber's Gloves/Boots = 1kk", "Magmaros' Gloves = 1.25kk", "Flame Giant Boots = 2.5kk", "Valakus' Gloves = 2.5kk", "Kertos' Boots = 5kk", "20/28 Hero Resistance = 5kk", "25/28 Hero Equipment = 10kk"];
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
                $items = ["The following items can now be traded on NosBasaar"];
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
                $items = ["Small Ruby of Completion", "Small Obsidian of Completion", "Small Saphire of Completion", "Small Topaz of Completion", "Ruby of Completion", "Obsidian of Completion", "Saphire of Completion", "Topaz of Completion","Glacerus'  Mane", "Draco's Claw"];
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
                $items = ["The following Jewelry have been reworked:"];
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
                    "title" => 'Laurenas Neklace',
                    "img"=>'/assets/img/items/2829.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 25.",
						"All defence powers are increased by 20.",
						"All element energies are increased by 30."
					]
                ],
				[
                    "title" => 'Laurenas Ring',
                    "img"=>'/assets/img/items/2828.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 25.",
						"All defence powers are increased by 20.",
						"All element energies are increased by 30."
					]
                ],
				[
                    "title" => 'Laurenas Bracelet',
                    "img"=>'/assets/img/items/2827.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 25.",
						"All defence powers are increased by 20.",
						"All element energies are increased by 30."
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
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added Client Modification In Game:"];
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
                $items = ["Trophy System", "RaidBox Manager", "Clock (Minutes, Seconds)", "Unlock FPS", "HP/MP Pet/Partners", "Fairy Experience Bar", "Unlock FPS", "Cooldown Skills",  "Warp System", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
			<br/>
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/4.png' class="w-100 h-full" />
            </div>
			<br/>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added the next Trophy Items for Raids:"];
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
                    "title" => 'Mother Cuby Trophy',
                    "img"=>'/assets/img/items/1112.png',
                    "items" => [
                    ],
					"orange" => [
						"Chance of inflicting critical hits is increased by 2%.",
						"Increases damage from critical hits by 7%.",
					]
                ],
				[
                    "title" => 'Chicken Trophy',
                    "img"=>'/assets/img/items/1988.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 5%.",
					]
                ],
				[
                    "title" => 'Ginseng Trophy',
                    "img"=>'/assets/img/items/2108.png',
                    "items" => [
                    ],
					"orange" => [
						"Maximum HP is increased by 1500.",
						"Maximum MP is increased by 1500.",
					]
                ],
				[
                    "title" => 'Namaju Trophy',
                    "img"=>'/assets/img/items/2096.png',
                    "items" => [
                    ],
					"orange" => [
						"Reduces cooldown of skills by 3%.",
					]
                ],
				[
                    "title" => 'Giant Black Spider Trophy',
                    "img"=>'/assets/img/items/2080.png',
                    "items" => [
                    ],
					"orange" => [
						"Probability to receive critical hits is decreased by 2%.",
						"Increases damage from critical hits by 7%.",
					]
                ],
				[
                    "title" => 'Dark Castra Trophy',
                    "img"=>'/assets/img/items/1262.png',
                    "items" => [
                    ],
					"orange" => [
						"There's a 10% chance of leeching 500 MP from your enemy.",
					]
                ],
				[
                    "title" => 'Slade Trophy',
                    "img"=>'/assets/img/items/2092.png',
                    "items" => [
                    ],
					"orange" => [
						"Below level 4 there is a 10% chance of never getting a bad general effect.",
					]
                ],
				[
                    "title" => 'Draco Trophy',
                    "img"=>'/assets/img/items/1295.png',
                    "items" => [
                    ],
					"orange" => [
						"Increases damage with a probability of 5% by 10%.",
					]
                ],
				[
                    "title" => 'Glacerus Trophy',
                    "img"=>'/assets/img/items/1263.png',
                    "items" => [
                    ],
					"orange" => [
						"Provides a 10% chance of increasing damage by 10% if the monster has the same or a higher level than the character.",
					]
                ],
				[
                    "title" => 'Kertos Trophy',
                    "img"=>'/assets/img/items/1232.png',
                    "items" => [
                    ],
					"orange" => [
						"All defences are increased by 7%.",
					]
                ],
				[
                    "title" => 'Robber Trophy',
                    "img"=>'/assets/img/items/1206.png',
                    "items" => [
                    ],
					"orange" => [
						"Reduces the enemy's elemental resistances by 10.",
					]
                ],
				[
                    "title" => 'Valakus Trophy',
                    "img"=>'/assets/img/items/1159.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks a re increased by 7%.",
					]
                ],
				[
                    "title" => 'Grenigas Trophy',
                    "img"=>'/assets/img/items/1302.png',
                    "items" => [
                    ],
					"orange" => [
						"All attacks are increased by 5%.",
						"All defences are increased by 5%.",
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
			<br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added  new Bug Report boxes:"];
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
                    "title" => 'Bug Report Box',
                    "img"=>'/assets/img/items/4108.png',
                    "items" => [
                        "Divine Recovery Potion x99",
                        "Tarot Card Game x3",
                        "Mother Nature's Tree Rune (Rare)",
                        "Adventurer's Knapsack (30 Days)",
                        "Ancelloan's Blessing x5",
                        "Attack Potion x20",
                        "Defence Potion x20",
                        "Energy Potion x20",
                    ],
					"orange" => [
						"These boxes are rewards for reporting any bug in the game. Depending on the bug reported.If you have break any exploit but you report it in time may also lead to further rewards.",
					]
                ],
				[
                    "title" => 'Critical Bug Report Box',
                    "img"=>'/assets/img/items/4108.png',
                    "items" => [
                        "Otter",
                        "Divine Recovery Potion x99",
                        "Tarot Card Game x3",
                        "Mother Nature's Tree Rune (Rare)",
                        "Adventurer's Knapsack (30 Days)",
                        "Ancelloan's Blessing x5",
                        "Attack Potion x20",
                        "Defence Potion x20",
                        "Energy Potion x20",
                    ],
					"orange" => [
						"These boxes are rewards for reporting any bug in the game. Depending on the bug reported.If you have break any exploit but you report it in time may also lead to further rewards.",
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
                $items = ["Added  new Beta Rewards:"];
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
                    "title" => 'Beta Reward (A)',
                    "img"=>'/assets/img/items/1621.png',
                    "items" => [
                        "Alfa [Title] (All attacks and defences are increased by 3%.)",
                        "Ancelloan's Blessing x5",
                        "Divine Recovery Potion x99",
                        "Attack Potion x10",
                        "Defence Potion x10",
                        "Energy Potion x10",
                        "Experience Potion x6",
                    ],
					"orange" => [
						"Play 3 hours During Beta.",
					]
                ],
				[
                    "title" => 'Beta Reward (B)',
                    "img"=>'/assets/img/items/1621.png',
                    "items" => [
                        "Medal of Erenia",
                        "Beta Costume (Atacks increased 3% ~ Movement speed increased 2)",
                        "Fairy Booster x3",
                        "Attack Potion x10",
                        "Defence Potion x10",
                        "Energy Potion x10",
                        "Experience Potion x6",
                    ],
					"orange" => [
						"Reach Lvl 99 during Beta.",
					]
                ],
				[
                    "title" => 'Beta Reward (C)',
                    "img"=>'/assets/img/items/1621.png',
                    "items" => [
                        "Skelekat Groom Bead",
                        "Ancelloan's Blessing x3",
                        "Experience Potion x6",
                        "NosMerchant Medal (1 Day)",
                        "Mother Nature's Tree Rune (Rare)",
                    ],
					"orange" => [
						"Win 30 raids during Beta (Any kind of raid)",
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
        <div class="flex flex-column w-100 justify-content-center p-2  max-w-3xl">
            
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                We have added invitation rewards for all those who wanna support this server to grow up into a big comunity. (is only available during beta!)</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["25 Invitation to unlock the rewards." ];
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
                    "title" => 'Invitation Rewards',
                    "img"=>'/assets/img/items/1621.png',
                    "items" => [
                        "Promoter [Title] (Increases Gold earned by 10%.) ",
                        "Super Fortune Bushtail ",
                        "Ancelloan's Blessing x5",
                        "Divine Recovery Potion x50",
                        "Attack Potion x10",
                        "Defence Potion x10",
                        "Energy Potion x10",
                        "Experience Potion x6",
                    ],
					"orange" => [
						"If you reached the invitation rewards Join Support Server and create a ticket asking for invitation rewards.",
					]
                ]

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
        <div class="flex flex-column w-100 justify-content-center p-2  max-w-3xl">
            
            <h1 class="text text-2xl font-bold mb-4">Mystery Box</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                In order to give a fair system for every user and remove the p2w we have created the mystery box where you can get random rewards or the main prize that will be normally the rotation boxes from shop</p>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                If you feel lucky give it a try he might give you valuable prizes, but take care because he might leave you empty-handed.</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Offer Gold 1.000.000 gives you 1 reward", "Common Prizes are the following:", ];
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
                $items = ["Angel's Feathers x10", "Full Moon Crystal x5", "Speaker x5", "Wings of Friendship x5", "Gourmet Pet Food x1", "Ice Flower Oil x3", "Draco's Claw x5", "Glacerus' Mane x5",  "Random Tarot Card x1",  "Experience Potion x1",  "Ancelloan's Blessing x1",  "Special Pet Food x1",  "Magic Speed Booster (1 Day) x1",  "Partner Skill Ticket (Single) x1",  "Tarot Card Game x1", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-yellow-400 text-sm">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
        <div class="flex flex-column w-100 justify-content-center p-2  max-w-3xl">
            
            <h1 class="text text-2xl font-bold mb-4">Instant Battle Changes</h1>
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
			</div>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["In order to receive reward kill 50% of the monsters that appear every round.", "Instant Battle Rewards are the following:", ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
			</div>
</div>
<?php
            $items = [
                [
                    "title" => 'Level 1 ~ 39',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "30,000 gold",
                        "Gillion Stone x3",
                        "Medium Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "50,000 gold",
                        "Gillion Stone x5",
                        "Medium Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "75,000 gold",
                        "Gillion Stone x7",
                        "Medium Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "100,000 gold",
                        "Gillion Stone x10",
                        "Medium Recovery Potion x30",
                        "Experience Potion x1",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 250k ",
                    ],
                ],
				[
                    "title" => 'Level 40 ~ 49',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "50,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "75,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "100,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "150,000 gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 500k ",
                    ],
                ],
				[
                    "title" => 'Level 50 ~ 59',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "75,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "100,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "150,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "200,000 gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 600k ",
                    ],
                ],
				[
                    "title" => 'Level 60 ~ 69',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "100,000 gold",
                        "Gillion Stone x5",
                        "Huge Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "150,000 gold",
                        "Gillion Stone x7",
                        "Huge Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "200,000 gold",
                        "Gillion Stone x10",
                        "Huge Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "300,000 gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 700k",
                    ],
                ],
				[
                    "title" => 'Level 70 ~ 79',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "150,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "200,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "300,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "500,000 gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 800k ",
                    ],
                ],
				[
                    "title" => 'Level 80 ~ 99',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "200,000 gold",
                        "Angel's Feather x5",
                        "Full Moon Crystal x3",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "300,000 gold",
                        "Angel's Feather x7",
                        "Full Moon Crystal x5",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "500,000 gold",
                        "Angel's Feather x10",
                        "Full Moon Crystal x7",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "750,000 gold",
                        "Angel's Feather x15",
                        "Full Moon Crystal x10",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 1kk ",
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
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/2.png' class="w-100 h-full" />
            </div>
			<br/>
            <h1 class="text text-2xl font-bold mb-4">Land of Death Changes</h1>
			<p class=" relative text-stone-500 mb-4 sm:mb-8">
             We have removed the schedule from lod and that means lod will be always open on every channel with the aim to deliver the event on any timezone.<br/><br/>All related changes are below:</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Increased the drop rate from monsters", "Removed schedule (lod always open)", "Players level 65 or higher are allowed to access."];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center text-stone-500">
                        
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
			<br/>
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/5.png' class="w-100 h-full" />
            </div>
			<br/>
			<p class=" relative text-stone-500 mb-4 sm:mb-8">
             Talk to NosVille Captain here you can get Dailies / Weekly Quest / Captain Trials / Requests 15-93 to get stronger equipment and nice rewards!</p>
			<br/>
            <div class="flex w-100">
                <img src='https://nkaisen.com/assets/img/media2/3.png' class="w-100 h-full" />
            </div>
			<br/>
            <h1 class="text text-2xl font-bold mb-4">Raid & Raidbox Changes</h1>
			<p class=" relative text-stone-500 mb-4 sm:mb-8">
             Raid have received a lot of cool changes we took a look at the actual rewards and we removed anything that we see usseles. We have improved rates and rewards to make your efforts count!<br/><br/>All related changes are below:</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["When the leader of a raid enters the boss room, everyone will be spawned to the boss room.", "Increased Raid Seals drop from monsters x3)", "Removed the max level requirement to receiive a Raid Box)", "Raid cannot be entered if there are any player with more than 2 accounts inside the raid.", "Reworked the rates and rewards from the following Raid Boxes:"];
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
                    "title" => 'Raid Box [Mother Cuby]',
                    "img"=>'/assets/img/items/50260.png',
                    "items" => [
                        "Mother Cuby Trophy",
                        "Sweet Tooth Title [Experience gain is increased by 10%.]",
                        "Shining Storm Gloves",
                        "Sgining Wave Shoes",
                        "Ancelloan's Blessing",
                        "Fairy Booster",
                        "Guardian Angel's Blessing",
                        "Soulstone Blessing",
                        "Angel's Feather x10",
                        "Full Moon Crystal x5",
                        "Huge Recovery Potion x10",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Ginseng]',
                    "img"=>'/assets/img/items/50261.png',
                    "items" => [
                        "Ginseng Trophy",
                        "Gardener Title [Damage from critical hits is reduced by 5%.]",
                        "Shining Divine Gloves",
                        "Sgining Sparkle Shoes",
                        "Ancelloan's Blessing x2",
                        "Fairy Booster x2",
                        "Guardian Angel's Blessing x2",
                        "Soulstone Blessing x2",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10",
                        "Huge Recovery Potion x15",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Chicken King]',
                    "img"=>'/assets/img/items/50266.png',
                    "items" => [
                        "Chicken Trophy",
                        "Nugget Title [Damage from critical hits is reduced by 5%.]",
                        "Chicken Specialist Card",
                        "Marco Pollo",
                        "Little Chick",
                        "Dancing Chicky",
                        "Grumbly Chicky",
                        "Divine Health Potion x25",
                        "Divine Mana Potion x25",
                        "Angel's Feather x50",
                        "Full Moon Crystal x25",
                        "Huge Recovery Potion x100",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Namaju]',
                    "img"=>'/assets/img/items/50267.png',
                    "items" => [
                        "Namaju Trophy",
                        "Sakura's Hero Title [On attack, there is a 10% chance of inflicting Sobbing & Crying on your opponent.]",
                        "Sakura",
                        "Sealed Princess Sakura Bead",
                        "X Mask",
                        "Ancelloan's Blessing x2",
                        "Fairy Booster x2",
                        "Soulstone Blessing x2",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10~30",
                        "Huge Recovery Potion x50",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Dark Castra]',
                    "img"=>'/assets/img/items/50263.png',
                    "items" => [
                        "Dark Castra Trophy",
                        "Ritualist's Title [Mana for using skills is decreased by 20%. (Includes magiic.)]",
                        "Shining Death Gloves",
                        "Shining Shadow Shoes",
                        "Ancelloan's Blessing x2",
                        "Guardian Angel's Blessing x2",
                        "Fairy Booster x2",
                        "Soulstone Blessing x2",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10",
                        "Huge Recovery Potion x15",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Giant Black Spider]',
                    "img"=>'/assets/img/items/50264.png',
                    "items" => [
                        "Giant Black Spider Trophy",
                        "Arachnophobe Title [Probability to receive critical hits is decreased by 5%.]",
                        "Shining Flame Gloves",
                        "Shining Fire Shoes",
                        "Ancelloan's Blessing x3",
                        "Guardian Angel's Blessing x3",
                        "Fairy Booster x3",
                        "Soulstone Blessing x3",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10",
                        "Huge Recovery Potion x20",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Massive Slade]',
                    "img"=>'/assets/img/items/50265.png',
                    "items" => [
                        "Massive Slade Trophy",
                        "Rock Solid Title [Probability to receive critical hits is decreased by 5%.]",
                        "Ancelloan's Blessing x3",
                        "Guardian Angel's Blessing x3",
                        "Fairy Booster x3",
                        "Soulstone Blessing x3",
                        "Angel's Feather x20",
                        "Full Moon Crystal x10",
                        "Shining Green Soul x10",
                        "Shining Red Soul x6",
                        "Shining Blue Soul x3",
                        "Huge Recovery Potion x20",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Draco]',
                    "img"=>'/assets/img/items/50279.png',
                    "items" => [
                        "Draco Trophy",
                        "Dragonslayer Title [40% resistance to the effect: Dragon Dread and lower.]",
                        "Gladiator Specialist Card",
                        "Fire Cannoneer Specialist Card",
                        "Volcano Specialist Card",
                        "Shiny Sky Blue Gemstone x5",
                        "Draco's Claw 1~5",
                        "Dragon Heart x3",
                        "Dragon Blood x5",
                        "Dragon Skin x10",
                        "Angel's Feather x30",
                        "Full Moon Crystal x15",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Glacerus]',
                    "img"=>'/assets/img/items/50280.png',
                    "items" => [
                        "Glacerus Trophy",
                        "Ice Cold Title [40% resistance to the effect: Eternal Ice and lower.]",
                        "Battle Monk Specialist Card",
                        "Scout Specialist Card",
                        "Tide Lord Specialist Card",
                        "Shiny Sky Blue Gemstone x5",
                        "Glaceru's Mane 1~5",
                        "Dragon Heart x3",
                        "Dragon Blood x5",
                        "Dragon Skin x10",
                        "Angel's Feather x30",
                        "Full Moon Crystal x15",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Robber Gang]',
                    "img"=>'/assets/img/items/50432.png',
                    "items" => [
                        "Robber Trophy",
                        "Master Thief Title [Morale stat is increased by 5.]",
                        "Robber Gang's Silver Gloves",
                        "Robber Gang's Silver Shoes",
                        "Master Robber's Gloves",
                        "Master Robber's Shoes",
                        "Ancelloan's Blessing x3",
                        "Mysterious Reclit",
                        "Huge Recovery Potion x20",
                        "Angel's Feather x50",
                        "Full Moon Crystal x15",
                        "Experience Potion x3",
                    ],
				[
				],
                    "title" => 'Raid Box [Valakus]',
                    "img"=>'/assets/img/items/50277.png',
                    "items" => [
                        "Valakus Trophy",
                        "Pyromaniac Title [There is a 5% chance that damage from all attacks is reduced by 5%.]",
                        "Flame Giant Bracelet",
                        "Katol's Bracelet",
                        "Katol's Steel Chest Armour",
                        "Kertos' Leather Chest Armour",
                        "Gleaming Grail's Robe",
                        "Cellon (Level 8) x3",
                        "Earth Crystal x8",
                        "Divine Recovery Potion x15",
                        "Shining Blue Sould x3",
                        "Shining Red Sould x6",
                        "Shining Green Sould x10",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Kertos]',
                    "img"=>'/assets/img/items/50276.png',
                    "items" => [
                        "Kertos Trophy",
                        "Fire Hound Title [Increases damage with a probability of 5% by 5%.]",
                        "Blaze Hound's Collar",
                        "Kertos' Collar",
                        "Grail's Claw",
                        "Kertos' Fang",
                        "Valakus' Breath",
                        "Cellon (Level 8) x3",
                        "Earth Crystal x5",
                        "Divine Recovery Potion x15",
                        "Shining Blue Sould x3",
                        "Shining Red Sould x6",
                        "Shining Green Sould x10",
                        "Experience Potion x3",
                    ],
                ],
				[
                    "title" => 'Raid Box [Grenigas]',
                    "img"=>'/assets/img/items/50278.png',
                    "items" => [
                        "Grenigas Trophy",
                        "Phoenix Title [HP recovery is increased by 200.]",
                        "Phoenix Ring",
                        "Grail's Ring",
                        "Flame Giant Helmet",
                        "Antique Firie Mask",
                        "Valakus' Fire Sword",
                        "Grail's Wings",
                        "Katol's Wand",
                        "Cellon (Level 8) x3",
                        "Earth Crystal x10",
                        "Divine Recovery Potion x30",
                        "Shining Blue Sould x5",
                        "Shining Red Sould x10",
                        "Shining Green Sould x20",
                        "Experience Potion x3",
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
            <?php
            ?>
        </div>

    </div>
	<title>Kaisen - News - Launch Notes </title>
    <div class="w-100  ">
        <?php include "includes/footer.php"; ?>
    </div>
</div>
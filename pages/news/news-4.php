<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Patch 1.0.2
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Aug 22, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/4.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Here we present few things fixed or changed during the first 2 days of beta based on the feedback we received so far.</p>
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
                As well known already the Beta Started on 19/08 and it will end on 26/08 at 8 AM CEST Time the official release will start on the same day 26/08 at 17:00 CEST Time</p>
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["ACT 4 Dungeon duration 60 —> 45", "Removed SP 2 Quest Collect 100 Lilies! Hunt monsters of the same level! ", "Decreased SP 3-4 Materials by 50% & Increased the rate", "ACT 4 Boss Room Start 15 —> 30", "Increased the ammount of monsters from instant battle", "Added act4 buff Inside raid too", "Increased Drop Rate Materials used for SP 7 & 8", "Lowered ACT 4 Raid Monster HP & Boss Room by 30%", "Added Loyalty Coins Reward to Instant Battle 2x Per Day", "Added Rainbow Battle to be dropped on all maps from ACT 4", "Oil Quest ammount Changed 10 —> 20", "Added Draco Amulet & Glacerus to Malcom npc for 1kk", "Decreased all act 5.2 level required  90 —> 85 ", "Instant Battle Rewards Increased to the following:", "Fixed act 5.2 debuff not applied for pet/partners", "Fixed Renegade not able to switch resistance", "Fixed Instant battle not starting", "Fixed raid rewards not sended to all users", "Fixed the Quest from Priestess Serizad", ];
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
                    "title" => 'Level 1 ~ 39',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "50,000 gold",
                        "Gillion Stone x3",
                        "Medium Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "75,000 gold",
                        "Gillion Stone x5",
                        "Medium Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "100,000 gold",
                        "Gillion Stone x7",
                        "Medium Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "150,000 gold",
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
						"[Completation Reward] ~ Maximum 500k ",
                    ],
                ],
				[
                    "title" => 'Level 50 ~ 59',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "100,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "150,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "200,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "300,000 gold",
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
                        "150,000 gold",
                        "Gillion Stone x5",
                        "Huge Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "200,000 gold",
                        "Gillion Stone x7",
                        "Huge Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "300,000 gold",
                        "Gillion Stone x10",
                        "Huge Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "500,000 gold",
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
                        "200,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "300,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "500,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "750,000 gold",
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
                        "300,000 gold",
                        "Angel's Feather x5",
                        "Full Moon Crystal x3",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"-------------------------------------",
						"[Round 2]",
                        "500,000 gold",
                        "Angel's Feather x7",
                        "Full Moon Crystal x5",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"-------------------------------------",
						"[Round 3]",
                        "750,000 gold",
                        "Angel's Feather x10",
                        "Full Moon Crystal x7",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"-------------------------------------",
						"[Round 4]",
                        "1kk gold",
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
        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
		<br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Reworked the following wings Buffs:", ];
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
                    "title" => 'Archangel Wings',
                    "img"=>'/assets/img/items/31525.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Light element is increased by 100",
						"Reduces the enemy's Light resistance by 10"
					]
                ],
				[
                    "title" => 'Archdaemon Wings Wings',
                    "img"=>'/assets/img/items/31526.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Shadow element is increased by 100",
						"Reduces the Shadow's light resistance by 10"
					]
                ],
				[
                    "title" => 'Blazing Fire Wings',
                    "img"=>'/assets/img/items/31527.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Fire element is increased by 100",
						"Reduces the enemy's Fire resistance by 10"
					]
                ],
				[
                    "title" => 'Frosty Ice Wings',
                    "img"=>'/assets/img/items/31528.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Water element is increased by 100",
						"Reduces the enemy's water resistance by 10"
					]
                ],
				[
                    "title" => 'Titan wings',
                    "img"=>'/assets/img/items/31524.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Increases PvP attack power by 5%.",
						"Reduces damage received in PvP by 5%."
					]
                ],
				[
                    "title" => 'Mega Titan wings',
                    "img"=>'/assets/img/items/31532.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Increases PvP attack power by 7%.",
						"Reduces damage received in PvP by 7%."
					]
                ],
				[
                    "title" => 'Golden Wings',
                    "img"=>'/assets/img/items/31529.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"All elemental resistance is increased by 5.",
						"Damage is decreased by 10%."
					]
                ],
				[
                    "title" => 'Onyx Wings',
                    "img"=>'/assets/img/items/10352.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Increases damage from critical hits by 5%.",
						"When attacking there is a 20% chance of summoning a s hadow clone to carry out an additional attack.",
					]
                ],
				[
                    "title" => 'Fairy Wings',
                    "img"=>'/assets/img/items/31531.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"The equipped fairy's element increases by 10.",
						"Provides a 10% chance to reset the cooldown of the attack skill used.",
					]
                ],
				[
                    "title" => 'Crystal Wings',
                    "img"=>'/assets/img/items/31536.png',
                    "items" => [
                    ],
					"orange" => [
						"Movement speed is increased by 1.",
						"Up to level 4 there is a 15% chance of never getting a bad effect.",
						"Every 4 seconds: Restores (Player Level*3) HP.",
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
            
            <h1 class="text text-2xl font-bold mb-4">NosMall Changes</h1>
                        <p class=" relative text-stone-500 mb-4 sm:mb-8">
                Below you can find the random boxes from the shop (All the boxes from the rotation can be earned by mystery box in-game with a 3% probability to get 10x boxes randomly)</p>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Crystal Wings Random Box", "Movement speed is increased by 1.", "Up to level 4 there is a 15% chance of never getting a bad effect.", "Every 4 seconds: Restores 90 (Player Level*3) HP"];
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
                <img src='https://nkaisen.com/assets/img/media2/6.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Magic Bone Drake", "Movement speed: 21 | Nosville and Port Alveus +1 | Desert and Burning Sword +2", ];
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
                <img src='https://nkaisen.com/assets/img/media2/7.png' class="w-100 h-full" />
            </div>
			 <br />
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Magic Student Yuna's Random Box", "Experience gaint is increased by 2/3/5/6/7/10", "Increases  Champion Experience by 2/3/5/6/7/10", ];
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
<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Glacernon Changes
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Aug 19, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/2.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <img  src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["You will now receive x2 Ice Flower when gathering this item.", "Added Divine Recovery Potion to Amelia Glacia's shop.", "Perfection Stones drop probability starting room / boss 1%", "Perfection Stones drop probability Unknown Land 0,5%", "Removed Farming Time Penalty", "Disabled the use of the following items on the following Glacernon maps:"];
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
            <h1 class="text text-2xl font-bold mb-4">Items</h1>
            <div class="flex flex-column  gap-1 ml-8  mb-4 sm:mb-8">
                <?php
                $items = ["Attack Potion", "Defence Potion", "Energy Potion", "Strong Ice Flower Oil", "Large Heat Resistance Potion", "Heat Resistance Potion", "Ice Flower Oil", "Divine Mana Potion", "Divine Health Potion", "Divine Recovery Potion", "Cylloan Spring Water", "Small Special Potion", "Medium Special Potion", "Large Special Potion", "Fafnir's Fried Dinner",];
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
            <h1 class="text text-2xl font-bold mb-4">Maps</h1>
            <div class="flex flex-column  gap-1 ml-8 mb-4">
                <?php
                $items = ["Western Frost Land", "Eastern Frost Land", "Bitoren Tundra", "Caligor's Realm", "North Ice Desert", "Unknown Land",];
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
            <div class="flex flex-column gap-4 ml-4 mb-4">

                <div class="flex gap-4 ml-8 sm:ml-12 items-center">
                    <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                    <h3 class='text-stone-500'>Added IP Check For kill Character to avoid people abusing reputation.</h3>

                </div>

            <div class="w-100 h-full mb-4">
                <img src='https://nkaisen.com/assets/img/media2/1.png' class="w-100 h-full" />
            </div>
            <div class="flex flex-column gap-4 ml-4 mb-4">

                <div class="flex gap-4 ml-8 sm:ml-12 items-center">
                    <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                    <h3 class='text-stone-500'>When inside the following maps "Frozen King" buff will be applied to all players:</h3>
                </div>

            </div>
            <div class="flex flex-column gap-1 ml-8 mb-8">
                <?php
                $items = ["Citadel", "North Ice Desert", "Western Frost Land", "Bitoren Tundra", "Unknown Land", "Caligor's Realm",];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex text-sm gap-4 ml-8 sm:ml-12 items-center text-yellow-400">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- Raid -->
            <img  src="/assets/divider.svg" class="mb-4" />
            <h1 class="text text-2xl font-bold mb-4 sm:mb-8">Raid Changes</h1>
            <p class="text-stone-500 mb-4">
                We have made a lot of changes at how the current Raids work in Glacernon. Some of the changes we have applied was adding nice rewards inside the boxes so even f2p players have the posibility to get.<br/><br/>
            </p>
            <p class="text-stone-500 mb-4">
                You can read bellow all the changes we have applied to Glacernon:
            </p>
            <div class="flex flex-column gap-1 text-stone-500 mb-4">
                <?php
                $items = ["Raidbox Minimum Rarity changed from 0 —> 5 ", "Reworked the rates and rewards from the following Glacernon Raid Boxes:"];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex gap-4 ml-8 sm:ml-12 items-center">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
            <br/>
            <?php
            $items = [
                [
                    "title" => 'Lord Hatus',
                    "img"=>'/assets/img/items/50317.png',
                    "items" => [
							"Varik",
							"Turik",
							"Shadowheart [Shadow element is increased by 100]",
							"Varik's Essence x2",
							"Small Obsidian of Completion x5~25",
							"Obsidian of Completion x5~25",
							"Angel's Feather x50",
							"Shining Blue Soul x3",
							"Shining Red Soul x6",
							"Shining Green Soul x10",
					]
                ],
				[
				        "title" => 'Lord Morcos',
						"img"=>'/assets/img/items/50318.png',
						"items" => [
							"Elkaim",
							"Sellaim",
							"Firebreather [Fire element is increased by 100]",
							"Sellaim's Essence x2",
							"Small Ruby of Completion x5~25",
							"Ruby of Completion x5~25",
							"Angel's Feather x50",
							"Shining Blue Soul x3",
							"Shining Red Soul x6",
							"Shining Green Soul x10",
					]
                ],
				[
				        "title" => 'Lady Calvinas',
						"img"=>'/assets/img/items/50319.png',
						"items" => [
							"Ladine",
							"Woondine",
							"Watercharmer [Water element is increased by 100]",
							"Ladine's Essence x2",
							"Small Saphire of Completion x5~25",
							"Saphire of Completion x5~25",
							"Angel's Feather x50",
							"Shining Blue Soul x3",
							"Shining Red Soul x6",
							"Shining Green Soul x10",
					]
                ],
				[
				        "title" => 'Baron Berios',
						"img"=>'/assets/img/items/50320.png',
						"items" => [
							"Rumial",
							"Eperial",
							"Lightbringer [Light element is increased by 100]",
							"Rumial's Essence x2",
							"Small Topaz of Completion x5~25",
							"Topaz of Completion x5~25",
							"Angel's Feather x50",
							"Shining Blue Soul x3",
							"Shining Red Soul x6",
							"Shining Green Soul x10",
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
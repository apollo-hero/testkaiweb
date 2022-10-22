<div class="flex flex-column min-h-screen ">

    <div class="w-100 container mx-auto p-4 flex flex-column max-w-6xl mt-24 mb-10 items-center">
        <div class="flex-column gap-8 mb-8">
            <div class="flex justify-content-between w-100 mb-4  py-4" >
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Patch 1.0.3
                </h1>
                <div class="flex">
                    <div class="badge badge-info p-0 sm:px-4 h-8">
                        Aug 25, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='https://nkaisen.com/assets/img/media1/5.png' class="w-100 h-full">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">
            
            <img  src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:mb-8">
                We have changed so many things in our gameplay to make it more enjoyable and a bit faster the progress startig  from removing some quests that are usseles and changing the way you can get items/pets/costumes.</p>
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:mb-8 ">
                <?php
                $items = ["Added Starter Pack (You can now start your adventure with strong pets!)", "Added Hat Shop", "Added Reward Box after finishing each round on instant battle", "Added Level & Up Reward Boxes (Every 10 levels)", "Added SP 1 Inside Lvl 30 Reward Box",  "Changed SP Cooldown 5 —> 3", "Changed Tart Happendam's Martial Arts Experience 30% —> 50%", "Changed XP Rate 18 —> 20", "Changed Gold Rate 5 —> 6", "Removed Collect 100 Lily of Purity (SP 2 - Only TS Needed)", "Removed Capture Quest (Angry hamster/Angry Wooly/Fox)", "Removed Quest Move to the designated location (Enchanted Pathway)", "Removed the next quest-ts from game [5-8-10-12-14-15-16-17-20-21-22-23]", "Removed SP 1 Ts part needed 1/2/3 (Instead of that you will get 1 box at lvl 30 with the sp)", "Removed Captain Trial Quests (You can now get boxes by leveling instead of doing quest for items)", "Removed Captain Requests",  "Reduced SP 3-4 Materials needed by 50%",  "Fixed ts 44 bug", "Increased Instant Battle Rewards to the following:", ];
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
                    "title" => 'Level 1 ~ 39',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "100,000 gold",
                        "Gillion Stone x3",
                        "Medium Recovery Potion x10",
                        "Attack Potion x5",
                        "Reward Box",
						"-------------------------------------",
						"[Round 2]",
                        "150,000 gold",
                        "Gillion Stone x5",
                        "Medium Recovery Potion x15",
                        "Defence Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 3]",
                        "200,000 gold",
                        "Gillion Stone x7",
                        "Medium Recovery Potion x20",
                        "Energy Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 4]",
                        "300,000 gold",
                        "Gillion Stone x10",
                        "Medium Recovery Potion x30",
                        "Experience Potion x1",
						"Reward Box",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 250k ",
                    ],
                ],
				[
                    "title" => 'Level 40 ~ 49',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "150,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 2]",
                        "200,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 3]",
                        "300,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 4]",
                        "500,000 gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"Reward Box",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 500k ",
                    ],
                ],
				[
                    "title" => 'Level 50 ~ 59',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "200,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 2]",
                        "300,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 3]",
                        "500,000 gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 4]",
                        "750,000 gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"Reward Box",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 600k ",
                    ],
                ],
				[
                    "title" => 'Level 60 ~ 69',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "300,000 gold",
                        "Gillion Stone x5",
                        "Huge Recovery Potion x10",
                        "Attack Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 2]",
                        "500,000 gold",
                        "Gillion Stone x7",
                        "Huge Recovery Potion x15",
                        "Defence Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 3]",
                        "750,000 gold",
                        "Gillion Stone x10",
                        "Huge Recovery Potion x20",
                        "Energy Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 4]",
                        "1kk gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"Reward Box",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 700k",
                    ],
                ],
				[
                    "title" => 'Level 70 ~ 79',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "500,000 gold",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 2]",
                        "750,000 gold",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 3]",
                        "1kk gold",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 4]",
                        "1.5kk gold",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"Reward Box",
						"-------------------------------------",
						"[Completation Reward] ~ Maximum 800k ",
                    ],
                ],
				[
                    "title" => 'Level 80 ~ 99',
                    "img"=>'/assets/img/items/1850.png',
                    "items" => [
                        "[Round 1]",
                        "750,000 gold",
                        "Angel's Feather x7",
                        "Full Moon Crystal x5",
                        "Gillion Stone x5",
                        "Large Recovery Potion x10",
                        "Attack Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 2]",
                        "1kk gold",
                        "Angel's Feather x10",
                        "Full Moon Crystal x7",
                        "Gillion Stone x7",
                        "Large Recovery Potion x15",
                        "Defence Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 3]",
                        "1,5kk gold",
                        "Angel's Feather x15",
                        "Full Moon Crystal x10",
                        "Gillion Stone x10",
                        "Large Recovery Potion x20",
                        "Energy Potion x5",
						"Reward Box",
						"-------------------------------------",
						"[Round 4]",
                        "2kk gold",
                        "Angel's Feather x20",
                        "Full Moon Crystal x15",
                        "Gillion Stone x15",
                        "Large Recovery Potion x30",
                        "Experience Potion x1",
						"Reward Box",
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
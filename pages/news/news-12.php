<div class="flex flex-column min-h-screen ">

    <div class="container">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h1 class="text-3xl sm:text-4xl font-bold">
                    Upgrade System & Client Modding
                </h1>
                <div class="flex">
                    <div class="badge badge-info" style="height: 2rem;">
                        Oct 5, 2022
                    </div>
                </div>

            </div>
            <div class="flex w-100 ">
                <img src='../../assets/img/media1/12.png' width="100%">
                </img>
            </div>
        </div>

        <div class="flex flex-column w-100 justify-center p-2  max-w-3xl">

            <img src="/assets/divider.svg" class="mb-4" />
            <p class=" relative text-stone-500 mb-4 sm:ml-5">
            <p class=" relative text-stone-500 mb-4 sm:ml-5">
            <h1 class="text text-2xl font-bold mb-4">General Changes</h1>
            <div class="flex flex-column mb-4 sm:ml-5 ">
                <?php
                $items = [
                    "Added the new pet in game (Baby Panda)",
                    "Added new stat for Baby Raptor (All attacks are increased by 10%.)",
                    "Added the latest changes from official for SP",
                    "Implemented Upgrade Item for Weapon Skin",
                    "Implemented Renaming Card",
                    "Implemented Family XP Event",
                    "Fixed issue with crashing game",
                    "Fixed issues with onyx",
                    "Fixed issue with shadow clone for title not working.",
                    "Fixed issue with fairy not showing monsters left to level up",
                    "Fixed Ice With Costume Stats",
                    "Fixed Craft Erenia wrong Ammount for Elkaim's Essence",
                    "Fixed issue with craft fairy (Erenia-Fernon)"
                ];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex ml-5 sm:ml-12 items-center text-stone-500">
                        <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                        <h3><?php echo $items[$i] ?></h3>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="flex flex-column mb-4 sm:ml-5 ">
                <?php
                $items = ["Reworked the following items:"];
                for ($i = 0; $i < count($items); $i++) {
                ?>
                    <div class="flex ml-5 sm:ml-12 items-center text-stone-500">
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
                    "title" => 'Petal Wings',
                    "img" => '/assets/img/items/31537.png',
                    "items" => [],
                    "orange" => [
                        "On attack, there is a 10% chance of inflicting Petal Poison on your opponent.",
                        "Up to level 4  there is a 10% chance of never getting a bad effect.",
                        "Movement speed is increased by 2",
                        "[Side Effect: after 0.1 seconds] - All attacks are increased by 7%.",
                    ]
                ],
                [
                    "title" => 'Wonderland Headwear (Permanent)',
                    "img" => '/assets/img/items/4476.png',
                    "items" => [],
                    "orange" => [
                        "Increases champion experience received by 15%.",
                        "Experience gain is increased by 10%.",
                    ]
                ],
                [
                    "title" => 'Wonderland Costume (Permanent)',
                    "img" => '/assets/img/items/4477.png',
                    "items" => [],
                    "orange" => [
                        "Increases champion experience received by 15%.",
                        "Light resistance is increased by 10.",
                        "Movement speed is increased by 1.",
                    ]
                ],
            ]; ?>
            <div class="row w-100 mb-5">
                <?php
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

                <?php } ?>
            </div>
            <!-- Raid -->
            <br />
            <br />
            <h1 class="text text-2xl font-bold mb-4 sm:ml-5">Client Modding Changes</h1>
            <p class="text-stone-500 mb-4">
                We know well that players are realy competitive when we talk about PvE, so we have improved even more the way to know who is the top damage of raid.
            </p>
            <br />
            <div class="flex w-100 justify-content-center">
                <img src='../../assets/img/media2/28.png' width="80%" />
            </div>
            <img src="/assets/divider.svg" class="mb-4" />
            <h1 class="text text-2xl font-bold mb-4 sm:ml-5">Upgrade System</h1>
            <p class="text-stone-500 mb-4">
                Upgrade system will be working the same as Trophy System with the difference that it will be only for Weapon Skins. You can get this item from shop or by defeating Raid Boss from Act4.
            </p>
            <div class="flex w-100 mb-5 justify-content-center">
                <img src='../../assets/img/media2/27.png' width="80%" />
            </div>
            <div class="flex flex-column gap-1 ml-12 sm:ml-16">
            </div>
            <div class="flex flex-column ml-5 text-stone-500 mb-4">
                <div class="flex flex-column mb-4 sm:ml-5 ">
                    <?php
                    $items = ["Reworked the following items:"];
                    for ($i = 0; $i < count($items); $i++) {
                    ?>
                        <div class="flex ml-5 sm:ml-12 items-center text-stone-500">
                            <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                            <h3><?php echo $items[$i] ?></h3>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="row w-100 mb-5">
                    <?php
                    $items = [
                        [
                            "title" => 'Steampunk Chronoblade (Permanent)',
                            "img" => '/assets/img/items/2918.png',
                            "items" => [],
                            "orange" => [
                                "[Steampunk Chronoblade Tier I]",
                                "When a hunted monster drops an item, there's a 6% chance that it drops the item a second time.",
                                "Increases Gold earned by 15%.",
                                "--------------------------------------------",
                                "[Steampunk Chronoblade Tier II]",
                                "When a hunted monster drops an item, there's a 8% chance that it drops the item a second time.",
                                "Increases Gold earned by 20%.",
                                "--------------------------------------------",
                                "[Steampunk Chronoblade Tier III]",
                                "When a hunted monster drops an item, there's a 10% chance that it drops the item a second time.",
                                "Increases Gold earned by 25%.",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Steampunk Clockwork Bow (Permanent)',
                            "img" => '/assets/img/items/2919.png',
                            "items" => [],
                            "orange" => [
                                "[Steampunk Clockwork Bow Tier I]",
                                "When a hunted monster drops an item, there's a 6% chance that it drops the item a second time.",
                                "Increases Gold earned by 15%.",
                                "--------------------------------------------",
                                "[Steampunk Clockwork Bow Tier II]",
                                "When a hunted monster drops an item, there's a 8% chance that it drops the item a second time.",
                                "Increases Gold earned by 20%.",
                                "--------------------------------------------",
                                "[Steampunk Clockwork Bow Tier III]",
                                "When a hunted monster drops an item, there's a 10% chance that it drops the item a second time.",
                                "Increases Gold earned by 25%.",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Steampunk Geared Wand (Permanent)',
                            "img" => '/assets/img/items/2920.png',
                            "items" => [],
                            "orange" => [
                                "[Steampunk Geared Wand Tier I]",
                                "When a hunted monster drops an item, there's a 6% chance that it drops the item a second time.",
                                "Increases Gold earned by 15%.",
                                "--------------------------------------------",
                                "[Steampunk Geared Wand Tier II]",
                                "When a hunted monster drops an item, there's a 8% chance that it drops the item a second time.",
                                "Increases Gold earned by 20%.",
                                "--------------------------------------------",
                                "[Steampunk Geared Wand Tier III]",
                                "When a hunted monster drops an item, there's a 10% chance that it drops the item a second time.",
                                "Increases Gold earned by 25%.",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Christmas Tree (Permanent)',
                            "img" => '/assets/img/items/2995.png',
                            "items" => [],
                            "orange" => [
                                "[Christmas Tree Tier I]",
                                "Provides a 6% chance to reset the cooldown of the attack skill used.",
                                "--------------------------------------------",
                                "[Christmas Tree Tier II]",
                                "Provides a 8% chance to reset the cooldown of the attack skill used.",
                                "--------------------------------------------",
                                "[Christmas Tree Tier III]",
                                "Provides a 10% chance to reset the cooldown of the attack skill used.",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Candy Bow (Permanent)',
                            "img" => '/assets/img/items/2996.png',
                            "items" => [],
                            "orange" => [
                                "[Candy Bow Tier I]",
                                "Provides a 6% chance to reset the cooldown of the attack skill used.",
                                "--------------------------------------------",
                                "[Candy Bow Tier II]",
                                "Provides a 8% chance to reset the cooldown of the attack skill used.",
                                "--------------------------------------------",
                                "[Candy Bow Tier III]",
                                "Provides a 10% chance to reset the cooldown of the attack skill used.",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Christmas Bell (Permanent)',
                            "img" => '/assets/img/items/2997.png',
                            "items" => [],
                            "orange" => [
                                "[Christmas Bell Tier I]",
                                "Provides a 6% chance to reset the cooldown of the attack skill used.",
                                "--------------------------------------------",
                                "[Christmas Bell Tier II]",
                                "Provides a 8% chance to reset the cooldown of the attack skill used.",
                                "--------------------------------------------",
                                "[Christmas Bell Tier III]",
                                "Provides a 10% chance to reset the cooldown of the attack skill used.",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Frost Sword (Permanent)',
                            "img" => '/assets/img/items/4678.png',
                            "items" => [],
                            "orange" => [
                                "[Frost Sword Tier I]",
                                "Increases PvP attack power by 6%",
                                "--------------------------------------------",
                                "[Frost Sword Tier II]",
                                "Increases PvP attack power by 8%",
                                "--------------------------------------------",
                                "[Frost Sword Tier III]",
                                "Increases PvP attack power by 10%",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Frost Bow (Permanent)',
                            "img" => '/assets/img/items/4679.png',
                            "items" => [],
                            "orange" => [
                                "[Frost Bow Tier I]",
                                "Increases PvP attack power by 6%",
                                "--------------------------------------------",
                                "[Frost Bow Tier II]",
                                "Increases PvP attack power by 8%",
                                "--------------------------------------------",
                                "[Frost Bow Tier III]",
                                "Increases PvP attack power by 10%",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Frost Wand (Permanent)',
                            "img" => '/assets/img/items/4677.png',
                            "items" => [],
                            "orange" => [
                                "[Frost Wand Tier I]",
                                "Increases PvP attack power by 6%",
                                "--------------------------------------------",
                                "[Frost Wand Tier II]",
                                "Increases PvP attack power by 8%",
                                "--------------------------------------------",
                                "[Frost Wand III]",
                                "Increases PvP attack power by 10%",
                                "Movement Speed is increased by 1.",
                            ]
                        ],
                        [
                            "title" => 'Frozen Swordfish (Permanent)',
                            "img" => '/assets/img/items/4504.png',
                            "items" => [],
                            "orange" => [
                                "[Frozen Swordfish Tier I]",
                                "When attacking, there is a 6% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 150.",
                                "--------------------------------------------",
                                "When attacking, there is a 8% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 200.",
                                "--------------------------------------------",
                                "[Frozen Swordfish III]",
                                "When attacking, there is a 10% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 300.",
                            ]
                        ],
                        [
                            "title" => 'Octobow (Permanent)',
                            "img" => '/assets/img/items/4501.png',
                            "items" => [],
                            "orange" => [
                                "[Octobow Tier I]",
                                "When attacking, there is a 6% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 150.",
                                "--------------------------------------------",
                                "[Octobow Tier II]",
                                "When attacking, there is a 8% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 200.",
                                "--------------------------------------------",
                                "[Octobow III]",
                                "When attacking, there is a 10% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 300.",
                            ]
                        ],
                        [
                            "title" => 'Coral Wand (Permanent)',
                            "img" => '/assets/img/items/4502.png',
                            "items" => [],
                            "orange" => [
                                "[Coral Wand Tier I]",
                                "When attacking, there is a 6% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 150.",
                                "--------------------------------------------",
                                "[Coral Wand Tier II]",
                                "When attacking, there is a 8% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 200.",
                                "--------------------------------------------",
                                "[Coral Wand III]",
                                "When attacking, there is a 10% chance of summoning a shadow clone to carry out an additional attack.",
                                "All attacks are increased by 300.",
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
                <br />
                <br />
                <h1 class="text text-2xl font-bold mb-4">NosMall Changes</h1>
                <p class=" relative text-stone-500 mb-4 sm:ml-5">
                    Below you can find the random boxes from the shop (All the boxes from the rotation can be earned by mystery box in-game with a 3% probability to get 10x boxes randomly)</p>
                <div class="flex flex-column mb-4 sm:ml-5 ">
                    <?php
                    $items = [
                        "Lightning Wings",
                        "On attack, there is a 5% chance of inflicting Electrocute on your opponent.",
                        "When you're defending, there is a 7% chance of inflicting Electric Shock on your opponent.",
                        "Movement Speed is increased by 2.",
                    ];
                    for ($i = 0; $i < count($items); $i++) {
                    ?>
                        <div class="flex ml-5 sm:ml-12 items-center text-stone-500">
                            <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                            <h3><?php echo $items[$i] ?></h3>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="flex w-100 justify-content-center">
                    <img src='../../assets/img/media2/26.png' width="80%" />
                </div>
                <br />
                <div class="flex flex-column mb-4 sm:ml-5 ">
                    <?php
                    $items = [
                        "Honeybee Costume Set",
                        "All attacks are increased by 5%.",
                        "Defence is increased by 5%.",
                        "All elementals are increased by 10%.",
                        "All elemental resistance is increased by 10.",
                        "The equipped fairy's element increases by 10.",
                    ];
                    for ($i = 0; $i < count($items); $i++) {
                    ?>
                        <div class="flex ml-5 sm:ml-12 items-center text-stone-500">
                            <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                            <h3><?php echo $items[$i] ?></h3>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="flex w-100 justify-content-center">
                    <img src='../../assets/img/media2/14.png' width="80%" />
                    <?php
                    ?>
                </div>
                <br />
                <div class="flex flex-column mb-4 sm:ml-5 ">
                    <?php
                    $items = [
                        "Baby Raptor Blue",
                        "All attacks are increased by 10%.",
                        "Reduces cooldown of skills by 10%.",
                        "Increases champion experience received by 10%.",
                    ];
                    for ($i = 0; $i < count($items); $i++) {
                    ?>
                        <div class="flex ml-5 sm:ml-12 items-center text-stone-500">
                            <span class="iconify" data-icon='eva:arrow-ios-forward-fill'></span>
                            <h3><?php echo $items[$i] ?></h3>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="flex w-100 justify-content-center">
                    <img src='../../assets/img/media2/25.png' width="80%" />
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
<div class="flex flex-col mt-24 justify-between min-h-screen">
    <div class="flex lex-col  w-full h-full container mb-10 p-2">
        <div class="flex w-full flex-col gap-6">
            <div class="text-xl sm:text-3xl font-bold">
                News & Info
            </div>
            <div class="container flex">
                <?php
                $news = [
                    ["img" => 'https://localhost/assets/img/media1/12.png', "published" => 'Oct 5, 2022', "name" => "Patch 1.0.9", "description" => 'Upgrade System & Client modding is here!', 'index' => 12],
                    ["img" => 'https://localhost/assets/img/media1/11.png', "published" => 'Sep 22, 2022', "name" => "Patch 1.0.8", "description" => 'Trophy Upgrade is here!', 'index' => 11],
                    ["img" => 'https://localhost/assets/img/media1/10.png', "published" => 'Sep 15, 2022', "name" => "Patch 1.0.7", "description" => 'Act 6.2 Update is already here!', 'index' => 10],
                    ["img" => 'https://localhost/assets/img/media1/9.png', "published" => 'Sep 10, 2022', "name" => "Patch 1.0.6", "description" => 'Summer Event has just started!', 'index' => 9],
                    ["img" => 'https://localhost/assets/img/media1/8.png', "published" => 'Sep 7, 2022', "name" => "Patch 1.0.5", "description" => 'The latest changes we made before opening official server', 'index' => 8],
                    ["img" => 'https://localhost/assets/img/media1/6.png', "published" => 'Sep 1, 2022', "name" => "Patch 1.0.4", "description" => 'The latest changes we made before opening official server', 'index' => 6],
                    ["img" => 'https://localhost/assets/img/media1/5.png', "published" => 'Aug 25, 2022', "name" => "Patch 1.0.3", "description" => 'Find out the latest changes we made from the first beta phase', 'index' => 5],
                    ["img" => 'https://localhost/assets/img/media1/4.png', "published" => 'Aug 22, 2022', "name" => "Patch 1.0.2", "description" => 'Here you can find a list of many changes that we made in our gameplay for beta', 'index' => 4],
                    ["img" => 'https://localhost/assets/img/media1/3.png', "published" => 'Aug 19, 2022', "name" => "Launch Notes", "description" => 'Here you can find a list of many changes that we made in our gameplay', 'index' => 3],
					["img" => '	https://localhost/assets/img/media1/1.png', "published" => 'Aug 19, 2022', "name" => "Act 6.1 Changes", "description" => 'Find out the exciting changes made to Act 6.1. Erenia and Zenas awaits you.', 'index' => 1],
                    ["img" => 'https://localhost/assets/img/media1/2.png', "published" => 'Aug 19, 2022', "name" => "Glacernon Changes", "description" => 'We have made a lot of changes at how the current Raids work in Glacernon', 'index' => 2],
                ];
                for ($i = 0; $i < count($news); $i++) {
                ?>
                <div class="col-12 col-sm-4 px-1 my-2">
                    <div class="card">
                        <time class="badge " datetime="<?php echo $news[$i]['published']; ?>" style="position:absolute; right:8px; top:8px; line-height: 1;"><?php echo $news[$i]['published']; ?></time>
                        <img src="<?php echo $news[$i]['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $news[$i]['name']; ?></h5>
                            <p class="card-text"><?php echo $news[$i]['description']; ?></p>
                            <a href="/news/<?php echo $news[$i]['index'] ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>



            </div>
        </div>
    </div>
	<title>Kaisen - News</title>
    <div class="w-full  ">
        <?php include "includes/footer.php"; ?>
    </div>

</div>
<main class="content">
    <div class="block-widget-2">
        <div class="block-widget-1">
            <?php include 'includes/top_player.php'; ?>
            <!--block-TOP PLAYERS-->
            <div class="block-left"></div>
            <?php include 'includes/top_guilds.php'; ?>
            <!--block-TOP GUILDS-->

            <div class="block-left"></div>
        </div>
        <div class="dmn-content">
            <div class="dmn-page-box">
                <div class="dmn-page-title">
                    <h1>News</h1>
                </div>
                <div class="dmn-page-content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">News List</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php
                            $news = [
                                ["img" => 'https://apolys.com/assets/img/media1/12.png', "published" => 'Oct 5, 2022', "name" => "Patch 1.0.9", "description" => 'Upgrade System & Client modding is here!', 'index' => 12],
                                ["img" => 'https://apolys.com/assets/img/media1/11.png', "published" => 'Sep 22, 2022', "name" => "Patch 1.0.8", "description" => 'Trophy Upgrade is here!', 'index' => 11],
                                ["img" => 'https://apolys.com/assets/img/media1/10.png', "published" => 'Sep 15, 2022', "name" => "Patch 1.0.7", "description" => 'Act 6.2 Update is already here!', 'index' => 10],
                                ["img" => 'https://apolys.com/assets/img/media1/9.png', "published" => 'Sep 10, 2022', "name" => "Patch 1.0.6", "description" => 'Summer Event has just started!', 'index' => 9],
                                ["img" => 'https://apolys.com/assets/img/media1/8.png', "published" => 'Sep 7, 2022', "name" => "Patch 1.0.5", "description" => 'The latest changes we made before opening official server', 'index' => 8],
                                ["img" => 'https://apolys.com/assets/img/media1/6.png', "published" => 'Sep 1, 2022', "name" => "Patch 1.0.4", "description" => 'The latest changes we made before opening official server', 'index' => 6],
                                ["img" => 'https://apolys.com/assets/img/media1/5.png', "published" => 'Aug 25, 2022', "name" => "Patch 1.0.3", "description" => 'Find out the latest changes we made from the first beta phase', 'index' => 5],
                                ["img" => 'https://apolys.com/assets/img/media1/4.png', "published" => 'Aug 22, 2022', "name" => "Patch 1.0.2", "description" => 'Here you can find a list of many changes that we made in our gameplay for beta', 'index' => 4],
                                ["img" => 'https://apolys.com/assets/img/media1/3.png', "published" => 'Aug 19, 2022', "name" => "Launch Notes", "description" => 'Here you can find a list of many changes that we made in our gameplay', 'index' => 3],
                                ["img" => '	https://apolys.com/assets/img/media1/1.png', "published" => 'Aug 19, 2022', "name" => "Act 6.1 Changes", "description" => 'Find out the exciting changes made to Act 6.1. Erenia and Zenas awaits you.', 'index' => 1],
                                ["img" => 'https://apolys.com/assets/img/media1/2.png', "published" => 'Aug 19, 2022', "name" => "Glacernon Changes", "description" => 'We have made a lot of changes at how the current Raids work in Glacernon', 'index' => 2],
                            ];
                            for ($i = 0; $i < count($news); $i++) {
                            ?>
                                <div class="news-content-top mt-3">
                                    <div class="newsContent flex-s-c">
                                        <div class="newsContent_img">
                                            <img src="<?php echo $news[$i]['img'];?>" class="p-0" alt="" style="width: 80px; height:80px;">
                                        </div>
                                        <div class="newsContent_info">
                                            <div class="newsContent_info-text">
                                                <?php echo $news[$i]['published']; ?> </div>
                                            <a href="/news/<?php echo $news[$i]['index']; ?>" class="blue-a read-more-news">more</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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
                                ["img" => 'https://localhost/assets/img/icon-news.png', "published" => 'More information soon', "name" => "", "description" => '', 'index' => 1],
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
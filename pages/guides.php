<main class="content">
    <div class="block-widget-2 guides">
        <div class="block-widget-1">
            <?php include 'includes/top_player.php' ; ?>
            <!--block-TOP PLAYERS-->
            <div class="block-left"></div>
            <?php include 'includes/top_guilds.php' ; ?>
            <!--block-TOP GUILDS-->

            <div class="block-left"></div>
        </div>
        <div class="dmn-content">
            <div class="dmn-page-box">
                <div class="dmn-page-title">
                    <h1>Guides</h1>
                </div>
                <div class="dmn-page-content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">Server Guides List</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php 
                            $guides = [
                               ["title" => 'Mini-Games Drop List', 'index' => 1],
                            ];
                            for ($i = 0; $i < count($guides); $i++) {
                            ?>
                            <div class="list-group mb-4 additional-links">
                                <div class="list-group-item-action guide" title="guide-1"><a href="/guides/<?php echo $guides[$i]['index'];?>"><?php echo $guides[$i]['title']; ?></a></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
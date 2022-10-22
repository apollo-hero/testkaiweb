<div class="col-md-12 p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
    <h3>LATEST NEWS</h3>
    <hr>
    <?php

	$temp = $con->query('SET search_path TO web;')->fetchAll();
    $sql_max_art = $con->query('SELECT MAX(id) FROM articles')->fetchAll();
    $MX = $sql_max_art;
    $MAX = $MX[0];

    if($MAX > 0){ ?>
        <div class="form-row">
            <div class="col-md-6 rounded-left overflow-auto mb-3" style="height:410px; max-height: 410px">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php 
					
                    $sql_article = $con->select("articles","*",["ORDER" => ["article_date" => "DESC"]]);

                    foreach($sql_article as $ARTICLE ){ ?>

                        <a class="text-left nav-link <?php if($ARTICLE[NEWS_ARTICLE_ID] == $MAX){ ?> active <?php } ?>" id="v-pills-home-tab" data-toggle="pill" href="#article-<?php echo $ARTICLE[NEWS_ARTICLE_ID]; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <img src="<?php echo $ARTICLE[NEWS_ARTICLE_PIC]; ?>" class="w-100 rounded" alt="..." style="max-height: 120px">
                                </div>
                                <div class="col-md-8" style="min-height: 130px">
                                    <b><?php echo $ARTICLE[NEWS_ARTICLE_TITLE]; ?></b>
                                    <br>
                                    <p class="overflow-hidden" style="max-height: 80px">
                                        <?php 
                                        echo substr($ARTICLE[NEWS_ARTICLE_BODY], 0, 120);

                                        if(strlen($ARTICLE[NEWS_ARTICLE_BODY]) > 120)
                                        echo "..."; 
                                        ?>
                                    </p>
                                </div>
                                <small class="ml-2">
                                    <i class="fad fa-calendar-alt"></i>
                                    <?php echo $ARTICLE[NEWS_ARTICLE_DATE]; ?>  
                                </small>
                            </div>
                        </a><?php 
                    } ?>
                </div>
            </div>
            <div class="col-md-6 rounded-right" style="min-height:400px; max-height: 400px">
                <div class="tab-content h-100" id="v-pills-tabContent">
                    <?php

                    $sql_article = $con->select("articles","*",["ORDER" => ["id" => "DESC"]]);//('SELECT * FROM ' . NEWS . ' ORDER BY ' . NEWS_ARTICLE_ID . ' DESC');

                    foreach( $sql_article as $ARTICLE){ ?>

                        <div class="tab-pane fade <?php if($ARTICLE[NEWS_ARTICLE_ID] == $MAX){ ?> active show <?php } ?>" id="article-<?php echo $ARTICLE[NEWS_ARTICLE_ID]; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <img src="<?php echo $ARTICLE[NEWS_ARTICLE_PIC]; ?>" class="w-100 mb-3" alt="..." style="max-height: 180px">
                            <p class="overflow-hidden mb-0" style="min-height:160px; max-height: 160px">
                                <?php
                                echo substr($ARTICLE[NEWS_ARTICLE_BODY], 0, 370);

                                if(strlen($ARTICLE[NEWS_ARTICLE_BODY]) > 370 )
                                echo "..."; 
                                ?>  
                            </p>
                            <div style="display: -webkit-box;" class="mb-3 mt-3">
                                <div class="w-50 text-left">
                                <!--<a href="#" class="btn <?php echo $site['style']['btn-p']; ?>">Read more</a>-->
                                </div>
                                <div class="w-50 text-right">
                                    <i class="fad fa-calendar-alt"></i>
                                    <?php echo $ARTICLE[NEWS_ARTICLE_DATE]; ?>  
                                </div>
                            </div>
                        </div><?php 
                    } ?>
                </div>      
            </div>
        </div><?php 
    } else { ?>

        <h1><i class="fad fa-newspaper"></i></h1>
        <br>
        <h5>No news here</h5>

    <?php } ?>
</div>
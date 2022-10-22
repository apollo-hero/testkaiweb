    <?php echo "<title>" . $NTFY . $site['name'] . " - Home" . "</title>"; ?>
    <div class="p-3 text-light">
    <section class="p-0" id="slider">
        <div class="form-group text-center mb-0">
            <div class="form-row m-0">
                <div class="col-md-8 mb-3 font-roboto">
                    <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                        <ol class="carousel-indicators mb-0">
                        </ol>
                        <div class="carousel-inner">
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        </a>
                    </div>
                    <div>
                        <hr>
                        <h3>TOP RANKING</h3>
                        <hr>
                        <!-- Ranking table -->
                        <nav class="nav nav-pills nav-justified">
                            <a class="nav-item nav-link active" id="level-tab" data-toggle="tab" href="#nav-level" role="tab" aria-controls="level" aria-selected="true">LEVEL</a>
                            <a class="nav-item nav-link" id="heroic-level-tab" data-toggle="tab" href="#nav-heroic-level" role="tab" aria-controls="heroic-level" aria-selected="false">HEROIC LEVEL</a>
                            <a class="nav-item nav-link" id="reputation-tab" data-toggle="tab" href="#nav-reputation" role="tab" aria-controls="reputation" aria-selected="false">REPUTATION</a>
                        </nav>
                        <!-- Ranking panes -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-level" role="tabpanel" aria-labelledby="nav-level-tab">
                                <img src="<?php echo $site['assets']['images']; ?>/banner-1-Level.png" class="mt-3 w-100 rounded">
                                <hr>
                                <table class="w-100">
                                    <thead>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">RANK</td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary"></td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">NAME</td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">LEVEL</td>
                                    </thead>
                                    <tbody style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                        <?php
                                        $temp = $con->query('SET search_path TO characters;')->fetchAll();
                                        $SQL_RANKING_REP = $con->select("characters","*",["ORDER" =>["Level" => "DESC"]]);//('SELECT * FROM ' . CHAR . ' ORDER BY "Level" DESC');
                                        $RANK = 0;

                                        foreach( $SQL_RANKING_REP as $REP ){

                                            $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                                            $SQL_AUTH_CHECK = $con->select("accounts","Authority",["Id" => $REP[CHAR_USR_ID]]);//('SELECT "Authority" FROM ' . USER . ' WHERE "Id" = ?');
                                            $AUTH = $SQL_AUTH_CHECK[0];

                                            if ($AUTH >= 0 && $AUTH <= 2) { $RANK++; ?>
                                            <tr>
                                                <td class="pt-3 pb-3"><?php echo "#" . $RANK; ?></td>
                                                <td class="pt-3 pb-3">
                                                    <?php
                                                    if ($RANK == 1)
                                                        echo "<span style='color: #C9B037'><i class='fad fa-trophy-alt'></i></span>";
                                                    elseif ($RANK == 2)
                                                        echo "<span style='color: #D7D7D7'><i class='fad fa-trophy-alt'></i></span>";
                                                    elseif ($RANK == 3)
                                                        echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                    ?>
                                                </td>
                                                <td class="pt-3 pb-3"><?php echo $REP[CHAR_NICK]; ?></td>
                                                <td class="pt-3 pb-3"><?php echo $REP[CHAR_LEVEL]; ?></td>
                                            </tr>
                                        <?php if($RANK == 10) break; } }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-heroic-level" role="tabpanel" aria-labelledby="nav-heroic-level-tab">
                                <img src="<?php echo $site['assets']['images']; ?>/banner-2-Heoric.png" class="mt-3 w-100 rounded">
                                <hr>
                                <table class="w-100 ">
                                    <thead>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">RANK</td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary"></td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">NAME</td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">HEROIC LEVEL</td>
                                    </thead>
                                    <tbody style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                        <?php

                                        $temp = $con->query('SET search_path TO characters;')->fetchAll();
                                        $SQL_RANKING_REP = $con->select("characters","*",["ORDER" =>["HeroLevel" => "DESC"]]);
                                        $RANK = 0;

                                        foreach($SQL_RANKING_REP as  $REP){

                                        $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                                        $SQL_AUTH_CHECK = $con->select("accounts","Authority",["Id" => $REP[CHAR_USR_ID]]);//('SELECT "Authority" FROM ' . USER . ' WHERE "Id" = ?');
                                        $AUTH = $SQL_AUTH_CHECK[0];

                                        if ($AUTH >= 0 && $AUTH <= 2) { $RANK++;

                                        ?>
                                        <tr>
                                            <td class="pt-3 pb-3"><?php echo "#" . $RANK; ?></td>
                                            <td class="pt-3 pb-3">
                                            <?php
                                            if ($RANK == 1)
                                                echo "<span style='color: #C9B037'><i class='fad fa-trophy-alt'></i></span>";
                                            elseif ($RANK == 2)
                                                echo "<span style='color: #D7D7D7'><i class='fad fa-trophy-alt'></i></span>";
                                            elseif ($RANK == 3)
                                                echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                            ?>
                                            </td>
                                            <td class="pt-3 pb-3"><?php echo $REP[CHAR_NICK]; ?></td>
                                            <td class="pt-3 pb-3"><?php echo $REP[CHAR_HERO_LEVEL]; ?></td>
                                        </tr>
                                        <?php if($RANK == 10) break; } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-reputation" role="tabpanel" aria-labelledby="nav-reputation-tab">
                                <img src="<?php echo $site['assets']['images']; ?>/banner-3-Fame.png" class="mt-3 w-100 rounded">
                                <hr>
                                <table class="w-100">
                                    <thead>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">RANK</td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary"></td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">NAME</td>
                                        <td class="pt-3 pb-3 font-weight-bold bg-primary">REPUTATION</td>
                                    </thead>
                                    <tbody style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                        <?php

                                        $temp = $con->query('SET search_path TO characters;')->fetchAll();
                                        $SQL_RANKING_REP = $con->select("characters","*",["ORDER" =>["Reput" => "DESC"]]);
                                        $RANK = 0;

                                        foreach($SQL_RANKING_REP as $REP ){ 

                                            $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                                            $SQL_AUTH_CHECK = $con->select("accounts","Authority",["Id" => $REP[CHAR_USR_ID]]);//('SELECT "Authority" FROM ' . USER . ' WHERE "Id" = ?');
                                            $AUTH = $SQL_AUTH_CHECK[0];

                                        if ($AUTH >= 0 && $AUTH <= 2) { $RANK++; ?>

                                        <tr>
                                            <td class="pt-3 pb-3"><?php echo "#" . $RANK; ?></td>
                                            <td class="pt-3 pb-3">
                                            <?php
                                                if ($RANK == 1)
                                                    echo "<span style='color: #C9B037'><i class='fad fa-trophy-alt'></i></span>";
                                                elseif ($RANK == 2)
                                                    echo "<span style='color: #D7D7D7'><i class='fad fa-trophy-alt'></i></span>";
                                                elseif ($RANK == 3)
                                                    echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                            ?>
                                            </td>
                                            <td class="pt-3 pb-3"><?php echo $REP[CHAR_NICK]; ?></td>
                                            <td class="pt-3 pb-3"><?php echo $REP['Reput']; ?></td>
                                        </tr>
                                        <?php if($RANK == 10) break; } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <?php include "includes/news.php"; ?>
                    </div>
                </div>
                <div class="col-md-4"><?php 
                    if($site['download']['status'] == 'WORKING'){ 
                        if(!empty($site['download']['client']) || $site['download']['client'] != ""){ ?>
                            <div class="div-custom-button mb-2">
                                <a class="a-custom" href="<?php echo $site['download']['client']; ?>" target="_blank">
                                    <p class="p-custom">
                                        <span class="bg"></span>
                                        <span class="base"></span>
                                        <span class="text">DOWNLOAD CLIENT</span>
                                    </p>
                                </a>
                            </div><?php
                        }
                    } ?>
                    <div class="border-custom mb-2">
                        <div style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                            <h5 class="font-roboto pt-3">SERVER TIME</h5>
                            <hr>
                            <div class="pb-3 h2 m-0" id="server-time">
                                --:--:--
                            </div>
                        </div>
                    </div>
                    <div class="border-custom mb-2">
                        <?php include "includes/channels.php"; ?>
                    </div>
                    <div class="border-custom mb-2">
                        <iframe src="https://discordapp.com/widget?id=<?php echo $site['social']['discord_id']; ?>&theme=dark" class="w-100" height="500" allowtransparency="true" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
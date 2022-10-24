<main class="content">
    <div class="block-widget-2">
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
                    <h1>Ranking</h1>
                </div>
                <div class="dmn-page-content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">
                                <!--Ranking-->
                                <nav class="nav nav-pills justify-content-center float-center">
                                </nav>
                            </h2>
                        </div>
                    </div>
                    <div id="top_list" class="rankings">
                        <div class="row">
                            <div class="col-12">
                                <nav class="nav nav-pills nav-justified">
                                    <a class="btn btn-primary nav-item nav-link active" id="level-tab" data-toggle="tab" href="#nav-level" role="tab" aria-controls="level" aria-selected="true">LEVEL</a>
                                    <a class="btn btn-primary nav-item nav-link" id="heroic-level-tab" data-toggle="tab" href="#nav-heroic-level" role="tab" aria-controls="heroic-level" aria-selected="false">HEROIC LEVEL</a>
                                    <a class="btn btn-primary nav-item nav-link" id="reputation-tab" data-toggle="tab" href="#nav-reputation" role="tab" aria-controls="reputation" aria-selected="false">REPUTATION</a>
                                </nav>
                            </div>
                        </div>
                        <div id="nav-tabContent" class="tab-content" style="padding: 10px;">
                            <!-- <div class="row"> -->
                                <div class="col-12 tab-pane fade show active" id="nav-level" role="tabpanel" aria-labelledby="nav-level-tab">

                                    <div class="table-responsive-sm">
                                        <table class="table dmn-rankings-table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>RANK</th>
                                                    <th>Class</th>
                                                    <th class="text-center">NAME</th>
                                                    <th class="text-center">LEVEL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $temp = $con->query('SET search_path TO characters;')->fetchAll();
                                                    $SQL_RANKING_REP = $con->select("characters","*",["ORDER" =>["Level" => "DESC"]]);//('SELECT * FROM ' . CHAR . ' ORDER BY "Level" DESC');
                                                    $RANK = 0;
                                                    $i = 0;
                                                    foreach( $SQL_RANKING_REP as $REP ){
                                                        $i++;
                                                        $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                                                        $SQL_AUTH_CHECK = $con->select("accounts","Authority",["Id" => $REP[CHAR_USR_ID]]);//('SELECT "Authority" FROM ' . USER . ' WHERE "Id" = ?');
                                                        $AUTH = $SQL_AUTH_CHECK[0];
                                                        if ($AUTH >= 0 && $AUTH <= 2) { $RANK++; ?>
                                                <tr>
                                                    <td><?php echo "#" . $RANK; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($REP['Class'] == 0)
                                                        // echo "<span style='color: #C9B037'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "adventure";
                                                    elseif ($REP['Class'] == 1)
                                                        // echo "<span style='color: #D7D7D7'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "swordsman";
                                                    elseif ($REP['Class'] == 2)
                                                        // echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "archer";
                                                    elseif ($REP['Class'] == 3)
                                                        // echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "MAGE";
                                                        ?>
                                                    </td>
                                                    <td class="text-center"><?php echo $REP[CHAR_NICK]; ?></td>
                                                    <td class="text-center"><?php echo $REP[CHAR_LEVEL]; ?></td>
                                                </tr>
                                                <?php if($RANK == 10) break; } }?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <div class="float-right">Next Cache Time 19/10/2022 21:22:30</div> -->
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="nav-heroic-level" role="tabpanel" aria-labelledby="nav-heroic-level-tab">

                                    <div class="table-responsive-sm">
                                        <table class="table dmn-rankings-table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>RANK</th>
                                                    <th>Class</th>
                                                    <th class="text-center">NAME</th>
                                                    <th class="text-center">HEROIC LEVEL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                    <td><?php echo "#" . $RANK; ?></td>
                                                    <td>
                                                    <?php
                                                        if ($REP['Class'] == 0)
                                                        // echo "<span style='color: #C9B037'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "adventure";
                                                    elseif ($REP['Class'] == 1)
                                                        // echo "<span style='color: #D7D7D7'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "swordsman";
                                                    elseif ($REP['Class'] == 2)
                                                        // echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "archer";
                                                    elseif ($REP['Class'] == 3)
                                                        // echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                        echo "MAGE";
                                                        ?>
                                                    </td>
                                                    <td class="text-center"><?php echo $REP[CHAR_NICK]; ?></td>
                                                    <td class="text-center"><?php echo $REP[CHAR_HERO_LEVEL]; ?></td>
                                                </tr>
                                                <?php if($RANK == 10) break; } } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <div class="float-right">Next Cache Time 19/10/2022 21:22:30</div> -->
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="nav-reputation" role="tabpanel" aria-labelledby="nav-reputation-tab">

                                    <div class="table-responsive-sm">
                                        <table class="table dmn-rankings-table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>RANK</th>
                                                    <th>Class</th>
                                                    <th class="text-center">NAME</th>
                                                    <th class="text-center">REPUTATION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                    <td><?php echo "#" . $RANK; ?></td>
                                                    <td>
                                                        <?php
                                                            if ($REP['Class'] == 0)
                                                                // echo "<span style='color: #C9B037'><i class='fad fa-trophy-alt'></i></span>";
                                                                echo "adventure";
                                                            elseif ($REP['Class'] == 1)
                                                                // echo "<span style='color: #D7D7D7'><i class='fad fa-trophy-alt'></i></span>";
                                                                echo "swordsman";
                                                            elseif ($REP['Class'] == 2)
                                                                // echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                                echo "archer";
                                                            elseif ($REP['Class'] == 3)
                                                                // echo "<span style='color: #AD8A56'><i class='fad fa-trophy-alt'></i></span>";
                                                                echo "MAGE";
                                                        ?>
                                                    </td>
                                                    <td class="text-center"><?php echo $REP[CHAR_NICK]; ?></td>
                                                    <td class="text-center"><?php echo $REP['Reput']; ?></td>
                                                </tr>
                                                <?php if($RANK == 10) break; } } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <div class="float-right">Next Cache Time 19/10/2022 21:22:30</div> -->
                                        </div>
                                    </div>


                                </div>
                            <!-- </div> -->
                            <br>
                            <!-- <div class="row mb-5">
                                <div class="col-12">
                                    <div class="mx-auto" style="width: 350px;">
                                        <form method="post" action="https://Apolys.org/rankings/search/DEFAULT">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                                    <input type="text" class="form-control " id="name" name="name" placeholder="Character Name">
                                                </div>

                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
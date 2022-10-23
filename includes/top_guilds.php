<?php 
    $temp = $con->query('SET search_path TO families;');
    $top_player = $con->select("families", "*", ["ORDER" => ["Level" => "DESC"], "LIMIT" => 10]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');
?>
<div class="widget-fon-discussions block-players-2">
    <!--block-TOP GUILDS-->
    <div class="block-widget-title discussions-title">
        Top Family </div>

    <div id="top_guilds">
        <ul class="top-block guild">
            <li class="top-title">
            <span class="top-number">#</span> <span class="top-name">Name</span> <span class="top-lvl">Level</span>
            </li>
            <?php
            $i = 0;
            foreach ($top_player as $player) { 
                
                $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                if ($player['Name'] != "blabla"){
                    $i++;
                    // $SQL_AUTH_CHECK = $con->select("accounts","Authority",["Id" => $player[CHAR_USR_ID]]);//('SELECT "Authority" FROM ' . USER . ' WHERE "Id" = ?');
                    // $AUTH = $SQL_AUTH_CHECK[0];
                    // if ($AUTH >= 0 && $AUTH <= 2) { $RANK++;
            ?>
            <li class="top-title">
            <span class="top-number"><?php echo $i; ?></span> <span class="top-name"><a href=""><?php echo $player['Name']; ?></a></span> <span class="top-lvl"><?php echo $player['Level']; ?></span>
            </li>
            <?php } } ?>
        </ul>
    </div>
    <div class="buttons-block-1">
        <a href="#" id="switch_top_guilds_DEFAULT" data-count="10" class="button-small"><?php echo $site['name']; ?></a>
    </div>
</div>
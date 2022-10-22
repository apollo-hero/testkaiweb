<div id="server-status" class="pb-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
    <h5 class="font-roboto pt-3">SERVER STATUS</h5>
    <hr>
    <?php
	
	$temp = $con->query('SET search_path TO web;')->fetchAll();
    $SQL_CH_STATUS = $con->select("channelsweb","*");//("SELECT * FROM " . CHANNELS);

    foreach($SQL_CH_STATUS as $CH){

        $connection = @fsockopen($site['server']['IP'], $CH[CHANNELS_PORT], $errno, $errstr, 0.01);
        echo "<div class='row m-0 h6 channel'>";
        echo "<div class='col-md-6 p-2 font-roboto'>" . strtoupper($CH[CHANNELS_NAME]) . "</div>";

        if (is_resource($connection))
            echo "
                <div class='col-md-6 p-2 text-center text-success'>
                    <i class='fas fa-check-circle'></i>
                </div>";
        else{

            $SQL_MAINTENANCE_CH_CECK = $con->select("maintenancelog","*");//("SELECT COUNT(*) FROM " . MAINTENANCE);
            $M_CHECK = $SQL_MAINTENANCE_CH_CECK;

            if(!empty($M_CHECK))
                echo "
                    <div class='col-md-6 p-2 text-center text-warning'>
                        <i class='fas fa-minus-circle'></i>
                    </div>";
            else
                echo "
                    <div class='col-md-6 p-2 text-center text-danger'>
                        <i class='fas fa-times-circle'></i>
                    </div>";
        }
        echo "</div>";
    } ?>
</div>

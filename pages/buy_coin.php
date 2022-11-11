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
                    <h1>Donate</h1>
                </div>
                <div class="dmn-page-content">
                    <div class="row">
                        <?php if ($site['coin_status'] == 'MAINTENANCE') { ?>
                            <div class="w-100 text-center text-light bg-danger p-3">
                                <b></i>The coins store is currently in maintenance mode.</b>
                            </div>
                        <?php } else { ?>
                        <table class="table dmn-account-table table-condensed table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                                <?php
                                function cal_percentage($num_amount, $num_total)
                                {
                                    $count1 = $num_amount / $num_total;
                                    $count2 = $count1 * 100;
                                    $count = number_format($count2, 1);
                                    return $count;
                                }
                                $temp = $con->query('SET search_path TO web;');
                                $sql_store_coins = $con->select("coinsweb", "*");
                                foreach ($sql_store_coins as $ITEM) { ?>
                                <tr>
                                <?php
                                if ($site['coin_discount'] > 0)
                                    echo "<td><strong><s>" . $ITEM[STORE_COINS_PRICE] . " " . $site['paypal']['currency'] . "</s>" .
                                        Discount($ITEM[STORE_COINS_PRICE], $site['coin_discount']) . " " . $site['paypal']['currency'] . "
                                            </strong>
                                        
                                            <span class='badge badge-danger'>" . $site['coin_discount'] . "% Off</span></td>";
                                else
                                    echo "<td>" . $ITEM[STORE_COINS_PRICE] . " " . $site['paypal']['currency'] . "</td>";
                                ?>
                                <?php 
                                if ($site['coin_bonus'] > 0)
                                    echo "<td>" .
                                    number_format(Bonus($ITEM[STORE_COINS_AMOUNT] + $ITEM['BonusCoins'], $site['coin_bonus']), 0, ',', '.') . " Coins <small>available</small>
                                        <small class='text-error'>
                                            " . $ITEM[STORE_COINS_AMOUNT] . " + " . $ITEM['BonusCoins'] . " Bonus Coins (" . cal_percentage($ITEM['BonusCoins'], $ITEM[STORE_COINS_AMOUNT]) . "%) 
                                        </small>
                                        <span class='badge badge-success  text-xs'>
                                            " . $site['coin_bonus'] . "% Bonus
                                        </span></td>";
                                else
                                    echo "<td>" . number_format($ITEM[STORE_COINS_AMOUNT], 0, ',', '.') . " + " . $ITEM['BonusCoins'] . " Bonus Coins (" . cal_percentage($ITEM['BonusCoins'], $ITEM[STORE_COINS_AMOUNT]) . "%)" . "</td>";
                                ?>
                                    <td class="text-center">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                            <input type="hidden" name="business" value="<?php echo $site['email'] ?>">
                                            <input type="hidden" name="cmd" value="_donations">
                                            <input type="hidden" name="no_shipping" value="1">
                                            <input type="hidden" name="shipping_preference" value="NO_SHIPPING">
                                            <input type="hidden" name="item_name" value="Server donation">
                                            <input type="hidden" name="amount" value="<?php echo Discount($ITEM[STORE_COINS_PRICE], $site['coin_discount']) ?> ">
                                            <input type="hidden" name="custom" value="<?php echo $_SESSION['USER_ID'] ?>">
                                            <input type="hidden" name="currency_code" value="EUR">
                                            <input type="hidden" name="notify_url" value="<?php echo $site['domain'] ?>/paypal-postback.php">
                                            <input type="hidden" name="item_number" value="<?php echo $ITEM[STORE_COINS_ID] ?>">
                                            <button class="w-full btn btn-sm btn-warning buy-button " id = 'buy-button-<?php echo $ITEM[STORE_COINS_ID] ?>' >Donate</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
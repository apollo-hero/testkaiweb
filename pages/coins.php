<?php echo "<title>" . $NTFY . $site['name'] . " - Coins" . "</title>";

if ($site['coin_status'] == 'WORKING' || $_SESSION['USER_RANGE'] >= ROLE_OWNER) {
    if ($site['coin_status'] == 'MAINTENANCE') { ?>
        <div class="w-100 text-center text-light bg-danger p-3">
            <b></i>The coins store is currently in maintenance mode. <a class="text-dark" href="index?to=admin&&card=coins">Change</a></b>
        </div><?php
            }
            //('SELECT * FROM ' . CART . ' 
            $sql_store_coins = $con->select("coinsweb", "*"); //('SELECT * FROM ' . STORE_COINS);
                ?>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <div class="flex w-full h-full flex-col justify-between  gap-2 ">
        <div class='p-2'>
		   <div class="row text-center text-light m-0 pt-5">

	  
      <!--<div class="col-md-12 h1">We're going to put the shop under maintenance to improve the code to give you a better experience.<br>It can therefore happen that it takes about 2-3 minutes for the coins to be credited.</div>-->
	  </div>
            <div class="flex  w-full flex-col bg-base-300 rounded-lg p-4 mb-3 position-relative-shop">

                <div class="flex p-2 border-b border-base-100 mb-2">

                    <h3 class="text-lg text-stone-400 flex gap-2 p-2 x"><a href='/' class="text-info">Home</a>/<a href='/shop' class="text-info">Shop</a></h3>
                </div>
                <div class="shop-page-message">
                    <p><br><div syle="color:white;"></div></p>
                </div>
                <div class='grid sm:grid-cols-2 lg:grid-cols-3 gap-2 justify-center'>
                    <?php
                    function cal_percentage($num_amount, $num_total)
                    {
                        $count1 = $num_amount / $num_total;
                        $count2 = $count1 * 100;
                        $count = number_format($count2, 1);
                        return $count;
                    }

                    foreach ($sql_store_coins as $ITEM) { ?>
                        <div class="flex flex-col  gap-2 rounded-md justify-between p-3 hover:border-info border border-base-100" >
                            <div class='flex w-full h-full justify-between cursor-hand' >
                                <div class="flex-col flex  justify-between">
                                    <div class='flex flex-col'>
                                        <!-- price -->
                                        <?php
                                        if ($site['coin_discount'] > 0)
                                            echo "
                                                    <strong>
                                                        <s class='text-stone-400'>"
                                                . $ITEM[STORE_COINS_PRICE] . " " . $site['paypal']['currency'] . "
                                                        </s>" .
                                                Discount($ITEM[STORE_COINS_PRICE], $site['coin_discount']) . " " . $site['paypal']['currency'] . "
                                                    </strong>
                                                   
                                                    <span class='badge badge-danger'>" . $site['coin_discount'] . "% Off</span>";
                                        else
                                            echo $ITEM[STORE_COINS_PRICE] . " " . $site['paypal']['currency'];
                                        ?>
                                    </div>
                                    <div class="mt-2">

                                        <?php if ($site['coin_bonus'] > 0)
                                            echo
                                            number_format(Bonus($ITEM[STORE_COINS_AMOUNT] + $ITEM['BonusCoins'], $site['coin_bonus']), 0, ',', '.') . " Coins <small>available</small>
                                                </div><div class= 'mt-2'>
                                                <small class='text-error'>
                                                    " . $ITEM[STORE_COINS_AMOUNT] . " + " . $ITEM['BonusCoins'] . " Bonus Coins (" . cal_percentage($ITEM['BonusCoins'], $ITEM[STORE_COINS_AMOUNT]) . "%) 
                                                </small></div><div class= 'mt-2'>
                                                <span class='badge badge-success  text-xs'>
                                                    " . $site['coin_bonus'] . "% Bonus
                                                </span>";
                                        else
                                            echo number_format($ITEM[STORE_COINS_AMOUNT], 0, ',', '.') . " + " . $ITEM['BonusCoins'] . " Bonus Coins (" . cal_percentage($ITEM['BonusCoins'], $ITEM[STORE_COINS_AMOUNT]) . "%)";
                                        ?>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2 w-32 justify-between py-2">
                                    <div class="w-12 h-12 mb-4 flex justify-end items-end w-full">
                                        <img class="w-full cursor-pointer" src="<?php echo $site['assets']['images']; ?>/coin.png" alt="" >
                                    </div>
                                    <div class="w-full text-center mb-3 pl-3">
                                        <footer class="product__footer">
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
                                        </footer>
                                    </div>
                                </div>
                                <!-- <button class='btn btn-sm btn-outline hover:text-white bg-transparent border-info hover:bg-transparent'>buy</button> -->

                            </div>

                        </div>

                    <?php } ?>
                </div>

            </div>

        </div>


        <div class="w-full">
            <?php include "includes/footer.php"; ?>
        </div>
    </div>
    <script>
        function enableBuyButton(coin_id){
            for(var item of $(".buy-button")){
                $(item).removeClass('hidden').addClass('hidden');
                if(item.id === ('buy-button-'+coin_id)){
                    $(item).removeClass('hidden')
                }
            }
        }
    </script>
<?php
} elseif ($site['coin_status'] == 'MAINTENANCE') { ?>
    <div class="row text-center text-light m-0 pt-5">
        <div class="col-md-12 mb-5 text-warning display-3">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="col-md-12 h1">
            THE COINS STORE IS CURRENTLY
        </div>
        <div class="col-md-12 h2 mb-4">
            <strong>UNDER MAINTENANCE</strong>
        </div>
        <div class="ml-auto mr-auto bg-custom-2 rounded-2 p-2">
            <b>COME BACK SOON</b>
        </div>
    </div>
    </div>
<?php } ?>
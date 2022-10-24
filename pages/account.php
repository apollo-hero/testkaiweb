<?php
$temp = $con->query('SET search_path TO accounts;');
$SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');

$USER = $SQL_USER_DATA[0];

$temp = $con->query('SET search_path TO web;');
$log = $con->select("activitylogweb", "*", ["log_user_id" => $_SESSION['USER_ID'], "log_description" => "Login", "ORDER" => ["log_date" => "DESC", "log_time" => "DESC"]]); // 
$last_login = $log[0];
$last_login_ip = $log[1]['log_ip'];
$current_login_ip = $log[0]['log_ip'];
?>
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
                    <h1>Account Panel</h1>
                </div>
                <div class="dmn-page-content">
                    <div class="row">
                        <div class="col-12">
                            <script>
                                $(document).ready(function() {
                                    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                                        localStorage.setItem('acc-panel-tab', $(e.target).attr('href'));
                                    });
                                    var activeTab = localStorage.getItem('acc-panel-tab');
                                    if (activeTab) {
                                        $('#acc-panel-tabs a[href="' + activeTab + '"]').tab('show');
                                    }
                                });
                            </script>
                            <ul class="nav nav-tabs" id="acc-panel-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="acc-info-tab" data-toggle="tab" href="#acc-info" role="tab" aria-controls="acc-info" aria-selected="true">Account Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="user-services-tab" data-toggle="tab" href="#user-services" role="tab" aria-controls="user-services" aria-selected="false">Buy Coins</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="character-services-tab" data-toggle="tab" href="#character-services" role="tab" aria-controls="character-services" aria-selected="false">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="wheel-fortune-tab" data-toggle="tab" href="#wheel-fortune" role="tab" aria-controls="wheel-fortune" aria-selected="false">wheel fortune</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade p-2 active show" id="acc-info" role="tabpanel" aria-labelledby="acc-info-tab">
                                    <table class="table dmn-account-table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Username</th>
                                                <td><?php echo $USER['Name'];?></td>
                                            </tr>
                                            <tr>
                                                <th>Email address</th>
                                                <td><?php echo $USER['Email'];?><a href="/?to=setting" class="btn btn-sm btn-primary float-right">Change</a></td>
                                            </tr>
                                            <tr>
                                                <th>Password</th>
                                                <td>******<a href="/?to=setting" class="btn btn-sm btn-primary float-right">Change</a></td>
                                            </tr>
                                            <tr>
                                                <th>Site Name</th>
                                                <td><?php echo $site['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Coins</th>
                                                <td><?php echo $USER['Coins']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Member Since</th>
                                                <td>
                                                    <?php echo explode(" ", $USER['CreatedAt'])[0]; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Last Login</th>
                                                <td>
                                                    <?php echo $last_login['log_date'] . " " . $last_login['log_time']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Last Login Ip</th>
                                                <td><?php echo $last_login_ip; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Current Ip</th>
                                                <td><?php echo $current_login_ip; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade p-2" id="user-services" role="tabpanel" aria-labelledby="user-services-tab">
                                    <?php if ($site['coin_status'] == 'MAINTENANCE') { ?>
                                        <div class="w-100 text-center text-light bg-danger p-3">
                                            <b><i class="fad fa-exclamation-circle"></i> The coins store is currently in maintenance mode.</b>
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
                                                                <button class="w-full btn btn-sm btn-warning buy-button " id='buy-button-<?php echo $ITEM[STORE_COINS_ID] ?>'>Donate</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade p-2" id="character-services" role="tabpanel" aria-labelledby="character-services-tab">
                                    <div id="top_list" class="rankings">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="rankings_select_DEFAULT" class="">
                                                    <?php
                                                    $sql_category_item = $con->select("categoriesshop", "*", ["visibility" => 1, "ORDER" => "categoriesid"]);
                                                    $i = 0;
                                                    foreach ($sql_category_item as $RELATED) {
                                                    ?>
                                                        <a href="javascript:;" class="btn btn-primary category" id="<?php echo $RELATED['categoriesid']; ?>"><?php echo $RELATED['name']; ?></a>
                                                    <?php } ?>
                                                        <a href="javascript:;" class="btn btn-primary all">all</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="rankings_content_DEFAULT" style="padding: 10px;">
                                            <script type="text/javascript">
                                                $(".category").on('click', function(){
                                                    var category_id = $(this).attr("id");console.log(category_id);
                                                    $('.shopitem > tr').css("display", "none");
                                                    $('.category-' + category_id).css("display", "table-row");
                                                }) 
                                                
                                                $(".all").on('click', function(){
                                                    $('.shopitem > tr').css("display", "table-row");
                                                }) 
                                            </script>

                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="table-responsive-sm">
                                                        <table class="table dmn-rankings-table table-striped">
                                                            <tbody class="shopitem">
                                                                <?php
                                                                $sql_related_item = $con->select("shopitems", "*", ["visibility" => 1, "ORDER" => "productid"]);
                                                                $i = 0;
                                                                foreach ($sql_related_item as $item) {
                                                                    $i++;
                                                                ?>
                                                                    <tr class="category-<?php echo $item['categoriesid']; ?>" >
                                                                        <td><?php echo $item['name']; ?></td>
                                                                        <td>
                                                                            <img src="./assets/img/items/<?php echo $item['vnum']; ?>.png" height="40px" width="40px"></td>
                                                                        <td class="text-center unit-pirce">
                                                                            <span class="font-bold"><?php echo $item['price']; ?></span>
                                                                            <span class="iconify text-warning" data-icon="majesticons:coins"></span>
                                                                        </td>
                                                                        <td>
                                                                            <select name="SelectCharacter" class="select select-bordered ml-2  focus:border-info focus:ring-0 p-0 charactor-<?php echo $i; ?>" style="background: transparent;">
                                                                                <option value="">Select character</option>
                                                                                <?php
                                                                                $temp = $con->query('SET search_path TO characters;');
                                                                                $sql_character = $con->select("characters", "*", ["AccountId" => $_SESSION['USER_ID'], "DeletedAt" => null]); //('SELECT "Name", "Id" FROM ' . CHAR . ' WHERE "AccountId" = ?');

                                                                                foreach ($sql_character as $CHARACTER) {
                                                                                    if (substr($CHARACTER[CHAR_NICK], 1, 7) != "DELETED") {
                                                                                        echo "<option value='" . $CHARACTER[CHAR_ID] . "' style='background:black;'>" . $CHARACTER[CHAR_NICK] . "</option>";
                                                                                    }
                                                                                } ?>
                                                                            </select>
                                                                        </td>
                                                                        <td price="<?php echo $item['price']; ?>">
                                                                            <input type="number" value="0" class="input input-bordered w-20 InputQty InputQty-<?php echo $i;?>" name="InputQty" min="1" max="99">
                                                                        </td>
                                                                        <td class="price" style="width:70px;"></td>
                                                                        <td>
                                                                        <a href="javascript:;" class="btn btn-sm btn-primary float-right btn-buy buy" pro_id="<?php echo $item['productid'];?>" itemid="<?php echo $i;?>">Buy</a>
                                                                        </td>
                                                                    </form>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-2 text-center" id="wheel-fortune" role="tabpanel" aria-labelledby="wheel-fortune-tab">
                                    <?php include 'roulette_new.php'; ?>
                                    <?php include 'roulette.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
$(".InputQty").on('change', function(){
    console.log("ss")
    var amount = parseInt($(this).val());
    if (amount < 1) {
        $(this).val(1);
        amount = 1;
    }
    
    var total = parseInt($(this).parent().attr('price')) * amount;console.log(total);
    $(this).parent().next().text(total);

    if (amount > 0) {

        $(".btn-buy").prop('disabled', false);

    } else {
        $(".btn-buy").attr('disabled', 'disabled');
    }

})
var coin = <?php echo $USER['Coins']; ?>;
$(document).ready(function() {
         $(".buy").on('click',function() {

            var total = parseInt($(this).parent().prev().text());
            // var total = parseInt($("#buy-price").val()) * amount;
            var itemid = $(this).attr("itemid");
            var amount = $(".InputQty-" + itemid).val();
            var character = $(".charactor-" + itemid ).val();
            var _error = false;
            if (coin <= 0 || total > coin) {
            //    $.toast({
            //       heading: 'Validation Error',
            //       icon: 'error',
            //       text: "Not enough coin",
            //       position: 'top-right',

            //    });
            notice('error', 'error', 'Not enough coin');
               _error = true;
               return;
            }
            if (amount <= 0) {
            //    $.toast({
            //       heading: 'Validation Error',
            //       icon: 'error',
            //       text: "Amount should to be greater or equal than 1",
            //       position: 'top-right',

            //    });
                notice('error', 'error', "Amount should to be greater or equal than 1");
               _error = true;
               return;
            }

            if (character == "") {
            //    $.toast({
            //       heading: 'Validation Error',
            //       icon: 'error',
            //       text: "Please select your character",
            //       position: 'top-right',

            //    });
                notice('error', 'error', "Please select your character");
               _error = true;
               return;
            }

            var data = {
               InputItemID: $(this).attr('pro_id'),
               InputItemQuantity: amount,
            }

            if (!_error)
               $.ajax({
                  type: 'POST',
                  url: 'consult?from=store&&target=AddToCart',
                  data,
               }).done(function(result) {
                  $.ajax({
                     type: 'POST',
                     url: 'consult?from=store&&target=Checkout',
                     data: {
                        "SelectCharacter": character,
                        "inputTotal": total,
                     },
                  }).done(function(rs) {

                     var result = JSON.parse(rs)[0];

                     if (result.success) {

                        // $.toast({
                        //    heading: 'Success',
                        //    icon: 'success',
                        //    text: result.message,
                        //    position: 'top-right',
                        // });
                        notice('success', 'success', result.message);
                        setTimeout(() => {
                           location.reload();
                        }, 3000);
                     } else {
                        // $.toast({
                        //    heading: 'Failed',
                        //    icon: 'error',
                        //    text: result.message,
                        //    position: 'top-right',

                        // });
                        notice('error', 'error', result.message);
                     }
                  }).fail(function(result) {
                    //  $.toast({
                    //     heading: 'Failed',
                    //     icon: 'error',
                    //     text: 'whoops! Not bought,',
                    //     position: 'top-right',

                    //  });
                    notice('error', 'error', "whoops! Not bought");
                  });

               }).fail(function(data) {
                  console.log(data);
               });

         });
      });

</script>
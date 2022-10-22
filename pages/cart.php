<?php echo "<title>" . $NTFY . $site['name'] . " - Cart" . "</title>";

// if ($NTFY > 0) { 


$sql_cart = $con->select("cart", "*", ["accountid" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . CART . ' WHERE ' . CART_ACCOUNT_ID . ' = ?');
$TOTAL_ITEM = 0;
$TOTAL = 0;
// if($NTFY>0)
if (count($sql_cart) > 0) { ?>
    <script>
        $(document).ready(function($) {
            $("#checkout").click(function() {
                $(".bye").prop('disabled', true);
            });

            $('.bye').mask('00');
        });
    </script>
    <div class="flex flex-col h-full  gap-2">

        <div class="flex flex-col gap-2 justify-center items-center w-full bg-base-300 rounded-lg ">
            <div class="flex gap-2 p-4 w-full items-center ">
                <span class="iconify w-6 h-6" data-icon='bi:cart-check'></span>
                <h3 class="text-lg font-bold">You have <?php echo count($sql_cart); ?> Items</h3>
            </div>
            <div class="grid gap-2 grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-6 mb-4">
                <?php

                foreach ($sql_cart as $CART) {
                    $sql_item = $con->select("shopitems", "*", ["productid" => $CART["productid"]]);
                    foreach ($sql_item as $ITEM) {
                        $TOTAL_ITEM = $ITEM[STORE_ITEMS_PRICE] * $CART["item_quantity"];

                        $sql_store_items_title = $con->select("item", "*", ["vnum" => $ITEM[STORE_ITEMS_VNUM]]); //('SELECT * FROM ' . ITEM . ' WHERE ' . ITEM_VNUM . ' = ?');

                        foreach ($sql_store_items_title as $TITLE) { ?>

                            <div class="p-3 border border-base-100 rounded-lg hover:border-info w-40">
                                <div class="w-full h-full items-center flex gap-2 justify-between flex-col">
                                    <div class="col-md-1">
                                        <img src="./assets/img/items/<?php echo $ITEM[STORE_ITEMS_VNUM]; ?>.png" class="w-50 rounded">
                                    </div>
                                    <div class="mb-3 col-md-5">
                                        <h5>
                                            <a href="store?item_id=<?php echo $ITEM[STORE_ITEMS_ID]; ?>">
                                                <?php echo $TITLE[ITEM_NAME]; ?>
                                            </a>
                                        </h5>
                                    </div>
                                    <?php if ($ITEM[STORE_ITEMS_TYPE] != 1) { ?>
                                        <div class="col-md-2">
                                            <div class="flex gap-2 items-center justify-between">
                                                <div class="">
                                                    <label for="InputQty">Qty</label>
                                                </div>
                                                <div class="">
                                                    <form action="consult?from=store&&target=EditCart&&id=<?php echo $CART["cartid"]; ?>" method="POST" id="FormUpdateQty-<?php echo $CART["cartid"] ?>" name="FormUpdateQty">
                                                        <input type="number" class="input input-sm input-borderd w-20 bye" name="InputQty" id="InputQty" value="<?php echo $CART["item_quantity"]; ?>" min="1" max="99" style="padding: 0px 5px;" onchange="submitform('#FormUpdateQty-<?php echo $CART["cartid"]; ?>', 'FormUpdateQty'); loading();">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-2">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label for="InputQty">Qty</label>
                                                </div>
                                                <div class="mb-3 col-md-8">
                                                    <?php echo $CART["item_quantity"]; ?>
                                                    <input type="hidden" name="InputQty" id="InputQty" value="<?php echo $CART["item_quantity"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="flex w-full ">
                                        <h5>Price <?php echo number_format($ITEM[STORE_ITEMS_PRICE], 0, ',', '.') . " C"; ?><h5>
                                    </div>
                                    <div class="w-full flex justify-center">

                                        <form name="FormRemoveItemCart" id="FormRemoveItemCart-<?php echo $CART["cartid"]; ?>" action="consult?from=store&&target=RemoveItemCart" method="POST">
                                            <input type="hidden" name="InputRemoveItemCart" name="InputRemoveItemCart" value="<?php echo $CART["cartid"]; ?>">
                                            <button type="button" onclick="submitform('#FormRemoveItemCart-<?php echo $CART["cartid"]; ?>', 'remove_cart'); loading();" class="btn btn-sm ?>">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div><?php
                                }
                            }
                            $TOTAL += $TOTAL_ITEM;
                        } ?>
            </div>

            <div class="w-full flex justify-center mb-4 ">
                <div class="col-md-4 bg-base-100 rounded-lg flex-col flex gap-4 border-info border p-4">
                    <form name="FormGoToCheckout" id="FormGoToCheckout" action="consult?from=store&&target=Checkout" method="POST" class="flex">
                        <input type="hidden" name="inputTotal" value="<?php echo $TOTAL; ?>">
                        <button type="button" class="btn <?php echo $site['style']['btn-p']; ?> w-100" id="checkout" onclick="submitform('#FormGoToCheckout', 'checkout'); loading();">Buy Now</button>
                        <select name="SelectCharacter" class="select select-bordered ml-2 " id="__BVID__220">
                            <option value="">Select character</option>
                            <?php
                            $temp = $con->query('SET search_path TO characters;');
                            $sql_character = $con->select("characters", "*", ["AccountId" => $_SESSION['USER_ID'], "DeletedAt" => null]); //('SELECT "Name", "Id" FROM ' . CHAR . ' WHERE "AccountId" = ?');

                            foreach ($sql_character as $CHARACTER) {
                                if (substr($CHARACTER[CHAR_NICK], 1, 7) != "DELETED") {
                                    echo "<option value='" . $CHARACTER[CHAR_ID] . "'>" . $CHARACTER[CHAR_NICK] . "</option>";
                                }
                            } ?>
                        </select>
                    </form>

                    <div class="flex jusity-between items-center w-full  p-2">
                        <div class="flex-0">
                            <h5>Total:</h5>
                        </div>
                        <div class="flex-1 text-right">
                            <h5><?php echo number_format($TOTAL, 0, ',', '.') . " C"; ?></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full   ">
            <?php include "includes/footer.php"; ?>
        </div>
    </div>
<?php } else { ?>
    <div class="text-center p-5 text-light h-full flex justify-center flex-col gap-4 items-center justify-between">
        <div class="flex w-full flex-col">
            <h3 class="text-lg mt-10">You don't have any items in your cart. Let's get shopping!</h3>
            <div class="w-2/3 sm:w-1/2 md:w-1/3 lg:w-1/4">
                <img src='./assets/img/empty_cart.svg' alt='Empty cart'></img>
            </div>
            <a href="store" class="btn btn-wide ?> m-4">Start Shopping</a>
        </div>
        <div class="w-full  ">
            <?php include "includes/footer.php"; ?>
        </div>
    </div>
<?php } ?>
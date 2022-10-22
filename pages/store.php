<?php echo "<title>" . $NTFY . $site['name'] . " - Store" . "</title>"; ?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&amp;display=swap" rel="stylesheet">

<?php if ($site['status_store'] == 'MAINTENANCE') { ?>
   <div class="row text-center text-light m-0 pt-5">
      <div class="col-md-12 mb-5 text-warning display-3">
         <i class="fas fa-exclamation-triangle"></i>
      </div>
      <div class="col-md-12 h1">
         THE SHOP IS CURRENTLY
      </div>
      <div class="col-md-12 h2 mb-4">
         <strong>UNDER MAINTENANCE</strong>
      </div>
      <div class="ml-auto mr-auto bg-custom-2 rounded-2 p-2">
         <b>COME BACK SOON</b>
      </div>
   </div>
<?php } else {
   $sql_cart = ($con->select("cart", "*", ["accountid" => $_SESSION['USER_ID']]));

?>
   <!--<div class="row text-center text-light m-0 pt-5">
	  
      <!--<div class="col-md-12 h1">We're going to put the shop under maintenance to improve the code to give you a better experience.</div>
	  <!--</div>-->
   <script>
      fetch('loadShopFiles.php')
         .then(response => response.text())
         .then(text => document.getElementById('items').innerHTML = text);
   </script>

   <div class="w-100 h-100 justify-content-between flex flex-column gap-2">

      <div class="flex gap-2 w-100 p-2 pt-0 justify-center store-block-main-sp">
         <!-- pc filter -->
         <div class="w-52 hidden sm:flex store-filter-sidebar-sp">

            <div class="w-100 bg-base-300 rounded-lg p-2">

               <div class="card-body filterContainer">
                  <h4 class="card-title">Filters</h4>
                  <!---->

                  <h5 class="mb-1">Categories</h5>
                  <fieldset class="form-group" id="__BVID__142">
                     <!---->
                     <div>
                        <div role="group" tabindex="-1" class="bv-no-focus-ring" id="__BVID__143">
                           <?php
                           $sql_category_item = $con->select("categoriesshop", "*", ["visibility" => 1, "ORDER" => "categoriesid"]);
                           $i = 0;
                           foreach ($sql_category_item as $RELATED) {
                           ?>
                              <div class="custom-control items-center flex mb-1 gap-1">
                                 <input name="ckbox" type="radio" class="radio radio-sm rounded-sm radio-primary" onchange="load(this.value,this.checked)" value="<?php echo $RELATED['categoriesid']; ?>" id="__BVID__143_BV_option_<?php echo $RELATED['categoriesid']; ?>" name="__BVID__143"><label class="custom-control-label" for="__BVID__143_BV_option_<?php echo $RELATED['categoriesid']; ?>"><span><?php echo $RELATED['name']; ?></span></label>
                              </div>
                           <?php } ?>
                        </div>
                        <!---->
                        <!---->
                        <!---->
                     </div>
                  </fieldset>
                  <!--
                  <div class="flex store-filter-sidebar-btns-sp">
                     <button type="button" class="btn btn-sm bg-transparent hover:bg-transparent hover:text-white btn-info" onclick="reset();"> Reset Filter </button>
                     <button type="button" class="btn btn-sm" onclick="window.location.reload();">
                        Reload Page
                     </button>
                  </div>
                           -->
               </div>
               <!---->
               <!---->
            </div>

         </div>
         <div class="flex flex-1 w-100 h-auto flex-column gap-2 ">
            <!-- mobil filter -->
            <div class="flex sm:hidden w-100 px-4">
               <div class="dropdown">
                  <button tabindex="0" class="btn px-10 hover:text-white btn-outline bg-transparent hover:bg-transparent border-info hover:border-info">
                     Filter
                  </button>
                  <div class="dropdown-content menu bg-base-100 w-48">
                     <div class="card-body filterContainer max-h-100 overflow-auto">
                        <h4 class="card-title">Filters</h4>
                        <!---->

                        <h5 class="mb-1">Categories</h5>
                        <fieldset class="form-group" id="__BVID__142">
                           <!---->
                           <div>
                              <div role="group" tabindex="-1" class="bv-no-focus-ring" id="__BVID__143">
                                 <?php
                                 $sql_category_item = $con->select("categoriesshop", "*", ["visibility" => 1, "ORDER" => "categoriesid"]);
                                 $i = 0;
                                 foreach ($sql_category_item as $RELATED) {
                                 ?>

                                    <div class="custom-control items-center flex mb-1 gap-1">
                                       <input type="radio" name="chk" class="radio radio-sm rounded-sm radio-primary ckbox" onchange="load(this.value,this.checked)" value="<?php echo $RELATED['categoriesid']; ?>" id="__BVID__143_BV_option_<?php echo $RELATED['categoriesid']; ?>"><label class="custom-control-label" for="__BVID__143_BV_option_<?php echo $RELATED['categoriesid']; ?>"><span><?php echo $RELATED['name']; ?></span></label>
                                    </div>
                                 <?php } ?>
                              </div>
                              <!---->
                              <!---->
                              <!---->
                           </div>
                        </fieldset>

                        <div class="flex flex-column gap-2">
                           <button type="button" class="btn btn-sm bg-transparent hover:bg-transparent hover:text-white btn-info" onclick="reset();"> Reset Filter </button>
                           <button type="button" class="btn btn-sm" onclick="window.location.reload();">
                              Reload Page
                           </button>
                           <!---->
                        </div>
                     </div>
                  </div>
               </div>


            </div>

            <div class="flex flex-1 w-100">
               <div class="flex flex-column w-100" id="items">

               </div>
            </div>
         </div>
      </div>
      <div class="w-100  ">
         <?php include "includes/footer.php"; ?>
      </div>
   </div>

   <!-- buy modal -->
   <input type="checkbox" id="buy-modal" class="modal-toggle" />
   <div class="modal ">
      <div class="modal-box relative ">
         <label for="buy-modal" class="btn btn-ghost btn-sm btn-circle absolute right-2 top-2 z-50">✕</label>
         <div class="flex  bg-base-300 w-100 absolute -ml-6 -mt-6 rounded-t-lg p-6 pb-4">
            <h3 class="text-lg">Do you want to buy?</h3>
         </div>

         <div class="flex flex-column gap-4 items-center p-4 mt-10">

            <div class="flex gap-4 w-100 items-center ">
               <input type='hidden' id='buy-product-id' />
               <div class="">
                  <img id='buy-img' height="48" width="48" class="w-[48px] h-[48px]" style="max-width:48px"></img>
               </div>
               <div class="flex flex-column gap-4">
                  <h3 id="buy-name" class="text-lg"></h3>
                  <label class="flex gap-2 ">
                     <img src="<?php echo $site['assets']['images']; ?>/coin.png" alt='C' class="w-8 h-8"></img>
                     <input type='hidden' id='buy-price'></input>
                     <h3 id='total-price' class="text-right"></h3>


                  </label>
                  <p class="text-sm text-stone-400" id='buy-description'>

                  </p>
               </div>

               <!-- <p id='buy-description'></p> -->

            </div>

            <div class=" border-b border-base-300 mb-2 flex  w-100 p-2 justify-center">

            </div>
            <form name="FormGoToCheckout" id="FormGoToCheckout" action="consult?from=store&&target=Checkout" method="POST">
               <input type="hidden" name="inputTotal" value="">
               <div class="flex gap-2 items-center justify-content-between">
                  <select name="SelectCharacter" class="select select-bordered ml-2  focus:border-info focus:ring-0 " id="__BVID__220" onchange="checkTheBuyButton()">
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
                  <!-- <form action="consult?from=store&&target=EditCart&&id=<?php echo $CART["cartid"]; ?>" method="POST" id="FormUpdateQty" name="FormUpdateQty"> -->
                  <input type="number" value="0" class="input input-bordered w-20" name="InputQty" id="InputQty" min="1" max="99" onchange="caculatePrice()">
                  <!-- </form> -->
                  <!-- <input type="number" id='buy-amount' value="1" class="input input-bordered w-20" /> -->
                  <button class="btn btn-info btn-buy" disabled>Buy this Item</button>

               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      var form;
      var formData
      var filters = [];
      var json_carts = [];
      var coin = <?php echo $USER['Coins']; ?>

      <?php
      if (count($sql_cart) > 0) {
      ?>
         json_carts = JSON.parse(`<?php echo json_encode($sql_cart); ?>`);

      <?php

      }
      ?>

      function checkTheBuyButton() {

         if ($("[name='SelectCharacter']").val() != '') {
            caculatePrice();
         }

      }
      // when change the amount.
      function caculatePrice() {

         var amount = parseInt($("#InputQty").val());
         if (amount < 1) {
            $("#InputQty").val(1);
            amount = 1;
         }
         var total = parseInt($("#buy-price").val()) * amount;
         $("#inputTotal").text(Math.max(parseInt($("#buy-price").val()), total));
         $("#total-price").text(Math.max(parseInt($("#buy-price").val()), total));


         if (amount > 0) {

            $(".btn-buy").prop('disabled', false);


         } else {
            $(".btn-buy").attr('disabled', 'disabled');
         }

      }
      $(document).ready(function() {
         $("#FormGoToCheckout").submit(function(e) {

            var amount = parseInt($("#InputQty").val());
            var total = parseInt($("#buy-price").val()) * amount;
            var character = $("[name='SelectCharacter']").val();
            var _error = false;
            e.preventDefault();
            if (coin <= 0 || total > coin) {
               $.toast({
                  heading: 'Validation Error',
                  icon: 'error',
                  text: "Not enough coin",
                  position: 'top-right',

               });
               _error = true;
               return;
            }
            if (amount <= 0) {
               $.toast({
                  heading: 'Validation Error',
                  icon: 'error',
                  text: "Amount should to be greater or equal than 1",
                  position: 'top-right',

               });
               _error = true;
               return;
            }

            if (character == "") {
               $.toast({
                  heading: 'Validation Error',
                  icon: 'error',
                  text: "Please select your character",
                  position: 'top-right',

               });
               _error = true;
               e.preventDefault();
               return;
            }

            var data = {
               InputItemID: $("#buy-product-id").val(),
               InputItemQuantity: $("#InputQty").val(),
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

                        $.toast({
                           heading: 'Success',
                           icon: 'success',
                           text: result.message,
                           position: 'top-right',
                        });
                        setTimeout(() => {
                           location.reload();
                        }, 3000);
                     } else {
                        $.toast({
                           heading: 'Failed',
                           icon: 'error',
                           text: result.message,
                           position: 'top-right',

                        });
                     }
                  }).fail(function(result) {
                     $.toast({
                        heading: 'Failed',
                        icon: 'error',
                        text: 'whoops! Not bought,',
                        position: 'top-right',

                     });
                  });

               }).fail(function(data) {
                  console.log(data);
               });

         });
      });


      function ask(ele) {
         // init form
         var _cart_id = '';
         var data = json_carts.filter((data) => {
            return ((data.productid) == $(ele).attr('data-id'))
         });
         if (data.length > 0) {
            _cart_id = data[0].cartid;
            $("#total-price").text(data[0].amount * data[0].price);
            $("#InputQty").val(data[0].amount);
         } else {

            $("#InputQty").val(1);
         }
         $("#buy-img").attr('src', $(ele).attr('data-img'));
         $("#buy-price").val($(ele).attr('data-price'));
         $("#total-price").text($(ele).attr('data-price'));
         $("#buy-product-id").val($(ele).attr('data-id'));

         $("#buy-name").text($(ele).attr('data-name'));
         $("#buy-description").text("");
         $("#buy-description").text($(ele).attr('data-title'));
         $('#buy-modal')[0].checked = true;

      }

      function reset() {
         var cbarray = document.getElementsByClassName("ckbox");
         for (var i = 0; i < cbarray.length; i++) {
            cbarray[i].checked = false;
         }
         filters = [];
         load(0, 0);
      }

      function load(value, checked) {
         filters = [];
         if (value != 0) {
            if (checked) {
               if (filters.indexOf(value) == -1)
                  filters.push(value);
            } else {
               filters = filters.filter((f) => f != value);
            }
         }

         if (Array.isArray(filters) && filters.length > 0) {
            fetch('loadShopFiles.php', {
                  method: 'POST',
                  headers: {
                     'Content-Type': 'application/json'
                  },
                  body: JSON.stringify({
                     // your expected POST request payload goes here
                     categorie: filters
                  })
               })
               .then(response => response.text())
               .then(text => document.getElementById('items').innerHTML = text);
         } else {
            fetch('loadShopFiles.php')
               .then(response => response.text())
               .then(text => document.getElementById('items').innerHTML = text);
         }
      }
   </script>
<?php } ?>
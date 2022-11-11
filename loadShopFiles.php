<?php
include './php/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $data = json_decode(file_get_contents('php://input'), true);
   if ($data['categorie'] && count(($data['categorie'])) > 0) {
      $sql = "select * from shopitems where visibility = 1 and categoriesid in (" . implode(",", ($data['categorie'])) . ") order by productid";
    
      $sql_related_item = $con->query($sql)->fetchAll();

   }
} else {
   $sql_related_item = $con->select("shopitems", "*", ["visibility" => 1, "ORDER" => "productid"]);
}
if ($sql_related_item) {
?><div class="flex flex-col w-full p-4 bg-base-300 rounded-lg ">
      <div class="flex p-2 border-b border-base-100 mb-2">
         <!-- <?php echo (count($sql_related_item) . " items found"); ?> -->
         <h3 class="text-lg text-stone-400 flex gap-2 p-2 x"><a href = '/' class="text-info">Home</a>/<a href = '/coins' class="text-info">Buy Items</a></h3>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 ">
         <?php
         $i = 0;
         foreach ($sql_related_item as $RELATED) {
            $i++;
            if ($i > 18)
               break;
         ?>
            <div class="flex h-48 items-center flex-col p-2 rounded-lg gap-4 border border-base-100 hover:border-info cursor-pointer ">
               <form id="submitForm" name="FormAddtoCart" class="h-full" method="POST" data-autosubmit>
                  <a data-img='./assets/img/items/<?php echo $RELATED['image']; ?>.png' data-name='<?php echo $RELATED['name']; ?>' data-price='<?php echo ($RELATED['price']); ?>' data-id='<?php echo ($RELATED['productid']); ?>' onclick="ask(this)" class="flex h-full justify-between items-center flex-col " data-title ='<?php echo ($RELATED['description']); ?>' >
                     <img src="./assets/img/items/<?php echo $RELATED['image']; ?>.png" height="40px" width="40px">
                     <div class="items-center flex gap-2 justify-center py-2 border-b border-gray-700 mb-2">
                        <span class="font-bold "><?php echo $RELATED['price']; ?></span>
                        <span class="iconify text-warning" data-icon="majesticons:coins"></span>
                     </div>
                     <h3 name="name"> <?php echo $RELATED['name']; ?> </h3>
                     <input type="hidden" name="InputItemID" value="<?php echo $RELATED['productid']; ?>">
                     <div type="hidden" class="col-2"><input type="hidden" type="number" name="InputItemQuantity" min="0" class="form-control" id="__BVID__221" value="1"></div>
                  </a>
               </form>
            </div>

         <?php } ?>
      </div>

   </div>

<?php } ?>
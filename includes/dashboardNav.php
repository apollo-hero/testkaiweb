    <?php if (!isset($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == NULL) { ?>
    <?php } else {

        $temp = $con->query('SET search_path TO accounts;');
        $SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');

        $USER = $SQL_USER_DATA[0];
        $temp = $con->query('SET search_path TO web;');
        $carts = $con->select("cart", "*", ["accountid" => $_SESSION['USER_ID']]); // 

    ?>
        <!-- Dashboard header -->
        <div class="flex w-full h-20 p-2  ">
            <div class="flex px-2 gap-2 h-full p-2 justify-between  w-full  bg-base-300 rounded-lg items-center">
                <div class="flex justify-center items-center gap-2 p-2">
                    <label for='sidebar-drawer' class="btn md:hidden  btn-ghost btn-circle p-0">
                        <span class="iconify w-8 h-8" data-icon="charm:menu-hamburger"></span>
                    </label>
                    <a href='/settings' class="btn  btn-ghost btn-circle p-0">
                        <span class="iconify w-8 h-8" data-icon="gg:profile"></span>
                    </a>
                    <a href='/store' class="btn btn-ghost btn-circle">
                        <span class="iconify w-8 h-8" data-icon="entypo:shop"></span>
                    </a>
                    <a href='/coins' class="btn btn-ghost btn-circle">
                        <span class="iconify w-8 h-8" data-icon="majesticons:coins-line"></span>
                    </a>
                </div>
                <div class="flex gap-2">
                    <div class="flex flex-col text-right  justify-center">
                        <h3 class="text-lg font-bold"><?php echo $USER['Name']; ?></h3>
                        <h3 class=' text-stone-400 flex items-center '><?php echo $USER['Coins']; ?>
                            <span class="iconify text-yellow-500" data-icon="majesticons:coins-line"></span>
                        </h3>
                    </div>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" class="btn  m-1 flex p-0  btn-circle indicator h-12 w-12">
                            <img src='./assets/img/avatar.png' alt='A' class="rounded-full  w-12 h-12 "></img>
                         
                        </div>
                        <ul tabindex="0" class=" mt-1  dropdown-content menu p-2 shadow-lg bg-base-300 rounded-sm w-52">
                            <?php
                            if ($USER['Authority'] == 30000) {
                            ?>
                                <li><a href='/admin'>Admin</a></li>
                            <?php
                            }
                            ?>
                            <li><a href='/settings'>Setting</a></li>
                            <li><a href='/logout'>Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>

  
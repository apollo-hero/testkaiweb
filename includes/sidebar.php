<div class=" flex flex-col flex-0 w-64  " id='side-navbar'>
    <div class="flex flex-col p-2 px-4 gap-2 bg-base-300  min-h-screen  w-full   side-menu-bar ">
        <div class="flex w-full mb-4">
            <?php include('./components/logo.php'); ?>
        </div>
        <!-- PROFILE -->
        <h3 class="text-stone-400 mb-2 mt-4 text-sm uppercase"><?php echo $site['name']; ?></h3>
        <a href="settings" class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer menu-action-item <?php echo (($TO == 'settings' || $TO == 'home') ? 'menu-active' : ''); ?>">
            <span class="iconify font-bold" data-icon="ep:setting"></span>
            <h3>Settings</h3>
        </a>
        <!-- <a href="gamerule" class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer menu-action-item <?php echo (($TO == 'gamerule' ) ? 'menu-active' : ''); ?>">
            <span class="iconify font-bold" data-icon="akar-icons:book-close"></span>
            <h3>Game Rule</h3>
        </a> -->
        <a href="<?php echo $link_url['site_link_support']; ?>" class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer menu-action-item <?php echo (($TO == 'support'  ) ? 'menu-active' : ''); ?>">
            <span class="iconify font-bold" data-icon="ci:help-circle-outline"></span>
            <h3>Suport</h3>
        </a>
        <!-- SHOP -->
        <h3 class="text-stone-400 mb-2 mt-4 text-sm uppercase"><?php echo $site['name']; ?> SHOP </h3>
        <a href="/store" class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer  <?php echo ($TO == 'store' ? 'menu-active' : ''); ?>  menu-action-item">
            <span class="iconify font-bold" data-icon="entypo:shop"></span>
            <h3>Store</h3>
        </a>
        <a href='/coins' class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer <?php echo ($TO == 'coins' ? 'menu-active' : ''); ?> menu-action-item">
            <span class="iconify font-bold" data-icon="majesticons:coins-line"></span>
            <h3>Buy Coins</h3>
        </a>
        <!-- Link -->
        <h3 class="text-stone-400 mb-2 mt-4 text-sm uppercase"><?php echo $site['name']; ?> Link </h3>

        <a class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer menu-action-item " href="<?php echo $link_url['site_social_discord']; ?>">
            <span class="iconify font-bold" data-icon="bi:discord"></span>
            <h3>Discord</h3>
        </a>
        <a  target= "_blank" class="flex gap-4 p-2 hover:pl-4 items-center   duration-300 font-bold transition-all cursor-pointer menu-action-item " href="<?php echo $link_url['site_download_client']; ?>">
            <span class="iconify font-bold" data-icon="bx:cloud-download"></span>
            <h3>Download Client</h3>
        </a>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".menu-action-item").on("click", function(e) {
            $(".menu-action-item").map((index, item) => {
                $(item).removeClass('menu-active');
                if (e.target === item || item.contains(e.target))
                    $(item).removeClass('menu-active').addClass('menu-active');
            });
            console.log(e);
        });
    });
</script>
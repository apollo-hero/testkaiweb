<footer class="p-4 w-full bg-base-300" id="footer" style = "height:60px" >
    <div class="flex w-full flex-col sm:flex-row items-center justify-center sm:justify-between ">
        <span class="hidden sm:flex">Copyright &copy; <?php echo $site['name']; ?> <?php echo date("Y"); ?> All rights reserved | News & Info Design Is Inspired</span>
        <div class="flex gap-2">
            <a class="text-info" href='<?php echo $link_url['site_link_ragezone'] ; ?>' target="_blank"><span class="iconify" data-icon=''></span>Ragezone</a>-
            <a class="text-info" href='<?php echo $link_url['site_link_elitepvpers'] ; ?>' target="_blank"><span class="iconify" data-icon=''></span>Elitepvpers</a>-
            <a class="footer-info" href='<?php echo $link_url['site_link_inforge'] ; ?>' target="_blank"><span class="iconify" data-icon=''></span>Inforge</a>-
            <a class="text-info" href='<?php echo $link_url['site_social_discord']; ?>' target="_blank"><span class="iconify" data-icon=''></span>Discord</a>
        </div>
    </div>
</footer>
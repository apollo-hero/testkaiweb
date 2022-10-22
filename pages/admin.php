                            <?php
                            
                            if($_SESSION['USER_RANGE'] >= ROLE_OWNER){
                                
                                if( isset($_GET['card'])) { $CARD = $_GET['card']; echo "<title>" . $NTFY . $site['name'] . " - Admin - " . FirstMayus($CARD) . "</title>";

                                    if ($CARD == 'general') { 

                                        if (isset($_GET['tab'])) {

                                            $SITE_TAB = ""; $SITE_PAG = "";
                                            $DOWN_TAB = ""; $DOWN_PAG = "";
                                            $SSAL_TAB = ""; $SSAL_PAG = "";
                                            $PAYM_TAB = ""; $PAYM_PAG = "";
                                            $STYL_TAB = ""; $STYL_PAG = "";

                                            if($_GET['tab'] == '1') {
                                                $SITE_TAB = "active";
                                                $SITE_PAG = "active show";
                                            }
                                            elseif ($_GET['tab'] == '2') {
                                                $DOWN_TAB = "active";
                                                $DOWN_PAG = "active show";
                                            }
                                            elseif ($_GET['tab'] == '3') {
                                                $SSAL_TAB = "active";
                                                $SSAL_PAG = "active show";
                                            }
                                            elseif ($_GET['tab'] == '4') {
                                                $PAYM_TAB = "active";
                                                $PAYM_PAG = "active show";
                                            }
                                            elseif ($_GET['tab'] == '5') {
                                                $STYL_TAB = "active";
                                                $STYL_PAG = "active show";
                                            }

                                        }else{

                                            $SITE_TAB = "active"; $SITE_PAG = "active show";
                                            $DOWN_TAB = ""; $DOWN_PAG = "";
                                            $SSAL_TAB = ""; $SSAL_PAG = "";
                                            $PAYM_TAB = ""; $PAYM_PAG = "";
                                            $STYL_TAB = ""; $STYL_PAG = "";
                                        }

                                        ?>
                                        <div class="row m-0 pt-3 pb-3">
                                            <div class="col-md-2 mb-3">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link <?php echo $SITE_TAB; ?>" id="v-pills-site-tab" data-toggle="pill" href="#v-pills-site" role="tab" aria-controls="v-pills-site" aria-selected="true">Site</a>
                                                    <a class="nav-link <?php echo $DOWN_TAB; ?>" id="v-pills-downloads-tab" data-toggle="pill" href="#v-pills-downloads" role="tab" aria-controls="v-pills-downloads" aria-selected="false">Downloads</a>
                                                    <a class="nav-link <?php echo $SSAL_TAB; ?>" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pills-social" aria-selected="false">Social</a>
                                                    <a class="nav-link <?php echo $PAYM_TAB; ?>" id="v-pills-payments-tab" data-toggle="pill" href="#v-pills-payments" role="tab" aria-controls="v-pills-payments" aria-selected="false">Payments</a>
                                                    <a class="nav-link <?php echo $STYL_TAB; ?>" id="v-pills-style-tab" data-toggle="pill" href="#v-pills-style" role="tab" aria-controls="v-pills-style" aria-selected="false">Style</a>
                                                </div>
                                            </div>
                                            <div class="col-md-10 text-light">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade <?php echo $SITE_PAG; ?>" id="v-pills-site" role="tabpanel" aria-labelledby="v-pills-site-tab">
                                                        <div class="form-row">
                                                            <div class="col-md-8 px-3 pb-3">
                                                                <form name="FormSite" enctype="multipart/form-data" action="consult?from=admin&&target=update&&ref=site&&ext=form" method="POST">
                                                                    <div class="col-md-6">
                                                                        <h4><i class="fas fa-cog"></i> General</h4>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteName">Site name</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteName" name="InputSiteName" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['name']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteDomain">Domain</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteDomain" name="InputSiteDomain" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['domain']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteEmail">E-Mail</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="email" id="InputSiteEmail" name="InputSiteEmail" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['email']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputServerIP">Server IP</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputServerIP" name="InputServerIP" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['server']['IP']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteReCaptcha">reCaptcha Site Key</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteReCaptcha" name="InputSiteReCaptcha" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['captcha']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteReCaptcha">reCaptcha Site Secret Key</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteReCaptchaSecret" name="InputSiteReCaptchaSecret" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['captcha_secret']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6 text-center mb-3">
                                                                            <h4><i class="fas fa-image"></i> Logo</h4>
                                                                            <img src="<?php echo $site['logo']['path']; ?>" class="w-50 rounded p-3">
                                                                            <label for="InputLogo" class="btn <?php echo $site['style']['btn-s'] ?> w-100">
                                                                                <i class="fad fa-plus-circle"></i> UPLOAD
                                                                            </label>
                                                                            <input name="InputLogo" id="InputLogo" class="d-none" type="file" accept="image/png, image/jpeg, image/jpg">
                                                                        </div>
                                                                        <div class="col-md-6 text-center mb-3">
                                                                            <h4><i class="fas fa-image"></i> Favicon</h4>
                                                                            <img src="<?php echo $site['favicon']['path']; ?>" class="w-50 rounded p-3">
                                                                            <label for="InputFavicon" class="btn <?php echo $site['style']['btn-s'] ?> w-100">
                                                                                <i class="fad fa-plus-circle"></i> UPLOAD
                                                                            </label>
                                                                            <input name="InputFavicon" id="InputFavicon" class="d-none" type="file" accept="image/png, image/jpg, image/jpeg, image/ico">
                                                                        </div>
                                                                        <div class="col-md-12 text-center mb-3">
                                                                            <h4><i class="fas fa-image"></i> Background</h4>
                                                                            <img src="<?php echo $site['background']['path']; ?>" class="w-100 rounded my-3">
                                                                            <label for="InputBackground" class="btn <?php echo $site['style']['btn-s'] ?> w-100">
                                                                                <i class="fad fa-plus-circle"></i> UPLOAD
                                                                            </label>
                                                                            <input name="InputBackground" id="InputBackground" class="d-none" type="file" accept="image/png, image/jpg, image/jpeg">
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <h4><i class="fas fa-clock"></i> Time</h4>
                                                                    <hr>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="SelectSiteTimeZone">Time zone</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <select id="SelectSiteTimeZone" name="SelectSiteTimeZone" class="form-control bg-custom-4 text-white border-0" />
                                                                                    <?php include "includes/timezone_list.php"; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteTimeFormat">Time format</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteTimeFormat" name="InputSiteTimeFormat" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['datetime']['time-format']; ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteDateFormat">Date format</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteDateFormat" name="InputSiteDateFormat" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['datetime']['date-format']; ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-100 text-center mt-5">
                                                                        <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-4 p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                <div class="form-row">
                                                                    <div class="col-md-8">
                                                                        <div class="input-group h6">
                                                                            <label for="SiteStatus">
                                                                                <i class="fas fa-tools"></i> Maintenance mode
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group mb-2 text-center">
                                                                            <form action="consult?from=admin&&target=update&&ref=site&&ext=check" method="POST" class="w-100" name="StatusCheck" id="StatusCheck">
                                                                                <label class="switch">
                                                                                    <input type="hidden" name="SiteStatus" value="WORKING" />
                                                                                    <input type="checkbox" name="SiteStatus" value="MAINTENANCE" onchange="submitform('#StatusCheck', 'StatusCheck')" 
                                                                                    <?php if($site['status'] != 'WORKING'){ ?> checked <?php } ?> />
                                                                                    <span class="slider round"></span>
                                                                                </label>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-8">
                                                                        <div class="input-group h6">
                                                                            <label for="MailStatus">
                                                                                <i class="fas fa-envelope"></i> Send mail
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group mb-2 text-center">
                                                                            <form action="consult?from=admin&&target=update&&ref=site&&ext=mail" method="POST" class="w-100" name="MailStatusCheck" id="MailStatusCheck">
                                                                                <label class="switch">
                                                                                    <input type="hidden" name="MailStatus" value="0" />
                                                                                    <input type="checkbox" name="MailStatus" value="1" onchange="submitform('#MailStatusCheck', 'MailStatusCheck')" 
                                                                                    <?php if($site['mail']['status'] != 0){ ?> checked <?php } ?> />
                                                                                    <span class="slider round"></span>
                                                                                </label>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <h6><i class="fad fa-wifi"></i> Channels
                                                                    <a data-toggle="modal" class="text-light" href="#NewChanerModal">
                                                                        <i class="fad fa-plus-circle"></i>
                                                                    </a>
                                                                </h6>
                                                                <br>
                                                                <!-- New Channel Modal-->
                                                                <div class="modal fade" id="NewChanerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                            <form name="FormtAddCoins" action="consult?from=admin&&target=channels&&ext=AddChannel" method="POST">
                                                                                <div class="modal-header border-0" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                    <h5 class="modal-title font-roboto" id="exampleModalLabel">Add channel</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label for="InputChannelName">Name</label>
                                                                                                <input type="text" name="InputChannelName" id="InputChannelName" class="form-control" placeholder="Name" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label for="InputChannelPort">Port</label>
                                                                                                <input type="number" name="InputChannelPort" id="InputChannelPort" class="form-control" placeholder="Port" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer border-0">
                                                                                    <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Cancel</button>
                                                                                    <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Add</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-12">
                                                                        <table class="w-100">
                                                                            <thead class="bg-black text-light text-center">
                                                                                <td class="p-2">ID</td>
                                                                                <td class="p-2">Name</td>
                                                                                <td class="p-2">Port</td>
                                                                                <td></td>
                                                                            </thead>
                                                                            <?php $temp = $con->query('SET search_path TO web;')->fetchAll();
                                                                            $con_channel = $con->select("channelsweb","*");//('SELECT * FROM ' . CHANNELS);

                                                                            foreach($con_channel as $CH) { $ID_MODAL = strval($CH[CHANNELS_ID]); ?>
                                                                                <tr>
                                                                                    <td class="p-2 text-center"><?php echo $CH[CHANNELS_ID] ?></td>
                                                                                    <td class="p-2"><?php echo $CH[CHANNELS_NAME] ?></td>
                                                                                    <td class="p-2"><?php echo $CH[CHANNELS_PORT] ?></td>
                                                                                    <td class="p-2 text-center">
                                                                                        <a data-toggle="modal" class="text-light" href="<?php echo '#EDIT-CH-' . $ID_MODAL; ?>">
                                                                                            <i class="fad fa-edit"></i>
                                                                                        </a>
                                                                                        <!-- Edit Channel Modal-->
                                                                                        <div class="modal fade" id="<?php echo 'EDIT-CH-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog" role="document">
                                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                                    <form name="FormtAddCoins" action="consult?from=admin&&target=channels&&ext=EditChannel&&id=<?php echo $ID_MODAL; ?>" method="POST">
                                                                                                        <div class="modal-header border-0" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Edit channel</h5>
                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <div class="form-row">
                                                                                                                <div class="col-md-6">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="InputChannelName">Name</label>
                                                                                                                        <input type="text" name="InputChannelName" id="InputChannelName" class="form-control" placeholder="Name" value="<?php echo $CH[CHANNELS_NAME] ?>" required>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-6">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="InputChannelPort">Port</label>
                                                                                                                        <input type="number" name="InputChannelPort" id="InputChannelPort" class="form-control" placeholder="Port" value="<?php echo $CH[CHANNELS_PORT] ?>" required>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer border-0">
                                                                                                            <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Cancel</button>
                                                                                                            <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Save</button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <a data-toggle="modal" class="text-light" href="<?php echo '#DLTE-CH-' . $ID_MODAL; ?>">
                                                                                            <i class="fad fa-times-circle"></i>
                                                                                        </a>
                                                                                        <!-- Delete Entry Modal-->
                                                                                        <div class="modal fade" id="<?php echo 'DLTE-CH-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog" role="document">
                                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                                    <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                        <h5 class="modal-title font-roboto" id="exampleModalLabel">Are you sure?</h5>
                                                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">×</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body text-white">You sure you want to delete this channel?</div>
                                                                                                    <div class="modal-footer border-0">
                                                                                                        <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                        <form name="FormDeleteEntry" action="consult?from=admin&&target=channels&&ext=DeleteChannel" method="POST">
                                                                                                            <input type="hidden" name="InputChannelID" value="<?php echo $CH[CHANNELS_ID] ?>">
                                                                                                            <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Delete</button>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade <?php echo $DOWN_PAG; ?>" id="v-pills-downloads" role="tabpanel" aria-labelledby="v-pills-downloads-tab">
                                                        <div class="form-row">
                                                            <div class="col-md-8 pr-3 pl-3">
                                                                <form name="FormDownloads" action="consult?from=admin&&target=update&&ref=downloads&&ext=form" method="POST">
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteLaunch">Launcher</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteLaunch" name="InputSiteLaunch" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['download']['launcher']; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteClient">Client modding</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteClient" name="InputSiteClient" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['download']['client']; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-100 text-center my-3">
                                                                        <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?> ">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-4 p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                <div class="form-row">
                                                                    <div class="col-md-8">
                                                                        <div class="input-group mb-2">
                                                                            <label for="DownloadStatus">
                                                                                Disable downloads
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group mb-2 text-center">
                                                                            <form action="consult?from=admin&&target=update&&ref=downloads&&ext=check" method="POST" class="w-100" name="FormDownloadsCheck" id="FormDownloadsCheck">
                                                                                <label class="switch">
                                                                                    <input type="hidden" name="DownloadStatus" value="WORKING" />
                                                                                    <input type="checkbox" name="DownloadStatus" value="MAINTENANCE" onchange="submitform('#FormDownloadsCheck', 'FormDownloadsCheck')" 
                                                                                    <?php if($site['download']['status'] != 'WORKING'){ ?> checked <?php } ?> />
                                                                                    <span class="slider round"></span>
                                                                                </label>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade <?php echo $SSAL_PAG; ?>" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
                                                        <div class="form-row">
                                                            <div class="col-md-8 pr-3 pl-3">
                                                                <form name="FormSocial" action="consult?from=admin&&target=update&&ref=social" method="POST">
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteDiscord">Discord</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteDiscord" name="InputSiteDiscord" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['social']['discord']; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputSiteDiscordSV">Discord server ID</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="text" id="InputSiteDiscordSV" name="InputSiteDiscordSV" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['social']['discord_id']; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-100 text-center mt-5">
                                                                        <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade <?php echo $PAYM_PAG; ?>" id="v-pills-payments" role="tabpanel" aria-labelledby="v-pills-payments-tab">
                                                        <div class="form-row">
                                                            <div class="col-md-8 pr-3 pl-3">
                                                                <form name="FormSocial" action="consult?from=admin&&target=update&&ref=payments" method="POST">
                                                                    <div class="form-row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <h4><i class="fab fa-paypal"></i> PayPal</h4>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                            <label class="switch">
                                                                                <input type="hidden" name="PayPalStatus" value="0" />
                                                                                <input type="checkbox" name="PayPalStatus" value="1"
                                                                                <?php if(boolval($site['paypal']['status'])){ ?> checked <?php } ?> />
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="SelectPayPalMode">Mode</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <select class="form-control" id="SelectPayPalMode" name="SelectPayPalMode" required>
                                                                                    <option value="production" <?php if($site['paypal']['mode'] == "production"){ ?> selected <?php } ?>>PRODUCTION</option>
                                                                                    <option value="sandbox" <?php if($site['paypal']['mode'] == "sandbox"){ ?> selected <?php } ?>>SANDBOX</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="SelectPayPalCurrency">Currency</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <select class="form-control w-100" name="SelectPayPalCurrency" id="SelectPayPalCurrency">
                                                                                    <option <?php if($site['paypal']['currency'] == 'EUR'){ ?> selected <?php } ?> value="EUR">
                                                                                        EUR
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'USD'){ ?> selected <?php } ?> value="USD">
                                                                                        USD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'CAD'){ ?> selected <?php } ?> value="CAD">
                                                                                        CAD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'GBP'){ ?> selected <?php } ?> value="GBP">
                                                                                        GBP
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'CHF'){ ?> selected <?php } ?> value="CHF">
                                                                                        CHF
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'RUB'){ ?> selected <?php } ?> value="RUB">
                                                                                        RUB
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'CZK'){ ?> selected <?php } ?> value="CZK">
                                                                                        CZK
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'DKK'){ ?> selected <?php } ?> value="DKK">
                                                                                        DKK
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'NOK'){ ?> selected <?php } ?> value="NOK">
                                                                                        NOK
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'SEK'){ ?> selected <?php } ?> value="SEK">
                                                                                        SEK
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'PLN'){ ?> selected <?php } ?> value="PLN">
                                                                                        PLN
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'HUF'){ ?> selected <?php } ?> value="HUF">
                                                                                        HUF
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'JPY'){ ?> selected <?php } ?> value="JPY">
                                                                                        JPY
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'AUD'){ ?> selected <?php } ?> value="AUD">
                                                                                        AUD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'MXN'){ ?> selected <?php } ?> value="MXN">
                                                                                        MXN
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'BRL'){ ?> selected <?php } ?> value="BRL">
                                                                                        BRL
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'HKD'){ ?> selected <?php } ?> value="HKD">
                                                                                        HKD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'ILS'){ ?> selected <?php } ?> value="ILS">
                                                                                        ILS
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'MYR'){ ?> selected <?php } ?> value="MYR">
                                                                                        MYR
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'NZD'){ ?> selected <?php } ?> value="NZD">
                                                                                        NZD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'PHP'){ ?> selected <?php } ?> value="PHP">
                                                                                        PHP
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'SGD'){ ?> selected <?php } ?> value="SGD">
                                                                                        SGD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'TWD'){ ?> selected <?php } ?> value="TWD">
                                                                                        TWD
                                                                                    </option>
                                                                                    <option <?php if($site['paypal']['currency'] == 'THB'){ ?> selected <?php } ?> value="THB">
                                                                                        THB
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputPayPalID">Client ID</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                            <input type="text" id="InputPayPalID" name="InputPayPalID" class="form-control" value="<?php echo $site['paypal']['id']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputPayPalSecret">Secret</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group mb-2">
                                                                                <input type="password" id="InputPayPalSecret" name="InputPayPalSecret" class="form-control" value="<?php echo $site['paypal']['secret']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="w-100 text-center mt-5">
                                                                        <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?> ">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade <?php echo $STYL_PAG; ?>" id="v-pills-style" role="tabpanel" aria-labelledby="v-pills-style-tab">
                                                        <form action="consult?from=admin&&target=update&&ref=style" method="POST" id="FormSiteStyle">
                                                            <h4>Basic</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputWebBgColor">Background color:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputWebBgColor" id="InputWebBgColor" value="<?php echo $site['style']['bckgrnd']; ?>" onChange="BasicStyle()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputBarColor">Navbar & sidebar color:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputBarColor" id="InputBarColor" value="<?php echo $site['style']['color-bar']; ?>" onChange="BasicStyle()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputFootColor">Footer color:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputFootColor" id="InputFootColor" value="<?php echo $site['style']['color-foot']; ?>" onChange="BasicStyle()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputFootText">Footer text:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputFootText" id="InputFootText" value="<?php echo $site['style']['text-foot']; ?>" onChange="BasicStyle()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 p-3">
                                                                    <div class="form-row">
                                                                        <div class="col-md-8">
                                                                            <div class="input-group mb-2">
                                                                                <select class="form-control" name="SelectBtnPrimary" id="SelectBtnPrimary" onChange="BasicStyle()">
                                                                                    <option value="btn-primary" <?php if($site['style']['btn-p'] == "btn-primary"){ ?> selected <?php } ?>>Primary</option>
                                                                                    <option value="btn-secondary" <?php if($site['style']['btn-p'] == "btn-secondary"){ ?> selected <?php } ?>>Secondary</option>
                                                                                    <option value="btn-success" <?php if($site['style']['btn-p'] == "btn-success"){ ?> selected <?php } ?>>Success</option>
                                                                                    <option value="btn-danger" <?php if($site['style']['btn-p'] == "btn-danger"){ ?> selected <?php } ?>>Danger</option>
                                                                                    <option value="btn-warning" <?php if($site['style']['btn-p'] == "btn-warning"){ ?> selected <?php } ?>>Warning</option>
                                                                                    <option value="btn-info" <?php if($site['style']['btn-p'] == "btn-info"){ ?> selected <?php } ?>>Info</option>
                                                                                    <option value="btn-light" <?php if($site['style']['btn-p'] == "btn-light"){ ?> selected <?php } ?>>Light</option>
                                                                                    <option value="btn-dark" <?php if($site['style']['btn-p'] == "btn-dark"){ ?> selected <?php } ?>>Dark</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group mb-2">
                                                                                <button type="button" class="<?php echo "btn w-100 " . $site['style']['btn-p'] ?>" id="ButtonPrimaryTest">Primary button</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-8">
                                                                            <div class="input-group mb-2">
                                                                                <select class="form-control" name="SelectBtnSecondary" id="SelectBtnSecondary" onChange="BasicStyle()">
                                                                                    <option value="btn-primary" <?php if($site['style']['btn-s'] == "btn-primary"){ ?> selected <?php } ?>>Primary</option>
                                                                                    <option value="btn-secondary" <?php if($site['style']['btn-s'] == "btn-secondary"){ ?> selected <?php } ?>>Secondary</option>
                                                                                    <option value="btn-success" <?php if($site['style']['btn-s'] == "btn-success"){ ?> selected <?php } ?>>Success</option>
                                                                                    <option value="btn-danger" <?php if($site['style']['btn-s'] == "btn-danger"){ ?> selected <?php } ?>>Danger</option>
                                                                                    <option value="btn-warning" <?php if($site['style']['btn-s'] == "btn-warning"){ ?> selected <?php } ?>>Warning</option>
                                                                                    <option value="btn-info" <?php if($site['style']['btn-s'] == "btn-info"){ ?> selected <?php } ?>>Info</option>
                                                                                    <option value="btn-light" <?php if($site['style']['btn-s'] == "btn-light"){ ?> selected <?php } ?>>Light</option>
                                                                                    <option value="btn-dark" <?php if($site['style']['btn-s'] == "btn-dark"){ ?> selected <?php } ?>>Dark</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group mb-2">
                                                                                <button type="button" class="<?php echo "btn w-100 " . $site['style']['btn-s'] ?>" id="ButtonSecondaryTest">Secondary button</button>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h4>Modal</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputModalHeaderColor">Header background:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputModalHeaderColor" id="InputModalHeaderColor" value="<?php echo $site['style']['bg-h-m']; ?>" onChange="Modal()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputModalHeaderText">Header text:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputModalHeaderText" id="InputModalHeaderText" value="<?php echo $site['style']['text-h-m']; ?>" onChange="Modal()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputModalBodyColor">Body background:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputModalBodyColor" id="InputModalBodyColor" value="<?php echo $site['style']['bg-b-m']; ?>" onChange="Modal()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputModalBodyText">Body text:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputModalBodyText" id="InputModalBodyText" value="<?php echo $site['style']['text-b-m']; ?>" onChange="Modal()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 p-3">
                                                                    <div id="TestModal">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content" id="ModalBodytest" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                <div class="modal-header" id="modal-header-test" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                    <h5 class="modal-title font-roboto" id="exampleModalLabel">Modal Title</h5>
                                                                                    <button class="close" type="button">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h4>Extra</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputExtraBackground1">Background:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputExtraBackground1" id="InputExtraBackground1" value="<?php echo $site['style']['color-1']; ?>" onChange="DivExtra1()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-10">
                                                                            <div class="input-group mb-2">
                                                                                <label for="InputExtraText1">Text:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="input-group mb-2">
                                                                                <input type="color" name="InputExtraText1" id="InputExtraText1" value="<?php echo $site['style']['text-1']; ?>" onChange="DivExtra1()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 p-3">
                                                                    <div class="w-100 p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>" id="ExtraDiv1">
                                                                        <div class="w-100 text-center pb-3">
                                                                            <h3>Section title</h3>
                                                                        </div>
                                                                        <div class="w-100 text-justify">
                                                                            <p>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <button type="button" class="btn <?php echo $site['style']['btn-s'] ?> w-100 mb-3" id="StyleDefaultButton">
                                                                        Default
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <button type="submit" class="btn <?php echo $site['style']['btn-p'] ?>  mb-3">
                                                                        Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <script type="text/javascript">
                                                            $(document).ready(function(){
                                                                $("#StyleDefaultButton").click(function () {
                                                                    $("#InputWebBgColor").val('#181818');
                                                                    $("#InputExtraBackground1").val('#343a40');
                                                                    $("#InputExtraText1").val('#f8f9fa');
                                                                    $("#InputBarColor").val('#212121');
                                                                    $("#InputFootColor").val('#343a40');
                                                                    $("#InputFootText").val('#f8f9fa');
                                                                    $("#InputModalHeaderColor").val('#007bff');
                                                                    $("#InputModalHeaderText").val('#f8f9fa');
                                                                    $("#InputModalBodyColor").val('#181818');
                                                                    $("#InputModalBodyText").val('#FFFFFF');
                                                                    $("#SelectBtnPrimary").val('btn-primary');
                                                                    $("#SelectBtnSecondary").val('btn-secondary');
                                                                    BasicStyle();
                                                                    Modal();
                                                                    DivExtra1();
                                                                });     
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif ($CARD == 'news'     ) { ?>

                                        <div class="p-3">
                                            <a type="button" data-toggle="modal" class="btn <?php echo $site['style']['btn-p']; ?>" href="#NEW-ENTRY">
                                                New Entry
                                            </a>
                                            <!-- New Entry Modal -->
                                            <div class="modal fade" id="NEW-ENTRY" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                        <form name="FormAddEntry" action="consult?from=entries&&target=AddEntry" method="POST">
                                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">New entry</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-white text-left">
                                                                <div class="form-row">
                                                                    <div class="col-md-12 form-group">
                                                                        <label for="InputEntryTitle">Title</label>
                                                                        <input type="text" class="form-control" id="InputEntryTitle" name="InputEntryTitle" required>
                                                                    </div>
                                                                    <div class="col-md-12 form-group">
                                                                        <label for="InputEntryPic">Outstanding image (URL)</label>
                                                                        <input type="text" class="form-control" id="InputEntryPic" name="InputEntryPic">
                                                                    </div>
                                                                    <div class="col-md-12 form-group">
                                                                        <label for="TextareaEntryBody">Entry body</label>
                                                                        <textarea class="form-control" rows="5" id="TextareaEntryBody" name="TextareaEntryBody" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-0">
                                                                <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Entries Table -->
                                            <div class="p-3 mt-3 border-0" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                <div class="table-responsive">
                                                    <table class="table border-0 text-white" id="dataTable" width="100%" cellspacing="0">
                                                        <thead class="bg-black">
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Body</th>
                                                                <th>Author</th>
                                                                <th>Date</th>
                                                                <th>Manage</th>
                                                                <th>ID</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $sql_entries = $con->select("articles","*");//('SELECT * FROM ' . NEWS);

                                                            foreach($sql_entries as $ENTRIES ){

                                                                $ID_MODAL = strval($ENTRIES[NEWS_ARTICLE_ID]); ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php 
                                                                        echo substr($ENTRIES[NEWS_ARTICLE_TITLE], 0, 40);

                                                                        if(strlen($ENTRIES[NEWS_ARTICLE_TITLE]) > 40 )
                                                                        echo "..."; 
                                                                        ?>                             
                                                                    </td>
                                                                    <td>
                                                                        <?php 
                                                                        echo substr($ENTRIES[NEWS_ARTICLE_BODY], 0, 170);

                                                                        if(strlen($ENTRIES[NEWS_ARTICLE_BODY]) > 170 )
                                                                        echo "..."; 
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $ENTRIES[NEWS_ARTICLE_AUTOR]; ?></td>
                                                                    <td><?php echo $ENTRIES[NEWS_ARTICLE_DATE]; ?></td>
                                                                    <td class="text-center">
                                                                        <a data-toggle="modal" class="text-light" href="<?php echo '#EDIT-ENTRY-' . $ID_MODAL; ?>">
                                                                            <i class="fad fa-edit"></i>
                                                                        </a>
                                                                        <!-- Edit Entry Modal -->
                                                                        <div class="modal fade" id="<?php echo 'EDIT-ENTRY-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                    <form name="FormEditEntry" action="consult?from=entries&&target=EditEntry" method="POST">
                                                                                        <input type="hidden" name="InputEntryID" value="<?php echo $ENTRIES[NEWS_ARTICLE_ID]; ?>">
                                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Edit entry</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body text-white text-left">
                                                                                            <div class="form-row">
                                                                                                <div class="col-md-12 form-group">
                                                                                                    <label for="InputEntryTitle">Title</label>
                                                                                                    <input type="text" class="form-control" id="InputEntryTitle" name="InputEntryTitle" value="<?php echo $ENTRIES[NEWS_ARTICLE_TITLE]; ?>" required>
                                                                                                </div>
                                                                                                <div class="col-md-12 form-group">
                                                                                                    <label for="InputEntryPic">Outstanding image (URL)</label>
                                                                                                    <input type="text" class="form-control" id="InputEntryPic" name="InputEntryPic" value="<?php echo $ENTRIES[NEWS_ARTICLE_PIC]; ?>">
                                                                                                </div>
                                                                                                <div class="col-md-12 form-group">
                                                                                                    <label for="TextareaEntryBody">Entry body</label>
                                                                                                    <textarea class="form-control" rows="5" id="TextareaEntryBody" name="TextareaEntryBody" required><?php echo $ENTRIES[NEWS_ARTICLE_BODY]; ?></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer border-0">
                                                                                            <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Update</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a data-toggle="modal" class="text-light" href="<?php echo '#DLTE-ENTRY-ID-' . $ID_MODAL; ?>">
                                                                            <i class="fad fa-times-circle"></i>
                                                                        </a>
                                                                        <!-- Delete Entry Modal-->
                                                                        <div class="modal fade" id="<?php echo 'DLTE-ENTRY-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                    <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                        <h5 class="modal-title font-roboto" id="exampleModalLabel">Are you sure?</h5>
                                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">×</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body text-white">You sure you want to delete this entry?</div>
                                                                                    <div class="modal-footer border-0">
                                                                                        <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                        <form name="FormDeleteEntry" action="consult?from=entries&&target=DeleteEntry" method="POST">
                                                                                            <input type="hidden" name="InputEntryID" value="<?php echo $ENTRIES[NEWS_ARTICLE_ID]; ?>">
                                                                                            <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Delete</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                <td><?php echo $ENTRIES[NEWS_ARTICLE_ID]; ?></td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif ($CARD == 'users'    ) {

                                        if(isset($_GET['user_details_id'])){

                                            if (NoAdminAccess($_GET['user_details_id'])) {
                                            
                                                $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                                                $sql_userdata = $con->select("accounts","*",["Id" => htmlentities($_GET['user_details_id'])]);//('SELECT * FROM accounts WHERE "Id" = ?');
                                                
                                                foreach($sql_userdata as $USERDATA ){ ?>

                                                    <div class="row m-0">
                                                        <div class="text-white col-md-8 p-3">
                                                            <div class="row m-0 card" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                <div class="col-md-12 text-center p-3">
                                                                    <h1>
                                                                        <?php echo $USERDATA['Name'] . "<span class='text-secondary'>#" . $USERDATA[USER_ID] . "</span>"; ?>  
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h5>General</h5>
                                                            <hr>
                                                            <div class="col-md-12 bg-custom rounded p-3">
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <span class="mr-2">E-mail:</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <?php echo $USERDATA['Email']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <span class="mr-2">Created at:</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                        <?php 
                                                                            echo  $USERDATA['CreatedAt'];
                                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h5>Address</h5>
                                                            <hr>
                                                            <?php

                                                            require_once('php/geoplugin.class.php');

                                                            $geoplugin = new geoPlugin();
                                                            $geoplugin->locate($USERDATA['RegistrationIP']);
                                                            ?>
                                                            <div class="col-md-12 bg-custom rounded p-3">
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <span class="mr-2">Country:</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <?php echo $geoplugin->countryName; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <span class="mr-2">City:</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <?php echo $geoplugin->city; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <span class="mr-2">Region:</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <?php echo $geoplugin->regionName; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <span class="mr-2">Registration IP:</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <?php echo $USERDATA['RegistrationIP']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Geolocation iframe -->
                                                            <hr>
                                                            <h5>Location</h5>
                                                            <hr>
                                                            <iframe class="rounded" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $geoplugin->latitude . ',' . $geoplugin->longitude; ?>&hl=es&z=14&ie=UTF8&t=k&z=14&iwloc=B&output=embed">
                                                            </iframe>
                                                            <hr>
                                                            
                                                        </div>
                                                        <div class="text-white col-md-4 p-3">
                                                            <div class="col-md-12 p-3 overflow-auto">
                                                                <h4 class="font-roboto"><i class="fad fa-ankh"></i> Characteres</h4>
                                                                <hr>
                                                                <table class="w-100">
                                                                    <?php
                                                                    $temp = $con->query('SET search_path TO characters;')->fetchAll();
                                                                    $sql_character = $con->select("characters","*",["AccountId" => $USERDATA['Id']]);//('SELECT COUNT(*) FROM ' . CHAR . ' WHERE "Id" = ?');

                                                                    if(count($sql_character) > 0){
                        
                                                                        foreach( $sql_character as $CHARACTER ){ ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="<?php echo $site['assets']['images'] . "/user/" . $CHARACTER[CHAR_CLASS] . "/" . $CHARACTER[CHAR_GENDER] . ".png"; ?>" class="p-3" alt="<?php echo $CHARACTER[CHAR_NICK]; ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <h5>
                                                                                        <?php 

                                                                                        $ID_MODAL = strval($CHARACTER[CHAR_ID]);

                                                                                        echo "<a data-toggle='modal' href='#CHARACTER_ID-" . $ID_MODAL . "'>" . $CHARACTER[CHAR_NICK] . "<span class='text-secondary'>#" . $CHARACTER[CHAR_ID] . "</span></a>";
                                                                                        ?>      
                                                                                    </h5>
                                                                                    <!-- Character details Modal -->
                                                                                    <div class="modal fade" id="<?php echo 'CHARACTER_ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog" role="document">
                                                                                            <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                                <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                    <h5 class="modal-title font-roboto" id="exampleModalLabel">
                                                                                                        <?php echo $CHARACTER[CHAR_NICK] . "#" . $CHARACTER[CHAR_ID]; ?>        
                                                                                                    </h5>
                                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">×</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <form name="FormCharacter" action="consult?from=users&&target=Character&&AccountId=<?php echo $USERDATA[USER_ID] . '&&id=' . $CHARACTER[CHAR_ID]; ?>" method="POST">
                                                                                                    <div class="modal-body text-white overflow-auto">
                                                                                                        <table class="w-100 CharacterTable">
                                                                                                            <input type="hidden" name="Name" required value="<?php echo $CHARACTER[CHAR_NICK]; ?>">
                                                                                                            <tr>
                                                                                                                <td>Act4Dead</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Act4Dead" required value="<?php echo $CHARACTER['Act4Dead']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Act4Kill</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Act4Kill" required value="<?php echo $CHARACTER['Act4Kill']; ?>" class="form-control"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Act4Points</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Act4Points" required value="<?php echo $CHARACTER['Act4Points']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>ArenaWinner</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="ArenaWinner" required value="<?php echo $CHARACTER['ArenaWinner']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Biography</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="Biography" value="<?php echo $CHARACTER['Biography']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>BuffBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="BuffBlocked" required value="<?php echo var_export($CHARACTER['BuffBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Class</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Class" required value="<?php echo $CHARACTER['Class']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Compliment</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Compliment" required value="<?php echo $CHARACTER['Compliment']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Dignity</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Dignity" required value="<?php echo $CHARACTER['Dignity']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>EmoticonsBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="EmoticonsBlocked" required value="<?php echo var_export($CHARACTER['EmoticonsBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>ExchangeBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="ExchangeBlocked" required value="<?php echo var_export($CHARACTER['ExchangeBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Faction</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Faction" required value="<?php echo $CHARACTER['Faction']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>FamilyRequestBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="FamilyRequestBlocked" required value="<?php echo var_export($CHARACTER['FamilyRequestBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>FriendRequestBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="FriendRequestBlocked" required value="<?php echo var_export($CHARACTER['FriendRequestBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Gender</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Gender" required value="<?php echo $CHARACTER['Gender']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Gold</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Gold" required value="<?php echo $CHARACTER['Gold']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>GroupRequestBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="GroupRequestBlocked" required value="<?php echo var_export($CHARACTER['GroupRequestBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HairColor</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="HairColor" required value="<?php echo $CHARACTER['HairColor']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HairStyle</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="HairStyle" required value="<?php echo $CHARACTER['HairStyle']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HeroChatBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="HeroChatBlocked" required value="<?php echo var_export($CHARACTER['HeroChatBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HeroLevel</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="HeroLevel" required value="<?php echo $CHARACTER['HeroLevel']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HeroXp</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="HeroXp" required value="<?php echo $CHARACTER['HeroXp']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Hp</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Hp" required value="<?php echo $CHARACTER['Hp']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HpBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="HpBlocked" required value="<?php echo var_export($CHARACTER['HpBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>IsPetAutoRelive</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="IsPetAutoRelive" required value="<?php echo var_export($CHARACTER['IsPetAutoRelive']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>IsPartnerAutoRelive</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="IsPartnerAutoRelive" required value="<?php echo var_export($CHARACTER['IsPartnerAutoRelive']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>JobLevel</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="JobLevel" required value="<?php echo $CHARACTER['JobLevel']; ?>"  class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>JobLevelXp</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="JobLevelXp" required value="<?php echo $CHARACTER['JobLevelXp']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Level</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Level" required value="<?php echo $CHARACTER['Level']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>LevelXp</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="LevelXp" required value="<?php echo $CHARACTER['LevelXp']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MapId</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MapId" required value="<?php echo $CHARACTER['MapId']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MapX</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MapX" required value="<?php echo $CHARACTER['MapX']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MapY</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MapY" required value="<?php echo $CHARACTER['MapY']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MasterPoints</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MasterPoints" required value="<?php echo $CHARACTER['MasterPoints']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MasterTicket</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MasterTicket" required value="<?php echo $CHARACTER['MasterTicket']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MaxPetCount</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MaxPetCount" required value="<?php echo $CHARACTER['MaxPetCount']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MaxPartnerCount</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MaxPartnerCount" required value="<?php echo $CHARACTER['MaxPartnerCount']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MinilandInviteBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="MinilandInviteBlocked" required value="<?php echo var_export($CHARACTER['MinilandInviteBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MinilandMessage</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="MinilandMessage" value="<?php echo $CHARACTER['MinilandMessage']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MinilandPoint</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MinilandPoint" required value="<?php echo $CHARACTER['MinilandPoint']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MinilandState</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="MinilandState" required value="<?php echo $CHARACTER['MinilandState']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>MouseAimLock</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="MouseAimLock" required value="<?php echo var_export($CHARACTER['MouseAimLock']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Mp</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Mp" required value="<?php echo $CHARACTER['Mp']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Prefix</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Prefix" value="<?php echo $CHARACTER['Prefix']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>QuickGetUp</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="QuickGetUp" required value="<?php echo var_export($CHARACTER['QuickGetUp']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>HideHat</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="HideHat" required value="<?php echo var_export($CHARACTER['HideHat']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>UiBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="UiBlocked" required value="<?php echo var_export($CHARACTER['UiBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>RagePoint</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="RagePoint" required value="<?php echo $CHARACTER['RagePoint']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Reputation</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Reput" required value="<?php echo $CHARACTER['Reput']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>Slot</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="Slot" required value="<?php echo $CHARACTER['Slot']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>SpPointsBonus</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="SpPointsBonus" required value="<?php echo $CHARACTER['SpPointsBonus']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>SpPointsBasic</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="SpPointsBasic" required value="<?php echo $CHARACTER['SpPointsBasic']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>TalentLose</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="TalentLose" required value="<?php echo $CHARACTER['TalentLose']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>TalentSurrender</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="TalentSurrender" required value="<?php echo $CHARACTER['TalentSurrender']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>TalentWin</td>
                                                                                                                <td>
                                                                                                                    <input type="number" name="TalentWin" required value="<?php echo $CHARACTER['TalentWin']; ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>WhisperBlocked</td>
                                                                                                                <td>
                                                                                                                    <input type="text" name="WhisperBlocked" required value="<?php echo var_export($CHARACTER['WhisperBlocked']); ?>" class="form-control">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            
                                                                                                        </table>
                                                                                                    </div>
                                                                                                    <div class="modal-footer border-0">
                                                                                                        <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Close</button>
                                                                                                        <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Update</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr><?php 
                                                                        }
                                                                    } else { ?>
                                                                        <tr class="text-center display-4" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                            <td class="p-3">
                                                                                <i class="fad fa-heart-broken"></i>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-center" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                            <td class="p-3">
                                                                                <h5>User has no characters</h5>
                                                                            </td>
                                                                        </tr><?php 
                                                                    } ?>
                                                                </table>
                                                                <hr>
                                                                <button type="button" class="btn <?php echo $site['style']['btn-p']; ?> w-100" data-toggle="modal" data-target="#SendItemModal">
                                                                    Send item
                                                                </button>
                                                                <!-- Send item Modal -->
                                                                <div class="modal fade" id="SendItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                            <form name="FormSendItem" action="consult?from=users&&target=SendItem&&ref=admin&&id=<?php echo $USERDATA['Id']; ?>" method="POST">
                                                                                <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                    <h5 class="modal-title font-roboto" id="exampleModalLabel">Send item</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body text-white">
                                                                                    <div class="form-row">
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label for="SelectCharacterId">Character name</label>
                                                                                                <select class="form-control" name="SelectCharacterId" id="SelectCharacterId">
                                                                                                    <?php

                                                                                                    $sql_character = $con->select("characters","*",["AccountId" => $USERDATA['Id']]);//('SELECT * FROM ' . CHAR . ' WHERE ' . CHAR_USR_ID . ' = ?');

                                                                                                    foreach($sql_character as $CHARACTER ){

                                                                                                        echo "<option value='" . $CHARACTER['Id'] . "''>" . $CHARACTER['Name'] . "</option>";
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="InputSenditemvNum">Item VNum</label>
                                                                                            <input class="form-control" type="number" name="InputSenditemvNum" id="InputSenditemvNum" required min="1" max="9999">
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <label for="InputSenditemQuantity">Quantity</label>
                                                                                            <input class="form-control" type="number" name="InputSenditemQuantity" id="InputSenditemQuantity" required value="1" max="99" min="1">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer border-0">
                                                                                    <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Send</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><?php
                                                }
                                            }

                                            else echo "<script>window.location='index?to=admin&&card=users';</script>";

                                        } else { ?>

                                            <!-- User Table -->
                                            <div class="p-3 border-0">
                                                <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] ?>">
                                                    <form action="consult?from=users&&target=add_coins_mass" name="FormSendMassCoins" id="FormSendMassCoins" action="POST" method="POST">
                                                        <div class="row mb-3">
                                                            <div class="input-group col-md-6">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-black border-0 text-white" id="inputGroupPrepend">
                                                                        <i class="fad fa-coins mr-2"></i> Mass shipping
                                                                    </span>
                                                                </div>
                                                                <input type="number" class="form-control border-0 text-center" id="inputAddCoinsMass" placeholder="Coins" name="inputAddCoinsMass" required>
                                                                <div class="input-group-prepend">
                                                                    <button class="<?php echo "py-0 rounded-right btn " . $site['style']['btn-p'] ?>" type="submit">Send</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <table class="table border-0" id="dataTable" width="100%" cellspacing="0" style="<?php echo "color: " . $site['style']['text-1'] ?>">
                                                        <thead class="bg-black">
                                                            <tr>
                                                                <th>User</th>
                                                                <th>Range</th>
                                                                <th>Balance</th>
                                                                <th>Details</th>
                                                                <th>ID</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $temp = $con->query('SET search_path TO accounts;')->fetchAll();
                                                            $sql_userdata = $con->select("accounts","*");//('SELECT * FROM ' . USER . ' WHERE "Id" != ?');

                                                            foreach($sql_userdata as $USERDATA ){

                                                                $ID_MODAL = strval($USERDATA['Id']); ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php 

                                                                        echo $USERDATA['Name'];
                                                                        echo "<i class='d-none'>" . $USERDATA['Email'] . "</i>";
                                                                        echo "<i class='d-none'>" . $USERDATA['RegistrationIP'] . "</i>";
                                                                        
                                                                        $temp = $con->query('SET search_path TO characters;')->fetchAll();
                                                                        $sql_character = $con->select("characters","*",["AccountId" => $USERDATA['Id']]); //('SELECT * FROM characters WHERE "Id" = ?');
                                                                        if(count($sql_character) > 0){
                                                                            $CHARACTER = $sql_character[0];
                                                                            echo "<i class='d-none'>" . $CHARACTER['Name'] . "</i>";
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <form name="FormUserRange" id="FormUserRange-<?php echo $USERDATA['Id']; ?>" action="consult?from=users&&target=range&&id=<?php echo $USERDATA['Id']; ?>" method="POST">
                                                                            <select name="SelectUserRange" class="form-control bg-custom" onchange="submitform('#FormUserRange-<?php echo $USERDATA['Id']; ?>', 'FormUserRange')" >
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_CLOSED ){ ?> selected <?php } ?> value="<?php echo ROLE_CLOSED; ?>">Closed</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_BANNED ){ ?> selected <?php } ?> value="<?php echo ROLE_BANNED; ?>">Banned</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_UNCONFIRMED ){ ?> selected <?php } ?> value="<?php echo ROLE_UNCONFIRMED; ?>">Unconfirmed</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_USER  ){ ?> selected <?php } ?> value="<?php echo ROLE_USER; ?>">User</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_VIP  ){ ?> selected <?php } ?> value="<?php echo ROLE_VIP; ?>">VIP</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_VIPPLUS  ){ ?> selected <?php } ?> value="<?php echo ROLE_VIPPLUS; ?>">VIP+</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_VIPPLUSPLUS  ){ ?> selected <?php } ?> value="<?php echo ROLE_VIPPLUSPLUS; ?>">VIP++</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_DONATOR ){ ?> selected <?php } ?> value="<?php echo ROLE_DONATOR; ?>">Donator</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_DONATORPLUS ){ ?> selected <?php } ?> value="<?php echo ROLE_DONATORPLUS; ?>">Donator+</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_DonatorPlusPlus ){ ?> selected <?php } ?> value="<?php echo ROLE_DonatorPlusPlus; ?>">Donator++</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_MODERATOR ){ ?> selected <?php } ?> value="<?php echo ROLE_MODERATOR; ?>">Moderator</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_BETAGAMETESTER ){ ?> selected <?php } ?> value="<?php echo ROLE_BETAGAMETESTER; ?>">Beta Game Tester</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_GAMEMASTER ){ ?> selected <?php } ?> value="<?php echo ROLE_GAMEMASTER; ?>">GM</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_SUPERAMEMASTER ){ ?> selected <?php } ?> value="<?php echo ROLE_SUPERAMEMASTER; ?>">SGM</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_COMMUNITYMANAGER ){ ?> selected <?php } ?> value="<?php echo ROLE_COMMUNITYMANAGER; ?>">CM</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_GAMEADMIN ){ ?> selected <?php } ?> value="<?php echo ROLE_GAMEADMIN; ?>">GA</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_OWNER ){ ?> selected <?php } ?> value="<?php echo ROLE_OWNER; ?>">OWNER</option>
                                                                                <option <?php if($USERDATA[USER_RANGE] == ROLE_ROOT ){ ?> selected <?php } ?> value="<?php echo ROLE_ROOT; ?>">ROOT</option>
                                                                            </select>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($USERDATA['Coins'], 0, ',', '.'); ?>
                                                                        <a data-toggle="modal" class="text-light" href="<?php echo '#COINS_ID-' . $ID_MODAL; ?>">
                                                                            <i class="fad fa-plus-circle"></i>
                                                                        </a>
                                                                        <!-- Add coins Modal -->
                                                                        <div class="modal fade" id="<?php echo 'COINS_ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                    <form name="FormtAddCoins" id="FormtAddCoins" action="consult?from=users&&target=add_coins&&id=<?php echo $USERDATA['Id']; ?>" method="POST">
                                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Add coins</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="form-group">
                                                                                                <div class="form-group">
                                                                                                    <label for="inputAddCoins">Add coins</label>
                                                                                                    <input type="number" id="inputAddCoins" name="inputAddCoins" class="form-control" placeholder="Add" required="required">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer border-0">
                                                                                            <button type="button" class="btn <?php echo $site['style']['btn-s']; ?>" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Add</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="<?php echo 'index?to=admin&&card=users&&user_details_id=' . $ID_MODAL; ?>" target="_blank">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td><?php echo $USERDATA['Id']; ?></td>
                                                                </tr><?php 
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><?php 
                                        } ?>

                                    <?php } elseif ($CARD == 'store'    ) { ?>

                                        <div class="p-0">
                                            <div class="row m-0">
                                                <div class="col-md-8 px-3 mb-3">
                                                    <!-- Roulette items Table -->
                                                    <div class="card mt-3 border-0">
                                                        <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] ?>">
                                                            <table class="table border-0" id="dataTable" width="100%" cellspacing="0" style="<?php echo "color: " . $site['style']['text-1'] ?>">
                                                                <thead class="bg-black">
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Title</th>
                                                                        <th>Category</th>
                                                                        <th>Price</th>
                                                                        <th>VNum</th>
                                                                        <th>Roulette</th>
                                                                        <th>Manage</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php

                                                                    $sql_store_items = $con->select("shopitems","*");//('SELECT * FROM ' . STORE_ITEMS);

                                                                    foreach($sql_store_items as  $ITEM ){

                                                                        $sql_item_category = $con->select("categoriesshop","name",["categoriesid" => $ITEM[STORE_ITEMS_CATEGORY]]);//('SELECT ' . CATEGORY_NAME . ' FROM ' . CATEGORY . ' WHERE ' . CATEGORY_ID . ' = ?');

                                                                        $sql_item_name = $con->select("item","name",["vnum" => $ITEM[STORE_ITEMS_VNUM]]);//('SELECT ' . ITEM_NAME . ' FROM ' . ITEM . ' WHERE ' . ITEM_VNUM . ' = ?');

                                                                        $TITLE = $sql_item_name;
                                                                        $CATEG = $sql_item_category;

                                                                        $ID_MODAL = strval($ITEM[STORE_ITEMS_ID]); ?>
                                                                        <tr>
                                                                            <td class="text-center"><?php echo $ITEM[STORE_ITEMS_ID]; ?></td>
                                                                            <td><?php echo $TITLE[0]; ?></td>
                                                                            <td><?php echo $CATEG[0]; ?></td>
                                                                            <td><?php if($ITEM[STORE_ITEMS_ROULETTE] == 0 ) echo number_format($ITEM[STORE_ITEMS_PRICE], 0, ',', '.'); ?></td>
                                                                            <td><?php echo $ITEM[STORE_ITEMS_VNUM]; ?></td>
                                                                            <td class="text-center">
                                                                                <form name="CheckItemRoulette" id="CheckItemRouletteID-<?php echo $ITEM[STORE_ITEMS_ID]; ?>" method="POST" action="consult?from=admin&&target=store&&ext=roulette&&id=<?php echo $ITEM[STORE_ITEMS_ID]; ?>" >
                                                                                    <input type="hidden"   id="check" name="CheckItemRoulette" value="0" />
                                                                                    <input type="checkbox" id="check" name="CheckItemRoulette" value="1" onchange="submitform('#CheckItemRouletteID-<?php echo $ITEM[STORE_ITEMS_ID]; ?>', 'CheckItemRoulette')"
                                                                                    <?php if($ITEM[STORE_ITEMS_ROULETTE] == 1 ){ ?> checked <?php } ?>>
                                                                                </form>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <a data-toggle="modal" class="text-light" href="<?php echo '#EDIT-ITEM-ID-' . $ID_MODAL; ?>" onclick="categories<?php echo $ID_MODAL ?>()">
                                                                                    <i class="fad fa-edit"></i>
                                                                                </a>
                                                                                <!-- Edit item Modal -->
                                                                                <div class="modal fade" id="<?php echo 'EDIT-ITEM-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <form name="FormEdititemSlot" enctype="multipart/form-data" action="consult?from=store&&target=EditItemSlot&&id=<?php echo $ITEM[STORE_ITEMS_ID] . "&&admin=1"; ?>" method="POST">
                                                                                            <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                                <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                    <h5 class="modal-title text-light font-roboto" id="exampleModalLabel">Edit Item</h5>
                                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">×</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <?php if($ITEM[STORE_ITEMS_ROULETTE] == 1 ){ ?>
                                                                                                    <div class="p-3 w-100" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                                                        <div class="form-row text-center">
                                                                                                            <div class="col-md-6">
                                                                                                                <label class="m-0" for="EditJackpotCheck">Jackpot</label>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <label class="switch m-0" style="height: 26px">
                                                                                                                    <input type="hidden" name="JackpotCheck" id="EditJackpotCheck" value="0" />
                                                                                                                    <input type="checkbox" name="JackpotCheck" id="EditJackpotCheck" value="1" <?php if($ITEM[STORE_ITEMS_JACKPOT] == 1 ){ ?> checked <?php } ?> />
                                                                                                                    <span class="slider round"></span>
                                                                                                                </label>
                                                                                                            </div>      
                                                                                                        </div>
                                                                                                    </div>
                                                                                                <?php } ?>
                                                                                                <div class="modal-body text-white">
                                                                                                    <div class="form-row mb-3">
                                                                                                        <div class="col-md-6">
                                                                                                            <label for="InputUploadedPic-<?php echo $ITEM[STORE_ITEMS_ID] ?>">
                                                                                                                <img src="<?php echo $ITEM[STORE_ITEMS_IMAGE] ?>" class="w-100">
                                                                                                            </label>
                                                                                                            <input name="InputUploadedPic" id="InputUploadedPic-<?php echo $ITEM[STORE_ITEMS_ID] ?>" class="d-none" accept="image/png, image/jpeg" type="file">
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <h6><?php echo $TITLE[0] ?></h6>
                                                                                                            <br>
                                                                                                            <div class="form-row">
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <script>
                                                                                                                            $(document).ready(function(){
                                                                                                                                $("#e-fas-star-1-<?php echo $ITEM[STORE_ITEMS_ID] ?>").click(function(){
                                                                                                                                $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#InputItemRank-<?php echo $ITEM[STORE_ITEMS_ID] ?>").val(1);
                                                                                                                                });
                                                                                                                                $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").click(function(){
                                                                                                                                $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                $("#InputItemRank-<?php echo $ITEM[STORE_ITEMS_ID] ?>").val(2);
                                                                                                                            });
                                                                                                                                $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").click(function(){
                                                                                                                                    $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                    $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                    $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                    $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                    $("#InputItemRank-<?php echo $ITEM[STORE_ITEMS_ID] ?>").val(3);
                                                                                                                                });
                                                                                                                                $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").click(function(){
                                                                                                                                    $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("far");
                                                                                                                                    $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("fas");
                                                                                                                                    $("#InputItemRank-<?php echo $ITEM[STORE_ITEMS_ID] ?>").val(4);
                                                                                                                                });
                                                                                                                                $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").click(function(){
                                                                                                                                    $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").addClass("fas");
                                                                                                                                    $("#e-fas-star-2-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-3-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-4-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#e-fas-star-5-<?php echo $ITEM[STORE_ITEMS_ID] ?>").removeClass("far");
                                                                                                                                    $("#InputItemRank-<?php echo $ITEM[STORE_ITEMS_ID] ?>").val(5);
                                                                                                                                });
                                                                                                                            });
                                                                                                                        </script>
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">    
                                                                                                                                <label for="InputItemRank">Rank</label><br>
                                                                                                                                <input type="hidden" min="1" name="InputItemRank" id="InputItemRank-<?php echo $ITEM[STORE_ITEMS_ID] ?>" class="form-control" placeholder="Item rank" min="1" max="5" value="<?php echo $ITEM[STORE_ITEMS_RANKING]; ?>" required>
                                                                                                                                <?php
                                                                                                                                    for( $i = 1 ; $i <= $ITEM[STORE_ITEMS_RANKING] ; $i++ ){
                                                                                                                                        echo "
                                                                                                                                            <span class='text-warning h5'>
                                                                                                                                                <i class='fas fa-star' id='e-fas-star-" . $i . "-" . $ITEM[STORE_ITEMS_ID] . "'></i>
                                                                                                                                            </span>";
                                                                                                                                    }

                                                                                                                                    if($ITEM[STORE_ITEMS_RANKING] < 5){
                                                                                                                                        for( $i = $ITEM[STORE_ITEMS_RANKING] + 1; $i <= 5 ; $i++ ){ 
                                                                                                                                            echo "
                                                                                                                                                <span class='text-warning h5' >
                                                                                                                                                    <i class='far fa-star' id='e-fas-star-" . $i . "-" . $ITEM[STORE_ITEMS_ID] . "'></i>
                                                                                                                                                </span>";
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="InputItemPrice">Price</label>
                                                                                                                                <input type="number" min="1" name="InputItemPrice" id="InputItemPrice" class="form-control" placeholder="Item price" value="<?php echo $ITEM[STORE_ITEMS_PRICE] ?>" required <?php if($ITEM[STORE_ITEMS_ROULETTE] == 1){?> disabled <?php } ?>>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputItemType">Type</label>
                                                                                                                <select type="text" name="InputItemType" id="InputItemType" class="form-control" required>
                                                                                                                    <option value="1" selected>Accumulative</option>
                                                                                                                    <option value="0">Non accumulative</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputItemVNum">VNum</label>
                                                                                                                <input type="number" name="InputItemVNum" id="InputItemVNum" class="form-control" placeholder="Item VNum" value="<?php echo $ITEM[STORE_ITEMS_VNUM] ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputItemAmount">Amount</label>
                                                                                                                <input type="number" name="InputItemAmount" id="InputItemAmount" class="form-control" placeholder="Item Amount" value="<?php echo $ITEM[STORE_ITEMS_AMOUNT]; ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputItemChooseAmount">Choose Amount</label>
                                                                                                                <input type="number" name="InputItemChooseAmount" id="InputItemChooseAmount" class="form-control" placeholder="Item Choose Amount" value="<?php echo $ITEM[STORE_ITEMS_AMOUNT_CHOOSE]; ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputItemUpgrade">Upgrade</label>
                                                                                                                <input type="number" name="InputItemUpgrade" id="InputItemUpgrade" class="form-control" placeholder="Item Upgrade" value="<?php echo $ITEM[STORE_ITEMS_UPGRADE]; ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputItemRare">Rare</label>
                                                                                                                <input type="number" name="InputItemRare" id="InputItemRare" class="form-control" placeholder="Item Upgrade" value="<?php echo $ITEM[STORE_ITEMS_RARE]; ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="<?php echo 'SelectItemCategory-' . $ID_MODAL ?>">Category</label>
                                                                                                                <select name="SelectItemCategory" id="<?php echo 'SelectItemCategory-' . $ID_MODAL ?>" class="form-control" required="required" <?php if($ITEM[STORE_ITEMS_ROULETTE] == 1){?> disabled <?php } ?>>
                                                                                                                    <option selected disabled="disabled" value="0">Select option</option>
                                                                                                                    <?php

                                                                                                                    $sql_store = $con->select("categoriesshop","*");////('SELECT * FROM ' . CATEGORY . ' WHERE ' . CATEGORY_ID . ' != ?');

                                                                                                                    foreach( $sql_store as $CATEGORY ){ ?>

                                                                                                                        <option value="<?php echo $CATEGORY[CATEGORY_ID]; ?>" <?php if( $CATEGORY[CATEGORY_ID] == $ITEM[STORE_ITEMS_CATEGORY]){ ?> selected <?php } ?>>
                                                                                                                        <?php echo $CATEGORY[CATEGORY_NAME] ?>    
                                                                                                                        </option><?php 
                                                                                                                    } ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="<?php echo "SelectItemSecondCategoriesId-" . $ID_MODAL; ?>">SecondCategoriesId</label>
                                                                                                                <select id="<?php echo "SelectItemSecondCategoriesId-" . $ID_MODAL; ?>" name="SelectItemSecondCategoriesId" class="form-control">
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <script type="text/javascript">
                                                                                                        $(document).ready(function(){
                                                                                                            $("<?php echo '#SelectItemCategory-' . $ID_MODAL ?>").val("<?php echo $ITEM[STORE_ITEMS_CATEGORY] ?>");

                                                                                                            categories<?php echo $ID_MODAL ?>();

                                                                                                            $("<?php echo '#SelectItemCategory-' . $ID_MODAL ?>").change(function(){
                                                                                                                categories<?php echo $ID_MODAL ?>();
                                                                                                            });
                                                                                                        })
                                                                                                    </script>
                                                                                                    <script type="text/javascript">
                                                                                                        function categories<?php echo $ID_MODAL ?>(){ 
                                                                                                            $.ajax({
                                                                                                                type:"POST",
                                                                                                                url:"consult?from=SelectCategories&&opt=<?php echo $ITEM[STORE_ITEMS_CATEGORY_2] ?>",
                                                                                                                data:"CTG=" +  $("<?php echo '#SelectItemCategory-' . $ID_MODAL ?>").val(),
                                                                                                                success:function(r){
                                                                                                                    $("<?php echo "#SelectItemSecondCategoriesId-" . $ID_MODAL; ?>").html(r);
                                                                                                                }
                                                                                                            });
                                                                                                        }
                                                                                                    </script>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="TextareaItemDescription">Description</label>
                                                                                                                <textarea class="form-control" rows="5" name="TextareaItemDescription" id="TextareaItemDescription"><?php echo $ITEM[STORE_ITEMS_DESCRIPTION]; ?></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                  
                                                                                                <div class="modal-footer border-0">
                                                                                                    <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                    <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Update</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <a data-toggle="modal" class="text-light" href="<?php echo '#DLTE-ITEM-ID-' . $ID_MODAL; ?>">
                                                                                    <i class="fad fa-times-circle"></i>
                                                                                </a>
                                                                                <!-- Delete item Slot Modal-->
                                                                                <div class="modal fade" id="<?php echo 'DLTE-ITEM-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">Are you sure?</h5>
                                                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">×</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body text-white">You sure you want to delete this item?</div>
                                                                                            <div class="modal-footer border-0">
                                                                                                <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                <a class="btn <?php echo $site['style']['btn-p']; ?>" href="consult?from=store&&target=DeleteItemSlot&&id=<?php echo $ITEM[STORE_ITEMS_ID] . "&&category=" . $ITEM[STORE_ITEMS_CATEGORY] . "&&admin=1"; ?>">Delete
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><?php
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 p-3">
                                                    <div class="p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . "; color: " . $site['style']['text-1'] ?>">
                                                        <h5>Roulette</h5>
                                                        <br>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <label for="InputRoulettePrice">Price</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <form name="FormRoulettePrice" action="consult?from=admin&&target=update&&ref=roulette&&act=price" method="POST">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <input type="number" class="form-control border-0 h-100" aria-label="Price" value="<?php echo $site['roulette_price'] ?>" name="InputRoulettePrice" id="InputRoulettePrice">
                                                                            <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Update</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <label for="SelectRouletteCategory">Category</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <form name="FormRouletteCategory" id="FormRouletteCategory" action="consult?from=admin&&target=update&&ref=roulette&&act=category" method="POST">
                                                                    <select name="SelectRouletteCategory" id="SelectRouletteCategory" class="form-control" required="required" onchange="submitform('#FormRouletteCategory', 'FormRouletteCategory')">
                                                                        <?php

                                                                        $sql_store = $con->select("categoriesshop","*");//('SELECT * FROM ' . CATEGORY);

                                                                        foreach( $sql_store as $CATEGORY ){ ?>
                                                                            <option value="<?php echo $CATEGORY[CATEGORY_ID]; ?>" <?php if( $CATEGORY[CATEGORY_ID] == $site['roulette_category']){ ?> selected <?php } ?>>
                                                                            <?php echo $CATEGORY[CATEGORY_NAME] ?>    
                                                                            </option><?php 
                                                                        } ?>
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h5>Store</h5>
                                                        <br>
                                                        <div class="form-row">
                                                            <div class="col-md-8">
                                                                <label for="StoreStatus">Maintenance mode</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <form action="consult?from=admin&&target=store&&ext=check" method="POST" class="w-100" name="StoreCheck" id="StoreCheck">
                                                                    <label class="switch">
                                                                        <input type="hidden" name="StoreStatus" value="WORKING" />
                                                                        <input type="checkbox" name="StoreStatus" value="MAINTENANCE" onchange="submit()" 
                                                                        <?php if($site['status_store'] != 'WORKING'){ ?> checked <?php } ?> />
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <a type="button" data-toggle="modal" class="btn <?php echo $site['style']['btn-p']; ?> w-100" href="#AddItemModal">
                                                            New item
                                                        </a>
                                                        <!-- New item Modal -->
                                                        <div class="modal fade" id="AddItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                    <form name="FormNewitemSlot" enctype="multipart/form-data" action="consult?from=store&&target=AddItemSlot" method="POST">
                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">New Item</h5>
                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="p-3 w-100" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                                            <div class="form-row text-center">
                                                                                <div class="col-md-3">
                                                                                    <label class="m-0" for="RouletteCheck">Roulette</label>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="switch m-0" style="height: 26px">
                                                                                        <input type="hidden" name="RouletteCheck" id="RouletteCheck" value="0" />
                                                                                        <input type="checkbox" name="RouletteCheck" id="RouletteCheck" value="1" onclick = "
                                                                                            InputItemPrice.disabled     = this.checked;
                                                                                            SelectItemCategory.disabled  = this.checked;
                                                                                        jackpot();" />
                                                                                        <span class="slider round"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-md-3" id="jackpot-s" style="display: none;">
                                                                                    <label class="m-0" for="JackpotCheck">Jackpot</label>
                                                                                </div>
                                                                                <div class="col-md-3" id="jackpot-c" style="display: none;">
                                                                                    <label class="switch m-0" style="height: 26px">
                                                                                        <input type="hidden" name="JackpotCheck" id="JackpotCheck" value="0" />
                                                                                        <input type="checkbox" name="JackpotCheck" id="JackpotCheck" value="1" />
                                                                                        <span class="slider round"></span>
                                                                                    </label>
                                                                                </div>      
                                                                            </div>
                                                                        </div>
                                                                        <script type="text/javascript">
                                                                            function jackpot() {
                                                                                var s = document.getElementById("jackpot-s");
                                                                                var c = document.getElementById("jackpot-c");

                                                                                if (s.style.display === "none" || c.style.display === "none") {
                                                                                    s.style.display = "block";
                                                                                    c.style.display = "block";
                                                                                } else {
                                                                                    s.style.display = "none";
                                                                                    c.style.display = "none";
                                                                                }
                                                                            }
                                                                        </script>
                                                                        <div class="modal-body text-white">
                                                                            <div class="form-row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemType">Type</label>
                                                                                        <select type="text" name="InputItemType" id="InputItemType" class="form-control" required>
                                                                                            <option value="1" selected>Accumulative</option>
                                                                                            <option value="0">Non accumulative</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemVNum">VNum</label>
                                                                                        <input type="number" name="InputItemVNum" id="InputItemVNum" class="form-control" placeholder="Item VNum" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label>Image</label>
                                                                                        <label for="InputUploadedPic" class="btn <?php echo $site['style']['btn-p'] ?> w-100 rounded text-center">
                                                                                            <i class="fad fa-plus-circle"></i> UPLOAD
                                                                                        </label>
                                                                                        <input name="InputUploadedPic" id="InputUploadedPic" class="d-none" type="file" accept="image/png, image/jpeg, image/jpg" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemPrice">Price</label>
                                                                                        <input type="number" min="1" name="InputItemPrice" id="InputItemPrice" class="form-control" placeholder="Item price" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemChooseAmount">Choose Amount</label>
                                                                                        <input type="number" name="InputItemChooseAmount" id="InputItemChooseAmount" class="form-control" placeholder="Item Choose Amount" value="1" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemRank">Rank</label>
                                                                                        <input type="number" min="1" name="InputItemRank" id="InputItemRank" class="form-control" placeholder="Item rank" min="1" max="5" value="5" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemAmount">Amount</label>
                                                                                        <input type="number" name="InputItemAmount" id="InputItemAmount" class="form-control" placeholder="Item Amount" value="1" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemUpgrade">Upgrade</label>
                                                                                        <input type="number" name="InputItemUpgrade" id="InputItemUpgrade" class="form-control" placeholder="Item Upgrade" value="0" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="InputItemRare">Rare</label>
                                                                                        <input type="number" name="InputItemRare" id="InputItemRare" class="form-control" placeholder="Item Upgrade" value="0" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="SelectItemCategory">Category</label>
                                                                                        <select name="SelectItemCategory" id="SelectItemCategory" class="form-control" required="required" >
                                                                                            <option selected disabled="disabled" value="0">Select option</option>
                                                                                            <?php

                                                                                            $sql_store = $con->select("categoriesshop","*");////('SELECT * FROM ' . CATEGORY . ' WHERE ' . CATEGORY_ID . ' != ?');

                                                                                            foreach( $sql_store as $CATEGORY ){

                                                                                                echo "<option value='" . $CATEGORY[CATEGORY_ID] . "'>" . $CATEGORY[CATEGORY_NAME] . "</option>";
                                                                                            } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="SelectItemSecondCategoriesId">SecondCategoriesId</label>
                                                                                        <select id="SelectItemSecondCategoriesId" name="SelectItemSecondCategoriesId" class="form-control">
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script type="text/javascript">
                                                                                $(document).ready(function(){
                                                                                    $('#SelectItemCategory').val();
                                                                                    categories();

                                                                                    $('#SelectItemCategory').change(function(){
                                                                                        categories();
                                                                                    });
                                                                                })
                                                                            </script>
                                                                            <script type="text/javascript">
                                                                                function categories(){ 
                                                                                    $.ajax({
                                                                                        type:"POST",
                                                                                        url:"consult?from=SelectCategories",
                                                                                        data:"CTG=" +  $('#SelectItemCategory').val(),
                                                                                        success:function(r){
                                                                                            $('#SelectItemSecondCategoriesId').html(r);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            </script>
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="TextareaItemDescription">Description</label>
                                                                                        <textarea class="form-control" rows="5" name="TextareaItemDescription" id="TextareaItemDescription"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer border-0">
                                                                            <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                            <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Add</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <table class="w-100 text-center mt-3">
                                                            <thead>
                                                                <th class="p-2 text-left">
                                                                    <h5>Store categories
                                                                        <a data-toggle="modal" class="text-light" href="#AddCategoryModal">
                                                                            <i class="fad fa-plus-circle"></i>
                                                                        </a>
                                                                    </h5>
                                                                    <!-- New category Modal-->
                                                                    <div class="modal fade" id="AddCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                    <h5 class="modal-title font-roboto" id="exampleModalLabel">Add category</h5>
                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form name="FormAddCategory" action="consult?from=store&&target=AddNewCategory" method="POST">
                                                                                    <div class="modal-body">
                                                                                        <div class="form-row">
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label for="InputCategoryTitle">Name of new category</label>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <input type="text" name="InputCategoryTitle" id="InputCategoryTitle" class="form-control" placeholder="Category title" required>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label for="InputCategoryTitle">Visibility</label>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="switch m-0" style="height: 26px">
                                                                                                    <input type="hidden" name="VisibilityCheck" id="VisibilityCheck" value="0" />
                                                                                                    <input type="checkbox" name="VisibilityCheck" id="VisibilityCheck" value="1" checked />
                                                                                                    <span class="slider round"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer border-0">
                                                                                        <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                        <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Add</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <th></th>
                                                                <th></th>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                            $SQL_CTG = $con->select("categoriesshop","*");//('SELECT * FROM ' . CATEGORY);
                                                            foreach($SQL_CTG as $CATEGORY){ $ID_MODAL = strval($CATEGORY[CATEGORY_ID]); ?>

                                                                <tr>
                                                                    <td class="text-left pl-4 py-2">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <a data-toggle="modal" class="text-light" href="#folder" class="text-light">
                                                                                    <i  id="<?php echo 'folder-' . $CATEGORY[CATEGORY_ID] ?>" class="fad fa-folder"></i>
                                                                                </a>
                                                                                <a data-toggle="modal" class="text-light h6" href="<?php echo '#EDIT-CTG-ID-' . $ID_MODAL; ?>">
                                                                                    <?php echo $CATEGORY[CATEGORY_NAME]; ?>
                                                                                </a>
                                                                                <!-- Edit Category Modal-->
                                                                                <div class="modal fade" id="<?php echo 'EDIT-CTG-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">Edit category</h5>
                                                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">×</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <form name="FormAddCategory" action="consult?from=store&&target=EditCategory&&id=<?php echo $CATEGORY[CATEGORY_ID]; ?>" method="POST">
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-6 mb-3">
                                                                                                            <label for="InputEditCategoryTitle">Name of category</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-6 mb-3">
                                                                                                            <input type="text" name="InputEditCategoryTitle" id="InputEditCategoryTitle" class="form-control" placeholder="Category title" value="<?php echo $CATEGORY[CATEGORY_NAME]; ?>" required>
                                                                                                        </div>
                                                                                                        <div class="col-md-6 mb-3">
                                                                                                            <label for="InputCategoryTitle">Visibility</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-6 mb-3">
                                                                                                            <label class="switch m-0" style="height: 26px">
                                                                                                                <input type="hidden" name="VisibilityCheck" id="VisibilityCheck" value="0" />
                                                                                                                <input type="checkbox" name="VisibilityCheck" id="VisibilityCheck" value="1" <?php if($CATEGORY[CATEGORY_VISIBILITY] == 1){?> checked <?php } ?>/>
                                                                                                                <span class="slider round"></span>
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer border-0">
                                                                                                    <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                    <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Update</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="<?php echo 'SecondCategories-' . $CATEGORY[CATEGORY_ID] ?>" class="d-none"><?php

                                                                                $SQL_S_CTG = $con->select("secondcategoriesshop","*",["categoriesid" => $CATEGORY[CATEGORY_ID]]); //('SELECT * FROM ' . S_CATEGORY . ' WHERE ' . S_CATEGORY_ID_F . ' = ?');

                                                                                foreach($SQL_S_CTG as $S_CTG){ 
                                                                                    $ID_MODAL = strval($S_CTG["secondcategoriesid"]); ?>

                                                                                    <div class='col-md-12 pl-3' style='margin-top: -5px;'>
                                                                                        <div class='w-100'>├ 
                                                                                            <span style="margin-left: -5px">─ </span> 
                                                                                            <a data-toggle="modal" class="text-light" href="<?php echo '#EDIT-S-CTG-ID-' . $ID_MODAL ?>">
                                                                                                <?php echo $S_CTG["name"]; ?>
                                                                                            </a>
                                                                                            <!-- Edit Category Modal-->
                                                                                            <div class="modal fade" id="<?php echo 'EDIT-S-CTG-ID-' . $ID_MODAL ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog" role="document">
                                                                                                    <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Manage sub category</h5>
                                                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">×</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <form name="FormEditSecondCategory" action="consult?from=store&&target=EditSecondCategory&&id=<?php echo $S_CTG[S_CATEGORY_ID]; ?>" method="POST">
                                                                                                            <div class="modal-body">
                                                                                                                <div class="form-row">
                                                                                                                    <div class="col-md-6 mb-2">
                                                                                                                        <div class="form-group">
                                                                                                                            <label for="InputEditCategoryTitle">Name of sub category</label>
                                                                                                                            <input type="text" name="InputEditCategoryTitle" id="InputEditCategoryTitle" class="form-control" placeholder="Category title" value="<?php echo $S_CTG[S_CATEGORY_NAME]; ?>" required>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group">
                                                                                                                            <label for="SelectHeadSubCategory">Head</label>
                                                                                                                            <select name="SelectHeadSubCategory" id="SelectHeadSubCategory" class="form-control" required>
                                                                                                                            <?php

                                                                                                                            $sql_store_ctg = $con->select("secondcategoriesshop","*");//('SELECT * FROM ' . CATEGORY . ' WHERE ' . CATEGORY_ID . ' != ?');

                                                                                                                                foreach( $sql_store_ctg as $CTG){ ?>

                                                                                                                                    <option value="<?php echo $CTG["categoriesid"]; ?>" <?php if( $CTG["categoriesid"] == $CATEGORY["categoriesid"]){ ?> selected <?php } ?>>
                                                                                                                                    <?php echo $CTG["name"] ?>    
                                                                                                                                    </option><?php 
                                                                                                                                } ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row m-0 border-0 p-3">
                                                                                                                <div class="col-md-4 p-0">
                                                                                                                    <a href="consult?from=store&&target=DeleteSecondCategory&&id=<?php echo $S_CTG[S_CATEGORY_ID] . '&&head=' .  $CATEGORY[CATEGORY_ID]; ?>" class="btn btn-danger">
                                                                                                                        <i class="fad fa-trash-alt"></i>
                                                                                                                        Delete
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="col-md-8 p-0 text-right">
                                                                                                                    <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                                    <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Update</button>
                                                                                                                </div> 
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div><?php
                                                                                } ?>
                                                                                <div class="col-md-12 pl-3" style="margin-top: -5px;">
                                                                                    <div class='w-100'>└ 
                                                                                        <span style="margin-left: -5px">─ </span> 
                                                                                        <a data-toggle="modal" class="text-light" href="<?php echo '#ADD-S-CTG-ID-' . $ID_MODAL ?>">
                                                                                            <i class="fad fa-folder-plus"></i>
                                                                                        </a>
                                                                                        <!-- New second category Modal-->
                                                                                        <div class="modal fade" id="<?php echo 'ADD-S-CTG-ID-' . $ID_MODAL ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog" role="document">
                                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                                    <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                        <h5 class="modal-title font-roboto" id="exampleModalLabel">Add second category</h5>
                                                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">×</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <form name="FormAddSecondCategory" action="consult?from=store&&target=AddNewSecondCategory&&id=<?php echo $CATEGORY[CATEGORY_ID] ?>" method="POST">
                                                                                                        <div class="modal-body">
                                                                                                            <div class="form-row">
                                                                                                                <div class="col-md-12 mb-2">
                                                                                                                    <label for="InputSecondCategoryTitle">Name of new second category</label>
                                                                                                                    <input type="text" name="InputSecondCategoryTitle" id="InputSecondCategoryTitle" class="form-control" placeholder="Category title" required>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer border-0">
                                                                                                            <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                            <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Add</button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>  
                                                                                </div>
                                                                            </div>
                                                                            <script type="text/javascript">
                                                                                $(document).ready( function(){
                                                                                    $("<?php echo '#folder-' . $CATEGORY[CATEGORY_ID] ?>").click(function(){
                                                                                        if($(this).hasClass('fa-folder')){
                                                                                            $('<?php echo '#SecondCategories-' . $CATEGORY[CATEGORY_ID] ?>').addClass('d-block').removeClass('d-none');
                                                                                            $(this).addClass('fa-folder-open').removeClass('fa-folder');
                                                                                        }

                                                                                        else {
                                                                                            $('<?php echo '#SecondCategories-' . $CATEGORY[CATEGORY_ID] ?>').addClass('d-none').removeClass('d-block');
                                                                                            $(this).addClass('fa-folder').removeClass('fa-folder-open');
                                                                                        }
                                                                                    });
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                    </td>
                                                                    <td><?php

                                                                        if($CATEGORY[CATEGORY_VISIBILITY] == 0)
                                                                            echo "<i class='fad fa-eye-slash'></i>";
                                                                        else
                                                                            echo "<i class='fad fa-eye'></i>";
                                                                        ?>
                                                                    </td>
                                                                    <td class="p-2"><?php
                                                                        if($CATEGORY[CATEGORY_ID] != $site['roulette_category']){ ?>
                                                                            <a data-toggle="modal" class="text-light" href="<?php echo '#DLTE-CTG-ID-' . $ID_MODAL; ?>">
                                                                                <i class="fad fa-trash-alt"></i>
                                                                            </a>
                                                                            <!-- Remove Category Modal-->
                                                                            <div class="modal fade" id="<?php echo 'DLTE-CTG-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                        <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                            <h5 class="modal-title font-roboto" id="exampleModalLabel">Remove category</h5>
                                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form name="FormRemoveCategory" action="consult?from=store&&target=RemoveCategory" method="POST">
                                                                                            <div class="modal-body">
                                                                                                You sure you want to delete this category?
                                                                                                <input type="hidden" name="InputItemCategory" id="InputItemCategory" value="<?php echo $CATEGORY[CATEGORY_ID]; ?>">
                                                                                            </div>
                                                                                            <div class="modal-footer border-0">
                                                                                                <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Delete</a>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div><?php 
                                                                        } else echo "<i class='fad fa-lock-alt text-success'></i>"; ?>
                                                                    </td>
                                                                </tr><?php 
                                                            } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif ($CARD == 'coins'    ) { ?>

                                        <div class="pl-3 pr-3 pb-3">
                                            <div class="row m-0">
                                                <div class="col-md-4 p-0 mt-3">
                                                    <a type="button" data-toggle="modal" class="btn <?php echo $site['style']['btn-p']; ?>" href="#AddSlotCoinModal">
                                                        New coins slot
                                                    </a>
                                                    <!-- New Slot Coin Modal -->
                                                    <div class="modal fade" id="AddSlotCoinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                <form name="FormNewCoinSlot" action="consult?from=store&target=AddCoinSlot" method="POST">
                                                                    <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                        <h5 class="modal-title font-roboto" id="exampleModalLabel">New coins slot</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-white text-center">
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="InputCoinsAmount">Coins</label>
                                                                                    <input type="number" min="1" name="InputCoinsAmount" id="InputCoinsAmount" class="form-control" placeholder="Coins amount" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="InputCoinsPrice">Price</label>
                                                                                    <input type="number" min="1" name="InputCoinsPrice" id="InputCoinsPrice" class="form-control" placeholder="Coins price" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <script>
                                                                                        $(document).ready(function(){
                                                                                            $("#fas-star-1").click(function(){
                                                                                                $("#fas-star-2").addClass("far");
                                                                                                $("#fas-star-3").addClass("far");
                                                                                                $("#fas-star-4").addClass("far");
                                                                                                $("#fas-star-5").addClass("far");
                                                                                                $("#fas-star-2").removeClass("fas");
                                                                                                $("#fas-star-3").removeClass("fas");
                                                                                                $("#fas-star-4").removeClass("fas");
                                                                                                $("#fas-star-5").removeClass("fas");
                                                                                                $("#InputCoinsRank").val(1);
                                                                                            });
                                                                                            $("#fas-star-2").click(function(){
                                                                                                $("#fas-star-2").addClass("fas");
                                                                                                $("#fas-star-3").addClass("far");
                                                                                                $("#fas-star-4").addClass("far");
                                                                                                $("#fas-star-5").addClass("far");
                                                                                                $("#fas-star-2").removeClass("fad");
                                                                                                $("#fas-star-3").removeClass("fas");
                                                                                                $("#fas-star-4").removeClass("fas");
                                                                                                $("#fas-star-5").removeClass("fas");
                                                                                                $("#InputCoinsRank").val(2);
                                                                                            });
                                                                                            $("#fas-star-3").click(function(){
                                                                                                $("#fas-star-2").addClass("fas");
                                                                                                $("#fas-star-3").addClass("fas");
                                                                                                $("#fas-star-4").addClass("far");
                                                                                                $("#fas-star-5").addClass("far");
                                                                                                $("#fas-star-2").removeClass("fad");
                                                                                                $("#fas-star-3").removeClass("fad");
                                                                                                $("#fas-star-4").removeClass("fas");
                                                                                                $("#fas-star-5").removeClass("fas");
                                                                                                $("#InputCoinsRank").val(3);
                                                                                            });
                                                                                            $("#fas-star-4").click(function(){
                                                                                                $("#fas-star-2").addClass("fas");
                                                                                                $("#fas-star-3").addClass("fas");
                                                                                                $("#fas-star-4").addClass("fas");
                                                                                                $("#fas-star-5").addClass("far");
                                                                                                $("#fas-star-2").removeClass("fad");
                                                                                                $("#fas-star-3").removeClass("fad");
                                                                                                $("#fas-star-4").removeClass("fad");
                                                                                                $("#fas-star-5").removeClass("fas");
                                                                                                $("#InputCoinsRank").val(4);
                                                                                            });
                                                                                            $("#fas-star-5").click(function(){
                                                                                                $("#fas-star-2").addClass("fas");
                                                                                                $("#fas-star-3").addClass("fas");
                                                                                                $("#fas-star-4").addClass("fas");
                                                                                                $("#fas-star-5").addClass("fas");
                                                                                                $("#fas-star-2").removeClass("fad");
                                                                                                $("#fas-star-3").removeClass("fad");
                                                                                                $("#fas-star-4").removeClass("fad");
                                                                                                $("#fas-star-5").removeClass("fad");
                                                                                                $("#InputCoinsRank").val(5);
                                                                                            });
                                                                                        });
                                                                                    </script>
                                                                                    <label for="InputCoinsRank">Rank</label>
                                                                                    <br>
                                                                                    <input type="hidden" name="InputCoinsRank" id="InputCoinsRank" class="form-control" placeholder="Item rank" value="5" required>
                                                                                    <?php
                                                                                        for( $i = 1 ; $i <= 5 ; $i++ ){
                                                                                            echo "
                                                                                                <span class='text-warning h5'>
                                                                                                    <i class='fas fa-star' id='fas-star-" . $i . "'></i>
                                                                                                </span>";
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="TextareaCoinsDescription">Description</label>
                                                                                    <textarea class="form-control" rows="5" name="TextareaCoinsDescription" id="TextareaCoinsDescription"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer border-0">
                                                                        <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                        <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Add</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 p-0 mt-3">
                                                </div>
                                                <div class="col-md-4 p-0 mt-3">
                                                </div>
                                            </div>
                                            <!-- Coins Slots Table -->
                                            <div class="row">
                                                <div class="col-md-8 mt-3">
                                                    <div class="card border-0">
                                                        <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] ?>">
                                                            <table class="table border-0" id="dataTable" width="100%" cellspacing="0" style="<?php echo "color: " . $site['style']['text-1'] ?>">
                                                                <thead class="bg-black">
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Coins</th>
                                                                        <th>Price</th>
                                                                        <th>Description</th>
                                                                        <th>Rank</th>
                                                                        <th>Manage</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $temp = $con->query('SET search_path TO web;');
                                                                    $sql_coins_slots = $con->select("coinsweb","*");//('SELECT * FROM ' . STORE_COINS);

                                                                    foreach($sql_coins_slots as $COINS ){

                                                                        $ID_MODAL = strval($COINS[STORE_COINS_ID]); ?>
                                                                        <tr>
                                                                            <td class="text-center"><?php echo $COINS[STORE_COINS_ID]; ?></td>
                                                                            <td><?php echo $COINS[STORE_COINS_AMOUNT]; ?></td>
                                                                            <td><?php echo $COINS[STORE_COINS_PRICE]; ?></td>
                                                                            <td><?php echo $COINS[STORE_COINS_DESCRIPTION]; ?></td>
                                                                            <td><?php
                                                                                    for( $i = 1 ; $i <= $COINS[STORE_COINS_RANKING] ; $i++ ){
                                                                                        echo "
                                                                                            <small class='text-warning'>
                                                                                                <i class='fas fa-star'></i>
                                                                                            </small>";
                                                                                    }

                                                                                    if($COINS[STORE_COINS_RANKING] < 5){
                                                                                        for( $i = 1 ; $i <= 5 - $COINS[STORE_COINS_RANKING] ; $i++ ){ 
                                                                                            echo "
                                                                                                <small class='text-warning' >
                                                                                                    <i class='far fa-star'></i>
                                                                                                </small>";
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <a data-toggle="modal" class="text-light" href="<?php echo '#EDIT-COINS-SLOT-ID-' . $ID_MODAL; ?>">
                                                                                    <i class="fad fa-edit"></i>
                                                                                </a>
                                                                                <!-- Edit Coins Slot Modal -->
                                                                                <div class="modal fade" id="<?php echo 'EDIT-COINS-SLOT-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                            <form name="FormEditCoinSlot" action="consult?from=store&&target=EditCoinSlot&&id=<?php echo $COINS[STORE_COINS_ID]; ?>" method="POST">
                                                                                                <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                    <h5 class="modal-title font-roboto" id="exampleModalLabel">Edit coins slot</h5>
                                                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">×</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body text-white">
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputCoinsAmount">Coins</label>
                                                                                                                <input type="number" min="1" name="InputCoinsAmount" id="InputCoinsAmount" class="form-control" placeholder="Coins amount" value="<?php echo $COINS[STORE_COINS_AMOUNT]; ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label for="InputCoinsPrice">Price</label>
                                                                                                                <input type="number" min="1" name="InputCoinsPrice" id="InputCoinsPrice" class="form-control" placeholder="Coins price" value="<?php echo $COINS[STORE_COINS_PRICE]; ?>" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <script>
                                                                                                                    $(document).ready(function(){
                                                                                                                        $("#e-fas-star-1-<?php echo $COINS[STORE_COINS_ID] ?>").click(function(){
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#InputCoinsRank-<?php echo $COINS[STORE_COINS_ID] ?>").val(1);
                                                                                                                        });
                                                                                                                        $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").click(function(){
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#InputCoinsRank-<?php echo $COINS[STORE_COINS_ID] ?>").val(2);
                                                                                                                        });
                                                                                                                        $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").click(function(){
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#InputCoinsRank-<?php echo $COINS[STORE_COINS_ID] ?>").val(3);
                                                                                                                        });
                                                                                                                        $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").click(function(){
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("far");
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("fas");
                                                                                                                            $("#InputCoinsRank-<?php echo $COINS[STORE_COINS_ID] ?>").val(4);
                                                                                                                        });
                                                                                                                        $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").click(function(){
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").addClass("fas");
                                                                                                                            $("#e-fas-star-2-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-3-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-4-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#e-fas-star-5-<?php echo $COINS[STORE_COINS_ID] ?>").removeClass("far");
                                                                                                                            $("#InputCoinsRank-<?php echo $COINS[STORE_COINS_ID] ?>").val(5);
                                                                                                                        });
                                                                                                                    });
                                                                                                                </script>
                                                                                                                <label for="InputCoinsRank">Rank</label>
                                                                                                                <input type="hidden" name="InputCoinsRank" id="InputCoinsRank-<?php echo $COINS[STORE_COINS_ID] ?>" class="form-control" placeholder="Item rank" value="<?php echo $COINS[STORE_COINS_RANKING]; ?>" required>
                                                                                                                <br>
                                                                                                                <?php
                                                                                                                    for( $i = 1 ; $i <= $COINS[STORE_COINS_RANKING] ; $i++ ){
                                                                                                                        echo "
                                                                                                                            <span class='text-warning h5'>
                                                                                                                                <i class='fas fa-star' id='e-fas-star-" . $i . "-" . $COINS[STORE_COINS_ID] . "'></i>
                                                                                                                            </span>";
                                                                                                                    }

                                                                                                                    if($COINS[STORE_COINS_RANKING] < 5){
                                                                                                                        for( $i = $COINS[STORE_COINS_RANKING] + 1; $i <= 5 ; $i++ ){ 
                                                                                                                            echo "
                                                                                                                                <span class='text-warning h5' >
                                                                                                                                    <i class='far fa-star' id='e-fas-star-" . $i . "-" . $COINS[STORE_COINS_ID] . "'></i>
                                                                                                                                </span>";
                                                                                                                        }
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="TextareaCoinsDescription">Description</label>
                                                                                                                <textarea class="form-control" rows="5" name="TextareaCoinsDescription" id="TextareaCoinsDescription"><?php echo $COINS[STORE_COINS_DESCRIPTION]; ?></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer border-0">
                                                                                                    <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                    <button class="btn <?php echo $site['style']['btn-p']; ?>" type="submit">Update</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <a data-toggle="modal" class="text-light" href="<?php echo '#DLTE-COINS-SLOT-ID-' . $ID_MODAL; ?>">
                                                                                    <i class="fad fa-times-circle"></i>
                                                                                </a>
                                                                                <!-- Delete item Slot Modal-->
                                                                                <div class="modal fade" id="<?php echo 'DLTE-COINS-SLOT-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                            <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                                <h5 class="modal-title font-roboto" id="exampleModalLabel">Are you sure?</h5>
                                                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">×</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body text-white">You sure you want to delete this slot?</div>
                                                                                            <div class="modal-footer border-0">
                                                                                                <button class="btn <?php echo $site['style']['btn-s']; ?>" type="button" data-dismiss="modal">Cancel</button>
                                                                                                <a class="btn <?php echo $site['style']['btn-p']; ?>" href="consult?from=store&&target=DeleteCoinSlot&&id=<?php echo $COINS[STORE_COINS_ID]; ?>">Delete</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><?php
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-3 p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <div class="input-group mb-2">
                                                                <label for="StoreStatus">
                                                                    <i class="fas fa-tools"></i> Maintenance mode
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group mb-2 text-center">
                                                                <form action="consult?from=admin&&target=coins&&ext=check" method="POST" class="w-100" name="StoreCoinCheck" id="StoreCoinCheck">
                                                                    <label class="switch">
                                                                        <input type="hidden" name="StoreCoinStatus" value="WORKING" />
                                                                        <input type="checkbox" name="StoreCoinStatus" value="MAINTENANCE" onchange="submitform('#StoreCoinCheck', 'StoreCoinCheck')" 
                                                                        <?php if($site['coin_status'] != 'WORKING'){ ?> checked <?php } ?> />
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h6><i class="fad fa-tags"></i>
                                                        Promotions
                                                    </h6>
                                                    <br>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <form name="FormCoinsDiscount" action="consult?from=admin&&target=coins&&ext=promo" method="POST">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend w-50">
                                                                        <span class="input-group-text w-100">Discount (%)</span>
                                                                    </div>
                                                                    <input type="number" class="form-control border-0 text-center" aria-label="Price" value="<?php echo $site['coin_discount'] ?>" name="InputCoinsDiscount" required min="0" placeholder="0">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend w-50">
                                                                        <span class="input-group-text w-100">Bonus (%)</span>
                                                                    </div>
                                                                    <input type="number" class="form-control border-0 text-center" aria-label="Price" value="<?php echo $site['coin_bonus'] ?>" name="InputCoinsBonus" required min="0" placeholder="0">
                                                                </div>
                                                                <button class="btn <?php echo $site['style']['btn-p']; ?> w-100" type="submit">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif ($CARD == 'log'      ) { ?>

                                        <div class="p-3">
                                            <div class="card border-0">
                                                <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] ?>">
                                                    <table class="table border-0" id="dataTable" width="100%" cellspacing="0" style="<?php echo "color: " . $site['style']['text-1'] ?>">
                                                        <thead class="bg-black">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>User ID</th>
                                                                <th>Username</th>
                                                                <th>Log IP</th>
                                                                <th>Activity</th>
                                                                <th>Time</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $temp = $con->query('SET search_path TO web;');
                                                            $sql_act_log = $con->query("SELECT * FROM activitylogweb ORDER BY id DESC")->fetchAll();//"activitylogweb","*",["ORDER" => ["log_date"=> 'DESC', "log_time" => 'ASC']]);//('SELECT * FROM ' . LOG);

                                                            foreach( $sql_act_log as $LOG  ){
                                                                $temp = $con->query('SET search_path TO accounts;');
                                                                $sql_log_username = $con->select("accounts","Name",["Id" => $LOG[LOG_USER_ID]]);//('SELECT ' . USER_NICK . ' FROM ' . USER . ' WHERE ' . USER_ID . ' = ?');

                                                                $LOG_USERNAME = $sql_log_username;

                                                                $ID_MODAL = strval($LOG['id']); ?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo $LOG['id']; ?></td>
                                                                    <td><?php echo $LOG[LOG_USER_ID]; ?></td>
                                                                    <td>
                                                                    <?php
                                                                        
                                                                        if($LOG[LOG_USER_ID] != $_SESSION['USER_ID'])
                                                                            echo "<a href='index?to=admin&&card=users&&user_details_id=" . $LOG[LOG_USER_ID] . "' target='_blank'>" . $LOG_USERNAME[0] . "</a>"; 
                                                                        else
                                                                            echo $LOG_USERNAME[0];
                                                                    ?>
                                                                    </td>
                                                                    <td><?php echo $LOG[LOG_IP]; ?></td>
                                                                    <td><?php echo $LOG[LOG_DESCRIPTION]; ?></td>
                                                                    <td><?php echo $LOG[LOG_TIME]; ?></td>
                                                                    <td><?php echo $LOG[LOG_DATE]; ?></td>
                                                                </tr><?php
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif ($CARD == 'advanced' ) { ?>

                                        <div class="mb-3 p-3 bg-danger text-light text-center">
                                            <span>
                                                <i class="fas fa-exclamation-circle"></i> Avoid changing these settings if you are not a <strong>developer </strong><i class="fas fa-code"></i>
                                            </span>
                                        </div>
                                        <div class="m-3">
                                            <form method="POST" action="consult?from=admin&&target=update&&ref=advanced">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <h5>CDN's</h5>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">JQuery</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSiteJQueryCdn" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['jquery-cdn']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">JQuery Mask</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSiteJQueryMsk" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['jquery-msk']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">Font Awesome</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSiteFntAw" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['fnt-aw-cdn']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <hr>
                                                        <h5>Local paths</h5>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">JavaScript</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSitePathJS" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['javascript']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">CSS</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSitePathCSS" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['css']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">Images</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSitePathImages" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['images']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-2">
                                                            <span class="mr-2">Videos</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="InputSitePathVideo" class="form-control bg-custom-4 text-white border-0" value="<?php echo $site['assets']['video']; ?>" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-100 text-center mt-5">
                                                    <button type="submit" class="btn <?php echo $site['style']['btn-p']; ?>">Update</button>
                                                </div>
                                            </form>
                                        </div>

                                    <?php } elseif ($CARD == 'payreq'   ) { ?>

                                        <div class="p-3">
                                            <div class="card border-0">
                                                <div class="table-responsive p-3" style="<?php echo "background-color: " . $site['style']['color-1'] . '; color: ' . $site['style']['text-1'] ?>">
                                                    <table class="table text-light border-0" id="dataTable" width="100%" cellspacing="0">
                                                        <thead class="bg-black">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>User ID</th>
                                                                <th>Username</th>
                                                                <th>Method</th>
                                                                <th>Code</th>
                                                                <th>Coins</th>
                                                                <th>Price</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $temp = $con->query('SET search_path TO web;');
                                                            $sql_pay_req = $con->select("PaymentWeb","*");//('SELECT * FROM ' . PAY_REQ);

                                                            foreach($sql_pay_req as $PAY){
                                                                $temp = $con->query('SET search_path TO accounts;');
                                                                $sql_payer_username = $con->select("accounts","Name",["Id" => $PAY['PayerID']]);//('SELECT ' . USER_NICK . ' FROM ' . USER . ' WHERE ' . USER_ID . ' = ?');
                                                                $PAY_USERNAME 	= $sql_payer_username;
                                                                $temp = $con->query('SET search_path TO web;');
                                                                $sql_coins_info = $con->select("coinsweb",["Coins","Price"],["Description" => $PAY['Description']]);//('SELECT * FROM ' . STORE_COINS . ' WHERE ' . STORE_COINS_ID . ' = ?');
                                                                $COINS_INFO 	= $sql_coins_info[0];
                                                                $ID_MODAL = strval($PAY[PAY_REQ_ID]); ?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo $PAY['PayerID']; ?></td>
                                                                    <td><?php echo $PAY['PayerID']; ?></td>
                                                                    <td><?php

                                                                        if ($PAY['PayerID'] != $_SESSION['USER_ID'])
                                                                            echo "<a href='index?to=admin&&card=users&&user_details_id=" . $PAY['PayerID'] . "' target='_blank'>" . $PAY_USERNAME[0] . "</a>"; 
                                                                        else
                                                                            echo $PAY_USERNAME[0];
                                                                        ?>
                                                                    </td>
                                                                    <td><?php echo $PAY['Method']; ?></td>
                                                                    <td>
                                                                        <a data-toggle="modal" class="btn <?php echo $site['style']['btn-p']; ?>" href="<?php echo '#PAY-REQ-ID-' . $ID_MODAL; ?>">
                                                                            Show code
                                                                        </a>
                                                                        <!-- Payment request code Modal-->
                                                                        <div class="modal fade" id="<?php echo 'PAY-REQ-ID-' . $ID_MODAL; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
                                                                                    <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
                                                                                        <h5 class="modal-title font-roboto" id="exampleModalLabel">Code for <?php echo $PAY[PAY_REQ_METHOD] ?></h5>
                                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">×</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body text-white text-center">
                                                                                        <h3><?php echo $PAY['TransactionID']; ?></h3>
                                                                                    </div>
                                                                                    <?php if(NoAdminAccess($PAY['PayerID'])){ ?>
                                                                                    <div class="modal-footer border-0">
                                                                                        <div class="row w-100">
                                                                                            <div class="col-md-12 text-center card bg-success p-2">
                                                                                                    <h5 class="m-0">APPROVED</h5>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php } ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $COINS_INFO['Coins']; ?></td>
                                                                    <td><?php echo $PAY['Amount'] . " EUR"; ?></td>
                                                                    <td><?php echo date($site['datetime']['date-format'], strtotime($PAY[PAY_REQ_DATE])); ?></td>
                                                                    <td><?php echo date($site['datetime']['time-format'], strtotime($PAY[PAY_REQ_TIME])); ?></td>
                                                                    <td class="text-center">
                                                                        <span class="text-success">
                                                                                <i class="fad fa-check-circle"></i>
                                                                            </span>
                                                                    </td>
                                                                </tr><?php
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif ($CARD == 'payments' ) { ?>

                                    <?php } ?>

                                <?php } else { echo "<title>" . $NTFY . $site['name'] . " - Admin" . "</title>"; ?>
                                    <div class="row m-0 pt-3">
                                        <div class="col-md-3">
                                            <div class="card bg-primary text-white mb-4">
                                                <div class="card-body font-roboto">General</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=general">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-secondary text-white mb-4">
                                                <div class="card-body font-roboto">News</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=news">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body font-roboto">Users</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=users">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-warning text-white mb-4">
                                                <div class="card-body font-roboto">Store</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=store">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-dark text-white mb-4">
                                                <div class="card-body font-roboto">Coins</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=coins">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-warning text-dark mb-4">
                                                <div class="card-body font-roboto">Activity log</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-dark stretched-link" href="index?to=admin&&card=log">View Details</a>
                                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-danger text-white mb-4">
                                                <div class="card-body font-roboto">Advanced</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=advanced">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card bg-info text-white mb-4">
                                                <div class="card-body">
                                                    <span class="font-roboto">Payment Requests </span>
                                                    <?php if($NOTIFY_PAY > 0) { ?>
                                                        <span class="badge badge-danger"><?php echo $NOTIFY_PAY; ?></span>
                                                    <?php } ?>
                                                </div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="index?to=admin&&card=payreq">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php 
                                } 
                            }
                            else
                                echo "<script>window.location='./index';</script>";
                            ?>
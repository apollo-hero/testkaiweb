<?php
$temp = $con->query('SET search_path TO accounts;');
$SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');

$USER = $SQL_USER_DATA[0];

?>
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
                    <h1>Account Settings</h1>
                </div>
                <div class="dmn-page-content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">Change Password</h2>
                            <form method="post" action="https://Apolys.org/settings" id="password_change_form">
                                <div class="form-group">
                                    <label class="control-label">Old Password</label>
                                    <input type="password" class="form-control" name="InputActualPassword" id="InputActualPassword" value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">New Password</label>
                                    <input type="password" class="form-control" name="InputNewPassword" id="InputNewPassword" value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Repeat New Password</label>
                                    <input type="password" class="form-control" name="InputNewPasswordAgain" id="InputNewPasswordAgain" value="">
                                </div>
                                <div class="form-group mb-5">
                                    <div class="d-flex justify-content-center align-items-center"><input type="button" class="btn btn-primary" id="change_password_button" value="Submit"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title">Change Email</h2>
                            <form method="post" id="email_change_form">
                                <div class="form-group">
                                    <label class="control-label">Current Email:<?php echo $USER[USER_EMAIL]; ?></label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">New Email</label>
                                    <input type="email" class="form-control" name="InputEmail" id="InputEmail" value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Current Password</label>
                                    <input type="password" class="form-control" id="InputEmailActualPassword" name="InputEmailActualPassword" required>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="d-flex justify-content-center align-items-center"><input type="button" class="btn btn-primary" id="change_email_button" value="Submit"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<script>
        $(document).ready(function() {
            $("#change_email_button").click(function(e) {
                console.log('email');
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'consult?from=Settings',
                    data: {
                        "InputEmail": $("#InputEmail").val(),
                        "InputEmailActualPassword": $("#InputEmailActualPassword").val(),
                    },

                }).done(function(rs) {

                    try {
                        var data = JSON.parse(rs.trim());
                        if (data.success) {
                            console.log(data)
                            // $.toast({
                            //     heading: 'Success',
                            //     icon: 'success',
                            //     text: "Your infomation just changed",
                            //     position: 'top-right',
                            // });
                            notice('success', 'success', 'Your infomation just changed');
                            setTimeout(function(){
                                location.reload()
                            },3000);
                        } else {
                            // $.toast({
                            //     heading: 'Failed',
                            //     icon: 'error',
                            //     text: data.message,
                            //     position: 'top-right',

                            // });
                            notice('error', 'error', data.message);
                        }

                    } catch(err) {
                      console.log(err)
                        // $.toast({
                        //     heading: 'Failed',
                        //     icon: 'error',
                        //     text: "Unknow Error during save data",
                        //     position: 'top-right',

                        // });
                        notice('error', 'error', 'Unknow Error during save data');
                    }

                }).fail(function(rs) {

                });
            })

            $("#change_password_button").click(function(e) {
                console.log('email');
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'consult?from=Settings',
                    data: {
                        "InputActualPassword": $("#InputActualPassword").val(),
                        "InputNewPasswordAgain": $("#InputNewPasswordAgain").val(),
                        "InputNewPassword": $("#InputNewPassword").val(),
                    },

                }).done(function(rs) {

                    try {
                        var data = JSON.parse(rs.trim());
                        if (data.success) {
                            console.log(data)
                            // $.toast({
                            //     heading: 'Success',
                            //     icon: 'success',
                            //     text: "Your infomation just changed",
                            //     position: 'top-right',
                            // });
                            notice('success', 'success', 'Your infomation just changed');
                            setTimeout(function(){
                                location.reload()
                            },3000);
                        } else {
                            // $.toast({
                            //     heading: 'Failed',
                            //     icon: 'error',
                            //     text: data.message,
                            //     position: 'top-right',

                            // });
                            notice('error', 'error', data.message);
                        }

                    } catch(err) {
                      console.log(err)
                        // $.toast({
                        //     heading: 'Failed',
                        //     icon: 'error',
                        //     text: "Unknow Error during save data",
                        //     position: 'top-right',

                        // });
                        notice('error', 'error', 'Unknow Error during save data');
                    }

                }).fail(function(rs) {

                });
            })
        })
    </script>
<?php echo "<title>" . $NTFY . $site['name'] . " - Settings" . "</title>"; ?>
<?php
$temp = $con->query('SET search_path TO accounts;');
$SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');

$USER = $SQL_USER_DATA[0];

?>

<div class="flex flex-col w-full h-full justify-between gap-2">
    <div class="grid sm:grid-cols-3 p-2  gap-2 ">
        <div class="flex flex-col gap-2 w-full sm:col-span-2">
            <form enctype="multipart/form-data" name="FormUpdateEmail" id="FormUpdateEmail" action="consult?from=Settings" method="POST" class=" gap-4 flex flex-col p-4  rounded-lg bg-base-300">

                <!-- profile -->
                <div class="flex gap-2 w-full border-b border-base-100 mb-2  items-center">
                    <span class="iconify" data-icon="ep:setting"></span>
                    <h3 class="text-lg text-bold text-stone-400">Infomation</h3>
                </div>
                <div class="col-span-2 flex  ml-4">
                    <label class="label cursor-pointer col-span-2">
                        <span class="text-lg">Change Email</span>
                        <input type="checkbox" class="toggle ml-2 toggle-primary" id='email-change-check' onclick="
                    InputEmail.disabled = !this.checked;
                    InputEmailActualPassword.disabled = !this.checked;
                    UpdateInfoButton.disabled = (!this.checked && !$('#password-change-check')[0].checked);
        " />
                    </label>
                </div>

                <div class="grid grid-cols-2 gap-4 w-full mb-4 items-center flex-1">

                    <!--<span class="text-right">User Name</span>-->
                    <!--<h3 class="text-bold text-stone-400"><!?php echo $USER['Name']; ?></h3>-->
                    <!--<span class="text-right">Coins</span>-->
                    <!-- <h3 class="text-bold text-stone-400"><!?php echo $USER['Coins']; ?></h3>-->
                    <span class="text-right">Current Email</span>
                    <h3 class="text-bold text-stone-400"><?php echo $USER[USER_EMAIL]; ?></h3>
                    <span class="text-right">New Email Address</span>
                    <div class="flex">
                        <input type='email' disabled name='InputEmail' id='InputEmail' class="input input-bordered" placeholder="Input New Email" required></input>
                    </div>

                    <span class="text-right">Current Password</span>
                    <div class="flex "><input class="input input-bordered" type='password' id="InputEmailActualPassword" name="InputEmailActualPassword" required disabled /></div>

                </div>
                <!-- <div class="flex w-full mb-2 justify-center p-4">
                    <button class="btn " name='UpdateEmailButton' id="UpdateEmailButton" disabled>
                        Update Email
                    </button>
                </div>
            </form>
            <form enctype="multipart/form-data" name="FormUpdateSettings" id="FormUpdateSettings" action="consult?from=Settings" method="POST" class="sm:col-span-2 gap-4 flex flex-col p-4  rounded-lg bg-base-300"> -->
                <!-- change password -->
                <div class="flex gap-2 w-full border-b border-base-100 mb-2 items-center">
                    <span class="iconify" data-icon="ic:baseline-security"></span>
                    <h3 class="text-lg text-bold text-stone-400">Security</h3>
                </div>
                <div class="flex gap-2 w-full   ml-4">
                    <label class="label cursor-pointer">
                        <span class="text-lg">Change Password</span>
                        <input type="checkbox" id='password-change-check' class="toggle ml-2 toggle-primary" onclick="
                    UpdateInfoButton.disabled = (!this.checked && !$('#email-change-check')[0].checked);
                    InputActualPassword.disabled    = !this.checked;
                    InputNewPassword.disabled       = !this.checked;
                    InputNewPasswordAgain.disabled  = !this.checked;
                    check_psw();
                    " />
                    </label>
                </div>
                <div class="grid grid-cols-2 gap-2 w-full items-center text-right mb-4">
                    <span>Current Password</span>
                    <div class="flex "><input class="input input-bordered" type='password' id="InputActualPassword" name="InputActualPassword" required disabled /></div>
                    <span>New Password</span>
                    <div class="flex "><input class="input input-bordered" type='password' id="InputNewPassword" name="InputNewPassword" class="form-control" placeholder="New Password" required disabled /></div>
                    <span>Repeat Password</span>
                    <div class="flex "><input class="input input-bordered" type='password' id="InputNewPasswordAgain" name="InputNewPasswordAgain" class="form-control" placeholder="Repeat new password" required disabled /></div>
                </div>
                <!-- 
    <div class="bg-success rounded text-center p-3 mb-3" id="DivSuccesfully">
    <h3><i class="fad fa-check-circle"></i> Succesfully updated!</h3>
</div>
<div class="bg-error rounded text-center p-3 mb-3 d-none" id="DivError">
    <h3><i class="fad fa-times-circle"></i> Something went wrong</h3>
</div> 
-->

                <div class="flex w-full mb-2 justify-center p-4">
                    <button class="btn " name='UpdateInfoButton' disabled>
                        Update Your Setting
                    </button>
                </div>

            </form>
        </div>

        <div class='flex w-full flex-col bg-base-300 rounded-lg p-4'>
            <div class="flex gap-2 items-center border-b border-base-100 mb-4">
                <span class="iconify" data-icon="ic:outline-token"></span>
                <h3 class="text-stone-400 text-lg font-bold">Owned Characters</h3>
            </div>
            <div class="flex justify-center w-full">
                <table class="w-full">
                    <?php
                    $temp = $con->query('SET search_path TO characters;');
                    $sql_character = $con->count("characters", ["AccountId" => $_SESSION['USER_ID']]); //('SELECT COUNT(*) FROM ' . CHAR . ' WHERE ' . CHAR_USR_ID . ' = ?');

                    if ($sql_character > 0) {

                        $sql_character = $con->select("characters", "*", ["AccountId" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . CHAR . ' WHERE ' . CHAR_USR_ID . ' = ?');

                        foreach ($sql_character as $CHARACTER) {
                            if (strlen($CHARACTER['DeletedAt']) < 1) { ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo $site['assets']['images'] . "/user/" . $CHARACTER[CHAR_CLASS] . "/" . $CHARACTER[CHAR_GENDER] . ".png"; ?>" class="p-3" alt="<?php echo $CHARACTER[CHAR_NICK]; ?>">
                                    </td>
                                    <td>
                                        <h5>
                                            <?php echo $CHARACTER[CHAR_NICK] . "<span class='text-secondary'>#" . $CHARACTER[CHAR_ID] . "</span>"; ?>
                                        </h5>
                                    </td>
                                </tr><?php
                                    }
                                }
                            } else { ?>
                        <tr class="text-center bg-base-100">
                            <td class="p-3 flex justify-center text-center">
                                <span class="iconify w-24 h-24" data-icon="bi:heart-pulse-fill"></span>
                            </td>
                        </tr>
                        <tr class="text-center bg-base-100">
                            <td class="p-3">
                                <h5>You don't have any character yet</h5>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="w-full  ">
        <?php include "includes/footer.php"; ?>
    </div>
    <script>
        $(document).ready(function() {
            $("#FormUpdateEmail").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'consult?from=Settings',
                    data: {
                        "InputEmail": $("#InputEmail").val(),
                        "InputActualPassword": $("#InputActualPassword").val(),
                        "InputEmailActualPassword": $("#InputEmailActualPassword").val(),
                        "InputNewPasswordAgain": $("#InputNewPasswordAgain").val(),
                        "InputNewPassword": $("#InputNewPassword").val(),
                    },

                }).done(function(rs) {

                    try {
                        var data = JSON.parse(rs.trim());
                        if (data.success) {
                            console.log(data)
                            $.toast({
                                heading: 'Success',
                                icon: 'success',
                                text: "Your infomation just changed",
                                position: 'top-right',
                            });
                            setTimeout(function(){
                                location.reload()
                            },3000);
                        } else {
                            $.toast({
                                heading: 'Failed',
                                icon: 'error',
                                text: data.message,
                                position: 'top-right',

                            });
                        }

                    } catch(err) {
                      console.log(err)
                        $.toast({
                            heading: 'Failed',
                            icon: 'error',
                            text: "Unknow Error during save data",
                            position: 'top-right',

                        });
                    }

                }).fail(function(rs) {

                });
            })
        })
    </script>
</div>
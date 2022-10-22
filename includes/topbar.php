<div class="topPanel">
    <div class="topPanel-wrapper flex-s-c">
        <div class="topPanel-wrapper_left flex-c">
            <!-- <a href="https://godsmu.org/" class="logo-mini bright"><img src="https://godsmu.org/assets/godsmu/images/logo-mini.png" alt="logo"></a> -->
            <ul class="menu flex-c-c">
                <li><a href="/news">News</a></li>
                <li><a href="" onclick="new modal('#register_modal');return false">Registration</a></li>
                <li><a href="/downloads">Downloads</a></li>
                <li><a href="/ranking">Rankings</a></li>
                <li><a href="/rules">Rules</a></li>
                <li><a href="/guides">Guides</a></li>
                <li><a href='<?php echo $link_url['site_link_elitepvpers'] ; ?>' target="_blank">ELITEPVPERS </a></li>
            </ul>
        </div>
        <?php 
        if (!isset($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == NULL) { ?>
        <div class="topPanel-wrapper_right flex-c">
            <!-- <a href="https://godsmu.org/registration" class="sign-in">Sign Up</a> <span>or</span> -->
            <a href="" class="button" onclick="new modal('#signin_modal');return false">Sign In</a>
        </div>
        <?php } 
            else { 
            
            $temp = $con->query('SET search_path TO accounts;');
            $SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');
    
            $USER = $SQL_USER_DATA[0];
            $temp = $con->query('SET search_path TO web;');
            $carts = $con->select("cart", "*", ["accountid" => $_SESSION['USER_ID']]); // 
    
        
        ?>
        <div class="topPanel-wrapper_right flex-c">
            <div class="account-block">
                <a href="javascript:;" class="button main-item-account">Account</a>
                <ul class="hidden-block-account account_panel" id="account_panel">
                    <?php 
                    if($USER['Authority']== 30000){ ?>
                    <li><a href="/admin">Admin</a></li>
                    <?php } ?>
                    <li><a href="javascript:;">Coins: <?php echo $USER['Coins']; ?></a></li>
                    <li><a href="/">Account Panel</a></li>
                    <li><a href="/buy_credit">Buy Credits</a></li>
                    <li><a href="/setting">Settings</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--topPanel-wrapper-->
</div>
<!-- signin modal -->
<div class="modal_window" id="signin_modal">
    <a href="#" id="close_modal" class="close_mw"></a>
    <h3>Sign In</h3>
    <div class="modal_form">
        <form id="FormLogin" name="FormLogin" method="POST" action="/consult?from=Login">
            <h3 class="text-center w-full mb-6">
                Don't forget to join with
                <a href='<?php echo $link_url['site_social_discord']; ?>' target="_blank" class="text-lg font-bold text-info">
                    Discord
                </a>
                add a random one
            </h3>
            <div class="formGroup">
                <span class="formGroup-name">Username or Email</span>
                <input type="text" name="InputUsername" id="InputUsername">
            </div>
            <div class="formGroup">
                <span class="formGroup-name">Password</span>
                <input type="password" name="InputPassword" id="InputPassword">
            </div>
            <div class="formGroup flex" style="justify-content: center;">
                <input type="checkbox" class="checkbox  checkbox-primary" style="width: 20px;" />
                <span class="label-text">Remember Me?</span>
            </div>
            <div class="formGroup-button text-center">
                <a href="javascript:login()" class="button">Login</a>
                <!-- <input type="button" id="login_button" value="Login"/> -->
                <a href="javascript:;" class="d-block" onclick="register_modal();">
                    <h3 class="m-auto">Are you new?</h3>
                    Create an account
                </a>
            </div>
        </form>
    </div>
    <!--modalContent-->
</div>

<!-- register modal -->
<div class="modal_window" id="register_modal">
    <a href="#" id="close_modal" class="close_mw"></a>
    <h3>Welcome back to testkaiweb!</h3>
    <div class="modal_form">
        <form id="register_form" method="POST" action="/consult?from=Register">
            <div class="formGroup">
                <span class="formGroup-name">Username</span>
                <input type="text" name="InputUsername" id="InputUsername">
            </div>
            <div class="formGroup">
                <span class="formGroup-name">Email</span>
                <input type="email" name="InputEmail" id="InputEmail">
            </div>
            <div class="formGroup">
                <span class="formGroup-name">Password</span>
                <input type="password" name="InputPassword" id="InputPassword">
            </div>
            <div class="formGroup">
                <span class="formGroup-name">Repeat Password</span>
                <input type="password" name="InputConfirmPassword" id="InputConfirmPassword">
            </div>
            <div class="formGroup-button text-center">
                <input type="submit" id="SignUpSubmitButton" value="Register" disabled>
            </div>
            <div class="formGroup flex" style="justify-content: center;">
                <input type="checkbox" id="CheckTermsAndConditions" class="checkbox  checkbox-primary" style="width: 20px;" />
                <span class="label-text">
                I agree to <label for='term-modal' class="text-info font-bold">Terms of Service</label> and <label for='term-modal' class="text-info font-bold">Privacy Policy</label>
                </span>
            </div>
        </form>
    </div>
    <!--modalContent-->
</div>

<script type="text/javascript">
$('#CheckTermsAndConditions').click(function() {

if ($(this).is(':checked')) {

    $('#SignUpSubmitButton').removeAttr('disabled')

} else {
    $('#SignUpSubmitButton').attr('disabled', true);
}
});
 function login(){
        $.ajax({
            type: 'POST',
            url: '/consult?from=Login',
            data: {
                "InputEmail": $("#InputEmail").val(),
                "InputUsername": $("#InputUsername").val(),
                "InputPassword": $("#InputPassword").val(),
            },

        }).done(function(rs) {
            try {
                console.log(rs);
                var data = JSON.parse(rs);
                if (data.success) {
                    location.href = "/index";
                } else {
                    notice('login failed', 'error', data.message);
                }
            } catch (err) {
                console.log(err);
            }
        }).fail(function(rs) {

        })
    }
$(document).ready(function() {
    console.log("st");
   
    $('#CheckTermsAndConditions').click(function() {

        if ($(this).is(':checked')) {

            $('#SignUpSubmitButton').removeAttr('disabled')

        } else {
            $('#SignUpSubmitButton').attr('disabled', true);
        }
    });
    // $("#login_button").on("click",function(e) {
    //     e.preventDefault();
    //     $.ajax({
    //         type: 'POST',
    //         url: '/consult?from=Login',
    //         data: {
    //             "InputEmail": $("#InputEmail").val(),
    //             "InputUsername": $("#InputUsername").val(),
    //             "InputPassword": $("#InputPassword").val(),
    //         },

    //     }).done(function(rs) {
    //         try {
    //             console.log(rs);
    //             var data = JSON.parse(rs);
    //             if (data.success) {
    //                 location.href = "/index";
    //             } else {
    //                 $.toast({
    //                     heading: 'Failed',
    //                     icon: 'error',
    //                     text: data.message,
    //                     position: 'top-right',

    //                 });
    //             }
    //         } catch (err) {
    //             console.log(err);
    //         }
    //     }).fail(function(rs) {

    //     })
    // });
})

function register_modal(){
    $('.close_mw').click();
    new modal('#register_modal');return false;
}
</script>
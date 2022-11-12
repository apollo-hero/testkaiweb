<div class="topPanel">
    <div class="topPanel-wrapper flex-s-c">
        <div class="topPanel-wrapper_left flex-c">
            <ul class="menu flex-c-c">
                <li><a href="/news">News</a></li>
                <li><a href="javascript:;" onclick="register();">Registration</a></li>
                <li><a href="/downloads">Downloads</a></li>
                <li><a href="/ranking">Rankings</a></li>
                <li><a href="/rules">Rules</a></li>
                <li><a href="/account">Donate</a></li>
                <li><a href='<?php echo $link_url['site_social_discord']; ?>' target="_blank">DISCORD </a></li>
            </ul>
        </div>
        <?php
        if (!isset($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == NULL) { ?>
            <div class="topPanel-wrapper_right flex-c">
                <a href="" class="button" onclick="new modal('#signin_modal');return false">Sign In</a>
            </div>
        <?php } else {

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
                        if ($USER['Authority'] == 30000) { ?>
                            <li><a href="/admin">Admin</a></li>
                        <?php } ?>
                        <li><a href="javascript:;" id="balance">Coins: <?php echo $USER['Coins']; ?></a></li>
                        <li><a href="/account">Account Panel</a></li>
                        <li><a href="/account">Buy Coins</a></li>
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
                Join our Discord server to stay up to date on all of our news!
                <a href='<?php echo $link_url['site_social_discord']; ?>' target="_blank" class="text-lg font-bold text-info">
				Discord
                </a>
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
    <h3>Welcome to Apolys</h3>
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
                <!-- <input type="submit" class="button" id="SignUpSubmitButton" value="Register" disabled> -->
                <button class="btn btn-sm" id="SignUpSubmitButton" disabled>Register</button>
            </div>
            <div class="formGroup flex" style="justify-content: center;">
                <input onchange="check()" type="checkbox" id="CheckTermsAndConditions" class="checkbox  checkbox-primary" style="width: 20px;" />
                <span class="label-text">
                    I agree to <label for='term-modal' class="text-info font-bold" onclick="new modal('#term');return false;">Terms of Service</label> and <label for='term-modal' class="text-info font-bold" onclick="new modal('#term');return false;">Privacy Policy</label>
                </span>
            </div>
        </form>
    </div>
    <!--modalContent-->
</div>

<!-- terms modal -->
<div class="modal_window" id="term">
    <a href="#" id="close_modal" class="close_mw"></a>
    <h3>Terms of Service</h3>
    <div class="modal_form">
        <h6>EXPLOITING BUGS</h6>
        <p>
            It is a necessity that you read and agree the following Terms & Conditions before you may purchase any of the items on this website. It will be assumed that you have read and accepted the Terms and Conditions of Use in this document if you use our services or buy one of our goods. All of the items that are available on our website could have been made, gathered, shipped, or displayed by a different website, in which case they would be governed by that website's terms and conditions. In certain circumstances, a user must register in order to purchase a product, providing accurate personal information and creating a password.
        </p>
        <p>
            You must agree to and abide by these terms in order to access and use the service.
        </p>
        <p>
            such Terms. All users, visitors, and other individuals who use or use the Service are subject to these Terms.
        </p>
        <p>
            You agree to be bound by these Terms by accessing or using the Service. You are not permitted to access the Service if you disagree with any part of the terms.
        </p>
        <h6>Termination</h6>
        <p>
            <?php echo $site['name']; ?> Without limitation, if you violate the Terms, we have the right to immediately terminate or suspend your use of our Service without warning or responsibility.
The Terms' ownership provisions, warranty disclaimers, indemnification, and liability restrictions are just a few of the clauses that will always apply even after they are terminated.
        </p>
        <h6>Changes</h6>
        <p>
            We have the right to change these Terms at any time and at our sole discretion. We'll aim to provide you at least 30 days' notice if the change is significant before the new terms go into effect. We reserve the right to judge what constitutes a substantial change.
        </p>
        <h6>Virtual Products</h6>
        <p>
            You are not permitted to claim ownership of any of our virtual products, whether they have been updated or not. The owners of all virtual goods are the content suppliers. Unless otherwise stated, we make no explicit or implied warranties on our virtual items. Under no circumstances will this server be liable for any losses resulting from the use or inability to use our virtual products, including but not limited to direct, indirect, special, incidental, or consequential losses.
        </p>
        <h6>REFUND POLICY</h6>
        <p>
            You must be aware before purchasing if the goods is an irreversible non-tangible good as we cannot offer returns once the item has been dispatched. Please read this entire page before making a purchase. We only deviate from this guideline when the product description does not match the item. Some items could come with a warranty and the chance of a refund, however this will be stated when the product is purchased. In certain circumstances, the warranty will only apply to system failures and be valid only if the device has been used according to instructions. Remorse or incorrect purchases are not covered by the guarantee. The warranty's provisions cover faults that occur under regular circumstances. Only after the equipment has been utilized properly will the of the goods and these terms take effect. This includes:
        </p>
        <h6>PRIVACY</h6>
        <p>
            <?php echo $site['name']; ?> assures the essential security for the personal information you transmit. Except when it's necessary to comply with a court order or other legal requirements, the user's input data or order validation criteria won't be provided to third parties.
        </p>
        <p>
            <?php echo $site['name']; ?> reserves the rights to change or modify these terms without prior notice.
        </p>
    </div>
</div>

<script type="text/javascript">
    function check() {
        if ($('#CheckTermsAndConditions').is(':checked')) {

            $('#SignUpSubmitButton').removeAttr('disabled')

        } else {
            $('#SignUpSubmitButton').attr('disabled', true);
        }
    }
    $(document).ready(function() {

        $('#CheckTermsAndConditions').change(function() {
            console.log('st');

            if ($(this).is(':checked')) {

                $('#SignUpSubmitButton').removeAttr('disabled')

            } else {
                $('#SignUpSubmitButton').attr('disabled', true);
            }
        });
    })

    function login() {
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

    function register_modal() {
        var register = "<?php echo $site['register_status']; ?>";
        if (register != "WORKING") {
            notice('error', 'error', "Now you can't register!");
            return;
        }
        $('.close_mw').click();
        new modal('#register_modal');
        return false;
    }

    function register() {
        var register = "<?php echo $site['register_status']; ?>";
        if (register != "WORKING") {
            notice('error', 'error', "Now you can't register!");
            return;
        }
        new modal('#register_modal');
        return false;
    }
</script>
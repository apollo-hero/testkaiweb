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
                <li><a href='<?php echo $link_url['site_link_elitepvpers']; ?>' target="_blank">ELITEPVPERS </a></li>
            </ul>
        </div>
        <?php
        if (!isset($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == NULL) { ?>
            <div class="topPanel-wrapper_right flex-c">
                <!-- <a href="https://godsmu.org/registration" class="sign-in">Sign Up</a> <span>or</span> -->
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
                        <li><a href="javascript:;">Coins: <?php echo $USER['Coins']; ?></a></li>
                        <li><a href="/account">Account Panel</a></li>
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
    <h3>Terms of Service and Policy</h3>
    <div class="modal_form">
        <h6>RELEVANT INFORMATION</h6>
        <p>
            It is a necessary requirement for the acquisition of the products offered on this site, that you read and accept the following Terms and Conditions that are written below. The use of our services as well as the purchase of our products will imply that you have read and accepted the Terms and Conditions of Use in this document. All the products that are offered by our website could be created, collected, sent or presented by a third website and in this case they would be subject to their own Terms and Conditions. In some cases, to acquire a product, the user will need to register, with the entry of reliable personal data and definition of a password.
        </p>
        <p>
            The user can choose and change the password for their account administration access at any time, if they have registered and that it is necessary for the purchase of any of our products. <?php echo $site['domain']; ?> does not assume responsibility in the event that it gives said key to third parties.
        </p>
        <p>
            All purchases and transactions carried out through this website are subject to a confirmation and verification process, which could include validation of the payment method, invoice validation (if any) and compliance with the conditions required by the selected payment method. In some cases, verification via email may be required.
        </p>
        <p>
            The prices of the virtual products offered on this website are valid only for purchases made on it.
        </p>
        <h6>LICENSE</h6>
        <p>
            <?php echo $site['name']; ?> through its website grants a license for users to use the products that are sold on this website in accordance with the Terms and Conditions described in this document.
        </p>
        <h6>UNAUTHORIZED USE</h6>
        <p>
            If applicable (for sale of software, templates, or other design and programming product) you may not place one of our products, modified or unmodified, on a CD, website or any other medium and offer them for redistribution. or resale of any kind.
        </p>
        <h6>PROPERTY</h6>
        <p>
            You cannot declare intellectual or exclusive property to any of our virtual products, modified or unmodified. All virtual products are the property of the content providers. Unless otherwise specified, our virtual products are provided without warranty of any kind, express or implied. Under no circumstances will this server be liable for any damages including, but not limited to, direct, indirect, special, incidental or consequential damages or other losses resulting from the use or inability to use our virtual products.
        </p>
        <h6>REFUND AND GUARANTEE POLICY</h6>
        <p>
            In the case of products that are irrevocable non-tangible merchandise, we do not issue refunds after the product is shipped, you have the responsibility to understand before buying. We ask you to read carefully before purchasing. We only make exceptions to this rule when the description does not match the product. There are some products that may have a guarantee and possibility of reimbursement but this will be specified when purchasing the product. In such cases the warranty will only cover system failures and will only be effective when the product has been used correctly. The warranty does not cover regret or wrong purchase. The terms of the warranty are associated with malfunctions under normal conditions of the products and these terms will only be effective if the equipment has been used correctly. This includes:
        </p>
        <p>
            - According to the technical specifications indicated for each virtual product.<br>
            - In specific use for the function with which it was designed.
        </p>
        <h6>ANTI-FRAUD CHECK</h6>
        <p>
            The customer's purchase can be postponed for anti-fraud verification. It can also be suspended for a longer time for a more rigorous investigation, to avoid fraudulent transactions.
        </p>
        <h6>PRIVACY</h6>
        <p>
            <?php echo $site['domain']; ?> guarantees that the personal information that you send has the necessary security. The data entered by the user or in the case of requiring a validation of the orders will not be delivered to third parties, unless it must be disclosed in compliance with a court order or legal requirements.
        </p>
        <p>
            Subscription to advertising email newsletters is voluntary and could be selected when creating your account.
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
        $('.close_mw').click();
        new modal('#register_modal');
        return false;
    }
</script>
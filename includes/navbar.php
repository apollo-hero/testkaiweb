    <?php if ((isset($_GET['to']) && $_GET['to'] == 'news') || !isset($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == NULL) { ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $site['captcha']; ?>"></script>
        <script type="text/javascript">
            grecaptcha.ready(function() {
                grecaptcha.execute("<?php echo $site['captcha']; ?>", {
                        action: "homepage"
                    })
                    .then(function(token) {
                        $("#InputGoogleResponse").val(token);
                    });
            });
        </script>

        <div class="flex justify-between p-4  w-full   bg-transparent/30 items-center z-50 absolute top-0">
            <?php include('./components/logo.php') ?>
            <div class="flex gap-4 items-center top-menu">
                <a href='/news/'>News & Info</a>
                <a href="#"><label for='register-modal' class="cursor-pointer" onclick='$("#login-modal")[0].checked = false; '>REGITSTRATION</label></a>
                <a href="https://mega.nz/file/XFJ3kS7J#ouwAdTQhvMxH8wUzuvIEqAK7xYJuRuIKgho6srNhk1Q">DOWNLOADS</a>
                <a href="">RANKINGS</a>
                <a href="">RULES</a>
                <a href="">GUIDES</a>
                <a href="">FB PAGE</a>
                <?php if (isset($_SESSION['USER_ID'])) {
                ?>
                    <a href="/index" class="btn btn-info modal-button  rounded-full  px-10 ">Dashboard</a>
                <?php
                } else {
                ?>
                    <label for="login-modal" class="btn btn-info modal-button  rounded-full  px-10 ">Join Us</label>
                <?php
                }
                ?>

            </div>

        </div>
        <!--login -->
        <input type="checkbox" id="login-modal" class="modal-toggle" />
        <div class="modal  ">
            <div class="modal-box relative max-h-max ">
                <label for="login-modal" class="btn btn-ghost btn-sm btn-circle absolute right-2 top-2">✕</label>
                <div class="flex flex-col">
                    <div class="flex w-full justify-center mb-6">
                        <?php include('./components/logo.php') ?>
                    </div>

                    <form class="flex flex-col  gap-2 p-2" name="FormLogin" id="FormLogin" action="/consult?from=Login" method="POST">
                        <h3 class="text-center text-xl font-bold w-full mb-6">Welcome back to <?php echo $site['name']; ?>! </h3>
                        <h3 class="text-center w-full mb-6">Don't forget to join with <a href='<?php echo $link_url['site_social_discord']; ?>' target="_blank" class="text-lg font-bold text-info"> Discord </a> add a random one </h3>
                        <h3>Username or Email</h3>
                        <input class="input input-bordered" id="InputUsername" required name="InputUsername" placeholder="Email or username" />
                        <div class="flex justify-between w-full">
                            <h3>Password</h3>
                            <!-- <a class="text-info cursor-pointer">Forgot Password?
                            </a> -->
                        </div>
                        <input type='password' placeholder="Typing your password" class="input input-bordered" required id="InputPassword" name="InputPassword" />
                        <label class="label cursor-pointer justify-start gap-2 mb-4">
                            <input type="checkbox" class="checkbox  checkbox-primary" />
                            <span class="label-text">Remember Me?</span>
                        </label>
                        <button class="btn btn-info">Login</button>
                        <div class="flex p-2 gap-2 mb-2 w-full justify-center">
                            <h3>Are you new?</h3><label for='register-modal' class="text-info cursor-pointer" onclick='$("#login-modal")[0].checked = false; '>Create an account</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- register -->
        <input type="checkbox" id="register-modal" class="modal-toggle" />
        <div class="modal ">
            <div class="modal-box relative max-h-max">
                <label for="register-modal" class="btn btn-ghost btn-sm btn-circle absolute right-2 top-2">✕</label>
                <div class="flex flex-col">
                    <div class="flex w-full justify-center mb-6">
                        <?php include('./components/logo.php') ?>
                    </div>
                    <form class="flex flex-col  gap-2 p-2" id="FormSignUp" action="/consult?from=Register" method="POST">
                        <h3 class="text-center text-xl font-bold w-full mb-6">Welcome back to <?php echo $site['name']; ?>! </h3>
                        <h3>Username*</h3>
                        <input class="input input-bordered" id="InputUsername" name="InputUsername" />
                        <h3>Email Address*</h3>
                        <input type="email" class="input input-bordered" id="InputEmail" name="InputEmail" required />
                        <div class="grid grid-cols-2 gap-2">
                            <h3>Password</h3>
                            <h3>Repeat Password</h3>
                            <input type='password' class="input input-bordered" required id="InputPassword" name="InputPassword" />
                            <input type='password' class="input input-bordered" required id="InputConfirmPassword" name="InputConfirmPassword" />

                        </div>
                        <label class="label cursor-pointer justify-start gap-2 mb-4">
                            <input type="checkbox" class="checkbox  checkbox-primary" id="CheckTermsAndConditions" name="CheckTermsAndConditions" />
                            <span class="label-text">I agree to <label for='term-modal' class="text-info font-bold">Terms of Service</label> and <label for='term-modal' class="text-info font-bold">Privacy Policy</label></span>
                        </label>
                        <button id='SignUpSubmitButton' class="btn btn-info" disabled>Register</button>
                        <div class="flex p-2 gap-2 mb-2 w-full justify-center">
                            <h3>Already have an acount?</h3><label for='login-modal' class="text-info cursor-pointer" onclick='$("#register-modal")[0].checked = false; '>Login</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Term & Privacy -->
        <input type="checkbox" id="term-modal" class="modal-toggle" />
        <div class="modal ">
            <div class="modal-box relative ">
                <label for="term-modal" class="btn btn-ghost btn-sm btn-circle absolute right-2 top-2">✕</label>
                <div class="flex flex-col overflow-y-auto w-full">
                    <div class="flex flex-col w-full h-full justify-center p-4 ">
                        <h3 class="text-lg font-bold ">Terms & Privacy Condition</h3>
                        <h6 class="text-lg text-stone-400 ">RELEVANT INFORMATION</h6>
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
                        <h6 class="text-lg text-stone-400 ">LICENSE</h6>
                        <p>
                            <?php echo $site['name']; ?> through its website grants a license for users to use the products that are sold on this website in accordance with the Terms and Conditions described in this document.
                        </p>
                        <h6 class="text-lg text-stone-400 ">UNAUTHORIZED USE</h6>
                        <p>
                            If applicable (for sale of software, templates, or other design and programming product) you may not place one of our products, modified or unmodified, on a CD, website or any other medium and offer them for redistribution. or resale of any kind.
                        </p>
                        <h6 class="text-lg text-stone-400 ">PROPERTY</h6>
                        <p>
                            You cannot declare intellectual or exclusive property to any of our virtual products, modified or unmodified. All virtual products are the property of the content providers. Unless otherwise specified, our virtual products are provided without warranty of any kind, express or implied. Under no circumstances will this server be liable for any damages including, but not limited to, direct, indirect, special, incidental or consequential damages or other losses resulting from the use or inability to use our virtual products.
                        </p>
                        <h6 class="text-lg text-stone-400 ">REFUND AND GUARANTEE POLICY</h6>
                        <p>
                            In the case of products that are irrevocable non-tangible merchandise, we do not issue refunds after the product is shipped, you have the responsibility to understand before buying. We ask you to read carefully before purchasing. We only make exceptions to this rule when the description does not match the product. There are some products that may have a guarantee and possibility of reimbursement but this will be specified when purchasing the product. In such cases the warranty will only cover system failures and will only be effective when the product has been used correctly. The warranty does not cover regret or wrong purchase. The terms of the warranty are associated with malfunctions under normal conditions of the products and these terms will only be effective if the equipment has been used correctly. This includes:
                        </p>
                        <p>
                            - According to the technical specifications indicated for each virtual product.<br>
                            - In specific use for the function with which it was designed.
                        </p>
                        <h6 class="text-lg text-stone-400 ">ANTI-FRAUD CHECK</h6>
                        <p>
                            The customer's purchase can be postponed for anti-fraud verification. It can also be suspended for a longer time for a more rigorous investigation, to avoid fraudulent transactions.
                        </p>
                        <h6 class="text-lg text-stone-400 ">PRIVACY</h6>
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
                    <div class="flex justify-center w-full p-2">
                        <button class='menu-active p-3' onclick="$('#term-modal').click(); $('#CheckTermsAndConditions')[0].checked=true;">Yes I read & agree.</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#CheckTermsAndConditions').click(function() {

                if ($(this).is(':checked')) {

                    $('#SignUpSubmitButton').removeAttr('disabled')

                } else {
                    $('#SignUpSubmitButton').attr('disabled', true);
                }
            });
            $("#FormLogin").submit(function(e) {
                e.preventDefault();
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
                            // $.toast({
                            //     heading: 'Failed',
                            //     icon: 'error',
                            //     text: data.message,
                            //     position: 'top-right',

                            // });
                            notice('login failed', 'error', data.message);
                        }
                    } catch (err) {
                        console.log(err);
                    }
                }).fail(function(rs) {

                })
            });
        </script>
    <?php } else { ?>


    <?php } ?>
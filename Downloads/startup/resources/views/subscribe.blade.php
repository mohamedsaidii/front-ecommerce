
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://js.stripe.com/v3/"></script>

        <!-- Page Title -->
        <title>Sign Up | Spyre - Slick contemporary multipurpose theme</title>
        


        <!-- Vendor Stylesheets -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
        <!-- Theme Stylesheets -->
        <link href="../dist/css/theme.min.css" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129313359-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-129313359-1');
        </script>
    </head>
    <style>




.sr-payment-form {
    text-align: center;
    width: var(--form-width);
}
* {
    margin: 0;
    padding: 0;

}
* {
    box-sizing: border-box;
}

.sr-input {
    display: block;

    border-radius:6px;
    border: 1px black;
    border:groove;
    height:40px;
}
#take-a-payment-demo {

    background-color: var(--body-color);
    font-family: var(--body-font-family);
    font-size: 16px;
    padding: 20px;
    box-sizing: border-box;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 4px;
    transition: height 1s ease;
    min-height: 240px;
}








.pb-9, .py-9 {
    padding-bottom: 11rem!important;
}

.pl-0, .px-0 {
    padding-left: 0!important;
}
.pr-0, .px-0 {
    padding-right: 0!important;
}
.bg-container {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    margin: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
</style>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="circles"></div>
            </div>
        </div>
        <!-- End of Preloader -->


        <!-- Header -->
        <header class="spyre-navbar navbar navbar-expand-lg fixed-top" style="background: none;">
            <div class="container">
                <a class="navbar-brand mr-lg-5 mr-xl-7" href="http://localhost/startup/public/">
                    <img src="https://spyre-theme.bitbucket.io/v1.2.1/assets/img/logo.svg" class="d-none d-lg-block" alt="home" width="143" />
                    <img src="https://spyre-theme.bitbucket.io/v1.2.1/assets/img/logo.svg" class="d-block d-lg-none" alt="home" width="110" />
                </a>
            </div>
        </header>
        <!-- End of Header -->


        <!-- Main Content -->
        <main class="main minh-100vh">
            <!-- Section -->
            <section class="py-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 order-lg-2">
                            <div class="row minh-100vh h-100 align-items-center">
                                <form class="col px-lg-6 px-xl-8 px-xxl-11 py-9 py-lg-4">
                                    <div class="pr-4">
                                    <h1 ">Please Subscribe</h1>
                                    <h5 class="mb-5 text-700">Fill out the form to get started</h5></div>
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Email address">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control form-control-lg" id="password-again" placeholder="Confirm Password">
                                    </div>
                                    

<!--<div class="flex-container spacing-16 direction-row wrap-wrap"><div class="flex-item width-12"><div class="FormFieldGroup"><div class="FormFieldGroup-labelContainer FormFieldGroup-labelContainer flex-container justify-content-space-between"><label for="cardNumber-fieldset"><span class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500"><span>Informations de la carte</span></span></label></div><fieldset class="FormFieldGroup-Fieldset" id="cardNumber-fieldset"><div class="FormFieldGroup-container" id="cardNumber-fieldset"><div class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop"><div class="FormFieldInput"><span class="InputContainer" data-max=""><input class="CheckoutInput CheckoutInput--tabularnums Input Input--empty" autocomplete="cc-number" autocorrect="off" spellcheck="false" id="cardNumber" name="cardNumber" inputmode="numeric" aria-label="Numéro de carte" placeholder="1234 1234 1234 1234" aria-invalid="false" value=""></span><div class="FormFieldInput-Icons" style="opacity: 1;">     <div style="transform: none;"><span class="FormFieldInput-IconsIcon is-visible"><img src="https://js.stripe.com/v3/fingerprinted/img/mastercard-4d8844094130711885b5e41b28c9848f.svg" alt="mastercard" class="BrandIcon"></span></div></div><div class="FormFieldGroup-child FormFieldGroup-child--width-6 FormFieldGroup-childLeft FormFieldGroup-childBottom"><div class="FormFieldInput"><span class="InputContainer" data-max=""><input class="CheckoutInput CheckoutInput--tabularnums Input Input--empty" autocomplete="cc-exp" autocorrect="off" spellcheck="false" id="cardExpiry" name="cardExpiry" inputmode="numeric" aria-label="Date d'expiration" placeholder="MM / AA" aria-invalid="false" value=""></span></div></div><div class="FormFieldGroup-child FormFieldGroup-child--width-6 FormFieldGroup-childRight FormFieldGroup-childBottom"><div class="FormFieldInput has-icon"><span class="InputContainer" data-max=""><input class="CheckoutInput CheckoutInput--tabularnums Input Input--empty" autocomplete="cc-csc" autocorrect="off" spellcheck="false" id="cardCvc" name="cardCvc" inputmode="numeric" aria-label="Code de sécurité" placeholder="CVC" aria-invalid="false" value=""></span></div></div> </span></span></div></fieldset></div></div></div>
-->



<!--
<div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <input autocomplete='off' class='form-control card-number' size='20' type='text' placeholder="Card Number ">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>-->




            <div class="sr-payment-form">
          <div class="sr-combo-inputs-row">
            <div class="sr-input sr-card-element StripeElement StripeElement--complete"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
            <iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame5" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-d6a9f2be259fc498a9a97185f2ad46a4.html#style[base][color]=%2332325d&amp;style[base][fontFamily]=%22Helvetica+Neue%22%2C+Helvetica%2C+sans-serif&amp;style[base][fontSmoothing]=antialiased&amp;style[base][fontSize]=16px&amp;style[base][::placeholder][color]=%23aab7c4&amp;style[invalid][color]=%23fa755a&amp;style[invalid][iconColor]=%23fa755a&amp;componentName=card&amp;wait=false&amp;rtl=false&amp;keyMode=test&amp;apiKey=pk_test_TYooMQauvdEDq54NiTphI7jx&amp;origin=https%3A%2F%2Fstripe.com&amp;referrer=https%3A%2F%2Fstripe.com%2Fdocs%2Fpayments%2Faccept-a-payment%23web-setup&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 19.2px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
          </div>
          <div class="sr-field-error" id="card-errors" role="alert"></div>
        </div>
        <div>
        
<br>
        </div>







                                    <button type="button" class="btn btn-lg btn-secondary btn-block mb-4">Pay Now</button>
                                    <p class="text-center text-600">Already have account? <a href="http://localhost/startup/public/login">Sign In</a></p>
            
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-1 px-0 py-9">
                            <div class="bg-container overlay overlay-10" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/c/ca/SAS_Supermarket_-_interior-1.jpg)"></div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End of Section -->
        </main>
        <!-- End of Main Content -->


        <!-- Core Javascripts -->
        <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Theme Javascripts -->
        <script src="../dist/js/theme.min.js"></script>
    </body>
</html>
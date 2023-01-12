<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Centrex : : Web3</title>

        <link rel="stylesheet" href="<?php echo userassets(); ?>custom_theme3/css/styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/7.4.1/smooth-scrollbar.css">
		
		<script src="<?php echo userassets(); ?>custom_theme/js/sweetalert2.all.min.js"></script>

    </head>

<body class="dark-bg">
    <nav class="index-pages">

        <div class="bg"></div>
        <div class="brand">
            <img src="<?php echo userassets(); ?>custom_theme3/images/Brand.png" alt="">
            <span>Centrex</span>
        </div>

        <div class="items">
            <div class="hiddeable">
                <a class="sub" href="<?php echo site_url(RURL.'/earn/savingsnew');?>">Earn</a>
                <a class="sub" href="<?php echo site_url(RURL.'/simple/onramping2');?>">Buy Crypto</a>
                <a class="sub" href="<?php echo site_url(RURL.'/simple/onramping2');?>">Sell with Centrex</a>
            </div>

            <div class="pb">
            
                <a class="border-btn" href="<?php echo site_url(RURL.'/seguran/basics/sair');?>">Log out</a>       
                
                <img class="mobile-menu" src="<?php echo userassets(); ?>custom_theme3/images/mbmenu.png">
            </div>
        </div>

    </nav>

	<div class="loader">
		<img src="<?php echo userassets(); ?>custom_theme3/images/Brand Black.png">
	</div>

    <div id="my-scrollbar" class="structure">
        <div class="noscroll-container" style="justify-content: center;">
		
			<form action="<?php echo base_url(); ?>en/centrex/seguran/resetPassword" method="POST" class="forgetPassword" id="resetPassForm">

                <h4>Reset your Password</h4>
                <p>Enter your new password and your code for <br> continue using Centrex.</p>

				<input type="hidden" value="<?php echo $code;?>" name="code" id="code" >
                <label class="borderLabel" for="password">New Password <span>*</span></label>
                <div class="show-password">
                    <input class="borderInput" name="password" type="password" id="password" data-placement="right" data-toggle="tooltip" title="<?php echo lang('PASSMSG');?> !" value="<?php echo $this->session->flashdata('postdata')['password'] ?>">
                    <img src="images/showpass.png">
                </div>

                <label class="borderLabel" for="cpassword">Confirm New Password <span>*</span></label>
                <div class="show-password">
                    <input class="borderInput" name="cpassword" type="password" id="password_" value="<?php echo $this->session->flashdata('postdata')['cpassword'] ?>">
                    <img src="images/showpass.png">
                </div>

                <label class="borderLabel" for="forgot_code">Reset Code <span>*</span></label>
                <input class="borderInput" name="forgot_code" type="text" value="<?php echo $this->session->flashdata('postdata')['forgot_code'] ?>">

                <button class="btnBorder g-recaptcha" id="submit_" data-sitekey="6Lfuz0UgAAAAABTF5CbiH0wSHXqhsAspvSm6KXYO" data-callback="submitResetPassForm">Reset Password</button>

            </form>

            <div class="footer2 d-flex justify-content-center">
                <p>© 2018-2022 Centrex.ae All Rights Reserved</p>
            </div>

		</div>
	</div>
			
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/smooth-scrollbar@8.5.2/dist/smooth-scrollbar.js"></script>

	<script>
        const bodyScrollBar = Scrollbar.init(document.querySelector('#my-scrollbar'), { damping: 0.07 });

        $(window).on("load",function(){
            $('nav').css('margin-top', '100px')
            $('nav .bg').css('opacity', '100%')

            $('.loader img').css('opacity', '0%')
            $('.loader').css('opacity', '0%')

            setTimeout(function(){
                $('.loader').css('z-index', '-1')
            }, 700)

        })

        $('form').on('keyup', 'input', function(){
            if($(this).val())
                $('button').addClass('btnActive')
            else
                $('button').removeClass('btnActive')
        })
    </script>

    <script type="text/javascript">
                
        $( document ).ready(function() {
            <?php if($this->session->flashdata('errors')){ ?>
                errortext = '<?php echo $this->session->flashdata("errors"); ?>';
                Swal.fire({
                    icon: 'error',
                    title: 'Error..',
                    text: errortext
                })
            <?php } ?>
            
            <?php if($this->session->flashdata('success')){ ?>
                successtext = '<?php echo $this->session->flashdata("success"); ?>';
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: successtext
                })
            <?php } ?>
        })
    </script>

</body>
</html>
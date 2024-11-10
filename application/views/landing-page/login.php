<!-- BEGIN DETAIL MAIN BLOCK -->
<!-- <div class="detail-block detail-block_margin" style="background-image: url(<?= base_url() . 'assets/assets-landing/image/banner/dekor2.jpg'  ?>); margin-top:145px">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Log in</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Log in</li>
            </ul>
        </div>
    </div>
</div> -->
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN LOGIN -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="path/to/your/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="login">
        <div class="wrapper">
            <div class="login-form js-img" data-src="img/login-form__bg.png">
                <form action="<?= base_url('login/proses'); ?>" method="POST">
                    <h3>Log In</h3>
                    <h6>Masuk dan Pilih Paket atau Vendor Pernikahanmu Sesuai yang Kamu Inginkan.</h9><br><br>
                    <div class="box-field">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="box-field">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <button class="btn" type="submit">Log In</button>
                    <div class="login-form__bottom">
                        <span>No account? <a href="<?= base_url('register') ?>">Register now</a></span>
                        <span> | </span>
                        <span><a href="<?= base_url('forgot-password') ?>">Forgot Password?</a></span>
                    </div>
                </form>
                <br><center><p>Repost by <a href='https://instagram.com/ferdiodwi' title='ferdiodwi' target='_blank'>ferdiodwi</a></p></center>
            </div>
        </div>
        <img class="promo-video__decor js-img" data-src="<?= base_url() . 'assets/assets-landing/image/side/shop-decor-side-r.jpg' ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
        <img class="shop-decor js-img" data-src="<?= base_url() . 'assets/assets-landing/image/side/shop-decor-side.jpg' ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
    </div>

    <!-- Popup Modal -->
    <?php if ($this->session->flashdata('error')): ?>
        <div class="popup" id="popup">
            <div class="popup-content">
                <span class="close">&times;</span>
                <p><?php echo $this->session->flashdata('error'); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <script>
        $(document).ready(function() {
            <?php if ($this->session->flashdata('error')): ?>
                $('#popup').show();
            <?php endif; ?>
            $('.close').click(function() {
                $('#popup').hide();
            });
        });
    </script>

    <style>
        .popup {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            position: relative;
            margin: 15% auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</body>
</html>



<!-- LOGIN EOF   -->



<!-- BEGIN DETAIL MAIN BLOCK -->
<!-- <div class="detail-block detail-block_margin" style="background-image: url(<?= base_url() . 'assets/assets-landing/image/banner/dekor2.jpg'  ?>); margin-top:145px">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Registration</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="<?= base_url('/') ?>" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Registration</li>
            </ul>
        </div>
    </div>
</div> -->
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN REGISTRATION -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="path/to/your/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="login registration">
    <div class="wrapper">
        <div class="login-form js-img" data-src="img/registration-form__bg.png">
            <form method="POST" action="<?php echo base_url('register/proses'); ?>">
                <h3>register now</h3>
                <div class="box-field">
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="text" name="no" id="no" class="form-control" placeholder="Masukkan No Telepon" required>
                    </div>
                    <div class="box-field">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                    </div>
                </div>
                <div class="box-field">
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap" required>
                </div>
                <!-- <div class="box-field"> -->
                <select name="gender" id="gender" class="form-control" placeholder="Pilih Jenis Kelamin" required>
                    <option>--Pilih Jenis Kelamin--</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <!-- </div> -->
                <div class="box-field__row">
                    <span>password</span>
                </div>
                <div class="box-field">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
                <button class="btn" type="submit">registration</button>
                <div class="login-form__bottom">
                    <span>Already have an account? <a href="<?= base_url('login') ?>">Log in</a></span>
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
        // Display the popup if there is an error
        $(document).ready(function() {
            <?php if ($this->session->flashdata('error')): ?>
                $('#popup').show();
            <?php endif; ?>

            // Close the popup when the 'close' button is clicked
            $('.close').click(function() {
                $('#popup').hide();
            });
        });
    </script>

    <style>
        /* Popup styles */
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

<!-- REGISTRATION EOF   -->



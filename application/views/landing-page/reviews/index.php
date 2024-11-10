
<div class="detail-block detail-block_margin" style="background-image: url(<?= base_url() . 'assets/assets-landing/image/banner/dekor2.jpg'  ?>); margin-top:145px">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Review</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="<?= base_url('/') ?>" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Review</li>
            </ul>
        </div>
    </div>
</div>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Accordion</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap">
    <style>
        body {
            background-color: #fff;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }
        .container {
            margin-top: 66px;
        }
        .height {
            height: 100vh;
        }
        .card {
            border: none;
            cursor: pointer;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);
        }
        .card:hover {
            background-color: #eee;
        }
        .ratings i {
            color: orange;
        }
        .testimonial-list {
            list-style: none;
        }
        .testimonial-list li {
            margin-bottom: 20px;
        }
        .testimonials-margin {
            margin-top: -19px;
        }
    </style>

    <div class="container">
        <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">
            <div class="row">
                <!-- Testimonial List -->
                <div class="col-md-6">
                    <div class="p-3">
                        <ul class="testimonial-list">
                            <li>
                                <div class="card p-3" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
                                        <div class="d-flex flex-column ms-2">
                                            <span class="font-weight-normal">Ferdio Dwi</span>
                                            <span>Sales Manager, Stack</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card p-3" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="https://i.imgur.com/udGH5tO.jpg" width="50" class="rounded-circle">
                                        <div class="d-flex flex-column ms-2">
                                            <span class="font-weight-normal">Alvyn Dlogok</span>
                                            <span>Head of Sales, Asana</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card p-3" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="https://i.imgur.com/Uz4FjGZ.jpg" width="50" class="rounded-circle">
                                        <div class="d-flex flex-column ms-2">
                                            <span class="font-weight-normal">Mas Rio</span>
                                            <span>Sales Team Lead, Sketch</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Testimonial Content -->
                <div class="col-md-6">
                    <div class="p-3 testimonials-margin">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <h4>It was a great experience</h4>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <h4>Thanks for this great service</h4>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <h4>You all are awesome thanks a lot</h4>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper (No jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


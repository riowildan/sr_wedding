<!-- BEGIN DETAIL MAIN BLOCK -->
<br><br>
<div class="detail-block detail-block_margin" style="background-image: url(<?= base_url() . 'assets/assets-landing/image/banner/dekor2.jpg'  ?>); margin-top:145px">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Gallery</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="<?= base_url('/') ?>" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Gallery</li>
            </ul>
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Boto | Photography HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/assets-landing/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/assets-landing/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/assets-landing/css/slicknav.min.css"/>
	<link rel="stylesheet" href="assets/assets-landing/css/fresco.css"/>
	<link rel="stylesheet" href="assets/assets-landing/css/slick.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="style.css"/>
	<style>
		:root {
    --primary-color: #ff6b6b;
    --secondary-color: #4a4a4a;
    --background-color: #ffffff;
    --text-color: #333333;
    --shadow-color: rgba(0, 0, 0, 0.1);
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-color: var(--background-color);
    color: var(--text-color);
    font-family: 'arial', sans-serif;
  }
  
  @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");
  
  * {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  }
  
  /* body {
  padding: 0;
  margin: 0;
  font-family: "Poppins", sans-serif;
  } */
  
  .active {
    background-color: var(--primary-color);
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  
  nav {
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
    background-color: rgba(255, 255, 255, 0.95);
    box-shadow: 0 2px 5px var(--shadow-color);
    z-index: 1000;
  }
  nav .logo {
  display: flex;
  align-items: center;
  }
  nav .logo img {
  height: 30px;
  width: auto;
  margin-right: 10px;
  }
  nav .logo h1 {
    font-family: 'arial', sans-serif;
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--primary-color);
  }
  
  nav ul {
  list-style: none;
  display: flex;
  }
  nav ul li {
  margin-left: 1.5rem;
  }
  nav ul li a {
  text-decoration: none;
  color: #000;
  font-size: 95%;
  font-weight: 400;
  padding: 4px 8px;
  border-radius: 5px;
  }
  
  nav ul li a:hover {
  background-color: var(--primary-color);
  }
  
  .hamburger {
  display: none;
  cursor: pointer;
  }
  
  .hamburger .line {
  width: 25px;
  height: 1px;
  background-color: #1f1f1f;
  display: block;
  margin: 7px auto;
  transition: all 0.3s ease-in-out;
  }
  .hamburger-active {
  transition: all 0.3s ease-in-out;
  transition-delay: 0.6s;
  transform: rotate(45deg);
  }
  
  .hamburger-active .line:nth-child(2) {
  width: 0px;
  }
  
  .hamburger-active .line:nth-child(1),
  .hamburger-active .line:nth-child(3) {
  transition-delay: 0.3s;
  }
  
  .hamburger-active .line:nth-child(1) {
  transform: translateY(12px);
  }
  
  .hamburger-active .line:nth-child(3) {
  transform: translateY(-5px) rotate(90deg);
  }
  
  .menubar {
  position: absolute;
  top: 0;
  left: -60%;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  width: 60%;
  height: 100vh;
  padding: 20% 0;
  background: rgba(255, 255, 255);
  transition: all 0.5s ease-in;
  z-index: 2;
  }
  .active {
  left: 0;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  }
  
  .menubar ul {
  padding: 0;
  list-style: none;
  }
  .menubar ul li {
  margin-bottom: 32px;
  }
  
  .menubar ul li a {
  text-decoration: none;
  color: #000;
  font-size: 95%;
  font-weight: 400;
  padding: 5px 10px;
  border-radius: 5px;
  }
  
  .menubar ul li a:hover {
  background-color: #f5f5f5;
  }
  @media screen and (max-width: 790px) {
  .hamburger {
    display: block;
  }
  nav ul {
    display: none;
  }
  }
  
  .auth-button .login-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    color: var(--secondary-color);
    transition: color 0.3s ease;
  }
  
  .auth-button .login-btn:hover {
    color: var(--primary-color);
  }
  
  
  /* Hero Section */
  .hero {
    margin-top: 4rem;
    padding: 4rem 5%;
    background-color: #fafafa;
  }
  
  .hero-content {
    display: flex;
    align-items: center;
    gap: 4rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .hero-text {
    flex: 1;
  }
  
  .hero-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    margin-bottom: 1.5rem;
    line-height: 1.2;
    color: #2c2c2c;
  }
  
  .hero-text p {
    color: var(--secondary-color);
    margin-bottom: 2rem;
    line-height: 1.8;
    font-size: 1.1rem;
  }
  
  .browse-btn {
    display: inline-block;
    padding: 1rem 2.5rem;
    background-color: var(--primary-color);
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-weight: 500;
    letter-spacing: 0.5px;
  }
  
  .browse-btn:hover {
    background-color: #ff5252;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
  }
  
  /* Hero Section */
  .hero {
    margin-top: 4rem;
    padding: 4rem 5%;
    background-color: #fafafa;
  }
  
  .hero-content {
    display: flex;
    align-items: center;
    gap: 4rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .hero-text {
    flex: 1;
  }
  
  .hero-image {
    flex: 1;
    position: relative;
  }
  
  .hero-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    object-fit: cover;
  }
  
  .hero-image img:hover {
    transform: scale(1.02);
  }
  
  /* Vendor Section */
  .vendor-section {
    padding: 6rem 5%;
  }
  
  .vendor-section h2 {
    font-family: 'Playfair Display', serif;
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #2c2c2c;
  }
  
  .package-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .package-card {
    background-color: white;
    padding: 2.5rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px var(--shadow-color);
    text-align: center;
    transition: transform 0.3s ease;
  }
  
  .package-card:hover {
    transform: translateY(-5px);
  }
  
  .package-card h3 {
    font-family: 'Playfair Display', serif;
    margin-bottom: 1rem;
    color: #2c2c2c;
  }
  
  .price {
    font-size: 1.25rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    font-weight: bold;
  }
  
  .select-btn {
    padding: 0.8rem 2rem;
    background-color: var(--primary-color);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
  }
  
  .select-btn:hover {
    background-color: #ff5252;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
  }
  
  /* Responsive Design */
  @media (max-width: 1024px) {
    .hero-text h1 {
        font-size: 3rem;
    }
  }
  
  @media (max-width: 768px) {
    .hero-content {
        flex-direction: column-reverse;
        text-align: center;
        gap: 2rem;
    }
  
    .nav-links {
        display: none;
    }
  
    .hero-text h1 {
        font-size: 2.5rem;
    }
  
    .hero-text p {
        font-size: 1rem;
    }
  
    .package-grid {
        grid-template-columns: 1fr;
    }
  
    .hero-image img {
        max-width: 100%;
        height: auto;
    }
  }
  
  /* Review Section */
  .review-section {
    padding: 6rem 5%;
    background-color: #fafafa;
  }
  
  .review-section h2 {
    font-family: 'Playfair Display', serif;
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #2c2c2c;
  }
  
  .review-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .review-card {
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px var(--shadow-color);
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .review-card:hover {
    transform: translateY(-5px);
  }
  
  .review-content p {
    font-style: italic;
    color: var(--secondary-color);
    margin-bottom: 1.5rem;
    line-height: 1.6;
  }
  
  .reviewer {
    display: flex;
    align-items: center;
    gap: 1rem;
  }
  
  .reviewer-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
  }
  
  .reviewer-name {
    font-weight: bold;
  }
  
  /* Footer Styles */
  .footer {
    background-color: #2c2c2c;
    color: #fff;
    padding: 3rem 5%;
  }
  
  .footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .footer-section {
    flex: 1;
    margin-bottom: 2rem;
    min-width: 250px;
  }
  
  .footer-section h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    margin-bottom: 1rem;
  }
  
  .footer-section p {
    font-size: 0.9rem;
    line-height: 1.6;
  }
  
  .social-icons {
    display: flex;
    gap: 1rem;
  }
  
  .social-icon {
    color: #fff;
    font-size: 1.2rem;
    transition: color 0.3s ease;
  }
  
  .social-icon:hover {
    color: #ffd700;
  }
  
  .footer-bottom {
    text-align: center;
    padding-top: 2rem;
    margin-top: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 0.8rem;
  }
  
  /* Responsive Design */
  @media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
    }
  
    .footer-section {
        margin-bottom: 2rem;
    }
  }
  
  /* vendor.php*/
  
  /* Vendor Page Styles */
  .vendor-search {
    background-image: url('images/vendor-banner.jpg');
    background-size: cover;
    background-position: center;
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #000000;
    padding: 2rem;
  }
  
  .vendor-search h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    margin-bottom: 1.5rem;
    color: #000000;
  }
  
  .search-form {
    display: flex;
    max-width: 500px;
    width: 100%;
  }
  
  .search-form input {
    flex-grow: 1;
    padding: 0.75rem;
    font-size: 1rem;
    border: none;
    border-radius: 5px 0 0 5px;
  }
  
  .search-form button {
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .search-form button:hover {
    background-color: var(--secondary-color);
  }
  
  .vendor-categories {
    padding: 4rem 5%;
  }
  
  .category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .category-card {
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  
  .category-card:hover {
    transform: translateY(-5px);
  }
  
  .category-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  .category-card h3 {
    padding: 1rem;
    text-align: center;
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    color: var(--primary-color);
  }
  
  /* Responsive Design */
  /* @media (max-width: 768px) {
    .vendor-search h1 {
        font-size: 2.5rem;
        color: #000000;
    }
  
    .search-form {
        flex-direction: column;
        align-items: stretch;
    }
  
    .search-form input,
    .search-form button {
        width: 100%;
        border-radius: 5px;
    }
  
    .search-form input {
        margin-bottom: 0.5rem;
    }
  
    .category-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
  } */

   /* =================================
------------------------------------
  Boto | Photography HTML Template
  Version: 1.0
  Copyright By: ColorLib
 ------------------------------------
 ====================================*/

/*----------------------------------------*/
/* Template default CSS
/*----------------------------------------*/

@import url("https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,700;1,400;1,700&display=swap");


html,
body {
	height: 100%;
	font-family: "Arimo", sans-serif;
	-webkit-font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	color: #222222;
	font-family: "Arimo", sans-serif;
	font-weight: 700;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
	line-height: 1.4;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 18px;
}

h6 {
	font-size: 16px;
}

p {
	font-size: 16px;
	color: #7E858B;
	line-height: 1.8;
}

img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
}

ul,
ol {
	padding: 0;
	margin: 0;
}

@media (min-width: 1200px) {
	.container {
		max-width: 1200px;
	}
}

/* Preloder */

#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #ffffff;
}

.loader {
	width: 40px;
	height: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
}

@keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

/*---------------------
   Helper CSS
 -----------------------*/

.section-title {
	text-align: center;
	margin-bottom: 55px;
}

.section-title img {
	margin-bottom: 15px;
}

.section-title h2 {
	font-weight: 400;
	font-size: 38px;
	text-transform: uppercase;
}

.section-title p {
	padding-top: 15px;
	margin-bottom: 0;
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;
}

.spad {
	padding-top: 100px;
	padding-bottom: 100px;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #fff;
}

/*---------------------
  Commom elements
-----------------------*/

.site-btn {
	display: inline-block;
	font-size: 16px;
	padding: 16px 15px;
	min-width: 180px;
	color: #fff;
	background: #8DB952;
	line-height: 1;
	text-align: center;
	font-weight: 700;
	border: none;
	border-radius: 2px;
}

.site-btn i {
	font-size: 24px;
	position: relative;
	top: 5px;
	margin-left: 4px;
}

.site-btn:hover {
	color: #fff;
}

.section__title {
	text-align: center;
	padding-bottom: 40px;
	margin-bottom: 45px;
	position: relative;
}

.section__title:after {
	position: absolute;
	content: "";
	width: 60px;
	height: 4px;
	left: calc(50% - 30px);
	bottom: 0;
	background: #8DB952;
}

.section__title h2 {
	margin-bottom: 0;
	text-transform: uppercase;
}

@media (max-width: 576px) {
	.section__title h2 {
		font-size: 24px;
	}
}

.search-model {
	display: none;
	position: fixed;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #ffffff;
	z-index: 99999;
}

.search-model-form {
	padding: 0 15px;
}

.search-model-form input {
	width: 500px;
	font-size: 34px;
	border: none;
	border-bottom: 2px solid #ededed;
	background: 0 0;
	color: #999;
}

@media (max-width: 576px) {
	.search-model-form input {
		width: 100%;
		font-size: 24px;
	}
}

.search-close-switch {
	position: absolute;
	width: 50px;
	height: 50px;
	background: #333;
	color: #fff;
	text-align: center;
	border-radius: 50%;
	font-size: 39px;
	line-height: 28px;
	top: 30px;
	cursor: pointer;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.pt83 {
	padding-top: 83px;
}

/*---------------------
   Header section
 -----------------------*/

.header {
	padding: 40px 45px 0;
	padding-top: 40px;
}

@media (max-width: 576px) {
	.header {
		padding: 40px 0 0;
	}
}

@media (max-width: 576px) {
	.header__social {
		display: none;
	}
}

.header__social a,
.header__switches a {
	display: inline-block;
	color: #222222;
	padding-top: 5px;
	margin-right: 15px;
	font-size: 16px;
}

.header__social a:last-child,
.header__switches a:last-child {
	margin-right: 0;
}

.header__social a.nav-switch,
.header__switches a.nav-switch {
	display: none;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background: #e1e1e1;
	text-align: center;
	padding-top: 9px;
	margin-top: -9px;
}

@media (max-width: 576px) {
	.header__social a.nav-switch,
	.header__switches a.nav-switch {
		display: inline-block;
	}
}

.header__switches {
	text-align: right;
}

@media (max-width: 576px) {
	.header__switches {
		text-align: center;
		padding-top: 20px;
	}
}

/*----------
   Menu
 ---------*/

.main__menu {
	position: relative;
	right: 0;
	padding-top: 25px;
	text-align: center;
}

@media (max-width: 576px) {
	.main__menu .nav__menu {
		display: none;
	}
}

.main__menu .nav__menu>li {
	display: inline-block;
	position: relative;
}

.main__menu .nav__menu>li:last-child a {
	margin-right: 0;
}

.main__menu .nav__menu>li>a {
	position: relative;
	font-size: 16px;
	color: #7E858B;
	font-weight: 700;
	padding: 5px 2px;
	margin-right: 40px;
	text-transform: uppercase;
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
	.main__menu .nav__menu>li>a {
		margin-right: 20px;
	}
}

.main__menu .nav__menu>li>a:after {
	position: absolute;
	content: "";
	width: 0;
	height: 6px;
	left: 0;
	bottom: 8px;
	background: #8DB952;
	z-index: -1;
	-webkit-transition: 0.3s;
	-o-transition: 0.3s;
	transition: 0.3s;
}

.main__menu .nav__menu>li>a.menu--active {
	color: #222222;
}

.main__menu .nav__menu>li>a.menu--active:after {
	width: 100%;
}

.main__menu .nav__menu>li:hover a {
	color: #222222;
}

.main__menu .nav__menu>li:hover a:after {
	width: 100%;
}

.main__menu .nav__menu>li:hover .sub__menu {
	top: 100%;
	opacity: 1;
	visibility: visible;
	margin-top: 15px;
}

.main__menu .nav__menu>li .sub__menu {
	position: absolute;
	text-align: left;
	padding: 10px 0;
	width: 170px;
	left: 0;
	top: 100%;
	margin-top: 50px;
	-webkit-box-shadow: 0 9px 50px rgba(0, 0, 0, 0.1);
	box-shadow: 0 9px 50px rgba(0, 0, 0, 0.1);
	background: #fff;
	opacity: 0;
	visibility: hidden;
	z-index: 99;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.main__menu .nav__menu>li .sub__menu:after {
	position: absolute;
	content: "";
	width: 100%;
	height: 25px;
	left: 0;
	top: -25px;
}

.main__menu .nav__menu>li .sub__menu>li {
	display: block;
}

.main__menu .nav__menu>li .sub__menu>li>a {
	display: block;
	display: block;
	padding: 5px 15px;
	color: #7E858B;
	text-transform: none;
	margin: 0;
	font-size: 14px;
	font-weight: 700;
}

.main__menu .nav__menu>li .sub__menu>li>a:hover {
	color: #222222;
}

.main__menu .nav__menu>li .sub__menu>li>a:after {
	display: none;
}

.slicknav_menu {
	background: #f7f7f7;
	padding: 0;
	margin-bottom: 30px;
	text-align: left;
	display: none;
}

@media (max-width: 576px) {
	.slicknav_menu {
		display: block;
	}
}

.slicknav_btn {
	display: none;
}

.slicknav_nav ul {
	margin: 0;
}

.slicknav_nav .slicknav_row:hover {
	border-radius: 0;
	background: transparent;
	color: #222222;
}

.slicknav_nav a:hover {
	border-radius: 0;
	background: transparent;
	color: #222222;
}

.slicknav_nav .slicknav_row,
.slicknav_nav a {
	padding: 11px 25px;
	margin: 0;
	color: #222222;
	font-size: 16px;
	font-weight: 700;
	border-bottom: 1px solid #e9e9e9;
}

.slicknav_nav .slicknav_item a {
	border-bottom: none;
}

/*---------------------
   Hero section
 -----------------------*/

.hero__section {
	padding-top: 120px;
	margin-bottom: 90px;
}

@media (max-width: 576px) {
	.hero__section {
		padding-top: 30px;
	}
}

.slide-item {
	padding: 0 5px;
	outline: none;
	cursor: pointer;
}

.slick-center.slide-item img {
	padding: 0;
	-webkit-transition: all 0.4s ease 0s;
	-o-transition: all 0.4s ease 0s;
	transition: all 0.4s ease 0s;
}

.hero-slider .slick-track {
	-webkit-transition: all 0.1s;
	-o-transition: all 0.1s;
	transition: all 0.1s;
}

.slide-item img {
	height: 570px;
	padding: 65px 0;
	-webkit-transition: 0.4s;
	-o-transition: 0.4s;
	transition: 0.4s;
}

@media (max-width: 576px) {
	.slide-item img {
		padding: 0;
	}
}

.hero-text-slider {
	text-align: center;
	padding-top: 50px;
	max-width: 800px;
	margin: 0 auto;
}

/*---------------------
   Footer section
 -----------------------*/

.footer__copyright__text {
	text-align: center;
	padding-bottom: 5px;
}

.footer__copyright__text p {
	font-size: 16px;
}

.footer__copyright__text i {
	color: #d32a2a;
}

.footer__copyright__text a {
	color: #7E858B;
	text-decoration: underline;
}

.footer__copyright__text a:hover {
	color: #8DB952;
}

/*------------------
   About page
 ------------------*/

.about__page {
	padding: 90px 60px 150px;
}

@media (max-width: 576px) {
	.about__page {
		padding: 30px 0 150px;
	}
}

.about__title {
	display: inline-block;
	margin-bottom: 50px;
	position: relative;
}

.about__title:after {
	position: absolute;
	content: "";
	width: 100%;
	height: 6px;
	left: 0;
	bottom: 8px;
	background: #8DB952;
	opacity: 0.5;
	z-index: -1;
}

.about__text {
	padding-bottom: 50px;
}

.about__text img {
	padding-top: 20px;
}

.about__meta {
	overflow: hidden;
	margin-bottom: 35px;
}

.about__meta img {
	float: left;
	width: 100px;
	height: 100px;
	border-radius: 50%;
	margin-right: 15px;
	padding-top: 0;
}

.about__meta__info {
	overflow: hidden;
	padding-top: 25px;
}

.about__meta__info h5 {
	margin-bottom: 5px;
}

.about__meta__info p {
	text-transform: uppercase;
	font-size: 12px;
	color: #8DB952;
}

.experience__item {
	padding-top: 15px;
	margin-bottom: 20px;
}

.experience__item h4 {
	font-size: 20px;
	margin-bottom: 20px;
}

.skills__text {
	padding-bottom: 50px;
}

.skills__text p {
	margin-bottom: 40px;
}

.single-progress-item {
	margin-bottom: 30px;
}

.single-progress-item h6 {
	margin-bottom: 10px;
}

.progress-bar-style {
	height: 6px;
	background: #E8E8E8;
}

.progress-bar-style .bar-inner {
	height: 100%;
	background: #8DB952;
}

/*-------------------
   Gallery Page
 -------------------*/

.gallery__page {
	padding: 80px 15px 65px;
}

@media (max-width: 576px) {
	.gallery__page {
		padding: 30px 15px 65px;
	}
}

.gallery__warp {
	max-width: 1570px;
	margin: 0 auto;
}

.gallery__item {
	display: block;
	margin-bottom: 30px;
}

.gallery__item img {
	min-width: 100%;
}

.fr-position-outside {
	left: 0;
	top: 0;
	right: auto;
	bottom: auto;
}

.fr-position-text {
	color: #fff;
}

.fr-window-skin-fresco.fr-window-ui-outside .fr-close-background,
.fr-window-skin-fresco.fr-window-ui-outside .fr-close:hover .fr-close-background {
	background-color: transparent;
}

.fr-thumbnail-active {
	border: 2px solid #8DB952;
}

/*----------------
   Blog Page
 ----------------*/

.blog__page {
	padding: 90px 0 55px;
}

@media (max-width: 576px) {
	.blog__page {
		padding: 30px 0 55px;
	}
}

.blog__warp {
	max-width: 1570px;
	padding: 0 15px;
	margin: 0 auto;
}

.blog__item {
	height: 370px;
	position: relative;
	margin-bottom: 30px;
	background-position: center;
}

.blog__item.blog__item--long {
	height: 770px;
}

.blog__item::after {
	position: absolute;
	content: "";
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), color-stop(43%, rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0.49)));
	background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 43%, rgba(0, 0, 0, 0.49) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 43%, rgba(0, 0, 0, 0.49) 100%);
}

@media (max-width: 576px),
only screen and (min-width: 576px) and (max-width: 767px) {
	.blog__item h3 {
		font-size: 22px;
	}
}

.blog__content {
	position: absolute;
	bottom: 30px;
	padding: 0 30px;
	z-index: 2;
}

.blog__content h4 {
	font-size: 22px;
}

.blog__content h4 a {
	color: #fff;
}

.blog__date {
	font-size: 12px;
	font-weight: 700;
	color: #fff;
	margin-bottom: 10px;
}

/*-------------------
   Blog Single Page
 --------------------*/

.blog__slider {
	padding: 70px 0 60px;
}

@media (max-width: 576px) {
	.blog__slider {
		padding: 30px 0 60px;
	}
}

.blog__slider .slick-track {
	margin-left: 380px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.blog__slider .slick-track {
		margin-left: 250px;
	}
}

@media only screen and (min-width: 576px) and (max-width: 767px),
(max-width: 576px) {
	.blog__slider .slick-track {
		margin-left: 0;
	}
}

.blog__slider__item {
	outline: none;
	padding: 0 3px;
}

.blog__container {
	max-width: 1000px;
	padding: 0 15px;
	margin: 0 auto 30px;
}

.blog__container p {
	font-size: 18px;
}

.blog__container h4 {
	font-size: 22px;
	margin-bottom: 20px;
}

.blog__header {
	text-align: center;
}

.blog__cata {
	display: inline-block;
	font-size: 12px;
	font-weight: 700;
	padding: 4px 13px;
	border-radius: 2px;
	color: #fff;
	background: #8DB952;
	margin-bottom: 20px;
}

.blog__single__title {
	font-size: 44px;
	margin-bottom: 30px;
	line-height: 1.2;
}

.blog__metas {
	margin-bottom: 30px;
}

.blog__metas .blog__meta {
	position: relative;
	display: inline-block;
	margin-right: 18px;
	margin-bottom: 5px;
	padding-right: 20px;
	font-size: 14px;
	color: #7E858B;
}

.blog__metas .blog__meta:after {
	position: absolute;
	content: "|";
	font-size: 14px;
	right: 0;
	top: 0;
	color: #7E858B;
}

.blog__metas .blog__meta:last-child {
	margin-right: 0;
	padding-right: 0;
}

.blog__metas .blog__meta:last-child:after {
	display: none;
}

.blog__article blockquote {
	max-width: 1170px;
	margin: 50px auto;
	padding: 45px 45px 55px;
	background-color: #EAEFE5;
	background-image: url("../img/blog-single/quote.png");
	background-repeat: no-repeat;
	background-position: right 60px bottom -10px;
}

.blog__article blockquote p {
	color: #222222;
	font-size: 20px;
	line-height: 1.5;
	margin-bottom: 25px;
}

.blog__article blockquote h4 {
	font-size: 16px;
	margin-bottom: 10px;
}

.blog__article blockquote h5 {
	font-size: 14px;
	text-transform: uppercase;
	color: #8DB952;
	letter-spacing: 2px;
}

.blog__banner {
	max-width: 1170px;
	margin: 0 auto;
}

.blog__banner img {
	min-width: 100%;
}

.post__footer {
	border-top: 1px solid #E8E8E8;
	padding-top: 30px;
	margin-bottom: 70px;
}

.post__tags a {
	display: inline-block;
	font-family: "Raleway", sans-serif;
	color: #7E858B;
	font-size: 12px;
	font-weight: 700;
	padding: 5px 21px;
	margin-bottom: 5px;
	margin-right: 2px;
	background-color: #F3F3F3;
	-webkit-transition: 0.3s;
	-o-transition: 0.3s;
	transition: 0.3s;
}

.post__tags a:hover {
	background: #8DB952;
	color: #fff;
}

.post__share {
	text-align: right;
}

@media only screen and (min-width: 576px) and (max-width: 767px),
(max-width: 576px) {
	.post__share {
		text-align: left;
		padding-top: 35px;
	}
}

.post__share span {
	display: inline-block;
	font-size: 16px;
	font-weight: 700;
}

.post__share a {
	display: inline-block;
	font-size: 16px;
	color: #7E858B;
	margin-left: 30px;
}

.post__share a:first-child {
	margin-left: 0;
}

.comment__area {
	padding-bottom: 100px;
}

.comment__area h2 {
	margin-bottom: 40px;
}

.comment__form input,
.comment__form textarea {
	width: 100%;
	height: 50px;
	font-size: 16px;
	padding: 15px 20px;
	margin-bottom: 26px;
	color: #222222;
	border: 1px solid rgba(0, 0, 0, 0.1);
}

.comment__form input:focus,
.comment__form textarea:focus {
	border: 1px solid #8DB952;
}

.comment__form textarea {
	height: 110px;
	resize: none;
	margin-bottom: 50px;
}

.blog__details__comment {
	border-bottom: 1px solid #EBEBEB;
	padding-bottom: 30px;
}

.blog__details__comment h4 {
	color: #222222;
	text-transform: uppercase;
	margin-bottom: 50px;
}

.recent__post {
	padding: 75px 15px 60px;
	border-top: 1px solid #E8E8E8;
}

.recent__post h2 {
	margin-bottom: 65px;
}

.recent__post .blog__item {
	background-position: center;
}

/*----------------
   Contact Page
 ----------------*/

.contact__warp {
	max-width: 802px;
	padding: 170px 15px 130px;
	margin: 0 auto;
}

@media (max-width: 576px) {
	.contact__warp {
		padding: 30px 15px 130px;
	}
}

.contact__social {
	padding-top: 20px;
	margin-bottom: 40px;
}

.contact__social a {
	display: inline-block;
	text-align: center;
	width: 40px;
	height: 40px;
	padding-top: 8px;
	margin-right: 6px;
	color: #222222;
	border-radius: 50%;
	background: #E8E8E8;
	-webkit-transition: 0.3s;
	-o-transition: 0.3s;
	transition: 0.3s;
}

.contact__social a:hover {
	background: #8DB952;
	color: #ffffff;
}

.contact__text p {
	font-size: 18px;
	color: #222222;
}

.contact__form {
	padding-top: 20px;
}

.contact__form input,
.contact__form textarea {
	width: 100%;
	height: 50px;
	font-size: 16px;
	padding: 15px 20px;
	margin-bottom: 26px;
	color: #222222;
	border: 1px solid rgba(0, 0, 0, 0.1);
}

.contact__form input:focus,
.contact__form textarea:focus {
	border: 1px solid #8DB952;
}

.contact__form textarea {
	height: 110px;
	resize: none;
	margin-bottom: 50px;
}
	</style>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->

    <script src="script.js"></script>
	<!-- Header Section end -->

	<!-- Hero Section -->
	<section class="hero__section">
		<div class="hero-slider">
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/1.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/1.jpeg" alt="">
				</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/2.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/2.jpeg" alt="">
					</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/3.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/3.jpeg" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/4.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/4.jpeg" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/5.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/5.jpeg" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/6.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/6.jpeg" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="assets/assets-landing/img/hero-slider/7.jpeg" data-fresco-group="projects">
					<img src="assets/assets-landing/img/hero-slider/7.jpeg" alt="">
				</a>	
			</div>
		</div>
		<div class="hero-text-slider">
			<div class="text-item">
				<!-- <h2>Nature</h2> -->
				<p>Photography</p>
			</div>
			<div class="text-item">
				<!-- <h2>Red Heartbeat</h2> -->
				<p>Photography</p>
			</div>
			<div class="text-item">
				<!-- <h2>Blue Dreem</h2> -->
				<p>Photography</p>
			</div>
			<div class="text-item">
				<!-- <h2>Christian Church</h2> -->
				<p>Photography</p>
			</div>
			<div class="text-item">
				<!-- <h2>Red Darkness</h2> -->
				<p>Photography</p>
			</div>
			<div class="text-item">
				<!-- <h2>Beauty with Brain</h2> -->
				<p>Photography</p>
			</div>
			<div class="text-item">
				<!-- <h2>Remarkable</h2> -->
				<p>Photography</p>
			</div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- About Page -->
	<div class="gallery__page">
		<div class="gallery__warp">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/1.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/1.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/2.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/2.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/3.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/3.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/4.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/4.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/5.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/5.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/6.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/6.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/7.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/7.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/8.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/8.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/9.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/9.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/10.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/10.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/11.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/11.jpeg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a class="gallery__item fresco" href="assets/assets-landing/img/gallery/12.jpeg" data-fresco-group="gallery">
						<img src="assets/assets-landing/img/gallery/12.jpeg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="assets/assets-landing/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="assets/assets-landing/js/jquery.slicknav.min.js"></script>
	<script src="assets/assets-landing/js/slick.min.js"></script>
	<script src="assets/assets-landing/js/fresco.min.js"></script>
	<script src="assets/assets-landing/js/main.js"></script>

	</body>
</html>

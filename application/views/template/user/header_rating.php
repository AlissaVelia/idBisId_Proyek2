<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url()?>/https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/animate.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/fl-bigmug-line.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/aos.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user2/css/style.css">
    <style>
.footer {
        background-color: #393e46;
        color: white;
        height:70px;
        text-align:center;}

	/*  
		 * Rating styles
		 */
		.rating {
    display: inline-block;
    position: relative;
    height: 50px;
    line-height: 50px;
    font-size: 50px;
  }

  .rating label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    cursor: pointer;
  }

  .rating label:last-child {
    position: static;
  }

  .rating label:nth-child(1) {
    z-index: 5;
  }

  .rating label:nth-child(2) {
    z-index: 4;
  }

  .rating label:nth-child(3) {
    z-index: 3;
  }

  .rating label:nth-child(4) {
    z-index: 2;
  }

  .rating label:nth-child(5) {
    z-index: 1;
  }

  .rating label input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .rating label .icon {
    float: left;
    color: transparent;
  }

  .rating label:last-child .icon {
    color: #000;
  }

  .rating:not(:hover) label input:checked ~ .icon,
  .rating:hover label:hover input ~ .icon {
    color: orange;
  }

  .rating label input:focus:not(:checked) ~ .icon:last-child {
    color: #000;
    text-shadow: 0 0 5px orange;
  }

</style>
  </head>
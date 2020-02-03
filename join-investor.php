<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Creative Investment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.css " rel="stylesheet">
    <style>
        .price-box {
            margin: 0 auto;
            background: #E9E9E9;
            border-radius: 10px;
            padding: 40px 15px;
            width: 500px;
        }

        .ui-widget-content {
            border: 1px solid #bdc3c7;
            background: #e1e1e1;
            color: #222222;
            margin-top: 4px;
        }

        .ui-slider .ui-slider-handle {
            position: absolute;
            z-index: 2;
            width: 5.2em;
            height: 2.2em;
            cursor: default;
            margin: 0 -40px auto !important;
            text-align: center;
            line-height: 30px;
            color: #FFFFFF;
            font-size: 15px;
        }

        .ui-slider .ui-slider-handle .glyphicon {
            color: #FFFFFF;
            margin: 0 3px;
            font-size: 11px;
            opacity: 0.5;
        }

        .ui-corner-all {
            border-radius: 20px;
        }

        .ui-slider-horizontal .ui-slider-handle {
            top: -.9em;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default {
            border: 1px solid #f9f9f9;
            background: #3498db;
        }

        .ui-slider-horizontal .ui-slider-handle {
            margin-left: -0.5em;
        }

        .ui-slider .ui-slider-handle {
            cursor: pointer;
        }

        .ui-slider a,
        .ui-slider a:focus {
            cursor: pointer;
            outline: none;
        }

        .price,
        .lead p {
            font-weight: 600;
            font-size: 32px;
            display: inline-block;
            line-height: 60px;
        }

        h4.great {
            background: #00ac98;
            margin: 0 0 25px -60px;
            padding: 7px 15px;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            display: inline-block;
            -moz-box-shadow: 2px 4px 5px 0 #ccc;
            -webkit-box-shadow: 2px 4px 5px 0 #ccc;
            box-shadow: 2px 4px 5px 0 #ccc;
        }

        .total {
            border-bottom: 1px solid #7f8c8d;
            /*display: inline;
	padding: 10px 5px;*/
            position: relative;
            padding-bottom: 20px;
        }

        .total:before {
            content: "";
            display: inline;
            position: absolute;
            left: 0;
            bottom: 5px;
            width: 100%;
            height: 3px;
            background: #7f8c8d;
            opacity: 0.5;
        }

        .price-slider {
            margin-bottom: 70px;
        }

        .price-slider span {
            font-weight: 200;
            display: inline-block;
            color: #7f8c8d;
            font-size: 13px;
        }

        .form-pricing {
            background: #ffffff;
            padding: 20px;
            border-radius: 4px;
        }

        .price-form {
            background: #ffffff;
            margin-bottom: 10px;
            padding: 20px;
            border: 1px solid #eeeeee;
            border-radius: 4px;
            /*-moz-box-shadow:    0 5px 5px 0 #ccc;
  	-webkit-box-shadow: 0 5px 5px 0 #ccc;
  	box-shadow:         0 5px 5px 0 #ccc;*/
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-group span.price {
            font-weight: 200;
            display: inline-block;
            color: #7f8c8d;
            font-size: 14px;
        }

        .help-text {
            display: block;
            margin-top: 32px;
            margin-bottom: 10px;
            color: #737373;
            position: absolute;
            /*margin-left: 20px;*/
            font-weight: 200;
            text-align: right;
            width: 188px;
        }

        .price-form label {
            font-weight: 200;
            font-size: 21px;
        }

        img.payment {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .ui-slider-range-min {
            background: #2980b9;
        }

        /* HR */

        hr.style {
            margin-top: 0;
            border: 0;
            border-bottom: 1px dashed #ccc;
            background: #999;
        }
    </style>
    <style>
        .searchable-container {
            margin: 20px 0 0 0
        }

        .searchable-container label.btn-default.active {
            background-color: #007ba7;
            color: #FFF
        }

        .searchable-container label.btn-default {
            width: 90%;
            border: 1px solid #efefef;
            margin: 5px;
            box-shadow: 5px 8px 8px 0 #ccc;
        }

        .searchable-container label .bizcontent {
            width: 100%;
        }

        .searchable-container .btn-group {
            width: 90%
        }

        .searchable-container .btn span.glyphicon {
            opacity: 0;
        }

        .searchable-container .btn.active span.glyphicon {
            opacity: 1;
        }

        .col-lg-3 {
            max-width: 100% !important;
        }

        .btn-default {
            background-color: white;
        }

        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;

        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Creative Investment</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <a class="nav-item nav-link navbar-brand active js-scroll-trigger" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link navbar-brand js-scroll-trigger" href="features.php">Features</a>
                    <a class="nav-item nav-link navbar-brand js-scroll-trigger" href="pricing.php">Pricing</a>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Choose amount to start Investing, and the duration of your sponsoring.</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
        <div class="container">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                                <p style="color: white;">Step 1</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-primary btn-circle" disabled="disabled">2</a>
                                <p style="color: white;">Step 2</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p style="color: white;">Step 3</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
            <div class="price-box">

                <form class="form-horizontal form-pricing" role="form">

                    <div class="price-slider">
                        <h4 class="great">Amount</h4>
                        <span>Minimum &euro;10 is required</span>
                        <div class="col-sm-12">
                            <div id="slider"></div>
                        </div>
                    </div>
                    <div class="price-slider">
                        <h4 class="great">Duration</h4>
                        <span>Minimum 1 day is required</span>
                        <div class="col-sm-12">
                            <div id="slider2"></div>
                        </div>
                    </div>

                    <div class="price-form">

                        <div class="form-group">
                            <label for="amount" class="col-sm-6 control-label">Amount (&euro;): </label>
                            <span class="help-text">Please choose your amount</span>
                            <div class="col-sm-6">
                                <input type="hidden" id="amount" class="form-control">
                                <p class="price lead" id="amount-label"></p>
                                <span class="price">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="duration" class="col-sm-6 control-label">Duration: </label>
                            <span class="help-text">Choose your commitment</span>
                            <div class="col-sm-6">
                                <input type="hidden" id="duration" class="form-control">
                                <p class="price lead" id="duration-label"></p>
                                <span class="price">days</span>
                            </div>
                        </div>
                        <hr class="style">
                        <div class="form-group total">
                            <label for="total" class="col-sm-6 control-label"><strong>Total: </strong></label>
                            <span class="help-text">(Amount * Days)</span>
                            <div class="col-sm-6">
                                <input type="hidden" id="total" class="form-control">
                                <p class="price lead" id="total-label"></p>
                                <span class="price">.00</span>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                        <a class="btn btn-primary btn-lg" href="match-investor.php" role="button">Proceed</a>
                        </div>
                    </div>
                   

                </form>


            </div>

        </div>
        
        
       

        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#slider").slider({
                    animate: true,
                    value: 1,
                    min: 0,
                    max: 10000,
                    step: 10,
                    slide: function(event, ui) {
                        update(1, ui.value); //changed
                    }
                });

                $("#slider2").slider({
                    animate: true,
                    value: 0,
                    min: 0,
                    max: 500,
                    step: 1,
                    slide: function(event, ui) {
                        update(2, ui.value); //changed
                    }
                });

                //Added, set initial value.
                $("#amount").val(0);
                $("#duration").val(0);
                $("#amount-label").text(0);
                $("#duration-label").text(0);

                update();
            });

            //changed. now with parameter
            function update(slider, val) {
                //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
                var $amount = slider == 1 ? val : $("#amount").val();
                var $duration = slider == 2 ? val : $("#duration").val();

                /* commented
                $amount = $( "#slider" ).slider( "value" );
                $duration = $( "#slider2" ).slider( "value" );
                 */

                $total = "€" + ($amount * $duration);
                $("#amount").val($amount);
                $("#amount-label").text($amount);
                $("#duration").val($duration);
                $("#duration-label").text($duration);
                $("#total").val($total);
                $("#total-label").text($total);

                $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + $amount + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
                $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> ' + $duration + ' <span class="glyphicon glyphicon-chevron-right"></span></label>');
            }
        </script>

    <footer>
        <p>
            <center> Creative Investment Copyright &copy; All rights reserved. <?= date("Y") ?></center>
        </p>
    </footer>
</body>

</html>
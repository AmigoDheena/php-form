<!DOCTYPE html>
<html lang="en-US" data-menu="classicmenu">

<head>
    <title>Catering Menu - PHP Form</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <link rel='stylesheet' href='asset/css/screen.css' type='text/css' media='all' />
    <!-- <link rel='stylesheet' href='asset/css/font-awesome.min.css' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' href='asset/css/grid.css' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' href='asset/css/datepicker.css' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' href='asset/css/style.css' type='text/css' media='all' /> -->
    <!-- <link rel="stylesheet" href="asset/css/jquery-ui.css"> -->
    <script src='asset/js/loadcss.js'></script>
    <script>
        // loadCSS( "asset/css/screen.css" );
        loadCSS( "asset/css/font-awesome.min.css" );
        loadCSS( "asset/css/grid.css" );
        loadCSS( "asset/css/datepicker.css" );
        loadCSS( "asset/css/style.css" );
        loadCSS( "asset/css/jquery-ui.css" );
    </script>
    <style>
    #threepack_message,
    #twentypack_message {
        font-size: large;
        font-weight: bold;
    }
    </style>
</head>

<body class="home page-template-default page page-id-2 woocommerce-no-js">
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg">
    </div>
    <div id="page_caption">
        <div class="page_title_wrapper baseline" data-stellar-ratio="1.3">
            <div class="page_title_inner baseline">
                <h1 class="withtopbar">
                    <!-- <span class="ppb_title_first">Catering</span> -->
                    Catering Menu
                </h1>
            </div>
        </div>
    </div>
    <div class="ppb_wrapper hasbg withtopbar">
        <div class="one withsmallpadding ppb_text" style="text-align:center;padding:50px 0 50px 0;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div class="cateringblock">
                            <div class="cateringrow">
                                <div class="cateringmenu">
                                    <div class="cateringbox">
                                        <div class="cateringimg">
                                            <img src="asset/img/cat1.jpg" alt="5 Course Catering Menu" />
                                        </div>
                                        <div class="cateringdet">
                                            <h3>5 Course Catering Menu</h3>
                                            <div class="catlist">
                                                <ul>
                                                    <li>Starter - 6 Pcs</li>
                                                    <li>Bread - 3 Pcs</li>
                                                    <li>Rice/Noodles</li>
                                                    <li>Non-Veg Gravy</li>
                                                    <li>Salad</li>
                                                </ul>
                                            </div>
                                            <div class="catprice">
                                                <span class="pricetag"><span>$</span>39</span>
                                                <span class="packtag">For 3 Pax</span>
                                            </div>
                                            <div class="catbtn">
                                                <button class="choosebtn" onclick="threepack()">Choose your own
                                                    choice</button>
                                                <button class="orderbtn" onclick="threepack()">Order Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cateringmenu">
                                    <div class="cateringbox">
                                        <div class="cateringimg">
                                            <img src="asset/img/cat3.jpg" alt="5 Course Catering Menu" />
                                        </div>
                                        <div class="cateringdet">
                                            <h3>6 Course Catering Menu</h3>
                                            <div class="catlist">
                                                <ul>
                                                    <li>Starter - 40 Pcs</li>
                                                    <li>Bread - 20 Pcs</li>
                                                    <li>Rice/Noodles</li>
                                                    <li>Non-Veg Gravy</li>
                                                    <li>Salad</li>
                                                    <li>Dessert/Drink(20)</li>
                                                </ul>
                                            </div>
                                            <div class="catprice">
                                                <span class="pricetag"><span>$</span>208</span>
                                                <span class="packtag">For 20 Pax</span>
                                            </div>
                                            <div class="catbtn">
                                                <button class="choosebtn" onclick="twentypack()">Choose your own
                                                    choice</button>
                                                <button class="orderbtn" onclick="twentypack()">Order Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ppb_wrapper hasbg withtopbar cateringmenu">
        <div class="one withsmallpadding ppb_text" style="text-align:center;padding:0 0 50px 0;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <div>
                                <form method="POST" style="text-align: left; display: none;" id="threepack"
                                    onSubmit="return validate_threepack( this );">
                                    <div class="standard_wrapper">
                                        <div class="page_content_wrapper">
                                            <div class="inner">
                                                <h3 class="catmenutitle">5 Course Catering Menu</h3>
                                                <input type="hidden" name="course" value="5 Course Catering Menu - 3Pax">
                                                <div class="full-width">

                                                    <label class="menulabel" for="starter">1. STARTER (Choose One) 6Pcs</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="starter" value="Chicken 65"> Chicken 65
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="starter" value="Chicken Tikka"> Chicken Tikka
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="starter" value="Ayam Kunyit"> Ayam Kunyit
                                                    </span>

                                                    <div class="errorclass" id="three_starter_id"></div><br>
                                                    <hr />
                                                    <label class="menulabel" for="bread">2. Bread (Choose One) 3Pcs</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="bread" value="Madurai Prata "> Madurai Prata 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="bread" value="Chapatti"> Chapatti 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="bread" value="Roti Naan"> Roti Naan 
                                                    </span>

                                                    <div class="errorclass" id="three_bread_id"></div><br>
                                                    <hr />
                                                    <label class="menulabel" for="rice">3. Rice/Noodles (Choose One)</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Fried Egg Rice"> Fried Egg Rice
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Basmati Briyani Rice"> Basmati Briyani Rice 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Mee with Mutton Keema"> Mee with Mutton Keema 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Bee Hoon with Mutton Keema"> Bee Hoon with Mutton Keema 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Mee with Chicken Keema"> Mee with Chicken Keema
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Bee Hoon with Chicken Keema"> Bee Hoon with Chicken Keema 
                                                    </span>

                                                    <div class="errorclass" id="three_rice_id"></div><br>
                                                    <hr />
                                                    <label class="menulabel" for="nonveg">4. Non-Veg Gravy (Choose One)</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="nonveg" value="Chettinad Chicken Masala"> Chettinad Chicken Masala
                                                    </span>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="nonveg" value="Butter Chicken Masala"> Butter Chicken Masala 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="nonveg" value="Paprik Ayam"> Paprik Ayam 
                                                    </span>

                                                    <div class="errorclass" id="three_nonveg_id"></div><br>
                                                    <hr />
                                                    <label class="menulabel" for="Salad">5. Salad (Choose One)</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="salad" value="Cucumber, onion Raita"> Cucumber, onion Raita
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="salad" value="Cucumber, onion with Tomato Sauce"> Cucumber, onion with Tomato Sauce 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="salad" value="Cucumber, Carrot, Mango Salad"> Cucumber, Carrot, Mango Salad 
                                                    </span>

                                                    <div class="errorclass" id="three_salad_id"></div><br>
                                                    <button type="submit" class="submit-button threecfm_btn" onclick="threepack_confirm();">Confirm</button>
                                                </div>

                                                <div class="full-width pdetails" style="display: none;">
                                                    <p class="contactdetails"><b>CONTACT DETAILS</b></p>
                                                    <div class="one_half">
                                                        <label>Name <span class="req">*</span></label>
                                                        <input type="text" name="name" id="">
                                                        <div class="errorclass" id="three_name_error"></div>
                                                    </div>

                                                    <div class="one_half last">
                                                        <label>Mobile Number <span class="req">*</span></label>
                                                        <input type="text" name="mobile" id=""> 
                                                        <div class="errorclass" id="three_mobile_error"></div>
                                                    </div>

                                                    <div class="full-width">
                                                        <label>Email <span class="req">*</span></label>
                                                        <input type="email" name="email" id="">
                                                        <div class="errorclass" id="three_email_error"></div>
                                                    </div>

                                                    <div class="one_half">
                                                        <label>Address <span class="req">*</span></label>
                                                        <textarea name="address" id="three_Address"></textarea>
                                                        <div class="errorclass" id="three_address_error"></div>
                                                    </div>

                                                    <div class="one_half last">
                                                        <label><span class="delivryadd">Delivery Address <span class="req">*</span></span> 
                                                            <span class="sameadd">Delivery to same address
                                                                <input type="checkbox" name="sameaddress" id="three_sameaddress"> 
                                                            </span></label>
                                                        <textarea name="develveryaddress"
                                                            id="three_DevelveryAddress"></textarea>
                                                        <div class="errorclass" id="three_develveryaddress_error"></div>
                                                    </div>

                                                    <div class="one_half">
                                                        <label>Delivery Date <span class="req">*</span></label>
                                                        <input type="text" name="date" autocomplete="off" id="threedate">
                                                        <div class="errorclass" id="three_date_error"></div>
                                                    </div>

                                                    <div class="one_half last">
                                                        <label>Delivery Time <span class="req">*</span></label>
                                                        <select name="delevery_time" id="delevery_time" onchange="threeothertime(this);">
                                                            <option value="Lunch 12-1.00 PM">Lunch 12-1.00 PM</option>
                                                            <option value="Dinner 7 - 8.00 PM">Dinner 7 - 8.00 PM</option>
                                                            <option value="other">Other - Please specify</option>
                                                        <select>
                                                        <div class="errorclass" id="three_delevery_time_error"></div>
                                                    </div>

                                                    <div class="one_half">
                                                        <div id="DTime" style="display:none;">
                                                            <label>Please Specify</label>
                                                            <input type="text" name="time" id="Time">
                                                        </div>
                                                    </div>

                                                    <label>Additional info</label>
                                                    <textarea name="info" id=""></textarea>

                                                    <div class="one_half">
                                                        <div class="one_half">
                                                            <label>Coupon code</label>
                                                            <input type="text" class="form-control" id="threepack_coupon_code" placeholder="Apply Promocode" name="coupon_code" style="text-transform: uppercase;">
                                                            <small class="notehint"><i>Coupon Code is Uppercase Sensitive</i></small>
                                                        </div>

                                                        <div class="one_half last">
                                                            <p id="three_apply" class="submit-button applybtn">Apply</p>
                                                        </div>

                                                        <div id="threepack_message"
                                                            style="color:green; width:100%;float: left !important;">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="submit-button" name="pay_now_three" id="three_submit">Submit</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="threepack_pay" style="display: none;">

                                    <div class="standard_wrapper">
                                        <div class="page_content_wrapper">
                                            <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                                <input type='hidden' name='business' value='sb-yfq8l3269874@business.example.com'>
                                                <input type='hidden' name='amount' id="three_amt" value='39'>
                                                <input type='hidden' name='no_shipping' value='1'>
                                                <input type='hidden' name='currency_code' value='SGD'>
                                                <!-- <input type='hidden' name='notify_url' value='http://localhost/php-form/form-1/notify.php'> -->
                                                <input type='hidden' name='cancel_return' value='http://localhost/php-form/form-1/cancel.php'>
                                                <input type='hidden' name='return' value='http://localhost/php-form/form-1/return.php'>
                                                <input type="hidden" name="cmd" value="_xclick">
                                                <input type="submit" name="pay_now" class="submit-button" id="threepack_pay_now" value="Pay Now">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <form method="post" style="text-align: left; display: none;" id="twentypack" onSubmit="return validate_twentypack( this );">
                                    <div class="standard_wrapper">
                                        <div class="page_content_wrapper">
                                            <div class="inner">
                                                <h3 class="catmenutitle">6 Course Catering Menu</h3>
                                                <input type="hidden" name="course" value="6 Course Catering Menu - 20Pax">
                                                <div class="full-width">
                                                    <label class="menulabel" for="starter">1. STARTER (Choose One) 40 Pcs</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="starter" value="Chicken 65 (South Indian)"> Chicken 65 (South Indian)
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="starter" value="Chicken Tikka (North Indian)"> Chicken Tikka (North Indian) 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="starter" value="Ayam Kunyit (Thai Style)"> Ayam Kunyit (Thai Style)
                                                    </span>

                                                    <div class="errorclass" id="twenty_starter_id"></div> <br>
                                                    <hr />
                                                    <label class="menulabel" for="bread">2. Bread (Choose One) 20Pcs</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="bread" value="Madurai Prata"> Madurai Prata 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="bread" value="Chappati"> Chappati 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="bread" value="Roti Naan"> Roti Naan 
                                                    </span>

                                                    <div class="errorclass" id="twenty_bread_id"></div> <br>
                                                    <hr />
                                                    <label class="menulabel" for="rice">3. Rice/Noodles (Choose One)</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Fried Egg Rice (Thai Style)"> Fried Egg Rice (Thai Style) 
                                                    </span>
                                                    
                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Basmati Briyani Rice"> Basmati Briyani Rice 
                                                    </span>
                                                    
                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Mee with Mutton Keema"> Mee with Mutton Keema 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Bee Hoon with Mutton Keema"> Bee Hoon with Mutton Keema 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Mee with Chicken Keema"> Mee with Chicken Keema 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="rice" value="Bee Hoon with Chicken Keema"> Bee Hoon with Chicken Keema 
                                                    </span>

                                                    <div class="errorclass" id="twenty_rice_id"></div> <br>
                                                    <hr />
                                                    <label class="menulabel" for="nonveg">4. Non-Veg Gravy (Choose One)</label>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="nonveg" value="Chettinad Chicken Masala"> Chettinad Chicken Masala
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="nonveg" value="Butter Chicken Masala"> Butter Chicken Masala 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="nonveg" value="Paprik Ayam"> Paprik Ayam 
                                                    </span>

                                                    <div class="errorclass" id="twenty_nonveg_id"></div> <br>
                                                    <hr />

                                                    <label class="menulabel" for="Salad">5. Salad (Choose One)</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="salad" value="Cucumber, onion Raita (with Curd)"> Cucumber, onion Raita (with Curd) 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="salad" value="Cucumber, onion with Tomato Sauce"> Cucumber, onion with Tomato Sauce 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="salad" value="Cucumber, Carrot, Mango Salad"> Cucumber, Carrot, Mango Salad 
                                                    </span>

                                                    <div class="errorclass" id="twenty_salad_id"></div> <br>
                                                    <hr />

                                                    <label class="menulabel" for="dessert">6. Dessert/Drink (20)</label>
                                                    <span class="onerow"> 
                                                        <input type="radio" name="dessert" value="GulabJamun"> GulabJamun 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="dessert" value="Falooda"> Falooda 
                                                    </span>

                                                    <span class="onerow"> 
                                                        <input type="radio" name="dessert" value="Nannari Syrup"> Nannari Syrup 
                                                    </span>

                                                    <div class="errorclass" id="twenty_dessert_id"></div><br>
                                                    <button type="submit" class="submit-button twentycfm_btn" onclick="twentypack_confirm();">Confirm</button>
                                                </div>
                                                <div class="full-width pdetails" style="display: none;">
                                                    <p class="contactdetails"><b>CONTACT DETAILS</b></p>

                                                    <div class="one_half">
                                                        <label>Name <span class="req">*</span></label>
                                                        <input type="text" name="name">
                                                        <div class="errorclass" id="twenty_name_error"></div>
                                                    </div>

                                                    <div class="one_half last">
                                                        <label>Mobile Number <span class="req">*</span></label>
                                                        <input type="tel" name="mobile">
                                                        <div class="errorclass" id="twenty_mobile_error"></div>
                                                    </div>

                                                    <div class="full-width">
                                                        <label>Email <span class="req">*</span></label>
                                                        <input type="email" name="email">
                                                        <div class="errorclass" id="twenty_email_error"></div>
                                                    </div>

                                                    <div class="one_half">
                                                        <label>Address <span class="req">*</span></label>
                                                        <textarea name="address" id="twenty_Address"></textarea>
                                                        <div class="errorclass" id="twenty_address_error"></div>
                                                    </div>

                                                    <div class="one_half last">
                                                        <label>
                                                            <span class="delivryadd">Delivery Address 
                                                                <span class="req">*</span>
                                                            </span> 
                                                            <span class="sameadd">Delivery to same address
                                                                <input type="checkbox" name="sameaddress" id="twenty_sameaddress">
                                                            </span>
                                                        </label>
                                                        <textarea name="develveryaddress" id="twenty_DevelveryAddress"></textarea>
                                                        <div class="errorclass" id="twenty_develveryaddress_error"></div>
                                                    </div>

                                                    <div class="one_half">
                                                        <label>Delivery Date <span class="req">*</span></label>
                                                        <input type="text" name="date" autocomplete="off" id="twentydate">
                                                        <div class="errorclass" id="twenty_date_error"></div>
                                                    </div>

                                                    <div class="one_half last">
                                                        <label>Delivery Time <span class="req">*</span></label>
                                                        <select name="delevery_time" id="twenty_delevery_time" onchange="twentyothertime(this);">
                                                            <option value="Lunch 12-1.00 PM">Lunch 12-1.00 PM</option>
                                                            <option value="Dinner 7 - 8.00 PM">Dinner 7 - 8.00 PM</option>
                                                            <option value="other">Other - Please specify</option>
                                                        <select><br>
                                                        <div class="errorclass" id="twenty_deletime_error"></div>
                                                    </div>

                                                    <div class="one_half">
                                                        <div id="twenty_DTime" style="display:none;">
                                                            <label>Please Specify</label>
                                                            <input type="text" name="time" id="twenty_Time">
                                                        </div>
                                                    </div>

                                                    <label>Additional info </label>
                                                    <textarea name="info"></textarea>

                                                    <div class="one_half">
                                                        <div class="one_half">
                                                            <label>Coupon code</label>
                                                            <input type="text" class="form-control" id="twentypack_coupon_code" placeholder="Apply Promocode" name="coupon_code" style="text-transform: uppercase;">
                                                            <small class="notehint"><i>Coupon Code is Uppercase Sensitive</i></small>
                                                        </div>
                                                        <div class="one_half last">
                                                            <p id="twenty_apply" class="submit-button applybtn">Apply</p>
                                                        </div>
                                                        <div id="twentypack_message"
                                                            style="color:green; width:100%;float: left !important;">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="submit-button" name="pay_now"
                                                        id="twenty_submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="twentypack_pay" style="display: none;">

                                    <div class="standard_wrapper">
                                        <div class="page_content_wrapper">
                                            <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                                <input type='hidden' name='business' value='sb-yfq8l3269874@business.example.com'>
                                                <input type='hidden' name='amount' id="twenty_amt" value='208'>
                                                <input type='hidden' name='no_shipping' value='1'>
                                                <input type='hidden' name='currency_code' value='SGD'>
                                                <!-- <input type='hidden' name='notify_url' value='http://localhost/php-form/form-1/notify.php'> -->
                                                <input type='hidden' name='cancel_return' value='http://localhost/php-form/form-1/cancel.php'>
                                                <input type='hidden' name='return' value='http://localhost/php-form/form-1/return.php'>
                                                <input type="hidden" name="cmd" value="_xclick">
                                                <input type="submit" name="pay_now" id="twentypack_pay_now" class="submit-button" value="Pay Now">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="form_status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='asset/js/jquery.js'></script>
    <script src="asset/js/jquery-ui.js"></script>
    <script src='asset/js/jquery-migrate.min.js'></script>
    <script src='threepack-validate.js'></script>
    <script src='twentypack-validate.js'></script>

    <script type='text/javascript'>
    /* <![CDATA[ */
    var tgAjax = {
        "ajaxurl": "#",
        "ajax_nonce": "c5281db0c2"
    };
    /* ]]> */
    </script>
    <script src='asset/js/plugins/custom_onepage.js'></script>

    <script>
    function threepack() {
        jQuery("#threepack").css("display", "block");
        jQuery("#fivepack").css("display", "none");
        jQuery("#tenpack").css("display", "none");
        jQuery("#twentypack").css("display", "none");
        jQuery('html, body').animate({
            scrollTop: jQuery("#threepack").offset().top
        }, 2000);

        jQuery("#threepack_pay").css("display", "none");
        jQuery("#fivepack_pay").css("display", "none");
        jQuery("#tenpack_pay").css("display", "none");
        jQuery("#twentypack_pay").css("display", "none");

        jQuery(".threecfm_btn").css("display", "block");
        jQuery("#threepack .pdetails").css("display", "none");
        jQuery('#threepack').trigger("reset");
    }

    function threepack_confirm() {
        if ((jQuery('#threepack input[name="starter"]:checked').length == 1) && (jQuery(
                '#threepack input[name="bread"]:checked').length == 1) && (jQuery(
                '#threepack input[name="rice"]:checked').length == 1) && (jQuery(
                '#threepack input[name="nonveg"]:checked').length == 1) && (jQuery(
                '#threepack input[name="salad"]:checked').length == 1)) {
            jQuery("#threepack .pdetails").css("display", "block");
            jQuery("#three_submit").css("display", "block");
            jQuery(".threecfm_btn").css("display", "none");
        }
    }


    function twentypack() {
        jQuery("#threepack").css("display", "none");
        jQuery("#fivepack").css("display", "none");
        jQuery("#tenpack").css("display", "none");
        jQuery("#twentypack").css("display", "block");
        jQuery('html, body').animate({
            scrollTop: jQuery("#twentypack").offset().top
        }, 2000);

        jQuery("#threepack_pay").css("display", "none");
        jQuery("#fivepack_pay").css("display", "none");
        jQuery("#tenpack_pay").css("display", "none");
        jQuery("#twentypack_pay").css("display", "none");

        jQuery(".twentycfm_btn").css("display", "block");
        jQuery("#twentypack .pdetails").css("display", "none");
        jQuery('#twentypack').trigger("reset");
    }

    function twentypack_confirm() {
        if ((jQuery('#twentypack input[name="starter"]:checked').length == 1) && (jQuery(
                '#twentypack input[name="bread"]:checked').length == 1) && (jQuery(
                '#twentypack input[name="rice"]:checked').length == 1) && (jQuery(
                '#twentypack input[name="nonveg"]:checked').length == 1) && (jQuery(
                '#twentypack input[name="salad"]:checked').length == 1) && (jQuery(
                '#twentypack input[name="dessert"]:checked').length == 1)) {
            jQuery("#twentypack .pdetails").css("display", "block");
            jQuery("#twenty_submit").css("display", "block");
            jQuery(".twentycfm_btn").css("display", "none");
        }
    }

    function threeothertime(that) {
        if (that.value == "other") {
            jQuery('#DTime').css("display", "block");
        }
    }

    function twentyothertime(that) {
        if (that.value == "other") {
            jQuery('#twenty_DTime').css("display", "block");
        }
    }
    jQuery('#three_sameaddress').click(function() {
        if (this.checked) {
            jQuery('#three_DevelveryAddress').val(jQuery('#three_Address').val());
        } else
            jQuery('#three_DevelveryAddress').val("");
    });

    jQuery('#twenty_sameaddress').click(function() {
        if (this.checked) {
            jQuery('#twenty_DevelveryAddress').val(jQuery('#twenty_Address').val());
        } else
            jQuery('#twenty_DevelveryAddress').val("");
    });

    // Date validate
    jQuery("#threedate").datepicker({
        minDate: +1
    });
    jQuery("#twentydate").datepicker({
        minDate: +1
    });
    </script>
    <script>
    function addZeroes(num) {
        var num = Number(num);
        if (String(num).split(".").length < 2 || String(num).split(".")[1].length <= 2) {
            num = num.toFixed(2);
        }
        return num;
    }

    jQuery("#three_apply").click(function() {
        jQuery('#threepack_coupon_code').val(function() {
            return this.value.toUpperCase();
        })
        if (jQuery('#threepack_coupon_code').val() != '') {
            jQuery.ajax({
                type: "POST",
                url: "threepack-coupon.php",
                data: {
                    threepack_coupon_code: jQuery('#threepack_coupon_code').val()
                },
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    console.log(dataResult);
                    if (dataResult.statusCode == 200) {
                        var after_apply = 39 - dataResult.discount;
                        // var after_apply = 5.9-dataResult.discount;
                        var percentage = dataResult.percentage;
                        console.log(addZeroes(after_apply));
                        jQuery('#total_price').val(after_apply);
                        jQuery('#threepack_message').text("" + percentage +
                            "% Discount for Promocode. Pay $ " + addZeroes(after_apply) +
                            " Only!");
                        jQuery('#threepack_pay_now').val("Pay $" + addZeroes(after_apply) +
                        " Only");
                        jQuery('#three_amt').val(after_apply);
                    } else {
                        jQuery('#threepack_message').html("Invalid promocode !");
                    }
                }
            });
        } else {
            jQuery('#threepack_message').html("Promocode can not be blank .Enter a Valid Promocode !");
        }
    });

    jQuery("#twenty_apply").click(function() {
        jQuery('#twentypack_coupon_code').val(function() {
            return this.value.toUpperCase();
        })
        if (jQuery('#twentypack_coupon_code').val() != '') {
            jQuery.ajax({
                type: "POST",
                url: "twentypack-coupon.php",
                data: {
                    twentypack_coupon_code: jQuery('#twentypack_coupon_code').val()
                },
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    // console.log(dataResult);
                    if (dataResult.statusCode == 200) {
                        var after_apply = 208 - dataResult.discount;
                        var percentage = dataResult.percentage;
                        jQuery('#total_price').val(after_apply);
                        jQuery('#twentypack_message').text("" + percentage +
                            "% Discount for Promocode. Pay $ " + addZeroes(after_apply) +
                            " Only!");
                        jQuery('#twentypack_pay_now').val("Pay $" + addZeroes(after_apply) +
                            " Only");
                        jQuery('#twenty_amt').val(after_apply);

                    } else {
                        jQuery('#twentypack_message').html("Invalid promocode !");
                    }
                }
            });
        } else {
            jQuery('#twentypack_message').html("Promocode can not be blank .Enter a Valid Promocode !");
        }
    });
    </script>
</body>

</html>
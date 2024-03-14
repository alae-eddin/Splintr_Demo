<?php 
// session_start(); include("function.php"); if(empty($_SESSION['userid'])){$_SESSION['userid']=user_id(32);}   if (!isset($_GET['ic'])) $ic=''; else if(isset($_GET['ic']) && $_GET['ic'] != "") {$ic = $_GET['ic'];} if (!isset($_GET['id'])) $id=''; else if(isset($_GET['id']) && $_GET['id'] != "") {$id = $_GET['id'];}
// include("includes/frontend.php");
// $session_id = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Splintr | Buy Now Pay Later</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/merchants.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <script>
    
     </script>
</head>
<body style="background:#F495AE;">
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="./">
                    <img src="images/logo.svg" alt="splintr" style="width: 90px" />
                </a>
            </div>
        </div>
    </nav>
        <div class="container">
           
            <!-- Section Contact-->
            <div class="get-in-touch text-left" id="splintr-for-merchant-and-contact">
                <div class="container">
                    <div class="row h-100">
                        <div class="col-sm-6 col-lg-6 col-md-6 teamup">
                            <h1 class="text-left">Team up<br>
with Splintr!</h1>
                            <p>Boost your business and give your<br>
customers a better way to pay!</p>
                            

                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6">
                                            <h4 class="text-left">Join Splintr’s merchant network </h4>

                                            <form class="form-notify" method="post" id="marchantform">
                        <label class="inp">
                            <input type="text" name="cont_name" id="cont_name" placeholder="&nbsp;">
                            <span class="label">Name</span>
                            <span class="border"></span>
                        </label>
                        <label class="inp">
                            <input type="text" name="cont_email" id="cont_email"  placeholder="&nbsp;">
                            <span class="label">Email Address</span>
                            <span class="border"></span>
                        </label>
                        <label class="inp">
                            <input type="text" name="cont_phone" id="cont_phone"  placeholder="&nbsp;">
                            <span class="label">Mobile Number</span>
                            <span class="border"></span>
                        </label>
                        <label class="inp">
                            <input type="text" name="cont_company" id="cont_company" placeholder="&nbsp;">
                            <span class="label">Company name</span>
                            <span class="border"></span>
                        </label>
                        <label class="inp">
                            <input type="text" name="cont_position" id="cont_position" placeholder="&nbsp;">
                            <span class="label">Position</span>
                            <span class="border"></span>
                        </label>
                        <label class="inp">
                            <input type="text" name="cont_website" id="cont_website" placeholder="&nbsp;">
                            <span class="label">Website</span>
                            <span class="border"></span>
                        </label>
                        <label class="select">
                            <select required="required">
                                <option value="" disabled="disabled" selected="selected">Category </option>
                                <option value="#">Goods</option>
                                <option value="#">Services</option>
                                                                <option value="#">Investments</option>

                                
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label>
                        
                        <label class="inp">
                            <input type="text" name="cont_industry" id="cont_industry" placeholder="&nbsp;">
                            <span class="label">Industry</span>
                            <span class="border"></span>
                        </label>
                        <label class="select">
                            <select name="cont_country" id="cont_country" >
                                <option value="" disabled="disabled" selected="selected">Country</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Oman">Oman</option>
                                <option value="UAE">Uae</option>
                                
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label>
                        <label class="select">
                            <select name="cont_value" id="cont_value">
                                <option value="" disabled="disabled" selected="selected">Average Order Value</option>
                                <option value="Less than AED 50">Less than AED 50</option>
                                <option value="AED 50 - 100">AED 50 - 100</option>
                                <option value="AED 100 - 250">AED 100 - 250</option>
                                 <option value="AED 250 - 500">AED 250 - 500</option>
                                 <option value="AED 500 - 1000">AED 500 - 1000</option>
                                  <option value="More than AED 1000">More than AED 1000</option>
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label>
                        <label class="select">
                            <select name="cont_revenue" id="cont_revenue">
                                <option value="" disabled="disabled" selected="selected">Annual Revenue</option>
                                <option value="Pre-launch">Pre-launch</option>
                                <option value="Less than AED 3M">Less than AED 3M</option>
                                <option value="AED 3M - 5M">AED 3M - 5M</option>
                                <option value="AED 5M - 7M">AED 5M - 7M</option>
                                <option value="AED 7M - 10M">AED 7M - 10M</option>
                                <option value="AED 10M - 30M">AED 10M - 30M</option>
                                <option value="AED 30M - 50M">AED 30M - 50M</option>
                                 <option value="More than AED 50M">More than AED 50M</option>
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label>
                        <!-- <label class="select">
                            <select  name="cont_platform" id="cont_platform">
                               
                            <option value="" disabled="disabled" selected="selected">E-Commerce Platform</option> -->
                               
                            <?php 
// $result=$database->query("SELECT * 
// FROM
//   catagories ");
// $options="";
// while($row=mysqli_fetch_array($result)){
//    $name=$row['cat_name'];
//    $id=$row['cat_name'];
//    if($selected_id==$id){ 
//           $selected="selected";
//     }
//    else {
//       $selected=""; 
//    }
//    $options.="<option value='$id' $selected>$name</option>";
// }

?>
                            
                            <?php #echo $options; ?>

                            <!-- </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label> -->
                        <!-- SVG Sprites-->
                        <svg class="sprites">
                            <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                <polyline points="1 1 5 5 9 1"></polyline>
                            </symbol>
                        </svg>
                        <div class="box terms">
                            <input type="checkbox" id="cbx-1">
                            <label>I agree to receive emails and/or phone calls from Splintr team. Which provides more information about its products and services. I understand that my information will not be shared with any other parties outside of Splintr.
                            </label>
                        </div>
                        <div class="cntr">
                            <button type="submit">Confirm </button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
           
            <header class="header">
                
                    <div class="btn-right-menuxz" onclick="parent.location='./';">Back to Main</div>
                
                
            </header>
        </div>
    
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script type="text/javascript" src="<?php echo SITELINK;?>js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    
<script>
     $('#marchantform').on("submit", function(eventx) {
                        eventx.preventDefault();
                        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if ($('#cont_name').val() == "") {
				            alert("Name is required");
                        } else if ($('#cont_phone').val() == '') {
                            alert("Mobile No.  is required");
                        
                        } else if ($('#cont_phone').val() == '') {
                            alert("Mobile No.  is required");
                        }

                        else if ($('#cont_phone').val() == '') {
                            alert("Mobile No.  is required");
                        }

                        else if ($('#cont_phone').val() == '') {
                            alert("Mobile No.  is required");
                        }
            
                        
                            
                        else if($.trim($('#cont_email').val()).length == 0)
                        {
                        alert("Email is required");
                        }
                        else if (!filter.test($('#cont_email').val()))
                        {
                            alert("Invalid Email");
                        }
                        else
                        {
                            $(document).css('cursor', 'prgress');
                             $.ajax({
                                url:"req_insert.php",
                                method:"POST",
                                data: $('#marchantform').serialize(),
                                success: function(data) {
                                    $('#marchantform')[0].reset();
                                    $('#showmes').html(data);
                                    window.location.href = "<?php echo SITELINK; ?>thanks.php"; 
                                }
                            });
                        }
                    });
                    </script>


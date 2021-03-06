<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Contact Us</title>
<link rel="icon" href="images\dbit_logo_output_400.png"> <!-- start linking -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>

<!-- <div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div> -->

<?php
    $conn=mysqli_connect("localhost","root","","university");
    // print_r($conn);
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        // $image=$_FILES['image']['name'];
        // $tmp=$_FILES['image']['tmp_name'];
        //  $path='uploads/'. $image;

         $sql="insert into inquiry(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
        $result=mysqli_query($conn,$sql);
        if ($result) 
        {
           echo "register successfully";
        }
        else
            echo "ERROR";
    }
?>
<?php include('header.php');?>
<br><br>
<!-- start hero -->
    <section id="hero">
        <div class="inner-banner">
            <div class="container">
                <h3 class="title">DBIT<br><big>Contact <strong> Us</strong></big></h3>
            </div>
        </div>
    </section>
    <!-- Content Area -->    
    <section class="main-section">

        <!-- Contact Section -->
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>Get in Touch </span>With Us</h2>
                        <!-- <p>Description text here...</p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-sm-12 appoitntment-title">Make an Inquiry</div>
                            <form method="post" action="contact.php"> 
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="email"  class="form-control" placeholder="Enter Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="phone"  class="form-control" placeholder="Enter Phone" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12 textarea">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message"  placeholder="Your Message.." required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit" style="border-radius: 20px;">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-sidebar">
                            <h4>Quick Contact</h4>
                            <p>If you have any questions simply use the following contact details.</p>
                            <ul class="list-unstyled add-grp">
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <p>Don Bosco Institute Of Technology<br>Premier Automobiles Road,<br> Opp. Fiat Company,<br> Kurla (W), Mumbai- 400 070</p>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-phone"></i>
                                    <p>022-25042424,<br> 022-25040508</p>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-email"></i>
                                    <p>dbit[at]dbit.in</p>
                                </li>
                            </ul>
                            <ul class="list-unstyled social-icon clearfix">
                                <li><a href="https://www.facebook.com/dbitofficial/"><i class="zmdi zmdi-facebook m-r-10"></i></a></li>
                                <li><a href="https://twitter.com/donboscomumbai"><i class="zmdi zmdi-twitter m-r-10"></i></a></li>
                                <li><a href="https://www.instagram.com/explore/locations/239842223/don-bosco-institute-of-technology-mumbai/?hl=en"><i class="zmdi zmdi-instagram m-r-10"></i></a></li>
                                <li></li>
                                <!-- <li><a href="javascript:void(0);"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Map -->
        <div class="map-main">
            <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.601444032245!2d72.8864074145243!3d19.08125318708497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8866a456c9f%3A0x8d1745d15baac575!2sDon+Bosco+Institute+Of+Technology!5e0!3m2!1sen!2sin!4v1561099190819!5m2!1sen!2sin" width="1280" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
           </center>
        </div>

        <!-- Our Partner -->
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>Our </span>Partners</h2>
                        <p>DBIT is affliated with:</p>
                    </div>
                </div>
                <div class="row out-partner-logo">
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="http://www.lntinfotech.com/"><img src="images/925610869s.jpg" alt="lntinfotech" height="100px" width="100px"></a></div>       
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="https://www.tcs.com/"><img src="images/tcs.png" alt="tcs" height="100px" width="100px"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="https://www.myvoltas.com/"><img src="images/voltas.png" alt="voltas" height="100px" width="100px"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="https://www.infosys.com/"><img src="images/infosys.png" alt="infosys" height="100px" width="100px"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6" height="100px" width="100px"><a href="https://www.mahindra.com/"><img src="images/mahindra.png" alt="mahindra"></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="https://www.capgemini.com/"><img src="images/capgemini.png" alt="capgemini"></a></div>
                </div>
            </div>
        </div>

    </section>
<?php include('footer.php');?>    
        
   
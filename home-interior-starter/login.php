<?php
  include_once('header.php');
  ?>
<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Login</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="#url">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- login-form -->
 <section class="w3l-login-main" id="login">
   <div class="login-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
           <form action="https://sendmail.w3layouts.com/submitForm" method="post">
             <div class="form-top1">
               <h3 class="title-big text-left mb-2">Login page</h3><br>

               <div class="form-top">

                 

                  <label>Email_id: <input type="text"></label><br>
                   <label>Password: <input type="text"></label><br>
				   <a class="forgot" href="#">Forgot Your Password?</a><br>
				   
                 
                 </div>
               <div class="text-lg-left text-center">
                 <button type="submit" class="btn btn-style btn-primary">Submit Now</button>
               </div>
             </div>
           </form>
         </div>
         
 <?php
    include_once('footer.php');
	?>
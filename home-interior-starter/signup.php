<?php
  include_once('header.php');
  ?>
<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-signup py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Signup</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="#url">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Signup </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->
 <section class="w3l-signup-main" id="signup">
   <div class="signup-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
           <form action="https://sendmail.w3layouts.com/submitForm" method="post">
             <div class="form-top1">
               <h3 class="title-big text-center mb-2">Let's get in touch</h3>
               <p class="mb-lg-5 mb-4 text-center">Give us a call or drop by anytime, we endeavour to answer all
                 enquiries within 24 hours on business days.</p>
               <div class="form-top">

                 <div class="form-top-left">

                   <label>First Name: <input type="text"></label><br>
				   <label>Last Name: <input type="text"></label><br>
				   <label>Email_id: <input type="text"></label><br>
				   <label>Contact_no: <input type="text"></label><br>
				   <label>Address: <input type="text"></label><br>
				   
				   <label><span>Gender: </span></label>
				   <input type="radio" name="male"/> Male
				   <input type="radio" name="female"/>Female
				   <input type="radio" name="other"/>Other
				   <div class="clearfix"></div>
				   <label><span>City: <input type="text"></label><br>
                  </div>
				  
               <div class="text-lg-right text-center">
                 <button type="submit" class="btn btn-style btn-primary">Submit Now</button>
               </div>
             </div>
           </form>
         </div>
         
 <?php
    include_once('footer.php');
	?>
<?php
//database connector
	require_once("connector.php");
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>UOB Chinese New Year</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<body  class="lucky-draw-bg lucky-draw-container" style="opacity:1;">
<div class="position-absolute w-100" style="z-index: 2; top: 0;">
            <img src="https://staging.directprizedraw.com/images/win-logo.PNG" class="win-logo " alt="">
            <h1 class="pt-3 text-center text-white gang-of-three">CELEBRATE YEAR OF SNAKE</h1>
            <p class="mb-0 text-center text-white"> PENUH HOKI NABUNG DI UOB <br>
                BANYAK HADIAH LANGSUNG MENANTI
            </p>
            <p class="text-center text-white fw-semibold text" style="font-weight: 600">
                #NabungPangkalMakmur 
            </p>
        </div>   
        <div class="position-absolute decoration d-flex w-100">
            <img src="https://staging.directprizedraw.com/images/decoration-right-removebg-preview.png" class="right " alt="">
        </div> 
<div class="container fill pt-100">
	  	
        
	  	<div class="row mt-100 gx-5">
		   
			    <div class="col">
			      &nbsp;
			    </div>
			    <div class="col col-lg-8">
			    	
			      <div class="rounded-corner-box mt-100 bg-white">
			      	<div class="pt-3 text-center pb-30">
                <img class="logo-uob" src="https://staging.directprizedraw.com/images/richlink 1.png" alt="">
            	</div>
			      	<form method="POST" action="validate-reg.php">
			      		<div class="mb-3" id="name-group">
								  <label for="name" class="form-label">Full Name</label>
								  <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
								</div>
								<div class="mb-3" id="email-group">
								  <label for="email" class="form-label">Email</label>
								  <input type="text" class="form-control" id="email"  name="email" placeholder="johndoe@mail.com">
								</div>
								<div class="mb-3" id="mobile-group">
								  <label for="mobile" class="form-label">Mobile/Whatsapp</label>
								  <input type="text" class="form-control" id="mobile"  name="mobile" placeholder="+62012345678910" required>
								</div>
								<div class="mb-3" id="company-group">
								  <label for="company" class="form-label">Company/Media</label>
								  <input type="text" class="form-control" id="company"  name="company" placeholder="Company or Media Name" required>
								</div>
								<div class="mt-3 mb-4 col-12 d-flex">
                    <button class="btn red-btn ms-auto text-uppercase" type="submit">
                        REGISTER
                    </button>
                </div>
							</form>
			      </div>
			    	
			    </div>
			    <div class="col">
			      &nbsp;
			    </div>
			  
	    </div>
	    
</div>
<!-- Jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="assets/js/form.js"></script>
</body>
</html>

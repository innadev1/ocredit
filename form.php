<html>
    <head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/form.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>

	<body>
		<div class="capture-on-top-div-4"><h3>Apply for a loan</h3></div>
	
		<?php include 'assets/header.php'; ?>
		
		<div id="control-point" class="formpage-div flex">
			<div class="flex formpage-div-content">
				<div class="formpage-div-content-1 flex">
					<div><img src="img/icons/26.png"></div>
					<div><h1>Choose how much and loan terms</h1></div>
				</div>
				<div class="formpage-div-content-2 flex">
					<div><img src="img/icons/27.png"></div>
					<div><h1>Fill out online application form</h1></div>
				</div>
				<div class="formpage-div-content-3 flex">
					<div><img src="img/icons/28.png"></div>
					<div><h1>Enjoy money on your bank account</h1></div>
				</div>
			</div>
		</div>
		
		<div id="form-page">
			<h2>Loan details</h2>
			
			<p>How much money do you need?</p>
			<div class="slider"></div>
			
			<p>For how long do you need loan?</p>
			<div class="slider"></div>
			
			<h2>Personal information</h2>
			
			<div class="flex form">
				<div>
					<p>Name:</p>
					<input>
				</div>
				<div>
					<p>Surname:</p>
					<input>
				</div>
				<div>
					<p>PESEL:</p>
					<input>
				</div>
				<div>
					<p>ID:</p>
					<input>
				</div>
				<div>
					<p>Marital status:</p>
					<input>
				</div>
				<div>
					<p>Education:</p>
					<input>
				</div>
				<div>
					<p>Bank number:</p>
					<input>
				</div>
				<div>
					<p>Do you have a car?</p>
					<input>
				</div>
			</div>
			
			<h2>Address:</h2>
			
			<div class="flex form">
				<div>
					<p>City:</p>
					<input>
				</div>
				<div>
					<p>Post code:</p>
					<input>
				</div>
				<div>
					<p>Street:</p>
					<input>
				</div>
				<div>
					<p>Number:</p>
					<input>
				</div>
				<div>
					<p>Housing situation:</p>
					<input>
				</div>
				<div>
					<p>Home address in the same as residential address:</p>
					<input>
				</div>
			</div>
			
			<h2>Account:</h2>
			
			<div class="flex form">
				<div>
					<p>E-mail:</p>
					<input>
				</div>
				<div>
					<p>Phone number:</p>
					<input>
				</div>
				<div>
					<p>Password:</p>
					<input>
				</div>
				<div>
					<p>Repeat password:</p>
					<input>
				</div>
				<div>
					<p>Type of employment:</p>
					<input>
				</div>
			</div>
			
			<h2>Terms</h2>
			<div class="flex terms">
				<input type="radio" class="radio">
				<p>I would like to receive newsletters and special offers from O!Credit.pl</p>
			</div>
			<div class="flex terms">
				<input type="radio" class="radio">
				<p>I agree with terms and conditions</p>
			</div>
			
			<div class="send_btn">
				<button>Send</button>
			</div>
		</div>
		
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>

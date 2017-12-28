<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		jQuery(function(f){
			var element = f('#top-content-block-blue');
			f(window).scroll(function(){
				element['fade'+ (f(this).scrollTop() >= $("#content-block-content-block2").offset().top ? 'In': 'Out')](300);
			});
		}); 
		</script>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>

		<div id="index-background">
			<div id="text-background">
				<div class="text-header">
					<h1>The easiest way to take a loan</h1>
				</div>
				<div class="text-subheader">
					<p>Quick cash when you need it the most.</p>
				</div>
				<div class="butttons">
					<button type="submit" class="obtn btn_orange btn-bold btn-take-loan"><a href="form.php">Take a loan</a></button>
					<button class="obtn btn-bold btn-why-ocredit"><a href="#content-block-content-block2">Why O!Credit?</a></button>
				</div>
			</div>
			
			<div class="content-block-content-form">
				<!--<div class="top-buttons flex">
					<button>Short term loan</button>
					<button>Long term loan</button>
				</div>-->
				<div class="calculator-slider-container">
					<div class="calculator-base-text calculator-main-text">How much money do you need?</div>	
						<div class="slider-one"></div>
					<div class="calculator-base-text calculator-main-text">For how long do you need loan</div>
						<div class="slider-two"></div>
				</div>
				<div>
					<button class="submit">Take a loan</button>
				</div>
			</div>
			
		</div>
		
		<div id="content-block-content-block2">
			<div class="line-half-top inline">
			  <div class="circle-half-top">
				  1
			  </div>
			</div>
			<div class="line-half"></div>
			<div class="main-information-text">
				<div><h1>Choose how much and for<br>how long you need money</h1></div>
				<div class="mit-p">
					<p><img src="img/icons/14.png">Apply online 24/7</p>
					<p><img src="img/icons/15.png">You can borrow up to 10 000 PLN</p>
				</div>
				<div class="m-btns">
					<a href="form.php"><button class="button-with-border">Take a loan</button></a>
					<a href="#content-block-content-block3"><button class="button-without-border">Scroll down</button></a>
				</div>
			</div>
			
			<div id="ring"><img src="img/Ellipse.png"></div>
			<div id="notebook"><img src="img/notebook.png"></div>
			<div id="notebook-mobile"><img src="img/notebook-mobile.png"></div>
		</div>
		
		<div id="content-block-content-block3">
			<div class="inline">
			  <div class="circle-half-top">
				  2
			  </div>
			</div>
			<div class="line"></div>
			<div class="main-information-text">
				<div><h1>Get a special offer for you</h1></div>
				<div class="mit-p">
					<p><img src="img/icons/16.png">Offers from 7 lenders</p>
					<p><img src="img/icons/17.png">For any purpose you need</p>
				</div>
				<div class="m-btns">
					<a href="form.php"><button class="button-with-border">Take a loan</button></a>
					<a href="#content-block-content-block4"><button class="button-without-border">Scroll down</button></a>
				</div>
			</div>
			<div id="search"><img src="img/search.png"></div>
			<div id="search-mobile"><img src="img/search-mobile.png"></div>
			
			<div class="logos-divs">
				<div id="logos-1"></div>
				<div id="logos-2"></div>
				<div id="logos-3"></div>
				<div id="logos-4"></div>
				<div id="logos-5"></div>
			</div>
		</div>
		
		<div id="content-block-content-block4">
			<div class="inline">
			  <div class="circle-half-top">
				  3
			  </div>
			</div>
			<div class="line"></div>
			<div class="main-information-text">
				<div><h1>Foll out online application<br>form</h1></div>
				<div class="mit-p">
					<p><img src="img/icons/18.png">You need only ID card</p>
					<p><img src="img/icons/19.png">No hidden charges</p>
				</div>
				<div class="m-btns">
					<a href="form.php"><button class="button-with-border">Take a loan</button></a>
					<a href="#content-block-content-block5"><button class="button-without-border">Scroll down</button></a>
				</div>
			</div>
			<div id="ring"><img src="img/Ellipse.png"></div>
			<div id="window"><img src="img/Group_.png"></div>
			<div id="window-mobile"><img src="img/Group_mobile.png"></div>
		</div>
		
		<div id="content-block-content-block5">
			<div class="inline">
			  <div class="circle-half-top">
				  4
			  </div>
			</div>
			<div class="line-half-bottom"></div>
			<div class="main-information-text">
				<div><h1>Quick confirmation of the<br>loan</h1></div>
				<div class="mit-p">
					<p><img src="img/icons/20.png">Money will be transfered into your bank account</p>
					<p><img src="img/icons/21.png">Loan in 15 minutes</p>
				</div>
				<div class="m-btns">
					<a href="form.php"><button class="button-with-border">Take a loan</button></a>
					<a href="#content-block-content-block6"><button class="button-without-border">Scroll down</button></a>
				</div>
			</div>
			<div id="ring"><img src="img/Ellipse.png"></div>
			<div id="notebook"><img src="img/computer_2.png"></div>
			<div id="notebook-mobile"><img src="img/notebook_2-mobile.png"></div>
		</div>
		
		<div id="content-block-content-block6">
		
			<div id="content-block-content-block6-h1"><h1>Recently on blog</h1></div>
			
			<div id="this-content">
				<div class="blog-block blocks_ flex" id="con-1">
					<div class="img-1"></div>
					<div class="blog-block-info">
						<div class="blog-block-info-text">
							<div class="date-text flex"><img src="img/icons/24.png"><h2>20 NOV 2015</h2></div>
							<h1>Best ways to safe your money</h1>
							<p>Saving monet is one of those taskt that's so much easier said that done...</p>
							<a href="blog_details.php">Read more <img src="img/icons/25.png"></a>
						</div>
					</div>
				</div>
				<div class="blog-block-2 blocks_ flex" id="con-2">
					<div class="img-2"></div>
					<div class="blog-block-info">
						<div class="blog-block-info-text">
							<div class="date-text flex"><img src="img/icons/24.png"><h2>20 NOV 2015</h2></div>
							<h1>Best ways to safe your money</h1>
							<p>Saving monet is one of those taskt that's so much easier said that done...</p>
							<a href="blog_details.php">Read more <img src="img/icons/25.png"></a>
						</div>
					</div>
				</div>
				<div class="blog-block blocks_ flex" id="con-3">
					<div class="img-3"></div>
					<div class="blog-block-info">
						<div class="blog-block-info-text">
							<div class="date-text flex"><img src="img/icons/24.png"><h2>20 NOV 2015</h2></div>
							<h1>Best ways to safe your money</h1>
							<p>Saving monet is one of those taskt that's so much easier said that done...</p>
							<a href="blog_details.php">Read more <img src="img/icons/25.png"></a>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="round_buttons">
				<button></button>
				<button></button>
				<button></button>
			</div>
						
			<script>
				$(document).ready(function(){
					$('.round_buttons button').click(function(){
						id = $(this).index()
						$('#this-content .blocks_').css('display','none')
						$('#this-content .blocks_:eq('+id+')').fadeIn(300)
					})
				});
			</script>
			
			<div id="content-block-content-block6-button"><a href="blog.php"><button>Go to blog</button></a></div>
			
			<div class="ellipse-left"><img src="img/el2.png"></div>
			<div class="ellipse-right"><img src="img/Ellipses.png"></div>
		</div>
		
		<?php include 'assets/partners.php'; ?>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>

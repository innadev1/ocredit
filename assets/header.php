<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		jQuery(function(f){
			var element = f('#top-content-block-blue');
			f(window).scroll(function(){
				element['fade'+ (f(this).scrollTop() >= $("#control-point").offset().top ? 'In': 'Out')](300);           
			});
		}); 
		</script>
		<script>
		$(document).ready(function(){
			if ($('body').width() <= 900) {
				
			var button = document.getElementById('close');
			var actions = {
				1: function() {
					$( ".content-block-menu" ).slideToggle( "slow", function() {
					});
					$('#close').text('CLOSE');
					$('#close').css("border","none");
					$('#top-content-block-blue').css("z-index","1");
				},
				2: function() {
					$( ".content-block-menu" ).slideToggle( "slow", function() {
					});
					$('#close').text('MENU');
					$('#close').css("border","1px solid");
					$('#top-content-block-blue').css("z-index","5");
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
			}
		});
		</script>
		
		<div><button id="close" style="display:none;">MENU</button></div>
		
			<div id="top-content-block-white">
				<div class="logo-index"><a href="index.php"><img src="img/logo_ocredit.png"></a></div>
				<div class="content-block-menu">
					<ul class="menu flex">
						<li class="active"><a href="index.php">Home page</a></li>
						<li><a href="form.php">Apply for a loan</a></li>
						<li><a href="faq.php">How to get a loan</a></li>
						<li><a href="about_us.php">About</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><button class="button-login-white">login<img src="img/icons/2.png"></button></li>
					</ul>
				</div>
			</div>
	
			<div id="top-content-block-blue">
				<div class="logo-index-blue"><a href="index.php"><img src="img/orange_logo.png"></a></div>
				<div class="content-block-menu-blue">
					<ul class="menu-blue flex">
						<li class="active"><a href="index.php">Home page</a></li>
						<li><a href="form.php">Apply for a loan</a></li>
						<li><a href="faq.php">How to get a loan</a></li>
						<li><a href="about_us.php">About</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><button class="button-login-blue">login<img src="img/icons/13.png"></button></li>
					</ul>
				</div>
			</div>
			
			<div id="top-header"></div>
<html>
    <head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/contact.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>

	<body>
		<div class="capture-on-top-div-2"><h3>Contact</h3></div>
	
		<?php include 'assets/header.php'; ?>
		
		<div id="control-point">
			<div class="control-point-content flex">
			
				<div class="contacts">
					<div><img src="img/socials/1.png"></div>
					<div><h1>+48 22 100 52 25</h1></div>
					<div><p>Telefon</p></div>
				</div>
				
				<div class="contacts">
					<div><img src="img/socials/2.png"></div>
					<div><h1>info@ocredit.pl</h1></div>
					<div><p>E-mail</p></div>
				</div>
				
				<div class="contacts">
					<div><img src="img/socials/3.png"></div>
					<div><h1>ocredit.pl</h1></div>
					<div><p>Skype</p></div>
				</div>
				
				<div class="contacts">
					<div><img src="img/socials/4.png"></div>
					<div><h1>al. Niepodleglosci 69,<br>02-626 Warszawa</h1></div>
					<div><p>Adres</p></div>
				</div>
			</div>
		</div>
		
		<div id="contact-content" class="flex">
			<div class="cc-1 flex">
				<div>
					<img src="img/sent.png">
					<h2>Message has been send!</h2>
					<p>We'll send answer up to 24h</p>
					<button>Send another</button>
				</div>
			</div>
			<div class="cc-2" style="position:relative">
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.90691116231!2d21.013612551542305!3d52.19056476824364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471932d4fb9da835%3A0xb58632355c65862c!2saleja+Niepodleg%C5%82o%C5%9Bci+69%2C+02-625+Warszawa%2C+Polija!5e0!3m2!1slv!2slv!4v1511881210116" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
				
   <style>
   #map{width:100%;height:100%}
   </style>
   <div id="map"></div>
   
   
    <script>
      function initMap() {
		  
		  
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 52.11260, lng: 21.00575},
          zoom: 11,
		  
		  
          styles: [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
        });
		
		    marker = new google.maps.Marker({
            position: {lat: 52.11260, lng: 21.00575},
            map: map,
			icon: "img/marker.png"
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWBb6GpIOcwnHtBFvETDBcqPBhEaSdUrQ&callback=initMap" async defer></script>
				
				
			</div>
		</div>
		
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>

<link rel="stylesheet" type="text/css" href="style/partners.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="partners-capture"><h2>Our partners</h2></div>

<div id="partners" class="flex">
	<div class="our_partners flex" id="partner-1"><img src="img/partners/7.png"></div>
	<div class="our_partners flex" id="partner-2"><img src="img/partners/8.png"></div>
	<div class="our_partners flex" id="partner-3"><img src="img/partners/9.png"></div>
	<div class="our_partners flex" id="partner-4"><img src="img/partners/10.png"></div>
	<div class="our_partners flex" id="partner-5"><img src="img/partners/11.png"></div>
	<div class="our_partners flex" id="partner-6"><img src="img/partners/12.png"></div>
</div>

<div class="buttons_partners flex">
	<div id="Right"><img src="img/previous.png"></div>
	<div id="Left"><img src="img/next.png"></div>
</div>
	
			<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('#partners .our_partners').length
				
				$("#Right").click(function () {
					if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('#partners .our_partners').css('display','none')
					$('#partners .our_partners:eq('+productnow+')').fadeIn(200)
					console.log($('#partners .our_partners:eq('+productnow+')'))
					
				});
				
				$("#Left").click(function () {
				
				if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('#partners .our_partners').css('display','none')
					$('#partners .our_partners:eq('+productnow+')').fadeIn(200)
					console.log($('#partners .our_partners:eq('+productnow+')'))
				
				});
			});
			</script>
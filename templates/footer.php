<footer role="footer" class="footer-seccion">
	<div class="row">
		<div class="col-md-3 text-center">
			<h1>BUILD</h1>
		</div>
		<div class="col-md-3 text-center">
			<h3>CDMX</h3>
			<p><i class="fa fa-phone icon-class" aria-hidden="true"></i>(55) 0000 0000</p>
			<p>Av. Siembre Viva #334, Oficina 407. <br> Ciudad Satélite.</p>
			<a style="color: #FFF;" href="https://www.google.com.mx/maps/search/Av. Siempre Viva+%23334,+Oficina+407.+Ciudad+Sat%C3%A9lite./@20.8380589,-103.6029725,8z/data=!3m1!4b1!10m2!1e2!2e9" title="Ver" target="_blank"><i class="fa fa-map-marker icon-class" aria-hidden="true"></i>Ver en mapa</a>
		</div>
		<div class="col-md-3 text-center">
			<h3>GDL</h3>
			<p><i class="fa fa-phone icon-class" aria-hidden="true"></i>(33) 0000 0000</p>
			<p>Av. Vallarta #443 Piso 1<br>
			Jardines Vallarta</p>
			<a style="color: #FFF;" href="https://www.google.com.mx/maps/search/Av.+Vallarta+%23443+Piso+1+Jardines+Vallarta/@20.6908145,-103.4597923,14z/data=!3m1!4b1" title="Ver" target="_blank"><i class="fa fa-map-marker icon-class" aria-hidden="true"></i>Ver en mapa</a>
		</div>
		<div class="col-md-3 text-center">
			<div class="map-style" id="map"></div>
		</div>
	</div><!--row-->
</footer>
<div class="text-center footer-bottom">
	<p>Copyright © <?= date('Y');?>  |  BUILD Building Systems  |  <a  href="#" title="Aviso de privacidad">Aviso de privacidad</a></p>
</div>
<script>
	$(function(){
		// Metodo para llevar scrolldown con animacion.
		function scrollToAnchor(aid){
		    var aTag = $("#"+aid);
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
		$("#m-proyectos").click(function() {
		   scrollToAnchor('nosotros');
		});
		$("#m-nosotros").click(function() {
		   scrollToAnchor('servicios-seccion');
		});
		$("#m-servicios").click(function() {
		   scrollToAnchor('servicios-seccion');
		});

		$("#m-contactanos").click(function() {
		   scrollToAnchor('contacto-seccion');
		});

		initMap();
		function initMap() {
		  var position = {lat:20.6849197, lng: -103.3671915};

		  var map = new google.maps.Map(document.getElementById('map'), {
		    zoom: 16,
		    center: position
		  });
		  var marker = new google.maps.Marker({
		    position: position,
		    map: map,
		    icon : 'Assets/img/marker.png'
		  });
		}
	});
</script>
</body>
</html>
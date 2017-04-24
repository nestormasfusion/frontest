<?php include 'templates/header.php'; ?>
<div class="row">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	 	<ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	      <li data-target="#myCarousel" data-slide-to="4"></li>
	    </ol>
	    <div class="carousel-inner" role="listbox">
	    	<?php $template_title = '<div class="text-slider">
					<h1 class="text-white">SOLUCIONES CONSTRUCTIVAS</h1>
					<h1 style="color: #00CCFF; font-style: italic;">SUSTENTABLES</h1>
					<p class="text-white">Nuestro objetivo es la calidad de vida de la gente a traves de construcciones sustentables, calidad y seguridad Lider en Proyectos LEED</p>
				</div>'; ?>
		      <div class="item active">
		        <img src="Assets/Hero/hero01.jpg" alt="slide-image-1">
		        <?php echo $template_title; ?>
		      </div>

		      <div class="item">
		        <img src="Assets/Hero/hero02.jpg" alt="slide-image-2">
		        <?php echo $template_title; ?>
		      </div>
		    
		      <div class="item">
		        <img src="Assets/Hero/hero03.jpg" alt="slide-image-3">
		        <?php echo $template_title; ?>
		      </div>

		      <div class="item">
		        <img src="Assets/Hero/hero04.jpg" alt="slide-image-4" width="460" height="345">
		        <?php echo $template_title; ?>
		      </div>
		      <div class="item">
		        <img src="Assets/Hero/hero05.jpg" alt="slide-image-4" width="460" height="345">
		        <?php echo $template_title; ?>
		      </div>
	    </div>
  	</div>
</div>
<div id="nosotros" class="row" style="background: #115BA5">
	<div class="container text-center text-white">
		<h1>BUILD Building Systems</h1>
		<h2>Construimos más de 700,000 m2 por año en edificios verticales.</h2>
	</div>
	<div class="col-md-12">
		<div class="container">
			<ul class="nav nav-pills justify-content-center" role="tablist">
				<li class="active">
					<a data-toggle="tab" href="#industriales">
						<i class="fa fa-industry" aria-hidden="true"></i> N. INDUSTRIALES
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#edificios">
						<i class="fa fa-building" aria-hidden="true"></i> EDIFICIOS
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#comerciales">
						<i class="fa fa-cart" aria-hidden="true"></i> P. COMERCIALES
					</a>
				</li>
				<li >
					<a data-toggle="tab" href="#infraestructura">
						<i class="fa fa-road" aria-hidden="true"></i> INFRAESTRUCTURA
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#retail">
						<i class="fa fa-bag" aria-hidden="true"></i> RETAIL
					</a>
				</li>
			</ul>
		</div>
		
	</div>	
	<div class="container tab-content">
	    <div id="industriales" class="tab-pane fade in active">
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4 text-center descripcion-nosotros">
	    		<div id="myCarousel-edificios" class="carousel slide" data-ride="carousel">
				 	<ol class="carousel-indicators">
				      <li data-target="#myCarousel-edificios" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel-edificios" data-slide-to="1"></li>
				      <li data-target="#myCarousel-edificios" data-slide-to="2"></li>
				      <li data-target="#myCarousel-edificios" data-slide-to="3"></li>
				    </ol>
				    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <img src="Assets/img/obras_01_01.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_01_02.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_01_03.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_05_02.jpg" alt="">
					      </div>
				    </div>
			  	</div>
			  	<div class="descripcion-text">
    		 		<h4>NAVE INDUSTRIAL PPIZ4</h4>
					<p><span>· Cuautitlan, Izcalli ·</span></p>
					<p>Estructura metálica y cubierta.<br>Área 68,000 m2</p>
					<img src="Assets/img/prologis-logo.png" alt="">
	    		</div>
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>
	    <div id="edificios" class="tab-pane fade">
	      	<div class="col-md-4"></div>
	    	<div class="col-md-4 text-center descripcion-nosotros">
	    		<div id="myCarousel-nosotros" class="carousel slide" data-ride="carousel">
				 	<ol class="carousel-indicators">
				      <li data-target="#myCarousel-nosotros" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel-nosotros" data-slide-to="1"></li>
				      <li data-target="#myCarousel-nosotros" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <img src="Assets/img/obras_01_04.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_01_05.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_01_06.jpg" alt="">
					      </div>
				    </div>
			  	</div>
			  	<div class="descripcion-text">
    		 		<h4>NAVE INDUSTRIAL PPIZ4</h4>
					<p><span>· Cuautitlan, Izcalli ·</span></p>
					<p>Estructura metálica y cubierta.<br>Área 68,000 m2</p>
	    		</div>
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>
	    <div id="comerciales" class="tab-pane fade">
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4 text-center descripcion-nosotros">
	    		<div id="myCarousel-comerciales" class="carousel slide" data-ride="carousel">
				 	<ol class="carousel-indicators">
				      <li data-target="#myCarousel-comerciales" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel-comerciales" data-slide-to="1"></li>
				      <li data-target="#myCarousel-comerciales" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <img src="Assets/img/obras_01_07.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_02_01.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_02_02.jpg" alt="">
					      </div>
				    </div>
			  	</div>
			  	<div class="descripcion-text">
    		 		<h4>NAVE INDUSTRIAL PPIZ4</h4>
					<p><span>· Cuautitlan, Izcalli ·</span></p>
					<p>Estructura metálica y cubierta.<br>Área 68,000 m2</p>
	    		</div>
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>
	    <div id="infraestructura" class="tab-pane fade">
	      	<div class="col-md-4"></div>
	    	<div class="col-md-4 text-center descripcion-nosotros">
	    		<div id="myCarousel-infraestructura" class="carousel slide" data-ride="carousel">
				 	<ol class="carousel-indicators">
				      <li data-target="#myCarousel-infraestructura" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel-infraestructura" data-slide-to="1"></li>
				      <li data-target="#myCarousel-infraestructura" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <img src="Assets/img/obras_02_03.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_02_04.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_02_05.jpg" alt="">
					      </div>
				    </div>
			  	</div>
			  	<div class="descripcion-text">
    		 		<h4>NAVE INDUSTRIAL PPIZ4</h4>
					<p><span>· Cuautitlan, Izcalli ·</span></p>
					<p>Estructura metálica y cubierta.<br>Área 68,000 m2</p>
	    		</div>
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>
	    <div id="retail" class="tab-pane fade">
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4 text-center descripcion-nosotros">
	    		<div id="myCarousel-retail" class="carousel slide" data-ride="carousel">
				 	<ol class="carousel-indicators">
				      <li data-target="#myCarousel-retail" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel-retail" data-slide-to="1"></li>
				      <li data-target="#myCarousel-retail" data-slide-to="2"></li>
				      <li data-target="#myCarousel-retail" data-slide-to="3"></li>
				    </ol>
				    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <img src="Assets/img/obras_03_01.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_03_02.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_03_03.jpg" alt="">
					      </div>
					      <div class="item">
					        <img src="Assets/img/obras_03_04.jpg" alt="">
					      </div>
				    </div>
			  	</div>
			  	<div class="descripcion-text">
    		 		<h4>NAVE INDUSTRIAL PPIZ4</h4>
					<p><span>· Cuautitlan, Izcalli ·</span></p>
					<p>Estructura metálica y cubierta.<br>Área 68,000 m2</p>
	    		</div>
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>
	</div>
</div>
<div id="servicios-seccion">
	<div class="row">
		<div class="container">
			<div class="col-md-6 gray-color">
				<div class="servicio">
					<h4><img src="Assets/img/diseno.png" alt="">DISEÑO & CONSTRUCCIÓN</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="servicio">
					<h4><img src="Assets/img/tiempo.png" alt="">ENTREGA A TIEMPO</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</div>
		</div>
	</div><!--row-->
	<div class="row">
		<div class="container">
			<div class="col-md-6">
				<div class="servicio">
					<h4><img src="Assets/img/seguridad.png" alt="">SEGURIDAD</h4>
					<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
				</div>
			</div>
			<div class="col-md-6 gray-color">
				<div class="servicio">
					<h4><img src="Assets/img/bim.png" alt="">BIM<span>(Building Information System)</span></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="contacto-seccion">
	<div class="fondo-contacto"></div>
	<div class="contact-form">
		<h2>¡CUÉNTANOS TU PROYECTO!</h2>
		<p>Estamos listos para ayudarte a construir tus sueños</p>
		<form action="#" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<input type="text" name="nombre" class="form-control input-contact" placeholder="Nombre" required>
			</div>
			<div class="row">
				<div class="col-md-6 end--left">
					<div class="form-group">
						<input type="text" name="puesto" class="form-control input-contact" placeholder="Puesto" required>
					</div>
				</div>
				<div class="col-md-6 end--right">
					<div class="form-group">
						<input type="text" name="empresa" class="form-control input-contact" placeholder="Empresa" required>
					</div>
				</div>
			</div><!--row-->
			<div class="form-group">
				<input type="email" name="email" class="form-control input-contact" placeholder="Correo electrónico" required>
			</div>
			<div class="form-group">
				<input type="tel" name="telefono" class="form-control input-contact" placeholder="Teléfono" required>
			</div>
			<div class="form-group">
				<select name="proyecto" class="form-control" title="Tipo de proyecto">
					<option value="0">Tipo de proyecto</option>
					<option value="1">N. Industriales</option>
					<option value="2">Edificios</option>
					<option value="3">P. Comerciales</option>
					<option value="4">Infraestructura</option>
					<option value="5">Retail</option>
				</select>
			</div>
			<div class="form-group">
				<textarea name="mensaje" class="form-control input-contact" placeholder="Cuéntanos, dejanos un mensaje" required rows="4"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</div>
<?php include 'templates/footer.php'; ?>
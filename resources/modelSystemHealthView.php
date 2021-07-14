<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modelos y sistemas de salud</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../public/css/main.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a href="/" class="navbar-brand">Inicio</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Enfermedades</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="/resources/internationalView.php">Derecho Internacional</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="/resources/bibliographyView.php">Bibliografia</a>
			        </li>
			    </ul>
			</div>
		</div>
	</nav>
	<div  class="container col-md-10 mt-5">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="/">Inicio</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Sistema y Modelos de Salud</li>
		  	</ol>
		</nav>
		<a href="/" class="btn btn-outline-primary" role="button">Atras</a>
		<div class="card mt-1">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
				    	<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Inicio</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Diferencias</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Tipos de modelos</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#map" type="button" role="tab" aria-controls="contact" aria-selected="false">Mapa conceptual</button>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<br />
						<center><h4>DEFINICIÓN</h4></center>
						<div class="row">
							<div class="col-md-6">
								<hr />
								<div class="justify-content">
									Los modelos de atención en salud hacen referencia a la forma en que los componentes de cada sistema son organizados con objeto de contribuir a su función, que es mejorar la salud.
								</div>
							</div>
							<div class="col-md-6">
								<hr />
								<div class="justify-content">
									Estos modelos abarcan todas las organizaciones, instituciones y recursos que tienen como finalidad el mejorar la salud.
								</div>
							</div> 
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row">
							<div class="col-md-6 mt-5">
								<center><strong>MODELO DE SALUD/SANITARIO</strong></center>
								<hr />
								<center><img src="../public/media/libros.png" width="400" height="400"></center>
								<div class="justify-content">
									Es el conjunto de criterios doctrinales e ideológicos en los que están basados los sistemas sanitarios.
								</div>
							</div>
							<div class="col-md-6 mt-5">
								<center><strong>SISTEMA DE SALUD/SANITARIO</strong></center>
								<hr />
								<center><img src="../public/media/hospital.png" width="400" height="400"></center>
								<div class="justify-content">
									Es la suma de todas las organizaciones, instituciones y recursos destinados a la operatividad y ejecución de un modelo
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="mt-5">
							<div class="row">
								<div class="col-md-6">
									<center><strong>Modelo liberal</strong></center>
									<br />
									En este modelo la salud se considera como un bien de consumo, el cual no necesariamente debe ser protegido por el Estado, cuya responsabilidad queda reducida a la atención de los grupos sociales más vulnerables, además de que, financieramente, tiene una contribución mínima al sistema de salud.
								</div>
								<div class="col-md-6">
									<center><strong>Modelo socialista o estadista</strong></center>
									<br />
									Su principal característica es que se financia en su totalidad con recursos públicos o estatales, donde no hay lugar al sector privado.
								</div>
							</div>
							<hr />
							<div>
								<center><strong>Modelo mixto</strong></center>
								<br />
								Este modelo se basa en la contribución en doble sentido: una parte por el sector público y otra por el sector privado, los cuales comparten la gestión del sistema de salud
							</div>
							<hr />
							<div class="row">
								<div class="col-md-6">
									<center><strong>Modelo mixto (Bismarck)</strong></center>
									<br />
									Aquí el Estado garantiza la prestación del servicio de salud mediante el pago de cuotas que realizan las empresas y los trabajadores<br />
									<i>Tanto Colombia, como Perú y Ecuador basan sus sistemas de salud en este modelo sanitario</i>
								</div>
								<div class="col-md-6">
									<center><strong>Modelo mixto (Beveridge)</strong></center>
									<br />
									La prestación del servicio de salud se financia con recursos provenientes de los impuestos que paganlos ciudadanos, porlo que toda su red prestadora es de carácter público
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
						<div class="mt-5">
							<embed src="../public/media/MapaConceptualModelosdeSalud.pdf" type="application/pdf" width="100%" height="600px" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
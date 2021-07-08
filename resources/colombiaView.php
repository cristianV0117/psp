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
			          <a class="nav-link active" aria-current="page" href="/resources/modelSystemHealthView.php">Modelos y Sistemas de Salud</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Enfermedades</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Derecho Internacional</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Bibliografia</a>
			        </li>
			    </ul>
			</div>
		</div>
	</nav>
	<div  class="container col-md-10 mt-5">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="/">Inicio</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Colombia</li>
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
				    	<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Organismos de control</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Regímenes</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#cotization" type="button" role="tab" aria-controls="cotization" aria-selected="false">Cotizaciones</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#entitie" type="button" role="tab" aria-controls="entitie" aria-selected="false">Tipos de entidades</button>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<br />
						<center><h4>DEFINICIÓN</h4></center>
						<hr />
						<div class="justify-content">
							El Sistema General de Seguridad Social en Salud en Colombia es el conjunto de instituciones
							y procedimientos mediante los cuales el Estado garantiza la prestación de servicios de salud
							a los colombianos. 
						</div>
					</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  		<div class="row">
							<div class="col-md-6 mt-5">
								<center><strong>MINISTERIO DE SALUD Y PROTECCIÓN SOCIAL</strong></center>
								<hr />
								<center><img src="../public/media/minsalud.png" width="500" height="300"></center>
								<div class="justify-content">
									Es la entidad adscrita al poder ejecutivo que actúa como regulador, determinador de normas y directrices en materia de salud pública, asistencia social, población en riesgo y pobreza.
								</div>
							</div>
							<div class="col-md-6 mt-5">
								<center><strong>SUPERINTENDENCIA NACIONAL DE SALUD (SUPERSALUD)</strong></center>
								<hr />
								<center><img src="../public/media/supersalud.jpg" width="300" height="300"></center>
								<div class="justify-content">
									En el 2007 surge la Ley 1122 por medio de la cual se crea el Sistema de Inspección, Vigilancia y Control del Sistema General de Seguridad Social en Salud, el cual quedó en cabeza de la Superintendencia Nacional de Salud, con base en los siguientes ejes: financiamiento, aseguramiento, prestación de servicios de atención en salud
									pública, atención al usuario y participación social, acciones y medidas especiales, información y focalización de los subsidios en salud. Adicionalmente, le fueron otorgadas las facultades de la función jurisdiccional y de conciliación, para poder ser eficaz en la atención de las necesidades de los usuarios del sistema y ejerce vigilancia sobre nuevos actores como lo son los regímenes especiales y exceptuados.
								</div>
							</div>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  		<div class="row mt-4">
							<div class="col-md-4">
								<center><strong>RÉGIMEN CONTRIBUTIVO</strong></center>
								<hr />
								<div class="justify-content">
									Es un conjunto de normas que rigen la vinculación de los individuos al Sistema de Seguridad Social en Salud, cuando tal vinculación se hace a través del pago de una cotización. Hacen parte las personas vinculadas por medio de contrato de trabajo, los servidores públicos, pensionados, jubilados y trabajadores independientes con capacidad de pago.
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>RÉGIMEN SUBSIDIADO</strong></center>
								<hr />
								<div class="justify-content">
									Es el conjunto de normas que rigen la vinculación de los individuos al Sistema de Seguridad Social en Salud, cuando tal vinculación se hace a través del pago de una cotización subsidiada, total o parcialmente, con recursos fiscales o de solidaridad, donde hacen parte las personas sin capacidad de pago para cubrir el monto total de la cotización.
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>RÉGIMEN DE EXCEPCIÓN</strong></center>
								<hr />
								<div class="justify-content">
									Es aquel sistema que ofrece cobertura a aquellos sectores de la población que siguen rigiéndose por las normas legales concebidas con anterioridad a la entrada en vigencia de la Ley 100 de 1993, donde se encuentran los siguientes grupos poblacionales:
									<ul>
										<li>Miembros de las Fuerzas Militares y sus beneficiarios.</li>
										<li>Miembros de la Policía Nacional y sus beneficiarios.</li>
										<li>Maestros pertenecientes al Magisterio y sus beneficiarios.</li>
									</ul>
								</div>
							</div> 
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="cotization" role="tabpanel" aria-labelledby="contact-tab">
				  		<div class="row mt-4">
							<div class="col-md-4">
								<center><strong>RÉGIMEN CONTRIBUTIVO</strong></center>
								<hr />
								<div class="justify-content">
									<ul>
										<li>12.5% del ingreso o salario base de cotización, el cual no puede ser inferior al salario mínimo</li>
										<li>La cotización a cargo del empleador es del 8.5% y el 4% a cargo del empleado</li>
										<li>El 1.5% de la cotización se traslada a la subcuenta del ADRES para contribuir a la financiación del régimen subsidiado.</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>RÉGIMEN SUBSIDIADO</strong></center>
								<hr />
								<div class="justify-content">
									<ul>
										<li>Recursos de las entidades territoriales.</li>
										<li>Recursos de la subcuenta del ADRES (1.5% del régimen contributivo y 1.5% del régimen de excepción).</li>
										<li>Monto de las cajas de compensación familiar, provenientes del 5% de los recaudos del subsidio familiar que administran o del 10% de los recaudos del respectivo para aquellas cajas que obtengan un cociente superior al 100%.</li>
										<li>Recursos del presupuesto general de la nación. ($33.4 billones en 2021).</li>
										<li>IVA a la cerveza y los juegos de suerte y azar incorporados en la Ley 1393 de 2021.</li>
										<li>El 6% del impuesto al consumo de licores, vinos, aperitivos y similares.</li>
										<li>Sobretasa al consumo de cigarrillos y tabaco.</li>
										<li>Premios no cobrados.</li>
										<li>Rentas cedidas:
											<ol>
												<li>Impuestos sobre loterías.</li>
												<li>Derecho de explotación de apuestas permanentes, rifas.</li>
												<li>Derechos de explotación de juegos localizados y novedosos COLJUEGOS.</li>
											</ol>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>RÉGIMEN DE EXCEPCIÓN</strong></center>
								<hr />
								<div class="justify-content">
									<ul>
										<li>FOMAG:
											<ol>
												<li>Los trabajadores adscritos cotizan el 4% de su ingreso básico mensual y el aporte de la Nación es del 8.5%, girado a través del Sistema General de Participaciones.</li>
											</ol>
										</li>
										<li>Fuerzas Militares y Policía Nacional:
											<ol>
												<li>Ministerio de Defensa.</li>
												<li>Presupuesto Público Nacional (PGN).</li>
											</ol>
										</li>
									</ul>
								</div>
							</div> 
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="entitie" role="tabpanel" aria-labelledby="contact-tab">
				  		<div class="row mt-4">
							<div class="col-md-6">
								<center><strong>ENTIDADES PROMOTORAS DE SALUD (EPS)</strong></center>
								<hr />
								<div class="justify-content">
									Son las entidades responsables de la afiliación y registro de los afiliados y del recaudo de sus cotizaciones, que actúan como intermediarias y administradoras de los recursos que provee el Estado a través de las UPC, que pueden ser de carácter público como privado, además de ser las responsables de la contratación de toda la red prestadora para garantizar la prestación del servicio en cada entidad.
									<ul>
										<li>
											Gestión integral del riesgo (GIRS): La gestión integral del riesgo en salud es una estrategia transversal de la Política de Atención Integral en Salud que se fundamenta en la articulación e interacción de los agentes del sistema de salud y otros sectores para identificar, evaluar, medir, intervenir (desde prevención hasta paliación), y llevar a cabo el seguimiento y monitoreo de los riesgos para la salud de las personas, familias y comunidades, orientada al logro de resultados en salud y al bienestar de la población
										</li>
										<li>
											Características:
											<ol>
												<li>Se anticipa a las enfermedades y los traumatismos para que no se presenten o se detecten y traten precozmente para impedir, acortar o paliar su evolución y consecuencias.</li>
												<li>Busca la mejoría del nivel de salud de la población, una mejor experiencia de los usuarios durante el proceso de atención y unos costos acordes a los resultados obtenidos.</li>
											</ol>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<center><strong>INSTITUCIONES PRESTADORAS DE SERVICIOS DE SALUD (IPS)</strong></center>
								<hr />
								<div class="justify-content">
									Son todas las entidades públicas, privadas o mixtas que hayan sido aprobadas para prestar de forma parcial o total los procedimientos para cumplir con el Plan de Beneficios en Salud.
								</div>
							</div>
						</div>
						<br />
						<hr />
						<center><h4>OTROS</h4></center>
						<hr />
						<div class="row">
							<div class="col-md-6">
								<center><strong>ADMINISTRADORA DE LOS RECURSOS DEL SISTEMA GENERAL DE SEGURIDAD SOCIAL EN SALUD (ADRES)</strong></center>
								<hr />
								<div class="justify-content">
									Es una entidad adscrita al Ministerio de Salud, creada con el fin de garantizar el adecuado uso de los recursos y los respectivos controles.<br />
									Adicionalmente, está encargada de las siguientes funciones:
									<ul>
										<li>Efectuar el reconocimiento y pago de las UPC y demás recursos del PBS.</li>
										<li>Realizar giros a los prestadores del servicio de salud y proveedores de tecnologías en salud.</li>
										<li>Adelantar las verificaciones para el reconocimiento y pago de las prestaciones sociales y otras que promueven la eficiencia en la gestión de los recursos.</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<center><strong>SISTEMA GENERAL DE SEGURIDAD SOCIAL EN SALUD (SGSSS)</strong></center>
								<hr />
								<div class="justify-content">
									Es el conjunto de instituciones y procedimientos mediante los cuales el Estado garantiza la prestación de servicios de salud a los colombianos, cuyo objetivo es regular el servicio público esencial de salud y crear condiciones de acceso en toda la población al servicio en todos los niveles de atención.
								</div>
							</div> 
						</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
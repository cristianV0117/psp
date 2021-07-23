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
			          <a class="nav-link active" aria-current="page" href="/resources/diseasesView.php">Enfermedades</a>
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
		    	<li class="breadcrumb-item active" aria-current="page">Enfermedades</li>
		  	</ol>
		</nav>
		<a href="/" class="btn btn-outline-primary" role="button">Atras</a>
		<div class="card mt-1">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
				    	<button class="nav-link active" id="hipe-tab" data-bs-toggle="tab" data-bs-target="#hipe" type="button" role="tab" aria-controls="hipe" aria-selected="true">Hipertensión Arterial Pulmonar</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="hemo-tab" data-bs-toggle="tab" data-bs-target="#hemo" type="button" role="tab" aria-controls="hemo" aria-selected="false">Hemofilia Tipo A</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				  		<button class="nav-link" id="escle-tab" data-bs-toggle="tab" data-bs-target="#escle" type="button" role="tab" aria-controls="escle" aria-selected="false">Esclerosis Múltiple</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				  		<button class="nav-link" id="dege-tab" data-bs-toggle="tab" data-bs-target="#dege" type="button" role="tab" aria-controls="dege" aria-selected="false">Degeneración Macular Húmeda</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				  		<button class="nav-link" id="can-tab" data-bs-toggle="tab" data-bs-target="#can" type="button" role="tab" aria-controls="can" aria-selected="false">Cáncer</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				  		<button class="nav-link" id="enfe-tab" data-bs-toggle="tab" data-bs-target="#enfe" type="button" role="tab" aria-controls="enfe" aria-selected="false">Enfermedades raras o huérfanas - Regulación</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				  		<button class="nav-link" id="cancer-tab" data-bs-toggle="tab" data-bs-target="#cancer" type="button" role="tab" aria-controls="cancer" aria-selected="false">Cáncer - Regulación</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				  		<button class="nav-link" id="medi-tab" data-bs-toggle="tab" data-bs-target="#medi" type="button" role="tab" aria-controls="medi" aria-selected="false">Medicamentos</button>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="hipe" role="tabpanel" aria-labelledby="hipe-tab">
						<img src="../public/media/hiper.jpg" class="card-img-top" alt="...">
						<br>
						<hr>
						<center><h4>CLASE FUNCIONAL</h4></center>
						<hr>
						Implementadas para la clasificación al tratamiento y la monitorización de los enfermos con hipertensión pulmonar.
						<br>
						<table class="table mt-2">
							<tbody>
								<tr>
									<td><strong>CLASE FUNCIONAL I</strong></td>
									<td>El enfermo no tiene limitación de la actividad física, especialmente por disnea, fatiga, dolor torácico o presíncope.</td>
								</tr>
								<tr>
									<td><strong>CLASE FUNCIONAL II</strong></td>
									<td>El enfermo presenta una limitación leve de la actividad física. No tiene síntomas en reposo, pero la actividad física normal provoca disnea, fatiga, dolor torácico y presíncope.</td>
								</tr>
								<tr>
									<td><strong>CLASE FUNCIONAL III</strong></td>
									<td>El enfermo presenta una moderada limitación de la actividad física. No tiene síntomas en reposo, pero la mínima actividad física provoca disnea, fatiga, dolor torácico o presíncope.</td>
								</tr>
								<tr>
									<td><strong>CLASE FUNCIONAL IV</strong></td>
									<td>El enfermo es incapaz de desarrollar cualquier actividad y puede presentar signos de insuficiencia cardiaca derecha en reposo. La disnea y la fatiga pueden estar presentes en el reposo y aumentan con cualquier esfuerzo. </td>
								</tr>
							</tbody>
						</table>
						<ul>
							<li><strong>Fatiga:</strong> sensación de mucho cansancio, con poca energía y un fuerte deseo de dormir que interfiere con las actividades cotidianas normales</li>
							<li><strong>Disnea:</strong> respiración difícil o trabajosa.</li>
							<li><strong>Dolor torácico:</strong> malestar en el pecho que puede incluir dolor leve, una sensación de ardor o agobio, un dolor punzante agudo y dolor que se irradia hacia el cuello y los hombros.</li>
							<li><strong>Presíncope:</strong> sensación inminente y transitoria de pérdida de la consciencia.</li>
						</ul>
					</div>
					<div class="tab-pane fade" id="hemo" role="tabpanel" aria-labelledby="profile-tab">
						<img src="../public/media/hemo.jpg" class="card-img-top" alt="...">
					</div>
					<div class="tab-pane fade" id="escle" role="tabpanel" aria-labelledby="profile-tab">
						<img src="../public/media/escle.jpg" class="card-img-top" alt="...">
					</div>
					<div class="tab-pane fade" id="dege" role="tabpanel" aria-labelledby="profile-tab">
						<img src="../public/media/dege.jpg" class="card-img-top" alt="...">
						<img src="../public/media/degedos.jpg" class="card-img-top" alt="...">
					</div>
					<div class="tab-pane fade" id="can" role="tabpanel" aria-labelledby="profile-tab">
						<img src="../public/media/can.jpg" class="card-img-top" alt="...">
						<img src="../public/media/candos.jpg" class="card-img-top" alt="...">
					</div>
					<div class="tab-pane fade" id="enfe" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row">
							<div class="col-md-4 mt-4">
								<center><strong>COLOMBIA</strong></center>
								<hr>
								<ul>
									<li><strong>Ley 1392 de 2010:</strong>
										Reconoce que las enfermedades huérfanas, representan un problema de especial interés en salud dado que por su baja prevalencia en la población, pero su elevado costo de atención, requieren dentro del SGSSS un mecanismo de aseguramiento diferente al utilizado para las enfermedades generales, dentro de las que se incluyen las de alto costo; y unos procesos de atención altamente especializados y con gran componente de seguimiento administrativo.
									</li>
									<li>
										<strong>Decreto 1954 de 2012:</strong>
										Implementa el sistema de información de pacientes con enfermedades huérfanas cuyo objetivo es proporcionar mayor conocimiento sobre el acaecimiento de estos casos para desarrollar un tratamiento que cumpla con todas las necesidades y realizar seguimiento a la entidades responsables de su atención, sistema que tiene carácter impositivo para las EPS-Entidades Promotoras de Salud-, las IPS-Instituciones Prestadoras de Servicios de Salud (IPS), entidades pertenecientes al régimen de excepción de salud y Direcciones Departamentales, Distritales y Municipales de Salud quienes deberán presentar la información que sea solicitada por el Ministerio de Salud y Protección Social para su correspondiente recopilación y consolidación, especificando de esta manera cuál es el conducto regular a seguir por las entidades que detecten un caso de enfermedad huérfana; cuál será el trámite dentro de la fase de recopilación y consolidación de la información, la cual detalladamente será incorporada en el Sistema Integral de Información de la Protección Social ¿ Sispro- sin perjuicio de las validaciones de las que pueda ser objeto por parte del Ministerio de Salud y Protección Social, los organismos sobre los que recaiga la dirección, vigilancia y control deberán observar la reserva con la que deba manejarse esta información. El reporte oportuno de esta información será requisito para acceder a los recursos de la Subcuenta de Compensación del Fondo de Solidaridad y Garantía (Fosyga) y de la Subcuenta de Eventos Catastróficos y Accidentes de Tránsito ECAT para obtener prestaciones de salud para estas enfermedades que no se encuentren incluidos en los beneficios del Régimen Contributivo; en el evento de determinar el incumplimiento de este Decreto las entidades serán acreedoras de las acciones correspondientes.
									</li>
									<li>
										<strong>Resolución 0651 de 2018:</strong>
										Define el procedimiento, estándares y criterios para la habilitación de los centros de referencia de diagnóstico, tratamiento y farmacias, para la atención de enfermedades huérfanas, la conformación de la red y subredes de centros de referencia para la atención de tales enfermedades.
									</li>
									<li>
										<strong>Resolución 5265 de 2018:</strong>
										Actualiza el listado de enfermedades huérfanas (versión 3.0) y establece condiciones para su uso. Aplica a las Entidades Promotoras de Salud (EPS), a los (sic) Prestadoras de Servicios de Salud, las Entidades que pertenecen al Régimen de Excepción y las direcciones o secretarías de salud de los órdenes distrital, municipal y departamental, o quien haga sus veces.
									</li>
								</ul>
								<hr>
								<center><a href="../public/media/ColombiaHuer.pdf" class="btn btn-outline-primary" role="button"button>LISTADO</a></center>
							</div>
							<div class="col-md-4 mt-4">
								<center><strong>PERÚ</strong></center>
								<hr>
								<ul>
									<li>
										<strong>Ley 29698:</strong>
										Por la cual se declara de interés nacional y preferente la atención y el tratamiento de personas que padecen enfermedades raras o huérfanas.
									</li>
									<li>
										<strong>Resolución Ministerial Nº 691-2012/MINSA:</strong>
										Conformación de comisión sectorial encargada de proponer acciones que permitan implementar las disposiciones contenidas en la Ley N° 29698.
									</li>
									<li>
										<strong>Decreto Supremo Nº 004-2019-SA:</strong>
										Comisión Sectorial encargada de elaborar los Lineamientos para la determinación de las Enfermedades Raras y Huérfanas de Alto Costo, con la estimación del umbral para el medicamento de Alto Costo.
									</li>
									<li>
										<strong>Resolución Ministerial Nº 526-2019/MINSA:</strong>
										Comisión Sectorial encargada de elaborar el Plan Nacional de Prevención, Diagnóstico, Atención Integral De Salud, Tratamiento, Rehabilitación Y Monitoreo de las Enfermedades Raras o Huérfanas.
									</li>
									<li>
										<strong>Resolución Ministerial Nº 565-2019/MINSA:</strong>
										Comisión Sectorial encargada de elaborar el Listado de Enfermedades Raras y Huérfanas.
									</li>
									<li>
										<strong>Resolución Ministerial Nº 1075-2019/MINSA</strong>
										Que aprueba el Documento Técnico: Listado de Enfermedades Raras y Huérfanas.
									</li>
								</ul>
								<hr>
								<center><a href="../public/media/PeruHuer.pdf" class="btn btn-outline-primary" role="button"button>LISTADO</a></center>
							</div>
							<div class="col-md-4 mt-4">
								<center><strong>ECUADOR</strong></center>
								<hr>
								<ul>
									<li>
										<strong>Ley 67:</strong>
										para incluir el tratamiento de las enfermedades raras, huérfanas y catastróficas.
									</li>
								</ul>
								<hr>
								<center><a href="../public/media/EcuadorHuer.xls" class="btn btn-outline-primary" role="button"button>LISTADO</a></center>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="cancer" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-4">
							<div class="col-md-6">
								<center><strong>COLOMBIA</strong></center>
								<hr>
								<ul>
									<li>
										<strong>Ley 1384 de 2010:</strong>
										Establece las acciones para el control integral del cáncer en la población colombiana y declara el cáncer como una enfermedad de interés en salud pública y prioridad nacional para la República de Colombia. Dispone la adopción de acciones de promoción y prevención para el control del cáncer y señala que la prestación de servicios oncológicos en Colombia seguirá de manera obligatoria los parámetros establecidos en la presente ley.
									</li>
									<li>
										<strong>Ley 1388 de 2010:</strong>
										Disminuye de manera significativa, la tasa de mortalidad por cáncer en los niños y personas menores de 18 años, a través de la garantía por parte de los actores de la seguridad social en salud, de todos los servicios que requieren para su detección temprana y tratamiento integral, aplicación de protocolos y guías de atención estandarizados y con la infraestructura, dotación, recurso humano y tecnología requerida, en Centros Especializados habilitados para tal fin.
									</li>
									<li>
										<strong>Ley 2026 de 2020:</strong>
										Establece medidas que hagan efectiva la protección del derecho fundamental a la salud de los menores de 18 años con diagnóstico o presunción de cáncer, declarar su atención integral como prioritaria, garantizando el acceso efectivo a los servicios de salud oncopediátrica y fortalecer el apoyo social que recibe esta población.
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<center><strong>PERÚ</strong></center>
								<hr>
								<ul>
									<li>
										<strong>Ley Nacional del Cáncer:</strong>
										Le ley tiene como fin principal garantizar a toda la población una cobertura universal, gratuita y prioritaria a los servicios de salud cuando tienen algún diagnóstico confirmado de cáncer, sin importar el tipo de esta enfermedad. Se pretende asegurar el tratamiento oportuno y de calidad. Se establece que el Estado debe garantizar el acceso y la cobertura oncológica integral, que deberá incluir, entre otros aspectos, los servicios de prevención, promoción, control y atención oncológica en cualquiera de sus distintas manifestaciones.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane fade table-responsive" id="medi" role="tabpanel" aria-labelledby="profile-tab">
						<table class="table table-bordered border-primary mt-4">
							<thead>
								<tr>
									<th><center>NOMBRE COMERCIAL</center></th>
									<th><center>NOMBRE</center></th>
									<th><center>INDICACIÓN</center></th>
									<th><center>BENEFICIO</center></th>
									<th><center>PRESENTACIÓN Y FRECUENCIA</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Adempas
									</td>
									<td>
										Riociguat
									</td>
									<td>
										<ul>
											<li><strong>HPTEC:</strong>
												<ul>
													<li>
														Inoperable.
													</li>
													<li>
														Resistente a terapia quirúrgica.
													</li>
												</ul>
											</li>
											<li>
												HAP en pacientes clase funcional II y II.
											</li>
										</ul>
									</td>
									<td>
										Actúa ensanchando las arterias pulmonares, facilitando al corazón el bombeo de sangre a los pulmones.
									</td>
									<td>
										<ul>
											<li>
												Comprimidos recubiertos de 0.5 a 2.5 mg.
											</li>
											<li>
												La dosis inicial recomendada es de 3mg diarios, tomados en 3 dosis (1mg x dosis), cada 6-8 horas aproximadamente.
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										Ventavis
									</td>
									<td>
										Iloprost
									</td>
									<td>
										HAP en pacientes clase funcional III.
									</td>
									<td>
										Actúa sobre la arteria ubicada entre el corazón y los pulmones, mejorando el flujo sanguíneo, de oxígeno y reduciendo la carga sobre el corazón.
									</td>
									<td>
										<ul>
											<li>
												Solución para inhalación por nebulizador de 10 o 20 mg.
											</li>
											<li>
												La primera dosis debe ser de 2.5mg → aumentar a 5 mg la siguiente:
												<ul>
													<li>
														Buena tolerancia: mantener las dosis en 5 mg.
													</li>
													<li>
														Mala tolerancia: reducir a 2.5 mg. Debe administrarse de 6 a 9 veces al día, dependiendo de las necesidades de cada paciente.
													</li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										Betaferón
									</td>
									<td>
										Interferón beta 1b
									</td>
									<td>
										<ul>
											<li>
												Un episodio clínico desmielinizante.
											</li>
											<li>
												EM Remitente-Recidivante con dos o más recaídas en los últimos 2 años.
											</li>
											<li>
												EM Secundaria-Progresiva.
											</li>
										</ul>
									</td>
									<td>
										<ul>
											<li>
												Retrasa la progresión a una EM definitiva.
											</li>
											<li>
												Reducen la cantidad y gravedad de las recaídas.
											</li>
											<li>
												Retrasa la progresión de la discapacidad.
											</li>
										</ul>
									</td>
									<td>
										<ul>
											<li>
												Polvo y disolvente para solución inyectable.
											</li>
											<li>
												Generalmente se indica una inyección subcutánea cada 2 días.
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										Eylia
									</td>
									<td>
										Aflibercept
									</td>
									<td>
										<ul>
											<li>
												Degeneración Macular relacionada con la edad.
											</li>
											<li>
												Degeneración Macular relacionada con la diabetes.
											</li>
											<li>
												Oclusión de la Vena Central Retiniana.
											</li>
											<li>
												Neovascularización Coroidea Miópica.
											</li>
										</ul>
									</td>
									<td>
										Bloquea el crecimiento del FCV (Factor de Crecimiento Vascular), retrasando la aparición de vasos sanguíneos en el ojo y la pérdida de la visión.
									</td>
									<td>
										<ul>
											<li>
												Solución para jeringa precargada de 40 mL.
											</li>
											<li>
												<strong>Aplicaciones:</strong>
												<ul>
													<li>
														DME: se indica una inyección por 3 ciclos (cada mes). Después el intervalo de tiempo se aumenta un mes.
													</li>
													<li>
														DMD: se indica una inyección mensual por 5 ciclos. Después el intervalo de tiempo se aumenta un mes.
													</li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										Xofigo
									</td>
									<td>
										Dicloruro de radio-223.
									</td>
									<td>
										Pacientes con cáncer de próstata resistente a la castración con metástasis ósea no visceral.
									</td>
									<td>
										Emite radiación de corto alcance sobre los tejidos de los huesos, eliminando las células malignas.
									</td>
									<td>
										<ul>
											<li>
												1 vial de 6 mL.
											</li>
											<li>
												Una inyección cada 21 días por 6 ciclos.
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										Nexavar
									</td>
									<td>
										Sorafenib
									</td>
									<td>
										<ul>
											<li>
												Cáncer hepático.
											</li>
											<li>
												Cáncer de riñón en el que ha fracasado terapia previa con interferón-alfa o interleukina-2, o que se considera inapropiado para dicha terapia.
											</li>
											<li>
												Cáncer de tiroides localmente avanzado o metastásico resistente a terapia con yodo radioactivo.
											</li>
										</ul>
									</td>
									<td>
										Terapia dirigida que actúa sobre receptores específicos de las células malignas, disminuyendo los efectos generados por el daño a las células sanas.
									</td>
									<td>
										<ul>
											<li>
												Comprimidos recubiertos de 200 mg.
											</li>
											<li>
												Se debe ingerir una dosis diaria de 800 mg, administrados en 2 dosis diarias, dos comprimidos por dosis.
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										Stivarga
									</td>
									<td>
										Regorafenib
									</td>
									<td>
										<ul>
											<li>
												Cáncer colorrectal metastásico tratado previamente con terapia o que no se le considera candidato adecuado.
											</li>
											<li>
												Tumores del estroma gastrointestinal metastásico o irresecable, tratado previamente en terapia con imatinib o sunitinib, o son intolerantes a ello.
											</li>
											<li>
												Cáncer hepático tratado previamente con sorafenib.
											</li>
										</ul>
									</td>
									<td>
										Terapia dirigida que actúa bloqueando el crecimiento del tumor y la formación de vasos sanguíneos que aquel necesita para crecer.
									</td>
									<td>
										<ul>
											<li>
												Comprimidos recubiertos de 40 mg.
											</li>
											<li>
												Se debe tomar una dosis diaria de 160 mg, administrados en 4 dosis de 40 mg una vez al día durante 3 semanas, descansando una 4ta.
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
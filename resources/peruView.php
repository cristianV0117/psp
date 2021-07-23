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
		    	<li class="breadcrumb-item active" aria-current="page">Perú</li>
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
				    	<button class="nav-link" id="organisms-tab" data-bs-toggle="tab" data-bs-target="#organisms" type="button" role="tab" aria-controls="organisms" aria-selected="false">Organismos de control</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="regimes-tab" data-bs-toggle="tab" data-bs-target="#regimes" type="button" role="tab" aria-controls="regimes" aria-selected="false">Regímenes</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="types-tab" data-bs-toggle="tab" data-bs-target="#types" type="button" role="tab" aria-controls="types" aria-selected="false">Tipos de entidades</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="routes-tab" data-bs-toggle="tab" data-bs-target="#routes" type="button" role="tab" aria-controls="routes" aria-selected="false">Ruta de afiliación</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="rights-tab" data-bs-toggle="tab" data-bs-target="#rights" type="button" role="tab" aria-controls="rights" aria-selected="false">Derechos y deberes</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="medicine-tab" data-bs-toggle="tab" data-bs-target="#medicine" type="button" role="tab" aria-controls="medicine" aria-selected="false">Medicamentos</button>
				  	</li>
				  	<li class="nav-item" role="presentation">
				    	<button class="nav-link" id="map-tab" data-bs-toggle="tab" data-bs-target="#map" type="button" role="tab" aria-controls="map" aria-selected="false">Mapa conceptual</button>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<br />
						<center><h4>DEFINICIÓN</h4></center>
						<hr />
						<div class="justify-content">
							El modelo de salud impuesto en el país suramericano es descrito como un sistema de atención sanitaria descentralizado, es decir, que tiene sus funciones distribuidas por fuera de una ubicación o autoridad central. 
						</div>
					</div>
					<div class="tab-pane fade" id="organisms" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-5">
							<div class="col-md-6">
								<center><strong>MINISTERIO DE SALUD (MINSA)</strong></center>
								<hr />
								<center><img src="../public/media/minsa.jpg" width="500" height="400"></center>
								<div class="justify-content">
									Es el sector del poder ejecutivo encargado del área de la salud donde, acorde con su propia descripción, conducen el sistema de salud, manejan la política para el aseguramiento universal en salud, así como las políticas y acciones intersectoriales en materia de salud.
								</div>
							</div>
							<div class="col-md-6">
								<center><strong>SUPERINTENDENCIA NACIONAL DE SALUD (SUSALUD)</strong></center>
								<hr />
								<center><img src="../public/media/susalud.jpg" width="500" height="400"></center>
								<div class="justify-content">
									Es la institución encargada de ejercer vigilancia y control sobre las entidades que integran el sistema de salud en Perú, “encargada de proteger los derechos en salud de cada peruano”, teniendo la potestad de actuar sobre todas las IPRESS, así como las IAFAS.
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="regimes" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-5">
							<div class="col-md-4">
								<center><strong>RÉGIMEN CONTRIBUTIVO INDIRECTO</strong></center>
								<hr />
								<div class="justify-content">
									Es un conjunto de normas que rigen la vinculación de los individuos al Sistema de Seguridad Social en Salud, cuando tal vinculación se hace a través del pago de una cotización. Hacen parte las personas vinculadas por medio de contrato de trabajo, los servidores públicos, pensionados, jubilados y trabajadores independientes con capacidad de pago.
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>RÉGIMEN CONTRIBUTIVO DIRECTO</strong></center>
								<hr />
								<div class="justify-content">
									Se financia por medio de las contribuciones obligatorias de los empleados y está comprendida en dos modalidades: EsSalud (Seguro Social de Salud) y el seguro social privado.
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>RÉGIMEN PRIVADO</strong></center>
								<hr />
								<div class="justify-content">
									Es financiado por las familias a través del pago directo o por la adquisición de planes de atención que ofrecen las empresas aseguradoras, autoseguros y prepagadas.
								</div>
							</div>
						</div>
						<hr />
						<center><h4>MODALIDADES DE ASEGURAMIENTO</h4></center>
						<hr />
						<ul>
							<li>
								ESSALUD (Seguro Social del perú):Es el seguro dirigido principalmente a trabajadores dependientes, que cuenta con cinco tipos de coberturas:
								<ol>
									<li>Seguro (Seguro Regular): para trabajadores dependientes de una empresa formal y sus familiares.</li>
									<li>Salud (Seguro Potestativo): personas y trabajadores independientes que estén en capacidad de realizar sus aportes ($) de forma independiente.</li>
									<li>Protección (Seguro Complementario de Trabajo de Riesgo): dirigido a trabajadores que realizan labores riesgosas en las que pueden tener accidentes.</li>
									<li>Seguro Agrario EsSalud: para trabajadores que desarrollen actividades de cultivo y/o crianza, avícola, agroindustrial o acuícola.</li>
									<li>Vida (Seguro Contra Accidentes EsSalud): se refiere al seguro de accidentes que otorga indemnización en caso de muerte o invalidez, permanente o parcial, a consecuencia de un accidente, sólo para los asegurados regulares agrarios y potestativos.</li>
								</ol>
							</li>
							<li>
								SIS (Seguro Integral de Salud): Está dirigido a todos los peruanos y extranjeros residentes que no cuentan con otro seguro de salud vigente y se encuentra dividido en los siguientes planes:
								<ol>
									<li>SIS Gratuito: dirigido a personas en pobreza extrema, pobreza, madres gestantes, niños, bomberos y demás grupos poblacionales incluidos en la norma.</li>
									<li>SIS Para Todos: para personas que no cuentan con un seguro de salud, independientemente de su condición económica.</li>
									<li>SIS Independiente: dirigido a cualquier ciudadano.</li>
									<li>SIS Microempresas: para dueños de microempresas que quieran inscribir a sus trabajadores.</li>
									<li>SIS Emprendedor: para trabajadores independientes que no tengan empleados a su cargo.</li>
								</ol>
							</li>
							<li>
								Empresas Prestadoras de Salud (EPS): Son empresas públicas o privadas, distintas a EsSalud, que proveen una cobertura adicional a la del Plan Esencial de Aseguramiento.  Los empleadores pueden contratar con una EPS para darle cobertura adicional al PEAS de sus empleados y, como en el caso de EsSalud, el empleador paga la cobertura adicional.
								En el Perú, entre estas empresas se encuentran:
								<ol>
									<li>Rimac</li>
									<li>Mapfre</li>
									<li>Sanitas</li>
									<li>Pacífico</li>
								</ol>
							</li>
						</ul>
						<hr />
						<center><strong>DIFERENCIAS ENTRE LA AFILIACIÓN A ESSALUD, SIS Y EPS</strong></center>
						<ul>
							<li>Al estar afiliado a una EPS se tiene la ventaja de que la atención suele ser más rápida y personalizada.</li>
							<li>Acceso A la red de clínicas asociadas con la EPS, adicional a los hospitales o policlínicos del Estado</li>
							<li>La diferencia entre ambos sistemas también se refleja en la capacidad de atención con respecto a las redes prestadoras, siendo unas del MINSA y de los gobiernos regionales, de los cuales el 97% corresponden al primer nivel de atención, es decir, de baja complejidad; y en ESSALUD en su propia red, cuyos hospitales son de segundo y tercer nivel.</li>
						</ul>
						<hr />
						<center><strong>NIVELES DE ATENCIÓN</strong></center>
						<div class="row mt-2">
							<div class="col-md-4">
								<hr />
								<center><strong>Primer nivel de atención</strong></center>
								<ul>
									<li>Categoría I-1. Puesto de salud, posta de salud o consultorio con profesionales de salud no médicos.</li>
									<li>Categoría I-2. Puesto de salud o posta de salud (con médico). Además de los consultorios médicos (con médicos con o sin especialidad).</li>
									<li>Categoría I-3. Corresponde a los centros de salud, centros médicos, centros médicos especializados y policlínicos</li>
									<li>Categoría I-4. Agrupan los centros de salud y los centros médicos con camas de internamiento.</li>
								</ul>
							</div>
							<div class="col-md-4">
								<hr />
								<center><strong>Segundo nivel de atención</strong></center>
								<ul>
									<li>Categoría II-1. El conjunto de hospitales y clínicas de atención general.</li>
									<li>Categoría II-2. Corresponde a los hospitales y clínicas con mayor especialización.</li>
									<li>Categoría II-E. Agrupan a los hospitales y clínicas dedicados a la atención especializada.</li>
								</ul>
							</div>
							<div class="col-md-4">
								<hr />
								<center><strong>Tercer nivel de atención</strong></center>
								<ul>
									<li>Categoría III-1. Agrupan los hospitales y clínicas de atención general con mayores unidades productoras de servicios de salud.</li>
									<li>Categoría III-E. Agrupan los hospitales y clínicas de atención general con mayores unidades productoras de servicios de salud y servicios en general.</li>
									<li>Categoría III-2. Corresponden a los institutos especializados</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="types" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-5">
							<div class="col-md-4">
								<center><strong>INSTITUCIONES ADMINISTRADORAS DE FONDOS DE ASEGURAMIENTO EN SALUD (IAFAS)</strong></center>
								<hr />
								<div class="justify-content">
									Más conocidas como “aseguradoras de salud”, son las instituciones encargadas de brindar los seguros de salud.
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>IPRESS</strong></center>
								<hr />
								<div class="justify-content">
									Son todos aquellos establecimientos de salud y servicios médicos públicos, privados o mixtos, que realizan atenciones en salud con fines de prevención, promoción, diagnóstico, tratamiento y/o rehabilitación, así como aquellos servicios complementarios o auxiliares de atención médica.
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>OTRAS ENTIDADES</strong></center>
								<hr />
								<div class="justify-content">
									Dentro del régimen contributivo directo, además de EsSalud, se encuentran los siguientes actores del sistema de salud encargados del aseguramiento de usuarios, sus dependientes, con características específicas:
									<ul>
										<li>El Ministerio de Salud se encarga de asegurar a las Fuerzas Armadas, comprendidas por el ejército, la marina y la aeronáutica.</li>
										<li>El Ministerio del Interior se responsabiliza del aseguramiento por medio de SALUDPOL, el Fondo de Sanidad Policial.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="routes" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-5">
							<div class="col-md-4">
								<center><strong>¿CÓMO SABER SI CUENTA CON UN REGISTRO DE SALUD?</strong></center>
								<hr />
								<div class="justify-content">
									El gobierno peruano a dispuesto la plataforma online llamada RESUELVE donde, para realizar la consulta, se debe contar con al menos uno de los siguientes documentos:
									<ul>
										<li>DNI.</li>
										<li>Carné de extranjería.</li>
										<li>Pasaporte.</li>
										<li>Documento de identidad extranjero.</li>
										<li>Código de recién nacido.</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>ACCESO A LA PLATAFORMA</strong></center>
								<hr />
								<div class="justify-content">
									<center>A través del siguiente enlace<br />
									<a href="https://app1.susalud.gob.pe/registro/" class="btn btn-outline-primary" role="button">ReSUelve</a></center>
								</div>
							</div>
							<div class="col-md-4">
								<center><strong>¿QUE ES ReSUelve?</strong></center>
								<hr />
								<div class="justify-content">
									Es un servicio digital gratuito que articula a las aseguradoras y establecimientos de salud a nivel nacional, donde se permite hacer consultas y actualizaciones del estado de los asegurados, la cual se implementó desde septiembre de 2015 en todas las regiones del país y se viene utilizando en dos mil oficinas de aseguramiento pertenecientes a establecimientos públicos.
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="rights" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-5">
							<center><strong>DERECHOS</strong></center>
							<hr />
							<div class="col-md-4">
								<ul>
									<li>A recibir atención de emergencia médica, quirúrgica y psiquiátrica en cualquier establecimiento de salud público o privado, conforme con los artículos 3° y 39°, modificados por la Ley núm. 27604, Ley que Modifica la Ley General de Salud N° 26842, Respecto de la Obligación de los Establecimientos de Salud a dar Atención Médica en Caso de Emergencias y Partos, y su Reglamento.</li>
									<li>A elegir libremente al médico o el establecimiento de salud según disponibilidad y estructura de éste, con excepción de los servicios de emergencia.</li>
									<li>A recibir atención de los médicos con libertad para realizar juicios clínico.</li>
									<li>A solicitar la opinión de otro médico, distinto a los que la institución ofrece, en cualquier momento o etapa de su atención o tratamiento, sin que afecte el presupuesto de la institución, bajo responsabilidad del usuario y con conocimiento de su médico tratante.</li>
									<li>A obtener servicios, medicamentos y productos sanitarios adecuados y necesarios para prevenir, promover, conservar o restablecer su salud, según lo requiera la salud del usuario, garantizando su acceso en forma oportuna y equitativa.</li>
									<li>A ser informada adecuada y oportunamente de los derechos que tiene en su calidad de paciente y de cómo ejercerlos, tomando en consideración su idioma, cultura y circunstancias particulares.</li>
									<li>A conocer el nombre del médico responsable de su tratamiento, así como el de las personas a cargo de la realización de los procedimientos clínicos. En caso de que se encuentre disconforme con la atención, el usuario debe informar del hecho al superior jerárquico.</li>
									<li>A recibir información necesaria sobre los servicios de salud a los que puede acceder y los requisitos necesarios para su uso, previo al sometimiento a procedimientos diagnósticos o terapéuticos, con excepción de las situaciones de emergencia en que se requiera aplicar dichos procedimientos.</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul>
									<li>A recibir información completa de las razones que justifican su traslado dentro o fuera del establecimiento de salud, otorgándole las facilidades para tal fin, minimizando los riesgos. El paciente tiene derecho a no ser trasladado sin su consentimiento, salvo razón justificada del responsable del establecimiento. Si no está en condiciones de expresarlo, lo asume el llamado por ley o su representante legal.</li>
									<li>A tener acceso al conocimiento preciso y oportuno de las normas, reglamentos y condiciones administrativas del establecimiento de salud.</li>
									<li>A recibir en términos comprensibles información completa, oportuna y continuada sobre su enfermedad, incluyendo el diagnóstico, pronóstico y alternativas de tratamiento; así como sobre los riesgos, contraindicaciones, precauciones y advertencias de las intervenciones, tratamientos y medicamentos que se prescriban y administren. Tiene derecho a recibir información de sus necesidades de atención y tratamiento al ser dado de alta.</li>
									<li>A ser informada sobre su derecho a negarse a recibir o continuar el tratamiento y a que se le explique las consecuencias de esa negativa. La negativa a recibir el tratamiento puede expresarse anticipadamente, una vez conocido el plan terapéutico contra la enfermedad.</li>
									<li>A ser informada sobre la condición experimental de la aplicación de medicamentos o tratamientos, así como de los riesgos y efectos secundarios de éstos.</li>
									<li>A conocer en forma veraz, completa y oportuna las características del servicio, los costos resultantes del cuidado médico, los horarios de consulta, los profesionales de la medicina y demás términos y condiciones del servicio.</li>
									<li>A ser atendida con pleno respeto a su dignidad e intimidad sin discriminación por acción u omisión de ningún tipo.</li>
									<li>A recibir tratamientos cuya eficacia o mecanismos de acción hayan sido científicamente comprobados o cuyas reacciones adversas y efectos colaterales le hayan sido advertidos.</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul>
									<li>A su seguridad personal y a no ser perturbada o puesta en peligro por personas ajenas al establecimiento y a ella.</li>
									<li>A autorizar la presencia, en el momento del examen médico o intervención quirúrgica, de quienes no están directamente implicados en la atención médica, previa indicación del médico tratante.</li>
									<li>A que se respete el proceso natural de su muerte como consecuencia del estado terminal de la enfermedad.</li>
									<li>A ser escuchada y recibir respuesta por la instancia correspondiente cuando se encuentre disconforme con la atención recibida.</li>
									<li>A recibir tratamiento inmediato y reparación por los daños causados en el establecimiento de Salud o servicios médicos de apoyo, de acuerdo con la normativa vigente</li>
									<li>A ser atendida por profesionales de la salud que estén debidamente capacitados, certificados y recertificados, de acuerdo con las necesidades de salud, el avance científico y las características de la atención, y que cuenten con antecedentes satisfactorios en su ejercicio profesional y no hayan sido sancionados o inhabilitados para dicho ejercicio.</li>
									<li>
										A otorgar su consentimiento informado, libre y voluntario, sin que medie ningún mecanismo que vicie su voluntad, para el procedimiento o tratamiento de salud, en especial en las siguientes situaciones:
										<ol>
											<li>En la oportunidad previa a la aplicación de cualquier procedimiento o tratamiento así como su interrupción. Quedan exceptuadas del consentimiento informado las situaciones de emergencia, de riesgo debidamente comprobado para la salud de terceros o de grave riesgo para la salud pública.</li>
											<li>Cuando se trate de pruebas riesgosas, intervenciones quirúrgicas, anticoncepción quirúrgica o procedimientos que puedan afectar la integridad de la persona, supuesto en el cual el consentimiento informado debe constar por escrito en un documento oficial que visibilice el proceso de información y decisión. Si la persona no supiere firmar, imprimirá su huella digital.
											</li>
											<li>Cuando se trate de exploración, tratamiento o exhibición con fines docentes, el consentimiento informado debe constar por escrito en un documento oficial que visibilice el proceso de información y decisión. Si la persona no supiere firmar, imprimirá su huella digital.
											</li>
											<li>A que su consentimiento conste por escrito cuando sea objeto de experimentación para la aplicación de medicamentos o tratamientos. El consentimiento informado debe constar por escrito en un documento oficial que visibilice el proceso de información y decisión. Si la persona no supiere firmar, imprimirá su huella digital.
											</li>
										</ol>
									</li>
								</ul>
							</div>
						</div>
						<div class="row mt-4">
							<center><strong>DEBERES</strong></center>
							<hr />
							<div class="col-md-6">
								<ul>
									<li>Toda persona debe velar por el mejoramiento, la conservación y la recuperación de su salud y de las personas a su cargo.</li>
									<li>Ninguna persona puede actuar o ayudar en prácticas que signifiquen peligro, menoscabo o daño para la salud de terceros de la población.</li>
									<li>Es obligación de toda persona cumplir con las normas de seguridad que establecen las disposiciones pertinentes y participar en la prevención y reducción de los riesgos por accidentes.</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li>Es deber de toda persona participar en el mejoramiento de la cultura sanitaria de su comunidad.</li>
									<li>Toda persona tiene el deber de participar y cooperar con las autoridades públicas en la prevención y solución de los problemas ocasionados por situaciones de desastre.</li>
								</ul>
							</div>
						</div>
						<div class="mt-2">
							<hr />
				  			<center><h4>DEFENSA JURÍDICA DE LOS DERECHOS DE LOS PACIENTES</h4></center>
							<hr />
							<div class="justify-content">
								La Superintendencia Nacional de Salud es quien ejerce la fiscalización y sanción de acciones que pueden o afectan a los usuarios de las IAFAS y las IPRESS, sanciones que se ajustan al nivel de gravedad de la infracción, por medio de un proceso administrativo sancionador (PAS), donde se identifica la existencia de la infracción, y si es el caso, determina la sanción.<br />
								El derecho a la salud en Perú no es de carácter fundamental, lo que implica que no confiere tutela jurisdiccional, pero desde la jurisprudencia, donde se “subordina la protección constitucional del derecho a la salud a que este se encuentre vinculado con otros derechos fundamentales.”<br />
								“El proceso fiscalizador y sancionador en el Perú no se presenta judicializado, a raíz de ser considera un derecho programático y no fundamental. Esta diferencia respecto a otros países de la región ha llevado a SUSALUD a aplicar otro paradigma en la fiscalización y sanción, basado en la gestión de riesgos, incluyendo los procesos de quejas, intervenciones de oficio, promoción de derechos, junta de usuarios y en caso de infracciones a la norma (leves, moderadas y graves) el PAS, donde identifica la responsabilidad e impone la sanción.” (Revista Peruana de Medicina Experimental y Salud Pública, 2016)
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="medicine" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row mt-5">
							<div class="col-md-3">
								<center><strong>PLAN ESENCIAL DE ASEGURAMIENTO (PEAS)</strong></center>
								<hr />
								<div class="justify-content">
									Se refiere al listado priorizado de condiciones asegurables e intervenciones que, como mínimo, son financiadas a todos los asegurados en las IPRESS, sean públicas, privadas o mixtas. Es un plan de beneficios que contiene garantías explícitas de oportunidad y calidad para todos los beneficiarios, siendo un documento que define el listado de condiciones asegurables, intervenciones, prestaciones y garantías a ser brindadas en el aseguramiento universal en salud.
								</div>
							</div>
							<div class="col-md-3">
								<center><strong>PETITORIO FARMACOLÓGICO</strong></center>
								<hr />
								<div class="justify-content">
									El Petitorio Nacional Único de Medicamentos Esenciales representa un instrumento técnico para la prescripción, dispensación, adquisición y utilización de medicamentos en los diferentes niveles de atención
								</div>
							</div>
							<div class="col-md-3">
								<center><strong>GESTIÓN DE LAS COMPRAS PÚBLICAS</strong></center>
								<hr />
								<div class="justify-content">
									Gestión de las compras públicas: En Perú, la DIGEMID adquiere medicamentos tanto para el Ministerio de Salud como para el SIS.
								</div>
							</div>
							<div class="col-md-3">
								<center><strong>DISTRIBUCIÓN</strong></center>
								<hr />
								<div class="justify-content">
									Se realiza en la red de farmacias autorizadas por la DIGEMID.
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="profile-tab">
						<div class="mt-5">
							<embed src="../public/media/mapaPeru.pdf" type="application/pdf" width="100%" height="600px" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Carga de Documentos de {{$persona->nombre}} {{$persona->apellido}}</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
	<li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							@if($persona->foto_perfil !== 'avatar.png')
							<img class="profile-user-img img-fluid img-circle" src="{{Storage::url($persona->foto_perfil)}}" alt="User profile picture">
							@else
							<img class="profile-user-img img-fluid img-circle" src="{{asset('images/empleados.jpg')}}" alt="User profile picture">
							@endif
						</div>

						<h3 class="profile-username text-center">{{$persona->nombre}} {{$persona->apellido}}</h3>

						<p class="text-muted text-center">{{$persona->carrera}}</p>

						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<b>Departamento</b> <a class="float-right">{{$informacionLaboral->departamento->nombre}}</a>
							</li>
							<li class="list-group-item">
								<b>Cargo</b> <a class="float-right">{{$informacionLaboral->cargo->nombre}}</a>
							</li>
							<li class="list-group-item">
								<b>Fecha de Ingreso</b> <a class="float-right">{{$informacionLaboral->fecha_ingreso}}</a>
							</li>
						</ul>

						<a href="{{route('admin.personas.edit',Crypt::encryptString($persona->id))}}" class="btn btn-primary btn-block"><b>Modificar</b></a>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

				<!-- About Me Box -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Sobre el Empleado</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<strong><i class="fas fa-book mr-1"></i> Escolaridad</strong>

						<p class="text-muted">
							Estudío la carrera de {{$persona->carrera}}
						</p>

						<hr>

						<strong><i class="fas fa-map-marker-alt mr-1"></i>Domicilio</strong>

						<p class="text-muted">{{$domicilio->municipio}}, {{$domicilio->estado}}. {{$domicilio->codigo_postal}}.</p>

						<hr>

						<strong><i class="fas fa-pencil-alt mr-1"></i>Cargo</strong>

						<p class="text-muted">
							<span class="tag tag-danger">{{$informacionLaboral->cargo->nombre}}</span>
                {{--   <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span> --}}
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

              <p class="text-muted">Aqui aparecerian observaciones del empleado.</p>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
  	<div class="card">
  		<div class="card-header p-2">
  			<ul class="nav nav-pills">
  				<li class="nav-item"><a class="nav-link active" href="#documentos" data-toggle="tab">Documentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#verDocumentos" data-toggle="tab">Ver Documentos Cargados</a></li>
  				<li class="nav-item"><a class="nav-link" href="#otros" data-toggle="tab">otros</a></li>
  			</ul>
  		</div><!-- /.card-header -->
  		<div class="card-body">
  			<div class="tab-content">
  				<div class="tab-pane" id="otros">
  					<!-- Post -->
  					<div class="post">
  						<div class="user-block">
  							<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
  							<span class="username">
  								<a href="#">Jonathan Burke Jr.</a>
  								<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
  							</span>
  							<span class="description">Shared publicly - 7:30 PM today</span>
  						</div>
  						<!-- /.user-block -->
  						<p>
  							Lorem ipsum represents a long-held tradition for designers,
  							typographers and the like. Some people hate it and argue for
  							its demise, but others ignore the hate as they create awesome
  							tools to help create filler text for everyone from bacon lovers
  							to Charlie Sheen fans.
  						</p>

  						<p>
  							<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
  							<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
  							<span class="float-right">
  								<a href="#" class="link-black text-sm">
  									<i class="far fa-comments mr-1"></i> Comments (5)
  								</a>
  							</span>
  						</p>

  						<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
  					</div>
  					<!-- /.post -->

  					<!-- Post -->
  					<div class="post clearfix">
  						<div class="user-block">
  							<img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
  							<span class="username">
  								<a href="#">Sarah Ross</a>
  								<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
  							</span>
  							<span class="description">Sent you a message - 3 days ago</span>
  						</div>
  						<!-- /.user-block -->
  						<p>
  							Lorem ipsum represents a long-held tradition for designers,
  							typographers and the like. Some people hate it and argue for
  							its demise, but others ignore the hate as they create awesome
  							tools to help create filler text for everyone from bacon lovers
  							to Charlie Sheen fans.
  						</p>

  						<form class="form-horizontal">
  							<div class="input-group input-group-sm mb-0">
  								<input class="form-control form-control-sm" placeholder="Response">
  								<div class="input-group-append">
  									<button type="submit" class="btn btn-danger">Send</button>
  								</div>
  							</div>
  						</form>
  					</div>
  					<!-- /.post -->

  					<!-- Post -->
  					<div class="post">
  						<div class="user-block">
  							<img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
  							<span class="username">
  								<a href="#">Adam Jones</a>
  								<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
  							</span>
  							<span class="description">Posted 5 photos - 5 days ago</span>
  						</div>
  						<!-- /.user-block -->
  						<div class="row mb-3">
  							<div class="col-sm-6">
  								<img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
  							</div>
  							<!-- /.col -->
  							<div class="col-sm-6">
  								<div class="row">
  									<div class="col-sm-6">
  										<img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
  										<img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
  									</div>
  									<!-- /.col -->
  									<div class="col-sm-6">
  										<img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
  										<img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
  									</div>
  									<!-- /.col -->
  								</div>
  								<!-- /.row -->
  							</div>
  							<!-- /.col -->
  						</div>
  						<!-- /.row -->

  						<p>
  							<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
  							<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
  							<span class="float-right">
  								<a href="#" class="link-black text-sm">
  									<i class="far fa-comments mr-1"></i> Comments (5)
  								</a>
  							</span>
  						</p>

  						<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
  					</div>
  					<!-- /.post -->
  				</div>
  				<!-- /.tab-pane -->
  				<div class="tab-pane active" id="documentos">
  					<!-- The documentos -->
  					<div class="timeline timeline-inverse">
  						<!-- timeline time label -->
  						<div class="time-label">
  							<span class="bg-success">
  								Subir Documentos
  							</span>
  						</div>
  						<!-- /.timeline-label -->
  						<!-- timeline item -->
  						<div>
  							<i class="fas fa-file-upload bg-blue"></i>

  							<div class="timeline-item">
  								<span class="time"><i class="far fa-clock"></i>{{--  2 days ago --}}</span>

  								<h3 class="timeline-header">Subir Documentos de <a href="#">{{$persona->nombre}}</a></h3>

  								<div class="timeline-body">
  									<div class="dropzone"  id="actaNacimiento2" style="display: none"></div>
  									<div class="row">
                      @foreach($tiposDocumentos as $tipoDocumento)
  										<div class="col-lg-4 col-6">
  											<label>{{$tipoDocumento->nombre}}</label>
  											<div class="dropzone" id="{{$tipoDocumento->clave}}"></div>
  											<a href='javascript:;' style="background-color: #007bff; color: white" class="btn btn-block" type="button" onclick="{{$tipoDocumento->clave}}();">Subir</a>
  										</div>
                      @endforeach
  									</div>

  								</div>
  							</div>
  						</div>
  						<!-- END timeline item -->
  						<div>
  							<i class="far fa-clock bg-gray"></i>
  						</div>
  					</div>
  				</div>
  				<!-- /.tab-pane -->
          @include('recursos_humanos.documentos.ver_documentos')
  				<!-- /.tab-pane -->
  			</div>
  			<!-- /.tab-content -->
  		</div><!-- /.card-body -->
  	</div>
  	<!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
@endsection
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"> </script>

<script type="text/javascript">
//Enviar Documento
@foreach($tiposDocumentos as $tipoDocumento)
function {{$tipoDocumento->clave}}(){
  var myDropzone = new Dropzone("#{{$tipoDocumento->clave}}", {
    url: '/documentos/{{$persona->id}}/{{$tipoDocumento->carpeta}}/{{$tipoDocumento->clave}}/{{$tipoDocumento->id}}/cargar_documentos',
    acceptedFiles: 'image/*,.pdf',
    maxFiles: 1,
    addRemoveLinks: false,
    maxFilesize: 1,
    paramName: '{{$tipoDocumento->clave}}',
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    dictDefaultMessage: 'Arrastre el documento correspondiente a {{$tipoDocumento->nombre}} para subirlo',
    dictFileTooBig: 'El archivo es mayor a 1MB, por favor suba uno mas ligero',
    dictInvalidFileType: 'Solamente se permite subir archivos de tipo imagen y pdf',
    dictMaxFilesExceeded: 'Solamente puedes subir un archivo',
  });
  myDropzone.on('error', function(file, res){
    var msg = "La " + res.errors.identificacion[0];
    $('.dz-error-message:last > span').text(msg);
  });
  Dropzone.autoDiscover = false;
}
@endforeach
</script>
@endpush
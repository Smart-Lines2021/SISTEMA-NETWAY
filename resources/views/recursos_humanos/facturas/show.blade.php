@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Factura</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
	<li class="breadcrumb-item active">Recursos Humanos</li>
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
							<img class="profile-user-img img-fluid img-circle" src="{{asset('images/logonet.png')}}" alt="User profile picture">
						</div>

						<h3 class="profile-username text-center">Empresa</h3>

						<p class="text-muted text-center">{{$receptorFactura->nombre}}</p>

						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<b>Número de Cliente</b> <a class="float-right">{{$cliente->no_cliente}}</a>
							</li>
							<li class="list-group-item">
								<b>RFC</b> <a class="float-right">{{$cliente->rfc}}</a>
							</li>
							<li class="list-group-item">
								<b>Telefono</b> <a class="float-right">{{$cliente->telefono}}</a>
							</li>
						</ul>

						<a href="{{route('rh.clientes.index')}}" class="btn btn-primary btn-block"><b>Ver Clientes</b></a>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

				<!-- About Me Box -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Acerca de {{$receptorFactura->nombre}}</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

						<p class="text-muted">Zacatecas</p>

						<hr>

						<strong><i class="fas fa-pencil-alt mr-1"></i> Otras Facturas</strong>

						<p class="text-muted">
							<span class="tag tag-danger">ID</span>
							<span class="tag tag-success">ID</span>
							<span class="tag tag-info">ID</span>
							<span class="tag tag-warning">ID</span>
							<span class="tag tag-primary">ID</span>
						</p>

						<hr>

						<strong><i class="far fa-file-alt mr-1"></i> Observaciones</strong>

						<p class="text-muted">Cumple con los pagos a tiempo.</p>
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
							<li class="nav-item"><a class="nav-link active" href="#comprobante" data-toggle="tab">Comprobante</a></li>
							<li class="nav-item"><a class="nav-link" href="#emisor-receptor" data-toggle="tab">Emisor y Receptor</a></li>
							<li class="nav-item"><a class="nav-link" href="#timbres-fiscales" data-toggle="tab">Timbres Fiscales Digitales</a></li>
						</ul>
					</div><!-- /.card-header -->

					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="comprobante">
								<div class="invoice p-3 mb-3">
									<div class="row">
										<div class="col-12">
											<h4>
												<i class="fas fa-globe"></i> {{$receptorFactura->nombre}}.
												<small class="float-right">Fecha: {{$comprobanteFactura->fecha}}</small>
											</h4>
										</div>
									</div>
								</div>
								<ul class="list-group list-group-unbordered mb-3">
									<div class="row">
										<div class="col-md-6">
											<li class="list-group-item">
												<b>Folio</b> <a class="float-right">{{$comprobanteFactura->folio}}</a>
											</li>
											<li class="list-group-item">
												<b>Lugar de Expedición</b> <a class="float-right">{{$comprobanteFactura->lugar_expedicion}}</a>
											</li>
										</div>
										<div class="col-md-6">
											<li class="list-group-item">
												<b>Metodo de Pago</b> <a class="float-right">{{$comprobanteFactura->metodo_pago}}</a>
											</li>
											<li class="list-group-item">
												<b>Moneda</b> <a class="float-right">{{$comprobanteFactura->moneda}}</a>
											</li>
										</div>
										<div class="col-md-6">
											<li class="list-group-item">
												<b>Serie</b> <a class="float-right">{{$comprobanteFactura->serie}}</a>
											</li>
											<li class="list-group-item">
												<b>Subtotal</b> <a class="float-right">{{$comprobanteFactura->subtotal}}</a>
											</li>
										</div>
										<div class="col-md-6">
											<li class="list-group-item">
												<b>Forma de Pago</b> <a class="float-right">{{$comprobanteFactura->forma_pago}}</a>
											</li>
											<li class="list-group-item">
												<b>Total</b> <a class="float-right">{{$comprobanteFactura->total}}</a>
											</li>
										</div>
										@if($comprobanteFactura->condiciones_pago !== null)
										<div class="col-md-6">
											<li class="list-group-item">
												<b>Tipo de Cambio</b> <a class="float-right">{{$comprobanteFactura->tipo_cambio}}</a>
											</li>
											<li class="list-group-item">
												<b>Tipo de Comprobante</b> <a class="float-right">{{$comprobanteFactura->tipo_comprobante}}</a>
											</li>
										</div>
										<div class="col-md-6">
											<li class="list-group-item">
												<b>Fecha</b> <a class="float-right">{{$comprobanteFactura->fecha}}</a>
											</li>
											<li class="list-group-item">
												<b>Condiciones de Pago</b> <a class="float-right">{{$comprobanteFactura->condiciones_pago}}</a>
											</li>
										</div>
										@else
										<div class="col-md-12">
											<li class="list-group-item">
												<b>Tipo de Cambio</b> <a class="float-right">{{$comprobanteFactura->tipo_cambio}}</a>
											</li>
											<li class="list-group-item">
												<b>Tipo de Comprobante</b> <a class="float-right">{{$comprobanteFactura->tipo_comprobante}}</a>
											</li>
										</div>
										@endif

									</div>
								</ul>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="emisor-receptor">
								<div class="invoice p-3 mb-3">
									<!-- title row -->
									<div class="row">
										<div class="col-12">
											<h4>
												<i class="fas fa-globe"></i> {{$receptorFactura->nombre}}
												<small class="float-right">{{$comprobanteFactura->fecha}}</small>
											</h4>
										</div>
										<!-- /.col -->
									</div>
									<!-- info row -->
									<div class="row invoice-info">
										<div class="col-sm-4 invoice-col">
											Emisor
											<address>
												<strong>{{$emisorFactura->nombre}}</strong><br>
												RFC: {{$emisorFactura->rfc}}<br>
												Regimen Fiscal: {{$emisorFactura->regimen_fiscal}}<br>
											</address>
										</div>
										<!-- /.col -->
										<div class="col-sm-4 invoice-col">
											Receptor
											<address>
												<strong>{{$receptorFactura->nombre}}</strong><br>
												RFC: {{$receptorFactura->rfc}}<br>
												CFDI: {{$receptorFactura->cfdi}}<br>
											</address>
										</div>
										<!-- /.col -->
										<div class="col-sm-4 invoice-col">
											<b>Folio #{{$comprobanteFactura->folio}}</b><br>
											<br>
											<b>ID Factura:</b> {{$factura->id}}<br>
											<b>Fecha: </b>{{$comprobanteFactura->fecha}}<br>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									<div class="row">
										<div class="col-12">
											<h4>
												<i class="fas fa-hdd"></i> Conceptos
											</h4>
										</div>
										<!-- /.col -->
									</div>
									<!-- Table row -->
									<div class="row">
										<div class="col-12 table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Clave del Producto</th>
														<th>Cantidad</th>
														<th>Descripción</th>
														<th>Valor Unitario</th>
														<th>Importe</th>
														<th>Clave de Unidad</th>
														<th>Unidad</th>
														<th>No. Identificación</th>
													</tr>
												</thead>
												<tbody>
													@foreach($conceptosFacturas as $conceptoFactura)
													<tr>
														<td>{{$conceptoFactura->clave_producto}}</td>
														<td>{{$conceptoFactura->cantidad}}</td>
														<td>{{$conceptoFactura->descripcion}}</td>
														<td>{{$conceptoFactura->valor_unitario}}</td>
														<td>{{$conceptoFactura->importe}}</td>
														<td>{{$conceptoFactura->clave_unidad}}</td>
														@if($conceptoFactura->unidad !== null)
														<td>{{$conceptoFactura->unidad}}</td>
														@else
														<td>0</td>
														@endif
														@if($conceptoFactura->no_identificacion !== null)
														<td>{{$conceptoFactura->no_identificacion}}</td>
														@else
														<td>No cuenta con un número</td>
														@endif
													</tr>
													@endforeach
												</tbody>

											</table>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									<div class="row">
										<div class="col-12">
											<h4>
												<i class="fas fa-truck-moving"></i> Traslados
											</h4>
										</div>
										<!-- /.col -->
									</div>
									<!-- Table row -->
									<div class="row">
										<div class="col-12 table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Concepto</th>
														<th>Base</th>
														<th>Impuesto</th>
														<th>Tipo de Factor</th>
														<th>Cuota</th>
														<th>Importe</th>
													</tr>
												</thead>
												<tbody>
													@foreach($conceptosFacturas as $conceptoFactura)
													@foreach($conceptoFactura->trasladosFacturas as $trasladoFactura)
													<tr>
														<td>{{$conceptoFactura->clave_producto}}</td>
														<td>{{$trasladoFactura->base}}</td>
														<td>{{$trasladoFactura->impuesto}}</td>
														<td>{{$trasladoFactura->tipo_factor}}</td>
														<td>{{$trasladoFactura->cuota}}</td>
														<td>{{$trasladoFactura->importe}}</td>
													</tr>
													@endforeach
													@endforeach
												</tbody>

											</table>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->

									<div class="row">
										<div class="col-12">
											<p class="lead">Monto Total</p>

											<div class="table-responsive">
												<table class="table">
													<tbody><tr>
														<th style="width:50%">Subtotal:</th>
														<td>${{$comprobanteFactura->subtotal}}</td>
													</tr>
													<tr>
														<th>Traslados</th>
														@foreach($conceptosFacturas as $conceptoFactura)
														@foreach($conceptoFactura->trasladosFacturas as $trasladoFactura)
														<td>${{$trasladoFactura->importe}}</td>
														@endforeach
														@endforeach

													</tr>
													<tr>
														<th>Total:</th>
														<td>${{$comprobanteFactura->total}}</td>
													</tr>
												</tbody></table>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->

									<!-- this row will not appear when printing -->
									<div class="row no-print">
										<div class="col-12">
											<a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Generar XML</a>
											@if($factura->url_pdf !== null)
											@php
											$urlPdf=asset($factura->url_pdf);
											$urlPdf = str_replace('/', '\\', $urlPdf);
											$urlPdf = str_replace('public', 'storage', $urlPdf);
											@endphp
											<a href="{{$urlPdf}}" target="_blank" class="btn btn-primary float-right"><i class="fas fa-download"></i> Ver PDF</a>
											@else
											<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
												<i class="fas fa-download"></i> Generar PDF
											</button>
											@endif
										</div>
									</div>
								</div>
							</div>
							<!-- /.tab-pane -->

							<div class="tab-pane" id="timbres-fiscales">
								<form class="form-horizontal">
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputName" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputName2" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
										<div class="col-sm-10">
											<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
												</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>
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
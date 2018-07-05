@extends('home')
@section('title','Registrar Productos')
@section('contenido')
<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header bg-indigo">
				<h2>
					Producto
					<small>
						Registrar un nuevo producto
					</small>
				</h2>
			</div>
			{!! Form::open(['route' => 'productos.store', 'method' => 'POST','files'=>true]) !!}
			<div class="body">
				<!--<h2 class="card-inside-title">
					Basic Examples
				</h2>-->
				<div class="row clearfix">
					<div class="col-md-8">
						<div class="form-group">
							<div class="form-line">
								{!! Form::text('nombre',null,['class' =>'form-control', 'placeholder' =>'Nombre del la producto','required'])!!}
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							 {!! Form::select('id_categoria',$categorias, null,['class' =>'form-control show-tick','title'=>'Selecciona una categoria','required'])!!}
						 	</div>
						</div>
			  </div>

				<div class="row clearfix">
					<div class="col-md-12">
						<div class="form-group">
							<div class="form-line">
								{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Descripcion del producto'])!!}
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<div class="form-line">
								{!! Form::text('precio',null,['class' =>'form-control', 'placeholder' =>'Precio del producto'])!!}
							</div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
						<div class="form-line">
							{!! Form::text('existencia',null,['class' =>'form-control', 'placeholder' =>'Existencia del producto'])!!}
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12">
						{!! Form::file('image[]',['multiple' => 'multiple','id'=>'input-id'])!!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::button('<i class="material-icons">save</i> REGISTRAR',
						['type' => 'submit', 'class' => 'btn btn-block btn-lg bg-indigo waves-effect'] )!!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>











			</div>
		</div>
	</div>
</div>
<!-- #END# Input -->
@stop

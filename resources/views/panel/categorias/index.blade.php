@extends('home')
@section('title','Listado de categorias')
@section('contenido')
<!-- Hover Rows -->
<div class="row clearfix">
	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
		@if(Session::has('message'))
		<div class="alert bg-green alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{Session::get('message')}}
		</div>

		@endif

		<div class="card">
			<div class="header bg-indigo">
				<h2>
					Listado de Categorias
					<small>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</small>
				</h2>
			</div>
			<div class="body table-responsive">
				<table class="table table-bordered table-hover js-table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categorias as $cat)
						<tr>
							<td>{{$cat->id}}</td>
							<td>{{$cat->categoria}}</td>
							<td>{{$cat->descripcion}}</td>
							<td class="js-sweetalert">
								<button type="button" class="btn btn-primary waves-effect">
									<i class="material-icons">mode_edit</i>
								</button>
								<a id="delete-btn" class="btn btn-danger waves-effect buttonDelete" href="{{route('categorias.destroy', $cat->id)}}"
									role="button"><i class="material-icons">delete</i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<!-- #END# Hover Rows -->
	@stop
	@section('scriptDatatable')

	<script type="text/javascript">

	$(function () {
	    $('.js-table').DataTable({
	        responsive: true,
	        "language": {
	            "url": "/admin/js/pages/tables/Spanish.json"
	        },
	        "order": [[ 0, "desc" ]],
	        dom: 'lBfrtip',

	        buttons: [
	        {
	           extend: 'pdf',
	           exportOptions: {
	                columns: [0,1,2]
	            }
	       },
	       {
	           extend: 'csv',
	           exportOptions: {
	                columns: [0,1,2]
	            }

	       },
	       {
	           extend: 'excel',
	           exportOptions: {
	                columns: [0,1,2]
	            }
	       }
	    ],
	    "columnDefs": [
	            {
	                "targets": [ 0 ],
	                "visible": false,
	                "searchable": false
	            },
	            {
	                "targets": [ 3 ],
	                "searchable": false
	            }
	        ],

	    });

	});

	</script>
	@stop

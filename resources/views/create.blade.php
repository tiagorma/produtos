@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">CODIGO:</label>
				<div class="col-sm-10">
					<input type="text" name="codigo" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">NOME:</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">PREÇO:</label>
				<div class="col-sm-10">
                    <input type="text" name="preco" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">IMAGEM:</label>
				<div class="col-sm-10">
					<input type="file" name="imagem" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Adicionar" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
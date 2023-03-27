
@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Detalhar Produto</b></div>
			<div class="col col-md-6">
				<a href="{{ route('produtos.index') }}" class="btn btn-primary btn-sm float-end">Todos</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>CÓDIGO:</b></label>
			<div class="col-sm-10">
				{{ $produto->codigo }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>NOME:</b></label>
			<div class="col-sm-10">
				{{ $produto->nome }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>PREÇO:</b></label>
			<div class="col-sm-10">
				{{ $produto->preco }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>IMAGEM:</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $produto->imagem) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')

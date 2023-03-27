
@extends('master')

@section('content')

<div class="card">
	<div class="card-header">EDITAR PRODUTO</div>
	<div class="card-body">
		<form method="post" action="{{ route('produtos.update', $produto->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">CÓDIGO:</label>
				<div class="col-sm-10">
					<input type="text" name="codigo" class="form-control" value="{{ $produto->codigo }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">NOME:</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" value="{{ $produto->nome }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">PREÇO:</label>
				<div class="col-sm-10">
                <input type="text" name="preco" class="form-control" value="{{ $produto->preco }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">IMAGEM:</label>
				<div class="col-sm-10">
					<input type="file" name="imagem" />
					<br />
					<img src="{{ asset('images/' . $produto->imagem) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_imagem" value="{{ $produto->imagem }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $produto->id }}" />
				<input type="submit" class="btn btn-primary" value="Editar" />
                <a href="{{ route('produtos.index') }}" class="btn btn-danger btn-sm float-end">Início</a>
			</div>	
		</form>
	</div>
</div>
<!--script>
document.getElementsByName('produto_gender')[0].value = "{{ $produto->produto_gender }}";
</script-->

@endsection('content')
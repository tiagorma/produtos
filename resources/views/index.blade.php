@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Produtos</b></div>
			<div class="col col-md-6">
				<a href="{{ route('produtos.create') }}" class="btn btn-success btn-sm float-end">CADASTRAR PRODUTO</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>IMAGEM</th>
				<th>CÓDIGO</th>
				<th>NOME</th>
				<th>PREÇO</th>
				<th>AÇÕES</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->imagem) }}" width="75" /></td>
						<td>{{ $row->codigo }}</td>
						<td>{{ $row->nome }}</td>
						<td>{{ $row->preco }}</td>
						<td>
							<form method="post" action="{{ route('produtos.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('produtos.show', $row->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
								<a href="{{ route('produtos.edit', $row->id) }}" class="btn btn-warning btn-sm">Editar</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Excluir" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">Sem produtos cadastrados</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
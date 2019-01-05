@extends('parts.default')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Paginação com Blade e simple-pagination</h1>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>E-mail</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pagination->getItems() as $exemplo)
					<tr>
						<td>{{ $exemplo->conteudo }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@include('parts.pagination')
		</div>
	</div>
</div>
@endsection
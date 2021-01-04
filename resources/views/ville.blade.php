@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>La liste des villes où la vaccination a commencé</h1>
			<table class="table">
				<thead>
					<body>
						@foreach($ville as $ville)
						<tr>
							<td>
								{{ $ville->nom }}
							</td>
							<td>
								<a href="{{ url('ville/'.$ville->id.'/hopital') }}" class="btn btn-warning"  >
								Choisir
							</a>
							</td>
						</tr>
						@endforeach
					</body>
				</thead>

			</table>
		</div>
	</div>
</div>
@endsection
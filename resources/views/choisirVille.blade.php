@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>La liste des Hopitaux</h1>
			<table class="table">
				<thead>
					<body>
						@foreach($hopital as $hopital)
						<tr>
							<td>
								{{ $hopital->nom }}
							</td>
							<td> {{ $hopital->adress }}</td>
							<td>
								<a href="{{ url('formulaireClient')}}" class="btn btn-warning"  >
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
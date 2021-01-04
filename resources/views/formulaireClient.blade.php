@extends('layouts.app')
@section('content')
<div class="container">
	<h1>Veuillez remplir vos coordonnées s'il vous plait</h1>
	<div class="row">
		<div class="col-md-8">
			<form action="{{ url('rendezVous')}}">
				<!-- {{ csrf_token() }}-->
				<div class="form-group">
					<label for="">CNE</label>
					<input type="text" name="cne" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Nom</label>
					<input type="text" name="nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Prenom</label>
					<input type="text" name="prenom" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Telephone</label>
					<input type="text" name="telephone" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Age</label>
					<input type="text" name="age" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Etat Physique</label>
					<input type="text" name="etat" class="form-control">
				</div>
				<br>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-dark btn-rounded" value="Enregistrer">
				</div>
                <br>

				<div class="form-group">
					<button type="reset" class="form-control btn btn-light btn-rounded">
						Annuler
					</button> 
				</div>
			</form>
		</div>
	</div>
</div>



@endsection
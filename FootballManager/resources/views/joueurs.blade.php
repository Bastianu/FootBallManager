@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des joueurs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
						<thead>
							<tr>
								<th> id </th>	
								<th> nom </th>
								<th> prenom </th>
								<th> note globale </th>
								<th> supprimer </th>
							</tr>
						</thead>
						<tbody>
							<form action="" method="POST">
							<input type="hidden" name="_method" value="DELETE">
							 @foreach($joueurs as $joueur)
							  <tr>
								  <td align="center"> {{$joueur->id}} </td>
								  <td align="center"> {{$joueur->nom}} </td>
								  <td align="center"> {{$joueur->prenom}} </td>
								  <td align="center"> {{$joueur->noteGlobale}} </td>
								  <td> <input type="submit" name= {{$joueur}} /> </td>
							  </tr>
							 @endforeach
							 </form>
					   </tbody>
					</table>
                </div>
            </div>
			<!--<form action="" method="post">
				<input type="text" name="nom" placeholder="Nom"> 
				<input type="text" name="prenom" placeholder="Prenom"> 
				<input type="submit" name="submit">
			</form>-->
			
			<form action="" method="post">
				<input type="number" name="nb" placeholder="Joueurs à générer" required/>
				<input type="submit" name="submit">
			</form>
        </div>
    </div>
</div>
@endsection

@extends('layout')

@section('content')

<!--<h2> Liste voiture </h2>-->

<h2> Liste des véhicules dans la BDD </h2>

<div class="table-wrapper">
    
    <table class="table table-striped table-dark" style="position: relative; right: 30px;">
        
        <thead>
            
            <tr style="text-align: center;">
                
                <th scope="col"> Marque </th>
                <th scope="col"> Modèle de la marque </th>
                <th scope="col"> Puissance (en ch) </th>
                <th scope="col"> Nombre de place </th>
                <th scope="col"> Couleur </th>
                <th scope="col"> Image </th>
                <th scope="col"> Afficher </th>
                <th scope="col"> Mettre à jour </th>
                <th scope="col"> Supprimer </th>
                
            </tr>
            
        </thead>
        
        <tbody>
            
            @foreach($concessionnaire as $value_concessionnaire)
            
            <tr style="text-align: center;">
                
                <td> {{ $value_concessionnaire->numberplate }} </td>
                <td> {{ $value_concessionnaire->brand }} </td>
                <td> {{ $value_concessionnaire->model }} </td>
                <td> {{ $value_concessionnaire->horspower }} </td>
                <td> {{ $value_concessionnaire->brand }} </td>
                <td> <img src="image/{{ $value_concessionnaire->picture }}" width="150px" height="150px"/> </td>
                <td> 
                
                    <form method="POST">
                        <a class="btn btn-info" href="{{ route('concessionnaire.show', $value_concessionnaire->numberplate) }}"> Afficher </a>
                    </form>
                    
                </td>
                <td>
                  
<!--                     <form method="POST">
                        <a class="btn btn-primary" href="{{ route('concessionnaire.edit', $value_concessionnaire->numberplate) }}"> Afficher </a>
                    </form>-->

                </td>
                <td>
                    
<!--                    <form method="POST">
                        <a class="btn btn-danger" href="{{ route('concessionnaire.destroy', $value_concessionnaire->numberplate) }}"> Afficher </a>
                    </form>-->
                    
                </td>
                
            </tr>
            
            @endforeach
            
        </tbody>
        
    </table>
    
</div>

@endsection


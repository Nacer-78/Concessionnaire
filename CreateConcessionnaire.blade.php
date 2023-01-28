@extends('layout')

@section('content')

<style>
    
/*    button{
        margin-top: 5px;
    }
    */
    
/*    input.form-control{
        margin-bottom: 25px;
    }*/
    
</style>

<h1> Ajouter votre voiture : </h1>

<form method="POST" action="{{route('concessionnaire.store')}}" enctype="multipart/form-data">
    
    @csrf
 
    <div class="form-group">
        
        <label for="name"> Marque : </label>
        <input type="text" class="form-control" name="brand" style="margin-bottom: 25px;"/>
        
    </div>
    
    <div class="form-group">
        
        <label for="name"> Modèle de la marque : </label>
        <input type="text" class="form-control" name="model" style="margin-bottom: 25px;"/>
        
    </div>

    <div class="form-group">
        
        <label for="name"> Puissance (en ch) : </label>
        <input type="text" class="form-control" name="horspower" style="margin-bottom: 25px;"/>
        
    </div>

    <div class="form-group">
        
        <label for="name"> Nombre de place : </label>
        <input type="text" class="form-control" name="number_place" style="margin-bottom: 25px;"/>
        
    </div>

    <div class="form-group">
        
        <label for="name"> Couleur : </label>
        <input type="text" class="form-control" name="color" style="margin-bottom: 25px;"/>
        
    </div>

    <div class="form-group">
        
        <label for="name"> Image : </label>
        <input type="file" class="form-control" name="picture" style="margin-bottom: 25px;"/>
        
    </div>

    <button type="submit" class="btn btn-dark"> Ajouter </button>
    
</form>

@endsection


@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/etudiant.css')}}">
</head>
<div class="container">
    <div class="btn_row">
        <div class="cart">
            <button>Les cartes d'etudiant</button>
        </div>
        <div class="cart">
            <button>Les notes des etudiants</button>
        </div>
        <div class="add_btn">
            <button>Ajouter Etudiant</button>
        </div>
        
    </div>
</div>
@endsection
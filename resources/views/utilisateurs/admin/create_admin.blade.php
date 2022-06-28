@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/etudiant.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/form.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    
</head>
<div class="container">
  @include('layouts.top_row.utu_top')
  @include('layouts.second_row.uti')
  {{-- <div class="center">
    <input type="checkbox" id="click">
    <label for="click" class="click-me">Click me</label>
<div class="content">
   <div class="header">
       <h2>Modal Popup</h2>
       <label for="click" class="fas fa-times"></label>
   </div>
   <label for="click" class="fas fa-check"></label>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
   <div class="line"></div>
   <label for="click" class="close-btn">Close</label>
</div>
</div> --}}
<div class="form">
    <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un administrateur</h3>
    <form action="">
        <div class="row">
            <div class="input_row">
                <div class="labels">
                    <label for="">Nom et Prenom</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Nom et Prenom">
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="labels">
                    <label for="">Nom d'utilisateur</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Nom et Prenom">
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="labels">
                    <label for="">Nom et Prenom</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Nom et Prenom">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
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
    @include('layouts.top_row.cour_top')
    @include('layouts.second_row.cour')
    <div class="form">
        <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un Cour</h3>
        <form action="{{ url('insert_cour') }}" method="POST">
            <div class="col">
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Nom Cours</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Nom..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Credit</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="...3..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Classe</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Classe..." required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Unite</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Unite..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Enseignant</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="...1..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Specialisation</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="...1..." required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button>Ajouter</button>
            </div>
        </form>
    </div>
</div>

@endsection
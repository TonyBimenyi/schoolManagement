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
  @include('layouts.second_row.tea')
  <div class="form">
    <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un enseignant</h3>
    <form action="{{ url('insert_teacher') }}" method="POST">
        <div class="col">
            <div class="row">
                <div class="input_row">
                    <div class="labels">
                        <label for="">Nom</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Nom..." name="nom" required>
                        </div>
                    </div>
                </div>
                <div class="input_row">
                    <div class="labels">
                        <label for="">Prenom</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Prenom..." name="prenom" required>
                        </div>
                    </div>
                </div>
                <div class="input_row">
                    <div class="labels">
                        <label for="">Telephone</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="input">
                            <input type="number" placeholder="+257 76 78 76" name="phone" required>
                        </div>
                    </div>
                </div>
                 </div>

                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Email</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="input">
                                <input name="email" required type="email" name="mail" placeholder="exemple@biu.bi">
                            </div>
                        </div>
                    </div>
                <div class="input_row">
                    <div class="labels">
                        <label for="">Addresse</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Addresse..." name="adresse" required>
                        </div>
                    </div>
                </div>
                <div class="input_row">
                    <div class="labels">
                        <label for="">Sexe</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-mars-and-venus"></i>
                        </div>
                        <div class="select">
                            <select name="sexe" required>
                                <option value="" disabled>--Selection le sexe---</option>
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                            </select>
                        </div>
                    </div>
                  </div>
                 </div>
            </div>
            <div class="button">
                <button type="submit">Ajouter</button>
            </div>    
    </form>
    </div>
    </div>
@endsection
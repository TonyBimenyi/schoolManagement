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
    @include('layouts.second_row.pers')
    <div class="form">
        <h3 style="margin:10px 35px;color:var(--primary)">Modifier le personnel: {{ $personnel->nom_personnel }}  {{ $personnel->prenom_personnel }}</h3>
        <form action="{{ url('update_personnel/'.$personnel->id_personnel) }}" method="POST">
            @method('PUT')
      @csrf
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
                            <input type="text" value="{{ $personnel->nom_personnel }}" name="nom" placeholder="Nom et Prenom">
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
                        <input type="text" value="{{ $personnel->prenom_personnel }}" name="prenom" placeholder="Nom et Prenom">
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
                        <input type="number" value="{{ $personnel->telephone_personnel }}" name="telephone" placeholder="+257 76 78 76">
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
                        <select name="sexe" id="">
                            <option value="" disabled>---Sexe---</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                            
                        </select>
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
                        <input type="email" value="{{ $personnel->email }}" name="mail" placeholder="exemple@biu.bi" required>
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="labels">
                    <label for="">Fonction</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <div class="select">
                        <select name="fonction" id="">
                            <option value="" disabled>---Fonction---</option>
                            <option value="secretaire">Secretaire</option>
                            <option value="comptable">Comptable</option>
                            <option value="bibliothecaire">Bibliothecaire</option>
                            <option value="doyen">Doyen</option>
                           
                        </select>
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="labels">
                    <label for="">Salaire</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <div class="input">
                        <input type="text" value="{{ $personnel->salaire }}" name="salaire" placeholder="Salaire..." required>
                    </div>
                </div>
            </div>
        </div>
       </div>
       <div class="button">
        <button type="submit">Modifier</button>
        </div>
        </form>
    </div>
</div>
@endsection
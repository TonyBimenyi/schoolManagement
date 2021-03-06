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
    <form action="{{ url('insert_admin') }}" method="POST">
        @csrf
        <div class="col">
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
                        <input name="name" required type="text" placeholder="Nom et Prenom">
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="labels">
                    <label for="">Nom d'utilisateur</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-at"></i>
                    </div>
                    <div class="input">
                        <input name="username" required type="text" placeholder="Nom d'utilisateur">
                    </div>
                </div>
            </div>
            <div class="input_row">
                <div class="labels">
                    <label for="">Email</label>
                </div>
                <div class="input_group">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="input">
                        <input name="email" required type="email" placeholder="exemple@biu.bi">
                    </div>
                </div>
            </div>

        </div>

        
            <div class="row">
                <div class="input_row">
                    <div class="labels">
                        <label for="">Mot de passe</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="input">
                            <input name="password" required type="password" placeholder="*******************">
                        </div>
                    </div>
                </div>
                <div class="input_row">
                    <div class="labels">
                        <label for="">Role</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-brands fa-gg-circle"></i>
                        </div>
                        <div class="select">
                            <select required name="role" id="">
                                <option value="" disabled>--Selectionner le role---</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Admin">Admin</option>
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

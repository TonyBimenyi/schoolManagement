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
    @include('layouts.second_row.student')
    <div class="form">
        <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un etudiant</h3>
        <form action="">
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
                            <i class="fa-solid fa-at"></i>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Nom d'utilisateur">
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
                            <input type="email" placeholder="exemple@biu.bi">
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
                            <select name="" id="">
                                <option value="" disabled>--Selection le sexe---</option>
                                <option value="">Homme</option>
                                <option value="">Femme</option>
                            </select>
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
                            <input type="number" placeholder="+257 76 78 76">
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
                                <input type="password" placeholder="*******************">
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
                                <select name="" id="">
                                    <option value="" disabled>--Selectionner le role---</option>
                                    <option value="">Super Admin</option>
                                    <option value="">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Email</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="input_date">
                                <input class="date" type="date" placeholder="sdi">
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

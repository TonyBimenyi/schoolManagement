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
        <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un étudiant</h3>
        <form action="">
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
                            <input type="text" placeholder="Nom...">
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
                            <input type="text" placeholder="Prenom...">
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
                        <label for="">Date de Naissance</label>
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
                <div class="input_row">
                    <div class="labels">
                        <label for="">Adresse</label>
                    </div>
                    <div class="input_group">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Kigobe...">
                        </div>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Telephone</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="76 78 76 89">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Promotion</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-brands fa-buromobelexperte"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="07">
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
                            <label for="">Specialisation</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="select">
                                <select name="" id="">
                                    <option value="" disabled>--Selectionner la spec---</option>

                                </select>
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

@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/etudiant.css')}}">
</head>
<div class="container">
    <div class="header_part">
        <div class="menu_li active">
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="text">
                <p>ADMINS</p>
            </div>
        </div>
        <div class="menu_li">
            <div class="icon">
                <i class="fa-solid fa-graduation-cap"></i>
               
            </div>
            <div class="text">
                <p>ETUDIANTS</p>
            </div>
        </div>
        <div class="menu_li">
            <div class="icon">
                <i class="fa-solid fa-people-group"></i>
            </div>
            <div class="text">
                <p>ENSEIGNANTS</p>
            </div>
        </div>
        <div class="menu_li">
            <div class="icon">
                <i class="fa-solid fa-clipboard-user"></i>
            </div>
            <div class="text">
                <p>STAFF</p>
            </div>
        </div>
       
    </div>
    <div class="second_row">
        <div class="menu">
            <div class="text ">
                <p id="active">LISTE DES ADMINS</p>
            </div>
            <div class="text">
                <p>NOUVEAU</p>
            </div>
        </div>
    </div>
    <div class="table">
        <div class="table_content">
            <div class="search_row">
                <div class="sort">

                </div>
                <div class="search">
                    <input type="search" placeholder="Rechercher...">
                </div>
            </div>
            <div class="table_list">
                <table>
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>STATUT</th>
                            <th colspan="2">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($utilisateur as $uti )               
                            <tr>
                                <td>{{$uti->id}}</td>
                                <td>{{$uti->name}}</td>
                                <td>{{$uti->email}}</td>
                                <td> <button id="role">{{$uti->role}}</button></td>
                                <td> <button id="etat"> Desactiver</button> <br>
                                    {{-- @if ($utilisateur->etat==0) --}}
                                         {{-- <small style="color: red;font-weight:700;">Etat:Inactive</small> --}}
                                    {{-- @else --}}
                                    <small style="color: green;font-weight:700"> Etat:Active </small>
                                    {{-- @endif --}}
                                       
                                </td>
                                <td id="btn"> <button  id="edit"><i class="fa-solid fa-pen-to-square"></i> Modifier</button></td>
                                <td> <button  id="delete"><i class="fa-solid fa-trash-can"></i> Supprimer</button></td>
                            </tr>                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
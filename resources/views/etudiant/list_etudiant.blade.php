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
                <i class="fa-solid fa-people-group"></i>
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
                            <th colspan="2">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>bito@biu.bi</td>
                            <td> <button id="role">Admin</button></td>
                            <td id="btn"> <button  id="edit">Modifier</button></td>
                            <td> <button  id="delete">Supprimer</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
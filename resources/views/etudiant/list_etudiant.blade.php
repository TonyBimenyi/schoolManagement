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
                        <th>
                            <td>#ID</td>
                            <td>USERNAME</td>
                            <td>EMAIL</td>
                            <td>ROLE</td>
                            <TD>OPTIONS</TD>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
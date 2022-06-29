@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.utu_top')
    @include('layouts.second_row.uti')
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
                                 
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <button id="role"></button></td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
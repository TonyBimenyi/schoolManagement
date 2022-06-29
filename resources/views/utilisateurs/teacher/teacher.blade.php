@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.utu_top')
    @include('layouts.second_row.tea')
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
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>TELEPHONE</th>
                            <th>EMAIL</th>
                            <th>ADDRESSE</th>
                            <th>SEXE</th>
                            <th colspan="3">OPTIONS</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                               @foreach ($enseignant as $ens)
                            <tr>
                                <td>{{ $ens->id_ens }}</td>
                                <td>{{ $ens->nom_ens }}</td>
                                <td>{{ $ens->prenom_ens }}</td>
                                <td>{{ $ens->telephone_ens }}</td>
                                <td>{{ $ens->email_ens }}</td>
                                <td>{{ $ens->adress_ens }}</td>
                                <td>{{ $ens->sexe_ens }}</td>
                                <td><button class="edit">Details</button></td>
                                <td id="btn"> <button  class="edit"><i class="fa-solid fa-pen-to-square"></i> Modifier</button></td>
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
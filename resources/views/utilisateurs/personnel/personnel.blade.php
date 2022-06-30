@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.utu_top')
    @include('layouts.second_row.pers')
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
                            <th>SEXE</th>
                            <th>EMAIL</th>
                            <th>FONCTION</th>
                            <th>SALAIRE</th>
                            <th colspan="2">OPTIONS</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                                 @foreach ($personnel as $pers)
                            <tr>
                                <td>{{ $pers->id_personnel }}</td>
                                <td>{{ $pers->nom_personnel }}</td>
                                <td>{{ $pers->prenom_personnel }}</td>
                                <td>{{ $pers->telephone_personnel }}</td>
                                <td>{{ $pers->sexe }}</td>
                                <td>{{ $pers->email }}</td>
                                <td> {{ $pers->fonction }}</td>
                                <td>{{ $pers->salaire }}</td>
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
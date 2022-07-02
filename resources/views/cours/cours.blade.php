@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.cour_top')
    @include('layouts.second_row.cour')
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
                            <th>NOM COUR</th>
                            <th>CREDIT</th>
                            <th>CLASSE</th>
                            <th>UNITE</th>
                            <th>ENSEIGNANT</th>
                            <th>SPECIALISATION</th>
                            <th colspan="2">OPTIONS</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                              @foreach ($cours as $cour ) 
                            <tr>
                                <td>{{ $cour->id_cours }}</td>
                                <td>{{ $cour->nom_cours }}</td>
                                <td>{{ $cour->credits }}</td>
                                <td>{{ $cour->class }}</td>
                                <td>{{ $cour->unite }}</td>
                                <td>{{ $cour->id_ens }}</td>
                                <td> {{ $cour->id_spec }}</td>
                                <td id="btn"><a href="{{ url('edit_cours/'.$cour->id_cours) }}"> <button  class="edit"><i class="fa-solid fa-pen-to-square"></i> Modifier</button></a></td>
                                <td> <a href="{{ url('delete_cours/'.$cour->id_cours) }}"><button  id="delete"><i class="fa-solid fa-trash-can"></i> Supprimer</button></a></td>
                            </tr>  
                            @endforeach                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
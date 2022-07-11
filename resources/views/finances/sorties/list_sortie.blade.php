@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.fin_top')
    @include('layouts.second_row.sort')
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
                            <th>TYPE SORTIE</th>
                            <th>DESIGNATION</th>
                            <th>MONTANT</th>
                            <th colspan="2">OPTIONS</th>

                        </tr>
                    </thead>
                    <tbody>
                               @foreach ($sortie as $sort)
                            <tr>
                                <td>{{ $sort->id_sortie }}</td>
                                <td>{{ $sort->type_sortie }}</td>
                                <td>{{ $sort->designation_sortie }}</td>
                                <td>{{ $sort->montant_sortie }}</td>
                                 <td id="btn"><a href="{{ url('edit_sortie/'.$sort->id_sortie) }}"><button  class="edit"><i class="fa-solid fa-pen-to-square"></i> Modifier</button></a></td>
                                <td> <a href="{{ url('delete_sortie/'.$sort->id_sortie) }}"> <button  id="delete"><i class="fa-solid fa-trash-can"></i> Supprimer</button></a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection
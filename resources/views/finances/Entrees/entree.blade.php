@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.fin_top')
    @include('layouts.second_row.entr')
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
                        <th>TYPE ENTREE</th>
                        <th>DESIGNATION</th>
                        <th>MONTANT</th>
                        <th colspan="2">OPTIONS</th>

                    </tr>
                </thead>
                <tbody>
                           @foreach ($entree as $entr)
                        <tr>
                            <td>{{ $entr->id_entree }}</td>
                            <td>{{ $entr->type_entree }}</td>
                            <td>{{ $entr->designation_entree }}</td>
                            <td>{{ $entr->montant_entree }}</td>
                             <td id="btn"><a href="{{ url('edit_entree/'.$entr->id_entree) }}"><button  class="edit"><i class="fa-solid fa-pen-to-square"></i> Modifier</button></a></td>
                            <td> <a href="{{ url('delete_entree/'.$entr->id_entree) }}"> <button  id="delete"><i class="fa-solid fa-trash-can"></i> Supprimer</button></a></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
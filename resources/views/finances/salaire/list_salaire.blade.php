@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/form.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.fin_top')
    @include('layouts.second_row.sal')
    <div class="table">
        <div class="table_content">

            <div class="table_list">
                <table>
                    <thead>
                        <tr class="title_bar">
                            <th>ID</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>FONCTION</th>
                            <th>MONTANT PAYE</th>
                            <th>DATE DE PAIEMENT</th>
                            <th colspan="3">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($salaire as $item)


                            <tr id="table">

                                <td>{{$item->id_personnel}}</td>
                                <td>{{ $item->nom_personnel }}</td>
                                <td>{{ $item->prenom_personnel }}</td>
                                <td>{{ $item->fonction }}</td>
                                <td>{{ number_format($item->montant_sortie) }} Fbu</td>
                                <td>{{ $item->created_at }}</td>
                                <td id="btn"><a href=""><button  class="edit"><i class="fa-solid fa-pen-to-square"></i> Modifier</button></a></td>
                                <td> <a href=""> <button  id="delete"><i class="fa-solid fa-trash-can"></i> Supprimer</button></a></td>

                            </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

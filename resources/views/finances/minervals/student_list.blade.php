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
    @include('layouts.second_row.minos')
    <div class="table">
        <div class="table_content">
            <div class="search_row">
                <div class="sort">
                    <div class="fac">
                        <select name="" id="">
                            <option value="" selected disabled>--Faculte--</option>
                        </select>
                    </div>
                    <div class="spec">
                        <select name="" id="">
                            <option value="" selected disabled>--Specialisation--</option>
                        </select>
                    </div>
                    <div class="classe">
                        <select name="" id="classe">
                            <option value="" disabled selected>--Select the Class--</option>
                            <option value="BAC I">BAC I</option>
                            <option value="BAC II">BAC II</option>
                            <option value="BAC III">BAC III</option>
                        </select>
                    </div>
                </div>
                <div class="search">
                    <input type="search" placeholder="Rechercher...">
                </div>
            </div>
            <div class="table_list">
                <table>
                    <thead>
                        <tr class="title_bar">
                            <th>MATRICULE</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>DATE DE NAISSANCE</th>
                            <th>ADDRESS</th>
                            <TH>A/A</TH>
                            <TH>SEXE</TH>
                            <TH>FACULTE</TH>
                            <TH>CLASSE</TH>
                            <th colspan="3">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)

                            <tr id="table">
                                <td>CO-{{ $stu->promotion }}-{{ $stu->id_etu }}</td>
                                <td>{{ $stu->nom_etu }}</td>
                                <td>{{ $stu->prenom_etu }}</td>
                                <td>{{ $stu->date_naiss }}</td>
                                <td>{{ $stu->adress_etu }}</td>
                                <td>{{ $stu->annee_academique }}</td>
                                <td>{{ $stu->sexe_etu }}</td>
                                <td>{{ $stu->nom_fac }}</td>
                                <td>{{ $stu->classe }}</td>
                                <td id="btn"><a href="{{ url('attestation/'.$stu->id_etu) }}"> <button  class="edit"><i class="fa-solid fa-file-lines"></i>Ajouter Paiement</button></a></td>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

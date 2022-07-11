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
    <div class="table">
        <div class="table_content">

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


                            <tr id="table">

                                <td></td>
                                <td></td>

                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

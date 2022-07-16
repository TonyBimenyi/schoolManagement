@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/att.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.utu_top')
    @include('layouts.second_row.attestation')
    <div class="att_body">
        <div class="att_header">
            <div class="logo">
                <h1> <i class="bx bxl-c-plus-plus"></i></h1>
                <small style="margin-top: 10px;padding:10px 0px">Bureau d'administration</small>
            </div>
            <div class="date">
                @php
                    $mytime = Carbon\Carbon::now();
                @endphp
                     <p>{{$mytime->toDateTimeString()}}</p>
            </div>
        </div>
        <div class="middle">
            <div class="name">
                <p><strong>{{ $student->nom_etu }} {{ $student->prenom_etu }}</strong></p>
                <p>Addresse: {{ $student->adress_etu }}</p>
                <p>Email: {{ $student->email_etu }}</p>
            </div>
            <div class="numero">
                <p>Numero d'inscription: 0{{ $student->promotion }}-CO-{{ $student->id_etu }}</p>
                <p>jour de naissance: {{ $student->date_naiss }}</p>
            </div>
        </div>
        <div class="line">
                <hr>
        </div>
        <div class="title">
            <h1 style="text-align: center">ATTESTATION D'INSCRIPTION</h1>
            <P>ANNEE ACADEMIQUE: {{ $student->annee_academique }}</P>
        </div>
        <div class="body">
            <p>Madame,Monsieur,</p>
            <p>La presente atteste l'inscription au CodingCollege de  <strong> @if ($student->sexe_etu=="Homme")
                {{ 'Monsieur' }}
            @else

            {{ 'Madame' }}

            @endif{{ $student->nom_etu }} {{ $student->prenom_etu }}</strong> a l'annee academique <strong>{{ $student->annee_academique }}</strong> dans la faculte de <strong>{{ $student->nom_fac }}</strong>  et specialisation de <strong>{{ $student->nom_spec }}</strong></p>
            <p>Regime d'etudes:         Temps Complet</p>
            <p>Date de debut des cours:  17-Fevrier</p>
            <p>L'inscription a une prochaine session est possible si les conditions de poursuite du ou des programmes d'etudes sont respectees.</p>
            <p>Je vous prie de recevoir l'expression des mes sentiments les meilleurs.</p>
        </div>
        <div class="footer">
            <div class="signature">
                <img src="{{ asset('sign.jpg') }}" alt="">
                <p>Ahishakiye Yvan Igor, Recteur</p>
            </div>
            <div class="seal">
                <img src="{{ asset('seal.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.navside')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/dashboard.css')}}">

</head>
@section('da')
<div class="dash_container">
    <!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>-->
</head>
<body>

    <section class="dashboard">


        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Tableau de Bord</span>
                </div>

                <div class="boxes">
                    <div class="box box3">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span class="text">Total des etudiants</span>
                        <span class="number">{{ $count_student }}</span>
                    </div>
                    <div class="box box1">

                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="text">Depenses</span>
                        <span class="number">{{ number_format($sum_depenses) }} Fbu</span>
                    </div>
                    <div class="box box2">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="text">Revenus</span>
                        <span class="number">{{ number_format($sum_rev) }} Fbu</span>
                    </div>

                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Dernieres paiements des minervals</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                            <span class="data-title">Nom et Prenom</span>
                        @foreach ($minervals as $min)
                            <span class="data-list">{{ $min->nom_etu }} {{ $min->prenom_etu }}</span>
                        @endforeach
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        @foreach ($minervals as $min)
                            <span class="data-list">{{ $min->email_etu }}</span>
                        @endforeach
                    </div>
                    <div class="data joined">
                        <span class="data-title">Date</span>
                        @foreach ($minervals as $min)
                            <span class="data-list">{{ $min->created_at3 }}</span>
                        @endforeach
                    </div>
                    <div class="data type">
                        <span class="data-title">Tranche</span>
                        @foreach ($minervals as $min)
                            <span class="data-list">{{ $min->tranche }}<sup>e</sup>tranche </span>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--<script src="script.js"></script>-->
</body>
</html>

</div>
@endsection

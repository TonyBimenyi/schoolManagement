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
                            <th>MONTANT PAYE</th>
                            <th>RESTE</th>
                            <th>TRANCHE</th>
                            <TH>FACULTE</TH>
                            <TH>CLASSE</TH>
                            <th colspan="3">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($minervals as $minos)

                            <tr id="table">
                                <td>CO-{{ $minos->promotion }}-{{ $minos->id_etu }}</td>
                                <td>{{ $minos->nom_etu }}</td>
                                <td>{{ $minos->prenom_etu }}</td>
                                <td>{{ number_format($minos->montant_paye) }} Fbu</td>
                                <td>{{ $minos->montant_total-$minos->montant_paye }} Fbu</td>
                                <td>{{ $minos->tranche }} e tranche</td>
                                <td>{{ $minos->nom_fac }}</td>
                                <td>{{ $minos->classe }}</td>
                                <td id="btn"><a href="">  <button style="padding: 8px 15px;"  class="edit"><i class="fa-solid fa-pen-to-square"></i></button></a></td>
                                <td> <a href=""><button  style="padding: 8px 15px;"  id="delete"><i class="fa-solid fa-trash-can"></i></button></a></td>
                                @endforeach
                            </tr>
                            <tr>
                                <td style="background-color: var(--primary);color:white;">TOTAL</td>
                                <td colspan="2"></td>
                                <td>{{ number_format($sum) }} Fbu</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

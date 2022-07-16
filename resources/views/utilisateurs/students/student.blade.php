@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.utu_top')
    @include('layouts.second_row.student')
    <div class="table">
        <div class="table_content">
            <div class="search_row">

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
                                <td id="btn"><a href="{{ url('att/'.$stu->id_etu) }}"> <button  class="edit"><i class="fa-solid fa-file-lines"></i> Attestation</button></a></td>
                                <td id="btn"><a href="{{ url('edit_student/'.$stu->id_etu) }}">  <button style="padding: 8px 15px;"  class="edit"><i class="fa-solid fa-pen-to-square"></i></button></a></td>
                                <td> <a href="{{ url('delete_student/'.$stu->id_etu) }}"><button  style="padding: 8px 15px;"  id="delete"><i class="fa-solid fa-trash-can"></i></button></a></td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('#classe').change(function(){
            let cla=jQuery(this).val();
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
        });
        $.ajax({
            method:"POST",
            url:"/getClasse",
            data:{
            'cla':cla,
            "_token": "{{ csrf_token() }}",
            },
            success:function(result){
                    jQuery('#table').html(result);
                }
        })
        })
    })
</script>
@endsection

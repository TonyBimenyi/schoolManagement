@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
    @include('layouts.top_row.info_top')
    @include('layouts.second_row.info')
</div>
<div class="table">
    <div class="table_content">
        <div class="search_row">
            <div class="sort">
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
        <div class="cards">
            <div class="card">

            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/etudiant.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<div class="container">
  @include('layouts.top_row.utu_top')
  @include('layouts.second_row.uti')
  <div class="center">
    <input type="checkbox" id="click">
    <label for="click" class="click-me">Click me</label>
<div class="content">
   <div class="header">
       <h2>Modal Popup</h2>
       <label for="click" class="fas fa-times"></label>
   </div>
   <label for="click" class="fas fa-check"></label>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
   <div class="line"></div>
   <label for="click" class="close-btn">Close</label>
</div>
</div>
</div>
@endsection
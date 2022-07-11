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
    <div class="form">
        <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un salaire</h3>
        <form action="">
            <div class="col">
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Personnel</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="select">
                                <select required class="fac" name="nom" id="country">
                                    <option value="" selected="true" disabled="true">--Selectionner le personnel---</option>
                                    @foreach ($personnel as $pers)
                                        <option value="{{ $pers->fonction }}">{{ $pers->nom_personnel }} {{ $pers->prenom_personnel }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="id" value="{{ rand(100,999999) }}">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Salaire</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div class="input">
                                <input type="number" name="salaire" placeholder="Salaire..." required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button>Ajouter</button>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('#country').change(function(){
            let cid=jQuery(this).val();
            // jQuery.ajax({
            //     url:'/getState',
            //     type:'post',
            //     data:'cid='+cid+'_token={{ csrf_token() }}',
            //     success:function(result){
            //         jQuery('#state').html(result)
            //     }
            // })
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
        });
        $.ajax({
            method:"POST",
            url:"/getState",
            data:{
            'cid':cid,
            "_token": "{{ csrf_token() }}",
            },
            success:function(result){
                    jQuery('#state').html(result);
                }
        })
        })
    })
</script>
@endsection

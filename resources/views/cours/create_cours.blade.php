@extends('layouts.navside')
@section('da')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/etudiant.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/form.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
</head>
<body>
<div class="container">
    @include('layouts.top_row.cour_top')
    @include('layouts.second_row.cour')
    <div class="form">
        <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un Cour</h3>
        <form action="{{ url('insert_cour') }}" method="POST">
            @csrf
            <div class="col">
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Nom Cours</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Nom..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Credit</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="...3..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Classe</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Classe..." required>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Unite</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-hourglass-empty"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Unite..." required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Enseignant</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-person-chalkboard"></i>
                            </div>
                            <div class="select">
                                <select required class="fac" name="enseignant" id="country">
                                    <option value="" selected="true" disabled="true">--Selectionner l'enseignant---</option>
                                    {{-- @foreach ($enseignant as $ens )
                                    <option value="{{ $ens->id_ens }}">{{ $ens->nom_ens }}</option>
                                    @endforeach --}}
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Faculte</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="select">
                                <select required class="fac" name="faculte" id="country">
                                    <option value="" selected="true" disabled="true">--Selectionner la faculte---</option>
                                    @foreach ($faculte as $fac)
                                        <option value="{{ $fac->id_fac }}">{{ $fac->nom_fac }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Specialisation</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="select">
                                <select name="specialisation" id="state">
                                    <option value="" required disabled>--La faculte d'abord---</option>

                                </select>
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
</body>
</html>

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
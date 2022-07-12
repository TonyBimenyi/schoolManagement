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
        @include('layouts.top_row.fin_top')
        @include('layouts.second_row.minos')
        <div class="form">
            <h3 style="margin:10px 35px;color:var(--primary)">Paiement de minerval pour {{ $student->nom_etu }} {{ $student->prenom_etu }}</h3>
            <small style="margin:10px 35px;color:var(--primary)"><strong>Faculte:</strong> {{$student->nom_fac  }}</small>
            <small style="margin:10px 35px;color:var(--primary)"><strong>Specialisation:</strong> {{$student->nom_spec  }}</small>
            <small style="margin:10px 35px;color:var(--primary)"><strong>Classe:</strong> {{$student->classe  }}</small>
            <form action="{{ url('insert_minerval') }}" method="POST">
                @method('POST')
                @csrf
                <input type="hidden" name="id_entree" value="min-{{ rand(10,9999999) }}">
                <input type="hidden" name="id_etu" value="{{ $student->id_etu }}">
                <input type="hidden" name="nom" value="{{ $student->nom_etu }} {{ $student->prenom_etu }}">
                <div class="col">
                    <div class="row">
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Montant Payee</label>
                            </div>
                        </div>
                        <div class="input_row">
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="input">
                                    <input name="montant" required type="text" placeholder="Montant...">
                                </div>
                            </div>
                        </div>

                    </div>

                        <div class="row">
                            <div class="input_row">
                                <div class="labels">
                                    <label for="">Tranche</label>
                                </div>
                                <div class="input_group">
                                    <div class="icon">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                    <div class="select">
                                        <select class="fac" required name="tranche" id="country">
                                            <option value="" selected="true" disabled>--Selectionner la tranche--</option>
                                            <option value="1">1ere Tranche</option>
                                            <option value="2">2e Tranche</option>
                                            <option value="3">3e Tranche</option>
                                            <option value="4">4e Tranche</option>
                                        </select>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>


                <div class="button">
                    <button>Ajouter le paiement</button>
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

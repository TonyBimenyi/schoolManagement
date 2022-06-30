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
        @include('layouts.top_row.utu_top')
        @include('layouts.second_row.student')
        <div class="form">
            <h3 style="margin:10px 35px;color:var(--primary)">Ajouter un étudiant</h3>
            <form action="">
                <div class="col">
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Nom</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input name="nom" type="text" placeholder="Nom...">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Prenom</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input name="prenom" type="text" placeholder="Prenom...">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Email</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="input">
                                <input name="email" type="email" placeholder="exemple@biu.bi">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Date de Naissance</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="input_date">
                                <input name="birthdate" class="date" type="date" placeholder="sdi">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Adresse</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input">
                                <input name="address" type="text" placeholder="Kigobe...">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Telephone</label>
                            </div>
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="input">
                                    <input name="phone" type="number" placeholder="76 78 76 89">
                                </div>
                            </div>
                        </div>
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Promotion</label>
                            </div>
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-brands fa-buromobelexperte"></i>
                                </div>
                                <div class="input">
                                    <input name="promotion" type="number" placeholder="07">
                                </div>
                            </div>
                        </div>
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Sexe</label>
                            </div>
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-solid fa-mars-and-venus"></i>
                                </div>
                                <div class="select">
                                    <select name="sexe" id="">
                                        <option value="" disabled>--Selection le sexe---</option>
                                        <option value="">Homme</option>
                                        <option value="">Femme</option>
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
                                    <select class="fac" name="fac" id="country">
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
                                    <select name="" id="state">
                                        <option value="" disabled>--La faculte d'abord---</option>

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

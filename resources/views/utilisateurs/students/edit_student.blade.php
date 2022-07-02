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
            <h3 style="margin:10px 35px;color:var(--primary)">Modifier les informations de {{ $student->nom_etu }} {{ $student->prenom_etu }}</h3>
            <form action="{{ url('insert_student') }}" method="POST">
                @csrf
                <div style="" class="titre">
                    <h3 style="text-align: center;margin-top:20px;">1. Informations Generales</h3>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Annee Academique</label>
                            </div>

                        </div>
                        <div class="input_row">
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="select">
                                    <select name="annee_aca" id="">
                                        <option value="" selected="true" disabled>--Selectionner l'A/A---</option>
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025">2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                    </select>
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
                                    <input name="promotion" min="0" value="{{ $student->promotion }}"  type="number" placeholder="07">
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="row">
                            <div class="input_row">
                                <div class="labels">
                                    <label for="">Faculte</label>
                                </div>
                                <div class="input_group">
                                    <div class="icon">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                    <div class="select">
                                        <select class="fac" name="faculte" id="country">
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
                                            <option value="" disabled>--La faculte d'abord---</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input_row">
                                <div class="labels">
                                    <label for="">Classe</label>
                                </div>

                            </div>
                            <div class="input_row">
                                <div class="input_group">
                                    <div class="icon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="select">
                                        <select name="classe" id="">
                                            <option value="" selected="true" disabled>--Selectionner l'A/A---</option>
                                            <option value="BAC I">BAC I</option>
                                            <option value="BAC II">BAC II</option>
                                            <option value="BAC III">BAC III</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <div style="" class="titre">
                    <h3 style="text-align: center;margin-top:20px;">2. Informations Personnelles</h3>
                </div>
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
                                <input name="nom" value="{{ $student->nom_etu }}" type="text" placeholder="Nom...">
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
                                <input name="prenom" value="{{ $student->prenom_etu }}" type="text" placeholder="Prenom...">
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
                                <input name="email" value="{{ $student->email_etu }}" type="email" placeholder="exemple@biu.bi">
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
                                <input name="birthdate" value="{{ $student->date_naiss }}" class="date" type="date" placeholder="sdi">
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
                                    <input name="phone" value="{{ $student->telephone_etu }}" type="number" placeholder="76 78 76 89">
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
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Adresse</label>
                            </div>
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="input">
                                    <input name="address" value="{{ $student->adress_etu }}" type="text" placeholder="Kigobe...">
                                </div>
                            </div>
                        </div>
                        <div class="input_row">
                            <div class="labels">
                                <label for="">Etat Civil</label>
                            </div>
                            <div class="input_group">
                                <div class="icon">
                                    <i class="fa-brands fa-mendeley"></i>
                                </div>
                                <div class="select">
                                    <select name="etat" id="">
                                        <option value="" selected="true" disabled>--Selection votre etat---</option>
                                        <option value="Celibataire">Celibataire</option>
                                        <option value="Marie">Marie</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="button">
                    <button>Modifier</button>
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

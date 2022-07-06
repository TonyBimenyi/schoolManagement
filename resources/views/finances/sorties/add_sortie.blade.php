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
    @include('layouts.second_row.sort')
    <div class="form">
        <h3 style="margin:10px 35px;color:var(--primary)">Ajouter une sortie</h3>
        <form action="">
            <div class="col">
                <div class="row">
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Type de Sortie</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="select">
                                <select name="" id="">
                                    <option value="" disabled>--Selectionner la Sortie---</option>
                                    <option value="">Achat</option>
                                    <option value="">Approvisionnement</option>
                                    <option value="">Paiement</option>
                                    <option value="">Salaire</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Designation</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-file-pen"></i>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="designation...">
                            </div>
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="labels">
                            <label for="">Montant</label>
                        </div>
                        <div class="input_group">
                            <div class="icon">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="1000000...">
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

@endsection
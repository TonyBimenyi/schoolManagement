<link rel="stylesheet" href="{{asset('frontend/css/recu.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/form.css')}}">

  <div class="buttons">
    <div class="retour">
        <button><a href="{{ url('list_minos') }}" onclick="print.window()">Retour</a></button>
    </div>
    <div class="print">
        <button><a href="" onclick="window.print()">Imprimer</a></button>
    </div>
</div>
<div class="recu_container">
    <div class="recu_heaeder">

        <div class="date">
            @php
            $mytime = Carbon\Carbon::now();
        @endphp
             <p>Date: {{$mytime->toDateTimeString()}}</p>
        </div>
    </div>
    <div class="title">
        <h2 style="text-align: center">RECU DE PAIEMENT DU MINERVAL</h2>
    </div>
    <div class="recu_body">
        <p>Recu de Monsieur Yvan Igor, etudiant de BAC III en Genie Logiciel</p>
        <p>pour le paiement du minerval du 3e tranche,</p>
        <p>Somme de: 3500000 Fbu</p>
    </div>
</div>

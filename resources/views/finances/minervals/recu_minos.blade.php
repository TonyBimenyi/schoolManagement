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
        <p>Recu de
            @if ($minervals->sexe_etu=='Homme')
                {{ 'Monsieur' }}
            @else
                 {{ 'Madame' }}
            @endif
          {{ $minervals->nom_etu }} {{ $minervals->prenom_etu }}, etudiant de {{ $minervals->classe }} en {{ $minervals->nom_spec }}</p>
        <p>pour le paiement du minerval du {{ $minervals->tranche }}e tranche,</p>
        <p>Somme de: {{ number_format($minervals->montant_entree) }} Fbu</p>
    </div>
</div>

@extends('layouts.navside')
@section('da')
<head>
    <link rel="stylesheet" href="{{asset('frontend/css/top.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/form.css')}}">
</head>
@php
    $aho_tugeze = 30000000;
@endphp
<div class="container">
    @include('layouts.top_row.fin_top')
    <div class="table">
        <div class="table_content">

            <div class="table_list">
                <table>
                    <thead>
                        <tr class="title_bar">

                            <th>DATE</th>
                            <th>TYPE DEPENSE</th>
                            <th>TYPE REVENU</th>
                            <th>DEPENSE</th>
                            <TH>REVENU</TH>
                            <TH>SOLDE</TH>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>

                                    <td>-</td>
                                    <td>-</td>
                                    <td>Rapport</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>{{ number_format(30000000)}} Fbu</td>
                            </tr>
                            @foreach ($stats as $s)

                            <tr id="table">
                                <td>
                                 {{ $s->created_at }}
                                </td>
                                <td>
                                    @if ($s->type_depense=="")
                                        {{ '-' }}
                                    @else
                                        {{ $s->type_depense }}
                                    @endif
                                </td>
                                <td>
                                    @if ($s->type_revenu=="")
                                    {{ '-' }}
                                    @else
                                        {{ $s->type_revenu }}
                                    @endif
                                </td>
                                <td>
                                    @if ($s->montant_depense=="")
                                    {{ '-' }}
                                    @else
                                        {{ number_format($s->montant_depense) }} Fbu
                                    @endif
                                </td>
                                <td>
                                    @if ($s->montant_revenu=="")
                                    {{ '-' }}
                                    @else
                                        {{ number_format($s->montant_revenu) }} Fbu
                                    @endif
                                </td>
                                <td>
                                    {{ number_format(30000000+$s->montant_revenu-$s->montant_depense) }} Fbu
                                </td>

                            </tr>

                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

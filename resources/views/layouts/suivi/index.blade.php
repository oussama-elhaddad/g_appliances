@extends('welcome')

@php
    $thead=['OFFRE COMMERCIAL','MONTANT','TYPE PRESTATION','COMPTE RENDU','POV']
@endphp

@section('content')
    <main>
    <title>Suivis</title>
        <table>
            <thead>
                <tr>
                    <th class="create" colspan={{count($thead)}}>
                        <a class="create" style="color: rgb(67, 231, 67);text-transform:uppercase;" href="/suivis/create">
                            <h5>create new suivi</h5>
                        </a>
                    </th>
                </tr>
                <tr>
                    @foreach($thead as $th)
                    <th>{{$th}}</th>
                   @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($suivis as $suivi)
                    <tr>
                        <td>{{$suivi->offre_commercial}}</td>
                        <td>{{$suivi->montant}}</td>
                        <td>{{$suivi->compte_rendu}}</td>
                        <td>{{$suivi->pov_id}}</td>
                        <td class="actions">
                            <form action="{{ route('suivis.edit', $suivi->id) }}" method="PUT">
                                <button type="submit">
                                <img id="deleteIcon" src={{asset('actions/edit.svg')}} alt="edit suivi">
                                </button>
                            </form>
                            <form action="{{ route('suivis.destroy', $suivi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                <img id="deleteIcon" src={{asset('actions/delete.svg')}} alt="delete suivi">
                                </button>
                            </form>
                          </td>
                    </tr>
                @endforeach
            </tbody>
        </table>  
    </main>
@endsection
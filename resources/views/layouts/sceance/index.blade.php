@extends('welcome')

@php
    $thead=['DATE SCEANCE','RESUMER','PARTICIPANT','ACTIONS']
@endphp

@section('content')
    <main>
    <title>Sceances page</title>
        <table>
            <thead>
                <tr>
                    <th class="create" colspan={{count($thead)}}>
                        <a class="create" style="color: rgb(67, 231, 67);text-transform:uppercase;" href="/sceances/create">
                            <h5>create new sceance</h5>
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
                @foreach($sceances as $sceance)
                <tr>
                    <td>{{$sceance->date_sceance}}</td>
                    <td>{{$sceance->resumer}}</td>
                    <td>{{$sceance->participant}}</td>
                    <td class="actions">
                        <form action="{{ route('sceances.edit', $sceance->id) }}" method="PUT">
                            <button type="submit">
                            <img id="deleteIcon" src={{asset('actions/edit.svg')}} alt="edit client">
                            </button>
                        </form>
                        <form action="{{ route('sceances.destroy', $sceance->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                            <img id="deleteIcon" src={{asset('actions/delete.svg')}} alt="delete client">
                            </button>
                        </form>
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </main>
@endsection
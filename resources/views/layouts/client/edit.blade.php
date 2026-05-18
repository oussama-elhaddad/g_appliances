@extends('welcome')

@php
    $thead=['LIBELLE','SECTEUR','ACTIVITE']
@endphp

@section('content')
    <main>
    <title>Edit client page.</title>
        <form method="POST" action="{{ route('clients.update', $clients->id) }}">
            @method('PUT')
            @csrf
                <table>
                <thead>
                @foreach($thead as $th)
                    <th>{{$th}}</th>
                  @endforeach
                </thead>
                <tbody>
                    <td><input type="text" value="{{$clients->libelle}}" name="libelle"></td>
                    <td><select name="secteur">
                        @if($clients->secteur==='prive')
                            <option selected value="prive">prive</option>
                            <option value="public">public</option>
                        @else
                            <option value="prive">prive</option>
                            <option selected value="public">public</option>
                        @endif
                    </select></td>
                    <td><input name="activite" value="{{$clients->activite}}" type="text"></td>
                </tbody>
                <tfoot>
                    <tr><td colspan={{count($thead)}}><input value="Ajouter" type="submit"></td></tr>
                </tfoot>
            </table>
        </form>
    </main>
@endsection
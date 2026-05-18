@extends('welcome')

@php
    $thead=['NOM','PRENOM','TELEPHONE','FONCTION','CLIENT','EMAIL']
@endphp

@section('content')
    <main>
    <title>Edit contact page.</title>

        <form action="{{route('contacts.update',$contacts->id)}}" method="POST">
            @method('PUT')
            @csrf
            <table>
                <thead>
                    <tr>
                        @foreach($thead as $th)
                            <th>{{$th}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input value="{{$contacts->nom}}" placeholder="nom" type="text" name="nom">
                        </td>
                        <td>
                            <input value="{{$contacts->prenom}}" placeholder="prenom" type="text" name="prenom">
                        </td>
                        <td>
                            <input value="{{$contacts->telephone}}" placeholder="telephone" type="tel" name="telephone">
                        </td>
                        <td>
                            <input value="{{$contacts->fonction}}" placeholder="fonction" type="text" name="fonction">
                        </td>
                        <td>
                                <select name="client_id">
                                @foreach($clients as $client)
                                    @if($contacts->client_id === $client->id)
                                        <option selected value="{{$client->id}}">{{$client->id}}</option>
                                    @else
                                    <option value="{{$client->id}}">{{$client->id}}</option>
                                    @endif
                                 @endforeach
                                </select>
                        </td>
                        <td>
                            <input value="{{$contacts->email}}" name="email" placeholder="email" type="email">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="{{count($thead)}}">
                            <input type="submit" value="Ajouter">
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </main>
@endsection
@extends('welcome')

@php
    $thead=['NOM','PRENOM','TELEPHONE','FONCTION','CLIENT','EMAIL']
@endphp

@section('content')
    <main>
    <title>Create contact page.</title>

            <form action="{{route('contacts.store')}}" method="POST">
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
                                <input required placeholder="nom" type="text" name="nom">
                            </td>
                            <td>
                                <input required placeholder="prenom" type="text" name="prenom">
                            </td>
                            <td>
                                <input required placeholder="telephone" type="tel" name="telephone">
                            </td>
                            <td>
                                <input required placeholder="fonction" type="text" name="fonction">
                            </td>
                            <td>
                                <select name="client_id">
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->id}}</option>
                                @endforeach
                                </select>
                            </td>
                            <td>
                                <input required placeholder="xxxx@exemple.xx" type="email" name="email">
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="{{count($thead)}}">
                                <input value="Ajouter" type="submit">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
    </main>
@endsection
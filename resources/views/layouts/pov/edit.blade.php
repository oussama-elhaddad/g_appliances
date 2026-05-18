@extends('welcome')


@php
    $thead=['APPLIANCE','CLIENT','DATE DEBUT','DATE FIN','DESCRIPTION','COMPTE MANAGER','INGENIEUR CYBERSECURITE','ANALYSE CYBERSECURITE','LIBELLE POV']
@endphp

@section('content')
    <main>
    <title>Edit POV page.</title>
            <form action="{{route('povs.update',$povs->id)}}" method="POST">
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
                            <select name="appliance_id">
                            @foreach($appliances as $appliance)
                                @if($povs->appliance_id === $appliance->id)
                                    <option value="{{$appliance->id}}" selected>{{$appliance->id}}</option>
                                @else
                                    <option value="{{$appliance->id}}">{{$appliance->id}}</option>
                                @endif
                            @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="client_id">
                                @foreach($clients as $client)
                                    @if($povs->client_id === $client->id)
                                        <option value="{{$client->id}}" selected>{{$client->id}}</option>
                                    @else
                                        <option value="{{$client->id}}">{{$client->id}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input value="{{$povs->date_debut}}" type="date" name="date_debut">
                        </td>
                        <td>
                            <input value="{{$povs->date_fin}}" type="date" name="date_fin">
                        </td>
                        <td>
                            <input value="{{$povs->description}}" type="text" name="description">
                        </td>
                        <td>
                            <input value="{{$povs->compte_manager}}" type="text" name="compte_manager">
                        </td>
                        <td>
                            <input value="{{$povs->ingenieur_cybersecurite}}" type="text" name="ingenieur_cybersecurite">
                        </td>
                        <td>
                            <input value="{{$povs->analyse_cybersecurite}}" type="text" name="analyse_cybersecurite">
                        </td>
                        <td>
                            <input value="{{$povs->libelle_pov}}" type="text" name="libelle_pov">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="{{count($thead)}}">
                            <input type="submit" value="Modifier">
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </main>
    
@endsection
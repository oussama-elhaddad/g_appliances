@extends('welcome')


@php
    $thead=['APPLIANCE','CLIENT','DATE DEBUT','DATE FIN','DESCRIPTION','COMPTE MANAGER','INGENIEUR CYBERSECURITE','ANALYSE CYBERSECURITE','LIBELLE POV']
@endphp

@section('content')
    <main>
    <title>Create POV page.</title>
        <form action="{{ route('povs.store') }}" method="POST">
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
                                @foreach ($appliances as $appliance)
                                    <option value="{{$appliance->id}}">{{$appliance->libelle}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="client_id">
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->libelle}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input required type="date" name="date_debut"></td>
                        <td><input required type="date" name="date_fin"></td>
                        <td><input required placeholder="description" type="text" name="description"></td>
                        <td><input required placeholder="compte_manager" type="text" name="compte_manager"></td>
                        <td><input required placeholder="ingenieur_cybersecurite" type="text" name="ingenieur_cybersecurite"></td>
                        <td><input required placeholder="analyse_cybersecurite" type="text" name="analyse_cybersecurite"></td>
                        <td><input required placeholder="libelle_pov" type="text" name="libelle_pov"></td>   
                </tr>
            </tbody>
            <tfoot>
                <td colspan={{count($thead)}}><input value="Ajouter" type="submit"></td>
            </tfoot>
        </table>
    </form>
    </main>
    
@endsection
@extends('welcome')

@php
    $thead=['OFFRE COMMERCIAL','MONTANT','TYPE PRESTATION','COMPTE RENDU','POV']
@endphp

@section('content')
    <main>
        <form action="{{route('suivis.store')}}" method="POST">
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
                            <select name="offre_commercial">
                                <option value="0">non</option>
                                <option value="1">oui</option>
                            </select>
                        </td>
                        <td>
                            <input name="montant" type="number" class="no-spinner">
                        </td>
                        <td>
                            <select name="type_prestation_id">
                                @foreach($types as $type)
                                    <option value={{$type->id}}>{{$type->id}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input name="compte_rendu" type="text">
                        </td>
                        <td>
                            <select name="pov_id">
                                @foreach($povs as $pov)
                                    <option value={{$pov->id}}>{{$pov->id}}</option>
                                @endforeach
                            </select>
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
@extends('welcome')

@php
    $thead=['DATE SCEANCE','POV','RESUMER','PARTICIPANT']
@endphp

@section('content')
<main>
    <form action="{{route('sceances.store')}} " method="POST">
    @csrf
    <table>
        <thead>
            <tr>
            @foreach ($thead as $th)
                <th>{{$th}}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input name="date_sceance" type="date"></td>
                <td>
                    <select name="pov_id">
                        @foreach($povs as $pov)
                            <option value="{{$pov->id}}">{{$pov->libelle_pov}}</option>
                        @endforeach
                    </select>
                </td>
                <td><input name="resumer" type="text"></td>
                <td><textarea name="participant" id="" cols="20" rows="5"></textarea></td>
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
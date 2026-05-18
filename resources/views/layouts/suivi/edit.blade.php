@extends('welcome')

@php
    $thead=['OFFRE COMMERCIAL','MONTANT','TYPE PRESTATION','COMPTE RENDU','POV']
@endphp

@section('content')
    <main>
        <form action="{{route('suivis.store')}}" method="POST">
            @csrf
            @method('put')
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
                    @foreach($suivis as $suivi)  
                    <td>
                        <select name="" id="">
                            @if($suivi->offre_commercial===1)
                                <option value="1">oui</option>
                                @else
                                <option value="0">non</option>
                            @endif
                        </select>
                    </td>
                    @endforeach
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
@extends('welcome')

@php
    $thead=['DATE SCEANCE','RESUMER','PARTICIPANT']
@endphp

@section('content')
    <main>
        <form action="{{route('sceances.update',$sceances->id)}}" method="POST">
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
                <td>
                    <input value={{$sceances->date_sceance}} name="date_sceance" required type="date">
                </td>
                <td>
                    <input value={{$sceances->resumer}} name="resumer" required placeholder="Resumer" type="text">
                </td>
                <td>
                    <textarea style="padding:5px;color:white;outline:none;border: .5px solid rgb(150, 177, 202);background-color: transparent" value={{$sceances->participant}} required name="participant" id="" cols="20" rows="5">{{$sceances->participant}}</textarea>
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
@extends('welcome')
@php
    $thead=['LIBELLE','SECTEUR','ACTIVITE']
@endphp




@section('content')
    <main>
    <title>Create client page.</title>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <table>
                <thead>
                    @foreach($thead as $th)
                    <th>{{$th}}</th>
                     @endforeach
                </thead>
                <tbody>
                    <tr style="background-color: transparent">
                        <td>
                            <input name="libelle" placeholder="libelle" type="text">
                        </td>
                        <td style="background-color: rgb(70, 92, 120);border-radius:5px;">
                            <select name="secteur" >
                                <option value="prive">prive</option>
                                <option value="public">public</option>
                            </select>
                        </td>
                        <td>
                            <input placeholder="activite" name="activite" type="text">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <input value="Ajouter" type="submit">
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>




    </main>
@endsection
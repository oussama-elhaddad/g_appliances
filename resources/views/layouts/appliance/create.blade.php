@extends('welcome')
@php
    $thead=['LIBELLE','TYPE','DBID','DISPONIBLE','REFERENCES']
@endphp

@section('content')
    <main>
    <title>Create appliance page.</title>
        <form action="{{ route('appliances.store') }}" method="POST">
            @csrf
            <table>
                <thead>
                    @foreach($thead as $th)
                        <th>{{ $th }}</th>
                    @endforeach
                </thead>
                <tbody>
                    <tr style="background-color: transparent">
                        <td>
                            <input autofocus required name="libelle" placeholder="libelle" type="text">
                        </td>
                        <td>
                            <select style="background-color: rgb(70, 92, 120);border-radius:5px;height:40px;" name="type_appliance_id" id="">
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->libelle}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input required name="dbid" placeholder="dbid" type="text">
                        </td>
                        <td>
                            <select style="background-color: rgb(70, 92, 120);border-radius:5px;height:40px;" name="disponible" id="">
                                <option value="0">non</option>
                                <option value="1">oui</option>
                            </select>
                        </td>
                        <td>
                            <input required name="references" placeholder="references" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td colspan={{count($thead)}}>
                            <input value="Ajouter" type="submit">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <form action="" method="POST">
                        @csrf
                    <tr>
                        <td colspan="2">
                            <a style="color: white;float:left;" href="{{route('appliances.create_type')}}">create new type</a>
                        </td>
                    </tr>
                </form>
                </tfoot>
            </table>
        </form>
    </main>
@endsection
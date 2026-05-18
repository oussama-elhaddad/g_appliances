@extends('welcome')

@php
    $thead=['LIBELLE','SECTEUR','ACTIVITE','ACTIONS']
@endphp

@section('content')
    <main>
    <title>Clients</title>
            <table>
                <thead>
                    <tr>
                        <th class="create" colspan={{count($thead)}}>
                            <a class="create" href="/clients/create">
                                <h5>create new client</h5>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input  autofocus id="filter" oninput="filter()" placeholder="filter" style="text-align:left;border-radius:3px;padding:6px;color:white;background-color:rgb(70, 92, 120);border:none;outline:none;width:11em;margin-bottom:10px;" type="text">
                        </th>
                        <th>
                            <img style="float:left;position:relative;bottom:5px;" id="filterIcon" src={{asset('actions/filter.svg')}} alt="filter">
                        </th>
                    </tr>
                    <tr>
                        @unless(empty($clients))
                            @foreach($thead as $th)
                            <th>{{$th}}</th>
                            @endforeach
                        @else
                        @foreach($thead as $th)
                            <th>{{$th}}</th>
                        @endforeach
                        @endunless
                      </tr>
                </thead>
                <tbody>
                    @unless(empty($clients))
                    @endunless
                    @foreach ($clients as $client)
                    <tr>
                      <td class="filterContent">{{$client->libelle}}</td>  
                      <td class="filterContent">{{$client->secteur}}</td>  
                      <td class="filterContent">{{$client->activite}}</td>
                      <td class="actions">
                        <form action="{{ route('clients.edit', $client->id) }}" method="PUT">
                            <button type="submit">
                            <img id="deleteIcon" src={{asset('actions/edit.svg')}} alt="edit client">
                            </button>
                        </form>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                            <img id="deleteIcon" src={{asset('actions/delete.svg')}} alt="delete client">
                            </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="paginate" colspan={{count($thead)}}>
                            <h3>{{$clients}}</h3>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <script>
                function filter() {
                    var input, filter, table, tr, td, i, j, content;
                    input = document.getElementById("filter");
                    filter = input.value.toUpperCase();
                    table = document.querySelector("table");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td");
                        for (j = 0; j < td.length; j++) {
                            if (td[j].classList.contains("filterContent")) {
                                content = td[j].textContent || td[j].innerText;
                                if (content.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                    break;
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                }
            </script>
    </main>
@endsection
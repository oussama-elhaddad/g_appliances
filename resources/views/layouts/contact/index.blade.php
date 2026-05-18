@extends('welcome')

@php
    $thead=['NOM','PRENOM','TELEPHONE','FONCTION','CLIENT','EMAIL','ACTIONS']
@endphp

@section('content')
    <main>
        <title>Contacts</title>
            <table>
                <thead>
                    <tr>
                        <th class="create" colspan={{count($thead)}}>
                            <a class="create" style="color: rgb(67, 231, 67);text-transform:uppercase;" href="/contacts/create">
                                <h5>create new Contact</h5>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input autofocus id="filter" oninput="filter()" placeholder="filter" style="border-radius:3px;padding:6px;color:white;background-color:rgb(70, 92, 120);border:none;outline:none;width:11em;margin-bottom:10px;" type="text">
                        </th>
                        <th>
                            <label for="filter">
                                <img style="float:left;position:relative;bottom:5px;" id="filterIcon" src={{asset('actions/filter.svg')}} alt="filter"> 
                            </label>
                        </th>
                    </tr>
                    <tr>
                        @foreach($thead as $th)
                            <th>{{$th}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td class="filterContent" >{{$contact->nom}}</td>
                            <td class="filterContent" >{{$contact->prenom}}</td>
                            <td class="filterContent" >{{$contact->telephone}}</td>
                            <td class="filterContent" >{{$contact->fonction}}</td>
                                @foreach($clients as $client)
                                    @if($client->id === $contact->client_id)
                                        <td class="filterContent" >{{$contact->client_id}}</td>
                                    @endif
                                @endforeach
                            <td class="filterContent" >{{$contact->email}}</td>
                            <td class="actions">
                                <form action="{{ route('contacts.edit', $contact->id) }}" method="PUT">
                                    <button type="submit">
                                    <img id="deleteIcon" src={{asset('actions/edit.svg')}} alt="edit client">
                                    </button>
                                </form>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
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
            </table>
    </main>
    <script defer>
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
@endsection
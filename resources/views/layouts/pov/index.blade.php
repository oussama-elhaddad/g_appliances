@extends('welcome')


@php
    $thead=['DATE DEBUT','DATE FIN','DESCRIPTION','COMPTE MANAGER','INGENIEUR CYBERSECURITE','ANALYSE CYBERSECURITE','LIBELLE POV','ACTIONS']
@endphp

@section('content')
    <main>
    <title>POVs</title>
        <table>
            <thead>
                <tr>
                    <th class="create" colspan={{count($thead)}}>
                        <a class="create" style="color: rgb(67, 231, 67);text-transform:uppercase;" href="/povs/create">
                            <h5>create new pov</h5>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <input  autofocus id="filter" oninput="filter()" placeholder="filter" style="text-align:left;border-radius:3px;padding:6px;color:white;background-color:rgb(70, 92, 120);border:none;outline:none;width:11em;margin-bottom:10px;float:left;" type="text">
                    </th>
                    <th>
                        <img style="float:left;position:relative;bottom:5px;" id="filterIcon" src={{asset('actions/filter.svg')}} alt="filter">
                    </th>
                </tr>
                <tr>
                @unless(empty($povs))
                        @foreach($thead as $th)
                         <th>{{$th}}</th>
                        @endforeach
                @endunless
                  </tr>
            </thead>
            <tbody>
                    @foreach ($povs as $pov)
                <tr>

                        <td class="filterContent" >{{$pov->date_debut}}</td>
                        <td class="filterContent" >{{$pov->date_fin}}</td>
                        <td class="filterContent" >{{$pov->description}}</td>
                        <td class="filterContent" >{{$pov->compte_manager}}</td>
                        <td class="filterContent" >{{$pov->ingenieur_cybersecurite}}</td>
                        <td class="filterContent" >{{$pov->analyse_cybersecurite}}</td>
                        <td class="filterContent" >{{$pov->libelle_pov}}</td>
                        <td class="actions">
                            <form action="{{ route('povs.edit', $pov->id) }}" method="PUT">
                                <button type="submit">
                                <img id="deleteIcon" src={{asset('actions/edit.svg')}} alt="edit appliance">
                                </button>
                            </form>
                            <form action="{{ route('povs.destroy', $pov->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                <img id="deleteIcon" src={{asset('actions/delete.svg')}} alt="delete appliance">
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
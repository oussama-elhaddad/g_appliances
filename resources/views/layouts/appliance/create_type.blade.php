@extends('welcome')


@section('content')
<main>
    <title>Create appliances type page.</title>
    <form action={{route('appliances.store_type')}} method="POST">
        @csrf
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        <h2 style="text-transform: capitalize">Create type</h2>
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="libelle">Libelle</label>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: transparent">
                    <td>
                        <input required autofocus style="width: 100%" name="libelle" placeholder="libelle" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Ajouter">
                    </td>
                    <td>
                        <input id="filter" oninput="filterT()" style="text-align:left;" placeholder="filter" type="text">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <h4>
                            Types
                        </h4>
                    </td>
                    <td>
                        <h4>
                            actions
                        </h4>
                    </td>
                </tr>
                @foreach($TypeAppliances as $TypeAppliance)
                <tr>
                    <td class="filterContent" >{{$TypeAppliance->libelle}}</td>
                    <td style="width: 95px;position: relative;left:30px;" class="actions">
                        <form action="{{ route('appliances.edit_type', $TypeAppliance->id) }}" method="PUT">
                            <button type="submit">
                                <img id="deleteIcon" src={{asset('actions/edit.svg')}} alt="edit appliance">
                            </button>
                        </form>
                        <form action="{{ route('appliances.destroy_type', $TypeAppliance->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <img id="deleteIcon" src={{asset('actions/delete.svg')}} alt="delete appliance">
                            </button>
                        </form>
                    </td>
                </tr>

                @endforeach
                <tr>
                    <td colspan="2" class="paginate">
                        <h3>{{$TypeAppliances}}</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a style="color: white;" href="/appliances/create">return to appliance create page</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</main>
<script>
    function filterT() {
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
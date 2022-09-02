@foreach ($news as $n)
<tr>
    <th scope = "row">{{$loop->index}}</th>
    <td>{{$n->name}}</td>
    <td>{{$n->active == 1 ? "Active" : "Passiv"}}</td>
    <td>
        <button class="btn btn-sm btn-primary">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
    </td>
</tr>
@endforeach
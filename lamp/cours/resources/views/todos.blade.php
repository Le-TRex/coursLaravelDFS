<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



<table class="table">
    <thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">text</th>
    </tr>
    </thead>
    <tbody>

    @foreach($todos as $todo)
        <tr>
            <th scope="row">{{ $todo->id }}</th>
            <td>{{ $todo->name }}</td>
            <td>{{ $todo->description }}</td>

        </tr>
    @endforeach
    </tbody>
</table>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



<table class="table">
    <thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
<<<<<<< HEAD
        <th scope="col">description</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
=======
        <th scope="col">text</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>

>>>>>>> 60c54d3df8b632c5721402655b847ef84543f228
    </tr>
    </thead>
    <tbody>

    @foreach($todos as $todo)
        <tr>
            <th scope="row">{{$todo->id}}</th>
            <td>{{$todo->name}}</td>
            <td>{{$todo->description}}</td>
            <td><a>Update</a></td>
            <td><a>Delete</a></td>
        </tr>
    @endforeach

    </tbody>
</table>



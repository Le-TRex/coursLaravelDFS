<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


@include('Components.flash')
<a class="button button-blue" href="{{route('CreateTodo')}}">Create</button>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>

        <th scope="col">description</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>

    </tr>
    </thead>
    <tbody>

    <form action="{{route('CreateTodo')}}" method="get">
        @csrf
        <button type="submit" class="btn btn-primary mb-2">Créer un nouveau to do</button>
    </form>


    @foreach($todos as $todo)
        <tr>
            <th scope="row">{{$todo->id}}</th>
            <td>{{$todo->name}}</td>
            <td>{{$todo->description}}</td>
            <td><a href="{{route('TodoEdit', $todo->id)}}">Update</a></td>
            <td>

                <form action="{{route('DeleteTodo', $todo->id)}}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit" class="btn btn-primary mb-2">Delete</button>
                </form>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>



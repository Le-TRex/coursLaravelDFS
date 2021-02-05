<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

@include('Components.flash')

<label for="staticEmail" class="col-sm-2 col-form-label">id {{$todo->id}}</label>


<form method="post" action="{{ route('UpdateTodo', $todo->id) }}">
    @csrf
    @method("patch")
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control-plaintext" id="staticEmail" value="{{$todo->name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">text</label>
        <div class="col-sm-10">
            <input type="text" name="description" class="form-control" id="inputPassword" placeholder="Password" value="{{$todo->description}}">
        </div>
    </div>

{{--TODO : modifier champs formulaires --}}

    <button type="submit" class="btn btn-primary mb-2">Update</button>

</form>


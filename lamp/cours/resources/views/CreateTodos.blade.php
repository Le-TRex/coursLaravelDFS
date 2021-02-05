<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


{{--<form action="{{ route('CreateTodoPost') }}" method="post">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="name">Nom du To Do</label>--}}
{{--        <input type="text" class="form-control" id="name" placeholder="Enter to do name">--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label for="description">Description</label>--}}
{{--        <input type="text" class="form-control" id="description" placeholder="description">--}}
{{--    </div>--}}

{{--    <button type="submit" class="btn btn-primary">Enregistrer</button>--}}
{{--</form>--}}


@include('Components.flash')


<form method="post" action="{{route('CreateTodoPost')}}">
    @csrf
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control-plaintext" id="staticEmail" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">text</label>
        <div class="col-sm-10">
            <input type="text" name="description" class="form-control" id="inputPassword" placeholder="Password" value="">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Create</button>

</form>


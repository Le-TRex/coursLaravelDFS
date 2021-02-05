<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

@include('Components.flash')

<form action="{{ route('CreateNewUser') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter to do name">
    </div>

    <div class="form-group">
        <label for="password">Description</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="description">
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>


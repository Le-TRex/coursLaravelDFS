<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

@include('Components.flash')

<form action="{{route('createUser')}}" method="get">
    @csrf
    <button type="submit" class="btn btn-primary mb-2">Créer un nouvel utilisateur</button>
</form>

users


<form action="{{ route('CreateTodoPost') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nom du To Do</label>
        <input type="text" class="form-control" id="name" placeholder="Enter to do name">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="description">
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@extends('.Layouts.Front')

@section('content')


    <a href="{{route('home')}}">Home</a>

    <h1>TUT TUT POUET POUET LA VOILÀÀÀ ! LA TOTOMOBILEEEUUUH !!</h1>

    @if(isset($prenom))
        {{$prenom}}
        {{$email}}
    @endif

<a href="{{route('home')}}">Home</a>

    <form method="post" action="{{ route('PostProfil') }}">

        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">prénom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputPassword1" placeholder="Prenom">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

{{--    <form method="POST" action="/">--}}
{{--        @csrf--}}
{{--        @method('POST')--}}

{{--        <label for="firstName">firstName</label>--}}
{{--        <input id="firstName" type="text">--}}

{{--        <label for="lastName">firstName</label>--}}
{{--        <input id="lastName" type="text">--}}

{{--        <input type="submit" value="Envoyer ! ">--}}

{{--    </form>--}}

@endsection

@extends('.Layouts.Front')

@section('content')
    TUT TUT POUET POUET LA VOILÀÀÀ ! LA TOTOMOBILEEEUUUH !!

    <form method="POST" action="/">
        @csrf
        @method('POST')

        <label for="firstName">firstName</label>
        <input id="firstName" type="text">

        <label for="lastName">firstName</label>
        <input id="lastName" type="text">

        <input type="submit" value="Envoyer ! ">

    </form>
@endsection

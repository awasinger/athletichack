@section("content")
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="card rounded-corner is-borderless">

    <div class="columns is-centered">
        <div class="column">
            <h1 class="title is-1 title-border center">Share Your League: </h1>
        </div>
    </div>

    <div class="columns is-centered">
        <div class="column">
            <h2 class="subtitle indent is-1 center">2AFC4MC</h2>
        </div>
    </div>

    <div class="columns is-centered">
        <div class="column">
            <h3 class="is-info title-border center">Send this code to your friends, so they can join the league</h3>
        </div>
    </div>


    <div class="center-element title-border">
        <a href="/viewLeague">
            <button class="button is-primary" type="button">Return to League</button>
        </a>
    </div>

</div>
@endsection

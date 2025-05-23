<x-main>
    <x-navbar></x-navbar>
    <div class="jumbotron">
        <h1 class="display-4">ciao, sei autenticato come: {{ Auth::user()->is_admin ? 'admin' : 'utente' }}</h1>
        @auth
            <a href="{{ route('articles.index') }}">lista articoli</a>
        @endauth
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
</x-main>

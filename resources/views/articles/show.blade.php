<x-main>

    <div class="col-lg-6 col-md-8 mx-auto mt-5">
        <h1 class="fw-light">Titolo: {{ $article->title }}</h1>
        <h3 class="fw-light">Pagine: {{ $article->description }}</h3>
        <p class="lead text-body-secondary">
            <img src="{{ Storage::url($article->image) }}" alt="">
        </p>
    </div>
</x-main>

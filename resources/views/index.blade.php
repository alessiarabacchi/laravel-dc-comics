{{-- resources/views/comics/index.blade.php --}}

@foreach ($comics as $comic)
    <div>
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
        <a href="{{ route('comics.show', $comic) }}">Dettagli</a>
    </div>
@endforeach

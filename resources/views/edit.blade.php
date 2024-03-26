

<form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Titolo</label>
    <input type="text" id="title" name="title" value="{{ $comic->title }}">

    <label for="description">Descrizione</label>
    <textarea id="description" name="description">{{ $comic->description }}</textarea>

    <button type="submit">Aggiorna</button>
</form>

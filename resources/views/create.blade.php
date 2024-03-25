{{-- resources/views/comics/create.blade.php --}}

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Titolo</label>
    <input type="text" id="title" name="title">
    <label for="description">Descrizione</label>
    <textarea id="description" name="description"></textarea>
    <button type="submit">Salva</button>
</form>

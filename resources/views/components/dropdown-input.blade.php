@props(['authors'])

<div>
    <select name="author_id">
        @foreach($authors as $author)
            <option value="{{$author->id}}"> {{ $author->first_name . ' ' . $author->last_name }} </option>
        @endforeach
    </select>
</div>

@foreach ($issues as $i)
    <option value="{{ $i->id }}">{{ $i->name }}</option>
@endforeach


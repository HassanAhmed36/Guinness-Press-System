@foreach ($issues as $i)
    <option value="{{ $i->name }}">{{ $i->name }}</option>
@endforeach

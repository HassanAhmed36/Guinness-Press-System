@foreach ($volumes as $v)
    <option disabled selected>Select Volume</option>
    <option value="{{ $v->id }}">{{ $v->name }}</option>
@endforeach

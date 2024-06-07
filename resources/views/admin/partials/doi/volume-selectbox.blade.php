@foreach ($volumes as $v)
    <option disabled selected>Select Volume</option>
    <option value="{{ $v->name }}">{{ $v->name }}</option>
@endforeach

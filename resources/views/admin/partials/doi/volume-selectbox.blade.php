<option disabled selected>Select Volume</option>
@foreach ($volumes as $v)
    <option value="{{ $v->name }}">{{ $v->name }}</option>
@endforeach

<option disabled selected>Select Volume</option>
@foreach ($volumes as $v)
    <option value="{{ $v->id }}" data-id="{{$v->name}}">{{ $v->name }}</option>
@endforeach

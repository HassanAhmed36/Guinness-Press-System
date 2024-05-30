@foreach ($volumes as $v)
    <option value="{{ $v->id }}">{{ $v->name }}</option>
@endforeach

@foreach ($issues as $i)
    <option disabled selected>Select Issue</option>
    <option value="{{ $i->id }}">{{ $i->name }}</option>
@endforeach

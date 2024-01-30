@foreach ($countries as $country)
    <label for="country-{{ $country->id }}" class="country-exclude-item">
        <div>
            {{ $country->name }}
        </div>
        <input id="country-{{ $country->id }}" type="checkbox" name="country_id[]" class="country_input" value="{{ $country->id }}" country_name="{{ $country->name }}">
    </label>


@endforeach

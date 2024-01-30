@foreach ($subCategries as $subCategory)
    <label for="sbcategory-{{ $subCategory->id }}" rate="{{ $subCategory->rate }}" subcategory_name="{{ $subCategory->subcategory_name }}"  class="subcategory-item {{ $loop->index == 0 ? 'active' : '' }}" min_price="0.02" >
        <div>{{ $subCategory->subcategory_name }}</div>
        <input type="radio" id="sbcategory-{{ $subCategory->id }}" min_price="0.02" value="{{ $subCategory->id }}" name="subcategory_id[]" class="subcategory_input d-none">
    </label>
@endforeach

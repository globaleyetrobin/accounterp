<option value="">Select</option>
@foreach( $subcategories as $subcat)

 <option value="{{ $subcat->id }}">{{ $subcat->name }}</option>

@endforeach 
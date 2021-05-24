<option value="">Select</option>
@foreach( $productslist as $product)

 <option value="{{ $product->id }}">{{ $product->product_name }}</option>

@endforeach 
<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.products.management') }}
                <small class="text-muted">{{ (isset($product)) ? __('labels.backend.access.products.edit') : __('labels.backend.access.products.create') }}</small>
            </h4>
        </div>
        
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('product_name', trans('validation.attributes.backend.access.products.title'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('product_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.title'), 'required' => 'required']) }}
                </div>
                
            </div>
			
			  <div class="form-group row">
                {{ Form::label('product_code', trans('validation.attributes.backend.access.products.code'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('product_code', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.code'), 'required' => 'required']) }}
                </div>
                
            </div>
			
			
			  <div class="form-group row">
                {{ Form::label('product_barcode', trans('validation.attributes.backend.access.products.barcode'), ['class' => 'col-md-2 from-control-label']) }}

                <div class="col-md-10">
                    {{ Form::text('product_barcode', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.barcode')]) }}
                </div>
                
            </div>
			
			
            

            <div class="form-group row">
                {{ Form::label('product_cat', trans('validation.attributes.backend.access.products.product_categories'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('product_cat', $productCategories, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.products.product_categories'), 'required' => 'required']) }}
                </div>
                
            </div>
			
			 <div class="form-group row">
                {{ Form::label('product_subcat', trans('validation.attributes.backend.access.products.product_subcategories'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('product_subcat', $productSubcategories, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.products.product_subcategories'), 'required' => 'required']) }}
                </div>
                
            </div>
			
			
			<div class="form-group row">
                {{ Form::label('brands', trans('validation.attributes.backend.access.products.brand'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                   
                    {{ Form::select('product_brand', $Brands, null, ['class' => 'form-control brands', 'data-placeholder' => trans('validation.attributes.backend.access.products.brands'), 'required' => 'required']) }}
                   
                </div>
                
            </div>
			
			
		  <div class="form-group row">
                {{ Form::label('units', trans('validation.attributes.backend.access.products.unit'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                   
                    {{ Form::select('product_unit', $Units, null, ['class' => 'form-control units', 'data-placeholder' => trans('validation.attributes.backend.access.products.units'), 'required' => 'required']) }}
                   
                </div>
                
            </div>
			
			
            <div class="form-group row">
                {{ Form::label('product_image', trans('validation.attributes.backend.access.products.product_image'), ['class' => 'col-md-2 from-control-label']) }}

                @if(!empty($product->product_image))
                <div class="col-lg-1">
                    <img src="{{ asset('storage/img/product/'.$product->product_image) }}" height="80" width="80">
                </div>
                <div class="col-lg-5">
                    {{ Form::file('product_image', ['id' => 'product_image']) }}
                </div>
                @else
                <div class="col-lg-5">
                    {{ Form::file('product_image', ['id' => 'product_image']) }}
                </div>
                @endif
            </div>
			
			
			  <div class="form-group row">
                {{ Form::label('content', trans('validation.attributes.backend.access.products.content'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.content')]) }}
                </div>
                
            </div>
            

        

            <div class="form-group row">
                {{ Form::label('product_netamount', trans('validation.attributes.backend.access.products.price'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('product_netamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.products.price')]) }}
                </div>
                
            </div>
			
            
			


          
           


            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.products.status'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.products.status'), 'required' => 'required']) }}
                </div>
                
            </div>
            
        
		
		
		
		
		</div>
        
    </div>
    <!--row-->
</div>
<!--card-body-->

@section('pagescript')
<script type="text/javascript">
    FTX.Utils.documentReady(function() {
        FTX.Products.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
	
	
	 $(document).ready(function(){
		   
		   $(document).on('change', '#product_cat', function(){
			
			 
			    var catid = $(this).val();
				
				
				   $.get( '{{route('admin.purchases.subcategory')}}' , { catid : catid } , function(results)
				   { 
				   
                  $('#product_subcat').html(results);
				  
				  
                   });


			   
			});
			
		   
	    });	   
</script>
@stop
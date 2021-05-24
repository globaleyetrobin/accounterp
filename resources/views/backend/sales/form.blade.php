<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.sales.management') }}
                <small class="text-muted">{{ (isset($sale)) ? __('labels.backend.access.sales.edit') : __('labels.backend.access.sales.create') }}</small>
            </h4>
        </div>
        
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('sale_no', trans('validation.attributes.backend.access.sales.saleno'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::text('sale_no', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.saleno'), 'required' => 'required']) }}
                </div>
				
				{{ Form::label('saledate', trans('validation.attributes.backend.access.sales.saledate'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::date('sale_date', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.saledate'), 'required' => 'required']) }}
                </div>
				
                
            </div>
			
			  <div class="form-group row">
                 {{ Form::label('sale_company', trans('validation.attributes.backend.access.sales.company'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('sale_company', $companies, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.sales.company'), 'required' => 'required']) }}
                </div>
				
				
				{{ Form::label('sale_branch', trans('validation.attributes.backend.access.sales.branch'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('sale_branch', $branches, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.sales.branch'), 'required' => 'required']) }}
                </div>
                
                
            </div>
			
			
			  <div class="form-group row">
               {{ Form::label('sale_customer', trans('validation.attributes.backend.access.sales.customer'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('sale_customer', $customers, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.sales.customer'), 'required' => 'required']) }}
                </div>
				
				
                {{ Form::label('status', trans('validation.attributes.backend.access.sales.status'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.status'), 'required' => 'required']) }}
                </div>
                
            
				
				
            </div>
			
			
			
			
			
			        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td colspan="2" align="center"><h2 style="margin-top:10.5px">Sale Item Lists</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                
                  <table id="sale-item-table" class="table table-bordered">
                      <tr>
                      <th width="3%">Sr No.</th>
					  
					  <th width="10%">Category </th>
					  
					  <th width="10%">Sub Category </th>
					  
                      <th width="14%">Product Name</th>
                      <th width="5%">Quantity</th>
                      <th width="15%">Price</th>
                      <th width="12.5%">Actual Amt.</th>
                      <th width="7.5%" >Discount Rt (%)</th>
                       <th width="12.5%" >Discount Amount </th>
                      <th width="12.5%" >Total</th>
                      
					  <th  width="3%" align="right"></th>
                    </tr>
					
					<?php
					$i=1;
					
					?>
                 
                   <tr id="row_id_1">
                      <td><span id="sr_no"><?php echo  $i ?></span></td>
					  
					  <td class="main_category">
					  
					  
					      {{ Form::select('saleitems_cat[]', $saleCategories, null, ['class' => 'form-control  category', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.category') ]) }}
                
				
				      </td>
					  
					  <td class="main_subcategory">
					  
					  
					      {{ Form::select('saleitems_subcat[]', $saleSubcategories, null, ['class' => 'form-control subcategory', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.subcategory') ]) }}
                
				
				      </td>
					  
					  
					  
					  <td class="main_product">
					  
					  
					      {{ Form::select('saleitems_name[]', $products, null, ['class' => 'form-control  product box-size', 'data-placeholder' => trans('validation.attributes.backend.access.sales.products') ]) }}
                
				
				      </td>
                     
                      <td><input type="text" name="saleitems_quantity[]" id="saleitems_quantity1" data-srno="1" class="form-control input-sm saleitems_quantity" /></td>
                      <td><input type="text" name="saleitems_price[]" id="saleitems_price1" data-srno="1" class="form-control input-sm number_only saleitems_price" /></td>
                      <td><input type="text" name="saleitems_actual_amount[]" id="saleitems_actual_amount1" data-srno="1" class="form-control input-sm saleitems_actual_amount"  /></td>
                      <td><input type="text" name="saleitems_discount_rate[]" id="saleitems_discount_rate1" data-srno="1" class="form-control input-sm number_only saleitems_discount_rate" /></td>
                      <td><input type="text" name="saleitems_discount_amount[]" id="saleitems_discount_amount1" data-srno="1"  class="form-control input-sm saleitems_discount_amount" /></td>
                      <td><input type="text" name="saleitems_final_amount[]" id="saleitems_final_amount1" data-srno="1"  class="form-control input-sm saleitems_final_amount" /></td>
                      <td><button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button></td>
                    </tr>
					
					
					  <?php
			  
			  if(isset($saleitems))
					{
					foreach($saleitems as $items)
		               {
						   
						   	 $i++;
						?>
						<tr id="row_id_<?php echo $i?>">
                      <td><span id="sr_no"><?php echo $i?></span></td>
					  
					  <td class="main_category">
					  
					  
					      {{ Form::select('saleitems_cat[]', $saleCategories, $items->saleitems_cat, ['class' => 'form-control  category', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.category') ]) }}
                
				
				      </td>
					  
					  <td class="main_subcategory">
					  
					  
					      {{ Form::select('saleitems_subcat[]', $saleSubcategories, $items->saleitems_subcat, ['class' => 'form-control subcategory', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.subcategory') ]) }}
                
				
				      </td>
					  
					  
					  
					  
					  <td class="main_product">
					  
					  
					      {{ Form::select('saleitems_name[]', $products, $items->saleitems_name, ['class' => 'form-control product box-size', 'data-placeholder' => trans('validation.attributes.backend.access.sales.products') , 'required' => 'required']) }}
                
				
				      </td>
                     
                      <td><input type="text" name="saleitems_quantity[]"  value="<?php echo $items->saleitems_quantity?>" id="saleitems_quantity<?php echo $i?>" data-srno="1" class="form-control input-sm saleitems_quantity" /></td>
                      <td><input type="text" name="saleitems_price[]"      value="<?php echo $items->saleitems_price?>" id="saleitems_price<?php echo $i?>" data-srno="1" class="form-control input-sm number_only saleitems_price" /></td>
                      <td><input type="text" name="saleitems_actual_amount[]" value="<?php echo $items->saleitems_actual_amount?>" id="saleitems_actual_amount<?php echo $i?>" data-srno="1" class="form-control input-sm saleitems_actual_amount"  /></td>
                      <td><input type="text" name="saleitems_discount_rate[]" value="<?php echo $items->saleitems_discount_rate?>" id="saleitems_discount_rate<?php echo $i?>" data-srno="1" class="form-control input-sm number_only saleitems_discount_rate" /></td>
                      <td><input type="text" name="saleitems_discount_amount[]" value="<?php echo $items->saleitems_discount_amount?>" id="saleitems_discount_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm saleitems_discount_amount" /></td>
                      <td><input type="text" name="saleitems_final_amount[]" value="<?php echo $items->saleitems_final_amount?>" id="saleitems_final_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm saleitems_final_amount" /></td>
                      <td>
					  
					  <button type="button" name="remove_row" id="<?php echo $i?>" class="btn btn-danger btn-xs remove_row">X</button>
					  </td>
                    </tr>
						<?php
					
					   }
					  
					}
					?>
					
					
					
					
					
					
                  </table>
                  
                </td>
              </tr>
			  
			
              <tr>
                <td align="right" width="75%"><b>Total :<b></td> <td>
				<!--<input type="text" name="sale_amount"  value="" class="sale_amount form-control"  id="sale_items_total">-->
				
				
				 {{ Form::text('sale_amount', null, ['class' => 'form-control', 'placeholder' => trans('Total') ,'id'=>'sale_items_total']) }}
			 
			 
				
				</b>
				</td>
                
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
             
          </table>
        </div>
		
		
			
			
            
			
		  
			
			
            <div class="form-group row">
                {{ Form::label('sale_image', trans('validation.attributes.backend.access.sales.sale_image'), ['class' => 'col-md-2 from-control-label']) }}

                @if(!empty($sale->sale_image))
                <div class="col-lg-1">
                    <img src="{{ asset('storage/img/sale/'.$sale->sale_image) }}" height="80" width="80">
                </div>
                <div class="col-lg-5">
                    {{ Form::file('sale_image', ['id' => 'sale_image']) }}
                </div>
                @else
                <div class="col-lg-5">
                    {{ Form::file('sale_image', ['id' => 'sale_image']) }}
                </div>
                @endif
            </div>
			
			
			  <div class="form-group row">
                {{ Form::label('sale_notes', trans('validation.attributes.backend.access.sales.sale_notes'), ['class' => 'col-md-2 from-control-label ']) }}

                <div class="col-md-10">
                    {{ Form::textarea('sale_notes', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.sale_notes')]) }}
                </div>
                
            </div>
			
			<div class="form-group row">
			
			 {{ Form::label('sale_discounttype', trans('validation.attributes.backend.access.sales.discounttype'), ['class' => 'col-md-2 from-control-label required']) }}

             <div class="col-md-4">
                    {{ Form::select('sale_discounttype', $discounttype, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.discounttype')]) }}
             </div>
                
				
				
		    {{ Form::label('sale_discountamount', trans('validation.attributes.backend.access.sales.discountamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('sale_discountamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.discountamount')]) }}
			 
			 </div>

             
			

           
			 
			 
				
			
			</div>
			
			<div class="form-group row">
			
			 {{ Form::label('sale_discounttotal', trans('validation.attributes.backend.access.sales.discounttotal'), ['class' => 'col-md-2 from-control-label ']) }}
			 
			 
			  <div class="col-md-10">
                 {{ Form::text('sale_discounttotal', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.discounttotal')]) }}
			 
			 </div>
			 </div>
			 
			
			<div class="form-group row">
			
			 {{ Form::label('sale_taxtype', trans('validation.attributes.backend.access.sales.taxtype'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                    {{ Form::select('sale_taxtype', $taxtypes, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.taxtype')]) }}
             </div>
                
				
				
		    {{ Form::label('sale_taxamount', trans('validation.attributes.backend.access.sales.taxamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('sale_taxamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.taxamount')]) }}
			 
			 </div>

			 
				
			
			</div>
			
			
            

        

            <div class="form-group row">
			
                {{ Form::label('sale_netamount', trans('validation.attributes.backend.access.sales.price'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('sale_netamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.price')]) }}
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
        FTX.Sales.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
</script>





      <script>
	  
	  
	     $(document).ready(function(){
		   
		   // Subcategory List
		   $(document).on('change', '.category', function(){
			
			 
			     var id = $(this).closest('tr').attr('id');
                 var catid = $(this).val();
				
				
				   $.get( '{{route('admin.purchases.subcategory')}}' , { catid : catid } , function(results)
				   { 
				   
				   var ids ="tr#"+id+" td select.subcategory";
				   
				   
                  $(ids).html(results);
				  
				  
                   });


			   
			});
			
			
			// Products List
		   $(document).on('change', '.subcategory', function(){
			
			 
			     var id = $(this).closest('tr').attr('id');
                 var subcatid = $(this).val();
				
				
				   $.get( '{{route('admin.purchases.productlist')}}' , { subcatid : subcatid } , function(results)
				   { 
				   
				   var ids ="tr#"+id+" td select.product";
				   
				   
                  $(ids).html(results);
				  
				  
                   });


			});
			
		   
	    });	   
		
      $(document).ready(function(){
        var final_total_amt = $('#final_total_amt').text();
        var count = "<?php echo $i ?>";
        
        $(document).on('click', '#add_row', function(){
          count++;
		  
		  //var cell = document.getElementById('#sale-item-table').rows[0].cells;  
         //  conole.log(cell);
		 
		 //  var cell =  $('#sale-item-table tr').cells[0].innerHTML;
		   
		  // conole.log(cell);
		    
           // document.write(cell[0].innerHTML);
		  //var products= $('.main_product').html();	
		  
		   var products= $('.main_product').html();	
		  
		  var category= $('.main_category').html();	
		  
		  
		  var subcategory= $('.main_subcategory').html();	
			
		
			
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><span id="sr_no">'+count+'</span></td>';
		  
		   html_code += '<td>'+category+'</td>';
		  
		  html_code += '<td>'+subcategory+'</td>';
		  
		  html_code += '<td>'+products+'</td>';
		  
		
          // html_code +=   "<td><select class='form-control categories box-size' data-placeholder='Product Name' name='saleitems_name[]'><option value='' selected='selected'>Select Product</option><option value='2'>First Product</option><option value='3'>Second Products</option></select></td> ';
          //html_code += '<td><input type="text" name="saleitems_name[]" id="saleitems_name'+count+'" class="form-control input-sm" /></td>';
          
          html_code += '<td><input type="text" name="saleitems_quantity[]" id="saleitems_quantity'+count+'" data-srno="'+count+'" class="form-control input-sm number_only saleitems_quantity" /></td>';
          html_code += '<td><input type="text" name="saleitems_price[]" id="saleitems_price'+count+'" data-srno="'+count+'" class="form-control input-sm number_only saleitems_price" /></td>';
          html_code += '<td><input type="text" name="saleitems_actual_amount[]" id="saleitems_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-sm saleitems_actual_amount"  /></td>';
          
          html_code += '<td><input type="text" name="saleitems_discount_rate[]" id="saleitems_discount_rate'+count+'" data-srno="'+count+'" class="form-control input-sm number_only saleitems_discount_rate" /></td>';
          html_code += '<td><input type="text" name="saleitems_discount_amount[]" id="saleitems_discount_amount'+count+'" data-srno="'+count+'"  class="form-control input-sm saleitems_discount_amount" /></td>';
        

		  html_code += '<td><input type="text" name="saleitems_final_amount[]" id="saleitems_final_amount'+count+'" data-srno="'+count+'"  class="form-control input-sm saleitems_final_amount" /></td>';
         
        

		 html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
          html_code += '</tr>';
          $('#sale-item-table').append(html_code);
        });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          var total_item_amount = $('#saleitems_final_amount'+row_id).val();
          var final_amount = $('#final_total_amt').text();
          var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
          $('#final_total_amt').text(result_amount);
          $('#row_id_'+row_id).remove();
          count--;
		  
		   cal_final_total(count);
		   
		   
          $('#total_item').val(count);
        });

        function cal_final_total(count)
        {
          var final_item_total = 0;
          for(j=1; j<=count; j++)
          {
            var quantity = 0;
            var price = 0;
            var actual_amount = 0;
            var discount_rate = 0;
            var discount_amount = 0;
           
            var item_total = 0;
            quantity = $('#saleitems_quantity'+j).val();
            if(quantity > 0)
            {
              price = $('#saleitems_price'+j).val();
              if(price > 0)
              {
                actual_amount = parseFloat(quantity) * parseFloat(price);
                $('#saleitems_actual_amount'+j).val(actual_amount);
                discount_rate = $('#saleitems_discount_rate'+j).val();
                if(discount_rate > 0)
                {
                  discount_amount = parseFloat(actual_amount)*parseFloat(discount_rate)/100;
                  $('#saleitems_discount_amount'+j).val(discount_amount);
                }
              
                
                item_total = parseFloat(actual_amount) - parseFloat(discount_amount);
                final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                $('#saleitems_final_amount'+j).val(item_total);
              }
            }
          }
          $('#sale_items_total').val(final_item_total);
		  
		  
		  
		    var discounttype =$('#sale_discounttype').val();
			
			var discountamount =$('#sale_discountamount').val()|| 0;
			 
			 var final_discount_amount=final_item_total;
			
            if(discounttype=='percentage')
			{
				 var final_discount = parseFloat(final_item_total)*parseFloat(discountamount)/100;
				 final_discount_amount=parseFloat(final_item_total)-parseFloat(final_discount);
			}
			else if(discounttype=='fixed')
			{
				 final_discount_amount = parseFloat(final_item_total)-parseFloat(discountamount);
			}

			
			$('#sale_discounttotal').val(final_discount);
			
			
			var taxvalue =$('#sale_taxtype').val();
			
			var final_tax_amount=0
			
			if(taxvalue !='')
			{
				final_tax_amount=parseFloat(final_discount_amount)*parseFloat(taxvalue)/100;
			}
			
			
			
		
			
			
			
			
			$('#sale_taxamount').val(final_tax_amount);
			
			
			console.log(final_discount_amount);
			
			console.log(final_tax_amount);
			
			
			
			
			var final_amount=parseFloat(final_discount_amount)+parseFloat(final_tax_amount);
			
			
			
			$('#sale_netamount').val(final_amount);
			
			
			
			/*

			


			

			sale_taxamount


			sale_netamount*/

        }
		
		

        $(document).on('blur', '.saleitems_price ', function(){
          cal_final_total(count);
        });


         $(document).on('change', '#sale_discounttype', function(){
          cal_final_total(count);
        });
		
		 $(document).on('change', '#sale_taxtype', function(){
          cal_final_total(count);
        });
		

      
        $(document).on('blur', '#sale_discountamount', function(){
          cal_final_total(count);
        });
		
		
        $(document).on('blur', '.saleitems_discount_rate', function(){
          cal_final_total(count);
        });
		
		
		$(document).on('blur', '.saleitems_quantity', function(){
          cal_final_total(count);
        });


   
      
	   // Validation for sale items 

       /* $('#create_invoice').click(function(){
         
          for(var no=1; no<=count; no++)
          {
            if($.trim($('#saleitems_name'+no).val()).length == 0)
            {
              alert("Please Enter Item Name");
              $('#saleitems_name'+no).focus();
              return false;
            }

            if($.trim($('#saleitems_quantity'+no).val()).length == 0)
            {
              alert("Please Enter Quantity");
              $('#saleitems_quantity'+no).focus();
              return false;
            }

            if($.trim($('#saleitems_price'+no).val()).length == 0)
            {
              alert("Please Enter Price");
              $('#saleitems_price'+no).focus();
              return false;
            }

          }

         

        }); */

      });
      </script>
@stop
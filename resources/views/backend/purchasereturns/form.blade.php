<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.purchasereturns.management') }}
                <small class="text-muted">{{ (isset($purchasereturn)) ? __('labels.backend.access.purchasereturns.edit') : __('labels.backend.access.purchasereturns.create') }}</small>
            </h4>
        </div>
        
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('purchasereturn_no', trans('validation.attributes.backend.access.purchasereturns.purchasereturnno'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::text('purchasereturn_no', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.purchasereturnno'), 'required' => 'required']) }}
                </div>
				
				{{ Form::label('purchasereturndate', trans('validation.attributes.backend.access.purchasereturns.purchasereturndate'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::date('purchasereturn_date', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.purchasereturndate'), 'required' => 'required']) }}
                </div>
				
                
            </div>
			
			  <div class="form-group row">
                 {{ Form::label('purchasereturn_company', trans('validation.attributes.backend.access.purchasereturns.company'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('purchasereturn_company', $companies, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.purchasereturns.company'), 'required' => 'required']) }}
                </div>
				
				
				{{ Form::label('purchasereturn_branch', trans('validation.attributes.backend.access.purchasereturns.branch'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('purchasereturn_branch', $branches, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.purchasereturns.branch'), 'required' => 'required']) }}
                </div>
                
                
            </div>
			
			
			  <div class="form-group row">
               {{ Form::label('purchasereturn_supplier', trans('validation.attributes.backend.access.purchasereturns.supplier'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('purchasereturn_supplier', $suppliers, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.purchasereturns.supplier'), 'required' => 'required']) }}
                </div>
				
				
                {{ Form::label('status', trans('validation.attributes.backend.access.purchasereturns.status'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.status'), 'required' => 'required']) }}
                </div>
                
            
				
				
            </div>
			
			
			
			
			
			        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td colspan="2" align="center"><h2 style="margin-top:10.5px">Purchasereturn Item Lists</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                
                  <table id="purchasereturn-item-table" class="table table-bordered">
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
					  
					  
					      {{ Form::select('purchasereturnitems_cat[]', $purchasereturnCategories, null, ['class' => 'form-control  category', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.category') ]) }}
                
				
				      </td>
					  
					  <td class="main_subcategory">
					  
					  
					      {{ Form::select('purchasereturnitems_subcat[]', $purchasereturnSubcategories, null, ['class' => 'form-control subcategory', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.subcategory') ]) }}
                
				
				      </td>
					  
					  
					  <td class="main_product">
					  
					  
					      {{ Form::select('purchasereturnitems_name[]', $products, null, ['class' => 'form-control product', 'data-placeholder' => trans('validation.attributes.backend.access.purchasereturns.products') ]) }}
                
				
				      </td>
                     
                      <td><input type="text" name="purchasereturnitems_quantity[]" id="purchasereturnitems_quantity1" data-srno="1" class="form-control input-sm purchasereturnitems_quantity" /></td>
                      <td><input type="text" name="purchasereturnitems_price[]" id="purchasereturnitems_price1" data-srno="1" class="form-control input-sm number_only purchasereturnitems_price" /></td>
                      <td><input type="text" name="purchasereturnitems_actual_amount[]" id="purchasereturnitems_actual_amount1" data-srno="1" class="form-control input-sm purchasereturnitems_actual_amount"  /></td>
                      <td><input type="text" name="purchasereturnitems_discount_rate[]" id="purchasereturnitems_discount_rate1" data-srno="1" class="form-control input-sm number_only purchasereturnitems_discount_rate" /></td>
                      <td><input type="text" name="purchasereturnitems_discount_amount[]" id="purchasereturnitems_discount_amount1" data-srno="1"  class="form-control input-sm purchasereturnitems_discount_amount" /></td>
                      <td><input type="text" name="purchasereturnitems_final_amount[]" id="purchasereturnitems_final_amount1" data-srno="1"  class="form-control input-sm purchasereturnitems_final_amount" /></td>
                      <td><button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button></td>
                    </tr>
					
					
					  <?php
			  
			  if(isset($purchasereturnitems))
					{
					foreach($purchasereturnitems as $items)
		               {
						   
						   	 $i++;
						?>
						<tr id="row_id_<?php echo $i?>">
                      <td><span id="sr_no"><?php echo $i?></span></td>
					  
					   <td class="main_category">
					  
					  
					      {{ Form::select('purchasereturnitems_cat[]', $purchasereturnCategories, $items->purchasereturnitems_cat, ['class' => 'form-control  category', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.category') ]) }}
                
				
				      </td>
					  
					  <td class="main_subcategory">
					  
					  
					      {{ Form::select('purchasereturnitems_subcat[]', $purchasereturnSubcategories, $items->purchasereturnitems_subcat, ['class' => 'form-control subcategory', 'data-placeholder' => trans('validation.attributes.backend.access.purchases.subcategory') ]) }}
                
				
				      </td>
					  
					  
					
					  
					  <td class="main_product">
					  
					  
					      {{ Form::select('purchasereturnitems_name[]', $products, $items->purchasereturnitems_name, ['class' => 'form-control  product box-size', 'data-placeholder' => trans('validation.attributes.backend.access.purchasereturns.products') , 'required' => 'required']) }}
                
				
				      </td>
                     
                      <td><input type="text" name="purchasereturnitems_quantity[]"  value="<?php echo $items->purchasereturnitems_quantity?>" id="purchasereturnitems_quantity<?php echo $i?>" data-srno="1" class="form-control input-sm purchasereturnitems_quantity" /></td>
                      <td><input type="text" name="purchasereturnitems_price[]"      value="<?php echo $items->purchasereturnitems_price?>" id="purchasereturnitems_price<?php echo $i?>" data-srno="1" class="form-control input-sm number_only purchasereturnitems_price" /></td>
                      <td><input type="text" name="purchasereturnitems_actual_amount[]" value="<?php echo $items->purchasereturnitems_actual_amount?>" id="purchasereturnitems_actual_amount<?php echo $i?>" data-srno="1" class="form-control input-sm purchasereturnitems_actual_amount"  /></td>
                      <td><input type="text" name="purchasereturnitems_discount_rate[]" value="<?php echo $items->purchasereturnitems_discount_rate?>" id="purchasereturnitems_discount_rate<?php echo $i?>" data-srno="1" class="form-control input-sm number_only purchasereturnitems_discount_rate" /></td>
                      <td><input type="text" name="purchasereturnitems_discount_amount[]" value="<?php echo $items->purchasereturnitems_discount_amount?>" id="purchasereturnitems_discount_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm purchasereturnitems_discount_amount" /></td>
                      <td><input type="text" name="purchasereturnitems_final_amount[]" value="<?php echo $items->purchasereturnitems_final_amount?>" id="purchasereturnitems_final_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm purchasereturnitems_final_amount" /></td>
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
				<!--<input type="text" name="purchasereturn_amount"  value="" class="purchasereturn_amount form-control"  id="purchasereturn_items_total">-->
				
				
				 {{ Form::text('purchasereturn_amount', null, ['class' => 'form-control', 'placeholder' => trans('Total') ,'id'=>'purchasereturn_items_total']) }}
			 
			 
				
				</b>
				</td>
                
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
             
          </table>
        </div>
		
		
			
			
            
			
		  
			
			
            <div class="form-group row">
                {{ Form::label('purchasereturn_image', trans('validation.attributes.backend.access.purchasereturns.purchasereturn_image'), ['class' => 'col-md-2 from-control-label']) }}

                @if(!empty($purchasereturn->purchasereturn_image))
                <div class="col-lg-1">
                    <img src="{{ asset('storage/img/purchasereturn/'.$purchasereturn->purchasereturn_image) }}" height="80" width="80">
                </div>
                <div class="col-lg-5">
                    {{ Form::file('purchasereturn_image', ['id' => 'purchasereturn_image']) }}
                </div>
                @else
                <div class="col-lg-5">
                    {{ Form::file('purchasereturn_image', ['id' => 'purchasereturn_image']) }}
                </div>
                @endif
            </div>
			
			
			  <div class="form-group row">
                {{ Form::label('purchasereturn_notes', trans('validation.attributes.backend.access.purchasereturns.purchasereturn_notes'), ['class' => 'col-md-2 from-control-label ']) }}

                <div class="col-md-10">
                    {{ Form::textarea('purchasereturn_notes', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.purchasereturn_notes')]) }}
                </div>
                
            </div>
			
			<div class="form-group row">
			
			 {{ Form::label('purchasereturn_discounttype', trans('validation.attributes.backend.access.purchasereturns.discounttype'), ['class' => 'col-md-2 from-control-label required']) }}

             <div class="col-md-4">
                    {{ Form::select('purchasereturn_discounttype', $discounttype, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.discounttype')]) }}
             </div>
                
				
				
		    {{ Form::label('purchasereturn_discountamount', trans('validation.attributes.backend.access.purchasereturns.discountamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('purchasereturn_discountamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.discountamount')]) }}
			 
			 </div>

             
			

           
			 
			 
				
			
			</div>
			
			<div class="form-group row">
			
			 {{ Form::label('purchasereturn_discounttotal', trans('validation.attributes.backend.access.purchasereturns.discounttotal'), ['class' => 'col-md-2 from-control-label ']) }}
			 
			 
			  <div class="col-md-10">
                 {{ Form::text('purchasereturn_discounttotal', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.discounttotal')]) }}
			 
			 </div>
			 </div>
			 
			
			<div class="form-group row">
			
			 {{ Form::label('purchasereturn_taxtype', trans('validation.attributes.backend.access.purchasereturns.taxtype'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                    {{ Form::select('purchasereturn_taxtype', $taxtypes, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.taxtype')]) }}
             </div>
                
				
				
		    {{ Form::label('purchasereturn_taxamount', trans('validation.attributes.backend.access.purchasereturns.taxamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('purchasereturn_taxamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.taxamount')]) }}
			 
			 </div>

			 
				
			
			</div>
			
			
            

        

            <div class="form-group row">
			
                {{ Form::label('purchasereturn_netamount', trans('validation.attributes.backend.access.purchasereturns.price'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('purchasereturn_netamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.purchasereturns.price')]) }}
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
        FTX.Purchasereturns.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
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
		  
		  //var cell = document.getElementById('#purchasereturn-item-table').rows[0].cells;  
         //  conole.log(cell);
		 
		 //  var cell =  $('#purchasereturn-item-table tr').cells[0].innerHTML;
		   
		  // conole.log(cell);
		    
           // document.write(cell[0].innerHTML);
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
		  
		
          // html_code +=   "<td><select class='form-control categories box-size' data-placeholder='Product Name' name='purchasereturnitems_name[]'><option value='' selected='selected'>Select Product</option><option value='2'>First Product</option><option value='3'>Second Products</option></select></td> ';
          //html_code += '<td><input type="text" name="purchasereturnitems_name[]" id="purchasereturnitems_name'+count+'" class="form-control input-sm" /></td>';
          
          html_code += '<td><input type="text" name="purchasereturnitems_quantity[]" id="purchasereturnitems_quantity'+count+'" data-srno="'+count+'" class="form-control input-sm number_only purchasereturnitems_quantity" /></td>';
          html_code += '<td><input type="text" name="purchasereturnitems_price[]" id="purchasereturnitems_price'+count+'" data-srno="'+count+'" class="form-control input-sm number_only purchasereturnitems_price" /></td>';
          html_code += '<td><input type="text" name="purchasereturnitems_actual_amount[]" id="purchasereturnitems_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-sm purchasereturnitems_actual_amount"  /></td>';
          
          html_code += '<td><input type="text" name="purchasereturnitems_discount_rate[]" id="purchasereturnitems_discount_rate'+count+'" data-srno="'+count+'" class="form-control input-sm number_only purchasereturnitems_discount_rate" /></td>';
          html_code += '<td><input type="text" name="purchasereturnitems_discount_amount[]" id="purchasereturnitems_discount_amount'+count+'" data-srno="'+count+'"  class="form-control input-sm purchasereturnitems_discount_amount" /></td>';
        

		  html_code += '<td><input type="text" name="purchasereturnitems_final_amount[]" id="purchasereturnitems_final_amount'+count+'" data-srno="'+count+'"  class="form-control input-sm purchasereturnitems_final_amount" /></td>';
         
        

		 html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
          html_code += '</tr>';
          $('#purchasereturn-item-table').append(html_code);
        });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          var total_item_amount = $('#purchasereturnitems_final_amount'+row_id).val();
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
            quantity = $('#purchasereturnitems_quantity'+j).val();
            if(quantity > 0)
            {
              price = $('#purchasereturnitems_price'+j).val();
              if(price > 0)
              {
                actual_amount = parseFloat(quantity) * parseFloat(price);
                $('#purchasereturnitems_actual_amount'+j).val(actual_amount);
                discount_rate = $('#purchasereturnitems_discount_rate'+j).val();
                if(discount_rate > 0)
                {
                  discount_amount = parseFloat(actual_amount)*parseFloat(discount_rate)/100;
                  $('#purchasereturnitems_discount_amount'+j).val(discount_amount);
                }
              
                
                item_total = parseFloat(actual_amount) - parseFloat(discount_amount);
                final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                $('#purchasereturnitems_final_amount'+j).val(item_total);
              }
            }
          }
          $('#purchasereturn_items_total').val(final_item_total);
		  
		  
		  
		    var discounttype =$('#purchasereturn_discounttype').val();
			
			var discountamount =$('#purchasereturn_discountamount').val()|| 0;
			 
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

			
			$('#purchasereturn_discounttotal').val(final_discount);
			
			
			var taxvalue =$('#purchasereturn_taxtype').val();
			
			var final_tax_amount=0
			
			if(taxvalue !='')
			{
				final_tax_amount=parseFloat(final_discount_amount)*parseFloat(taxvalue)/100;
			}
			
			
			
		
			
			
			
			
			$('#purchasereturn_taxamount').val(final_tax_amount);
			
			
			console.log(final_discount_amount);
			
			console.log(final_tax_amount);
			
			
			
			
			var final_amount=parseFloat(final_discount_amount)+parseFloat(final_tax_amount);
			
			
			
			$('#purchasereturn_netamount').val(final_amount);
			
			
			
			/*

			


			

			purchasereturn_taxamount


			purchasereturn_netamount*/

        }
		
		

        $(document).on('blur', '.purchasereturnitems_price ', function(){
          cal_final_total(count);
        });


         $(document).on('change', '#purchasereturn_discounttype', function(){
          cal_final_total(count);
        });
		
		 $(document).on('change', '#purchasereturn_taxtype', function(){
          cal_final_total(count);
        });
		

      
        $(document).on('blur', '#purchasereturn_discountamount', function(){
          cal_final_total(count);
        });
		
		
        $(document).on('blur', '.purchasereturnitems_discount_rate', function(){
          cal_final_total(count);
        });
		
		
		$(document).on('blur', '.purchasereturnitems_quantity', function(){
          cal_final_total(count);
        });


   
      
	   // Validation for purchasereturn items 

       /* $('#create_invoice').click(function(){
         
          for(var no=1; no<=count; no++)
          {
            if($.trim($('#purchasereturnitems_name'+no).val()).length == 0)
            {
              alert("Please Enter Item Name");
              $('#purchasereturnitems_name'+no).focus();
              return false;
            }

            if($.trim($('#purchasereturnitems_quantity'+no).val()).length == 0)
            {
              alert("Please Enter Quantity");
              $('#purchasereturnitems_quantity'+no).focus();
              return false;
            }

            if($.trim($('#purchasereturnitems_price'+no).val()).length == 0)
            {
              alert("Please Enter Price");
              $('#purchasereturnitems_price'+no).focus();
              return false;
            }

          }

         

        }); */

      });
      </script>
@stop
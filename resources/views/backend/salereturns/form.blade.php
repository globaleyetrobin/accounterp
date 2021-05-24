<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.salereturns.management') }}
                <small class="text-muted">{{ (isset($salereturn)) ? __('labels.backend.access.salereturns.edit') : __('labels.backend.access.salereturns.create') }}</small>
            </h4>
        </div>
        
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('salereturn_no', trans('validation.attributes.backend.access.salereturns.salereturnno'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::text('salereturn_no', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.salereturnno'), 'required' => 'required']) }}
                </div>
				
				{{ Form::label('salereturndate', trans('validation.attributes.backend.access.salereturns.salereturndate'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::date('salereturn_date', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.salereturndate'), 'required' => 'required']) }}
                </div>
				
                
            </div>
			
			  <div class="form-group row">
                 {{ Form::label('salereturn_company', trans('validation.attributes.backend.access.salereturns.company'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('salereturn_company', $companies, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.salereturns.company'), 'required' => 'required']) }}
                </div>
				
				
				{{ Form::label('salereturn_branch', trans('validation.attributes.backend.access.salereturns.branch'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('salereturn_branch', $branches, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.salereturns.branch'), 'required' => 'required']) }}
                </div>
                
                
            </div>
			
			
			  <div class="form-group row">
               {{ Form::label('salereturn_customer', trans('validation.attributes.backend.access.salereturns.customer'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('salereturn_customer', $customers, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.salereturns.customer'), 'required' => 'required']) }}
                </div>
				
				
                {{ Form::label('status', trans('validation.attributes.backend.access.salereturns.status'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.salereturns.status'), 'required' => 'required']) }}
                </div>
                
            
				
				
            </div>
			
			
			
			
			
			        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td colspan="2" align="center"><h2 style="margin-top:10.5px">Salereturn Item Lists</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                
                  <table id="salereturn-item-table" class="table table-bordered">
                    <tr>
                      <th width="7%">Sr No.</th>
                      <th width="20%">Product Name</th>
                      <th width="5%">Quantity</th>
                      <th width="15%">Price</th>
                      <th width="12.5%">Actual Amt.</th>
                      <th width="7.5%" >Discount Rt (%)</th>
                       <th width="12.5%" >Discount Amount </th>
					   
					   <th> Type </th>
                      <th width="12.5%" >Total</th>
                      
					 <!-- <th  width="3%" align="right"></th>-->
                    </tr>
					
					<?php
					$i=1;
					
					?>
                 
                    <!--<tr>
                      <td><span id="sr_no"><?php echo  $i ?></span></td>
					  
					  <td class="main_product">
					  
					  
					      {{ Form::select('salereturnitems_name[]', $products, null, ['class' => 'form-control  box-size', 'data-placeholder' => trans('validation.attributes.backend.access.salereturns.products') ]) }}
                
				
				      </td>
                     
                      <td><input type="text" name="salereturnitems_quantity[]" id="salereturnitems_quantity1" data-srno="1" class="form-control input-sm salereturnitems_quantity" /></td>
                      <td><input type="text" name="salereturnitems_price[]" id="salereturnitems_price1" data-srno="1" class="form-control input-sm number_only salereturnitems_price" /></td>
                      <td><input type="text" name="salereturnitems_actual_amount[]" id="salereturnitems_actual_amount1" data-srno="1" class="form-control input-sm salereturnitems_actual_amount"  /></td>
                      <td><input type="text" name="salereturnitems_discount_rate[]" id="salereturnitems_discount_rate1" data-srno="1" class="form-control input-sm number_only salereturnitems_discount_rate" /></td>
                      <td><input type="text" name="salereturnitems_discount_amount[]" id="salereturnitems_discount_amount1" data-srno="1"  class="form-control input-sm salereturnitems_discount_amount" /></td>
                      <td><input type="text" name="salereturnitems_final_amount[]" id="salereturnitems_final_amount1" data-srno="1"  class="form-control input-sm salereturnitems_final_amount" /></td>
                     
                       <td> 	
		
                              {{ Form::select('salereturnitems_type[]', $salesreturntype, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.status'), 'required' => 'required']) }}
                 </td>
                
				  
					 <td><button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button></td>
                    </tr>
					-->
					
					
					  <?php
			  
			  if(isset($salereturnitems))
					{
					foreach($salereturnitems as $items)
		               {
						   
						   	 $i++;
						?>
						<tr id="row_id_<?php echo $i?>">
                      <td><span id="sr_no"><?php echo $i?></span></td>
					  
					  <td class="main_product">
					  
					  
					      {{ Form::select('salereturnitems_name[]', $products, $items->salereturnitems_name, ['class' => 'form-control  box-size', 'data-placeholder' => trans('validation.attributes.backend.access.salereturns.products') , 'required' => 'required']) }}
                
				
				      </td>
                     
                      <td><input type="text" name="salereturnitems_quantity[]"  value="<?php echo $items->salereturnitems_quantity?>" id="salereturnitems_quantity<?php echo $i?>" data-srno="1" class="form-control input-sm salereturnitems_quantity" /></td>
                      <td><input type="text" name="salereturnitems_price[]"      value="<?php echo $items->salereturnitems_price?>" id="salereturnitems_price<?php echo $i?>" data-srno="1" class="form-control input-sm number_only salereturnitems_price" /></td>
                      <td><input type="text" name="salereturnitems_actual_amount[]" value="<?php echo $items->salereturnitems_actual_amount?>" id="salereturnitems_actual_amount<?php echo $i?>" data-srno="1" class="form-control input-sm salereturnitems_actual_amount"  /></td>
                      <td><input type="text" name="salereturnitems_discount_rate[]" value="<?php echo $items->salereturnitems_discount_rate?>" id="salereturnitems_discount_rate<?php echo $i?>" data-srno="1" class="form-control input-sm number_only salereturnitems_discount_rate" /></td>
                      <td><input type="text" name="salereturnitems_discount_amount[]" value="<?php echo $items->salereturnitems_discount_amount?>" id="salereturnitems_discount_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm salereturnitems_discount_amount" /></td>
                      	 <td> 	
		                  {{ Form::select('salereturnitems_type[]', $salesreturntype, $items->salereturnitems_type, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.status'), 'required' => 'required']) }}
                 </td>
					  
					  
					  <td><input type="text" name="salereturnitems_final_amount[]" value="<?php echo $items->salereturnitems_final_amount?>" id="salereturnitems_final_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm salereturnitems_final_amount" /></td>
                      
					  
				
					  
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
				<!--<input type="text" name="salereturn_amount"  value="" class="salereturn_amount form-control"  id="salereturn_items_total">-->
				
				
				 {{ Form::text('salereturn_amount', null, ['class' => 'form-control', 'placeholder' => trans('Total') ,'id'=>'salereturn_items_total']) }}
			 
			 
				
				</b>
				</td>
                
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
             
          </table>
        </div>
		
		
			
			
            
			
		  
			
			
            <div class="form-group row">
                {{ Form::label('salereturn_image', trans('validation.attributes.backend.access.salereturns.salereturn_image'), ['class' => 'col-md-2 from-control-label']) }}

                @if(!empty($salereturn->salereturn_image))
                <div class="col-lg-1">
                    <img src="{{ asset('storage/img/salereturn/'.$salereturn->salereturn_image) }}" height="80" width="80">
                </div>
                <div class="col-lg-5">
                    {{ Form::file('salereturn_image', ['id' => 'salereturn_image']) }}
                </div>
                @else
                <div class="col-lg-5">
                    {{ Form::file('salereturn_image', ['id' => 'salereturn_image']) }}
                </div>
                @endif
            </div>
			
			
			  <div class="form-group row">
                {{ Form::label('salereturn_notes', trans('validation.attributes.backend.access.salereturns.salereturn_notes'), ['class' => 'col-md-2 from-control-label ']) }}

                <div class="col-md-10">
                    {{ Form::textarea('salereturn_notes', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.salereturn_notes')]) }}
                </div>
                
            </div>
			
			<div class="form-group row">
			
			 {{ Form::label('salereturn_discounttype', trans('validation.attributes.backend.access.salereturns.discounttype'), ['class' => 'col-md-2 from-control-label required']) }}

             <div class="col-md-4">
                    {{ Form::select('salereturn_discounttype', $discounttype, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.salereturns.discounttype')]) }}
             </div>
                
				
				
		    {{ Form::label('salereturn_discountamount', trans('validation.attributes.backend.access.salereturns.discountamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('salereturn_discountamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.discountamount')]) }}
			 
			 </div>

             
			

           
			 
			 
				
			
			</div>
			
			<div class="form-group row">
			
			 {{ Form::label('salereturn_discounttotal', trans('validation.attributes.backend.access.salereturns.discounttotal'), ['class' => 'col-md-2 from-control-label ']) }}
			 
			 
			  <div class="col-md-10">
                 {{ Form::text('salereturn_discounttotal', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.discounttotal')]) }}
			 
			 </div>
			 </div>
			 
			
			<div class="form-group row">
			
			 {{ Form::label('salereturn_taxtype', trans('validation.attributes.backend.access.salereturns.taxtype'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                    {{ Form::select('salereturn_taxtype', $taxtypes, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.salereturns.taxtype')]) }}
             </div>
                
				
				
		    {{ Form::label('salereturn_taxamount', trans('validation.attributes.backend.access.salereturns.taxamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('salereturn_taxamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.taxamount')]) }}
			 
			 </div>

			 
				
			
			</div>
			
			
            

        

            <div class="form-group row">
			
                {{ Form::label('salereturn_netamount', trans('validation.attributes.backend.access.salereturns.price'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('salereturn_netamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.salereturns.price')]) }}
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
        FTX.Salereturns.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
</script>





      <script>
      $(document).ready(function(){
        var final_total_amt = $('#final_total_amt').text();
        var count = "<?php echo $i ?>";
        
        $(document).on('click', '#add_row', function(){
          count++;
		  
		  //var cell = document.getElementById('#salereturn-item-table').rows[0].cells;  
         //  conole.log(cell);
		 
		 //  var cell =  $('#salereturn-item-table tr').cells[0].innerHTML;
		   
		  // conole.log(cell);
		    
           // document.write(cell[0].innerHTML);
		  var products= $('.main_product').html();	
			
		
			
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><span id="sr_no">'+count+'</span></td>';
		  
		  html_code += '<td>'+products+'</td>';
		  
		
          // html_code +=   "<td><select class='form-control categories box-size' data-placeholder='Product Name' name='salereturnitems_name[]'><option value='' selected='selected'>Select Product</option><option value='2'>First Product</option><option value='3'>Second Products</option></select></td> ';
          //html_code += '<td><input type="text" name="salereturnitems_name[]" id="salereturnitems_name'+count+'" class="form-control input-sm" /></td>';
          
          html_code += '<td><input type="text" name="salereturnitems_quantity[]" id="salereturnitems_quantity'+count+'" data-srno="'+count+'" class="form-control input-sm number_only salereturnitems_quantity" /></td>';
          html_code += '<td><input type="text" name="salereturnitems_price[]" id="salereturnitems_price'+count+'" data-srno="'+count+'" class="form-control input-sm number_only salereturnitems_price" /></td>';
          html_code += '<td><input type="text" name="salereturnitems_actual_amount[]" id="salereturnitems_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-sm salereturnitems_actual_amount"  /></td>';
          
          html_code += '<td><input type="text" name="salereturnitems_discount_rate[]" id="salereturnitems_discount_rate'+count+'" data-srno="'+count+'" class="form-control input-sm number_only salereturnitems_discount_rate" /></td>';
          html_code += '<td><input type="text" name="salereturnitems_discount_amount[]" id="salereturnitems_discount_amount'+count+'" data-srno="'+count+'"  class="form-control input-sm salereturnitems_discount_amount" /></td>';
        

		  html_code += '<td><input type="text" name="salereturnitems_final_amount[]" id="salereturnitems_final_amount'+count+'" data-srno="'+count+'"  class="form-control input-sm salereturnitems_final_amount" /></td>';
         
        

		 html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
          html_code += '</tr>';
          $('#salereturn-item-table').append(html_code);
        });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          var total_item_amount = $('#salereturnitems_final_amount'+row_id).val();
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
            quantity = $('#salereturnitems_quantity'+j).val();
            if(quantity > 0)
            {
              price = $('#salereturnitems_price'+j).val();
              if(price > 0)
              {
                actual_amount = parseFloat(quantity) * parseFloat(price);
                $('#salereturnitems_actual_amount'+j).val(actual_amount);
                discount_rate = $('#salereturnitems_discount_rate'+j).val();
                if(discount_rate > 0)
                {
                  discount_amount = parseFloat(actual_amount)*parseFloat(discount_rate)/100;
                  $('#salereturnitems_discount_amount'+j).val(discount_amount);
                }
              
                
                item_total = parseFloat(actual_amount) - parseFloat(discount_amount);
                final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                $('#salereturnitems_final_amount'+j).val(item_total);
              }
            }
          }
          $('#salereturn_items_total').val(final_item_total);
		  
		  
		  
		    var discounttype =$('#salereturn_discounttype').val();
			
			var discountamount =$('#salereturn_discountamount').val()|| 0;
			 
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

			
			$('#salereturn_discounttotal').val(final_discount);
			
			
			var taxvalue =$('#salereturn_taxtype').val();
			
			var final_tax_amount=0
			
			if(taxvalue !='')
			{
				final_tax_amount=parseFloat(final_discount_amount)*parseFloat(taxvalue)/100;
			}
			
			
			
		
			
			
			
			
			$('#salereturn_taxamount').val(final_tax_amount);
			
			
			console.log(final_discount_amount);
			
			console.log(final_tax_amount);
			
			
			
			
			var final_amount=parseFloat(final_discount_amount)+parseFloat(final_tax_amount);
			
			
			
			$('#salereturn_netamount').val(final_amount);
			
			
			
			/*

			


			

			salereturn_taxamount


			salereturn_netamount*/

        }
		
		

        $(document).on('blur', '.salereturnitems_price ', function(){
          cal_final_total(count);
        });


         $(document).on('change', '#salereturn_discounttype', function(){
          cal_final_total(count);
        });
		
		 $(document).on('change', '#salereturn_taxtype', function(){
          cal_final_total(count);
        });
		

      
        $(document).on('blur', '#salereturn_discountamount', function(){
          cal_final_total(count);
        });
		
		
        $(document).on('blur', '.salereturnitems_discount_rate', function(){
          cal_final_total(count);
        });
		
		
		$(document).on('blur', '.salereturnitems_quantity', function(){
          cal_final_total(count);
        });


   
      
	   // Validation for salereturn items 

       /* $('#create_invoice').click(function(){
         
          for(var no=1; no<=count; no++)
          {
            if($.trim($('#salereturnitems_name'+no).val()).length == 0)
            {
              alert("Please Enter Item Name");
              $('#salereturnitems_name'+no).focus();
              return false;
            }

            if($.trim($('#salereturnitems_quantity'+no).val()).length == 0)
            {
              alert("Please Enter Quantity");
              $('#salereturnitems_quantity'+no).focus();
              return false;
            }

            if($.trim($('#salereturnitems_price'+no).val()).length == 0)
            {
              alert("Please Enter Price");
              $('#salereturnitems_price'+no).focus();
              return false;
            }

          }

         

        }); */

      });
      </script>
@stop
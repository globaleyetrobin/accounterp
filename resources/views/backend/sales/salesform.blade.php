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
                {{ Form::label('salereturn_no', trans('validation.attributes.backend.access.sales.saleno'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                 <?php echo $sales->sale_no?>
				 
				 <input type="hidden" name="sales_id" value=" <?php echo $sales->id?>">
				 
				
                </div>
				
				{{ Form::label('saledate', trans('validation.attributes.backend.access.sales.saledate'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">

                <?php echo $sales->sale_date?>
				
				    
                </div>
				
                
            </div>
			
			  <div class="form-group row">
                 {{ Form::label('salereturn_company', trans('validation.attributes.backend.access.sales.company'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">

                <input type="hidden" name="salereturn_company" value=" <?php echo $sales->sale_company?>">

                <?php echo $sales->sale_company?>
                 </div>
				
				
				{{ Form::label('salereturn_branch', trans('validation.attributes.backend.access.sales.branch'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                     <?php echo $sales->branch_name?>
					 
					   <input type="hidden" name="salereturn_branch" value=" <?php echo $sales->sale_branch?>">

            
               
               </div>
                
                
            </div>
			
			
			  <div class="form-group row">
               {{ Form::label('salereturn_customer', trans('validation.attributes.backend.access.sales.customer'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
				
				<input type="hidden" name="salereturn_customer" value=" <?php echo $sales->sale_customer?>">


                    <?php echo $sales->company_name?>
               
                </div>
				
				
				
				
				
                {{ Form::label('status', trans('validation.attributes.backend.access.sales.status'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-4">
                    {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.status'), 'required' => 'required']) }}
                </div>
				</div>
				
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
			
			
			
			
			
			        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td colspan="2" align="center"><h2 style="margin-top:10.5px">Sale Item Lists</h2></td>
            </tr>
            <tr>
                <td colspan="2">
                
                  <table id="sale-item-table" class="table table-bordered">
                    <tr>
                      <th width="7%">Sr No.</th>
                      <th width="15%">Product Name</th>
                      <th width="5%">Quantity</th>
                      <th width="12.5%">Price</th>
                     
                      <th width="12.5%" >Discount Rt (%)</th>
                      
                      <th width="12.5%" >Total</th>

                      <th width="5%">Return Quantity</th>

                      <th width="15%">Type</th>

                      <th width="15%">Return Amount</th>
                      
					
                    </tr>
					
					<?php
					$i=1;
					
					?>
                 
             
					
					
					  <?php
			  
			  if(isset($saleitems))
					{
					foreach($saleitems as $items)
		               {
						   
						   
						?>
						<tr id="row_id_<?php echo $i?>">
                      <td><span id="sr_no"><?php echo $i?></span></td>
					  
					  <td class="main_product">
					  
					  
            <?php echo $items->product_name?>
			
			
			          <input type="hidden" name="salereturnitems_name[]"      value="<?php echo $items->saleitems_name?>" id="salereturnitems_salesqty<?php echo $i?>" data-srno="1" class="form-control input-sm number_only salereturnitems_salesqty" />
                      


				      </td>
                     
                      <td>
                      
                     
                      <?php echo $items->saleitems_quantity?>

                     

                      </td>
                      <td>
                      <?php echo $items->saleitems_price?>
					  
                      <input type="hidden" name="salereturnitems_price[]"      value="<?php echo $items->saleitems_price?>" id="salereturnitems_price<?php echo $i?>" data-srno="1" class="form-control input-sm number_only salereturnitems_price" />
                      </td>
                     
                      <td>
                      <?php echo $items->saleitems_discount_rate?>
                      <input type="hidden" name="salereturnitems_discount_rate[]" value="<?php echo $items->saleitems_discount_rate?>" id="salereturnitems_discount_rate<?php echo $i?>" data-srno="1" class="form-control input-sm number_only salereturnitems_discount_rate" />
                      
					  
					    <input type="hidden" name="salereturnitems_discount_amount[]" value="<?php echo $items->salereturnitems_discount_amount?>" id="salereturnitems_discount_amount<?php echo $i?>" data-srno="1" class="form-control input-sm number_only salereturnitems_discount_amount" />
                     
					  
					  </td>
                     
                      <td>
                      <?php echo $items->saleitems_final_amount ;?>  

                      

                    <input type="hidden" name="salereturnitems_actual_amount[]" value="<?php echo $items->salereturnitems_actual_amount?>" id="salereturnitems_actual_amount<?php echo $i?>" data-srno="1"  class="form-control input-sm salereturnitems_actual_amount" />
					   
                     
                      </td>

                      <td>

                      <input type="text" name="salereturnitems_quantity[]"   id="salereturnitems_quantity<?php echo $i?>" data-srno="1"  class="form-control salereturnitems_quantity">
                      </td>
                      <td>

                      {{ Form::select('salereturnitems_type[]', $salesreturntype, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.status'), 'required' => 'required']) }}
               

                      </td>
                      <td>

                      <input type="text" name="salereturnitems_final_amount[]"   id="salereturnitems_total<?php echo $i?>" data-srno="1"  class="form-control salereturnitems_total">
                     
                      </td>
                    
                    </tr>
						<?php
					
          $i++;

					   }
					  
					}
					?>
					
					
					
					
					
					
                  </table>
                  
                </td>
              </tr>
			  
			
              <tr>
                <td align="right" width="75%"><b>Total :<b></td> <td>
				<!--<input type="text" name="salereturn_amount"  value="" class="salereturn_amount form-control"  id="salereturn_items_total">-->
				
				
				 {{ Form::text('salereturn_amount', null, ['class' => 'form-control', 'placeholder' => trans('Total') ,'id'=>'salereturn_amount']) }}
			 
			 
				
				</b>
				</td>
                
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
             
          </table>
        </div>
		
		
			
			
            
			
		  
			
			
            <div class="form-group row">
                {{ Form::label('salereturn_image', trans('validation.attributes.backend.access.sales.salereturn_image'), ['class' => 'col-md-2 from-control-label']) }}

                @if(!empty($sale->salereturn_image))
                <div class="col-lg-1">
                    <img src="{{ asset('storage/img/sale/'.$sale->salereturn_image) }}" height="80" width="80">
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
                {{ Form::label('salereturn_notes', trans('validation.attributes.backend.access.sales.salereturn_notes'), ['class' => 'col-md-2 from-control-label ']) }}

                <div class="col-md-10">
                    {{ Form::textarea('salereturn_notes', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.salereturn_notes')]) }}
                </div>
                
            </div>
			
			<div class="form-group row">
			
			 {{ Form::label('salereturn_discounttype', trans('validation.attributes.backend.access.sales.discounttype'), ['class' => 'col-md-2 from-control-label required']) }}

             <div class="col-md-4">
                    {{ Form::select('salereturn_discounttype', $discounttype, $sales->sale_discounttype, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.discounttype')]) }}
             </div>
                
				
				
		    {{ Form::label('salereturn_discountamount', trans('validation.attributes.backend.access.sales.discountamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('salereturn_discountamount', $sales->sale_discountamount, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.discountamount')]) }}
			 
			 </div>

             
			

           
			 
			 
				
			
			</div>
			
			<div class="form-group row">
			
			 {{ Form::label('salereturn_discounttotal', trans('validation.attributes.backend.access.sales.discounttotal'), ['class' => 'col-md-2 from-control-label ']) }}
			 
			 
			  <div class="col-md-10">
                 {{ Form::text('salereturn_discounttotal', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.discounttotal')]) }}
			 
			 </div>
			 </div>
			 
			
			<div class="form-group row">
			
			 {{ Form::label('salereturn_taxtype', trans('validation.attributes.backend.access.sales.taxtype'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                    {{ Form::select('salereturn_taxtype', $taxtypes, $sales->sale_taxtype, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.access.sales.taxtype')]) }}
             </div>
                
				
				
		    {{ Form::label('salereturn_taxamount', trans('validation.attributes.backend.access.sales.taxamount'), ['class' => 'col-md-2 from-control-label ']) }}

             <div class="col-md-4">
                 {{ Form::text('salereturn_taxamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.taxamount')]) }}
			 
			 </div>

			 
				
			
			</div>
			
			
            

        

            <div class="form-group row">
			
                {{ Form::label('salereturn_netamount', trans('validation.attributes.backend.access.sales.price'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('salereturn_netamount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.sales.price')]) }}
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

var count = "<?php echo $i ?>";
   $(document).ready(function(){
        function cal_final_total(count)
        {

         

         var  final_item_total = 0;
          var item_total = 0;
          for(j=1; j<=count; j++)
          {

            var quantity = 0;

            var price = 0;

            var discount_rate = 0;

            var actual_amount = 0;

            var discount_amount = 0;

            var sales_qty=0;

            quantity = $('#salereturnitems_quantity'+j).val();

            price = $('#salereturnitems_price'+j).val();

            discount_rate = $('#salereturnitems_discount_rate'+j).val();

            sales_qty = $('#salereturnitems_salesqty'+j).val();
			
			

            
             $('#salereturnitems_quantity'+j).css("border", "1px solid gray");
            

            

            

            

            if (quantity > 0) {
         
         

              if(parseFloat(quantity) > parseFloat(sales_qty))
              {
                $('#salereturnitems_quantity'+j).focus();

                 $('#salereturnitems_quantity'+j).css("border", "3px solid red");

               // alert('Sales return quantity should be less than sales quantity');
                return false;
              }

              actual_amount = parseFloat(quantity) * parseFloat(price);
			  
			  
			  
			  $('#salereturnitems_actual_amount'+j).val(actual_amount);
			  


              if(discount_rate > 0)
                {
                  discount_amount = parseFloat(actual_amount)*parseFloat(discount_rate)/100;
                 
                }
				
				$('#salereturnitems_discount_amount'+j).val(discount_amount);
				
              
                
                item_total = parseFloat(actual_amount) - parseFloat(discount_amount);

                final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                $('#salereturnitems_total'+j).val(item_total);
              


            }
            

          }

          

          $('#salereturn_amount').val(final_item_total);



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




          /*var final_item_total = 0;
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
			
			*/
		

        }
		
		

        $(document).on('blur', '.salereturnitems_quantity ', function(){
          cal_final_total(count);
        });


        $(document).on('change', '#salereturn_discounttype', function(){
          cal_final_total(count);
        });

        $(document).on('blur', '#salereturn_discountamount', function(){
          cal_final_total(count);
        });

        $(document).on('change', '#salereturn_taxtype', function(){
          cal_final_total(count);
        });

        $(document).on('change', '#salereturn_taxamount', function(){
          cal_final_total(count);
        });







      });
      </script>
@stop
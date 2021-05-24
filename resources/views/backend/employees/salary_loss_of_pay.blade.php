@extends('backend.layouts.salesreturn')

@section('title', app_name() . ' | ' . __('labels.backend.access.employees.management'))

@section('breadcrumb-links')
@include('backend.employees.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                   Employee Monthly Salary - May 2021
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="employee_salary" class="table">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.employees.table.name') }} :Robin</th>
								 
								 <th>Emp No: 001</th>
                                
                             
                            </tr>
							
							<tr>
							
							 <td>
							 
							 </td>
                                
                             
                            </tr>
							
							
                        </thead>
                        <tbody>
						   </tbody>
                    </table>
			   {{ Form::open(['route' => 'admin.sales.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}		
					
						<div class="col">
            <div class="form-group row">
                
                
                   <div class="col-md-12">
				<label for="name" class=" from-control-label required">Basic Salary</label>
                    <input class="form-control" placeholder="Basic Salary" required="required" name="basic_salary" type="text" id="basic_salary">
                </div><!--col-->
				
			 </div>
			 </div>
               
					
		    <div class="col">
            <div class="form-group row">
			<div class="col-md-12">
                 <h5> Allowance :</h5> 
             </div>   
               
				
				
				<?php
				    $allowance_count=0;
					foreach($allowances as $allowance)
					{
						$allowance_count++;
						?>
					 <div class="col-md-3">
							<label for="name" class=" from-control-label required">
							<?php
							  echo $allowance->name ;
							 ?>
							</label>
                          <input class="form-control allowance" placeholder="<?php echo $allowance->name ;?>"  
							 name="allowance['<?php echo $allowance->short_name ;?>']" type="text" id="allowance<?php echo $allowance_count?>">
                     </div><!--col-->
						<?php
						
					}
			     ?>		
							 
				
				
				
				
            </div>
			</div>
			
			<hr>
			
			
			<div class="col">
            <div class="form-group row">
			<div class="col-md-12">
                 <h5> Deduction :</h5> 
             </div>   
               
				
				
				<?php
				     $deduction_count=0;
					foreach($deductions as $deduction)
					{
						$deduction_count++;
						?>
					 <div class="col-md-3">
							<label for="name" class=" from-control-label required">
							<?php
							  echo $deduction->name ;
							 ?>
							</label>
                          <input class="form-control deduction" placeholder="<?php echo $deduction->name ;?>"  
							 name="deduction['<?php echo $deduction->short_name ;?>']" type="text" id="deduction<?php echo $deduction_count ;?>">
                     </div><!--col-->
						<?php
						
					}
			     ?>		
							 
				
				
				
				
            </div>
			</div>
			<hr>
			
			<div class="col">
            <div class="form-group row">
			<div class="col-md-12">
                 <h5> Loss of Pay :</h5> 
             </div> 
			 
			 <div class="col-md-3">
				<label for="name" class=" from-control-label required">Total Leave</label>
                    <input class="form-control" placeholder="Total Leave" required="required" name="total_allowance" type="text" id="total_allowance">
					
             </div><!--col-->
			 
			  <div class="col-md-3">
				<label for="name" class=" from-control-label required">No of Loss pay Leave</label>
                    <input class="form-control" placeholder="No of Loss pay Leave" required="required" name="total_allowance" type="text" id="total_allowance">
					
             </div><!--col-->
			 
			  
			  <div class="col-md-3">
				<label for="name" class=" from-control-label required">Total Loss of Pay</label>
                    <input class="form-control" placeholder="Total Loss of Pay" required="required" name="total_allowance" type="text" id="total_allowance">
					
             </div><!--col-->
				
			 
			</div>
            </div>
			
			
			
			<hr>
			
			
			
			
				<div class="col">
            <div class="form-group row">
                
				
				<div class="col-md-3">
				<label for="name" class=" from-control-label required">Total Allowance</label>
                    <input class="form-control" placeholder="Allowance" required="required" name="total_allowance" type="text" id="total_allowance">
					
                </div><!--col-->
				
				<div class="col-md-3">
				<label for="name" class=" from-control-label required">Total Deduction</label>
                    <input class="form-control" placeholder="Deduction" required="required" name="total_deduction" type="text" id="total_deduction">
					
                </div><!--col-->
				
				
                
                <div class="col-md-3">
				<label for="name" class=" from-control-label required">Net Salary</label>
                    <input class="form-control" placeholder="Net Salary" required="required" name="net_salary" type="text" id="net_salary">
                </div><!--col-->
				
			 </div>
			 </div>
			
			
			 <div class="col">
            <div class="form-group row">
                
				
				<div class="col-md-3">
				  <input type="hidden" value="<?php echo $deduction_count?>" id="deduction_count">
				  
				  <input type="hidden" value="<?php echo $allowance_count?>" id="allowance_count">
				  
				  
				</div>
				
			 </div>
             </div>			 
			
			
			   <div class="card">
       
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.sales.index' ])
    </div><!--card-->
    {{ Form::close() }}
						
			
				  
                     
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
   
    //deduction_count  allowance_count basic_salary total_allowance total_deduction net_salary
   $(document).ready(function(){
	   
	   function cal_salary_total()
	   {
		  var allowance_count=  $('#allowance_count').val();
		  
		  
		  var deduction_count=  $('#deduction_count').val();
		  
		  
		  
		  var  final_amount = 0;
          var allowance_amount = 0;
		  
		  var deduction_amount = 0;
		  
		  
		  var basic_salary=  $('#basic_salary').val() || 0;
		  
		   var allowance = 0;
          for(j=1; j<=allowance_count; j++)
          {

            allowance = $('#allowance'+j).val() || 0;
			
		
            allowance_amount = parseFloat(allowance_amount) + parseFloat(allowance);
			  
			
           }
		   var deduction = 0;
		   for(k=1; k<=deduction_count; k++)
          {

          
           
            deduction = $('#deduction'+k).val() || 0;
			
            deduction_amount = parseFloat(deduction_amount) + parseFloat(deduction);
			  
			
           }
		   
		   $('#total_allowance').val(allowance_amount);
		   
		   $('#total_deduction').val(deduction_amount);
		   
		   final_amount = parseFloat(basic_salary) + parseFloat(allowance_amount)- parseFloat(deduction_amount);
		   
		   $('#net_salary').val(final_amount);
	   }
	   
	   
	     $(document).on('blur', '#basic_salary', function(){
			
          cal_salary_total();
        });
		
		 $(document).on('blur', '.allowance', function(){
			
          cal_salary_total();
        });
		
		 $(document).on('blur', '.deduction', function(){
			
          cal_salary_total();
        });







      });
</script>
@stop
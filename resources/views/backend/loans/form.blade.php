<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.loan.management') }}
                <small class="text-muted">{{ __('labels.backend.access.loan.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.loans.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->
			
			
			
			 <div class="form-group row">
                {{ Form::label('employee', trans('validation.attributes.backend.access.loans.employee'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                
					  {{ Form::select('employee_id', $employee, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.employees.employee'), 'required' => 'required']) }}
					  
					  
                </div>
            </div> 
			
			<!--form-group-->
			
			 <div class="form-group row">
                {{ Form::label('amount', trans('validation.attributes.backend.access.loans.amount'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.amount'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
			 <div class="form-group row">
                {{ Form::label('duration', trans('validation.attributes.backend.access.loans.duration'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('duration', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.duration'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
			 
			
			
			
			 <div class="form-group row">
                {{ Form::label('interest', trans('validation.attributes.backend.access.loans.interest'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('interest', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.interest'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
			 <div class="form-group row">
                {{ Form::label('total_interest', trans('validation.attributes.backend.access.loans.total_interest'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('total_interest', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.total_interest'), 'required' => 'required']) }}
                </div>
            </div> 
			
		
			<!--form-group-->
			
			
			 <div class="form-group row">
                {{ Form::label('total_amount', trans('validation.attributes.backend.access.loans.total_amount'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('total_amount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.total_amount'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
			<div class="form-group row">
                {{ Form::label('emi', trans('validation.attributes.backend.access.loans.emi'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('emi', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.emi'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
			<div class="form-group row">
                {{ Form::label('startdate', trans('validation.attributes.backend.access.loans.startdate'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::date('startdate', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.startdate'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
			
			
			<div class="form-group row">
                {{ Form::label('enddate', trans('validation.attributes.backend.access.loans.enddate'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::date('enddate', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.loans.enddate'), 'required' => 'required']) }}
                </div>
            </div> 
			
			<!--form-group-->
			
			
         
			
			
         
			
			

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.loans.status'), ['class' => 'col-md-2 from-control-label required']) }}
				
				@php
                $status = isset($Brand) ? '' : 'checked'
                @endphp
				
                
                <div class="col-md-10">
				
                    
						
						<div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" 
                         {{ (isset($Brand->status) && $Brand->status === true) ? "checked" : $status }}
						 ><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>


				</div>
                </div><!--col-->
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->
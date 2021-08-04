<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.expense.management') }}
                <small class="text-muted">{{ __('labels.backend.access.expense.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.expenses.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.expenses.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->
			
			
            <div class="form-group row"  >
                {{ Form::label('parent_id', trans('validation.attributes.backend.access.expenses.parentexpense'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('parent_id', $catlist, null, ['class' => 'form-control expenses box-size', 'data-placeholder' => trans('validation.attributes.backend.access.expenses.parentexpense')]) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->

              <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.expenses.amount'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.expenses.amount'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->
			

                <div class="form-group row">
                {{ Form::label('startdate', trans('validation.attributes.backend.access.expenses.date'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::date('date', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.expenses.date'), 'required' => 'required']) }}
                </div>
            </div> 
            
            <!--form-group-->
			

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.expenses.status'), ['class' => 'col-md-2 from-control-label required']) }}
                
				@php
                $status = isset($Expense) ? '' : 'checked'
                @endphp
				
				
                <div class="col-md-10">
				
                    
						
						<div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" 
                         						 
						  {{ (isset($Expense->status) && $Expense->status === true) ? "checked" : $status }}
					
						 ><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>


				</div>
                </div><!--col-->
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->
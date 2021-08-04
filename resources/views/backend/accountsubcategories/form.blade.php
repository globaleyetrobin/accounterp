<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.accountsubcategory.management') }}
                <small class="text-muted">{{ __('labels.backend.access.accountsubcategory.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
        
			
			
            <div class="form-group row">
               

                 {{ Form::label('account_type', trans('validation.attributes.backend.access.accountsubcategories.account_type'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('parent_id', $catlist, null, ['class' => 'form-control accountsubcategories box-size', 'required' => 'required','data-placeholder' => trans('validation.attributes.backend.access.accountsubcategories.parentaccountsubcategory')]) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->
			
			

                <div class="form-group row">
            
             {{ Form::label('parent_id', trans('validation.attributes.backend.access.accountsubcategories.parentaccountsubcategory'), ['class' => 'col-md-2 from-control-label required']) }}


             <div class="col-md-10">
                    {{ Form::select('account_type', $creditdebits, null, ['class' => 'form-control select2 status box-size', 'required' => 'required', 'placeholder' => trans('validation.attributes.backend.access.accountsubcategories.account_type')]) }}
             </div>
         </div>


         <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.accountsubcategories.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.accountsubcategories.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->

            

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.accountsubcategories.status'), ['class' => 'col-md-2 from-control-label required']) }}
                
				@php
                $status = isset($Accountsubcategory) ? '' : 'checked'
                @endphp
				
				
                <div class="col-md-10">
				
                    
						
						<div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" 
                         						 
						  {{ (isset($Accountsubcategory->status) && $Accountsubcategory->status === true) ? "checked" : $status }}
					
						 ><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>


				</div>
                </div><!--col-->
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->
@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.accountsubcategory.management'))

@section('breadcrumb-links')
@include('backend.accountsubcategories.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.accountsubcategory.management') }} <small class="text-muted">{{ __('labels.backend.access.accountsubcategory.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="accountsubcategory" class="table" data-ajax_url="{{ route("admin.accountsubcategories.get") }}">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
								<th>Account Type</th>
                                
								
                                <th>{{ trans('labels.backend.access.accountsubcategory.table.createdby') }}</th>
                                <th>{{ trans('labels.backend.access.accountsubcategory.table.createdat') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
    FTX.Utils.documentReady(function() {
		
	
        FTX.Accountsubcategories.list.init();
		
    });
</script>
@stop
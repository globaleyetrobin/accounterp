@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.expensecategory.management'))

@section('breadcrumb-links')
@include('backend.expensecategories.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.expensecategory.management') }} <small class="text-muted">{{ __('labels.backend.access.expensecategory.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="expensecategory" class="table" data-ajax_url="{{ route("admin.expensecategories.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.expensecategory.table.name') }}</th>
								
                                <th>{{ trans('labels.backend.access.expensecategory.table.status') }}</th>
								
                                <th>{{ trans('labels.backend.access.expensecategory.table.createdby') }}</th>
                                <th>{{ trans('labels.backend.access.expensecategory.table.createdat') }}</th>
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
		
	
        FTX.Expensecategories.list.init();
		
    });
</script>
@stop
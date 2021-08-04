@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.expense.management'))

@section('breadcrumb-links')
@include('backend.expenses.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.expense.management') }} <small class="text-muted">{{ __('labels.backend.access.expense.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="expense" class="table" data-ajax_url="{{ route("admin.expenses.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.expense.table.name') }}</th>
								
                                <th>{{ trans('labels.backend.access.expense.table.amount') }}</th>
								
                                <th>{{ trans('labels.backend.access.expense.table.category') }}</th>
                                <th>{{ trans('labels.backend.access.expense.table.date') }}</th>
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
		
	
        FTX.Expenses.list.init();
		
    });
</script>
@stop
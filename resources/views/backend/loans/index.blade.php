@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.loan.management'))

@section('breadcrumb-links')
@include('backend.loans.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.loan.management') }} <small class="text-muted">{{ __('labels.backend.access.loan.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="loan" class="table" data-ajax_url="{{ route("admin.loans.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.loan.table.name') }}</th>
								
								<th>{{ trans('labels.backend.access.loan.table.employee') }}</th>
								
                                <th>{{ trans('labels.backend.access.loan.table.amount') }}</th>
								
                                <th>{{ trans('labels.backend.access.loan.table.duration') }}</th>
                                <th>{{ trans('labels.backend.access.loan.table.emi') }}</th>
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
		
	
        FTX.Loans.list.init();
		
    });
</script>
@stop
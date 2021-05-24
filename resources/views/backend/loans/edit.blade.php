@extends('backend.layouts.app')

@section('title', __('labels.backend.access.loan.management') . ' | ' . __('labels.backend.access.loan.edit'))

@section('breadcrumb-links')
    @include('backend.loans.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Loan, ['route' => ['admin.loans.update', $Loan], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.loans.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.loans.index', 'id' => $Loan->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
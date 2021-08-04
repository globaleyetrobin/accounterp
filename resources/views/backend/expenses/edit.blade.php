@extends('backend.layouts.app')

@section('title', __('labels.backend.access.expense.management') . ' | ' . __('labels.backend.access.expense.edit'))

@section('breadcrumb-links')
    @include('backend.expenses.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Expense, ['route' => ['admin.expenses.update', $Expense], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.expenses.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.expenses.index', 'id' => $Expense->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
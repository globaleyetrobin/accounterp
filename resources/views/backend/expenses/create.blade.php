@extends('backend.layouts.app')

@section('title', __('labels.backend.access.expense.management') . ' | ' . __('labels.backend.access.expense.create'))

@section('breadcrumb-links')
    @include('backend.expenses.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.expenses.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.expenses.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.expenses.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
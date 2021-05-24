@extends('backend.layouts.app')

@section('title', __('labels.backend.access.customers.management') . ' | ' . __('labels.backend.access.customers.edit'))

@section('breadcrumb-links')
    @include('backend.customers.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Customer, ['route' => ['admin.customers.update', $Customer], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.customers.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.customers.index', 'id' => $Customer->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
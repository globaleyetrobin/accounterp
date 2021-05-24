@extends('backend.layouts.app')

@section('title', __('labels.backend.access.customers.management') . ' | ' . __('labels.backend.access.customers.create'))

@section('breadcrumb-links')
    @include('backend.customers.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.customers.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.customers.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.customers.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
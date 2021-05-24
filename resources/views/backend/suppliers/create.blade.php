@extends('backend.layouts.app')

@section('title', __('labels.backend.access.suppliers.management') . ' | ' . __('labels.backend.access.suppliers.create'))

@section('breadcrumb-links')
    @include('backend.suppliers.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.suppliers.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.suppliers.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.suppliers.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
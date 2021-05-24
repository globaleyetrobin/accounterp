@extends('backend.layouts.app')

@section('title', __('labels.backend.access.brand.management') . ' | ' . __('labels.backend.access.brand.create'))

@section('breadcrumb-links')
    @include('backend.brands.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.brands.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.brands.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.brands.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
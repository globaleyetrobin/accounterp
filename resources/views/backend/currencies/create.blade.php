@extends('backend.layouts.app')

@section('title', __('labels.backend.access.currency.management') . ' | ' . __('labels.backend.access.currency.create'))

@section('breadcrumb-links')
    @include('backend.currencies.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.currencies.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.currencies.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.currencies.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
@extends('backend.layouts.app')

@section('title', __('labels.backend.access.purchases.management') . ' | ' . __('labels.backend.access.purchases.create'))

@section('breadcrumb-links')
    @include('backend.purchases.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.purchases.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.purchases.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.purchases.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
@extends('backend.layouts.app')

@section('title', __('labels.backend.access.allowance.management') . ' | ' . __('labels.backend.access.allowance.create'))

@section('breadcrumb-links')
    @include('backend.allowances.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.allowances.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.allowances.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.allowances.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
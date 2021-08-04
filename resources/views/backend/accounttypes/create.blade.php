@extends('backend.layouts.app')

@section('title', __('labels.backend.access.accounttype.management') . ' | ' . __('labels.backend.access.accounttype.create'))

@section('breadcrumb-links')
    @include('backend.accounttypes.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.accounttypes.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.accounttypes.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.accounttypes.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
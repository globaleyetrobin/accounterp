@extends('backend.layouts.app')

@section('title', __('labels.backend.access.journels.management') . ' | ' . __('labels.backend.access.journels.create'))

@section('breadcrumb-links')
    @include('backend.journels.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.journels.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.journels.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.journels.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
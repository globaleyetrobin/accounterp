@extends('backend.layouts.app')

@section('title', __('labels.backend.access.branches.management') . ' | ' . __('labels.backend.access.branches.create'))

@section('breadcrumb-links')
    @include('backend.branches.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.branches.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.branches.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.branches.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
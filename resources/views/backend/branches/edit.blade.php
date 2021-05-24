@extends('backend.layouts.app')

@section('title', __('labels.backend.access.branches.management') . ' | ' . __('labels.backend.access.branches.edit'))

@section('breadcrumb-links')
    @include('backend.branches.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Branch, ['route' => ['admin.branches.update', $Branch], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.branches.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.branches.index', 'id' => $Branch->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
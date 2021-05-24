@extends('backend.layouts.app')

@section('title', __('labels.backend.access.category.management') . ' | ' . __('labels.backend.access.category.edit'))

@section('breadcrumb-links')
    @include('backend.categories.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Category, ['route' => ['admin.categories.update', $Category], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.categories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.categories.index', 'id' => $Category->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
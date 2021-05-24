@extends('backend.layouts.app')

@section('title', __('labels.backend.access.subcategory.management') . ' | ' . __('labels.backend.access.subcategory.edit'))

@section('breadcrumb-links')
    @include('backend.subcategories.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Subcategory, ['route' => ['admin.subcategories.update', $Subcategory], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.subcategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.subcategories.index', 'id' => $Subcategory->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
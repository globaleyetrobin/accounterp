@extends('backend.layouts.app')

@section('title', __('labels.backend.access.expensecategory.management') . ' | ' . __('labels.backend.access.Expensecategory.edit'))

@section('breadcrumb-links')
    @include('backend.expensecategories.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Expensecategory, ['route' => ['admin.expensecategories.update', $Expensecategory], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.expensecategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.expensecategories.index', 'id' => $Expensecategory->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
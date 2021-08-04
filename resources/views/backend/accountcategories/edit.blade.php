@extends('backend.layouts.app')

@section('title', __('labels.backend.access.accountcategory.management') . ' | ' . __('labels.backend.access.accountcategory.edit'))

@section('breadcrumb-links')
    @include('backend.accountcategories.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Accountcategory, ['route' => ['admin.accountcategories.update', $Accountcategory], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.accountcategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.accountcategories.index', 'id' => $Accountcategory->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
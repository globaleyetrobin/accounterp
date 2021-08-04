@extends('backend.layouts.app')

@section('title', __('labels.backend.access.accountsubcategory.management') . ' | ' . __('labels.backend.access.accountsubcategory.edit'))

@section('breadcrumb-links')
    @include('backend.accountsubcategories.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Accountsubcategory, ['route' => ['admin.accountsubcategories.update', $Accountsubcategory], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.accountsubcategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.accountsubcategories.index', 'id' => $Accountsubcategory->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
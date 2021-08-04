@extends('backend.layouts.app')

@section('title', __('labels.backend.access.journels.management') . ' | ' . __('labels.backend.access.journels.edit'))

@section('breadcrumb-links')
    @include('backend.journels.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Journel, ['route' => ['admin.journels.update', $Journel], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.journels.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.journels.index', 'id' => $Journel->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
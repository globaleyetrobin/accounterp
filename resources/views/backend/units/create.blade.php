@extends('backend.layouts.app')

@section('title', __('labels.backend.access.unit.management') . ' | ' . __('labels.backend.access.unit.create'))

@section('breadcrumb-links')
    @include('backend.units.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.units.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.units.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.units.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
@extends('backend.layouts.app')

@section('title', __('labels.backend.access.unit.management') . ' | ' . __('labels.backend.access.unit.edit'))

@section('breadcrumb-links')
    @include('backend.units.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Unit, ['route' => ['admin.units.update', $Unit], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.units.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.units.index', 'id' => $Unit->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection
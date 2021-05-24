<?php


Breadcrumbs::for('admin.companies.index', function ($trail) {
    $trail->push(__('labels.backend.access.companies.management'), route('admin.companies.index'));
});

Breadcrumbs::for('admin.companies.create', function ($trail) {
    $trail->parent('admin.companies.index');
    $trail->push(__('labels.backend.access.companies.management'), route('admin.companies.create'));
});

Breadcrumbs::for('admin.companies.edit', function ($trail, $id) {
    $trail->parent('admin.companies.index');
    $trail->push(__('labels.backend.access.companies.management'), route('admin.companies.edit', $id));
});

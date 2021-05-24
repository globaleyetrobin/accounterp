<?php


Breadcrumbs::for('admin.customers.index', function ($trail) {
    $trail->push(__('labels.backend.access.customers.management'), route('admin.customers.index'));
});

Breadcrumbs::for('admin.customers.create', function ($trail) {
    $trail->parent('admin.customers.index');
    $trail->push(__('labels.backend.access.customers.management'), route('admin.customers.create'));
});

Breadcrumbs::for('admin.customers.edit', function ($trail, $id) {
    $trail->parent('admin.customers.index');
    $trail->push(__('labels.backend.access.customers.management'), route('admin.customers.edit', $id));
});

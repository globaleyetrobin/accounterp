<?php


Breadcrumbs::for('admin.suppliers.index', function ($trail) {
    $trail->push(__('labels.backend.access.suppliers.management'), route('admin.suppliers.index'));
});

Breadcrumbs::for('admin.suppliers.create', function ($trail) {
    $trail->parent('admin.suppliers.index');
    $trail->push(__('labels.backend.access.suppliers.management'), route('admin.suppliers.create'));
});

Breadcrumbs::for('admin.suppliers.edit', function ($trail, $id) {
    $trail->parent('admin.suppliers.index');
    $trail->push(__('labels.backend.access.suppliers.management'), route('admin.suppliers.edit', $id));
});

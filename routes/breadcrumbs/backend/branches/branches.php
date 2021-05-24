<?php


Breadcrumbs::for('admin.branches.index', function ($trail) {
    $trail->push(__('labels.backend.access.branches.management'), route('admin.branches.index'));
});

Breadcrumbs::for('admin.branches.create', function ($trail) {
    $trail->parent('admin.branches.index');
    $trail->push(__('labels.backend.access.branches.management'), route('admin.branches.create'));
});

Breadcrumbs::for('admin.branches.edit', function ($trail, $id) {
    $trail->parent('admin.branches.index');
    $trail->push(__('labels.backend.access.branches.management'), route('admin.branches.edit', $id));
});

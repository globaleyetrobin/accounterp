<?php

Breadcrumbs::for('admin.allowances.index', function ($trail) {
    $trail->push(__('labels.backend.access.allowance.management'), route('admin.allowances.index'));
});

Breadcrumbs::for('admin.allowances.create', function ($trail) {
    $trail->parent('admin.allowances.index');
    $trail->push(__('labels.backend.access.allowance.management'), route('admin.allowances.create'));
});

Breadcrumbs::for('admin.allowances.edit', function ($trail, $id) {
    $trail->parent('admin.allowances.index');
    $trail->push(__('labels.backend.access.allowance.management'), route('admin.allowances.edit', $id));
});

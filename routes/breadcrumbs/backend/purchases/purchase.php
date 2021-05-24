<?php

Breadcrumbs::for('admin.purchases.index', function ($trail) {
    $trail->push(__('labels.backend.access.purchases.management'), route('admin.purchases.index'));
});

Breadcrumbs::for('admin.purchases.create', function ($trail) {
    $trail->parent('admin.purchases.index');
    $trail->push(__('labels.backend.access.purchases.management'), route('admin.purchases.create'));
});

Breadcrumbs::for('admin.purchases.edit', function ($trail, $id) {
    $trail->parent('admin.purchases.index');
    $trail->push(__('labels.backend.access.purchases.management'), route('admin.purchases.edit', $id));
});

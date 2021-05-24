<?php

Breadcrumbs::for('admin.brands.index', function ($trail) {
    $trail->push(__('labels.backend.access.brand.management'), route('admin.brands.index'));
});

Breadcrumbs::for('admin.brands.create', function ($trail) {
    $trail->parent('admin.brands.index');
    $trail->push(__('labels.backend.access.brand.management'), route('admin.brands.create'));
});

Breadcrumbs::for('admin.brands.edit', function ($trail, $id) {
    $trail->parent('admin.brands.index');
    $trail->push(__('labels.backend.access.brand.management'), route('admin.brands.edit', $id));
});

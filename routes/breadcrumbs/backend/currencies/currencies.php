<?php

Breadcrumbs::for('admin.currencies.index', function ($trail) {
    $trail->push(__('labels.backend.access.currency.management'), route('admin.currencies.index'));
});

Breadcrumbs::for('admin.currencies.create', function ($trail) {
    $trail->parent('admin.currencies.index');
    $trail->push(__('labels.backend.access.currency.management'), route('admin.currencies.create'));
});

Breadcrumbs::for('admin.currencies.edit', function ($trail, $id) {
    $trail->parent('admin.currencies.index');
    $trail->push(__('labels.backend.access.currency.management'), route('admin.currencies.edit', $id));
});

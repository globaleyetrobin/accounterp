<?php

Breadcrumbs::for('admin.assets.index', function ($trail) {
    $trail->push(__('labels.backend.access.assets.management'), route('admin.assets.index'));
});

Breadcrumbs::for('admin.assets.create', function ($trail) {
    $trail->parent('admin.assets.index');
    $trail->push(__('labels.backend.access.assets.management'), route('admin.assets.create'));
});

Breadcrumbs::for('admin.assets.edit', function ($trail, $id) {
    $trail->parent('admin.assets.index');
    $trail->push(__('labels.backend.access.assets.management'), route('admin.assets.edit', $id));
});

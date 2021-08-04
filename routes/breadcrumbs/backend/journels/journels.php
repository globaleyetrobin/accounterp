<?php

Breadcrumbs::for('admin.journels.index', function ($trail) {
    $trail->push(__('labels.backend.access.journels.management'), route('admin.journels.index'));
});

Breadcrumbs::for('admin.journels.create', function ($trail) {
    $trail->parent('admin.journels.index');
    $trail->push(__('labels.backend.access.journels.management'), route('admin.journels.create'));
});

Breadcrumbs::for('admin.journels.edit', function ($trail, $id) {
    $trail->parent('admin.journels.index');
    $trail->push(__('labels.backend.access.journels.management'), route('admin.journels.edit', $id));
});

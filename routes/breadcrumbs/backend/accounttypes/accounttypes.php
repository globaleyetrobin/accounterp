<?php

Breadcrumbs::for('admin.accounttypes.index', function ($trail) {
    $trail->push(__('labels.backend.access.accounttype.management'), route('admin.accounttypes.index'));
});

Breadcrumbs::for('admin.accounttypes.create', function ($trail) {
    $trail->parent('admin.accounttypes.index');
    $trail->push(__('labels.backend.access.accounttype.management'), route('admin.accounttypes.create'));
});

Breadcrumbs::for('admin.accounttypes.edit', function ($trail, $id) {
    $trail->parent('admin.accounttypes.index');
    $trail->push(__('labels.backend.access.accounttype.management'), route('admin.accounttypes.edit', $id));
});

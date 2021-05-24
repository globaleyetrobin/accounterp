<?php

Breadcrumbs::for('admin.units.index', function ($trail) {
    $trail->push(__('labels.backend.access.unit.management'), route('admin.units.index'));
});

Breadcrumbs::for('admin.units.create', function ($trail) {
    $trail->parent('admin.units.index');
    $trail->push(__('labels.backend.access.unit.management'), route('admin.units.create'));
});

Breadcrumbs::for('admin.units.edit', function ($trail, $id) {
    $trail->parent('admin.units.index');
    $trail->push(__('labels.backend.access.unit.management'), route('admin.units.edit', $id));
});

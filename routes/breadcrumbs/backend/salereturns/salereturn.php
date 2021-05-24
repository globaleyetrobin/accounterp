<?php

Breadcrumbs::for('admin.salereturns.index', function ($trail) {
    $trail->push(__('labels.backend.access.salereturns.management'), route('admin.salereturns.index'));
});

Breadcrumbs::for('admin.salereturns.create', function ($trail) {
    $trail->parent('admin.salereturns.index');
    $trail->push(__('labels.backend.access.salereturns.management'), route('admin.salereturns.create'));
});

Breadcrumbs::for('admin.salereturns.edit', function ($trail, $id) {
    $trail->parent('admin.salereturns.index');
    $trail->push(__('labels.backend.access.salereturns.management'), route('admin.salereturns.edit', $id));
});

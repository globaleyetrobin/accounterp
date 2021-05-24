<?php

Breadcrumbs::for('admin.purchasereturns.index', function ($trail) {
    $trail->push(__('labels.backend.access.purchasereturns.management'), route('admin.purchasereturns.index'));
});

Breadcrumbs::for('admin.purchasereturns.create', function ($trail) {
    $trail->parent('admin.purchasereturns.index');
    $trail->push(__('labels.backend.access.purchasereturns.management'), route('admin.purchasereturns.create'));
});

Breadcrumbs::for('admin.purchasereturns.edit', function ($trail, $id) {
    $trail->parent('admin.purchasereturns.index');
    $trail->push(__('labels.backend.access.purchasereturns.management'), route('admin.purchasereturns.edit', $id));
});

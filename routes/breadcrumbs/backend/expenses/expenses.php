<?php

Breadcrumbs::for('admin.expenses.index', function ($trail) {
    $trail->push(__('labels.backend.access.expensecategory.management'), route('admin.expenses.index'));
});

Breadcrumbs::for('admin.expenses.create', function ($trail) {
    $trail->parent('admin.expenses.index');
    $trail->push(__('labels.backend.access.expensecategory.management'), route('admin.expenses.create'));
});

Breadcrumbs::for('admin.expenses.edit', function ($trail, $id) {
    $trail->parent('admin.expenses.index');
    $trail->push(__('labels.backend.access.expensecategory.management'), route('admin.expenses.edit', $id));
});

<?php

Breadcrumbs::for('admin.expensecategories.index', function ($trail) {
    $trail->push(__('labels.backend.access.expensecategory.management'), route('admin.expensecategories.index'));
});

Breadcrumbs::for('admin.expensecategories.create', function ($trail) {
    $trail->parent('admin.expensecategories.index');
    $trail->push(__('labels.backend.access.expensecategory.management'), route('admin.expensecategories.create'));
});

Breadcrumbs::for('admin.expensecategories.edit', function ($trail, $id) {
    $trail->parent('admin.expensecategories.index');
    $trail->push(__('labels.backend.access.expensecategory.management'), route('admin.expensecategories.edit', $id));
});

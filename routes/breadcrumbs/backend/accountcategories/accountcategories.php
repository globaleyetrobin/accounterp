<?php

Breadcrumbs::for('admin.accountcategories.index', function ($trail) {
    $trail->push(__('labels.backend.access.accountcategory.management'), route('admin.accountcategories.index'));
});

Breadcrumbs::for('admin.accountcategories.create', function ($trail) {
    $trail->parent('admin.accountcategories.index');
    $trail->push(__('labels.backend.access.accountcategory.management'), route('admin.accountcategories.create'));
});

Breadcrumbs::for('admin.accountcategories.edit', function ($trail, $id) {
    $trail->parent('admin.accountcategories.index');
    $trail->push(__('labels.backend.access.accountcategory.management'), route('admin.accountcategories.edit', $id));
});

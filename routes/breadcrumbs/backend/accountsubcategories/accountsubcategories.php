<?php

Breadcrumbs::for('admin.accountsubcategories.index', function ($trail) {
    $trail->push(__('labels.backend.access.accountsubcategory.management'), route('admin.accountsubcategories.index'));
});

Breadcrumbs::for('admin.accountsubcategories.create', function ($trail) {
    $trail->parent('admin.accountsubcategories.index');
    $trail->push(__('labels.backend.access.accountsubcategory.management'), route('admin.accountsubcategories.create'));
});

Breadcrumbs::for('admin.accountsubcategories.edit', function ($trail, $id) {
    $trail->parent('admin.accountsubcategories.index');
    $trail->push(__('labels.backend.access.accountsubcategory.management'), route('admin.accountsubcategories.edit', $id));
});

<?php

Breadcrumbs::for('admin.subcategories.index', function ($trail) {
    $trail->push(__('labels.backend.access.subcategory.management'), route('admin.subcategories.index'));
});

Breadcrumbs::for('admin.subcategories.create', function ($trail) {
    $trail->parent('admin.subcategories.index');
    $trail->push(__('labels.backend.access.subcategory.management'), route('admin.subcategories.create'));
});

Breadcrumbs::for('admin.subcategories.edit', function ($trail, $id) {
    $trail->parent('admin.subcategories.index');
    $trail->push(__('labels.backend.access.subcategory.management'), route('admin.subcategories.edit', $id));
});

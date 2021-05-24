<?php

Breadcrumbs::for('admin.sales.index', function ($trail) {
    $trail->push(__('labels.backend.access.sales.management'), route('admin.sales.index'));
});

Breadcrumbs::for('admin.sales.create', function ($trail) {
    $trail->parent('admin.sales.index');
    $trail->push(__('labels.backend.access.sales.management'), route('admin.sales.create'));
});

Breadcrumbs::for('admin.sales.edit', function ($trail, $id) {
    $trail->parent('admin.sales.index');
    $trail->push(__('labels.backend.access.sales.management'), route('admin.sales.edit', $id));
});


Breadcrumbs::for('admin.sales.salesretrun', function ($trail, $id) {
    $trail->push('Title Here', route('admin.sales.salesretrun'));
});

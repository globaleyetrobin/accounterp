<?php

Breadcrumbs::for('admin.deductions.index', function ($trail) {
    $trail->push(__('labels.backend.access.deduction.management'), route('admin.deductions.index'));
});

Breadcrumbs::for('admin.deductions.create', function ($trail) {
    $trail->parent('admin.deductions.index');
    $trail->push(__('labels.backend.access.deduction.management'), route('admin.deductions.create'));
});

Breadcrumbs::for('admin.deductions.edit', function ($trail, $id) {
    $trail->parent('admin.deductions.index');
    $trail->push(__('labels.backend.access.deduction.management'), route('admin.deductions.edit', $id));
});

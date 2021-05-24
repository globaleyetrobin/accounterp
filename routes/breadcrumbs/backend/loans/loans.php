<?php

Breadcrumbs::for('admin.loans.index', function ($trail) {
    $trail->push(__('labels.backend.access.loan.management'), route('admin.loans.index'));
});

Breadcrumbs::for('admin.loans.create', function ($trail) {
    $trail->parent('admin.loans.index');
    $trail->push(__('labels.backend.access.loan.management'), route('admin.loans.create'));
});

Breadcrumbs::for('admin.loans.edit', function ($trail, $id) {
    $trail->parent('admin.loans.index');
    $trail->push(__('labels.backend.access.loan.management'), route('admin.loans.edit', $id));
});

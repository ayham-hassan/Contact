<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Address_start
Breadcrumbs::register('admin.address.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.addresses.title'),
        route('admin.address.index')
    );
});

Breadcrumbs::register('admin.address.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.address.index');
    $breadcrumbs->push(
        __('labels.backend.addresses.create'),
        route('admin.address.create')
    );
});

Breadcrumbs::register('admin.address.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.address.index');
    $breadcrumbs->push(
        __('menus.backend.addresses.view'),
        route('admin.address.show', $id)
    );
});

Breadcrumbs::register('admin.address.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.address.index');
    $breadcrumbs->push(
        __('menus.backend.addresses.edit'),
        route('admin.address.edit', $id)
    );
});
//end_Address_end

//start_Customer_start
Breadcrumbs::register('admin.customer.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.customers.title'),
        route('admin.customer.index')
    );
});

Breadcrumbs::register('admin.customer.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.customer.index');
    $breadcrumbs->push(
        __('labels.backend.customers.create'),
        route('admin.customer.create')
    );
});

Breadcrumbs::register('admin.customer.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.customer.index');
    $breadcrumbs->push(
        __('menus.backend.customers.view'),
        route('admin.customer.show', $id)
    );
});

Breadcrumbs::register('admin.customer.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.customer.index');
    $breadcrumbs->push(
        __('menus.backend.customers.edit'),
        route('admin.customer.edit', $id)
    );
});
//end_Customer_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';

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

//start_CustomerAddress_start
Breadcrumbs::register('admin.customer_address.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.customer_addresses.title'),
        route('admin.customer_address.index')
    );
});

Breadcrumbs::register('admin.customer_address.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.customer_address.index');
    $breadcrumbs->push(
        __('labels.backend.customer_addresses.create'),
        route('admin.customer_address.create')
    );
});

Breadcrumbs::register('admin.customer_address.show', function (
    $breadcrumbs,
    $id
) {
    $breadcrumbs->parent('admin.customer_address.index');
    $breadcrumbs->push(
        __('menus.backend.customer_addresses.view'),
        route('admin.customer_address.show', $id)
    );
});

Breadcrumbs::register('admin.customer_address.edit', function (
    $breadcrumbs,
    $id
) {
    $breadcrumbs->parent('admin.customer_address.index');
    $breadcrumbs->push(
        __('menus.backend.customer_addresses.edit'),
        route('admin.customer_address.edit', $id)
    );
});
//end_CustomerAddress_end

//start_Status_start
Breadcrumbs::register('admin.status.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.status.title'),
        route('admin.status.index')
    );
});

Breadcrumbs::register('admin.status.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.status.index');
    $breadcrumbs->push(
        __('labels.backend.status.create'),
        route('admin.status.create')
    );
});

Breadcrumbs::register('admin.status.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.status.index');
    $breadcrumbs->push(
        __('menus.backend.status.view'),
        route('admin.status.show', $id)
    );
});

Breadcrumbs::register('admin.status.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.status.index');
    $breadcrumbs->push(
        __('menus.backend.status.edit'),
        route('admin.status.edit', $id)
    );
});
//end_Status_end

//start_Contact_start
Breadcrumbs::register('admin.contact.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.contacts.title'),
        route('admin.contact.index')
    );
});

Breadcrumbs::register('admin.contact.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.contact.index');
    $breadcrumbs->push(
        __('labels.backend.contacts.create'),
        route('admin.contact.create')
    );
});

Breadcrumbs::register('admin.contact.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.contact.index');
    $breadcrumbs->push(
        __('menus.backend.contacts.view'),
        route('admin.contact.show', $id)
    );
});

Breadcrumbs::register('admin.contact.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.contact.index');
    $breadcrumbs->push(
        __('menus.backend.contacts.edit'),
        route('admin.contact.edit', $id)
    );
});
//end_Contact_end

//start_Outcome_start
Breadcrumbs::register('admin.outcome.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.outcomes.title'),
        route('admin.outcome.index')
    );
});

Breadcrumbs::register('admin.outcome.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.outcome.index');
    $breadcrumbs->push(
        __('labels.backend.outcomes.create'),
        route('admin.outcome.create')
    );
});

Breadcrumbs::register('admin.outcome.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.outcome.index');
    $breadcrumbs->push(
        __('menus.backend.outcomes.view'),
        route('admin.outcome.show', $id)
    );
});

Breadcrumbs::register('admin.outcome.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.outcome.index');
    $breadcrumbs->push(
        __('menus.backend.outcomes.edit'),
        route('admin.outcome.edit', $id)
    );
});
//end_Outcome_end

//start_Type_start
Breadcrumbs::register('admin.type.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.types.title'),
        route('admin.type.index')
    );
});

Breadcrumbs::register('admin.type.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.type.index');
    $breadcrumbs->push(
        __('labels.backend.types.create'),
        route('admin.type.create')
    );
});

Breadcrumbs::register('admin.type.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.type.index');
    $breadcrumbs->push(
        __('menus.backend.types.view'),
        route('admin.type.show', $id)
    );
});

Breadcrumbs::register('admin.type.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.type.index');
    $breadcrumbs->push(
        __('menus.backend.types.edit'),
        route('admin.type.edit', $id)
    );
});
//end_Type_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';

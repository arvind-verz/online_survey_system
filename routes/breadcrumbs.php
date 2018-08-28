<?php
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', url('/admin/home'));
});

Breadcrumbs::for('profile', function ($trail) {
	$trail->parent('dashboard');
    $trail->push('Profile', url('/admin/profile'));
});

Breadcrumbs::for('pages', function ($trail) {
	$trail->parent('dashboard');
	$trail->push('Settings');
    $trail->push('Pages', url('/admin/cms/pages'));
});

Breadcrumbs::for('create_pages', function ($trail) {
	$trail->parent('pages');
    $trail->push('Create Pages', url('/admin/cms/pages/create'));
});

Breadcrumbs::for('logo', function ($trail) {
	$trail->parent('dashboard');
	$trail->push('Settings');
    $trail->push('Logo', url('/admin/cms/settings/logo'));
});

Breadcrumbs::for('header', function ($trail) {
	$trail->parent('dashboard');
	$trail->push('Settings');
    $trail->push('Header', url('/admin/cms/settings/header'));
});

Breadcrumbs::for('create_sales_users', function ($trail) {
	$trail->parent('dashboard');
	$trail->push('Sales');
    $trail->push('Users', url('/admin/department/sales/index'));
});
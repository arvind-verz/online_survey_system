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

Breadcrumbs::for('department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type));
    $trail->push(ucfirst($type), url('/admin/department/sales/index'));
});

Breadcrumbs::for('create_department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type . 's'));
    $trail->push('Add '. ucfirst($type), url('/admin/department/' . $type . '/create'));
});

Breadcrumbs::for('edit_department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type . 's'));
    $trail->push('Edit '. ucfirst($type), url('/admin/department/' . $type . 's' . '/edit'));
});

Breadcrumbs::for('view_department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type));
    $trail->push('Edit '. ucfirst($type), url('/admin/department/' . $type . '/view'));
});
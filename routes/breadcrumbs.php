<?php
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', url('/admin/home'));
});

Breadcrumbs::for('profile', function ($trail) {
	$trail->parent('dashboard');
    $trail->push('Profile', url('/admin/profile'));
});

Breadcrumbs::for('roles-and-permission', function ($trail) {
	$trail->parent('dashboard');
    $trail->push('Roles and Permission', url('/admin/roles-and-permission'));
});

Breadcrumbs::for('edit-roles-and-permission', function ($trail, $id) {
	$trail->parent('roles-and-permission');
    $trail->push('Edit', url('/admin/edit-roles-and-permission/' . $id));
});

Breadcrumbs::for('pages', function ($trail) {
	$trail->parent('dashboard');
    $trail->push('Pages', url('/admin/cms/pages'));
});

Breadcrumbs::for('create_pages', function ($trail) {
	$trail->parent('pages');
    $trail->push('Create', url('/admin/cms/pages/create'));
});

Breadcrumbs::for('department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type));
    $trail->push(ucfirst($type), url('/admin/department/sales/index'));
});

Breadcrumbs::for('create_department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type . 's'));
    $trail->push(ucfirst($type) . 's', url('admin/' . $department . '/'. $type . 's'));
    $trail->push('Create', url('/admin/' . $department . '/' . $type . '/create'));
});

Breadcrumbs::for('edit_department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type . 's'));
	$trail->push(ucfirst($type) . 's', url('admin/' . $department . '/'. $type . 's'));
    $trail->push('Edit', url('/admin/' . $department . '/' . $type . 's' . '/edit'));
});

Breadcrumbs::for('view_department', function ($trail, $department, $type) {
	$trail->parent('dashboard');
	$trail->push(ucfirst($department), url('admin/' . $department . '/'. $type));
	$trail->push(ucfirst($type) . 's', url('admin/' . $department . '/'. $type));
    $trail->push('View', url('/admin/' . $department . '/' . $type . '/view'));
});

Breadcrumbs::for('notifications', function ($trail) {
	$trail->parent('dashboard');
    $trail->push('Notifications', url('/admin/all-notifications'));
});

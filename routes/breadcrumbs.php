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
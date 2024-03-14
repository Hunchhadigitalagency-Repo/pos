<?php

use App\Models\User;
use OpenAdmin\Admin\Grid;

$grid = new Grid(new User);
$grid->column('id', __('ID'))->sortable();
$grid->column('email', __('Email'))->sortable();
$grid->column('created_at', __('Created at'));
$grid->column('updated_at', __('Updated at'));

echo($grid->render());
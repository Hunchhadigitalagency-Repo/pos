<?php

namespace App\Admin\Controllers\Business;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Business;
use App\Models\User;

class BusinessController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Business';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Business());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'));
        $grid->column('pin_no', __('Pin no'));
        $grid->column('address', __('Address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Business::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('pin_no', __('Pin no'));
        $show->field('address', __('Address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Business());
        $form->select('user_id', __('User id'))->options(User::all()->pluck('name','id'));
        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->text('pin_no', __('Pin no'));
        $form->text('address', __('Address'));
        $form->text('phone_number', __('Phone number'));

        return $form;
    }
}

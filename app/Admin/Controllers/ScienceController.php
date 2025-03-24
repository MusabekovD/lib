<?php

namespace App\Admin\Controllers;

use App\Helpers\ApiHelper;
use App\Models\Department;
use App\Models\Science;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ScienceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Science';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Science());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Fan'));
        $grid->column('department_id', __('Kafedra'))->display(function ($departmentId) {
            $department = Department::find($departmentId);
            return $department ? $department->name : null;
        });
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
        $show = new Show(Science::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
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
        $departments = Department::pluck('name', 'id');

        $form = new Form(new Science());

        $form->select('department_id', 'Kafedra')->options(function () use ($departments) {
            if ($departments) {
                return $departments;
            }
        })->required();
        $form->textarea('name', __('Fan nomi'))->required();

        return $form;
    }
}

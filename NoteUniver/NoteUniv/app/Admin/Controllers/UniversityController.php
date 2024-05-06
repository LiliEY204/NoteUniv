<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\University;

class UniversityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'University';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new University());

        $grid->column('univ_id', __('Univ id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('study_programs', __('Study programs'));
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
        $show = new Show(University::findOrFail($id));

        $show->field('univ_id', __('Univ id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('study_programs', __('Study programs'));
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
        $form = new Form(new University());

        $form->text('name', __('Name'));
        $form->text('description', __('Description'));
        $form->text('study_programs', __('Study programs'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Company;

class CompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Компании';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Company());

        $grid->column('id', __('Id'));
        $grid->column('domain', __('Домен'));
        $grid->column('title', __('Название'))->editable('text');
        // $grid->column('description', __('Описание'))->limit(50);
        // $grid->column('logo', __('Logo'));
        $grid->column('phone', __('Телефон'))->editable('text');
        $grid->column('email', __('Email'))->editable('text');
        $grid->column('address', __('Адрес'))->editable('text');

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
        $show = new Show(Company::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Название'));
        $show->field('description', __('Описание'));
        $show->field('domain', __('Домен'));
        // $show->field('logo', __('Logo'));
        $show->field('phone', __('Телефон'));
        $show->field('email', __('Email'));
        $show->field('address', __('Адрес'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Company());

        $form->text('domain', __('Домен'))->rules(['required', 'unique:companies,domain'], ['required' => 'Поле обязательно для заполнения', 'unique' => 'Домен уже занят']);
        $form->text('title', __('Название'))->rules(['required'], ['required' => 'Поле обязательно для заполнения']);
        $form->textarea('description', __('Описание'))->rules(['required', 'max:255'], ['required' => 'Поле обязательно для заполнения', 'max' => 'Максимальная длина 255 символов  ']);
        // $form->text('logo', __('Logo'));
        $form->text('phone', __('Телефон'))->rules(['required', 'regex:/^[0-9]{10,15}$/'], ['required' => 'Поле обязательно для заполнения', 'regex' => 'Неверный формат телефона']);
        $form->email('email', __('Email'))->rules(['required', 'email'], ['required' => 'Поле обязательно для заполнения', 'email' => 'Неверный формат email'])->placeholder('example@example.com');
        $form->text('address', __('Адрес'))->rules(['required'], ['required' => 'Поле обязательно для заполнения']);
        $form->hasMany('socials', 'Социальные сети', function (Form\NestedForm $form) {
            $form->text('name', __('Название'))->rules(['required'], ['required' => 'Поле обязательно для заполнения']);
            $form->text('url', __('URL'))->rules(['required', 'url'], ['required' => 'Поле обязательно для заполнения', 'url' => 'Неверный формат URL']);
            $form->icon('icon', __('Иконка'))->rules(['required'], ['required' => 'Поле обязательно для заполнения']);
            $form->color('color', __('Цвет'))->rules(['required'], ['required' => 'Поле обязательно для заполнения']);
        });

        return $form;
    }
}

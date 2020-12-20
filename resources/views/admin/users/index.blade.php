@extends('layouts.dashboard')

@section('content')

    <div class="card text-right" dir="rtl">
        <div class="card-body">
            <div class="row">
                <h4 class="header-title col"><i class="ti-user px-2"></i>المستخدمين</h4>
                <a href="{{route('admin.users.create')}}">
                    <button type="button" class="btn btn-primary mb-3 mx-3">اضافة مندوب<i
                            class="ti-plus mx-1 font-weight-bolder" style="vertical-align: middle"></i></button>
                </a>
            </div>
            <data-table-component
                url="{{route('admin.users.data')}}"
                v-bind:columns="[
                {
                    label: '#',
                    name: 'id',
                    orderable: true,
                },
                {
                    label: 'الاسم',
                    name: 'name',
                    orderable: true,
                },
                {
                    label: 'البريد الالكتروني',
                    name: 'email',
                },
                {
                    label: 'تاريخ الانضمام',
                    name: 'published',
                    orderable: true,
                },
                {
                    label: '',
                    classes: {
                    'btn': true,
                    'btn-primary': true,
                    'btn-sm': true, },
                    event: 'click',
                    handler: this.viewRow,
                    component: 'view-button-component',
                },
                {
                    label: '',
                    classes: {
                    'btn': true,
                    'btn-info': true,
                    'text-white': true,
                    'btn-sm': true, },
                    event: 'click',
                    handler: this.editRow,
                    component: 'edit-button-component',
                },
                {
                    label: '',
                    classes: {
                    'btn': true,
                    'btn-danger': true,
                    'btn-sm': true, },
                    event: 'click',
                    handler: this.deleteRowUser,
                    component: 'delete-button-component',
                },
            ]">
            </data-table-component>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')

@section('content')

    <div class="card text-right" dir="rtl">
        <div class="card-body">
            <div class="invoice-head">
                <div class="row">
                    <div class="iv-left col-11">
                        <span style="font-weight: 500">المستخدم: </span>
                        <span>{{$user->name}}</span>
                    </div>
                </div>
            </div>


            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="invoice-address">
                        <div class="row col" style="vertical-align: middle">
                            <p class="col" style="font-size: 17px">عدد الطلبات: </p>
                            <p class="px-3 col" style="font-size: 17px"><b>{{$user->orders()->count()}}</b></p>
                        </div>
                        <div class="row col" style="vertical-align: middle">
                            <p class="col" style="font-size: 17px">الارباح الكلية: </p>
                            <p class="px-3 col" style="font-size: 17px"><b>{{$user->orders()->sum('total_price')}} د.ع </b></p>
                        </div>
                        <div class="row col" style="vertical-align: middle">
                            <p class="col" style="font-size: 17px">نسبة جميلة وشورجة: </p>
                            <p class="px-3 col" style="font-size: 17px"><b>{{'%5'}}</b></p>
                        </div>
                        <hr>
                        <div class="row col" style="vertical-align: middle">
                            <p class="col" style="font-size: 17px">الربح الصافي: </p>
                            <p class="px-3 col" style="font-size: 17px"><b>{{$user->orders()->sum('total_price') - ($user->orders()->sum('total_price') * 0.05)}} د.ع</b></p>
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <br>
            <hr>
            <div class="invoice-area">
                <div class="row">
                    <div class="iv-left col-11">
                        <h3>الطلبات</h3>
                        <br>
                    </div>
                </div>
                <div class="datatable-dark">
                    <data-table-component
                        url="{{route('admin.orders.data', ['userId' => $user->id])}}"
                        v-bind:columns="[
                {
                    label: 'رقم الطلب',
                    name: 'id',
                    orderable: true,
                },
                {
                    label: 'اسم الزبون',
                    name: 'user.name',
                    orderable: true,
                },
                {
                    label: 'العنوان',
                    name: 'address',
                },
                {
                    label: 'رقم الهاتف',
                    name: 'phone',
                },
                {
                    label: 'المبلغ الكلي',
                    name: 'total_price',
                    orderable: true,
                },
                {
                    label: 'التاريخ والوقت',
                    name: 'published',
                    orderable: true,
                },
                {
                    label: 'حالة الطلب',
                    name: 'status',
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
            ]">
                    </data-table-component>
                </div>
            </div>
        </div>
    </div>

@endsection

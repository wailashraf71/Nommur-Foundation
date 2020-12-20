@extends('layouts.dashboard')

@section('content')
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="card mt-5">
        <div class="card-body">
            <div class="row">
                <h3 class="header-title col" style="font-size: 20px"><i class="ti-email pr-3" style="vertical-align: middle; font-size:24px;"></i>Donations</h3>
            </div>
            <br>
            <div class="datatable-dark">
                <data-table-component
                    url="{{route('admin.donation.data')}}"
                    v-bind:columns="[
                {
                    label: '#',
                    name: 'id',
                    orderable: true,
                },
                {
                    label: 'Full name',
                    name: 'name',
                    orderable: true,
                },
                {
                    label: 'Address',
                    name: 'address',
                    orderable: true,
                },
                {
                    label: 'Phone number',
                    name: 'phone',
                },
                {
                    label: 'Message',
                    name: 'total_price',
                    orderable: true,
                },
                {
                    label: 'Date',
                    name: 'published',
                    orderable: true,
                }
            ]">
                </data-table-component>
            </div>
        </div>
    </div>

@endsection

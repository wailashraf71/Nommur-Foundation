@extends('layouts.dashboard')

@section('content')

    <div class="card text-right" dir="rtl">
        <div class="card-body">
            <h4 class="header-title">اضافة مندوب</h4>
            <form action="{{route('admin.users.store')}}" autocomplete="off" enctype="multipart/form-data"
                  method="post">
                @csrf
                <div class="form-group">
                    <label for="name">اسم المندوب</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="ادخل اسم المندوب" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الالكتروني المندوب</label>
                    <input type="email" autocomplete="off" class="form-control" id="email" name="email" placeholder="ادخل البريد الالكتروني المندوب" required>
                </div>
                <div class="form-group">
                    <label for="password">رمز المرور للمندوب</label>
                    <input type="text" minlength="8" class="form-control" id="password" name="password" placeholder="ادخل رمز المرور للمندوب" required>
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">اضافة المندوب <i class="ti-save mx-1 font-weight-bolder" style="vertical-align: middle"></i></button>
            </form>
        </div>
    </div>


@endsection

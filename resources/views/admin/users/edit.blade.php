@extends('layouts.dashboard')

@section('content')

    <div class="card text-right" dir="rtl">
        <div class="card-body">
            <h4 class="header-title">تعديل فئة</h4>
            <form action="{{route('admin.users.update', ['user' => $user->id])}}" autocomplete="off" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" autocomplete="false">
                <div class="form-group">
                    <label for="name">اسم المندوب</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="ادخل اسم المندوب" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الالكتروني المندوب</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="ادخل البريد الالكتروني المندوب" required>
                </div>
                <div class="form-group">
                    <label for="password">رمز المرور الجديد للمندوب</label>
                    <input type="text" minlength="8" class="form-control" id="password" name="password" placeholder="ادخل رمز المرور الجديد للمندوب اذا كنت تود تغيير الرمز الحالي">
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">تغيير معلومات المندوب <i class="ti-save mx-1 font-weight-bolder" style="vertical-align: middle"></i></button>
            </form>
        </div>
    </div>

@endsection
@section('meta')
    <meta http-equiv="Pragma" content=”no-cache”>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
@endsection


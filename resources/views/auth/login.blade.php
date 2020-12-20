@extends('layouts.app')

@section('spa')
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="login-form-head">
                        <h4>Login</h4>
                        <p>Please sign in to view your dashboard</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                                <label for="exampleInputEmail1">Email</label>
                            <input type="email" id="exampleInputEmail1" name="email" value="{{ old('email') }}">
                            <i class="ti-email text-right"></i>
                            @if ($errors->has('email'))
                                <div class="text-danger"><strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif

                        </div>
                        <div class="form-gp {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password">
                            <i class="ti-lock text-right"></i>

                            @if ($errors->has('password'))
                                <div class="text-danger"><strong>{{ $errors->first('password') }}</strong></div>
                            @endif
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="remember"
                                           id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Login<i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

@endsection

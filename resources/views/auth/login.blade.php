@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Neto</b>Coffe</a>
        </div><!-- /.login-logo -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('Tenemos algunos problemas con su usuario!') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-box-body">
    <p class="login-box-msg"> {{ trans('Iniciar Sesión') }} </p>
    <form action="{{ url('/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('ejemplo@gmail.com') }}" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ trans('password') }}" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8" width="90%" style=" width: 90%;">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> {{ trans('Recordarme') }}
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4" width="100%" style=" width: 100%;">
                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('Iniciar') }}</button>
            </div><!-- /.col -->
        </div>
    </form>

    <a href="{{ url('/password/reset') }}">{{ trans('Olvide mi contraseña') }}</a><br>
    <a href="{{ url('/register') }}" class="text-center">{{ trans('Registrarme') }}</a>

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('admin.template.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection

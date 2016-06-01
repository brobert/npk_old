@extends('layouts.app')

@section('content')

<!-- START Template Main -->
    <!-- START Template Container -->
    <section class="container">
        <!-- START row -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <!-- Brand -->
                <div class="text-center" style="margin-bottom:40px;">
                    <span class="logo-figure inverse"></span>
                    <span class="logo-text inverse"></span>
                    <h5 class="semibold text-muted mt-5">Niepubliczne przedszkole "Krasnal"</h5>
                </div>
                <!--/ Brand -->

                <hr><!-- horizontal line -->

                <!-- Login form -->
                <form class="panel" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="form-stack has-icon pull-left">
                                <input name="email" value="{{ old('email') }}" type="email" class="form-control input-lg" placeholder="email" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your email" data-parsley-required>
                                <i class="ico-user2 form-control-icon"></i>
                            </div>
                            <div class="form-stack has-icon pull-left">
                                <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                <i class="ico-lock2 form-control-icon"></i>
                            </div>
                        </div>

                        <!-- Error container -->
                        <div id="error-container"class="mb15"></div>
                        <!--/ Error container -->

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox custom-checkbox">
                                        <input type="checkbox" name="remember" id="remember" value="1">
                                        <label for="remember">&nbsp;&nbsp;Remember me</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a href="javascript:void(0);">Lost password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group nm">
                            <button type="submit" class="btn btn-block btn-success"><span class="semibold">Sign In</span></button>
                        </div>
                    </div>
                </form>
                <!-- Login form -->
            </div>
        </div>
        <!--/ END row -->
    </section>
    <!--/ END Template Container -->
<!--/ END Template Main -->
@endsection

@extends('layouts.blank')

@section('content')
<!-- START row -->
<div class="row">
    <!-- Left / Top Side -->
    <div class="col-lg-3">
        <!-- tab menu -->
        <ul class="list-group list-group-tabs">
            <li class="list-group-item active">
                <a href="#profile" data-toggle="tab"><i class="ico-user2 mr5"></i> {{trans('form.user.profile')}}</a>
            </li>
            <li class="list-group-item">
                <a href="#account" data-toggle="tab"><i class="ico-archive2 mr5"></i> {{trans('form.user.account')}}</a>
            </li>
            <li class="list-group-item">
                <a href="#security" data-toggle="tab"><i class="ico-shield3 mr5"></i> {{trans('form.user.security')}}</a>
            </li>
            <li class="list-group-item">
                <a href="#password" data-toggle="tab"><i class="ico-key2 mr5"></i> {{trans('form.user.auth')}}</a>
            </li>
        </ul>
        <!-- tab menu -->

        <hr><!-- horizontal line -->

        <!-- figure -->
        <ul class="list-table">
            <li style="width:70px;">
                <img class="img-circle img-bordered" src="/image/avatar/avatar7.jpg" alt="" width="65px">
            </li>
            <li class="text-left">
                <h5 class="semibold ellipsis mt0">{{Auth::user()->get_full_name()}}</h5>
                <div style="max-width:200px;">
                    <div class="progress progress-xs mb5">
                        <div class="progress-bar progress-bar-warning" style="width:100%"></div>
                    </div>
                </div>
            </li>
        </ul>
        <!--/ figure -->

        <hr><!-- horizontal line -->
    </div>
    <!--/ Left / Top Side -->

    <!-- Left / Bottom Side -->
    <div class="col-lg-9">
        <!-- START Tab-content -->
        <div class="tab-content">
            <!-- tab-pane: profile -->
            <div class="tab-pane active" id="profile">
                @include( 'account.partials.profile')
            </div>
            <!--/ tab-pane: profile -->

            <!-- tab-pane: account -->
            <div class="tab-pane" id="account">
                @include('account.partials.account')
            </div>
            <!--/ tab-pane: account -->
            <!-- tab-pane: security -->
            <div class="tab-pane" id="security">
                @include('account.partials.security')
            </div>
            <!--/ tab-pane: security -->

            <!-- tab-pane: password -->
            <div class="tab-pane" id="password">
                <!-- form password -->
                @include('account.partials.password')
            </div>
            <!--/ tab-pane: password -->
        </div>
        <!--/ END Tab-content -->
    </div>
    <!--/ Left / Bottom Side -->
</div>
<!--/ END row -->
@endsection
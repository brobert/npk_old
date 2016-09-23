@extends('layouts.blank')

@section('content')

<!-- START row -->
<div class="row">
    <div class="col-md-12">
        <!-- START Panel -->
        <div class="panel panel-default">
            <!-- panel heading/header -->
            <div class="panel-heading">
                <h3 class="panel-title"><i class="ico-tshirt mr5"></i> T-Shirt Order Form</h3>
            </div>
            <!--/ panel heading/header -->
            <!-- START Form Wizard -->
            <form class="form-horizontal form-bordered" action="" id="wizard-validate">
                <!-- Wizard Container basic -->
                <div class="wizard-title">Customize Order</div>
                <div class="wizard-container">
                    @include('agency.partials.form_basic')
                </div>
                <!--/ Wizard Container basic -->

                <!-- Wizard Container advance -->
                <div class="wizard-title">Section Advance</div>
                <div class="wizard-container">
                    @include('agency.partials.form_advance')
                </div>
                <!-- /Wizard Container advance -->
            </form>
            <!--/ END Form Wizard -->
        </div>
        <!--/ END Panel -->
    </div>
</div>
<!--/ END row -->

<!-- START row -->
<div class="row">
    <!-- Left / Top Side -->
    <div class="col-lg-3">
        <!-- tab menu -->
        <ul class="list-group list-group-tabs">
            <li class="list-group-item active">
                <a href="#basic" data-toggle="tab"><i class="ico-user2 mr5"></i> {{trans('form.agency.basic')}}</a>
            </li>
            <li class="list-group-item">
                <a href="#advance" data-toggle="tab"><i class="ico-archive2 mr5"></i> {{trans('form.agency.advance')}}</a>
            </li>
        </ul>
        <!-- tab menu -->

        <hr><!-- horizontal line -->
    </div>
    <!--/ Left / Top Side -->

    <!-- Left / Bottom Side -->
    <div class="col-lg-9">
        <!-- START Tab-content -->
        <div class="tab-content">
            <!-- tab-pane: profile -->
            <div class="tab-pane active" id="basic">
                @include( 'agency.partials.form_basic')
            </div>
            <!--/ tab-pane: profile -->

            <!-- tab-pane: account -->
            <div class="tab-pane" id="advance">
                @include('agency.partials.form_advance')
            </div>
            <!--/ tab-pane: account -->

        </div>
        <!--/ END Tab-content -->
    </div>
    <!--/ Left / Bottom Side -->
</div>
<!--/ END row -->

@endsection
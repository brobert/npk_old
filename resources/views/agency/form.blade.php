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
            <form class="form-horizontal form-bordered" method="post" action="/manage/agency/{{$agency->id}}" id="wizard-validate">
                {{ csrf_field() }}
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

                <!-- Wizard Container advance -->
                <div class="wizard-title">Section TAX</div>
                <div class="wizard-container">
                    @include('agency.partials.form_tax')
                </div>
                <!-- /Wizard Container advance -->
            </form>
            <!--/ END Form Wizard -->
        </div>
        <!--/ END Panel -->
    </div>
</div>
<!--/ END row -->

@endsection
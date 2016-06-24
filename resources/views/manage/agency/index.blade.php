@extends('layouts.blank')

@section('content')
<div class="row">
<div class="col-md-12">
    <!-- START panel -->
    <div class="panel panel-primary">
        <!-- panel heading/header -->
        <div class="panel-heading">
            <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span> Table Showcase</h3>
            <!-- panel toolbar -->
            <div class="panel-toolbar text-right">
                <!-- option -->
                <div class="option">
                    <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                    <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                </div>
                <!--/ option -->
            </div>
            <!--/ panel toolbar -->
        </div>
        <!--/ panel heading/header -->
        <!-- panel toolbar wrapper -->
        <div class="panel-toolbar-wrapper pl0 pt5 pb5">
            <div class="panel-toolbar pl10">
                <div class="checkbox custom-checkbox pull-left">
                    <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1">
                    <label for="customcheckbox-one0">&nbsp;&nbsp;Select all</label>
                </div>
            </div>
            <div class="panel-toolbar text-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-default"><i class="ico-upload22"></i></button>
                    <button type="button" class="btn btn-sm btn-default"><i class="ico-archive2"></i></button>
                </div>

                <button type="button" class="btn btn-sm btn-danger"><i class="ico-remove3"></i></button>
            </div>
        </div>
        <!--/ panel toolbar wrapper -->

        <!-- panel body with collapse capabale -->
        <div class="table-responsive panel-collapse pull out">
            <table class="table table-bordered table-hover" id="table1">
                <thead>
                    <tr>
                        <th width="3%" class="text-center"><i class="ico-long-arrow-down"></i></th>
                        <th>Nazwa [kod]</th>
                        <th>Opis</th>
                        <th>Właściciel</th>
                        <th>Adres</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $agencies as $agency )
                        @include('manage/agency/partials/index_table_row', $agency )
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/ panel body with collapse capabale -->
        </div>
    </div>
</div>
<!--/ END row -->
@endsection
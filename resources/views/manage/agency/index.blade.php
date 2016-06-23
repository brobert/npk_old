@extends('layouts.blank')

@section('content')
<h3>List of agencies</h3>
<!-- START row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ajax source</h3>
            </div>
            <table class="table table-bordered" id="ajax-source">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>code</th>
                        <th>Nazwa</th>
                        <th>Opis</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!--/ END row -->
@endsection
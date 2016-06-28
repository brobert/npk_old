@extends('layouts.blank')

@section('content')
<!-- START row -->
<div class="row">
    <div class="col-md-12">
        <form class="panel panel-default" action="/manage/agency/store" method="POST" name="agency" data-parsley-validate>
            <div class="panel-heading">
                <h3 class="panel-title"><i class="ico-tshirt mr5"></i>{{trans('form.agency.title')}}</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="control-label">{{trans('form.agency.label.name')}}<span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label">{{trans('form.agency.label.description')}}</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        @if (0)
                        <div class="col-sm-3">
                            <label class="control-label">{{trans('form.agency.label.nip')}}</label>
                            <input name="nip" type="text" class="form-control" required>
                        </div>
                        <div class="col-sm-3">
                            <label class="control-label">{{trans('form.agency.label.regon')}}</label>
                            <input name="regon" type="text" class="form-control" required>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="row  mb10">
                        <div class="col-sm-12">
                            <label class="control-label">{{trans('form.agency.label.concact')}}</label>
                        </div>

                        <div class="col-sm-4">
                            <input name="owner" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.owner')}}"  required>
                        </div>

                        <div class="col-sm-4">
                            <input name="phone" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.phone')}}"  required>
                        </div>

                        <div class="col-sm-4">
                            <input name="e_mail" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.e_mail')}}"  required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label">{{trans('form.agency.label.adress')}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb10">
                            <input name="street" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.street')}}"  required>
                        </div>
                        <div class="col-sm-3 mb10">
                            <input name="house_number" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.house_number')}}"  required>
                        </div>
                        <div class="col-sm-3 mb10">
                            <input name="app_number" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.app_number')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb10">
                            <input name="postal_code" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.postal_code')}}"  required>
                        </div>
                        <div class="col-sm-4 mb10">
                            <input name="city" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.city')}}"  required>
                        </div>
                        <div class="col-sm-5 mb10">
                            <input name="state" type="text" class="form-control" placeholder="{{trans('form.agency.placeholder.state')}}"  required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
                <button type="reset" class="btn btn-inverse">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection
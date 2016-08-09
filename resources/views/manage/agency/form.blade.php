@extends('layouts.blank')

@section('content')
<!-- START row -->
<div class="row">
    <div class="col-md-12">
        <form class="panel panel-default" action="{{ $form_action}}" method="{{ $form_method}}" name="agency" data-parsley-validate>
            {{ csrf_field() }}
            <div class="panel-heading">
                <h3 class="panel-title"><i class="ico-office mr5"></i>{{trans('form.agency.title')}}</h3>
            </div>
            <div class="panel-body">
                <div class="form-group message-container"></div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="control-label">{{trans('form.agency.label.name')}}<span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control" required value="{{$agency->name}}">
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label">{{trans('form.agency.label.description')}}</label>
                            <textarea name="description" class="form-control" rows="3">{{$agency->description}}</textarea>
                        </div>
                        @if (0)
                        <div class="col-sm-3">
                            <label class="control-label">{{trans('form.agency.label.nip')}}</label>
                            <input name="nip" type="text" class="form-control" required value="{{$agency->nip}}">
                        </div>
                        <div class="col-sm-3">
                            <label class="control-label">{{trans('form.agency.label.regon')}}</label>
                            <input name="regon" type="text" class="form-control" required value="{{$agency->regon}}">
                        </div>
                        @endif
                    </div>
					<div class="row">
						<div class="col-sm-6">
						{{ Form::text('first_name', null, ['class' => 'form-control']) }}
						</div>
					</div>
                </div>
                <div class="form-group">
                    <div class="row  mb10">
                        <div class="col-sm-12">
                            <label class="control-label">{{trans('form.agency.label.contact')}}</label>
                        </div>

                        <div class="col-sm-4">
                            <input name="owner" type="text" value="{{$agency->owner}}"class="form-control" placeholder="{{trans('form.agency.placeholder.owner')}}" required >
                        </div>

                        <div class="col-sm-4">
                            <input name="phone" type="text" value="{{$agency->phone}}" class="form-control" placeholder="{{trans('form.agency.placeholder.phone')}}" required>
                        </div>

                        <div class="col-sm-4">
                            <input name="e_mail" type="email" value="{{$agency->e_mail}}" class="form-control" placeholder="{{trans('form.agency.placeholder.e_mail')}}" required>
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
                            <input name="street" type="text" value="{{$agency->street}}" class="form-control" placeholder="{{trans('form.agency.placeholder.street')}}" required>
                        </div>
                        <div class="col-sm-3 mb10">
                            <input name="house_number" type="text" value="{{$agency->house_number}}" class="form-control" placeholder="{{trans('form.agency.placeholder.house_number')}}" required>
                        </div>
                        <div class="col-sm-3 mb10">
                            <input name="app_number" type="text" value="{{$agency->app_number}}" class="form-control" placeholder="{{trans('form.agency.placeholder.app_number')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb10">
                            <input name="postal_code" type="text" value="{{$agency->postal_code}}" class="form-control" placeholder="{{trans('form.agency.placeholder.postal_code')}}"  required>
                        </div>
                        <div class="col-sm-4 mb10">
                            <input name="city" type="text" value="{{$agency->city}}" class="form-control" placeholder="{{trans('form.agency.placeholder.city')}}"  required>
                        </div>
                        <div class="col-sm-5 mb10">
                            <input name="state" type="text" value="{{$agency->state}}" class="form-control" placeholder="{{trans('form.agency.placeholder.state')}}"  required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button name="submit" class="btn btn-primary"
                    data-title-s="{{trans('form.save_success')}}"
                    data-msg-s="{{trans('form.msg.save_success')}}"
                    data-title-f="{{trans('form.save_error')}}"
                    data-msg-f="{{trans('form.msg.save_error')}}"
                ><span class="ladda-label">{{trans('form.save')}}</span><span class="ladda-spinner"></span></button>
                <button type="reset" class="btn btn-inverse">{{trans('form.reset')}}</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.partials.form_assets')

@endsection
<tr>
    <td>
        <div class="checkbox custom-checkbox nm">
            <input type="checkbox" id="customcheckbox-one{{$agency->id}}" value="{{$agency->id}}" data-toggle="selectrow" data-target="tr" data-contextual="success">
            <label for="customcheckbox-one{{$agency->id}}"></label>
        </div>
    </td>
    <td>{{$agency->name}} [ {{$agency->code}} ]</td>
    <td>{{$agency->description}}</td>
    <td>{{$agency->owner}}</td>
    <td><address>
            <strong>{{$agency->name}}</strong></br>
            {{$agency->street}},
            @if( $agency->app_number ) {{$agency->app_number}} / @endif {{$agency->house_number}}
            </br>
            {{$agency->postal_code}} <strong>{{$agency->city}}</strong>, {{$agency->state}}</br>
            <abbr title="Phone">tel:</abbr> {{$agency->phone}}
        </address>
    </td>
    <td class="text-center">
        <!-- button toolbar -->
        <div class="toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-default">Action</button>
                <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{ route('agency_edit', ['id' => $agency->id]) }}"><i class="icon ico-pencil"></i>Update</a></li>
                    <li><a href="javascript:void(0);"><i class="icon ico-print3"></i>Print</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);" class="text-danger"><i class="icon ico-remove3"></i>Delete</a></li>
                </ul>
            </div>
        </div>
        <!--/ button toolbar -->
    </td>
</tr>
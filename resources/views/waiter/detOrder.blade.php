@extends('layouts.app2')

@section('content')
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header">
              <h2>Detail Order</h2>
              <ul class="header-dropdown m-r--5">
                  <li class="dropdown">
                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu pull-right">
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="body">
            <form method="post" id="form_validation" action="{{route('detOrder.store')}}">
            {{ csrf_field() }}
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control" name="id_order" required="" value="{{$getId}}" readonly  aria-required="true">
                    <input name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                    <label class="form-label">Order Id</label>
                </div>
                @if($errors->has('id_order'))
                <label id="name-error" class="error" for="id_order">{{$errors->first('id_order')}}</label>
                @endif
              </div>
              <div class="form-group form-float">

                  <div class="form-line{{ $errors->has('id_menu') ? ' error' : '' }}">
                      <select autofocus id="id_menu" required class="selectpicker form-control show-tick" data-live-search="true" name="id_menu">
                        <option value="">--Menu--</option>
                        @foreach ($menu as $value)
                        <option value="{{$value->id}}">{{$value->nama_masakan}}</option>
                        @endforeach
                      </select>
                  </div>
                  @if($errors->has('id_menu'))
                  <label id="name-error" class="error" for="id_menu">{{$errors->first('id_menu')}}</label>
                  @endif
              </div>
              <div class="form-group form-float{{ $errors->has('description') ? ' error' : '' }}">
                  <div class="form-line">
                    <textarea name="description" rows="4" id="description" class="form-control no-resize" required="" placeholder="Please type what you want..."></textarea>
                  </div>
                  @if($errors->has('description'))
                  <label id="name-error" class="error" for="keterangan">{{$errors->first('description')}}</label>
                  @endif
              </div>




                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>












































@endsection

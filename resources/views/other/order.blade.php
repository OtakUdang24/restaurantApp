@extends('layouts.adminLay')

@section('content')
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header">
              <h2>Entry Order</h2>
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
            <form method="post" id="form_validation" action="{{route('order.store')}}">
            {{ csrf_field() }}
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control" name="id_order" required="" readonly value="{{$numb}}" aria-required="true">
                    <input name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                    <label class="form-label">Order Id</label>
                </div>
                @if($errors->has('id_order'))
                <label id="name-error" class="error" for="id_order">{{$errors->first('id_order')}}</label>
                @endif
              </div>
              <div class="form-group form-float">

                  <div class="form-line{{ $errors->has('no_meja') ? ' error' : '' }}">
                      <select autofocus id="no_meja" required class="selectpicker form-control show-tick" data-live-search="true" name="no_meja">
                        <option value="">--No Table--</option>
                        @foreach ($noMeja as $value)
                        <option value="{{$value->noMeja}}">{{$value->noMeja}}</option>
                        @endforeach
                      </select>
                  </div>
                  @if($errors->has('no_meja'))
                  <label id="name-error" class="error" for="no_meja">{{$errors->first('no_meja')}}</label>
                  @endif
              </div>

              <div class="form-group form-float">

                  <div class="form-line{{ $errors->has('id_menu') ? ' error' : '' }}">
                      <select multiple autofocus id="id_menu" required class="selectpicker form-control show-tick" data-live-search="true" name="id_menu[]">
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
                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
              </form>
          </div>
        </div>
      </div>












































@endsection

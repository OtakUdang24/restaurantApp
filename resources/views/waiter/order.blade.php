@extends('layouts.app2')

@section('content')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Order !
                            </h2>
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
                            <form method="post" id="form_validation" action="{{route('inputOrder.store')}}">
                            {{ csrf_field() }}
                            
                                <label for="id_order">Id Order</label>
                                <div class="form-group">
            
                                <div class="form-group">
                                    <div class="form-line error">
                                    <input type="text" class="form-control" name="id_order" required="" placeholder="Id Order">    
                                        <input name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                                    </div>
                                    <label id="name-error" class="error" for="name">This field is required.</label>
                                </div>
                     
                                <label for="noMeja">No Meja</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="selectpicker form-control show-tick" data-live-search="true" name="no_meja">
                                            <option value=""></option>
                                            @foreach ($noMeja as $value)
                                            <option value="{{$value->noMeja}}">{{$value->noMeja}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <label for="keterangan">Keterangan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea name="keterangan" rows="4" id="keterangan" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@extends('layouts.adminLay')

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
            @foreach ($det as $value)
            <div class="col-md-4">
                                   <div class="input-group">
                                       <span class="input-group-addon">
                                           <i class="material-icons">person</i>
                                       </span>
                                       <div class="form-line">
                                         <input type="hidden" name="id_order" value="{{$value->id_order}}">
                                         <input type="hidden" name="id_masakan[]" value="{{$value->id_masakan}}">
                                           <input type="text" value="{{$value->nama_masakan}}" name="nama_masakan" class="form-control date" placeholder="Username">
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="input-group">
                                       <span class="input-group-addon">
                                           <i class="material-icons">person</i>
                                       </span>
                                       <div class="form-line">
                                           <input type="text" name="jumlah[]" class="form-control date" placeholder="Recipient's username">
                                       </div>
                                       <span class="input-group-addon">
                                           <i class="material-icons">send</i>
                                       </span>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="input-group">
                                       <span class="input-group-addon">
                                           <i class="material-icons">person</i>
                                       </span>
                                       <div class="form-line">
                                         <textarea name="keterangan[]" rows="2" id="description" class="form-control no-resize" required="" placeholder="Please type what you want..."></textarea>
                                       </div>
                                       <span class="input-group-addon">
                                           <i class="material-icons">send</i>
                                       </span>
                                   </div>
                               </div>
                               @endforeach




                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
              </form>

      </div>
   </div>
          </div>
        </div>
      </div>
    </div>












































@endsection

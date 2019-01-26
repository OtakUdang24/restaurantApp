@extends('layouts.adminLay')

@section('content')
<div class="row clearfix">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
         <div class="header">
            <h2>
               DAFTAR MAKANAN
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
            <div class="table-responsive">
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                     <div class="col-sm-12">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 192px;">Nomor Order</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 301px;" >No Meja</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 139px;" >Status</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;"  >Aksi</th>

                           </thead>
                           <tfoot>
                              <tr>
                                 <th rowspan="1" colspan="1">Nomor Order</th>
                                 <th rowspan="1" colspan="1">No Meja</th>
                                 <th rowspan="1" colspan="1">Status</th>
                                 <th rowspan="1" colspan="1">Aksi</th>
                              </tr>
                           </tfoot>
                           <tbody>
                             @foreach ($data as $value)
                             <tr>
                               <td>{{$value->id_order}}</td>
                               <td>{{$value->noMeja}}</td>
                               <td>
                                 @if ($value->status_order == 0)
                                 <button type="submit" class="btn btn-danger waves-effect"><i class="material-icons">close</i> <span class="icon-name"></span></button></td>
                                 @else
                                 <button type="submit" class="btn btn-success waves-effect"><i class="material-icons">check</i> <span class="icon-name"></span></button>
                                 @endif
                               <td>
                                 @if ($value->status_order == 0)
                                 <form class="" action="{{route('corder.destroy',$value->id)}}" method="post">
                                   {{ csrf_field() }}
                                   {{ method_field('DELETE') }}

                                   <button type="submit" class="btn btn-warning waves-effect"><i class="material-icons">delete</i> <span class="icon-name"></span></button>
                                   <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#editModal{{$value->id}}" name="button"><i class="material-icons">mode_edit</i><span class="icon-name"></span></button>
                                 </form>

                                 <form class="" action="{{route('done_all', $value->id)}}" method="post">
                                   {{ csrf_field() }}
                                   {{ method_field('PUT') }}
                                   <button type="submit" class="btn btn-success waves-effect"><i class="material-icons">done_all</i> <span class="icon-name"></span></button>
                                 </form>
                                 @else
                                 <button type="submit" class="btn btn-success waves-effect"><i class="material-icons">arrow_upward</i> <span class="icon-name"></span></button>
                                 @endif
                                 <div class="modal fade" id="editModal{{$value->id}}" tabindex="-1" role="dialog"

                                   >
                                   <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <h4 class="modal-title" id="editModal{{$value->id}}">Modal title</h4>
                                       </div>
                                       <div class="modal-body">
                                         <form method="post" id="form_validation" action="{{route('corder.update',$value->id )}}">
                                         {{ csrf_field() }}
                                         {{ method_field('PUT') }}
                                         <div class="row clearfix">
                                                                         <div class="col-sm-12">
                                                                           <div class="form-group form-float">
                                                                             <div class="form-line">
                                                                               <input id="id_order" readonly value="{{$value->id_order}}" required type="text" name="id_order"  class="form-control">
                                                                               <label class="form-label">Id Order</label>
                                                                             </div>
                                                                           </div>
                                                                         </div>
                                                                         <div class="col-sm-12">
                                                                           <div class="form-group form-float">
                                                                             <div class="form-line">
                                                                               <select autofocus id="no_meja" required class="selectpicker form-control show-tick" data-live-search="true" name="no_meja">
                                                                                 <option value="">--Status--</option>

                                                                                 @foreach ($meja as $key)
                                                                                 <option value="{{$key->noMeja}}" {{$key->noMeja == $value->noMeja ? 'selected' : ''}} >{{$key->noMeja}}</option>
                                                                                 @endforeach
                                                                               </select>
                                                                             </div>
                                                                             @if ($errors->has('harga'))
                                                                             <label  id="name-error" class="error" for="harga">{{$errors->first('harga')}}</label>
                                                                             @endif
                                                                           </div>
                                                                         </div>

                                                                     </div>
                                       <div class="modal-footer">
                                         <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                         <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                       </div>
                                       </form>
                                     </div>
                                   </div>
                                 </div>

                               </div>
                               </td>
                             </tr>
                             @endforeach
                           </tbody>
                        </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>



@endsection

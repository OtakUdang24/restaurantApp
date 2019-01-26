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
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 301px;" >Nama Masakan</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 139px;" >Jumlah</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;"  >keterangan</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;"  >Aksi</th>
                           </thead>
                           <tfoot>
                              <tr>
                                 <th rowspan="1" colspan="1">Nomor Order</th>
                                 <th rowspan="1" colspan="1">Nama Masakan</th>
                                 <th rowspan="1" colspan="1">Jumlah</th>
                                 <th rowspan="1" colspan="1">keterangan</th>
                                 <th rowspan="1" colspan="1">Aksi</th>
                              </tr>
                           </tfoot>
                           <tbody>
                             <!--
                             // foreach ($order as $key => $value) {
                             //   foreach ($det as $key => $value2) {
                             //     if ($value->id_order == $value2->id_order) {
                             //       if ($value->status_order == 0) {
                             //         echo $value2->nama_masakan."<br>";
                             //       }
                             //     }
                             //   }
                             // }
                            -->
                            @foreach ($order as $key => $value)
                              @foreach ($det as $key => $value2)
                              @if($value->id_order == $value2->id_order)
                              @if($value->status_order == 0)
                              <tr>
                                <td>{{$value2->id_order}}</td>
                                <td>{{$value2->nama_masakan}}</td>
                                <td>{{$value2->jumlah}}</td>
                                <td>{{$value2->keterangan}}</td>
                                <td>
                                  <form class="" action="{{route('detOrder.destroy',$value2->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-warning waves-effect"><i class="material-icons">delete</i> <span class="icon-name"></span></button>
                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#editModal{{$value2->id}}" name="button"><i class="material-icons">mode_edit</i><span class="icon-name"></span></button>
                                  </form>
                                  <div class="modal fade" id="editModal{{$value2->id}}" tabindex="-1" role="dialog"

                                    >
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="editModal{{$value2->id}}">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" id="form_validation"  action="{{route('detOrder.update',$value2->id)}}">
                                          {{ csrf_field() }}
                                          {{ method_field('PUT') }}
                                          <div class="row clearfix">
                                            <div class="col-sm-12">
                                              <div class="form-group form-float">

                                                  <div class="form-line{{ $errors->has('id_menu') ? ' error' : '' }}">
                                                      <select autofocus id="id_menu" required class="selectpicker form-control show-tick" data-live-search="true" name="id_menu">
                                                        <option value="">--Menu--</option>

                                                        @foreach ($menu as $value3)
                                                        <option value="{{$value3->id}}" {{$value2->id_masakan == $value3->id ? 'selected' : ''}} >{{$value3->nama_masakan}}</option>
                                                        @endforeach
                                                      </select>
                                                  </div>
                                                  @if($errors->has('id_menu'))
                                                  <label id="name-error" class="error" for="id_menu">{{$errors->first('id_menu')}}</label>
                                                  @endif
                                              </div>
                                            </div>
                                            <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="{{$value2->jumlah}}" name="jumlah" class="form-control">
                                            <label class="form-label">Jumlah</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">

                        <div class="form-group form-float">
                            <div class="form-line">
                              <div class="form-line">
                                <textarea name="keterangan" rows="2" id="description" class="form-control no-resize" required="" placeholder="Please type what you want...">{{$value2->keterangan}}</textarea>
                              </div>
                            </div>
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
                              @endif
                              @endif
                              @endforeach
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

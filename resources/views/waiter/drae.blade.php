<select autofocus id="no_meja" required class="selectpicker form-control show-tick" data-live-search="true" name="no_meja">
  <option value="">--No Table--</option>
  @foreach ($noMeja as $value)
  <option value="{{$value->noMeja}}">{{$value->noMeja}}</option>
  @endforeach
</select>
<div class="form-group form-float">
  <div class="form-line">
    <input id="nama_masakan" type="text" name="nama_masakan" class="form-control{{ $errors->has('nama_masakan') ? ' is-invalid' : '' }}">
    <label class="form-label">Nama</label>
  </div>
  @if ($errors->has('nama_masakan'))
  <label id="name-error" class="error" for="nama_masakan">{{$errors->first('nama_masakan')}}</label>
  @endif
</div>
<div class="form-group form-float">
  <div class="form-line">
    <input id="harga" type="text" name="harga" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}">
    <label class="form-label">Harga</label>
  </div>
  @if ($errors->has('harga'))
  <label  id="name-error" class="error" for="harga">{{$errors->first('harga')}}</label>
  @endif
</div>



























<div class="row clearfix">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
         <div class="header">
            <h2>
               USERS
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
                                 <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 192px;">Username</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 301px;" >Nama</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 68px;"  >Aksi</th>

                           </thead>
                           <tfoot>
                              <tr>
                                 <th rowspan="1" colspan="1">Username</th>
                                 <th rowspan="1" colspan="1">Nama</th>
                                 <th rowspan="1" colspan="1">Aksi</th>
                              </tr>
                           </tfoot>
                           <tbody>
                             @foreach ($data as $key)
                             <tr>
                               <td>{{$key->username}}</td>
                               <td>{{$key->name}}</td>
                               <td>

                                 <form action="{{route('user.destroy', $key->id)}}" method="post">
                                   {{ csrf_field() }}
                                   {{ method_field('DELETE') }}

                                   <button type="button" data-toggle="modal" data-target="#editModal{{$key->id}}" class="btn btn-info waves-effect">{{$key->nama_level}}</button>
                                   <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger waves-effect"><i class="material-icons">delete</i> <span class="icon-name"></span></button>
                                 </form>
                               </td>
                             </tr>
                             <div class="modal fade" id="editModal{{$key->id}}" tabindex="-1" role="dialog"

                               >
                               <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h4 class="modal-title" id="editModal{{$key->id}}">Modal title</h4>
                                   </div>
                                   <div class="modal-body">
                                     <form method="post" id="form_validation" action="{{route('user.update',$key->id )}}">
                                     {{ csrf_field() }}
                                     {{ method_field('PUT') }}
                                     <div class="row clearfix">
                                                                     <div class="col-sm-12">
                                                                       <div class="form-group form-float">
                                                                         <div class="form-line{{$errors->has('nama_masakan') ? ' error' : ''}}">
                                                                           <input id="nama_masakan" value="{{$key->nama_masakan}}" required type="text" name="nama_masakan"  class="form-control{{ $errors->has('nama_masakan') ? ' is-invalid' : '' }}">
                                                                           <label class="form-label">Nama</label>
                                                                         </div>
                                                                       </div>
                                                                     </div>
                                                                     <div class="col-sm-12">
                                                                       <div class="form-group form-float">
                                                                         <div class="form-line{{$errors->has('harga') ? ' error' : ''}}">
                                                                           <input id="harga" type="text" name="harga" value="{{$key->harga}}" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}">
                                                                           <label class="form-label">Harga</label>
                                                                         </div>
                                                                         @if ($errors->has('harga'))
                                                                         <label  id="name-error" class="error" for="harga">{{$errors->first('harga')}}</label>
                                                                         @endif
                                                                       </div>
                                                                     </div>
                                                                     <div class="col-sm-12">
                                                                       <div class="form-group form-float">
                                                                         <div class="form-line">
                                                                           <select autofocus id="no_meja" required class="selectpicker form-control show-tick" data-live-search="true" name="status">
                                                                             <option value="">--Status--</option>
                                                                             <option value="1" {{$key->status == 1 ? 'selected' : ''}} >Ada</option>
                                                                             <option value="0" {{$key->status == 0 ? 'selected' : ''}}>Tidak Ada</option>
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
</div>

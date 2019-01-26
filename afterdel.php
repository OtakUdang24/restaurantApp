BEGIN

DELETE FROM detail_order WHERE detail_order.id_order = OLD.id_order;
UPDATE meja SET stts = '0' WHERE meja.noMeja = OLD.no_meja;


END


<!--  -->
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

  <!-- detoreder1 -->
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

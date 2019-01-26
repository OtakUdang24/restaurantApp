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

@extends('layouts.app2')

@section('content')
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header">
              <h2>List Of Orders</h2>
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
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 179px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 282px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 129px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 62px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th rowspan="1" colspan="1">Order Id</th>
                                          <th rowspan="1" colspan="1">Menu</th>
                                          <th rowspan="1" colspan="1">Office</th>
                                          <th rowspan="1" colspan="1">Age</th>
                                          <th rowspan="1" colspan="1">Start date</th>
                                          <th rowspan="1" colspan="1">Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        </tr>
                                    </tbody>
                                </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                            </div>
          </div>
        </div>
      </div>
    </div>












































@endsection

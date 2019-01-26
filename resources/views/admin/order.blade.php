@extends ('layouts.adminLay')

@section ('content')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SELECT
                                <small>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></small>
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
                            <div class="row clearfix">
                              <div class="col-sm-6">

                                 <select class="form-control show-tick" tabindex="-98">
                                           <option value="">-- Please select --</option>
                                           <option value="10">10</option>
                                           <option value="20">20</option>
                                           <option value="30">30</option>
                                           <option value="40">40</option>
                                           <option value="50">50</option>
                                       </select>
                              </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

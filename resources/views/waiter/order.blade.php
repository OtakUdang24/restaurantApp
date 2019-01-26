@extends('layouts.app2')

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
              <select id="optgroup" class="ms" multiple="multiple" style="position: absolute; left: -9999px;">
                                              <optgroup label="Alaskan/Hawaiian Time Zone">
                                                  <option value="AK">Alaska</option>
                                                  <option value="HI">Hawaii</option>
                                              </optgroup>
                                              <optgroup label="Pacific Time Zone">
                                                  <option value="CA">California</option>
                                                  <option value="NV">Nevada</option>
                                                  <option value="OR">Oregon</option>
                                                  <option value="WA">Washington</option>
                                              </optgroup>
                                              <optgroup label="Mountain Time Zone">
                                                  <option value="AZ">Arizona</option>
                                                  <option value="CO">Colorado</option>
                                                  <option value="ID">Idaho</option>
                                                  <option value="MT">Montana</option>
                                                  <option value="NE">Nebraska</option>
                                                  <option value="NM">New Mexico</option>
                                                  <option value="ND">North Dakota</option>
                                                  <option value="UT">Utah</option>
                                                  <option value="WY">Wyoming</option>
                                              </optgroup>
                                              <optgroup label="Central Time Zone">
                                                  <option value="AL">Alabama</option>
                                                  <option value="AR">Arkansas</option>
                                                  <option value="IL">Illinois</option>
                                                  <option value="IA">Iowa</option>
                                                  <option value="KS">Kansas</option>
                                                  <option value="KY">Kentucky</option>
                                                  <option value="LA">Louisiana</option>
                                                  <option value="MN">Minnesota</option>
                                                  <option value="MS">Mississippi</option>
                                                  <option value="MO">Missouri</option>
                                                  <option value="OK">Oklahoma</option>
                                                  <option value="SD">South Dakota</option>
                                                  <option value="TX">Texas</option>
                                                  <option value="TN">Tennessee</option>
                                                  <option value="WI">Wisconsin</option>
                                              </optgroup>
                                              <optgroup label="Eastern Time Zone">
                                                  <option value="CT">Connecticut</option>
                                                  <option value="DE">Delaware</option>
                                                  <option value="FL">Florida</option>
                                                  <option value="GA">Georgia</option>
                                                  <option value="IN">Indiana</option>
                                                  <option value="ME">Maine</option>
                                                  <option value="MD">Maryland</option>
                                                  <option value="MA">Massachusetts</option>
                                                  <option value="MI">Michigan</option>
                                                  <option value="NH">New Hampshire</option>
                                                  <option value="NJ">New Jersey</option>
                                                  <option value="NY">New York</option>
                                                  <option value="NC">North Carolina</option>
                                                  <option value="OH">Ohio</option>
                                                  <option value="PA">Pennsylvania</option>
                                                  <option value="RI">Rhode Island</option>
                                                  <option value="SC">South Carolina</option>
                                                  <option value="VT">Vermont</option>
                                                  <option value="VA">Virginia</option>
                                                  <option value="WV">West Virginia</option>
                                              </optgroup>
                                          </select>
                </div>


                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
              </form>
          </div>
        </div>
      </div>












































@endsection

@extends('panelViews::mainTemplate')
@section('page-wrapper')

<div class="rpd-dataform">
            <form method="POST" action="http://localhost/restaurant/public/Charges" accept-charset="UTF-8" class="form-horizontal" role="form"><input name="_token" type="hidden" value="NiaqdXrIo4e6flfyriMo6zJ68CySso2ExhRGkwpt">


              {{ csrf_field() }}
        <div class="btn-toolbar" role="toolbar">

                <div class="pull-left">
                  <h2>Charges</h2>
                </div>
        </div>


     <br>



        <div class="form-group clearfix" id="fg_category">
                    <label for="category" class="col-sm-3 control-label required">Order Packageing Charges</label>
                    <div class="col-sm-9" id="div_category">
                      <input class="form-control form-control" type="text" id="packaging_charges" name="packaging_charges">
                    </div>
        </div>
        <div class="form-group clearfix" id="fg_category">
                    <label for="vat" class="col-sm-3 control-label required">VAT and Service Charges</label>
                    <div class="col-sm-9" id="div_category">
                      <input class="form-control form-control" type="text" id="tax" name="tax">
                    </div>
        </div>

        <div class="form-group clearfix" id="fg_category">
                    <label for="vat" class="col-sm-3 control-label required">Delivery Charges</label>
                    <div class="col-sm-9" id="div_category">
                      <input class="form-control form-control" type="text" id="delivery_charges" name="delivery_charges">
                    </div>
        </div>



            <div class="btn-toolbar" role="toolbar">

                        <div class="pull-left">
             <input class="btn btn-primary" type="submit" value="Save">
                    </div>
                    </div>
     <br>
        <input name="save" type="hidden" value="1"></form>
    </div>

@stop

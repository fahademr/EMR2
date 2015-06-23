@extends('layouts.'.role())

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-md-12">
                  <div class="content-panel">
                      <table style="text-align: center" class="table table-striped table-advance table-hover">
                          <div class="row">
                            <div class="col-md-10">
                                <h4><i class="fa fa-angle-right"></i> Medicines' Inventory</h4>
                            </div>
                            <div class="col-md-2">
                                <a type="button" class="btn btn-lg btn-primary"> Add More</a>
                            </div>
                          </div>
                          <hr>
                          <thead>
                          <tr>
                              <th style="text-align: center" > Drug Name</th>
                              <th style="text-align: center" > Packs</th>
                              <th style="text-align: center" > Total Qty</th>
                              <th style="text-align: center" > Expiry Date</th>
                              <th style="text-align: center" > Price/Unit</th>
                              <th style="text-align: center" >Action</th>
                          </tr>
                          </thead>
                          <tbody>

                          @foreach($inventories as $inventory)
                              <tr>
                                  <td>{{ $inventory->name }}</td>
                                  <td>{{ $inventory->packs }}</td>
                                  <td>{{ $inventory->total_qty }}</td>
                                  <td>{{ $inventory->exp_date }}</td>
                                  <td>{{ $inventory->price }}-/Rs</td>
                                  <td>
                                      <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                          @endforeach

                          </tbody>
                      </table>
                  </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
                </div><!-- /row -->
        </section>
    </section>

@stop
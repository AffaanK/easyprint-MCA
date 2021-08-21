@extends('layouts.app')
@section('content')
<br>

  <div class="card">
    <div class="card-header"
      style="background-color:#FFDAB9; border-bottom-style: solid;border-width: 5px; border-color: black;">
      <a href="/" class=" btn btn-danger" style=" float:right;"><strong>X</strong></a>
      <h2>
        <div class="row">
          <div class="col-lg-5">
            <b style="float:left;">{{config('app.name', 'ERL')}}</b>
          </div>
          <div class="col-lg-6">
            <b>Place Order </b>
          </div>
        </div>
      </h2>
    </div>
    <div class="container col-lg-9 justify-content-center"
      style="border-left-style:solid;border-right-style:solid;border-width: 5px;border-color:black">
      <br>
      <form action="{{route('orders.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center form-group">
          <label class="col-lg-2 col-form-label">Date</label>
          <div class="col-lg-4">
            <input type="date" name="date" id="date" readonly value="{{date('Y-m-d')}}">
          </div>
          <!--.col-lg-2  -->


          <div class="col-lg-6">
          </div>
          <!--.col-lg-2  -->
        </div>
        <!--.row justify-content-left  -->

        <div class="row justify-content-center form-group">
          <label class="col-lg-2 col-form-label">description</label>
          <div class="col-lg-10">
            <input type="text" name="description" id="description" class="form-control">
          </div>
          <!--.col-lg-2  -->
        </div>
        <!--.row justify-content-left  -->

        <div class="row justify-content-center form-group">
          <label class="col-lg-2 col-form-label">print Type</label>
          <div class="col-lg-4">
            <select name="print_type" id="print_type" class="form-control">
              <option value="bw">Black and White</option>
              <option value="color">Colour</option>
            </select>
          </div>
          <!--.col-lg-2  -->
          <label class="col-lg-2 col-form-label">Both Sides</label>
          <div class="col-lg-4">
            <select required class="form-control" name="sides">
              <option value="both-sides">both-sides</option>
              <option value="one-sides">one-side</option>
            </select>
          </div>
          <!--.col-lg-2  -->
        </div>
        <!--.row justify-content-left  -->

        <div class="row justify-content-left text-left">
          <label class="col-lg-2 col-form-label">Binding</label>
          <div class="col-lg-4">
            <select required class="form-control" name="binding">
              <option value="none">none</option>
              <option value="spiral binding">Spiral Binding(₹20 charge)</option>
              <option value="threading">Threading (₹30 charge)</option>
            </select>
          </div>
          <!--.col-lg-2  -->

          <label class="col-lg-2 col-form-label">page Layout</label>
          <div class="col-lg-4">
            <select required class="form-control" name="layout">
              <option value="portrait">Portrait </option>
              <option value="landscape">Landscape</option>
            </select>
          </div>
          <!--.col-lg-2  -->

        </div>
        <!--.row justify-content-left  -->


        <div class="row justify-content-left text-left">
          <label class="col-lg-2 col-form-label">Files</label>
          <div class="col-lg-4">
            <input type="file" name="file" id="file" class="form-control">
          </div>
          <!--.col-lg-2  -->

          <label class="col-lg-2 col-form-label">No. of Copies</label>
          <div class="col-lg-4">
            <input type="number" min="1" max="100" name="copies" id="copies" class="form-control">
          </div>
          <!--.col-lg-2  -->

        </div>
        <!--.row justify-content-left  -->


        <div class="row justify-content-left text-left">
          <div class="col-lg-3">
            <a href="/" class="btn btn-warning"><strong>
                <-Exit</strong> </a> </div> <div class="col-lg-2">
          </div>
          <div class="col-lg-3">
            <input type="submit" class="btn btn-primary" value="Save">
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--card-->
@endsection
@extends('dashboard.dashboard')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Edit menu </h3>
        </div>
      </div>

      <div class="card-body">
        <form action="{{route('updatemenu',$menus->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          <h6 class="heading-small text-muted mb-4"> Edit Menu Items</h6>
          <div class="pl-lg-4">
            
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-first-name">Images</label>
                <input type="file" id="myFile" name="image"  class="form-control"  value="{{$menus->image}}">
              </div>
            </div>

            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Title</label>
                <input rows="4" class="form-control"  name="title" value="{{$menus->title}}" >
              </div>
            </div>

            
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Price</label>
                <input rows="4" class="form-control" name="price" value="{{$menus->price}}" >
              </div>
            </div>

            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Status</label>
                <input rows="4" class="form-control" name="price" value="{{$menus->status}}" >
              </div>
            </div>
            
            <div class="col-4 text-right" style="margin-left: 50%;">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
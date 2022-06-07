@extends('dashboard.dashboard')
@section('content')
<div class="col-lg-10 order-xl-1" style="margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-12">
          <h3 class="mb-0">juice  </h3>
          <div class="col-12 text-right" style="top:-30px">
          <a href="{{route('addjuice')}}" class="btn btn-sm btn-primary">Add juice</a>
          </div>
          
        </div>
       
      </div>
    </div>
    <div class="card-body">
      <form>
        <h6 class="heading-small text-muted mb-4">juice in Our ChithoMitho</h6>
        <div class="pl-lg-4">

          <table class="table table-bordered datatable">
            <thead >
              <tr style="color: white;">
                <th scope="col">S.N</th>
            
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            

              </tr>
            </thead>
            <tbody>
            @foreach ($juice as $juices)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td><img src="{{asset($juices->image)}}"  width="100%"></td>
                <td>{{$juices->title}}</td>
                <td>{{$juices->price}}</td>
                <td>{{$juices->status}}</td>
             
                
                <td>
                    <a href="{{route('editjuice',$juices->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>Edit</a>
                    <a href="{{route('deletejuice',$juices->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a>
<!-- 
                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="{{route('deletejuice',$juices->id)}}">
                                            <i class="fa fa-trash"></i>Delete
                                        </a>

                                        <form  id= "{{route('deletejuice',$juices->id)}}" action="">
                                            @csrf
                                            @method('DELETE')

                                        </form> -->
                </td>
        
              </tr>
           @endforeach

            </tbody>
          </table>
       
        </div>
        @endsection
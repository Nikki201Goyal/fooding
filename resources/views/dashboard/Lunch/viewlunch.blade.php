@extends('dashboard.dashboard')
@section('content')
<div class="col-lg-10 order-xl-1" style="margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-12">
          <h3 class="mb-0">lunch  </h3>
          <div class="col-12 text-right" style="top:-30px">
          <a href="{{route('addlunch')}}" class="btn btn-sm btn-primary">Add lunch</a>
          </div>
          
        </div>
       
      </div>
    </div>
    <div class="card-body">
      <form>
        <h6 class="heading-small text-muted mb-4">lunch in Our ChithoMitho</h6>
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
            @foreach ($lunch as $lunchs)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td><img src="{{asset($lunchs->image)}}"  width="100%"></td>
                <td>{{$lunchs->title}}</td>
                <td>{{$lunchs->price}}</td>
                <td>{{$lunchs->status}}</td>
             
                
                <td>
                    <a href="{{route('editlunch',$lunchs->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>Edit</a>
                    <a href="{{route('deletelunch',$lunchs->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a>
<!-- 
                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="{{route('deletelunch',$lunchs->id)}}">
                                            <i class="fa fa-trash"></i>Delete
                                        </a>

                                        <form  id= "{{route('deletelunch',$lunchs->id)}}" action="">
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
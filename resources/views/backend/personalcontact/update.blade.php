@extends('backend.layouts.main')
@section('content')
   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('personalcontact.update',$data->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" value="{{$data->email}}" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                  </div>
                  
                     <div class="form-group row">
                                    <label class="col-form-label col-lg-2"> Image</label>
                                    <div class="col-lg-10">
                                        <input type="file" class="form-control h-auto" name="image">
                                    </div>
                                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>      
@endsection
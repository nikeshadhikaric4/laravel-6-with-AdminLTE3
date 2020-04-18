@extends('backend.layouts.main')
@section('content')
   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Image Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('image.update',$data->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Desc</label>
                    <input type="text" name="desc" value="{{$data->desc}}" class="form-control" id="exampleInputPassword1" placeholder="Desc">
                  </div>

                     <div class="form-group row">
                                    <label class="col-form-label col-lg-2"> Image</label>
                                    <div class="col-lg-10">
                                        <input type="file" class="form-control h-auto" name="img">
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

@section('title')

{{$page}}

@endsection

@extends('admin.layout')

@section('content')

<!-- Page Wrapper -->

<div class="page-wrapper">

    <!-- Page Content -->

    <div class="content container-fluid">

        <!-- Page Header -->

        <div class="page-header">

            <div class="row">

                <div class="col-sm-12">

                    <h3 class="page-title">Welcome Admin!</h3>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item active">{{$page}}</li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- /Page Header -->

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title mb-0">{{$page}} Information</h4>

                    </div>

                    <div class="card-body">

                        @if(session()->get('completed'))

                            <div class="alert alert-success">

                                {{ session()->get('completed') }}  

                            </div><br />

                        @endif

                        <form method="post" action="@isset($data)

                        {{url('/admin/hotels/update/'.$data->id)}}

                        @else

                        {{url('/admin/hotels/store')}}

                        @endisset" enctype="multipart/form-data">

                            <div class="row">

                                <div class="col-xl-12">

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Title</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="title" value="{{isset($data)?$data->title:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label"> Location</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="location" value="{{isset($data)?$data->location:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label"> Duration</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="duration" value="{{isset($data)?$data->duration:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label"> Shortinfo</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="info" value="{{isset($data)?$data->info:''}}">

                                        </div>

                                    </div>  

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label"> Price (₹)</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="price" value="{{isset($data)?$data->price:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Thumbnail</label>

                                        <div class="col-lg-9">

                                            @php $required = !isset($data)?'required':''; @endphp

                                            <input type="file" {{$required}} class="form-control" name="thumb">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Status</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" name="status">

                                                <option value="Active" {{isset($data)&&$data->status=='Active'?'selected':''}}>Active</option>

                                                <option value="Inactive"{{isset($data)&&$data->status=='Inactive'?'selected':''}}>Inactive</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Banners</label>

                                        <div class="col-lg-9">

                                            @php $required = !isset($data)?'required':''; @endphp

                                            <input type="file" {{$required}} class="form-control" name="images[]">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Description </label>

                                        <div class="col-lg-9">

                                            <textarea class="form-control" name="description" rows="10">{{isset($data)?$data->description:''}}</textarea>

                                        </div>

                                    </div>

                                </div>

                            </div>@csrf                       

                            <div class="text-right">

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /Page Content -->

</div>

<!-- /Page Wrapper -->

@endsection
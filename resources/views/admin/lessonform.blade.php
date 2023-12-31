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

                        {{url('/admin/lessons/update/'.$data->id)}}

                        @else

                        {{url('/admin/lessons/store')}}

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

                                        <label class="col-lg-3 col-form-label">Course</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" required name="course">

                                                <option value="">Select Course</option>

                                                @if($courses)

                                                    @foreach($courses as $cat)

                                                <option value="{{$cat->id}}" {{isset($data)&&$data->course==$cat->id?'selected':''}}>{{$cat->title}}</option>

                                                    @endforeach

                                                @endif

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Tutorial (Image)</label>

                                        <div class="col-lg-9">

                                            @php $required = !isset($data)?'required':''; @endphp

                                            <input type="file" {{$required}} class="form-control" name="image">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Tutorial (Audio)</label>

                                        <div class="col-lg-9">

                                            <input type="file" class="form-control" name="audio">

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
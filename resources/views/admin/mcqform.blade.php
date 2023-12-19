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

                        <h4 class="card-title mb-0">{{$page}} Information <a href="{{url('/admin/lessons/mcq/'.Request::segment(5))}}" class="btn btn-primary">Back</a></h4>

                    </div>

                    <div class="card-body">

                        @if(session()->get('completed'))

                            <div class="alert alert-success">

                                {{ session()->get('completed') }}  

                            </div><br />

                        @endif

                        <form method="post" action="@isset($data)

                        {{url('/admin/lessons/mcq/update/'.$data->id)}}

                        @else

                        {{url('/admin/lessons/mcq/store')}}

                        @endisset" enctype="multipart/form-data">

                            <div class="row">

                                <div class="col-xl-12">

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Question</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="quest" value="{{isset($data)?$data->quest:''}}">

                                        </div>

                                    </div>

                                    <input type="hidden" name="lesson" value="{{Request::segment(5)}}">

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Option 1</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="opt_1" value="{{isset($data)?$data->opt_1:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Option 2</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="opt_2" value="{{isset($data)?$data->opt_2:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Option 3</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="opt_3" value="{{isset($data)?$data->opt_3:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Option 4</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="opt_4" value="{{isset($data)?$data->opt_4:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Correct Option</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" name="ans">

                                                <option value="1" {{isset($data)&&$data->ans=='1'?'selected':''}}>1</option>

                                                <option value="2"{{isset($data)&&$data->ans=='2'?'selected':''}}>2</option>

                                                <option value="3"{{isset($data)&&$data->ans=='3'?'selected':''}}>3</option>

                                                <option value="4"{{isset($data)&&$data->ans=='4'?'selected':''}}>4</option>

                                            </select>

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

                                    <!--div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Description </label>

                                        <div class="col-lg-9">

                                            <textarea class="form-control" name="description" rows="10">{{isset($data)?$data->description:''}}</textarea>

                                        </div>

                                    </div-->

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
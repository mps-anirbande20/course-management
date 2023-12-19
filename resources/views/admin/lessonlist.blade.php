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

                        <h4 class="card-title mb-0">{{$page}} Information <a href="{{url('admin/lessons/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a></h4>

                    </div>

                    <div class="card-body">

                        @if(session()->get('completed'))

                            <div class="alert alert-success">

                                {{ session()->get('completed') }}  

                            </div><br />

                        @endif

                        <div class="table-responsive">

                            <table class="datatable table table-stripped mb-0">

                                <thead>

                                    <tr>

                                        <th>#</th>

                                        <th>Title</th>

                                        <th>Course</th>

                                        <th>Status</th>

                                        <th>Created</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @if($records)

                                        @php $srl = 1; @endphp

                                        @foreach($records as $data)

                                    <tr>

                                        <td>{{$srl++}}</td>

                                        <td>{{$data->title}}</td>

                                        <td>{{getby('courses','id',$data->course)->title}}</td>

                                        <td>{{$data->status}}</td>

                                        <td>{{date('d-m-Y',strtotime($data->created_at))}}</td>

                                        <td>

                                            <a href="{{url('admin/lessons/mcq/'.$data->id)}}" class="btn btn-info" target="_blank"><i class="fa fa-graduation-cap"></i></a> 

                                            <a href="{{url('admin/lessons/edit/'.$data->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a> 

                                            <a href="{{url('admin/lessons/destroy/'.$data->id)}}" class="btn btn-danger destroy"><i class="fa fa-trash"></i></a>

                                        </td>

                                    </tr>

                                        @endforeach

                                    @endif

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /Page Content -->

</div>

<!-- /Page Wrapper -->

@endsection
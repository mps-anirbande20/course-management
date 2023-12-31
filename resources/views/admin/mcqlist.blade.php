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

                        <h4 class="card-title mb-0">{{$page}} Information <a href="{{url('admin/lessons/mcq/create/'.Request::segment(4))}}" class="btn btn-primary"><i class="fa fa-plus"></i></a></h4>

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

                                        <th>Question</th>

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

                                        <td>{{$data->quest}}</td>

                                        <td>{{$data->status}}</td>

                                        <td>{{date('d-m-Y',strtotime($data->created_at))}}</td>

                                        <td>

                                            <a href="{{url('admin/lessons/mcq/edit/'.$data->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a> 

                                            <a href="{{url('admin/lessons/mcq/destroy/'.$data->id)}}" class="btn btn-danger destroy"><i class="fa fa-trash"></i></a>

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
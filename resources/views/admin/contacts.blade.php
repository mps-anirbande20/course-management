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

                        <div class="table-responsive">

                            <table class="datatable table table-stripped mb-0">

                                <thead>

                                    <tr>

                                        <th>#</th>

                                        <th>Name</th>

                                        <th>Email</th>

                                        <th>Message</th>

                                        <th>Sent</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @if($records)

                                        @php $srl = 1; @endphp

                                        @foreach($records as $data)

                                    <tr>

                                        <td>{{$srl++}}</td>

                                        <td>{{$data->name}}</td>

                                        <td>{{$data->email}}</td>

                                        <td>{{$data->message}}</td>

                                        <td>{{date('d-m-Y',strtotime($data->created_at))}}</td>

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
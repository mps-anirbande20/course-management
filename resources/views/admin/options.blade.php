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
                        <li class="breadcrumb-item active">Dashboard</li>
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
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="phone" value="{{getoption('phone')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Other Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="otherphone" value="{{getoption('otherphone')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Whatsapp</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="whatsapp" value="{{getoption('whatsapp')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="address" value="{{getoption('address')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="email" value="{{getoption('email')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Facebook</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="facebook" value="{{getoption('facebook')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Twitter</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="twitter" value="{{getoption('twitter')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">LinkedIn</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="linkedin" value="{{getoption('linkedin')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Instagram</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="instagram" value="{{getoption('instagram')->value}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Youtube</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="youtube" value="{{getoption('youtube')->value}}">
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
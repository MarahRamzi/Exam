@extends('cms.parent')

@section('title' , 'Company_Branch')

@section('styles')
@endsection

@section('mainTitle','Show Company_Branch')

@section('subTitle','show company_branch')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Show Company_Branch</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body ">
                    <div class="form-group ">
                      <label for="name">Company_branch Name</label>
                      <input
                      value="{{ $company_branches->Name}}" class="form-control form-control-solid" disabled>
                    </div>
                    <div class="form-group ">
                        <label for="street">Email</label>
                        <input
                        value="{{ $company_branches->Email}}" class="form-control form-control-solid" disabled>
                      </div>

                      <div class="form-group">
                          <label for="street">Password</label>
                          <input
                          value="{{ $company_branches->Password}}" class="form-control form-control-solid" disabled>
                        </div>

                        <div class="form-group">
                          <label for="street">Status</label>
                          <input
                          value="{{ $company_branches->Status}}" class="form-control form-control-solid" disabled>
                        </div>

                        <div class="form-group">
                          <label for="street">Description</label>
                          <input
                          value="{{ $company_branches->Description}}" class="form-control form-control-solid" disabled>
                        </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <a href="{{ route('company_branches.index') }}" type="button" class="btn btn-dark">Go To Index</a>
                </div>
                </form>
              </div>
        </div>
    </div>
</div>

@endsection

@section('script')


@endsection

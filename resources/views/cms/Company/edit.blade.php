@extends('cms.parent')

@section('title' , 'Company')

@section('styles')
@endsection

@section('mainTitle','Edit Company')

@section('subTitle','edit company')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Company</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Company Name</label>
                      <input type="text" class="form-control" name = "Name" id="Name"
                      value="{{ $companies->Name}}" placeholder="Enter Company Name">
                    </div>
                    <div class="form-group">
                        <label for="street">Email</label>
                        <input type="text" class="form-control" name="Email" id="Email"
                        value="{{ $companies->Email}}"placeholder="Enter Email">
                      </div>

                      <div class="form-group">
                          <label for="street">Password</label>
                          <input type="text" class="form-control" name="Password" id="Password"
                          value="{{ $companies->Password}}" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                          <label for="street">Status</label>
                          <input type="text" class="form-control" name="Status" id="Status"
                          value="{{ $companies->Status}}" placeholder="Enter Status">
                        </div>

                        <div class="form-group">
                          <label for="street">Description</label>
                          <input type="text" class="form-control" name="Description" id="Description"
                          value="{{ $companies->Description}}" placeholder="Enter description">
                        </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" onclick="performUpdate({{ $companies->id }})" class="btn btn-primary">Update</button>
                    <a href="{{ route('companies.index') }}" type="button" class="btn btn-dark">Go To Index</a>
                </div>
                </form>
              </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    function performUpdate(id){
        let formData = new FormData();
        formData.append('Name' ,document.getElementById('Name').value);
        formData.append('Email' ,document.getElementById('Email').value);
        formData.append('Password' ,document.getElementById('Password').value);
        formData.append('Status' ,document.getElementById('Status').value);
        formData.append('Description' ,document.getElementById('Description').value);
        storeRoute('/cms/admin/companies_update/'+ id, formData);

    }
    </script>

@endsection

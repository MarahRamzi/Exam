@extends('cms.parent')

@section('title' , 'Company_Branch')

@section('styles')
@endsection

@section('mainTitle','Create Company_Branch')

@section('subTitle','create company_branch')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create Company_Branch</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="row ">
                  <div class="card-body col-6 ">


                        <!-- /.form-group -->
                        <div class="form-group ">
                          <label>Company Name</label>
                          <select class="form-control select2" name="company_id" id="company_id"  style="width: 100%;">
                           @foreach ($companies as  $company)
                           <option  value="{{  $company->id }}">{{  $company->Name}}</option>
                           @endforeach
                          </select>
                        </div>
                        <!-- /.form-group -->

                      </div>


                    <div class="form-group col-6">
                      <label for="Name">Company_Branch Name</label>
                      <input type="text" class="form-control" name = "Name" id="Name" placeholder="Enter Company_branch Name">
                    </div>

                    <div class="form-group col-6">
                      <label for="street">Email</label>
                      <input type="text" class="form-control" name="Email" id="Email" placeholder="Enter Email">
                    </div>

                    <div class="form-group col-6">
                        <label for="street">Password</label>
                        <input type="text" class="form-control" name="Password" id="Password" placeholder="Enter Password">
                      </div>

                      <div class="form-group col-6">
                        <label for="Status">Status</label>
                        <input type="text" class="form-control" name="Status" id="Status" placeholder="Enter Status">
                      </div>

                      <div class="form-group col-6">
                        <label for="Description">Description</label>
                        <input type="text" class="form-control" name="Description" id="Description" placeholder="Enter description">
                      </div>



                </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" onclick="performStore()" class="btn btn-primary">Store</button>
                    <a href="{{ route('company_branches.index') }}" type="button" class="btn btn-dark">Go To Index</a>
                </div>
                </form>
              </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
function performStore(){
    let formData = new FormData();
    formData.append('Name' ,document.getElementById('Name').value);
    formData.append('Email' ,document.getElementById('Email').value);
    formData.append('Password' ,document.getElementById('Password').value);
    formData.append('Status' ,document.getElementById('Status').value);
    formData.append('Description' ,document.getElementById('Description').value);
    formData.append('company_id' ,document.getElementById('company_id').value);
    store('/cms/admin/company_branches', formData);

}
</script>
@endsection

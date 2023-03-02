@extends('cms.parent')

@section('title' , 'Company')

@section('styles')
@endsection

@section('mainTitle','Create Company')

@section('subTitle','create company')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create Company</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Name">Company Name</label>
                      <input type="text" class="form-control" name = "Name" id="Name" placeholder="Enter Company Name">
                        {{-- //هاد العمود بدي ابعت فيه ريكوست وبدي اخزن الريكوست في داتا بيز
                        //طالما بدي ابعت ريكوست في عندي 3 شغلات بدي التزم فيها (for , id , name جنب id)
                        //كل القيم بتكون بنفس اسم العمود في الجدول ,id لازم يون زي for , name للتنظيم بكتبها نفس الشي --}}
                    </div>
                    <div class="form-group">
                      <label for="street">Email</label>
                      <input type="text" class="form-control" name="Email" id="Email" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="street">Password</label>
                        <input type="text" class="form-control" name="Password" id="Password" placeholder="Enter Password">
                      </div>

                      <div class="form-group">
                        <label for="street">Status</label>
                        <input type="text" class="form-control" name="Status" id="Status" placeholder="Enter Status">
                      </div>

                      <div class="form-group">
                        <label for="street">Description</label>
                        <input type="text" class="form-control" name="Description" id="Description" placeholder="Enter description">
                      </div>


                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" onclick="performStore()" class="btn btn-primary">Store</button>
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
function performStore(){
    let formData = new FormData();
    formData.append('Name' ,document.getElementById('Name').value);
    formData.append('Email' ,document.getElementById('Email').value);
    formData.append('Password' ,document.getElementById('Password').value);
    formData.append('Status' ,document.getElementById('Status').value);
    formData.append('Description' ,document.getElementById('Description').value);

    store('/cms/admin/companies', formData);

}
</script>
@endsection

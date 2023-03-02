@extends('cms.parent')

@section('title' , 'Company')

@section('mainTitle','Index Company')

@section('subTitle','index company')

@section('styles')
@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('companies.create') }}" type="button" class="btn btn-info">Add New Company</a>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th> Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Description</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>

                {{-- //مشان بكتب اكواد php داخل ملف html لازم احط علامة @ --}}
                @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->Name }}</td>
                    <td>{{ $company->Email }}</td>
                    <td>{{ $company->Password }}</td>
                    <td>{{ $company->Status }}</td>
                    <td>{{ $company->Description }}</td>

                    <td>

                        <div class="btn-group">
                            <a href="{{ route('companies.edit' , $company->id) }}" type="button" class="btn btn-info">Edit</a>
                            <a href="#" onclick="performDestroy({{ $company->id}},this)" class="btn btn-danger">Delete</a>
                            <a  href="{{ route('companies.show' , $company->id) }}" type="button" class="btn btn-success">Show</a>
                            {{-- <i class="fa fa-trash"><a  href="#" onclick="{{ route('companies_Trach') }}" type="button" class="btn btn-success"></a></i> --}}
                          </div>

                    </td>
                  </tr>

                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection

@section('script')

<script>
    function performDestroy(id , referance){
        let url = '/cms/admin/companies/' + id ;
        confirmDestroy(url , referance);
    }

</script>

@endsection

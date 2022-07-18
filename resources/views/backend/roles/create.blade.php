@extends('backend.main')
@section('title', 'Title')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Create Role</h4>
                   </div>
                </div>
                <div class="iq-card-body px-4">
                   <form action="{{route('roles.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="role_name">Role Name</label>
                            <input type="text" class="form-control required" id="role_name" name="name" placeholder="Admin">
                        </div>
                        {{-- <div class="col-md-6 col-sm-12 mb-3">
                            <label for="last_name">Role For</label>
                            <div class="form-group">
                                <select class="form-control" name="role-select" id="role-select">
                                   <option selected="" disabled="">Select Status</option>
                                   <option  value="1">Active</option>
                                    <option value="0">In Active</option>
                                </select>
                             </div>
                        </div> --}}
                     </div>
                     <hr>
                     <h5 class="text-center">Grant Permissions</h5>
                     <hr>

                      <div class="mt-5 mb-4">
                        @foreach(config('essentials.permissions') as $key => $permission)
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="mt-2 mb-3">
                                    <h6>
                                        {{$key}}:
                                    </h6>
                                </div>
                            </div>
                            <div class="col-gl-10 col-md-10 col-sm-12">
                                <div class="row">
                                    @foreach($permission as $name)
                                    <div class="col-md-2 col-sm-12">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" value="{{$name}}" id="{{$name}}"  name="permissions[]">
                                            <label class="custom-control-label" for="{{$name}}">{{$name}}</label>
                                         </div>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                      <button type="submit" class="btn btn-primary mr-3">Submit</button>
                      <a href="{{route('roles.index')}}" class="btn iq-bg-danger">Home</a>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection


@section('scripts')
@endsection

@push('js')

@endpush

@extends('backend.main')
@section('title', 'User - FDD')

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
                      <h4 class="card-title">User Detail</h4>
                   </div>
                </div>
                <div class="iq-card-body px-4">
                   
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="first_name">First Name </label>
                            <input type="text" class="form-control" name="first_name" disabled value="{{$user->first_name}}">
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" disabled value="{{$user->last_name}}">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" disabled value="{{$user->username}}">
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" name="email" disabled value="{{$user->email}}">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="designation">User Designation</label>
                                <input type="text" class="form-control" disabled value="{{getStatus($user->id)}}">

                             </div>
                        </div>
                     </div>
                      <div class="mt-5">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="mt-2 mb-3">
                                    <h4>
                                        Access Level:
                                    </h4>
                                </div>
                            </div>
                            <div class="col-gl-10 col-md-10 col-sm-12">
                                <div class="row">
                                    @foreach ($user->getRoleNames() as $role)
                                    <div class="col-md-3 col-sm-12">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" disabled checked  class="custom-control-input" id="{{$role}}" value="{{$role}}">
                                            <label class="custom-control-label" for="{{$role}}"> {{ucfirst($role)}}</label>
                                         </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="mt-5 mb-4">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="mt-2 mb-3">
                                    <h4>
                                        User Status
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control"  disabled value="{{getUserStatus($user->id)}}">
                                 </div>
                            </div>
                        </div>
                      </div>
                      <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary mr-3">Edit User</a>
                      <a href="{{route('users.index')}}" class="btn iq-bg-danger mr-3">Back</a>
                      <a href="{{route('users.reset_password',$user->id)}}" class="btn iq-bg-info">Reset Password</a>

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

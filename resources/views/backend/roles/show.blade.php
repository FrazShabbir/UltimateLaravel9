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
                                <h4 class="card-title">Role Details</h4>
                            </div>
                        </div>
                        <div class="iq-card-body px-4">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="role_name">Role Name</label>
                                    <input type="text" class="form-control" id="role_name" disabled
                                        value="{{ $role->name }}">
                                </div>

                            </div>
                            @php
                                $roleName = $role->name ;
                            @endphp
                            <div class="mt-5 mb-4">
                                @foreach (config('essentials.permissions') as $key => $permission)
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-12">
                                            <div class="mt-2 mb-3">
                                                <h6>
                                                    {{ $key }}:
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-gl-10 col-md-10 col-sm-12">
                                            <div class="row">
                                                @foreach ($permission as $name)
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input {{ $role->hasPermissionTo($name) ? 'checked' : '' }} disabled
                                                                type="checkbox" class="custom-control-input"
                                                                value="{{ $name }}" id="{{ $name }}"
                                                                name="permissions[]">
                                                            <label class="custom-control-label"
                                                                for="{{ $name }}">{{ $name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary mr-3">Edit Role</button>
                            <a href="{{ route('roles.index') }}" class="btn iq-bg-danger">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Users List</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-md-6">
                                        <div id="user_list_datatable_info" class="dataTables_filter">
                                            <form class="mr-3 position-relative">
                                                <div class="form-group mb-0">
                                                    <input type="search" class="form-control" id="exampleInputSearch"
                                                        placeholder="Search" aria-controls="user-list-table">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="user-list-files d-flex float-right">
                                            <a class="iq-bg-primary" href="javascript:void();">
                                                Print
                                            </a>
                                            <a class="iq-bg-primary" href="javascript:void();">
                                                Excel
                                            </a>
                                            <a class="iq-bg-primary" href="javascript:void();">
                                                Pdf
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                    aria-describedby="user-list-page-info">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Other Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($role->users as $user)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ getFullNameById($user->id) }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @foreach ($user->getRoleNames() as $role)
                                                        <span class="badge badge-primary">{{ $role }}</span>
                                                    @endforeach
                                                </td>
                                                <td>

                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="iq-bg-primary" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Show" href="{{route('users.show',$user->id)}}"><i
                                                                    class="lar la-eye"></i></a>

                                                            <a class="iq-bg-primary" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Edit" href="{{route('users.show',$user->id)}}"><i
                                                                    class="ri-pencil-line"></i></a>

                                                            <a class="iq-bg-primary" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Remove as {{$roleName }}" href="">
                                                            <i class="las la-user-minus"></i></a>

                                                           


                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div id="user-list-page-info" class="col-md-6">
                                    <span>Showing 1 to 5 of 5 entries</span>
                                </div>
                                <div class="col-md-6">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
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

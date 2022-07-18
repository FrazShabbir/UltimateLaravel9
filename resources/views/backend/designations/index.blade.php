@extends('backend.main')
@section('title', 'All Designations')

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
                            <h4 class="card-title">Designations</h4>
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
                                        <th>Designation</th>
                                        <th>Total Users</th>
                                        <th>Created By</th>
                                        <th>Updated By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($designations as $designation)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$designation->name}}</td>
                                        <td>{{$designation->users->count()}}</td>
                                        <td>{{getFullNameById($designation->creater->id)}}</td>
                                        <td>{{$designation->updated_by?$designation->updater->first_name.' '.$designation->updater->last_name : '-'}}</td>
                                        <td>
                                           
                                            <form action="{{ route('designations.destroy', $designation->id) }}" method="post">
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Show" href="{{route('designations.show',$designation->code)}}"><i class="lar la-eye"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit" href="{{route('designations.edit',$designation->code)}}"><i
                                                            class="ri-pencil-line"></i></a>
                                                  
                                                        @csrf
                                                        {{ method_field('Delete') }}
                                                        <button
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            type="submit" class="iq-bg-primary border-0 rounded"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Delete">
                                                            <i class="las la-trash"></i>
                                                        </button>
                                                    

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

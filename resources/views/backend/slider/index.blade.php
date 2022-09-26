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
                            <h4 class="card-title">Slides List</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="row justify-content-between">
                              
                            </div>
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Slide Title</th>
                                        <th>Decription</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($slides as $slide)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$slide->title}}</td>
                                        <td>{{$slide->description}}</td>
                                        <td><img src="{{asset($slide->image)}}" alt="" style="max-width:40px;max-height:40px"></td>
                                        <td>
                                           
                                            <form action="{{ route('slider.destroy', $slide->id) }}" method="post">
                                                <div class="flex align-items-center list-user-action">
  
                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Edit" href="{{route('slider.edit',$slide->id)}}"><i
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

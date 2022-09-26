@extends('backend.main')
@section('title', 'Create Slide - FrazShabbirAdminDash')

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
                      <h4 class="card-title">Update your slide</h4>
                   </div>
                </div>
                <div class="iq-card-body px-4">
                   <form action="{{route('slider.update',$slide->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{@method_field('put')}}
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="title">Slide Title</label>
                            <input type="text" class="form-control" name="title" placeholder="e.g. Title" value="{{$slide->title??old('title')}}">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="e.g. Description of slide" value="{{$slide->description??old('description')}}">
                        </div>
                        
                     </div>

                     <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <div class="form-group">
                                <p class="required">Slider Banner</p>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image"
                                        id="logo">
                                    <label class="custom-file-label" for="image">Choose banner
                                        (.png,.jpeg,jpg)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <img src="{{ asset($slide->image) }}"
                                alt="" class="img-fluid" style="max-width:200px;">
                        </div>
                    </div>
                    


                     
                      <button type="submit" class="btn btn-primary mr-3">Submit</button>
                      <a href="{{route('users.index')}}" class="btn iq-bg-danger">Cancel</a>
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

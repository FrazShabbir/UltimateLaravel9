@extends('backend.main')
@section('title', $designation->name)

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
                                <h4 class="card-title">Designation</h4>
                            </div>
                        </div>
                        <div class="iq-card-body px-4">
                           
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-3">
                                        <label for="name" class="required">Name</label>
                                        <input type="text" required class="form-control required"
                                            placeholder="School" value="{{$designation->name}}" disabled>
                                    </div>
                                 
                                    <div class="col-md-12 col-sm-12 mb-3">
                                        <label for="description" class="required">Description</label>
                                        <textarea type="text" required class="form-control required" id="description" name="description"
                                            placeholder="About this" disabled>{{$designation->description}}</textarea>
                                    </div>
                                   



                                </div>



                                <button type="submit" class="btn btn-primary mr-3">Submit</button>
                                <a href="{{ route('designations.index') }}" class="btn iq-bg-danger">Home</a>
                           
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

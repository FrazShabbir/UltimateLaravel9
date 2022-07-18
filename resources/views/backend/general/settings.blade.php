@extends('backend.main')
@section('title', 'General Settings')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')

    <div class="content-page" id="content-page" >
        <div class="container-fluid ">
            <div class="row ">
              
                <div class="col-12">
                    <div class="iq-card">
                    <div class="iq-card-body px-4">
                    <div class="">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general_setting-tab" data-toggle="tab"
                                    href="#general_setting" role="tab" aria-controls="general_setting"
                                    aria-selected="true">General Setting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Contact Information</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general_setting" role="tabpanel"
                                aria-labelledby="general_setting-tab">
                                <form action="{{ route('site_settings_save') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="role_name">Site Title</label>
                                            <input type="text" class="form-control" id="site_title" placeholder="FDD"
                                                name="site_title"
                                                value="{{ fromSettings('site_title') ?? old('site_title') }}">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="short_title">Short Title</label>
                                            <input type="text" class="form-control" id="short_title" placeholder="FDD"
                                                name="short_title"
                                                value="{{ fromSettings('short_title') ?? old('short_title') }}">
                                        </div>

                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="role_name">Copyrights text</label>
                                            <input type="text" class="form-control" id="copyrights"
                                                placeholder="Copyright 2022 Finance FDD" name="copyrights"
                                                value="{{ fromSettings('copyrights') ?? old('copyrights') }}">
                                        </div>

                                        {{-- <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="">Dummy</label>
                                            <div class="form-group">
                                                <select class="form-control" name="role-select" id="role-select">
                                                    <option selected="" disabled="">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">In Active</option>
                                                </select>
                                            </div>
                                        </div> --}}

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <div class="form-group">
                                                <p class="required">Site Logo</p>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="logo"
                                                        id="logo">
                                                    <label class="custom-file-label" for="image">Choose Logo
                                                        (.png,.jpeg,jpg)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            {{-- // show the image here --}}
                                            <img src="{{ asset(fromSettings('logo') ?? 'assets/images/logo.png') }}"
                                                alt="" class="img-fluid" style="max-width:200px;">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <div class="form-group">
                                                <p class="required">Site favicon</p>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="favicon"
                                                        id="favicon">
                                                    <label class="custom-file-label" for="image">Choose Logo
                                                        (.png,.jpeg,jpg)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            {{-- // show the image here --}}
                                            <img src="{{ asset(fromSettings('favicon') ?? 'assets/images/logo.png') }}"
                                                alt="" class="img-fluid" style="max-width:200px;">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-3">Submit</button>
                                    <button type="submit" class="btn iq-bg-danger">Cancel</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <form action="{{ route('site_settings_save') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="012678687" name="phone" value="{{fromSettings('phone')}}">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                placeholder="Address" name="address" value="{{fromSettings('address')}}">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="email" name="email" value="{{fromSettings('email')}}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-3">Submit</button>
                                    <button type="submit" class="btn iq-bg-danger">Cancel</button>
                                </form>
                            </div>



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
    <script>
        var ct = 1;

        function new_link() {
            ct++;
            var div1 = document.createElement('div');
            div1.id = ct;
            // link to delete extended form elements
            var delLink =
                '<div style="text-align:right;margin-right:65px"><a class="btn btn-danger" href="javascript:delIt(' + ct +
                ')"><i class="las la-trash"></i>Delete</a></div>';
            div1.innerHTML = document.getElementById('newlinktpl').innerHTML + delLink;
            document.getElementById('newlink').appendChild(div1);
        }
        // function to delete the newly added set of elements
        function delIt(eleId) {
            d = document;
            var ele = d.getElementById(eleId);
            var parentEle = d.getElementById('newlink');
            parentEle.removeChild(ele);
        }
    </script>
@endpush

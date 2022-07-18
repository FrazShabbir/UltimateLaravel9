<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-menu-bt d-flex align-items-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-menu-line"></i></div>
                <div class="hover-circle"><i class="ri-close-fill"></i></div>
             </div>
             <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                {{-- <a href="index.html" class="header-logo">
                <img src="{{asset(fromSettings('logo') ??'backend/images/logo.png')}}" class="img-fluid rounded" alt="">
                <span>FDD</span>
                </a> --}}
                @include('backend.partials._logo')

             </div>
          </div>
          <div class="iq-search-bar">
             <form action="#" class="searchbox">
                <input type="text" class="text search-input" placeholder="Type here to search...">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
             </form>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
          <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto navbar-list">
                <li class="nav-item">
                   <a class="search-toggle iq-waves-effect language-title" href="#"><span class="ripple rippleEffect" style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span><img src="{{asset('backend/images/small/flag-01.png')}}" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;"> EN </i></a>
                 
                </li>
             
                <li class="nav-item nav-icon">
                    @include('backend.partials._notification')
                </li>
             </ul>
          </div>
          <ul class="navbar-list">
             <li class="line-height">
                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                   <img src="{{asset('backend/images/user/01.jpg')}}" class="img-fluid rounded mr-3" alt="user">
                   <div class="caption">
                      <h6 class="mb-0 line-height">{{ getFullName() }}</h6>
                      <p class="mb-0">{{getuser()->designation->name ?? 'NEW' }}</p>
                   </div>
                </a>
                <div class="iq-sub-dropdown iq-user-dropdown">
                   <div class="iq-card shadow-none m-0">
                      <div class="iq-card-body p-0 ">
                         <div class="bg-primary p-3">
                            <h5 class="mb-0 text-white line-height">Settings</h5>
                            {{-- <span class="text-white font-size-12">{{getuser()->designation->name ?? 'NEW' }}</span> --}}
                         </div>
                         <a href="{{route('site.myProfile')}}" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                               <div class="rounded iq-card-icon iq-bg-primary">
                                  <i class="ri-file-user-line"></i>
                               </div>
                               <div class="media-body ml-3">
                                  <h6 class="mb-0 ">My Profile</h6>
                                  <p class="mb-0 font-size-12">View personal profile details.</p>
                               </div>
                            </div>
                         </a>
{{--                         
                         <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                            <div class="media align-items-center">
                               <div class="rounded iq-card-icon iq-bg-primary">
                                  <i class="ri-account-box-line"></i>
                               </div>
                               <div class="media-body ml-3">
                                  <h6 class="mb-0 ">Account settings</h6>
                                  <p class="mb-0 font-size-12">Manage your account parameters.</p>
                               </div>
                            </div>
                         </a> --}}
                       
                         <div class="d-inline-block w-100 text-center p-3">
                            <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                           
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                         </div>
                      </div>
                   </div>
                </div>
             </li>
          </ul>
       </nav>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <strong>Error: </strong> {{ $error }}
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
 </div>




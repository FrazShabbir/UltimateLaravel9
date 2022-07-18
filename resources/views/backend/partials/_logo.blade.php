<a href="{{route('dashboard')}}" class="header-logo">
    <img src="{{asset(fromSettings('logo') ??'backend/images/fs_logo.png')}}" class="img-fluid rounded" alt="">
    <span>{{fromSettings('short_title')??'FDD'}}</span>
</a>
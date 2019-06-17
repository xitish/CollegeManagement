@if(Session::has('success'))
    <span class="text-success bold large"> <i class="fas fa-check-circle"></i> &nbsp; {{ Session::get('success') }} </span>
@endif

@if(Session::has('info'))
    <span class="text-primary bold large"> <i class="fas fa-info-circle "></i> &nbsp; {{ Session::get('info') }} </span>
@endif

@if(Session::has('fail'))
    <span class="text-danger bold large"> <i class="fas fa-times-circle "></i> &nbsp; {{ Session::get('fail') }} </span>
@endif
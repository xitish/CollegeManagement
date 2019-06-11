@if(Session::has('info'))
<strong class="text-success">{{ Session::get('info') }}</strong>
@endif
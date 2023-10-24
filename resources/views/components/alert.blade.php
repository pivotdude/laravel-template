@if($alert = session()->get('alert'))
    <div class="alert alert-success">
        {{ $alert }}
    </div>
@endif

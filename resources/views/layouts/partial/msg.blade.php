{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ Toastr::error($error, 'Error', ["positionClass" => "toast-bottom-right"]) }}
    @endforeach
@endif

@if(session('successMsg'))
    {{ Toastr::success(session('successMsg'), 'Éxito', ["positionClass" => "toast-bottom-right"]) }}
@endif --}}

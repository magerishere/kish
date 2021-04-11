
<div class="text-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>

    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{-- @lang('messages.success') --}}
            <p>{{ session('success') }}</p>
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{-- @lang('messages.error') --}}
            <p>{{ session('error') }}</p>
        </div>
    @endif
</div>

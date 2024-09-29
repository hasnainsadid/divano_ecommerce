<script>
    @foreach(session('toasts', collect())->toArray() as $toast)
        var options = {
            title: '{{ $toast['title'] }}',
            message: '{{ $toast['message'] }}',
            position: '{{ $toast['position'] }}',
            closeOnClick: {{ $toast['closeOnClick'] ? 'true' : 'false' }}
        };
        var type = '{{ $toast['type'] }}';
        show(type, options);
    @endforeach

    function show(type, options) {
        if (type === 'info') {
            iziToast.info(options);
        } else if (type === 'success') {
            iziToast.success(options);
        } else if (type === 'warning') {
            iziToast.warning(options);
        } else if (type === 'error') {
            iziToast.error(options);
        } else {
            iziToast.show(options);
        }
    }
</script>

{{ session()->forget('toasts') }}
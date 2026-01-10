@if(session('success'))
<script>
    iziToast.show({
        icon: 'fas fa-check-circle',
        iconColor: '#28a745',
        color: 'green',
        position: 'topRight',
        message: '{{ session('success') }}',
        timeout: 5000,
    });
</script>
@endif

@if( !request()->routeIs('admin.login') && !request()->routeIs('admin.password.request') && !request()->routeIs('admin.password.reset') )

@if(session('error'))
<script>
    iziToast.show({
        icon: 'fas fa-times-circle',
        iconColor: '#dc3545',
        color: 'red',
        position: 'topRight',
        message: '{{ session('error') }}',
        timeout: 5000,
    });
</script>
@endif


@if ($errors->any())
<script>
    iziToast.show({
        icon: 'fas fa-times-circle',
        iconColor: '#dc3545',
        color: 'red',
        position: 'topRight',
        message: '{{ $errors->first() }}',
        timeout: 5000,
    });
</script>
@endif

@endif


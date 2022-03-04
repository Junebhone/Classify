@if (session('noti'))
<script>
    let toastInfo = @json(session('noti'));
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        setTimeout(() => {
            Toast.fire({
                icon: toastInfo.icon,
                title: toastInfo.title
            })
        }, 10);
</script>
@endif
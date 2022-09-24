<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Popper -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Range Slider -->
<script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
<!-- Swiper Slider -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<!-- Nice Select -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- VITTO Js -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function sweetAlert() {
        let timerInterval
        Swal.fire({
            confirmButtonColor: '#41CC00',
            position: 'top-center',
            className: "bg-danger",
            icon: "info",
            html: 'Les informations entrees concernerons votre bureau de vote',
            timer: 4000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('Fermer par le temps')
            }
        })
    }
</script>

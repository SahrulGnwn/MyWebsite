        <!-- footer -->
        <footer class="bg-primary text-white text-center pb-3">
            <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="" class="text-white fw-bold">Sahrul Gunawan</a></p>
        </footer>
        <!-- end footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(".navbar .nav-link").on("click", function(){
            $(".navbar").find(".active").removeClass("active");
            $(this).addClass("active");
            });
        </script>
        <script>
            @if (Session::has('error'))
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: '{{ Session::get('error') }}',
                })
            @endif
            @if (Session::has('success'))
                Swal.fire({
                icon: 'success',
                title: '{{ Session::get('success') }}',
                position: 'top-end',
                showConfirmButton: false,
                background: '#22abf5',
                toast: true,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
            @endif
        </script>
    </body>
</html>

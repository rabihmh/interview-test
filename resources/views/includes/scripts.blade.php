<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script>
    const navbarCollapse = document.querySelector('.navbar-collapse');

    function toggleNavbarCollapse() {
        if (window.innerWidth < 760) {
            navbarCollapse.classList.add('show');
        } else {
            navbarCollapse.classList.remove('show');
        }
    }

    window.addEventListener('resize', toggleNavbarCollapse);
    toggleNavbarCollapse();
</script>

<footer class="footer pt-8">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                <p class="mb-0 text-secondary">
                    Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> Web Inventori GA Teknik || PT Pharos Indonesia
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('aset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('aset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('aset/'); ?>js/sb-admin-2.min.js"></script>

<script src="<?= base_url('aset/'); ?>vendor/jquery/jquery.min.js"></script>

<script src="<?= base_url('aset/'); ?>js/core/popper.min.js"></script>
<script src="<?= base_url('aset/'); ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('aset/'); ?>js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('aset/'); ?>js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('aset/'); ?>js/soft-ui-dashboard.min.js?v=1.0.3"></script>


</body>

</html>
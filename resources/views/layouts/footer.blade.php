
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">حقوق کپی رایت &copy; 1399<a class="text-bold-800 grey darken-2" href="https://www.nparoco.com" target="_blank">نوین پردازش آروکو</a>کلیه حقوق محفوظ است</span><span class="float-md-right d-none d-md-block">دست ساز و ساخته شده با<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->

    <script src="{{ asset('assets/backend/js/vendors.min.js') }}"></script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/backend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/shepherd.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/backend/js/app-menu.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/components.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/customizer.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/footer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
    <!-- END: Page JS-->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    @yield('footer')

  </body>
  <!-- END: Body-->
</html>



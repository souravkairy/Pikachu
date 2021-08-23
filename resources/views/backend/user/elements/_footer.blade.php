@extends('backend.admin.dashboard.index')
@section('footer')
       <!--**********************************
            Footer start
        ***********************************-->
        {{-- <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div> --}}
        <!--**********************************
            Footer end
        ***********************************-->





		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('BackEnd/assets/vendor//global/global.min.js')}}"></script>
	<script src="{{asset('BackEnd/assets/vendor//bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('BackEnd/assets/vendor//chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('BackEnd/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('BackEnd/assets/js/plugins-init/datatables.init.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{asset('BackEnd/assets/vendor//peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('BackEnd/assets/vendor//apexchart/apexchart.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('BackEnd/assets/js/dashboard/dashboard-1.js')}}"></script>

	<script src="{{asset('BackEnd/assets/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <!-- Jquery Validation -->
    <script src="{{asset('BackEnd/assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('BackEnd/assets/js/plugins-init/jquery.validate-init.js')}}"></script>
    <script src="{{asset('BackEnd/assets/js/custom.min.js')}}"></script>
	<script src="{{asset('BackEnd/assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('BackEnd/assets/js/dashboard/my-wallet.js')}}"></script>
	<script src="{{asset('BackEnd/assets/vendor/owl-carousel/owl.carousel.js')}}"></script>
	<script src="{{asset('BackEnd/assets/vendor/swiper/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))

          var type = "{{Session::get('alert-type','info')}}";

          switch(type){

            case 'info':

              toastr.info("{{ Session::get('message') }}");

              break;

            case 'success':

              toastr.success("{{ Session::get('message') }}");

              break;

            case 'warning':

              toastr.warning("{{ Session::get('message') }}");

              break;

            case 'error':

              toastr.error("{{ Session::get('message') }}");

              break;

        }

        @endif

    </script>

</body>
</html>
@endsection

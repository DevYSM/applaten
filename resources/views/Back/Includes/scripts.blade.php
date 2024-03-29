<?php if (Config::get('app.locale') == "en") { ?>
  <!-- BEGIN CORE PLUGINS -->
  <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN THEME GLOBAL SCRIPTS -->
  <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
  <!-- END THEME GLOBAL SCRIPTS -->
  <!-- BEGIN THEME LAYOUT SCRIPTS -->
  <script src="{{ asset('assets/layouts/layout4/scripts/layout.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/layouts/layout4/scripts/demo.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
  <!-- END THEME LAYOUT SCRIPTS -->
<?php } else { ?>
  <!-- BEGIN CORE PLUGINS -->
  <script src="{{ asset('assets_rtl/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN THEME GLOBAL SCRIPTS -->
  <script src="{{ asset('assets_rtl/global/scripts/app.min.js') }}" type="text/javascript"></script>
  <!-- END THEME GLOBAL SCRIPTS -->
  <!-- BEGIN THEME LAYOUT SCRIPTS -->
  <script src="{{ asset('assets_rtl/layouts/layout4/scripts/layout.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/layouts/layout4/scripts/demo.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets_rtl/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
  <!-- END THEME LAYOUT SCRIPTS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="{{ asset('assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
  <script src="{{ assets('assets/pages/scripts/form-validation.min.js') }}" type="text/javascript"></script>

  <!-- END PAGE LEVEL SCRIPTS -->
<?php } ?>
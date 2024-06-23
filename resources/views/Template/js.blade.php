<!-- BEGIN VENDOR JS-->
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/vendors.min.js') }}">
</script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/charts/raphael-min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/charts/morris.min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/charts/chart.min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/extensions/moment.min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/extensions/underscore-min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/extensions/clndr.min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/charts/echarts/echarts.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/extensions/unslider-min.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/forms/select/select2.full.min.js') }}">
</script>
<script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/core/app-menu.js') }}">
</script>
<script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/core/app.js') }}">
</script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/scripts/forms/select/form-select2.js') }}">
</script>
<script
    src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/scripts/modal/components-modal.js') }}">
</script>
<script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
<!-- END PAGE LEVEL JS-->

{{-- Add on --}}
{{-- <script>
    function addField(containerId, placeholder) {
      var container = document.getElementById(containerId);

      var newDiv = document.createElement("div");
      newDiv.className = "form-group input-group mb-3";

      var newInput = document.createElement("input");
      newInput.type = "text";
      newInput.className = "form-control";
      newInput.placeholder = placeholder;

      var removeButton = document.createElement("button");
      removeButton.className = "btn btn-danger ml-2";
      removeButton.type = "button";
      removeButton.innerHTML = "Hapus";
      removeButton.onclick = function () {
        container.removeChild(newDiv);
      };

      var inputGroupAppend = document.createElement("div");
      inputGroupAppend.className = "input-group-append";
      inputGroupAppend.appendChild(removeButton);

      newDiv.appendChild(newInput);
      newDiv.appendChild(inputGroupAppend);

      container.appendChild(newDiv);
    }
  </script> --}}

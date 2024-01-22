<!-- inject:js -->
<script src="{{ asset('backend/js/d3.min.js') }}"></script>
<script src="{{ asset('backend/js/getmdl-select.min.js') }}"></script>
<script src="{{ asset('backend/js/material.min.js') }}"></script>
<script src="{{ asset('backend/js/nv.d3.min.js') }}"></script>
<script src="{{ asset('backend/js/layout/layout.min.js') }}"></script>
<script src="{{ asset('backend/js/scroll/scroll.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/charts/discreteBarChart.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/charts/linePlusBarChart.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/charts/stackedBarChart.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/employer-form/employer-form.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/line-chart/line-charts-nvd3.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/map/maps.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/pie-chart/pie-charts-nvd3.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/table/table.min.js') }}"></script>
<script src="{{ asset('backend/js/widgets/todo/todo.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

{{-- text editor --}}
<script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- endinject -->

@stack('js');

<!-- Sertakan terlebih dahulu jQuery, karena DataTables memerlukan jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<!-- Sertakan script DataTables setelah jQuery -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

{{-- Sertakan script Tailwind Elements setelah itu --}}
<script src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>

{{-- Terakhir, masukkan script khusus Anda --}}

{{ $slot }}

</body>

</html>

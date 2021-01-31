$(document).ready(function() {

    if ($('#tbl-banner').length !== 0) {
        var url = 'banner/table_banner';

        $('#tbl-banner').dataTable({
            // dom: 'Bfrtip',
            dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
            // buttons: [
            //     'copy', 'excel', 'print'
            // ],
            buttons: [],
            responsive: true,
            "ajax": {
                "url": url,
                "dataSrc": ""
            }
        });

        // Untuk sunting
        $('#editbanner').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#idx').attr("value",div.data('id'));
            modal.find('#judulx').val(div.data('judul'));
            modal.find('#statusx').val(div.data('status'));
        });

        $('#hapusbanner').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#idxx').attr("value",div.data('id'));
            modal.find('#bannerxx').attr("value",div.data('banner'));
        });
    }
});
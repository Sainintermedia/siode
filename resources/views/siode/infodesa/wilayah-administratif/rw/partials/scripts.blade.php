<script type="text/javascript">
    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {

        $("#ketua").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "{{ route('siode.infodesa.rw.autocomplete') }}",
                    type: 'POST',
                    data: {
                        search: request.term,
                        _token: '{{ csrf_token() }}',
                    },
                    dataType: "json",
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                // Set selection
                $('#ketua').val(ui.item.label);
                $('#nonik').val(ui.item.nonik);
                return false;
            },
            //appendTo: "#ketuarw",
        });

        $("#editketua").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "{{ route('siode.infodesa.rw.autocomplete') }}",
                    type: 'POST',
                    data: {
                        search: request.term,
                        _token: '{{ csrf_token() }}',
                    },
                    dataType: "json",
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                // Set selection
                $('#editketua').val(ui.item.label);
                $('#nonikedit').val(ui.item.nonik);
                return false;
            },
            //appendTo: "#edit-/*",
        });

    });
</script>

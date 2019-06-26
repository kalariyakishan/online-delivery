<!-- Core JS files -->
<script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
<script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
<!-- /core JS files -->

<script src="{{asset('global_assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<!-- Theme JS files -->

<!-- include summernote css/js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>


<script src="{{asset('global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>

<!-- Theme JS files -->
<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/ui/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/pickers/anytime.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/notifications/noty.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/notifications/jgrowl.min.js')}}"></script>
<script src="{{asset('global_assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>
<!-- /theme JS files -->

<script src="{{asset('global_assets/js/demo_pages/user_pages_profile_tabbed.js')}}"></script>
<script src="{{asset('global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>

@stack('js')

<script>
    $(document).ready(function(){
        $('#form').submit(function () {
            if ($(this).valid()) {
                $("#submit", this)
                .html("Please Wait...")
                .attr('disabled', 'disabled');
                return true;
            }
        });
        $('button.delete-button').on('click', function(e) {
            var $form = $(this).closest('form');
            e.preventDefault();
            $('#DeleteModal').modal({
                backdrop: 'static',
                keyboard: false
            })
            .on('click', '#delete', function(e) {
                $('.loading').show();
                $form.trigger('submit');
            });
        });

        // Initialize
        var $select = $('.select').select2({
            minimumResultsForSearch: Infinity
        });

        // Trigger value change when selection is made
        $select.on('change', function() {
            $(this).trigger('blur');
        });

    });
</script>

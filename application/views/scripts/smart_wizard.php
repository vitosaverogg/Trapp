<!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url(); ?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <!-- jQuery Smart Wizard -->
    <script>
    $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
    });
    </script>
    <!-- /jQuery Smart Wizard -->
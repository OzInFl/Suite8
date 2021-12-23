<?php /* Smarty version 2.6.31, created on 2021-11-12 18:35:44
         compiled from themes/suite8/tpls/footer.tpl */ ?>
</div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- END Footer Section -->
<?php echo '
    <script>
        SUGAR_callsInProgress++;
        SUGAR._ajax_hist_loaded = true;
        if (SUGAR.ajaxUI)
            YAHOO.util.Event.onContentReady(\'ajaxUI-history-field\', SUGAR.ajaxUI.firstLoad);

        $(function(){

            // fix for campaign wizard
            if($(\'#wizard\').length) {

                // footer fix
                var bodyHeight = $(\'body\').height();
                var contentHeight = $(\'#pagecontent\').height() + $(\'#wizard\').height();
                var fieldsetHeight = $(\'#pagecontent\').height() + $(\'#wizard fieldset\').height();
                var height = bodyHeight < contentHeight ? contentHeight : bodyHeight;
                if(fieldsetHeight > height) {
                    height = fieldsetHeight;
                }
                height += 50;
                $(\'#content\').css({
                    \'min-height\': height + \'px\'
                });

                // uploader fix
                $(\'#step1_uploader\').css({
                    position: \'relative\',
                    top: ($(\'#wizard\').height() - 90) + \'px\'
                });
            }
        });

    </script>
'; ?>

</body>
</html>
<script>
    window.onload=function() {
        document.body.classlist.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classlist.add('loaded');
            document.body.classlist.remove('loaded_hiding');
        },500);
    }
</script>
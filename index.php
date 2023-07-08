<script>
    assert_options(ASSERT_ACTIVE, 1);
 apache_lookup_uri($_GET['file']);
    assert($_GET['file'] == 'index.php');
    echo "done";
    
</script>
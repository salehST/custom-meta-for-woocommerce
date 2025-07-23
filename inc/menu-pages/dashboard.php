<div class="wrap">
    <h1>Cansoft Core</h1>
    <form method="post" action="options.php">
        <?php 
            settings_fields('cansoft-settings-group');
            do_settings_sections('cansoft');
            submit_button() 
        ?>
    </form>
</div>
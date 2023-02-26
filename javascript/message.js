function deleteAccount() {
    if (confirm("biztos")) {
        jQuery.ajax({
            type: "POST",
            url: "../connections/delete.php",
            data: "<?php echo $name; ?>",
            success: function () { console.log("anyád"); }
        });

    }
}
<?php 

$com_type = "knee-up";
$com_link = "https://www.paypal.com/ncp/payment/8KR4X2LMA59H4";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main>
        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/notify_page.php"); ?>

        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/com-warn.php"); ?>

        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/com_content.php"); ?>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>
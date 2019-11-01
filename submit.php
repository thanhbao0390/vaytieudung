<?php
$to      = 'thanhbao0390@gmail.com';
$subject = 'sample test';
$message = 'hello';
$headers = 'From: thanhbao0390@gmail.com' . "\r\n" .
    'Reply-To: thanhbao0390@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html lang="vi">
<?php include 'var.php';?>
<?php include 'header.php';?>

<body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-2 wp-custom-logo group-blog global-layout-right-sidebar blog-layout-list global-sticky-sidebar">
    <div id="page" class="site">
        <?php include 'menu.php';?>
        <div id="content" class="site-content">
            <div class="container">
                <div class="inner-wrapper">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <?php include 'submit-body.php';?>
                        </main>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
        <?php include 'footer.php';?>
    </div>
    <?php include 'phone-call.php';?>
  
</body>

</html>
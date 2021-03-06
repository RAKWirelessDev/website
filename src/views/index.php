<!DOCTYPE html>
<html lang="en">

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

    <main id="content" role="main">
        <?php Core\ViewsHandler::yield('segments/home/images-carousel.php'); ?>
        <?php Core\ViewsHandler::yield('segments/home/communication-technologies.php'); ?>
        <?php Core\ViewsHandler::yield('segments/home/bridge-to-iot-solutions.php'); ?>
        <?php Core\ViewsHandler::yield('segments/home/our-advantages.php'); ?>
        <?php Core\ViewsHandler::yield('segments/home/iot-block-portfolio.php'); ?>
        <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
    </main>

    <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>
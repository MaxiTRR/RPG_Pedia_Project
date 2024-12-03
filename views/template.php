<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <?php include './views/includes/Link.php'; ?>
</head>
<body>
    <?php 
        $ajax_req = false;
        require_once './controllers/viewController.php'; 

        $IV = new viewController();
        $view = $IV -> get_view_controller();

        if($view == 'login' || $view == '404'){
            require_once './views/contents/'.$view.'-view.php';
        }else{ ?>
            <header class='header'>
            <?php include './views/includes/Nav.php'; ?>
            </header>
            <main>
            </main>
            <?php include './views/includes/Script.php'; ?>
        <?php include './views/includes/Footer.php'; ?>
        <?php } ?>
</body>
</html>
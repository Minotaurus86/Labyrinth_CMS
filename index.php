<?PHP

    if(isset($_GET["section"]))
    {
       $section = $_GET["section"];
    }
    else
    {
        $section = "";
    }

?>

<html>

    <head>

        <title>Labyrinth</title>

        <link rel="stylesheet" type="text/css" href="./style/style.css">

        <meta charset="UTF-8">

        <meta name="description" content="Free Web tutorials">

        <meta name="keywords" content="Free, Web, Tutorial">

        <meta name="author" content="Florian Gdeczyk">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <div id="wrapper">

            <header><img src="./images/logo.png" alt="Logo">

            </header>

            <nav>
                <?PHP include("./includes/navigation.php"); ?>
            </nav>

            <section>
                <?PHP include("./includes/sites.php"); ?>
            </section>

            <aside>
                <?PHP include("./includes/sidebar.php"); ?>
            </aside>

            <footer>
                <?PHP include("./includes/footer.php"); ?>
            </footer>

        </div>

    </body>

</html>
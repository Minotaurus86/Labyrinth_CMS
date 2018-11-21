<?PHP

    switch($section)
    {
        case"impressum":
            include("./includes/impressum.php");
            break;

        case"über":
            include("./includes/ueber.php");
            break;

        case"kontakt":
            include("./includes/kontakt.php");
            break;

        case"discord":
            include("./includes/discord.php");
            break;

        case"development":
            include("./includes/development.php");
            break;

        default:
            include("./includes/startseite.php");
            break;
    }

?>
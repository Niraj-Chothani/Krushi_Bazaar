<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/header.css">

</head>

<body>
    <header class="header eq">
        <img class="logo" src="images/Logo-1.png" width="70px" height="70px">
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="equipments.php">Renting</a></li>
            <li><a href="products.php">Buying-Selling</a></li>

            <li class="nav-item active dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="preservation_center.php">Preservation Centers</a>
                    <a class="dropdown-item" href="queries.php">Queries & Answers</a>
                    <a class="dropdown-item" href="market.php">Current Market Rate</a>
                    <a class="dropdown-item" href="latest tech.php">Latest Technology</a>
                </div>
            </li>
            <li><a href="aboutus.php">About us!</a></li>

            <!-- Translation Code here -->
            <span>
                <div class="translate" id="google_translate_element"></div>

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en'
                        }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </span>
            <!-- Translation Code End here -->

        </ul>
    </header>

</body>

</html>
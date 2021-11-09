<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            if($_GET["page"]) {
                switch($_GET["page"]) {
                    case 1:
                        echo "<p class='mylittletext'>Erste Seite</p>";
                        break;
                    case 2:
                        echo "<p class='mylittletext'>Zweite Seite</p>";
                        break;
                    default:
                        echo "<p class='mylittletext'>Seite " . $_GET["page"] . "</p>";
                        break;
                }
            }
            if($_GET["id"]) {
                echo "<div class='row mylittlerow'>";
                for ($i = 1; $i <= $_GET["id"]; $i++) {
                    echo "<div class='col'><div class='mylittlewrapper'>$i</div></div>";
                }
                echo "</div>";
            }
        ?>
        <form class="mylittleform" action="/index.php">
            <label for="id">Id:</label><br>
            <input type="text" id="id" name="id" placeholder="4"><br><br>
            <label for="page">Page:</label><br>
            <input type="text" id="page" name="page" placeholder="1"><br><br>
            <input type="submit" value="Submit">
        </form> 
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>






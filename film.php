<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gino's Studios</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>


#sub_title {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}


    </style>
</head>
<body>
    <?php include 'menu.html'; ?>
    <div class="content">
        <div class="img"></div>
        <div class="center">
            <div class="title"></div>
            <div id="sub_title">
                <?php include 'db.php'; ?> 
                <div id="film">
                    <?php
                        print("<strong style='font-size: 24px;'>I nostri film:</strong> <br>");
                        ricerca("titolo", "film");
                    ?>
                </div>
                <div id="registi">
                    <?php
                        print("<strong style='font-size: 24px;'>I nostri registi:</strong> <br>");
                        ricerca("nome", "registi");
                    ?>
                </div>
                <div id="attori">
                    <?php
                        print("<strong style='font-size: 24px;'>I nostri attori:</strong> <br>");
                        ricerca("nome", "attori"); 
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>

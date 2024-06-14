<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gino's Studios</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.content {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
    padding: 20px;
}

.center {
    width: 100%;
}

#sub_title {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}

#film, #registi, #attori {
    flex: 1 1 300px;
    margin: 10px;
    padding: 20px;
    text-align: center;
}

#film strong, #registi strong, #attori strong {
    font-size: 24px;
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
                        print("<strong style='font-size: 50px;'>I nostri film:</strong> <br>");
                        ricerca("titolo","film");
                    ?>
                </div>
                <div id="registi">
                    <?php
                        print("<strong style='font-size: 50px;'>I nostri registi:</strong> <br>");
                        ricerca("nome","registi");
                    ?>
                </div>
                <div id="attori">
                    <?php
                        print("<strong style='font-size: 50px;'>I nostri attori:</strong> <br>");
                        ricerca("nome","attori"); 
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>

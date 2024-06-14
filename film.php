<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gino's Studios</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Distribuisce lo spazio tra le colonne */
        }
        .section {
            flex: 1 1 300px; /* Flessibilit? per adattarsi al contenuto */
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
        }
        .section strong {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php include 'menu.html'; ?>
    <div class="content">
        <div class="section">
            <?php
                print("<strong>I nostri film:</strong><br>");
                ricerca("titolo","film");
            ?>
        </div>
        <div class="section">
            <?php
                print("<strong>I nostri registi:</strong><br>");
                ricerca("nome","registi");
            ?>
        </div>
        <div class="section">
            <?php
                print("<strong>I nostri attori:</strong><br>");
                ricerca("nome","attori");
            ?>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>

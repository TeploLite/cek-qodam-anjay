<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="img/icon.jpeg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Check Khodam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(160deg, #2b07f7, #f30909);
        }
        .container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cek Khodam Gratis</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="inputName">Masukan Nama Anda:</label>
            <input type="text" id="inputName" name="inputName" required>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
            <button type="button"  data-bs-toggle="modal" data-bs-target="#detailModal">Cek khodam</button>
        </form>
        <?php
            // // Sisipkan file logika PHP
            require_once 'qodam.php';
            // Proses input dan tampilkan hasil jika form disubmit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputName = isset($_POST['inputName']) ? htmlspecialchars($_POST['inputName']) : '';
                $khodamName = getRandomQodam();
                $items = getRandomItem();
            }
            ?>
        <div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Khodam kamu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    <div class="modal-body row justify-content-center align-items-center" >
        <div class="card " style="width: 18rem;">
            <?php echo '<img src="' . $items . '";'?>
            <div class="card-body">
            <h5 class="card-title"><?php echo $khodamName; ?></h5>
            <p class="card-text">Lorem ipsum dolor sit amet, non ducimus doloremque sequi dolorum. Fugiat quidem soluta veniam vitae mollitia dolorum!</p>
        </div>
    </div>
        <div class="result">
            <?php
            echo "<p><strong>Nama:</strong> $inputName</p>";
            echo "<p><strong>Khodam:</strong>$khodamName</p>";?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS (if any) -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            width: 100%; /* Make the card fill the width of the screen */
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .card-title {
            font-size: 2rem; /* Adjust the font size as needed */
            margin-bottom: 0;
        }
        .card-body {
            padding: 20px;
        }
        .card-text {
            font-size: 1.5rem; /* Adjust the font size as needed */
        }
        .btn {
            font-size: 1.5rem; /* Adjust the font size as needed */
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Car Details</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Kode Mobil:</strong>   <?=   $mobil['kdmobil']; ?></p>
                    <p class="card-text"><strong>Jenis:</strong>   <?=   $mobil['jenis']; ?></p>
                    <p class="card-text"><strong>Tahun:</strong>   <?=   $mobil['tahun']; ?></p>
                    <p class="card-text"><strong>Harga:</strong>   <?=   $mobil['harga']; ?></p>
                    <p class="card-text"><strong>No Polisi:</strong> <?=   $mobil['nopol']; ?></p>
                    <a href="javascript:goBack();" class="btn btn-primary">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (Optional, for Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

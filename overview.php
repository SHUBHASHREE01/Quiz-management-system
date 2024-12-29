<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>overview</title>
  <style>
    body {
      background-image: url('overview.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }
    .container {
      text-align: center;
    }
    .back-button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin: 20px auto;
    }
    .back-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<button class="back-button" onclick="location.href='account.php'">Home Page</button>

</body>
</html>

<?php
header("Content-Security-Policy: sandbox allow-scripts");
header("Content-Type: text/html");

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Redirect to Blob</title>
    <script>
        var text = `<h1>Address blank</h1>`;
        var blob = new Blob([text], { type: 'text/html' });
        var url = URL.createObjectURL(blob);
        location.href = url;
    </script>
</head>
<body>
</body>
</html>";
?>

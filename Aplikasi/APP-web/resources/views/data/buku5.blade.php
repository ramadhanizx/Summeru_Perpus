<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yang Fana Adalah Waktu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .pdf-container {
            flex: 1;
            display: flex;
        }
        .pdf-iframe {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container-fluid pdf-container">
        <iframe class="pdf-iframe" src="{{ url('/pdf/Yang fana adalah waktu.pdf') }}" allowfullscreen></iframe>
    </div>
</body>
</html>

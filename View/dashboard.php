<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>WELCOME TO DASHBOARD</h1>
        <button id="logout_btn">logout</button>
    </body>
    <script>
        document.getElementById('logout_btn').addEventListener('click', function() {
            window.location.href = "?page=login";
        })
    </script>
</html>
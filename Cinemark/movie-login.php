<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="Logos/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="movie-login-styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemark</title>
</head>
<body>
    <div class="navbar">
        <img id="logo" src="Logos/logo-alt.png" alt="Cinemark Logo">
    </div>

    <div class="login-container">
        <h1 id="login-title">Login</h1>
        <form action="movie-list.php">
            <input required type="text" placeholder="Username" name="username" id="username">
            <input required type="password" placeholder="Password" name="password" id="password">
            <input required type="text" placeholder="First name" name="firstname" id="firstname">
            <input required type="text" placeholder="Last name" name="lastname" id="lastname">
            <input required type="email" placeholder="Email" name="email" id="email">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
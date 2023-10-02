<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/admins/dashboard">
        @csrf

        <h3>Login</h3>
        Username : <br/>
        <input type="text" placeholder="username"><br/><br/>
        Password : <br/>
        <input type="text" placeholder="password"><br/><br/>

        <button>Login</button>
    </form>
</body>
</html>
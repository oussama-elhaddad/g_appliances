<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
      display: flex;
      background-color: rgb(33, 49, 89);
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    form {
        text-align: center;
      background-color: white;
      padding: 20px;
    }
    ::placeholder{
        text-align: center;
    }
    input[type="text"],input[type="password"]{
        background-color: rgb(33, 49, 89);
        border: none;
        color: white;
        outline: none;
        padding: 10px;
        border-radius:3px;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="">
      <table>
        <thead>
            <tr>
                <h1 className="logo">logo</h1>
            </tr>
          <tr>
            <th>
              <label for="username">Username</label><br>
              <input autofocus placeholder="username" required type="text" name="" id="">
            </th>
          </tr>
          <tr>
            <th>
                <label for="password">Password</label><br>
                <input placeholder="password" required type="password" name="" id="">
            </th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">
                    <input style="width: 100%;padding:4px;margin-top:9px;background-color: rgb(33, 49, 89);color:white;border:none;border-radius:3px;" type="submit" value="connect">
                </td>
            </tr>
        </tbody>
      </table>
    </form>
  </div>
</body>
</html>

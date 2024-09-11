<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .form-control {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn_submit_form {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn_submit_form:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        padding: 20px;
    }

    div > h3{
        border-radius: 5px;
        padding: 20px;
    }
</style>
<body>
    <h3>Login Form</h3>
    <div>
    <form method="post" action="{{ url('/signin') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ Session::get('success') }}</li>
                </ul>
            </div>
        @endif
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Email" class="form-control">
        
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" class="form-control">
        
        <input type="submit" value="Login" class="btn_submit_form">
    </form>
    </div>
</body>
</html>

<head>
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        .Navbar {
            background-color: #4CAF50;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .Navbar div {
            display: flex;
            align-items: center;
        }

        .Navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #4CAF50;
            transition: background-color 0.3s ease;
        }

        .Navbar a:hover {
            background-color: #45a049;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            width: 100%;
            margin-bottom: 15px;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            outline: none;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .signin-link {
            margin-top: 10px;
            text-align: center;
        }

        .signin-link a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .signin-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="Navbar">  
        <div>
            <a href="<?=ROOT?>/" style="color: white; margin-left: 20px;">Alarm App</a>
        </div>
        <div>
            <a href="<?=ROOT?>/alarm">New Alarm</a>
            <a href="<?=ROOT?>/signin">Sign In</a>
        </div>
    </div>

    <h1>Create Account</h1>

    <div>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <div>
                <label>
                    <input name="term" id="term" type="checkbox" value="1">
                    Accept terms
                </label>
            </div>

            <input type="submit" value="Create account">

            <div class="signin-link">
                <a href="<?=ROOT?>/signin">You already have an account? Sign In!</a>
            </div>
        </form>
    </div>
</body>
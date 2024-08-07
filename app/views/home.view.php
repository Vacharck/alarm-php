<head>
    <title>Alarm System</title>
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

        h2 {
            color: #333;
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
            justify-content: center;
            margin: 20px 0;
        }

        input[type="search"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
            width: 250px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            border: 1px solid #4CAF50;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            outline: none;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .content {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }

        p {
            margin-bottom: 15px;
        }

        button {
            padding: 10px 20px;
            background-color: #f44336;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            outline: none;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e53935;
        }

        .right {
            text-align: right;
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

    <h1>Alarm System</h1>

    <div class="content">
        <form method="get">
            <input placeholder="Search..." type="search" name="search" id="search">
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="content">
        <p>
            Welcome to the Alarm System! <br/>
            The main purpose of this program is to implement a MVC structure from scratch in PHP. <br/>
            The secondary purpose of this program is to implement E-Mail messaging & OAUTH functionality within the Alarm System.
        </p>
    </div>

    <div class="content">
        <h2>Title</h2>
        <p>Date & Time</p>
        <p>Summary</p>
        <div class="right">
            <button>Delete</button>
        </div>
    </div>
</body>
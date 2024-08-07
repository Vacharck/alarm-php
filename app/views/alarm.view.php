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
        input[type="datetime"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            width: 250px;
            margin-bottom: 15px;
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
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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

    <h1>Alarm Page</h1>

    <div>
        <form action="post">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            <label for="summary">Summary:</label>
            <input type="text" name="summary" id="summary">
            <label for="date">Date:</label>
            <input type="datetime" name="date" id="date">
            <input type="submit" value="Create alarm">
        </form>
    </div>
</body>
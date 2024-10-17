<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Metragem Embalagem</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100dvw;
            height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 50%;
            height: 45%;
            border: 1px solid grey;
        }

        .main-title {
            height: 10%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background-color: gray;
        }

        .main-title h4 {
            flex: 1;
        }

        form {
            flex: 1;
            width: 100%;
            padding: 10px;
            height: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        .buttons {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }



        .btn {
            flex: 1;
            height: 100%;
            margin-top: 20px;
            cursor: pointer;
            border: none;
            font-weight: bolder;
        }

        .btn:first-child:hover {
            background-color: green;
            color: #fff;
        }

        .btn:last-child:hover {
            background-color: orange;
            color: #fff;
        }
    </style>
</head>
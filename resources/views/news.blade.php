<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            color: #333;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        h1 img {
            width: 80px;
            margin-right: 20px;
            vertical-align: middle;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .kotak {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            color: #555;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #777;
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1><img src="logo.png" alt="Logo"> Restu News</h1>
        <ul>
            @foreach($data['sheet1'] as $item)
            <li>
                <div class="kotak">
                    <h2>{{ $item['tittle'] }}</h2>
                    <p>{{ $item['deskripsi'] }}</p>
                    <a href="{{ $item['link'] }}">Read more</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</body>
</html>

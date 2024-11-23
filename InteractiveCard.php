<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Card</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f3f4f7, #e1e1e1);
        }

        .card {
            width: 300px;
            height: 200px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }

        .card h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .card p {
            margin: 10px 0;
            color: #666;
        }

        .card button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card button:hover {
            background-color: #0056b3;
            transform: rotate(5deg) scale(1.1);
        }

        .card button:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-content">
            <h2>Interactive Card</h2>
            <p>Hover over the card or button to see the magic!</p>
            <button>Click Me</button>
        </div>
    </div>
</body>
</html>

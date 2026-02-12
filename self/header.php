<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSSE 5期生</title>
    <style>
        :root {
            --primary-blue: #1a73e8;
            --primary-dark: #0d47a1;
            --primary-light: #e3f2fd;
            --accent-blue: #2196f3;
            --text-dark: #1a1a2e;
            --text-light: #ffffff;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Helvetica Neue', Arial, 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark) 100%);
            padding: 0 40px;
            box-shadow: 0 4px 20px rgba(26, 115, 232, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-light);
            text-decoration: none;
            letter-spacing: 2px;
        }
        .logo span {
            color: #90caf9;
        }
        .nav {
            display: flex;
            gap: 32px;
        }
        .nav a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .nav a:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .nav a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        main {
            flex: 1;
            padding: 40px 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <a href="home.php" class="logo">POSSE <span>5th</span></a>
            <nav class="nav">
                <a href="home.php" class="active">メンバー</a>
                <a href="#">活動紹介</a>
                <a href="#">お問い合わせ</a>
            </nav>
        </div>
    </header>
    <main>

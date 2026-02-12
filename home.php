<?php
require_once __DIR__ . "/self/header.php";
//データ直置き
require_once __DIR__ . "/member_data.php";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メンバー紹介 | POSSE 5期生</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Helvetica Neue', Arial, 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif;
            background-color: #f5f5f5;
            padding: 40px 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 2rem;
        }
        .member-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .member-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .member-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        .member-img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            background-color: #e0e0e0;
        }
        .member-info {
            padding: 20px;
            text-align: center;
        }
        .member-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }
        .member-generation {
            font-size: 0.9rem;
            color: #666;
            background: #f0f0f0;
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <h1>メンバー紹介</h1>
    
    <div class="member-container">
        <?php foreach ($member as $id => $data): ?>
            <a href="<?php echo htmlspecialchars($data['link']); ?>" class="member-card">
                <img src="./img/<?php echo htmlspecialchars($data['img']); ?>" alt="<?php echo htmlspecialchars($data['name']); ?>" class="member-img">
                <div class="member-info">
                    <p class="member-name"><?php echo htmlspecialchars($data['name']); ?></p>
                    <span class="member-generation"><?php echo htmlspecialchars($data['generation']); ?>期生</span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

<?php
require_once __DIR__ . "/self/footer.php";
?>
</body>
</html>
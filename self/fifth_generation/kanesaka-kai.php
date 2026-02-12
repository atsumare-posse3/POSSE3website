<?php
require_once __DIR__ . "../header.php";
echo "ここを編集";
require_once __DIR__ . "../footer.php";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kai Kanesaka | Portfolio</title>
    <style>
        /* --- デザイン（CSS） --- */
        :root {
            --primary-color: #2c3e50;
            /* 落ち着いた紺色 */
            --accent-color: #27ae60;
            /* パーマカルチャーを意識した緑 */
            --bg-color: #f4f7f6;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            background-color: var(--bg-color);
            color: #333;
            line-height: 1.6;
        }

        header {
            background: var(--primary-color);
            color: white;
            padding: 4rem 1rem;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: -30px auto 40px;
            padding: 0 20px;
        }

        section {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }

        h2 {
            color: var(--primary-color);
            border-left: 5px solid var(--accent-color);
            padding-left: 15px;
        }

        .tag-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag {
            background: var(--accent-color);
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .profile-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 600px) {
            .profile-info {
                grid-template-columns: 1fr;
            }
        }

        footer {
            text-align: center;
            padding: 40px;
            color: #888;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <header>
        <h1>KAI KANESAKA</h1>
        <p>POSSE Tech Bureau Chief / Student / Visionary</p>
    </header>

    <div class="container">
        <section>
            <h2>About Me</h2>
            <div class="profile-info">
                <div>
                    <p><strong>University:</strong> 明治大学 情コミ 2年</p>
                    <p><strong>Birthday:</strong> 2004年9月</p>
                </div>
                <div>
                    <p><strong>English:</strong> </p>
                    <p><strong>Hobby:</strong> り</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Interests</h2>
            <p>プログラミング（Docker/Laravel）と英語を武器に、将来は<strong>パーマカルチャー</strong>を取り入れた持続可能な暮らしを目指しています。</p>
        </section>

        <section>
            <h2>Future Vision</h2>
            <blockquote style="font-style: italic; border-left: 4px solid #ccc; padding-left: 15px;">
                "35歳までにFIREし、田舎でパーマカルチャーを実践しながら、カフェやバーを経営する。"
            </blockquote>
        </section>
    </div>

    <footer>
        <p>&copy; 2026 Kai Kanesaka. Built with HTML/CSS.</p>
    </footer>

</body>

</html>
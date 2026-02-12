<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSSE 5期生</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1a73e8',
                        'primary-dark': '#0d47a1',
                        'primary-light': '#e3f2fd',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col font-sans p-0 m-0">
    <header class="bg-gradient-to-br from-primary to-primary-dark shadow-lg shadow-blue-500/30 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center h-[70px]">
            <a href="home.php" class="text-2xl font-bold text-white tracking-wider no-underline">POSSE <span class="text-blue-300">5th</span></a>
            <nav class="flex gap-8">
                <a href="home.php" class="text-white no-underline text-sm font-medium px-4 py-2 rounded-lg bg-white/20 hover:bg-white/15 hover:-translate-y-0.5 transition-all">メンバー</a>
                <a href="#" class="text-white no-underline text-sm font-medium px-4 py-2 rounded-lg hover:bg-white/15 hover:-translate-y-0.5 transition-all">活動紹介</a>
                <a href="#" class="text-white no-underline text-sm font-medium px-4 py-2 rounded-lg hover:bg-white/15 hover:-translate-y-0.5 transition-all">お問い合わせ</a>
            </nav>
        </div>
    </header>
    <main class="flex-1 py-10 px-5">

<?php
require_once __DIR__ . "/../header.php";
?>

<div class="max-w-3xl mx-auto">
    <!-- プロフィールヘッダー -->
    <div class="text-center mb-10">
        <img src="../../img/yokoyama-taiki.jpg" alt="横山大起" class="w-40 h-40 rounded-full object-cover mx-auto mb-4 border-4 border-blue-100">
        <h1 class="text-3xl font-bold text-slate-800">横山大起</h1>
        <p class="text-primary mt-2">5.0期生</p>
    </div>

    <!-- 基本情報 -->
    <section class="mb-8">
        <h2 class="text-xl font-bold text-slate-800 border-b-2 border-primary pb-2 mb-4">基本情報</h2>
        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-slate-50 p-4 rounded-lg">
                <dt class="text-sm text-slate-500">名前</dt>
                <dd class="text-slate-800 font-medium">横山大起（よこやま たいき）</dd>
            </div>
            <div class="bg-slate-50 p-4 rounded-lg">
                <dt class="text-sm text-slate-500">大学</dt>
                <dd class="text-slate-800 font-medium">〇〇大学</dd>
            </div>
            <div class="bg-slate-50 p-4 rounded-lg">
                <dt class="text-sm text-slate-500">学部・学科</dt>
                <dd class="text-slate-800 font-medium">〇〇学部 〇〇学科</dd>
            </div>
            <div class="bg-slate-50 p-4 rounded-lg">
                <dt class="text-sm text-slate-500">趣味</dt>
                <dd class="text-slate-800 font-medium">〇〇</dd>
            </div>
        </dl>
    </section>

    <!-- 自己紹介 -->
    <section class="mb-8">
        <h2 class="text-xl font-bold text-slate-800 border-b-2 border-primary pb-2 mb-4">自己紹介</h2>
        <div class="bg-slate-50 p-6 rounded-lg">
            <p class="text-slate-700 leading-relaxed">
                ここに自己紹介文を書いてください。POSSEに入った理由や、今後の目標などを記載しましょう。
            </p>
        </div>
    </section>

    <!-- スキル -->
    <section class="mb-8">
        <h2 class="text-xl font-bold text-slate-800 border-b-2 border-primary pb-2 mb-4">スキル・学習中の技術</h2>
        <div class="flex flex-wrap gap-2">
            <span class="bg-blue-100 text-primary px-4 py-2 rounded-full text-sm">HTML</span>
            <span class="bg-blue-100 text-primary px-4 py-2 rounded-full text-sm">CSS</span>
            <span class="bg-blue-100 text-primary px-4 py-2 rounded-full text-sm">JavaScript</span>
            <span class="bg-blue-100 text-primary px-4 py-2 rounded-full text-sm">PHP</span>
        </div>
    </section>

    <!-- SNSリンク -->
    <section class="mb-10">
        <h2 class="text-xl font-bold text-slate-800 border-b-2 border-primary pb-2 mb-4">SNS</h2>
        <div class="flex gap-4">
            <a href="#" class="text-slate-600 hover:text-primary transition-colors">GitHub</a>
            <a href="#" class="text-slate-600 hover:text-primary transition-colors">Twitter</a>
        </div>
    </section>

    <!-- 戻るリンク -->
    <div class="text-center border-t border-slate-200 pt-8">
        <a href="../../home.php" class="text-primary hover:underline">← メンバー一覧に戻る</a>
    </div>
</div>

<?php
require_once __DIR__ . "/../footer.php";
?>

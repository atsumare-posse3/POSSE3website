<?php
require_once __DIR__ . "/self/header.php";
//データ直置き
require_once __DIR__ . "/member_data.php";
?>
<h1 class="text-3xl font-bold text-center text-slate-800 mb-10">メンバー紹介</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-6xl mx-auto">
    <?php foreach ($member as $id => $data): ?>
        <a href="<?php echo htmlspecialchars($data['link']); ?>" class="block bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl hover:shadow-blue-500/20 hover:-translate-y-1 transition-all duration-300 no-underline">
            <img src="./img/<?php echo htmlspecialchars($data['img']); ?>" alt="<?php echo htmlspecialchars($data['name']); ?>" class="w-full h-72 object-cover bg-blue-50">
            <div class="p-5 text-center">
                <p class="text-xl font-bold text-slate-800 mb-2"><?php echo htmlspecialchars($data['name']); ?></p>
                <span class="text-sm text-primary bg-primary-light px-3 py-1 rounded-full font-medium"><?php echo htmlspecialchars($data['generation']); ?>期生</span>
            </div>
        </a>
    <?php endforeach; ?>
</div>


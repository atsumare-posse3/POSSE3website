<?php
require_once __DIR__ . "/self/header.php";
//データ直置き
require_once __DIR__ . "/member_data.php";
?>

<style>
    .page-title {
        text-align: center;
        margin-bottom: 40px;
        color: var(--text-dark);
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
        box-shadow: 0 8px 24px rgba(26, 115, 232, 0.2);
    }
    .member-img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        background-color: #e3f2fd;
    }
    .member-info {
        padding: 20px;
        text-align: center;
    }
    .member-name {
        font-size: 1.25rem;
        font-weight: bold;
        color: var(--text-dark);
        margin-bottom: 8px;
    }
    .member-generation {
        font-size: 0.9rem;
        color: #1a73e8;
        background: #e3f2fd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 20px;
        font-weight: 500;
    }
</style>

<h1 class="page-title">メンバー紹介</h1>

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
<?php
/**
 * シンプルなルーター
 * 
 * ルート:aaa
 * - /self/{期}/{名前} : 自己紹介ページ
 */

// リクエストURIを取得（クエリストリングを除去）
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ベースパスを除去（サブディレクトリで動作する場合用）
$basePath = dirname($_SERVER['SCRIPT_NAME']);
if ($basePath !== '/' && $basePath !== '\\') {
    $requestUri = substr($requestUri, strlen($basePath));
}

// 先頭のスラッシュを正規化
$requestUri = '/' . ltrim($requestUri, '/');

// ルーティング
if($requestUri === '/' || $requestUri === '/index.php') {
    // ルートページ
    include __DIR__ . '/home.php';
    
} else if(preg_match('#^/self/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)$#', $requestUri, $matches)) {
    // /self/{期}/{名前} - 自己紹介ページ
    $generation = $matches[1];
    $name = $matches[2];
    
    // 自己紹介ページを表示
    include __DIR__ . '/self/header.php';
    
    // 各メンバーの自己紹介ファイルがあれば読み込む
    $memberFile = __DIR__ . '/self/' . $generation . '/' . $name . '.php';
    if (file_exists($memberFile)) {
        include $memberFile;
    } else {
        echo '<div class="error">';
        echo '<h1>404 Not Found</h1>';
        echo '<p>メンバー「' . htmlspecialchars($generation, ENT_QUOTES, 'UTF-8') . '/' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '」は見つかりませんでした。</p>';
        echo '</div>';
    }
    
    include __DIR__ . '/self/footer.php';
    
} else {
    // 404エラーページ
    include __DIR__ . '/404.php';
}
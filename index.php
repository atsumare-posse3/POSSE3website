<?php
/**
 * シンプルなルーター
 * 
 * ルート:
 * - /self/{id} : 自己紹介ページ
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
if (preg_match('#^/self/([a-zA-Z0-9_-]+)$#', $requestUri, $matches)) {
    // /self/{id} - 自己紹介ページ
    $id = $matches[1];
    
    // 自己紹介ページを表示
    include __DIR__ . '/self/header.php';
    
    // 各メンバーの自己紹介ファイルがあれば読み込む
    $memberFile = __DIR__ . '/self/members/' . $id . '.php';
    if (file_exists($memberFile)) {
        include $memberFile;
    } else {
        echo '<div class="error">';
        echo '<h1>404 Not Found</h1>';
        echo '<p>メンバー「' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . '」は見つかりませんでした。</p>';
        echo '</div>';
    }
    
    include __DIR__ . '/self/footer.php';
    
} elseif ($requestUri === '/' || $requestUri === '/index.php') {
    // トップページ（将来用）
    echo '<!DOCTYPE html>';
    echo '<html lang="ja">';
    echo '<head><meta charset="UTF-8"><title>POSSE3 Website</title></head>';
    echo '<body>';
    echo '<h1>Welcome to POSSE3 Website</h1>';
    echo '<p><a href="self/example">自己紹介サンプル</a></p>';
    echo '</body>';
    echo '</html>';
    
} else {
    // 404 Not Found
    http_response_code(404);
    echo '<!DOCTYPE html>';
    echo '<html lang="ja">';
    echo '<head><meta charset="UTF-8"><title>404 Not Found</title></head>';
    echo '<body>';
    echo '<h1>404 Not Found</h1>';
    echo '<p>ページが見つかりませんでした。</p>';
    echo '</body>';
    echo '</html>';
}

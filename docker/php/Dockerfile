# 1. ベースとなるイメージ（PHP 8.2 の FPM版）
FROM php:8.2-fpm

# 2. 必要なライブラリやツールをインストール
# ここでは、PHPでよく使う拡張機能（pdo_mysqlなど）を追加してます
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip && rm -rf /var/lib/apt/lists/*

# 3. PHPの拡張機能をインストール（将来DBを使うときのためにpdo_mysqlを入れておく）
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 4. 作業ディレクトリの設定
WORKDIR /var/www/html

# 5. 権限の設定（Windows/Mac混在環境でのトラブル防止）
RUN chmod -R 777 /var/www/html
# backend

##　セットアップ


①ローカルにファイルをダウンロードする
```
git clone https://github.com/ryotaro694/backend.git
```

②dockerを立ち上げる
```
cd app
docker-compose up -d --build
```

③Laravelセットアップ
```
docker-compose exec app bash
cd app
composer install
```

④.envファイルの作成
下記を書き換える
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=backend_app
DB_USERNAME=backend_app
DB_PASSWORD=backend_app
```

```
APP_URL=http://localhost:8000
```

⑤アプリケーションキーの作成

```php artisan key:generate```

⑥マイグレーション
```
php artisan migrate
```

##　A問題

下記をローカルパソコンから実行する

```
curl -X POST -H "Content-Type: application/json" -d '{"name":"apple", "price":"200"}' localhost:8000/api/item/create
```

##　B問題

アプリケーションを操作してください。




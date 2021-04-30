# ToDo-アプリ

## SetUp
1. gitをインストールする
    * Checkout as-is, commit Unix-style line endings : true
    * Enable symbolic links : true
1. xamppをインストールする
    * https://www.apachefriends.org/jp/download.html
    * インストールする
    * C:\xamppを書き込みできるようにする
1. composerをインストールする
    * https://getcomposer.org/download/
1. C:\xampp\htdocsにソースをコピーする
1. xamppシェルを起動する
1. アプリケーションディレクトリに移動する
    * cd htdocs\todo-app
1. パッケージのインストール
    * composer install
1. apacheのバーチャルホスト設定
    "C:\xampp\apache\conf\extra\httpd-vhosts.conf"に以下を追記する
    ```
    <VirtualHost *:80>
        DocumentRoot "C:\xampp\htdocs\todo-app\public"
        ServerName localhost
        <Directory "C:\xampp\htdocs\todo-app\public">
            AllowOverride All
            Options All
            Require all granted
        </Directory>
    </VirtualHost>
    ```
1. laravelの初期設定
    * `$ cp .env.example .env`
    * `$ php artisan key:generate`
1. 動作確認
    * xamppのApacheを起動する
    * http://localhost

# DB構築
1. mysqlのパスワードを設定する
    * `mysqladmin -u root password`
    * `New password: secret`
    * `Confirm new password: secret`
1. DBに接続する
    * `mysql -u root -p`
1. 新しいスキーマを作成する
    * `mysql -u root -p`
    * `CREATE DATABASE todo;`
1. DBをマイグレートする
    * `php artisan migrate`

# DB Table作成
1. Migrationファイル作成
    * `php artisan make:migration create_to_dos_table`
    * `php artisan make:migration create_to_do_details_table`
    * カラムを設定する
    * DBをマイグレートする
        `php artisan migrate`
1. Model作成
    * `php artisan make:model ToDo`
    * `php artisan make:model ToDoDetail`
    * リレーションを作成する
1. Seed作成
    * `php artisan make:factory ToDoFactory`
    * `php artisan make:factory ToDoDetailFactory`
    * ランダム値を設定する
    * Seedを作成する
        `php artisan db:seed`
1. データを確認する
    * DBに接続する
    * tinkerを起動する
        `php artisan tinker`
    * ToDoレコードを取得し、データを確認する
        `$todo = ToDo::find(1);`
        `$todo->toDoDetails;`

# Controller作成
1. ToDoControllerを作成する
    * `php artisan make:controller ToDoController --resource`
1. ToDoDetailControllerを作成する
    * `php artisan make:controller ToDoDetailController --resource`
1. ルーティングを設定する
1. ルーティングを確認する
    * `php artisan route:list`
1. Contollerに処理を記述する

# ToDo Store Request作成
1. Todo/StoreRequestを作成する
    * `php artisan make:request ToDo/StoreRequest`
1. Todo/StoreRequestにバリデーションルールを設定する
1. ToDoControllerのStoreアクションでStoreRequestを取得する
1. ToDoControllerのStoreアクションで登録処理を作成する
1. APIの動作確認用の拡張機能をインストールする(Chrome)
    * url(https://chrome.google.com/webstore/detail/talend-api-tester-free-ed/aejoelaoggembcahagimdiliamlcdmfm)
1. 動作確認する

# ToDo Update Request作成
1. Todo/StoreRequestを作成する
    * `php artisan make:request ToDo/UpdateRequest`
1. Todo/UpdateRequestにバリデーションルールを設定する
1. ToDoControllerのUpdateアクションでUpdateRequestを取得する
1. ToDoControllerのUpdateアクションで更新処理を作成する
1. 動作確認する

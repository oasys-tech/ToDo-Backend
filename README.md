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

# ToDo-アプリ

## SetUp
1. gitをインストールする
    * Checkout as-is, commit Unix-style line endings : true
    * Enable symbolic links : true
1. dockerをインストールする
1. dockerにCドライブを共有する
    * docker Settings -> Shared Drives
1. プロジェクト用ディレクトリを作成し、リポジトリをクローンする
    * `> mkdir C:\Users\{UserName}\develop\Todo-Repo\`
    * `> cd C:\Users\{UserName}\develop\Todo-Repo\`
    * `> git clone https://github.com/oasys-tech/ToDo-0 .`
1. サブモジュールをプルする
    * `> git submodule init`
    * `> git submodule update`
1. ygb-laradockディレクトリに移動する
    * `> cd laradock`
1. dockerイメージを作成する
    * ※管理者として起動したターミナルで実行すること
    * `> docker-compose up -d apache2 mysql workspace`
1. workspacesにログインする
    * `> docker-compose exec workspace bash`
1. laravelの初期設定
    * `$ cd /var/www`
    * `$ composer install` ※Tokenの入力が求められた場合は、コンソールに出力されたURLにアクセスしてGitHubのアクセストークンを生成する。
    * `$ cp ./deployment/env/.env.example .env`
    * `$ php artisan key:generate`
    * `$ php artisan jwt:secret`

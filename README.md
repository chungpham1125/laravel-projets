<h1>laravel-projets : usermanager<h1>
<h2>はじめに</h2>
<p>こんにちは、ファン　ゴック　キェン　チュンです。
この度は課題としてPHPフレームワークのlaravelを使ってdocker環境でユーザー登録・ログイン機能を持った簡単なアプリケーションを作成しました。</p>
<h2>設定のステップ</h2>
<h4>１．ソースコードをダウンロード</h4>
<p>上のプロジェクトをダウンロードかcloneしてください。</p>
<p>ダウンロードしたファイルを展開したら、それぞれのファイルとディレクトリが合わせて3つあります。
<ol>
<li>「usermanager」</li>
<li>「.env」</li>
<li>「laradock.zip」</li>
</ol>
<p>
<p>最初は「.env」というファイルを「usermanager」というディレクトリに移してください</p>
<p>次は「laradock.zip」という圧縮ファイルを展開する。</p>
<p>ディレクトリの構成は以下のようになります</p>
<p>
  laravel-projets/<br>
　└ laradock/<br>
　└ usermanager/
</p>

<h4>２．dockerのコンテナの立ち上げ</h4>
<p>「laradock」ディレクトリの中でコマンドプロンプトかPowershellなどのターミナルを開く。私はPowershellを使います。<br>
作業ディレクトリ(C:\プロジェクト名\laradock)に移動していないとdocker-composerコマンドが使えないので注意！
<br><code>
PS C:\laravel-projets\laradock>
</code>
</p>
<p>必要なdockerコンテナを立ち上げために「<i>docker-compose up -d nginx mysql workspace phpmyadmin</i>」というコマンドを実行する
<br><code>
PS C:\laravel-projets\laradock> docker-compose up -d nginx mysql workspace phpmyadmin
</code>
</p>
<h4>３．laravel vendor</h4>
<p>dockerコンテナを立ち上げた後に「usermanager」ディレクトリに切り替わる。<br>
usermanagerの中でまたターミナルを開いて、「<i>composer update</i>」というコマンドを実行する
<br><code>
PS C:\laravel-projets\usermanager> composer update
</code>
<p/>
<h4>４．Webページの表示</h4>
<p>ブラウザを開いて <i>http://localhost</i> にアクセスします。</p>

<h4>Laradock及びLaravelの導入にあたって参考にさせて頂いたサイト</h4>
<a href="https://qiita.com/sk888/items/4de708ce394179c61d8a">Windows10でLaradockを使ってLaravel 5.5環境を作る</a>

<h2>終わり</h2>
<p>ご覧いただき真にありがとうございます。</p>
<p>上記のプロジェクトを動かすガイドに沿っても動かなかったり、問題があったりすると、メールか電話でご連絡いただければご対応いたします（求人会社のみ、メールと電話番号は会社の募集案件に応募したメールの中に書いてあります。）</p>



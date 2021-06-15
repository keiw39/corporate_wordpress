# corporate_wordpress
- WordPressを用いた「行政書士事務所」のWebサイト構築
- TOP ＋ 下層10ページ<br>


※XDデザインカンプからのコーディング

## 実装したサイト
- [藤岡行政書士事務所](https://works05.k-watanabe39.com/)

BASIC認証をかけてます。

ID：works<br>
PW：works

### ポイント
- ローディングアニメーションの実装
- マウスカーソルのデザイン変更
- ページ遷移時のローディングアニメーションの実装
- ハンバーガーメニューのメニュー外をクリックしても閉じれるようにユーザビリティを意識した実装を行いました
- 各リンクhover時のアニメーション実装
- 各要素にフェードインアニメーションを実装
- パンくずリストは「Breadcrumb NavXT」を使用
- コンタクトフォームは「Contact Form 7」を使用

## 制作環境について
### Gulpを導入
Gulpを導入することによって下記を全て自動化しています。<br>
※Sass公式推奨の「Dart Sass」で記述しております
- Sassのコンパイル
- ブラウザシンク(ファイル編集後、ブラウザを更新→反映する自動リロードを行う)
- ベンダープレフィックスの付与
- 画像の自動圧縮
#### Gulpの起動
1. gulpfile.jsおよびpackage.jsonがある状態で下記コマンドを打つ。

※node_modulesおよびpackage-lock.jsonが生成される
```
$ npm i
```
2. gulp起動の下記コマンドを打つ。
```
$ npx gulp
```
3. gulpfile.jsに記述されたタスクが実行されます。

### Gulpを使用したWebP形式への変換
jpgやpngなどの画像を、Gulpを使用してWebPへ自動変換しています。

1. WebP変換の下記コマンドを打つ。
```
$ gulp webp
```
2. 変換終了→distフォルダへ保存される

picture要素を使用して、WebP対応・非対応のブラウザ環境ごとにWebPとそのほかの画像形式を出し分けている場合、<br>
変換が完了しても読み込まないので、ブラウザをリロードする。<br>
※WebP非対応のブラウザの場合、jpgやpngが優先的に読み込まれるので、その必要はない

## 経緯
[CODE MENTOR](https://codementor.arutega.jp/)様での課題を基に制作しました。

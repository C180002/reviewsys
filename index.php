<?php
$snapshotPath = "./snapshot/list.html";
$applicationPath = "./pages/list.php";
?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>小テスト課題</title>
	<link rel="stylesheet" href="./assets/css/index.css" />
	<link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body id="index">

	<header>
		<h1>小テスト課題</h1>
	</header>

	<main>
		<p>以下のリンクから表示されるsnapshot版のHTMLをもとにして、各小テストの課題の指示通りのアプリケーションを作成してください。アプリケーションページへのリンクをクリックすると各課題を実装した段階のページが表示されます。</p>
		<p>これらのリンクからsnapshot版または課題実装版を表示して確認しながら課題を進めてください。最終的には、snapshot版と同じように動くレストラン口コミサイトが出来上がるようになっています。</p>
		<p>この課題で完成させるアプリケーションは以下のようなものです：</p>
		<ol name="functions">
			<li>レストラン一覧画面の初期表示では、レストランの一覧は表示されない。</li>
			<li>レストラン一覧画面で地域を選択すると、その地域のレストランの一覧が表示される。</li>
			<li>レストラン一覧に表示されているレストランの「詳細」リンクをクリックすると、そのレストランの詳細ページに遷移する。</li>
			<li>レストランの詳細表示画面でレビューを投稿すると、画面が再表示され、追加したレビューがレビューリストの先頭に表示される。</li>
			<li>レビューでのレストランの５段階評価は、視覚的にわかりやすく星印とし、最低でひとつ星、最高で５つ星とする。「★」を評価の整数分だけ表示し、残りは「☆」で星５つ分で表示する。</li>
		</ol>
		<p>レストラン一覧画面およびレストラン詳細画面で表示される内容はsnapshot版のHTMLの表示と同じ内容とします。</p>
		<ol>
			<li>● スナップショットページとアプリケーションページへのリンク ●</li>
			<li><a href="<?= $snapshotPath ?>">スナップショットページ（snapshot版）</a></li>
			<li><a href="<?= $applicationPath ?>">アプリケーションページ（課題実装版）</a></li>
		</ol>
		<div id="tasks">
			<dl>
				<dt>課題-0：課題の準備</dt>
				<dd>
					<ol name="steps">
						<li>pagesディレクトリを新規に作成し、snapshotディレクトリのふたつのHTMLファイルをコピーする。</li>
						<li>コピーしたふたつのファイルをPHPファイルに変更し、一覧画面の［検索］ボタンをクリックして詳細画面に遷移することを確認する。</li>
					</ol>
				</dd>
			</dl>
			<dl>
				<dt>課題-1：レストラン一覧画面の表示</dt>
				<dd>
					<ol name="steps">
						<li>一覧画面の地域選択セレクトボックスに表示する地域のデータ要素とする配列を作成する。</li>
						<li>レストラン一覧に表示するレストランのひとつのデータを連想配列として用意し、その連想配列を要素とする配列を作成する。</li>
						<li>地域データの配列を利用して、セレクトボックスを表示する。</li>
						<li>レストランのデータの配列を利用して、レストラン一覧を表示する。</li>
						<li>［検索］ボタンがクリックされたときに、セレクトボックスに指定された地域のレストランを取得してレストラン一覧画面に表示する。レストランの一覧に表示するデータは連想配列各キーの値を表示する。</li>
					</ol>
				</dd>
			</dl>
			<dl>
				<dt>課題-2：レストラン一覧画面のクラス導入</dt>
				<dd>
					<ol name="steps">
						<li>レストランの連想配列を元にしてレストランクラスを作成する。</li>
						<li>レストランの連想配列を要素とする配列をレストランクラスを要素とする配列に変更する。</li>
						<li>地域データを元にして地域クラスを作成する。</li>
						<li>地域データを要素とする配列を地域クラスを要素とする配列に変更する。</li>
						<li>［検索］ボタンがクリックされたときに、セレクトボックスで指定された地域のレストランを取得してレストランの各属性を表示する。</li>
					</ol>
				</dd>
			</dl>
			<dl>
				<dt>課題-3：詳細画面の表示</dt>
				<dd>
					<ol name="steps">
						<li>一覧表示画面から送信されたリクエストを詳細表示画面で受け取る。</li>
						<li>レストランの情報は課題-2で作成したレストランクラスを利用して詳細を表示する。</li>
						<li>レストランのレビュークラスを作成する。</li>
						<li>レビュークラスを要素とするレビュー配列を作成する。</li>
						<li>レストランクラスの配列の要素のうち、受け取ったリクエストのレストランIDに該当するレストランクラスを利用して詳細を表示する。</li>
						<li>レビュー配列の要素のうち、受け取たリクエストのレストランIDに該当するレビュークラスをすべて表示する。</li>
					</ol>
				</dd>
			</dl>
			<dl>
				<dt>課題-4：SQLの作成</dt>
				<p class="emphasis">この課題は、最初に reviewsys/db/init_reviewdb.sqlを実行してください。</p>
				<p>また、課題のSQLは、各課題の指示文の最後に「（」と「）」内のファイル名で作成してください。作成したSQLのファイルはpageディレクトリ内に「sql」というディレクトリを作成し、そのディレクトリに保存してください。</p>
				<dd>
					<ol name="steps">
						<li>地域テーブルからすべてのレコードを抽出するSQLを作成する（task-41.sql）。</li>
						<li>レストランテーブルからすべてのレコードを抽出するSQLを作成する（task-42.sql）。</li>
						<li>レストランテーブルから指定された地域のレストランを抽出するSQLを作成する。ここでは地域は固定で「3」とする。（task-43.sql）</li>
						<li>レストランテーブルから指定されたレストランIDのレストランを抽出するSQLを作成する。ここではレストランIDは固定で「7」とする（task-44.sql）。</li>
						<li>レビューテーブルから指定されたレストランIDのレビューを抽出するSQLを作成する。ここで、レストランIDは固定で「7」とし、レビューテーブルのすべてのフィールドとレストランテーブルからレストラン名を抽出するものとする（task-45.sql）。</li>
					</ol>
				</dd>
			</dl>
			<dl>
				<dt>課題-5：PDOを利用してデータベースと連携する</dt>
				<dd>
					<ol name="steps">
						<li>PDOを利用してデータベースに接続する。</li>
						<li>地域テーブルのレコードを取得して、地域クラスのポブジェクトを生成して、地域配列とする（list.phpの修正）。</li>
						<li>レストランテーブルのすべてのレコードを取得して、レストランクラスのオブジェクトを生成し、レストラン配列とする（list.phpの修正）。</li>
						<li>レストランテーブルから指定された地域IDに一致するレストランを取得する（list.phpの修正）。</li>
						<li>レストランテーブルから指定されたレストランIDに一致するレストランを取得する（detail.php）。</li>
						<li>レビューテーブルからレストランIDに一致するレビューを取得する（detail.phpの修正）。</li>
						<li>レビューの［投稿］ボタンがクリックされると、入力されたレビュー内容をレビューテーブルに追加する（detail.phpの修正）。</li>
						<li>レビューテーブルから追加された順にレビューを取得して表示する（detail.phpの修正）。</li>
					</ol>
				</dd>
			</dl>
		</div>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>

</body>
</html>
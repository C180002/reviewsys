<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>レストラン詳細情報 - レストラン・レビュ・サイト</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/detail.css" />
</head>

<body id="detail">
	<header>
		<h1><a href="list.html">レストラン・レビュ・サイト</a></h1>
	</header>
	<main>
		<article id="description">
			<h2>レストラン詳細</h2>
			<table class="list">
				<tr>
					<td class="photo"><img width="110" alt="「レストラン さくら」の写真" src="../pages/img/restaurant_7.jpg" /></td>
					<td class="info">
						<dl>
							<dt>レストラン さくら</dt>
							<dd>四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。<br />旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。</dd>
						</dl>
					</td>
				</tr>
			</table>
		</article>
		<article id="reviews">
			<h2>レビュ一覧</h2>
			<dl>
				<dt>★★★★☆</dt>
				<dd>常連の者で、いつも夫婦で伺っています。席数が少ないので予約した方が安心ですが、その分落ち着いて食事できますよ。コースのメインは基本的にシェフにお任せ。来るたびに、新しい味との出会いを楽しめるお店です。（totsuka）</dd>
			</dl>
			<dl>
				<dt>★★★★★</dt>
				<dd>説明の通り、喧騒を外れた場所にひっそりとあるレストランでした。伊豆市には初めて来ましたが、本当に桜がきれいですね。何よりも空気がきれいで、いいリフレッシュになりました。（oie）</dd>
			</dl>
		</article>
		<article id="review">
			<h2>レビュを書き込む</h2>
			<form name="review_form" action="detail.html" method="post">
				<table class="review">
					<tr>
						<th>お名前</th>
						<td><input type="text" name="reviewer" /></td>
					</tr>
					<tr>
						<th>ポイント</th>
						<td>
							<input type="radio" name="point" value="1" id="1" />
							<label for="1">1</label>
							<input type="radio" name="point" value="2" id="2" />
							<label for="2">2</label>
							<input type="radio" name="point" value="3" id="3" checked />
							<label for="3">3</label>
							<input type="radio" name="point" value="4" id="4" />
							<label for="4">4</label>
							<input type="radio" name="point" value="5" id="5" />
							<label for="5">5</label>
						</td>
					</tr>
					<tr>
						<th>レビュ</th>
						<td><textarea name="comment"></textarea></td>
					</tr>
				</table>
				<input type="submit" value="投稿" />
				<input type="reset" value="クリア" />
			</form>
		</article>
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>

</html>
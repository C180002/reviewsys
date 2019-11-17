<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>
      レストラン一覧 - レストラン・レビュ・サイト
    </title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/list.css" />
  </head>
<?php
    $area = array('福岡', '神戸', '伊豆');
    
    $restaurant_list = array();
    
    $restaurant = array('id' => '1', 'name' => 'Wine Bar ENOTECA', 'area_id' => '3', 'summary' => '常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。');

    $restaurant_list[] = $restaurant;
    
    $restaurant = array('id' => '2', 'name' => 'スペイン料理 ポルファボール！', 'area_id' => '2', 'summary' => '味が自慢。スペイン現地で学んだシェフが出す味は本物です。');

    $restaurant_list[] = $restaurant;
    
    $restaurant = array('id' => '3', 'name' => 'パス・パスタ', 'area_id' => '3', 'summary' => '本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。');

    $restaurant_list[] = $restaurant;
    
    $restaurant = array('id' => '4', 'name' => 'レストラン「有閑」', 'area_id' => '2', 'summary' => '広い店内で、お昼の優雅なひと時を過ごしませんか？');

    $restaurant_list[] = $restaurant;
    
    $restaurant = array('id' => '5', 'name' => 'ビストロ「ルーヴル」', 'area_id' => '3', 'summary' => '高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか。');

    $restaurant_list[] = $restaurant;
    
    $restaurant = array('id' => '6', 'name' => '海沿いのレストラン La Mer', 'area_id' => '1', 'summary' => '海が見える、海沿いのレストランです。');

    $restaurant_list[] = $restaurant;
    
    $restaurant = array('id' => '7', 'name' => 'レストラン さくら', 'area_id' => '3', 'summary' => '四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。\n旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。');

    $restaurant_list[] = $restaurant;

    $area_id_param = '';

    if (isset($_GET['area']))
    {
        $area_id_param = $_GET['area'];
    }
?>
  <body id="list">
    <header>
      <h1>
        <a href="list.php">
          レストラン・レビュ・サイト
        </a>
      </h1>
    </header>
    <main>
      <div class="clearfix">
        <h2>
          レストラン一覧
        </h2>
        <form action="list.php" name="search_form" method="get">
          <!-- 地域選択リストボックス -->
          <select name="area">
            <option value="0">
               -- 地域を選んで下さい -- 
            </option>
<?php
    for ($i = 0; $i < count($area); $i++)
    {
?>
            <option value="<?= $i + 1 ?>" <?= $area_id_param == $i + 1 ? 'selected' : '' ?>>
                <?= $area[$i] ?>
            </option>
<?php
    }
?>
          </select>
          <input type="submit" value="検索" />
        </form>
      </div><!-- /.clearfix -->
      <table class="list">
<?php
    foreach ($restaurant_list as $rstrnt)
    {
        $id = $rstrnt["id"];
        $name = $rstrnt["name"];
        $area_id = $rstrnt["area_id"];
        $summary = $rstrnt["summary"];

        if ($area_id_param !== '')
        {
            if ($area_id_param != $area_id)
            {
                continue;
            }
        }
?>
        <tr>
          <td class="photo"><img width="110" alt="「<?= $name ?>」の写真" src="../pages/img/restaurant_<?= $id ?>.jpg" />
          </td>
          <td class="info">
            <dl>
              <dt>
                <?= $name ?>
              </dt>
              <dd>
                <?= $summary ?>
              </dd>
            </dl>
          </td>
          <td class="detail"><a href="detail.html?id=<?= $id ?>">詳細</a></td>
        </tr>
<?php
    }
?>
      </table>
    </main>
    <footer>
      <div id="copyright">
        (C) 2019 The Web System Development Course
      </div>
    </footer>
  </body>
</html>

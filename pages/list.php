<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>
      レストラン一覧 - レストラン・レビュー・サイト
    </title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/list.css" />
  </head>
<?php
    require_once('../class/Area.php');
    require_once('../class/Restaurant.php');
    require_once('../class/DataAcquisition.php');

    session_start();

    $da = new DataAcquisition();
    
    $area_a = $da->selectArea();

    $restaurant_a = array();

    if (isset($_SESSION['RestaurantList']))
    {
        $restaurant_a = $_SESSION['RestaurantList'];
    }
    else
    {
        $restaurant_a = $da->selectRestaurant();

        $_SESSION['RestaurantList'] = $restaurant_a;
    }

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
          レストラン・レビュー・サイト
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
    foreach ($area_a as $a)
    {
        $area_id = $a->getId();
?>
            <option value="<?= $area_id ?>" <?= $area_id == $area_id_param ? 'selected' : '' ?>>
                <?= $a->getName() ?>
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
    foreach ($restaurant_a as $rstn)
    {
        $id = $rstn->getId();
        $area_id = $rstn->getAreaId();
        $name = $rstn->getName();
        $image = $rstn->getImage();
        $summary = $rstn->getSummary();

        if ($area_id_param !== '')
        {
            if ($area_id_param != '0')
            {
                if ($area_id_param != $area_id)
                {
                    continue;
                }
            }
        }
?>
        <tr>
          <td class="photo"><img width="110" alt="「<?= $name ?>」の写真" src="../pages/img/<?= $image ?>" />
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
          <td class="detail">
            <a href="detail.php?id=<?= $id ?>">
              詳細
            </a>
          </td>
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

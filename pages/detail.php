<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>
      レストラン詳細情報 - レストラン・レビュー・サイト
    </title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/detail.css" />
  </head>
<?php
    require_once('../class/Restaurant.php');
    require_once('../class/Review.php');
    require_once('../class/DataAcquisition.php');

    session_start();

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        $_SESSION['id'] = $id;
    }
    elseif (isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }

    $restaurant_list = $_SESSION['restaurant_list'];

    $restaurant = null;

    foreach ($restaurant_list as $rstn)
    {
        if ($rstn->getId() == $id)
        {
            $restaurant = $rstn;
        }
    }
    
    $da = new DataAcquisition();

    $review_list = $da->acquireReview();

    $this_review_list = array();

    foreach ($review_list as $rvw)
    {
        if ($restaurant->getId() == $rvw->getRestaurantId())
        {
            $this_review_list[] = $rvw;
        }
    }
?>
  <body id="detail">
    <header>
      <h1>
        <a href="list.html">
          レストラン・レビュー・サイト
        </a>
      </h1>
    </header>
    <main>
      <article id="description">
        <h2>
          レストラン詳細
        </h2>
        <table class="list">
          <tr>
            <td class="photo">
              <img width="110" alt="「<?= $restaurant->getName() ?>」の写真" src="../pages/img/<?= $restaurant->getImage() ?>" />
            </td>
            <td class="info">
              <dl>
                <dt>
                  <?= $restaurant->getName() ?>
                </dt>
                <dd>
                  <?= $restaurant->getSummary() ?>
                </dd>
              </dl>
            </td>
          </tr>
        </table>
      </article>
<?php
    if (!empty($this_review_list))
    {
?>
      <article id="reviews">
        <h2>
          レビュー一覧
        </h2>
<?php
        $initial_star = '☆☆☆☆☆';

        foreach ($this_review_list as $tr)
        {
            $star = preg_replace('/☆/', '★', $initial_star, $tr->getPoint());
?>
        <dl>
          <dt>
            <?= $star ?>
          </dt>
          <dd>
            <?= $tr->getSentence() ?>
            <br>
            (<?= $tr->getName() ?>)
          </dd>
        </dl>
<?php
        }
?>
      </article>
<?php
    }
?>
      <article id="review">
        <h2>
          レビューを書き込む
        </h2>
        <form name="review_form" action="detail.php" method="post">
          <table class="review">
            <tr>
              <th>
                お名前
              </th>
              <td>
                <input type="text" name="reviewer" />
              </td>
            </tr>
            <tr>
              <th>
                ポイント
              </th>
              <td>
                <input type="radio" name="point" value="1" id="1" />
                <label for="1">
                  1
                </label>
                <input type="radio" name="point" value="2" id="2" />
                <label for="2">
                  2
                </label>
                <input type="radio" name="point" value="3" id="3" checked />
                <label for="3">
                  3
                </label>
                <input type="radio" name="point" value="4" id="4" />
                <label for="4">
                  4
                </label>
                <input type="radio" name="point" value="5" id="5" />
                <label for="5">
                  5
                </label>
              </td>
            </tr>
            <tr>
              <th>
                レビュー
              </th>
              <td>
                <textarea name="comment">

                </textarea>
              </td>
            </tr>
          </table>
          <input type="submit" value="投稿" />
          <input type="reset" value="クリアー" />
        </form>
      </article>
    </main>
    <footer>
      <div id="copyright">
        (C) 2019 The Web System Development Course
      </div>
    </footer>
  </body>
</html>

<?php
    require_once('Area.php');
    require_once('Restaurant.php');
    require_once('Review.php');

    class DataAcquisition
    {
        public function acquireArea()
        {
            $area_list = array();

            $area_list[] = new Area('are00001', '福岡');
            $area_list[] = new Area('are00002', '神戸');
            $area_list[] = new Area('are00003', '伊豆');

            return $area_list;
        }
        
        public function acquireRestaurant()
        {
            $restaurant_list = array();
            
            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00001');
            $restaurant->setAreaId('are00003');
            $restaurant->setName('Wine Bar ENOTECA');
            $restaurant->setImage('restaurant_1.jpg');
            $restaurant->setSummary('常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。');

            $restaurant_list[] = $restaurant;

            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00002');
            $restaurant->setAreaId('are00002');
            $restaurant->setName('スペイン料理 ポルファボール！');
            $restaurant->setImage('restaurant_2.jpg');
            $restaurant->setSummary('味が自慢。スペイン現地で学んだシェフが出す味は本物です。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00003');
            $restaurant->setAreaId('are00003');
            $restaurant->setName('パス・パスタ');
            $restaurant->setImage('restaurant_3.jpg');
            $restaurant->setSummary('本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00004');
            $restaurant->setAreaId('are00002');
            $restaurant->setName('レストラン「有閑」');
            $restaurant->setImage('restaurant_4.jpg');
            $restaurant->setSummary('広い店内で、お昼の優雅なひと時を過ごしませんか？');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00005');
            $restaurant->setAreaId('are00003');
            $restaurant->setName('ビストロ「ルーヴル」');
            $restaurant->setImage('restaurant_5.jpg');
            $restaurant->setSummary('高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00006');
            $restaurant->setAreaId('are00001');
            $restaurant->setName('海沿いのレストラン La Mer');
            $restaurant->setImage('restaurant_6.jpg');
            $restaurant->setSummary('海が見える、海沿いのレストランです。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            $restaurant->setId('rst00007');
            $restaurant->setAreaId('are00003');
            $restaurant->setName('レストラン さくら');
            $restaurant->setImage('restaurant_7.jpg');
            $restaurant->setSummary('四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。\n旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。');

            $restaurant_list[] = $restaurant;

            return $restaurant_list;
        }
        
        public function acquireReview()
        {
            $review_list = array();
            
            $review = new Review();
            
            $review->setId('rvw00001');
            $review->setRestaurantId('rst00007');
            $review->setName('totsuka');
            $review->setPoint(4);
            $review->setSentence('常連の者で、いつも夫婦で伺っています。席数が少ないので予約した方が安心ですが、その分落ち着いて食事できますよ。コースのメインは基本的にシェフにお任せ。来るたびに、新しい味との出会いを楽しめるお店です。');

            $review_list[] = $review;

            $review = new Review();
            
            $review->setId('rvw00002');
            $review->setRestaurantId('rst00007');
            $review->setName('oie');
            $review->setPoint(5);
            $review->setSentence('説明の通り、喧騒を外れた場所にひっそりとあるレストランでした。伊豆市には初めて来ましたが、本当に桜がきれいですね。何よりも空気がきれいで、いいリフレッシュになりました。');

            $review_list[] = $review;
            
            $review = new Review();
            
            $review->setId('rvw00003');
            $review->setRestaurantId('rst00003');
            $review->setName('パパス');
            $review->setPoint(5);
            $review->setSentence('パス・パスタのレビュー１');

            $review_list[] = $review;
            
            $review = new Review();
            
            $review->setId('rvw00004');
            $review->setRestaurantId('rst00003');
            $review->setName('有閑');
            $review->setPoint(3);
            $review->setSentence('パス・パスタのレビュー２');

            $review_list[] = $review;
            
            $review = new Review();
            
            $review->setId('rvw00005');
            $review->setRestaurantId('rst00003');
            $review->setName('ルーヴル');
            $review->setPoint(1);
            $review->setSentence('パス・パスタのレビュー３');

            $review_list[] = $review;

            return $review_list;
        }
    }

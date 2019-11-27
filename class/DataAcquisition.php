<?php
    require_once('Area.php');
    require_once('Restaurant.php');

    class DataAcquisition
    {
        public function acquireArea()
        {
            $area = array();

            $area[] = new Area('福岡');
            $area[] = new Area('神戸');
            $area[] = new Area('伊豆');

            return $area;
        }
        
        public function acquireRestaurant()
        {
            $restaurant_list = array();
            
            $restaurant = new Restaurant();
            
            // $restaurant->setId('1');
            $restaurant->setName('Wine Bar ENOTECA');
            $restaurant->setAreaId('3');
            $restaurant->setSummary('常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。');

            $restaurant_list[] = $restaurant;

            $restaurant = new Restaurant();
            
            // $restaurant->setId('2');
            $restaurant->setName('スペイン料理 ポルファボール！');
            $restaurant->setAreaId('2');
            $restaurant->setSummary('味が自慢。スペイン現地で学んだシェフが出す味は本物です。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            // $restaurant->setId('3');
            $restaurant->setName('パス・パスタ');
            $restaurant->setAreaId('3');
            $restaurant->setSummary('本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            // $restaurant->setId('4');
            $restaurant->setName('レストラン「有閑」');
            $restaurant->setAreaId('2');
            $restaurant->setSummary('広い店内で、お昼の優雅なひと時を過ごしませんか？');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            // $restaurant->setId('5');
            $restaurant->setName('ビストロ「ルーヴル」');
            $restaurant->setAreaId('3');
            $restaurant->setSummary('高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            // $restaurant->setId('6');
            $restaurant->setName('海沿いのレストラン La Mer');
            $restaurant->setAreaId('1');
            $restaurant->setSummary('海が見える、海沿いのレストランです。');

            $restaurant_list[] = $restaurant;
            
            $restaurant = new Restaurant();
            
            // $restaurant->setId('7');
            $restaurant->setName('レストラン さくら');
            $restaurant->setAreaId('3');
            $restaurant->setSummary('四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。\n旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。');

            $restaurant_list[] = $restaurant;

            return $restaurant_list;
        }
    }

<?php
    require_once('Area.php');
    require_once('Restaurant.php');
    require_once('Review.php');
    require_once('DatabaseProcess.php');

    class DataAcquisition
    {
        public function insertReview($review_a)
        {
            // データベース処理インスタンス生成
            $dp = new DatabaseProcess();

            // データベース接続
            $pdo = $dp->connectDatabase();
            
            // クエリー組成
            $query = 
                    "INSERT INTO ".
                    "  reviewdb.reviews ".
                    "  (".
                    "    `restaurant`, ".
                    "    `reviewer`, ".
                    "    `rating`, ".
                    "    `comment`".
                    "  ) ".
                    "  VALUES ".
                    "  (".
                    "    :RestaurantId, ".
                    "    :Name, ".
                    "    :Point, ".
                    "    :Sentence".
                    "  ) ".
                    ";";

            // クエリー実行準備
            $pdo_stmn = $pdo->prepare($query);
            
            /* プレースホルダーに設定するパラメーターの連想配列を設定 */
            $param_a = [];

            $param_a[":RestaurantId"] = $review_a["RestaurantId"];
            $param_a[":Name"] = $review_a["Name"];
            $param_a[":Point"] = $review_a["Point"];
            $param_a[":Sentence"] = $review_a["Sentence"];
            
            // クエリー実行
            $pdo_stmn->execute($param_a);

            // データベース切断
            $dp->disconnectDatabase($pdo);
        }

        public function selectArea()
        {
            // データベース処理インスタンス生成
            $dp = new DatabaseProcess();

            // データベース接続
            $pdo = $dp->connectDatabase();
            
            // クエリー組成
            $query = 
                    "SELECT ".
                    "  * ".
                    "FROM ".
                    "  reviewdb.areas ".
                    ";";

            // クエリー実行準備
            $pdo_stmn = $pdo->prepare($query);
            
            // クエリー実行
            $pdo_stmn->execute();
            
            // 全ての結果行を含む配列を返戻
            $rs = $pdo_stmn->fetchAll();

            // データベース切断
            $dp->disconnectDatabase($pdo);

            $area_a = array();
            
            foreach ($rs as $r)
            {
                $id = $r["id"];
                $name = $r["name"];

                $area = new Area($id, $name);

                $area_a[] = $area;
            }

            return $area_a;
        }
        
        public function selectRestaurant()
        {
            // データベース処理インスタンス生成
            $dp = new DatabaseProcess();

            // データベース接続
            $pdo = $dp->connectDatabase();
            
            // クエリー組成
            $query = 
                    "SELECT ".
                    "  * ".
                    "FROM ".
                    "  reviewdb.restaurants ".
                    ";";

            // クエリー実行準備
            $pdo_stmn = $pdo->prepare($query);
            
            // クエリー実行
            $pdo_stmn->execute();
            
            // 全ての結果行を含む配列を返戻
            $rs = $pdo_stmn->fetchAll();

            // データベース切断
            $dp->disconnectDatabase($pdo);

            $rstn_a = array();

            foreach ($rs as $r)
            {
                $id = $r["id"];
                $area_id = $r["area"];
                $name = $r["name"];
                $image = $r["image"];
                $summary = $r["detail"];

                $rstn = new Restaurant();
                
                $rstn->setId($id);
                $rstn->setAreaId($area_id);
                $rstn->setName($name);
                $rstn->setImage($image);
                $rstn->setSummary($summary);

                $rstn_a[] = $rstn;
            }

            return $rstn_a;
        }
        
        public function selectReview()
        {
            // データベース処理インスタンス生成
            $dp = new DatabaseProcess();

            // データベース接続
            $pdo = $dp->connectDatabase();
            
            // クエリー組成
            $query = 
                    "SELECT ".
                    "  * ".
                    "FROM ".
                    "  reviewdb.reviews ".
                    ";";

            // クエリー実行準備
            $pdo_stmn = $pdo->prepare($query);
            
            // クエリー実行
            $pdo_stmn->execute();
            
            // 全ての結果行を含む配列を返戻
            $rs = $pdo_stmn->fetchAll();

            // データベース切断
            $dp->disconnectDatabase($pdo);

            $rvw_a = array();

            foreach ($rs as $r)
            {
                $id = $r["id"];
                $restaurant_id = $r["restaurant"];
                $name = $r["reviewer"];
                $point = $r["rating"];
                $sentence = $r["comment"];

                $rvw = new Review();
                
                $rvw->setId($id);
                $rvw->setRestaurantId($restaurant_id);
                $rvw->setName($name);
                $rvw->setPoint($point);
                $rvw->setSentence($sentence);

                $rvw_a[] = $rvw;
            }

            return $rvw_a;
        }
    }

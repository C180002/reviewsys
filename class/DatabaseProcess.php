<?php
    /**
     * 【データベース処理】
     */
    class DatabaseProcess
    {
        // データベース接続文字列：データベースに接続するための汎用接続情報
        const DB_DSN = "mysql:host=localhost; dbname=reviewdb";
        // 接続先データベースのURL表記：DNSのURL表現
        const DB_URL = "mysql://localhost:3306/reviredb";
        // データベース接続ユーザー
        const DB_USER = "reviewdb_admin";
        // データベース接続文字列：データベースに接続するための汎用接続情報
        const DB_PASSWORD = "admin123";
        
        /**
         * 【データベース接続】
         * @return PDO
         *  データベース接続に成功：データベース接続オブジェクト
         *  データベース接続に失敗：null
         * @throw PDOException
         */
        function connectDatabase():PDO
        {
            $pdo = null;

            try
            {
                $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

                $pdo = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASSWORD, $options);

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
            }
            finally
            {
                return $pdo;
            }
        }
        
        /**
         * 【データベース切断】
         * @param PDO データベース接続オブジェクト
         */
        function disconnectDatabase(PDO $pdo):void
        {
            if (!is_null($pdo))
            {
                unset($pdo);
            }
        }
    }
?>
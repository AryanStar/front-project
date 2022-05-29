<?php

    session_start();

    class Authentication{
        static function login( $uid ){        
            $_SESSION['uid'] = $uid;
        }
        static function check(){
            return isset( $_SESSION['uid'] );
        }
        static function uid(){
            return $_SESSION['uid'];
        }
        static function logout(){
            unset( $_SESSION['uid'] );
        }
    }

    class Authorization{
        static function checkRole($role) {
            if (! Authentication :: check())
            {
                return false;
            }
            $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
            $q = "SELECT * FROM users WHERE id = ? LIMIT 1";
            $result = $dbc -> query($q,Authentication :: uid());
            $row = $result -> fetchArray();
            $dbc -> close();
            if ($row['role'] == $role) {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    class User{
        
        static function isLiked($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
            $q = "SELECT * FROM likeproduct WHERE user_id = ? AND product_id = ? LIMIT 1";
            $result = $dbc -> query($q,Authentication :: uid(),$productID);
            $row = $result -> fetchArray();
            $dbc -> close();
            return count($row);


        }

        static function toggleLike($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $liked = User :: isLiked($productID);
            if ($liked) {
                $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
                $q = "DELETE FROM `likeproduct` WHERE user_id = ? AND product_id = ? LIMIT 1";
                $result = $dbc -> query($q,Authentication :: uid(),$productID);
                $dbc -> close();
            } else {
                $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
                $q = "INSERT INTO `likeproduct` (`id`, `user_id`, `product_id`) VALUES (NULL, ?, ?)";
                $result = $dbc -> query($q,Authentication :: uid(),$productID);
                $dbc -> close();
            }
        }

        static function isBookmarked($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
            $q = "SELECT * FROM bookmarkproduct WHERE user_id = ? AND product_id = ? LIMIT 1";
            $result = $dbc -> query($q,Authentication :: uid(),$productID);
            $row = $result -> fetchArray();
            $dbc -> close();
            return count($row);


        }

        static function toggleBookmark($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $liked = User :: isBookmarked($productID);
            if ($liked) {
                $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
                $q = "DELETE FROM `bookmarkproduct` WHERE user_id = ? AND product_id = ? LIMIT 1";
                $result = $dbc -> query($q,Authentication :: uid(),$productID);
                $dbc -> close();
            } else {
                $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
                $q = "INSERT INTO `bookmarkproduct` (`id`, `user_id`, `product_id`) VALUES (NULL, ?, ?)";
                $result = $dbc -> query($q,Authentication :: uid(),$productID);
                $dbc -> close();
            }
        }

        static function hasItem($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
            $q = "SELECT * FROM productbasket WHERE user_id = ? AND product_id = ? LIMIT 1";
            $result = $dbc -> query($q,Authentication :: uid(),$productID);
            $row = $result -> fetchArray();
            $dbc -> close();
            return count($row);
        }

        static function addItem($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
            $q = "INSERT INTO `productbasket` (`id`, `user_id`, `product_id`) VALUES (NULL, ?, ?)";
            $result = $dbc -> query($q,Authentication :: uid(),$productID);
            $dbc -> close();
            return true;
        }
        
        static function removeItem($productID) {
            if (! Authentication :: check())
            {
                return false;
            }
            $dbc = new DB(dbHost, dbUser, dbPassword, dbName);
            $q = "DELETE FROM `productbasket` WHERE user_id = ? AND product_id = ? LIMIT 1";
            $result = $dbc -> query($q,Authentication :: uid(),$productID);
            $dbc -> close();
            return true;
        }
        
    }


?>
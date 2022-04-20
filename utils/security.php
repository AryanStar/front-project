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

?>
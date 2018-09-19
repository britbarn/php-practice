<?php

    /**
     *
     */
    class Connection
    {
        //accessible globally without needing to make an instance. Good for just doing some logic
        //example: connection::make();
        public static  function make($config) {
            try {

                // return new PDO('mysql:host=127.0.0.1;dbname=mytodos','root','');

                //make connection dynamic
                return new PDO(
                    $config['connection'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']

                );

            } catch (PDOException $e) {

                die($e->getMessage());
            }
        }
    }

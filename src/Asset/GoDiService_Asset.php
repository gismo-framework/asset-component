<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 11.08.16
 * Time: 01:01
 */


    namespace Gismo\Component\Asset;



    trait GoDiService_Asset {


        public function __di_init_service_asset () {
            $this->route->add("/asset/{}", function (...$params) {

            });
        }

    }
<?php

class HomepageUtilities {

    public function agnostify_url($url){
        $url = str_replace('http://', '//', $url);
        return str_replace('https://', '//', $url);
    }

}

$UW->Homepage_Utilities = new HomepageUtilities();

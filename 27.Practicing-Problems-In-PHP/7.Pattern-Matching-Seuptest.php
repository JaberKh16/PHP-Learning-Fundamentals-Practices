<?php
    $pattern = "/^Can I get roaming in ([a-zA-Z]+)\??$/i";
    $pattern1 = "/^Can I get roaming in ([a-zA-Z]+) Country\??$/i";
    $pattern2 = "/^আমি কি ([ঀ-৾]+) দেশে রোমিং পাবো\??$/i";
    if (preg_match($pattern, $api_query) === 1 || preg_match($pattern1, $api_query) === 1) {
        $api_query = "ROAMING COVERAGE";
    }
    else if(preg_match($pattern2, $api_query) === 1) {
        $api_query = "রোমিং নেটওয়ার্ক বিস্তৃতি";
    }
    
    $pattern = "/^What is the call rate for ([a-zA-Z]+) country\??$/i";
    $pattern1 = "/^What is the call rate for ([a-zA-Z]+)\??$/i";
    $pattern2 = "/^([ঀ-৾]+) দেশে আপনাদের কলরেট কত\??$/i";
    if (preg_match($pattern, $api_query) === 1 || preg_match($pattern1, $api_query) === 1){
        $api_query = "ROAMING TARIFF";    
    }
    else if(preg_match($pattern2, $api_query) === 1) {
        $api_query = "রোমিং ট্যারিফ";
    }
    
    $pattern = "/^What package do you have for ([a-zA-Z]+) country\??$/i";
    $pattern1 = "/^What package do you have for ([a-zA-Z]+)\??$/i";
    $pattern2 = "/^([ঀ-৾]+) দেশের জন্য আপনাদের রোমিং এর কি প্যাকেজ আছে\??$/i";
    $pattern3 = "/^([ঀ-৾]+)র জন্য আপনাদের রোমিং এর কি প্যাকেজ আছে\??$/i";
    if (preg_match($pattern, $api_query) === 1 || preg_match($pattern1, $api_query) === 1){
        $api_query = "ROAMING PACKAGE ACTIVATION";
    }
    else if(preg_match($pattern2, $api_query) === 1 || preg_match($pattern3, $api_query) === 1) {
        $api_query = "রোমিং প্যাকেজ একটিভেশন";
    }
    
    $pattern = "/^I have ([a-zA-Z]+) bank's credit card, can I activate International Roaming with it\??$/i";
    $pattern1 = "/^আমার ([ঀ-৾]+) ব্যাংক এর ক্রেডিট আছে। আমি কি এই কার্ড দিয়ে রোমিং চালু করতে পারবো\??$/i";
    $pattern2 = "/^আমার ([ঀ-৾]+) ব্যাংকের ক্রেডিট আছে। আমি কি এই কার্ড দিয়ে রোমিং চালু করতে পারবো\??$/i";
    if (preg_match($pattern, $api_query) === 1){
        $api_query = "ROAMING";
    }
    else if(preg_match($pattern1, $api_query) === 1 || preg_match($pattern2, $api_query) === 1) {
        $api_query = "রোমিং";
    }

?>
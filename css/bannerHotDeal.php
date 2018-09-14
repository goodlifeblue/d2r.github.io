<?php
/** 20140414 by allen
 * 網址以地區區分，不在case裡的地區，以default為主
 * 注意：'top_img_{B|C|A}'=>'網址'，網址使用「'」包起來，網址裡不要含有「'」，會造成網頁無法顯示
 */
switch ($ptClass->getWebCountry()) {
    case 'AUS': /// 澳洲
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'https://www.cyclingexpress.com/en/productdia/13488261/cycling-express-vip-program.html', 'img' => 'bannerHotDealImg_0830_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'JPN': /// 日本
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'http://support.cyclingexpress.com/hc/ja/articles/204500757-%E6%9C%80%E6%96%B0%E3%82%AD%E3%83%A3%E3%83%B3%E3%83%9A%E3%83%BC%E3%83%B3%E6%83%85%E5%A0%B1-%E6%9B%B4%E6%96%B0%E5%B1%A5%E6%AD%B4', 'img' => 'bannerHotDealImg_0731_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'KOR': /// 韓國
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'http://www.cyclingexpress.com/ko_page_239/cycling-express-VIP%ED%9A%8C%EC%9B%90-%ED%8A%B9%EA%B0%80%ED%95%A0%EC%9D%B8.html', 'img' => 'bannerHotDealImg_0731_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'TWN': /// 台灣
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'http://www.cyclingexpress.com/?lang=zh&p=vip_special', 'img' => 'bannerHotDealImg_0731_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'HKG': /// 香港
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'http://www.cyclingexpress.com/?lang=zh&p=vip_special', 'img' => 'bannerHotDealImg_0731_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
   case 'CHN': /// 大陸
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'http://www.cyclingexpress.com.cn/?lang=cn&p=vip_special', 'img' => 'bannerHotDealImg_0731_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'MYS': /// 馬來西亞
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'https://www.cyclingexpress.com/en/productdia/13488261/cycling-express-vip-program.html
', 'img' => 'bannerHotDealImg_0830_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'SGP': /// 新加坡
        $bannerHotDealList = array(
        	'hot_deal' => array('url' => 'https://www.cyclingexpress.com/en/productdia/13488261/cycling-express-vip-program.html', 'img' => 'bannerHotDealImg_0830_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    default:
        $bannerHotDealList = array(
        	'hot_deal' => array('url' =>'https://www.cyclingexpress.com/en/productdia/13488261/cycling-express-vip-program.html', 'img' => 'bannerHotDealImg_0830_AUS.jpg','type' => 'outside'),
        );
        break;
}
foreach ($bannerHotDealList as $key => $item) {
	if($item['type']!='outside')
		echo '<a href="/'.$item['url'].'" target="_self"><img src="'.$web_img_base_dir.'banner/hotdeal/'.$item['img'].'" alt="'.$key.'" /></a>';
	else
		echo '<a href="'.$item['url'].'" target="_blank"><img src="'.$web_img_base_dir.'banner/hotdeal/'.$item['img'].'" alt="'.$key.'" /></a>';
}
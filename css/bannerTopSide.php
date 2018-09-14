<?php
/** 20140505 by allen
 * 網址以地區區分，不在case裡的地區，以default為主
 * 注意：'top_img_{B|C|A}'=>'網址'，網址使用「'」包起來，網址裡不要含有「'」，會造成網頁無法顯示
 */
switch ($ptClass->getWebCountry()){
    case 'TWN': /// 台灣地區
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/storeLBS/', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'HKG': /// 香港
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'en_page_235/VIP會員專屬優惠-全館商品通通給你VIP價.html', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'CHN': /// 中國
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'en_page_245/VIP会员专属优惠-/-全馆商品通通给你VIP价.html', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'JPN': /// 日本
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/?lang=jp&p=vip_special', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
		break;
    case 'KOR': /// 韓國
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/ko_page_168/Latest-News.html', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'MYS': /// 馬來西亞
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/en_page_145/Latest-News.html', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
    case 'SGP': /// 新加坡
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/en_page_131/Latest-News.html', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
	
	case 'AUS': /// 澳洲
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/en_page_149/Latest-News.html', 'img' => 'bannerTopSide2_1201_'.$ptClass->getWebCountry().'.jpg','type' => 'outside'),
        );
        break;
	
    default:
        $bannerTopSideList = array(
           'Top_Side_2' => array('url' => 'http://www.cyclingexpress.com/en_page_149/Latest-News.html', 'img' => 'bannerTopSide2_1201_AUS.jpg','type' => 'outside'),
        );
        break;
}
foreach ($bannerTopSideList as $key => $item) {
	if($item['type']!='outside')
		echo '<a href="/'.$item['url'].'" target="_self"><img src="'.$web_img_dir_banner.'topSide/'.$item['img'].'" alt="'.$key.'" /></a>';
	else
		echo '<a href="'.$item['url'].'" target="_blank"><img src="'.$web_img_dir_banner.'topSide/'.$item['img'].'" alt="'.$key.'" /></a>';
}
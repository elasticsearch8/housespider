<?php
/**
 * Created by Vi
 * @author Li Dandan
 * Date: 2018/5/8
 * Time: 15:52
 */

$url = "http://m.58.com/city.html";

$result = file_get_contents($url);
preg_match_all('%http://m\.58\.com\/.*\/%sU', $result, $re, PREG_PATTERN_ORDER);
$result = join("\n", array_unique($re[0]));
echo $result;
echo "\n";





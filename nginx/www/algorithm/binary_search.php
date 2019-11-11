<?php
/**
 * 二分查找法
 * @param $list
 * @param $item
 * @return float|int|null
 */
function binary_search($list,$item){
    $low = 0;//起始位置
    $high = count($list)-1;//结束位置
    while ($low <= $high) {
        $mid = ($low + $high)  / 2;//寻找中间位
        $guess = $list[$mid]; //将猜测数字设置为中间数
        if ($guess == $item) {
            //等于中间位的 返回
            return $mid;
        } else if ($item<$guess) {
            //小于中间位的，将结束位置设置成中间位置-1
            $high = $mid - 1;
        } else  {
            //否则，将起始位置中间位置+1
            $low = $mid + 1;
        }
    }
    return null;
}

$myList = [1,3,5,7,9];
var_dump(binary_search($myList, 5));
var_dump(binary_search($myList, -1));


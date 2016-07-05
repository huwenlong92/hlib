<?php
/**
 * Created by PhpStorm.
 * User: henly
 * Date: 16/7/3
 * Time: 02:13
 */

namespace HLib;


class HArray
{

    // 二维数组排序
    public static function array_sort_multi_cols($rowset, $keyname, $dir = SORT_ASC) {
        $sortRule   = '';
        $sortArray  = array();
        $args       = array($keyname => $dir);
        foreach ($args as $sortField => $sortDir) {
            foreach ($rowset as $offset => $row) {
                $sortArray[$sortField][$offset] = $row[$sortField];
            }
            $sortRule .= '$sortArray[\'' . $sortField . '\'], ' . $sortDir . ', ';
        }
        if (empty($sortArray) || empty($sortRule)) {
            return $rowset;
        }
        eval('array_multisort(' . $sortRule . '$rowset);');
        return $rowset;
    }

}
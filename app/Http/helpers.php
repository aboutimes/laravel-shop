<?php

function test_helper() {
    return 'OK';
}

/**
 * 将当前请求的路由名称转换为 CSS 类名称
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

/**
 * @param $xml
 * @return array|null
 */
function parse_xml($xml)
{
    // 用 simplexml_load_string 函数初步解析 XML，返回值为对象，再通过 normalize_xml 函数将对象转成数组
    return normalize_xml(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_NOCDATA | LIBXML_NOBLANKS));
}

/**
 * 将 XML 解析之后的对象转成数组
 * @param $obj
 * @return array|null
 */
function normalize_xml($obj)
{
    $result = null;
    if (is_object($obj)) {
        $obj = (array) $obj;
    }
    if (is_array($obj)) {
        foreach ($obj as $key => $value) {
            $res = normalize_xml($value);
            if (('@attributes' === $key) && ($key)) {
                $result = $res;
            } else {
                $result[$key] = $res;
            }
        }
    } else {
        $result = $obj;
    }
    return $result;
}
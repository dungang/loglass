<?php
namespace app\models;

class AcRoute extends AuthItem
{
    
    public function init() {
        //类型默认为路由
        $this->type = parent::TYPE_ROUTE;
    }
    
    /**
     * 是否可以路由
     * @param string $route
     * @param array $param 参数（$GET or $POST）传递给规则使用的
     * @return boolean
     */
    public static function canRoute($route,$param=[]) {
        return false;
    }
}


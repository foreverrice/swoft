<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Http\Message\Server\Request;

/**
 * RESTful和参数验证测试demo
 *
 * @Controller(prefix="/test")
 */
class TestController
{
    /**
     * 查询列表接口
     * 地址:/test/
     *
     * @RequestMapping(route="/test", method={RequestMethod::GET})
     */
    public function list()
    {
        return ['list'];
    }
}
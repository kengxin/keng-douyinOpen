<?php
/**
 * ImApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

namespace Douyin\Open;

use Douyin\Open\Configuration;
use Douyin\Open\ApiException;
use Douyin\Open\ObjectSerializer;

/**
 * ImApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class ImApiTest extends \PHPUnit\Framework\TestCase
{
    protected $apiInstance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for imMessageSendPost
     *
     * 给抖音用户发送消息.
     *
     */
    public function testImMessageSendPost()
    {
        $body = new \Douyin\Open\Model\ImMessageSendBody(); // \Douyin\Open\Model\ImMessageSendBody | 
$open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

        try {
        $result = $this->apiInstance->imMessageSendPost($body, $open_id, $access_token);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ImApi->imMessageSendPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}

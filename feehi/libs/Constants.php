<?php
namespace feehi\libs;
/**
 * ChannelController implements the CRUD actions for Channel model.
 */

use yii;

class Constants
{

    const YesNo_Yes = 1;
    const YesNo_No = 0;
    public static function getYesNoItems($key = null)
    {
        $items = [
            self::YesNo_Yes => yii::t('app', 'Yes'),
            self::YesNo_No => yii::t('app', 'No'),
        ];
        return self::getItems($items, $key);
    }

    public static function getWebsiteStatusItems($key = null)
    {
        $items = [
            self::YesNo_Yes => yii::t('app', 'Opened'),
            self::YesNo_No => yii::t('app', 'Closed'),
        ];
        return self::getItems($items, $key);
    }

    const COMMENT_INITIAL = 0;
    const COMMENT_PUBLISH = 1;
    const COMMENT_RUBISSH = 2;
    public static function getCommentStatusItems($key = null)
    {
        $items = [
            self::COMMENT_INITIAL => yii::t('app', 'Not Audited'),
            self::COMMENT_PUBLISH => yii::t('app', 'Passed'),
            self::COMMENT_RUBISSH => yii::t('app', 'Unpassed'),
        ];
        return self::getItems($items, $key);
    }

    const TARGET_BLANK = '_blank';
    const TARGET_SELF = '_self';
    public static function getTargetOpenMethod($key = null)
    {
        $items = [
            self::TARGET_BLANK => yii::t('app', 'Yes'),
            self::TARGET_SELF => yii::t('app', 'No'),
        ];
        return self::getItems($items, $key);
    }


    const HTTP_METHOD_ALL = 0;
    const HTTP_METHOD_GET = 1;
    const HTTP_METHOD_POST = 2;
    public static function getHttpMethodItems($key = null)
    {
        $items = [
            self::HTTP_METHOD_ALL => 'all',
            self::HTTP_METHOD_GET => 'get',
            self::HTTP_METHOD_POST => 'post',
        ];
        return self::getItems($items, $key);
    }

    const PUBLISH_YES = 1;
    const PUBLISH_NO = 0;
    public static function getArticleStatus($key = null)
    {
        $items = [
            self::PUBLISH_YES => yii::t('app', 'Publish'),
            self::PUBLISH_NO => yii::t('app', 'Draft'),
        ];
        return self::getItems($items, $key);
    }

    const INPUT_INPUT = 1;
    const INPUT_TEXTAREA = 2;
    const INPUT_UEDITOR = 3;
    public static function getInputTypeItems($key = null)
    {
        $items = [
            self::INPUT_INPUT => 'input',
            self::INPUT_TEXTAREA => 'textarea',
            self::INPUT_UEDITOR => 'ueditor',
        ];
        return self::getItems($items, $key);
    }

    const ARTICLE_VISIBILITY_PUBLIC = 1;
    const ARTICLE_VISIBILITY_COMMENT = 2;
    const ARTICLE_VISIBILITY_SECRET = 3;
    public static function getArticleVisibility($key = null)
    {
        $items = [
            self::ARTICLE_VISIBILITY_PUBLIC => yii::t('app', 'Public'),
            self::ARTICLE_VISIBILITY_COMMENT => yii::t('app', 'Reply'),
            self::ARTICLE_VISIBILITY_SECRET => yii::t('app', 'Password'),
        ];
        return self::getItems($items, $key);
    }

    const Status_Enable = 1;
    const Status_Desable = 0;
    public static function getStatusItems($key = null)
    {
        $items = [
            self::Status_Enable => yii::t('app', 'Enable'),
            self::Status_Desable => yii::t('app', 'Disable'),
        ];
        return self::getItems($items, $key);
    }

    private static function getItems($items, $key = null,$throw=false)
    {
        if ($key !== null)
        {
            if (key_exists($key, $items))
            {
                return $items[$key];
            }
            if($throw)
            {
                throw new InvalidParamException();
            }
            return 'unknown key:' . $key;
        }
        return $items;
    }
}

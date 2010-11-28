<?php
class ELangCUrlManager extends CUrlManager
{	
    public function createUrl($route,$params=array(),$ampersand='&')
    {
        //if (!isset($params['lang']))
        if (!isset($params['lang']) && Yii::app()->GetLanguage()!=Yii::app()->components['ELangHandler']->languages[0])
            $params['lang']=Yii::app()->GetLanguage();
        return parent::createUrl($route, $params, $ampersand);
    }
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: nicke
 * Date: 04.05.17
 * Time: 10:38
 */
namespace frontend\components;

use yii\base\Component;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($email,$subject,$body,$name=''){
        /*\Yii::$app->mail->compose()
            ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
            ->setTo([$form->email => $form->name])
            ->setSubject($form->subject)
            ->setTextBody($form->text)
            ->send();*/
        $this->trigger(self::EVENT_NOTIFY);
    }
    public function notifyAdmin($event){
        print "Notify Admin";
    }
}
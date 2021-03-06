<?php
use feehi\widgets\JsBlock;
    if( Yii::$app->getSession()->hasFlash('success') ) {
        $successTitle = yii::t('app', 'Success');
        $info = Yii::$app->getSession()->getFlash('success');
        $str =<<<EOF
       toastr.options = {
          "closeButton": true,
          "debug": true,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "showDuration": "400",
          "hideDuration": "1000",
          "timeOut": "7000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
       };
       toastr.success("{$successTitle}", "{$info}");
EOF;
        JsBlock::begin();
        echo $str;
        JsBlock::end();
    }
    if( Yii::$app->getSession()->hasFlash('error') ) {
        $errorTitle = yii::t('app', 'Error');
        $info = Yii::$app->getSession()->getFlash('error');
        $str =<<<EOF
       toastr.options = {
          "closeButton": true,
          "debug": true,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "showDuration": "400",
          "hideDuration": "1000",
          "timeOut": "7000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
       };
       toastr.error("{$errorTitle}", "{$info}");
EOF;
        JsBlock::begin();
        echo $str;
        JsBlock::end();
    }
?>
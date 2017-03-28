<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $oldfolder;
    public $newfolder;

    public function rules()
    {
        return [
            [['oldfolder', 'newfolder'], 'required'],

        ];
    }
}
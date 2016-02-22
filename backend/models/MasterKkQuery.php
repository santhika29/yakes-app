<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[MasterKk]].
 *
 * @see MasterKk
 */
class MasterKkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MasterKk[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MasterKk|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

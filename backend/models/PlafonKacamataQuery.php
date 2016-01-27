<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[PlafonKacamata]].
 *
 * @see PlafonKacamata
 */
class PlafonKacamataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return PlafonKacamata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PlafonKacamata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[MonitoringKacamata]].
 *
 * @see MonitoringKacamata
 */
class MonitoringKacamataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MonitoringKacamata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MonitoringKacamata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

<?php

namespace backend\models;
//namespace backend\controllers\AssignController;

use Yii;

/**
 * This is the model class for table "issue_assign".
 *
 * @property int $id
 * @property int $issue_id
 * @property int $assign_dev
 * @property string $status
 *
 * @property User $assignDev
 * @property IssueTable $issue
 */
class IssueAssign extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'issue_assign';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['issue_id', 'assign_dev', 'status'], 'required'],
            [['issue_id', 'assign_dev','status'], 'integer'],
           // [['assign_dev'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['assign_dev' => 'id']],
           // [['issue_id'], 'exist', 'skipOnError' => true, 'targetClass' => IssueTable::className(), 'targetAttribute' => ['issue_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'issue_id' => 'Issue ID',
            'assign_dev' => 'Assign Dev',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignDev()
    {
        return $this->hasOne(User::className(), ['id' => 'assign_dev']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssue()
    {
        return $this->hasOne(IssueTable::className(), ['id' => 'issue_id']);
    }
    // public function getProject()
    // {
    //     return $this->hasOne(Project::className(),['id'=> getIssue()]);
    // }
}

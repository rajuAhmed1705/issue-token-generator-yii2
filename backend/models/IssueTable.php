<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "issue_table".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $phone_no
 * @property int $project_id
 * @property string $issue_type
 * @property string $message
 *
 * @property IssueAssign[] $issueAssigns
 * @property Project $project
 */
class IssueTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'issue_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone_no', 'project_id', 'issue_type', 'message'], 'required'],
            [['phone_no', 'project_id'], 'integer'],
            [['name', 'email', 'issue_type'], 'string', 'max' => 100],
            [['message'], 'string', 'max' => 500],
            //[['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone No',
            'project_id' => 'Project ID',
            'issue_type' => 'Issue Type',
            'message' => 'Message',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssueAssigns()
    {
        return $this->hasMany(IssueAssign::className(), ['issue_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
    public function getStatus()
    {
        switch ($this->status) {

        }
        return ;
    }

}

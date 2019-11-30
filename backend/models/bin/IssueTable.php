<?php

namespace backend\models;

use backend\models\Project;
use common\models\User;

use Yii;

/**
 * This is the model class for table "issue_table".
 *
 * @property int $id
 * @property int $project_id
 * @property int $user_id
 * @property string $issue_type
 * @property string $message
 *
 * @property IssueAssign[] $issueAssigns
 * @property Project $project
 * @property User $user
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
            [['project_id', 'user_id', 'issue_type', 'message'], 'required'],
            [['project_id', 'user_id'], 'integer'],
            [['issue_type'], 'string', 'max' => 100],
            [['message'], 'string', 'max' => 500],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'user_id' => 'User ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

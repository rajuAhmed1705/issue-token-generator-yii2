<?php


use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Alert;
use kartik\nav\NavX;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        //$menuItems[] = ['label' => 'signup', 'url' => ['/site/signup']];
    } else {
        if(Yii::$app->user->can('admin'))
        {
            $menuItems[] = [
                'label' => 'Issues',
                'items' => [
                    [
                    'label' => 'Unsolved', 
                    'url' => ['issue/index','status' => 2],
                ],
                    '<li class="divider"></li>',
                    [
                    'label' => 'Solved', 
                    'url' => ['issue/index','status' => 1],
                ]
                    ],
            ];



        $menuItems[] = [
            'label' => 'Admin Panel',
            'items' => [
                 [
                    'label' => 'Admin', 
                    'url' => ['/admin'],
                ],
                 '<li class="divider"></li>',
                 [
                    'label' => 'Users', 
                    'url' => ['/admin/user'],
                ],
                '<li class="divider"></li>',
                 [
                    'label' => 'Route', 
                    'url' => ['/admin/route'],
                ],
                '<li class="divider"></li>',
                 [
                    'label' => 'Permission', 
                    'url' => ['/admin/permission'],
                ],
                '<li class="divider"></li>',
                [
                   'label' => 'Menu', 
                   'url' => ['/admin/menu'],
               ],
               '<li class="divider"></li>',
               [
                  'label' => 'Role', 
                  'url' => ['/admin/role'],
              ],
              '<li class="divider"></li>',
              [
                 'label' => 'Assignment', 
                 'url' => ['/admin/assignment'],
             ],
             
            ],
        ];
        $menuItems[] = [
            //'label' => 'Create user', 'url' => ['/site/signup']
            
            'label' => 'Users',
            'items' => [
                 [
                    'label' => 'Create User', 
                    'url' => ['/site/signup'],
                ],
                 '<li class="divider"></li>',
                 [
                    'label' => 'Users', 
                    'url' => ['/user/index'],
                ],
            ],
            
        ];

        }
        if(Yii::$app->user->can('developer')){

            $menuItems[] = [
                'label' => 'My Issues', 
                'url' => ['assign/index','id' =>Yii::$app->user->identity->id,'status' => 2] //,'id' =>Yii::$app->user->identity->id
            ];

        }
        if(Yii::$app->user->can('project manager')){
            
            $menuItems[] = [
                'label' => 'Projects',
                'items' => [
                     [
                        'label' => 'Projects', 
                        'url' => ['project/index'],
                    ],
                     '<li class="divider"></li>',
                     [
                        'label' => 'Create Project', 
                        'url' => ['project/create'],
                    ]
                     ],
                  ];

        }
        $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
    }
    echo NavX::widget([
        //'options' => ['class' => 'navbar-nav navbar-right'],
        'options' => ['class' =>'nav-pills navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode('Raju Ahmed') ?> <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

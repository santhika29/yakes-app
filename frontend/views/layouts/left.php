<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel 
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar5-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'fa fa-home', 'url' => ['/']],
                    [
                        'label' => 'Monitoring', 
                        'icon' => 'fa fa-cubes', 
                        'url' =>'#',
                        'items' => [
                            ['label' => 'Kacamata', 'icon' => 'fa fa-file-code-o', 'url' => ['/monitoringkacamata']],
                        ]
                    ],
                    [
                        'label' => 'Informasi', 
                        'icon' => 'fa fa-info', 
                        'url' =>'#',
                        'items' => [
                            ['label' => 'Hak Kacamata', 'icon' => 'fa fa-laptop', 'url' => ['#']],
                            ['label' => 'Peserta', 'icon' => 'fa fa-users', 'url' => ['#']],
                        ]
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>

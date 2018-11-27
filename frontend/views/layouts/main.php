<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php //echo Yii::$app->urlManagerBackend->getBaseUrl();die();?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

  <header id="header-wrap">
      <!-- Navbar Start -->
          <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
       
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
         
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">

              <li class="nav-item active">
               <?php
              NavBar::begin();
             
                $menuItems = [
                    ['label' => 'About', 'url' => ['#about']],
                    ['label' => 'Services', 'url' => ['#services']],
                    ['label' => 'Resume', 'url' => ['#resume']],
                    ['label' => 'Work', 'url' => ['#portfolios']],
                    ['label' => 'Contact', 'url' => ['#contact']],
                ];
    
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => Yii::$app->urlManagerBackend->baseurl ];
                    } else {
                        $menuItems[] = '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>';
                    }
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => $menuItems,
                    ]);
                   
                  NavBar::end();
          ?>
         </ul>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">
              <li><a href="#home">Home</a></li>
              <li><a href="#about">about</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#resume">resume</a></li>
              <li><a href="#portfolio">Work</a></li>
              <li><a href="#contact">Contact</a></li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
     
       <!-- <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?> -->
        <?= $content ?>

    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

 <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
              <ul class="social-icon">
                <li>
                  <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-linkedin"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-google"></i></a>
                </li>
              </ul>
              <p>Copyright ©  <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
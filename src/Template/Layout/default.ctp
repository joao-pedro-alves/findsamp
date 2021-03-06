<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Find SA-MP</title>
    <!-- Vendors styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,600italic' rel='stylesheet' type='text/css' />
    <!-- Vendors styles -->
    <?= $this->Html->css('global') ?>
    <?= $this->Html->css('layout') ?>
    <?= $this->Html->css('pages/pages-index') ?>
    <?= $this->Html->css('pages/servers-vote') ?>
    <?= $this->Html->css('pages/servers-display') ?>
</head>
<body>
    <div id="global-wrap">
        <!-- Global header -->
        <div id="global-header">
            <div class="main-bar">
                <?= $this->Html->link(
                    $this->Html->image('logo.png'), [
                        'controller' => 'pages',
                        'action' => 'index'
                    ],[
                        'escape' => false,
                        'class' => 'logo-wrap'
                    ]
                ) ?>
            </div>
        </div> <!-- Global header -->
        <!-- Global Content -->
        <div id="global-content">
            <?= $this->fetch('content') ?>
        </div> <!-- Global Content -->
        <!-- Global footer -->
        <div id="global-footer">
            <div class="copyright-wrap">
                <div class="wrap">
                    <span>Find SA-MP - All Rights Reserved</span>
                    <a href="https://github.com/seankneip/findsamp" target="_blank" class="contribute pull-right"><i class="fa fa-github-alt"></i> Contribute to the project</a>
                </div>
            </div>
        </div> <!-- Global footer -->
    </div>
    <!-- 3rd-party scripts -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js" integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <!-- 3rd-party scripts -->
    <?= $this->Html->script('chart-settings') ?>
</body>
</html>
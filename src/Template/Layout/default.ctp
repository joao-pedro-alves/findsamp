<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Find SA-MP</title>
    <!-- Vendors styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Vendors styles -->
    <?= $this->Html->css('global') ?>
    <?= $this->Html->css('layout') ?>
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
           asda 
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
</body>
</html>
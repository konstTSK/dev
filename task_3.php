<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">

                            <?php
                                $items = [
                                    [
                                        'body_progress_class'=> 'bg-fusion-400',
                                        'title'=>'Мои задачи',
                                        'title_val'=>'7 / 10',
                                        'progress_value'=>'65'
                                    ],
                                    [
                                        'body_progress_class'=> 'bg-success-500',
                                        'title'=>'Емкость диска',
                                        'title_val'=>'440 TB',
                                        'progress_value'=>'34'
                                    ],
                                    [
                                        'body_progress_class'=> 'bg-info-400',
                                        'title'=>'Пройдено уроков',
                                        'title_val'=>'77%',
                                        'progress_value'=>'77'
                                    ],
                                    [
                                        'body_progress_class'=> 'bg-primary-300',
                                        'title'=>'Осталось дней',
                                        'title_val'=>'2 дня',
                                        'progress_value'=>'84'
                                    ],
                                ];
                            ?>

                            <?php foreach ($items as $item): ?>

                                <div class="d-flex">
                                    <?php echo $item['title']?>
                                    <span class="d-inline-block ml-auto"><?php echo $item['title_val']?></span>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar <?php echo $item['body_progress_class']?>" role="progressbar" style="width: <?php echo $item['progress_value']?>%;" aria-valuenow="<?php echo $item['progress_value']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>

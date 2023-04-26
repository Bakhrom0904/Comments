<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="twitter:site" content="@themepixels">
        <meta name="twitter:creator" content="@themepixels">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Bracket">
        <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
        <meta property="og:url" content="http://themepixels.me/bracket">
        <meta property="og:title" content="Bracket">
        <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
        <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels">
        <title>Comments</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>

          <!-- sidebar-menu -->
            
    <div class="br-logo"><a href="/"><span></span>Comments<span></span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <div class="br-sideleft-menu">
            <a href="/comments/create" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-22"></i>
                    <span class="menu-item-label">Create comment</span>
                </div>
            </a>
            <a href="/comments/view" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-book-outline tx-20"></i>
                    <span class="menu-item-label">View Comments</span>
                </div>
            </a>
            <a href="/comments/moderation" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                    <span class="menu-item-label">Moderation</span>
                </div>
            </a>
        </div>
    </div>
    
            <!-- end sidebar-menu -->

    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div>
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-email-outline tx-24"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                        <!-- end: if statement -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                        <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                            <a href="" class="tx-11">+ Add New Message</a>
                        </div><!-- d-flex -->

                        <div class="media-list">
                            <!-- loop starts here -->
                            <a href="" class="media-list-link">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                                            <span class="tx-11 tx-gray-500">2 minutes ago</span>
                                        </div><!-- d-flex -->
                                        <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                                            <span class="tx-11 tx-gray-500">3 hours ago</span>
                                        </div><!-- d-flex -->
                                        <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                                            <span class="tx-11 tx-gray-500">5 hours ago</span>
                                        </div><!-- d-flex -->
                                        <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                                            <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                                            <span class="tx-11 tx-gray-500">Yesterday</span>
                                        </div><!-- d-flex -->
                                        <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <div class="pd-y-10 tx-center bd-t">
                                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                            </div>
                        </div><!-- media-list -->
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
                <div class="dropdown">
                    <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-bell-outline tx-24"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                        <!-- end: if statement -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                        <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                            <a href="" class="tx-11">Mark All as Read</a>
                        </div><!-- d-flex -->

                        <div class="media-list">
                            <!-- loop starts here -->
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                        <span class="tx-12">October 03, 2017 8:45am</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <!-- loop ends here -->
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                                        <span class="tx-12">October 02, 2017 12:44am</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                                        <span class="tx-12">October 01, 2017 10:20pm</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <a href="" class="media-list-link read">
                                <div class="media pd-x-20 pd-y-15">
                                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                    <div class="media-body">
                                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                        <span class="tx-12">October 01, 2017 6:08pm</span>
                                    </div>
                                </div><!-- media -->
                            </a>
                            <div class="pd-y-10 tx-center bd-t">
                                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                            </div>
                        </div><!-- media-list -->
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">Katherine</span>
                        <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                            <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                            <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                            <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                            <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                            <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-chatboxes-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- br-header-right -->
    </div>

    <?=$content;?>

    <footer class="br-footer">
    </footer>
    </div>

    <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage();

<?php
include("header.php");
?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill"><img src="images/Microsoft-office-365.png" width="100%" height="100%"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill"><img src="images/azure.jpg" width="100%" height="100%"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill"><img src="images/windowsserver2012.jpg" width="100%" height="100%"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 1</h2> -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
            <hr>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-left">
                    <div class="panel-headingo365">
                        <img src="images/office365.png" height="25">
                        <p>Optimize Your Business</p>
                    </div>
                    <div class="panel-trial">
                        <h5>Free Trial</h5>
                    </div>
                    <div class="panel-body">
                        <h4>Office 365</h4>
                        <p>Office 365 membuat tim Anda semakin produktif sehingga sesuai untuk percepatan pertumbuhan usaha</p>
                        <a href="#" class="btn btn-primary">Buy Now</a> <a href="office365.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-left">
                    <div class="panel-headingazure">
                        <img src="images/azure.png">
                        <p>Introducing Premium Storage</p>
                    </div>
                    <div class="panel-trial">
                        <h5>Free Trial</h5>
                    </div>
                    <div class="panel-body">
                        <h4>Microsoft Azure</h4>
                        <p>Ada banyak cara untuk membeli layanan Azure , Semua layanan ini sangat sesuai untuk solo developer atau developer di perusahaan besar.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a> <a href="azure.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-left">
                    <div class="panel-headingserver">
                        <img src="images/Server2012.png">
                        <p>Simple to deloy</p>
                    </div>
                    <div class="panel-trial">
                        <h5>Free Trial</h5>
                    </div>
                    <div class="panel-body">
                        <h4>Windows Server</h4>
                        <p>Windows Server 2012 menawarkan bisnis dan layanan provider yang terukur, dinamis dan infrastruktur yang optimal pada sistem cloud.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a> <a href="windows2012.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-left">
                    <div class="panel-heading10">
                        <img src="images/Windows_10.png">
                        <p>Get the best Windows ever</p>
                    </div>
                    <div class="panel-trial">
                        <h5>Free Trial</h5>
                    </div>
                    <div class="panel-body">
                        <h4>Windows 10</h4>
                        <p>Dengan fitur-fitur baru dan ditingkatkan, Windows 10 memberikan terus menerus, inovasi berorientasi pelanggan untuk perangkat baru dan yang sudah ada.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a> <a href="http://www.microsoft.com/en-us/windows/windows-10-faq" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <hr>

<?php
include("footer.php");
?>
<!-- Footer -->
        

    </div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="panelf panel-foot text-left">
                    <div class="panel-body">
                        <h4 class="fh4"><b>WAHANA CIPTASINATRIA</b></h4>
                        <p><a href="http://bsd.wcs.co.id/" class="flink">Home</a><br>
                        <a href="http://bsd.wcs.co.id/who-we-are/" class="flink">Who We Are</a><br>
                        <a href="http://bsd.wcs.co.id/what-we-do/" class="flink">What We Do</a><br>
                        <a href="http://bsd.wcs.co.id/our-work/" class="flink">Our Customer</a><br>
                        <a href="http://bsd.wcs.co.id/galery/" class="flink">Gallery</a><br>
                        <a href="http://bsd.wcs.co.id/job-vacancies/" class="flink">Job Vacancies</a><br>
                        <a href="http://bsd.wcs.co.id/category/news-info/" class="flink">News &amp; Info</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panelf panel-foot text-left">
                    <div class="panel-body">
                        <h4 class="fh4"><b>ARSIP</b></h4>
                        <p><a href="office365.php" class="flink">Office 365</a><br>
                        <a href="azure.php" class="flink">Windows Azure</a><br>
                        <a href="windows2012.php" class="flink">Windows Server 2012</a><br>
                        <a href="#" class="flink">Support</a><br>
                        <a href="#" class="flink">Download</a><br>
                        <a href="#" class="flink">Free Trial</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panelf panel-foot text-left">
                    <div class="panel-body">
                        <h4 class="fh4"><b>KONTAK</b></h4>
                        <p><b>Alamat:</b><br>
                        Gd. Sarinah Thamrin Lantai 11<br>
                        Jl. MH Thamrin Kav. 11<br>
                        Jakarta 10350<br>
                        <br>
                        <b>Phone:</b><br>
                        (62-21)31925586 / 31925587<br>
                        <br>
                        <b>Email:</b><br>
                        <a href="mailto:cloudsupport@wcs.co.id" class="fh4">cloudsupport@wcs.co.id</a></p>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/wcs.cloudsolution/" class="ffb"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/wcscloud/" class="fig"><i class="fa fa-2x fa-instagram"></i></a>
                            </li>
                            <li><a href="https://twitter.com/wcscloud" class="ftw"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <p>&copy; Copyright 2016. PT Wahana Ciptasinatria. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <div id="modal_signup" class="modal hide fade in" style="display: none;">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>- E-CONTACT FORM -</h3>
            <p>Silahkan isi formulir yang telah kami sediakan di bawah ini, kami akan segera menghubungi Anda</p>
        </div>
        <div class="modal-body">
            <form class="contact" name="contact">
                <label class="label" for="name">Nama*</label><br>
                <input type="text" name="name" class="input-xlarge"><br>
                <label class="label" for="jabatan">Jabatan</label><br>
                <input type="text" name="jabatan" class="input-xlarge"><br>
                <label class="label" for="company">Nama Perusahaan*</label><br>
                <input type="text" name="company" class="input-xlarge"><br>
                <label class="label" for="email">Your E-mail*</label><br>
                <input type="email" name="email" class="input-xlarge"><br>
                <label class="label" for="mobile">Mobile Phone*</label><br>
                <input type="text" name="mobile" class="input-xlarge"><br>
                <label class="label" for="office">Office Phone*</label><br>
                <input type="text" name="office" class="input-xlarge"><br>
                <br>
                <input type="checkbox" name="kebutuhan1" id="kebutuhan1" value="Price List">Price List<br>
                <input type="checkbox" name="kebutuhan2" value="Info detil solusi & produk" checked id="kebutuhan2">Info detil solusi & produk<br>
                <input type="checkbox" name="kebutuhan3" value="Daftar Event / pelatihan" id="kebutuhan3">Daftar Event / pelatihan<br>
                <input type="checkbox" name="kebutuhan4" value="Lainnya :" id="kebutuhan4">Lainnya :<input style="display:inline; width:30%;" name="lainnyaText" type="text" tabindex="1" id="lainnyaText"><br>
                <label class="label" for="message">Enter a Message</label><br>
                <textarea name="message" class="input-xlarge"></textarea>
            </form>
        </div>
        <div class="modal-footer">
            <input class="btn btn-success" type="submit" value="Send!" id="submit">
            <a href="#" class="btn" data-dismiss="modal">Nah.</a>
        </div>
    </div>

</body>

</html>

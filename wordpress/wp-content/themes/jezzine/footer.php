    <!-- contact section start  -->
    <?php get_template_part( 'includes/contact-sec.inc' ); ?>  <!--contact section -->
    <!-- contact section end  -->
    
    <!-- footer start  -->
    <footer class="bg-gray container-fluid">
        <!-- footer links start  -->
        <?php
            wp_nav_menu( array(
                'theme_location'  => 'footer_menu',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => '',
                'container_class' => '',
                'container_id'    => 'footer-menu',
                'menu_class'      => 'd-md-flex justify-content-md-arround justify-content-center list-unstyled py-md-5 py-2 m-0',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        <!-- <ul class="d-md-flex justify-content-md-arround justify-content-center list-unstyled py-md-5 py-2 m-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">الإتحاد</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">المشاريع</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">النشاطات والأخبار</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">خدمة المواطنين</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">إكتشف المنطقة</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">الدليل</a>
            </li>
        </ul> -->
        <hr>
        <!-- footer links end  -->
        <!-- copyright section start   -->
        <div class="row justify-content-center" id="copyright-sec">
            <div class="col-md-6">
                <p class="text-center">Copyright  Jezzine Union 2020 ©. All Rights Reserved</p>
                <p class="text-center">by Dow Group</p>
            </div>
        </div>
        <!-- copyright section end   -->
    </footer>
    <!-- footer end  -->
</body>

</html>
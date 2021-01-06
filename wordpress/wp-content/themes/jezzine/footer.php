    <!-- contact section start  -->
    <?php get_template_part('includes/contact-sec.inc'); ?>
    <!--contact section -->
    <!-- contact section end  -->

    <!-- footer start  -->
    <footer class="bg-gray container-fluid">
        <!-- footer links start  -->
        <?php

        wp_nav_menu(array(
            'theme_location'  => 'footer_menu',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => '',
            'container_class' => '',
            'container_id'    => 'footer-menu',
            'menu_class'      => 'd-md-flex justify-content-md-arround justify-content-center list-unstyled py-md-5 py-2 m-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
        <hr>
        <!-- footer links end  -->
        <!-- copyright section start   -->
        <div class="row justify-content-center" id="copyright-sec">
            <div class="col-md-6">
                <?php dynamic_sidebar('sidebar-3'); ?>
            </div>
        </div>
        <!-- copyright section end   -->
    </footer>
    <!-- footer end  -->
    </body>

    </html>
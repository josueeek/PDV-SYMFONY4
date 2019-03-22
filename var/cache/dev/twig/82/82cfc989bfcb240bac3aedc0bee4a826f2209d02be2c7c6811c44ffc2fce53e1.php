<?php

/* assets/light-bootstrap-dashboard.js */
class __TwigTemplate_569f95f6f41035ae2b9ddf32ae6a54cb046081b245a5cc47705c9b352caa0e33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b38bbc01e988ceccd41ae097e33305cdd6ad9f545908709590ad5c01c8b88ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38bbc01e988ceccd41ae097e33305cdd6ad9f545908709590ad5c01c8b88ef9->enter($__internal_b38bbc01e988ceccd41ae097e33305cdd6ad9f545908709590ad5c01c8b88ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/light-bootstrap-dashboard.js"));

        // line 1
        echo "/*!

 =========================================================
 * Light Bootstrap Dashboard - v1.4.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/light-bootstrap-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

var searchVisible = 0;
var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized = false;

\$(document).ready(function(){
    window_width = \$(window).width();

    // check if there is an image set for the sidebar's background
    lbd.checkSidebarImage();

    // Init navigation toggle for small screens
    lbd.initRightMenu();

    //  Activate the tooltips
    \$('[rel=\"tooltip\"]').tooltip();

    \$('.form-control').on(\"focus\", function(){
        \$(this).parent('.input-group').addClass(\"input-group-focus\");
    }).on(\"blur\", function(){
        \$(this).parent(\".input-group\").removeClass(\"input-group-focus\");
    });

    // Fixes sub-nav not working as expected on IOS
\$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
});

\$(document).on('click', '.navbar-toggle', function(){
    \$toggle = \$(this);

    if(lbd.misc.navbar_menu_visible == 1) {
        \$('html').removeClass('nav-open');
       lbd.misc.navbar_menu_visible = 0;
        \$('#bodyClick').remove();
        setTimeout(function(){
           \$toggle.removeClass('toggled');
       }, 550);
    } else {
       setTimeout(function(){
           \$toggle.addClass('toggled');
       }, 580);
       div = '<div id=\"bodyClick\"></div>';
       \$(div).appendTo('body').click(function() {
           \$('html').removeClass('nav-open');
           lbd.misc.navbar_menu_visible = 0;
            setTimeout(function(){
               \$toggle.removeClass('toggled');
               \$('#bodyClick').remove();
            }, 550);
       });

      \$('html').addClass('nav-open');
       lbd.misc.navbar_menu_visible = 1;
    }
});

\$(window).on('resize', function(){
    if(navbar_initialized){
        lbd.initRightMenu();
        navbar_initialized = true;
    }
});

lbd = {
    misc:{
        navbar_menu_visible: 0
    },

    checkSidebarImage: function(){
        \$sidebar = \$('.sidebar');
        image_src = \$sidebar.data('image');

        if(image_src !== undefined){
            sidebar_container = '<div class=\"sidebar-background\" style=\"background-image: url(' + image_src + ') \"/>'
            \$sidebar.append(sidebar_container);
        }
    },

    initRightMenu: debounce(function(){
        if(!navbar_initialized){
            \$sidebar_wrapper = \$('.sidebar-wrapper');
            \$navbar = \$('nav').find('.navbar-collapse').html();

            mobile_menu_content = '';

            nav_content = \$navbar;

            nav_content = '<ul class=\"nav nav-mobile-menu\">' + nav_content + '</ul>';

            // navbar_form = \$('nav').find('.navbar-form').get(0).outerHTML;

            \$sidebar_nav = \$sidebar_wrapper.find(' > .nav');

            // insert the navbar form before the sidebar list
            \$nav_content = \$(nav_content);
            // \$navbar_form = \$(navbar_form);
            \$nav_content.insertBefore(\$sidebar_nav);
            // \$navbar_form.insertBefore(\$nav_content);

            \$(\".sidebar-wrapper .dropdown .dropdown-menu > li > a\").click(function(event) {
                event.stopPropagation();

            });

            mobile_menu_initialized = true;
        } else {
            if(\$(window).width() > 991){
                // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                // \$sidebar_wrapper.find('.navbar-form').remove();
                \$sidebar_wrapper.find('.nav-mobile-menu').remove();

                mobile_menu_initialized = false;
            }
        }
    },200)
}


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
\tvar timeout;
\treturn function() {
\t\tvar context = this, args = arguments;
\t\tclearTimeout(timeout);
\t\ttimeout = setTimeout(function() {
\t\t\ttimeout = null;
\t\t\tif (!immediate) func.apply(context, args);
\t\t}, wait);
\t\tif (immediate && !timeout) func.apply(context, args);
\t};
};
";
        
        $__internal_b38bbc01e988ceccd41ae097e33305cdd6ad9f545908709590ad5c01c8b88ef9->leave($__internal_b38bbc01e988ceccd41ae097e33305cdd6ad9f545908709590ad5c01c8b88ef9_prof);

    }

    public function getTemplateName()
    {
        return "assets/light-bootstrap-dashboard.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!

 =========================================================
 * Light Bootstrap Dashboard - v1.4.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/light-bootstrap-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

var searchVisible = 0;
var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized = false;

\$(document).ready(function(){
    window_width = \$(window).width();

    // check if there is an image set for the sidebar's background
    lbd.checkSidebarImage();

    // Init navigation toggle for small screens
    lbd.initRightMenu();

    //  Activate the tooltips
    \$('[rel=\"tooltip\"]').tooltip();

    \$('.form-control').on(\"focus\", function(){
        \$(this).parent('.input-group').addClass(\"input-group-focus\");
    }).on(\"blur\", function(){
        \$(this).parent(\".input-group\").removeClass(\"input-group-focus\");
    });

    // Fixes sub-nav not working as expected on IOS
\$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
});

\$(document).on('click', '.navbar-toggle', function(){
    \$toggle = \$(this);

    if(lbd.misc.navbar_menu_visible == 1) {
        \$('html').removeClass('nav-open');
       lbd.misc.navbar_menu_visible = 0;
        \$('#bodyClick').remove();
        setTimeout(function(){
           \$toggle.removeClass('toggled');
       }, 550);
    } else {
       setTimeout(function(){
           \$toggle.addClass('toggled');
       }, 580);
       div = '<div id=\"bodyClick\"></div>';
       \$(div).appendTo('body').click(function() {
           \$('html').removeClass('nav-open');
           lbd.misc.navbar_menu_visible = 0;
            setTimeout(function(){
               \$toggle.removeClass('toggled');
               \$('#bodyClick').remove();
            }, 550);
       });

      \$('html').addClass('nav-open');
       lbd.misc.navbar_menu_visible = 1;
    }
});

\$(window).on('resize', function(){
    if(navbar_initialized){
        lbd.initRightMenu();
        navbar_initialized = true;
    }
});

lbd = {
    misc:{
        navbar_menu_visible: 0
    },

    checkSidebarImage: function(){
        \$sidebar = \$('.sidebar');
        image_src = \$sidebar.data('image');

        if(image_src !== undefined){
            sidebar_container = '<div class=\"sidebar-background\" style=\"background-image: url(' + image_src + ') \"/>'
            \$sidebar.append(sidebar_container);
        }
    },

    initRightMenu: debounce(function(){
        if(!navbar_initialized){
            \$sidebar_wrapper = \$('.sidebar-wrapper');
            \$navbar = \$('nav').find('.navbar-collapse').html();

            mobile_menu_content = '';

            nav_content = \$navbar;

            nav_content = '<ul class=\"nav nav-mobile-menu\">' + nav_content + '</ul>';

            // navbar_form = \$('nav').find('.navbar-form').get(0).outerHTML;

            \$sidebar_nav = \$sidebar_wrapper.find(' > .nav');

            // insert the navbar form before the sidebar list
            \$nav_content = \$(nav_content);
            // \$navbar_form = \$(navbar_form);
            \$nav_content.insertBefore(\$sidebar_nav);
            // \$navbar_form.insertBefore(\$nav_content);

            \$(\".sidebar-wrapper .dropdown .dropdown-menu > li > a\").click(function(event) {
                event.stopPropagation();

            });

            mobile_menu_initialized = true;
        } else {
            if(\$(window).width() > 991){
                // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                // \$sidebar_wrapper.find('.navbar-form').remove();
                \$sidebar_wrapper.find('.nav-mobile-menu').remove();

                mobile_menu_initialized = false;
            }
        }
    },200)
}


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
\tvar timeout;
\treturn function() {
\t\tvar context = this, args = arguments;
\t\tclearTimeout(timeout);
\t\ttimeout = setTimeout(function() {
\t\t\ttimeout = null;
\t\t\tif (!immediate) func.apply(context, args);
\t\t}, wait);
\t\tif (immediate && !timeout) func.apply(context, args);
\t};
};
", "assets/light-bootstrap-dashboard.js", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/light-bootstrap-dashboard.js");
    }
}

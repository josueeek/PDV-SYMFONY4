<?php

/* assets/bootstrap-notify.js */
class __TwigTemplate_f82f2227819fef1999ccbab55ce9d4ec14af1e2a1a3c9cdfc005c3d15f063905 extends Twig_Template
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
        $__internal_16473923f21fdf67727cc4e667bf01b3231f8763fa496e889e80692246b3854f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16473923f21fdf67727cc4e667bf01b3231f8763fa496e889e80692246b3854f->enter($__internal_16473923f21fdf67727cc4e667bf01b3231f8763fa496e889e80692246b3854f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/bootstrap-notify.js"));

        // line 1
        echo "/*



     Creative Tim Modifications

     Lines: 239, 240 was changed from top: 5px to top: 50% and we added margin-top: -13px. In this way the close button will be aligned vertically
     Line:242 - modified when the icon is set, we add the class \"alert-with-icon\", so there will be enough space for the icon.




*/

/*
* Project: Bootstrap Notify = v3.1.5
* Description: Turns standard Bootstrap alerts into \"Growl-like\" notifications.
* Author: Mouse0270 aka Robert McIntosh
* License: MIT License
* Website: https://github.com/mouse0270/bootstrap-growl
*/

/* global define:false, require: false, jQuery:false */

(function (factory) {
\tif (typeof define === 'function' && define.amd) {
\t\t// AMD. Register as an anonymous module.
\t\tdefine(['jquery'], factory);
\t} else if (typeof exports === 'object') {
\t\t// Node/CommonJS
\t\tfactory(require('jquery'));
\t} else {
\t\t// Browser globals
\t\tfactory(jQuery);
\t}
}(function (\$) {
\t// Create the defaults once
\tvar defaults = {
\t\telement: 'body',
\t\tposition: null,
\t\ttype: \"info\",
\t\tallow_dismiss: true,
\t\tallow_duplicates: true,
\t\tnewest_on_top: false,
\t\tshowProgressbar: false,
\t\tplacement: {
\t\t\tfrom: \"top\",
\t\t\talign: \"right\"
\t\t},
\t\toffset: 20,
\t\tspacing: 10,
\t\tz_index: 1031,
\t\tdelay: 5000,
\t\ttimer: 1000,
\t\turl_target: '_blank',
\t\tmouse_over: null,
\t\tanimate: {
\t\t\tenter: 'animated fadeInDown',
\t\t\texit: 'animated fadeOutUp'
\t\t},
\t\tonShow: null,
\t\tonShown: null,
\t\tonClose: null,
\t\tonClosed: null,
\t\ticon_type: 'class',
\t\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-4 alert alert-{0}\" role=\"alert\"><button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&times;</button><span data-notify=\"icon\"></span> <span data-notify=\"title\">{1}</span> <span data-notify=\"message\">{2}</span><div class=\"progress\" data-notify=\"progressbar\"><div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div></div><a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a></div>'
\t};

\tString.format = function () {
\t\tvar str = arguments[0];
\t\tfor (var i = 1; i < arguments.length; i++) {
\t\t\tstr = str.replace(RegExp(\"\\\\{\" + (i - 1) + \"\\\\}\", \"gm\"), arguments[i]);
\t\t}
\t\treturn str;
\t};

\tfunction isDuplicateNotification(notification) {
\t\tvar isDupe = false;

\t\t\$('[data-notify=\"container\"]').each(function (i, el) {
\t\t\tvar \$el = \$(el);
\t\t\tvar title = \$el.find('[data-notify=\"title\"]').text().trim();
\t\t\tvar message = \$el.find('[data-notify=\"message\"]').html().trim();

\t\t\t// The input string might be different than the actual parsed HTML string!
\t\t\t// (<br> vs <br /> for example)
\t\t\t// So we have to force-parse this as HTML here!
\t\t\tvar isSameTitle = title === \$(\"<div>\" + notification.settings.content.title + \"</div>\").html().trim();
\t\t\tvar isSameMsg = message === \$(\"<div>\" + notification.settings.content.message + \"</div>\").html().trim();
\t\t\tvar isSameType = \$el.hasClass('alert-' + notification.settings.type);

\t\t\tif (isSameTitle && isSameMsg && isSameType) {
\t\t\t\t//we found the dupe. Set the var and stop checking.
\t\t\t\tisDupe = true;
\t\t\t}
\t\t\treturn !isDupe;
\t\t});

\t\treturn isDupe;
\t}

\tfunction Notify(element, content, options) {
\t\t// Setup Content of Notify
\t\tvar contentObj = {
\t\t\tcontent: {
\t\t\t\tmessage: typeof content === 'object' ? content.message : content,
\t\t\t\ttitle: content.title ? content.title : '',
\t\t\t\ticon: content.icon ? content.icon : '',
\t\t\t\turl: content.url ? content.url : '#',
\t\t\t\ttarget: content.target ? content.target : '-'
\t\t\t}
\t\t};

\t\toptions = \$.extend(true, {}, contentObj, options);
\t\tthis.settings = \$.extend(true, {}, defaults, options);
\t\tthis._defaults = defaults;
\t\tif (this.settings.content.target === \"-\") {
\t\t\tthis.settings.content.target = this.settings.url_target;
\t\t}
\t\tthis.animations = {
\t\t\tstart: 'webkitAnimationStart oanimationstart MSAnimationStart animationstart',
\t\t\tend: 'webkitAnimationEnd oanimationend MSAnimationEnd animationend'
\t\t};

\t\tif (typeof this.settings.offset === 'number') {
\t\t\tthis.settings.offset = {
\t\t\t\tx: this.settings.offset,
\t\t\t\ty: this.settings.offset
\t\t\t};
\t\t}

\t\t//if duplicate messages are not allowed, then only continue if this new message is not a duplicate of one that it already showing
\t\tif (this.settings.allow_duplicates || (!this.settings.allow_duplicates && !isDuplicateNotification(this))) {
\t\t\tthis.init();
\t\t}
\t}

\t\$.extend(Notify.prototype, {
\t\tinit: function () {
\t\t\tvar self = this;

\t\t\tthis.buildNotify();
\t\t\tif (this.settings.content.icon) {
\t\t\t\tthis.setIcon();
\t\t\t}
\t\t\tif (this.settings.content.url != \"#\") {
\t\t\t\tthis.styleURL();
\t\t\t}
\t\t\tthis.styleDismiss();
\t\t\tthis.placement();
\t\t\tthis.bind();

\t\t\tthis.notify = {
\t\t\t\t\$ele: this.\$ele,
\t\t\t\tupdate: function (command, update) {
\t\t\t\t\tvar commands = {};
\t\t\t\t\tif (typeof command === \"string\") {
\t\t\t\t\t\tcommands[command] = update;
\t\t\t\t\t} else {
\t\t\t\t\t\tcommands = command;
\t\t\t\t\t}
\t\t\t\t\tfor (var cmd in commands) {
\t\t\t\t\t\tswitch (cmd) {
\t\t\t\t\t\t\tcase \"type\":
\t\t\t\t\t\t\t\tthis.\$ele.removeClass('alert-' + self.settings.type);
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"progressbar\"] > .progress-bar').removeClass('progress-bar-' + self.settings.type);
\t\t\t\t\t\t\t\tself.settings.type = commands[cmd];
\t\t\t\t\t\t\t\tthis.\$ele.addClass('alert-' + commands[cmd]).find('[data-notify=\"progressbar\"] > .progress-bar').addClass('progress-bar-' + commands[cmd]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"icon\":
\t\t\t\t\t\t\t\tvar \$icon = this.\$ele.find('[data-notify=\"icon\"]');
\t\t\t\t\t\t\t\tif (self.settings.icon_type.toLowerCase() === 'class') {
\t\t\t\t\t\t\t\t\t\$icon.removeClass(self.settings.content.icon).addClass(commands[cmd]);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tif (!\$icon.is('img')) {
\t\t\t\t\t\t\t\t\t\t\$icon.find('img');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\$icon.attr('src', commands[cmd]);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"progress\":
\t\t\t\t\t\t\t\tvar newDelay = self.settings.delay - (self.settings.delay * (commands[cmd] / 100));
\t\t\t\t\t\t\t\tthis.\$ele.data('notify-delay', newDelay);
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"progressbar\"] > div').attr('aria-valuenow', commands[cmd]).css('width', commands[cmd] + '%');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"url\":
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"url\"]').attr('href', commands[cmd]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"target\":
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"url\"]').attr('target', commands[cmd]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"' + cmd + '\"]').html(commands[cmd]);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tvar posX = this.\$ele.outerHeight() + parseInt(self.settings.spacing) + parseInt(self.settings.offset.y);
\t\t\t\t\tself.reposition(posX);
\t\t\t\t},
\t\t\t\tclose: function () {
\t\t\t\t\tself.close();
\t\t\t\t}
\t\t\t};

\t\t},
\t\tbuildNotify: function () {
\t\t\tvar content = this.settings.content;
\t\t\tthis.\$ele = \$(String.format(this.settings.template, this.settings.type, content.title, content.message, content.url, content.target));
\t\t\tthis.\$ele.attr('data-notify-position', this.settings.placement.from + '-' + this.settings.placement.align);
\t\t\tif (!this.settings.allow_dismiss) {
\t\t\t\tthis.\$ele.find('[data-notify=\"dismiss\"]').css('display', 'none');
\t\t\t}
\t\t\tif ((this.settings.delay <= 0 && !this.settings.showProgressbar) || !this.settings.showProgressbar) {
\t\t\t\tthis.\$ele.find('[data-notify=\"progressbar\"]').remove();
\t\t\t}
\t\t},
\t\tsetIcon: function () {

    \t\tthis.\$ele.addClass('alert-with-icon');

\t\t\tif (this.settings.icon_type.toLowerCase() === 'class') {
\t\t\t\tthis.\$ele.find('[data-notify=\"icon\"]').addClass(this.settings.content.icon);
\t\t\t} else {
\t\t\t\tif (this.\$ele.find('[data-notify=\"icon\"]').is('img')) {
\t\t\t\t\tthis.\$ele.find('[data-notify=\"icon\"]').attr('src', this.settings.content.icon);
\t\t\t\t} else {
\t\t\t\t\tthis.\$ele.find('[data-notify=\"icon\"]').append('<img src=\"' + this.settings.content.icon + '\" alt=\"Notify Icon\" />');
\t\t\t\t}
\t\t\t}
\t\t},
\t\tstyleDismiss: function () {
\t\t\tthis.\$ele.find('[data-notify=\"dismiss\"]').css({
\t\t\t\tposition: 'absolute',
\t\t\t\tright: '10px',
\t\t\t\ttop: '50%',
\t\t\t\tmarginTop: '-13px',
\t\t\t\tzIndex: this.settings.z_index + 2
\t\t\t});
\t\t},
\t\tstyleURL: function () {
\t\t\tthis.\$ele.find('[data-notify=\"url\"]').css({
\t\t\t\tbackgroundImage: 'url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)',
\t\t\t\theight: '100%',
\t\t\t\tleft: 0,
\t\t\t\tposition: 'absolute',
\t\t\t\ttop: 0,
\t\t\t\twidth: '100%',
\t\t\t\tzIndex: this.settings.z_index + 1
\t\t\t});
\t\t},
\t\tplacement: function () {
\t\t\tvar self = this,
\t\t\t\toffsetAmt = this.settings.offset.y,
\t\t\t\tcss = {
\t\t\t\t\tdisplay: 'inline-block',
\t\t\t\t\tmargin: '0px auto',
\t\t\t\t\tposition: this.settings.position ? this.settings.position : (this.settings.element === 'body' ? 'fixed' : 'absolute'),
\t\t\t\t\ttransition: 'all .5s ease-in-out',
\t\t\t\t\tzIndex: this.settings.z_index
\t\t\t\t},
\t\t\t\thasAnimation = false,
\t\t\t\tsettings = this.settings;

\t\t\t\$('[data-notify-position=\"' + this.settings.placement.from + '-' + this.settings.placement.align + '\"]:not([data-closing=\"true\"])').each(function () {
\t\t\t\toffsetAmt = Math.max(offsetAmt, parseInt(\$(this).css(settings.placement.from)) + parseInt(\$(this).outerHeight()) + parseInt(settings.spacing));
\t\t\t});
\t\t\tif (this.settings.newest_on_top === true) {
\t\t\t\toffsetAmt = this.settings.offset.y;
\t\t\t}
\t\t\tcss[this.settings.placement.from] = offsetAmt + 'px';

\t\t\tswitch (this.settings.placement.align) {
\t\t\t\tcase \"left\":
\t\t\t\tcase \"right\":
\t\t\t\t\tcss[this.settings.placement.align] = this.settings.offset.x + 'px';
\t\t\t\t\tbreak;
\t\t\t\tcase \"center\":
\t\t\t\t\tcss.left = 0;
\t\t\t\t\tcss.right = 0;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tthis.\$ele.css(css).addClass(this.settings.animate.enter);
\t\t\t\$.each(Array('webkit-', 'moz-', 'o-', 'ms-', ''), function (index, prefix) {
\t\t\t\tself.\$ele[0].style[prefix + 'AnimationIterationCount'] = 1;
\t\t\t});

\t\t\t\$(this.settings.element).append(this.\$ele);

\t\t\tif (this.settings.newest_on_top === true) {
\t\t\t\toffsetAmt = (parseInt(offsetAmt) + parseInt(this.settings.spacing)) + this.\$ele.outerHeight();
\t\t\t\tthis.reposition(offsetAmt);
\t\t\t}

\t\t\tif (\$.isFunction(self.settings.onShow)) {
\t\t\t\tself.settings.onShow.call(this.\$ele);
\t\t\t}

\t\t\tthis.\$ele.one(this.animations.start, function () {
\t\t\t\thasAnimation = true;
\t\t\t}).one(this.animations.end, function () {
\t\t\t\tif (\$.isFunction(self.settings.onShown)) {
\t\t\t\t\tself.settings.onShown.call(this);
\t\t\t\t}
\t\t\t});

\t\t\tsetTimeout(function () {
\t\t\t\tif (!hasAnimation) {
\t\t\t\t\tif (\$.isFunction(self.settings.onShown)) {
\t\t\t\t\t\tself.settings.onShown.call(this);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, 600);
\t\t},
\t\tbind: function () {
\t\t\tvar self = this;

\t\t\tthis.\$ele.find('[data-notify=\"dismiss\"]').on('click', function () {
\t\t\t\tself.close();
\t\t\t});

\t\t\tthis.\$ele.mouseover(function () {
\t\t\t\t\$(this).data('data-hover', \"true\");
\t\t\t}).mouseout(function () {
\t\t\t\t\$(this).data('data-hover', \"false\");
\t\t\t});
\t\t\tthis.\$ele.data('data-hover', \"false\");

\t\t\tif (this.settings.delay > 0) {
\t\t\t\tself.\$ele.data('notify-delay', self.settings.delay);
\t\t\t\tvar timer = setInterval(function () {
\t\t\t\t\tvar delay = parseInt(self.\$ele.data('notify-delay')) - self.settings.timer;
\t\t\t\t\tif ((self.\$ele.data('data-hover') === 'false' && self.settings.mouse_over === \"pause\") || self.settings.mouse_over != \"pause\") {
\t\t\t\t\t\tvar percent = ((self.settings.delay - delay) / self.settings.delay) * 100;
\t\t\t\t\t\tself.\$ele.data('notify-delay', delay);
\t\t\t\t\t\tself.\$ele.find('[data-notify=\"progressbar\"] > div').attr('aria-valuenow', percent).css('width', percent + '%');
\t\t\t\t\t}
\t\t\t\t\tif (delay <= -(self.settings.timer)) {
\t\t\t\t\t\tclearInterval(timer);
\t\t\t\t\t\tself.close();
\t\t\t\t\t}
\t\t\t\t}, self.settings.timer);
\t\t\t}
\t\t},
\t\tclose: function () {
\t\t\tvar self = this,
\t\t\t\tposX = parseInt(this.\$ele.css(this.settings.placement.from)),
\t\t\t\thasAnimation = false;

\t\t\tthis.\$ele.data('closing', 'true').addClass(this.settings.animate.exit);
\t\t\tself.reposition(posX);

\t\t\tif (\$.isFunction(self.settings.onClose)) {
\t\t\t\tself.settings.onClose.call(this.\$ele);
\t\t\t}

\t\t\tthis.\$ele.one(this.animations.start, function () {
\t\t\t\thasAnimation = true;
\t\t\t}).one(this.animations.end, function () {
\t\t\t\t\$(this).remove();
\t\t\t\tif (\$.isFunction(self.settings.onClosed)) {
\t\t\t\t\tself.settings.onClosed.call(this);
\t\t\t\t}
\t\t\t});

\t\t\tsetTimeout(function () {
\t\t\t\tif (!hasAnimation) {
\t\t\t\t\tself.\$ele.remove();
\t\t\t\t\tif (self.settings.onClosed) {
\t\t\t\t\t\tself.settings.onClosed(self.\$ele);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, 600);
\t\t},
\t\treposition: function (posX) {
\t\t\tvar self = this,
\t\t\t\tnotifies = '[data-notify-position=\"' + this.settings.placement.from + '-' + this.settings.placement.align + '\"]:not([data-closing=\"true\"])',
\t\t\t\t\$elements = this.\$ele.nextAll(notifies);
\t\t\tif (this.settings.newest_on_top === true) {
\t\t\t\t\$elements = this.\$ele.prevAll(notifies);
\t\t\t}
\t\t\t\$elements.each(function () {
\t\t\t\t\$(this).css(self.settings.placement.from, posX);
\t\t\t\tposX = (parseInt(posX) + parseInt(self.settings.spacing)) + \$(this).outerHeight();
\t\t\t});
\t\t}
\t});

\t\$.notify = function (content, options) {
\t\tvar plugin = new Notify(this, content, options);
\t\treturn plugin.notify;
\t};
\t\$.notifyDefaults = function (options) {
\t\tdefaults = \$.extend(true, {}, defaults, options);
\t\treturn defaults;
\t};
\t\$.notifyClose = function (command) {
\t\tif (typeof command === \"undefined\" || command === \"all\") {
\t\t\t\$('[data-notify]').find('[data-notify=\"dismiss\"]').trigger('click');
\t\t} else {
\t\t\t\$('[data-notify-position=\"' + command + '\"]').find('[data-notify=\"dismiss\"]').trigger('click');
\t\t}
\t};

}));
";
        
        $__internal_16473923f21fdf67727cc4e667bf01b3231f8763fa496e889e80692246b3854f->leave($__internal_16473923f21fdf67727cc4e667bf01b3231f8763fa496e889e80692246b3854f_prof);

    }

    public function getTemplateName()
    {
        return "assets/bootstrap-notify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*



     Creative Tim Modifications

     Lines: 239, 240 was changed from top: 5px to top: 50% and we added margin-top: -13px. In this way the close button will be aligned vertically
     Line:242 - modified when the icon is set, we add the class \"alert-with-icon\", so there will be enough space for the icon.




*/

/*
* Project: Bootstrap Notify = v3.1.5
* Description: Turns standard Bootstrap alerts into \"Growl-like\" notifications.
* Author: Mouse0270 aka Robert McIntosh
* License: MIT License
* Website: https://github.com/mouse0270/bootstrap-growl
*/

/* global define:false, require: false, jQuery:false */

(function (factory) {
\tif (typeof define === 'function' && define.amd) {
\t\t// AMD. Register as an anonymous module.
\t\tdefine(['jquery'], factory);
\t} else if (typeof exports === 'object') {
\t\t// Node/CommonJS
\t\tfactory(require('jquery'));
\t} else {
\t\t// Browser globals
\t\tfactory(jQuery);
\t}
}(function (\$) {
\t// Create the defaults once
\tvar defaults = {
\t\telement: 'body',
\t\tposition: null,
\t\ttype: \"info\",
\t\tallow_dismiss: true,
\t\tallow_duplicates: true,
\t\tnewest_on_top: false,
\t\tshowProgressbar: false,
\t\tplacement: {
\t\t\tfrom: \"top\",
\t\t\talign: \"right\"
\t\t},
\t\toffset: 20,
\t\tspacing: 10,
\t\tz_index: 1031,
\t\tdelay: 5000,
\t\ttimer: 1000,
\t\turl_target: '_blank',
\t\tmouse_over: null,
\t\tanimate: {
\t\t\tenter: 'animated fadeInDown',
\t\t\texit: 'animated fadeOutUp'
\t\t},
\t\tonShow: null,
\t\tonShown: null,
\t\tonClose: null,
\t\tonClosed: null,
\t\ticon_type: 'class',
\t\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-4 alert alert-{0}\" role=\"alert\"><button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&times;</button><span data-notify=\"icon\"></span> <span data-notify=\"title\">{1}</span> <span data-notify=\"message\">{2}</span><div class=\"progress\" data-notify=\"progressbar\"><div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div></div><a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a></div>'
\t};

\tString.format = function () {
\t\tvar str = arguments[0];
\t\tfor (var i = 1; i < arguments.length; i++) {
\t\t\tstr = str.replace(RegExp(\"\\\\{\" + (i - 1) + \"\\\\}\", \"gm\"), arguments[i]);
\t\t}
\t\treturn str;
\t};

\tfunction isDuplicateNotification(notification) {
\t\tvar isDupe = false;

\t\t\$('[data-notify=\"container\"]').each(function (i, el) {
\t\t\tvar \$el = \$(el);
\t\t\tvar title = \$el.find('[data-notify=\"title\"]').text().trim();
\t\t\tvar message = \$el.find('[data-notify=\"message\"]').html().trim();

\t\t\t// The input string might be different than the actual parsed HTML string!
\t\t\t// (<br> vs <br /> for example)
\t\t\t// So we have to force-parse this as HTML here!
\t\t\tvar isSameTitle = title === \$(\"<div>\" + notification.settings.content.title + \"</div>\").html().trim();
\t\t\tvar isSameMsg = message === \$(\"<div>\" + notification.settings.content.message + \"</div>\").html().trim();
\t\t\tvar isSameType = \$el.hasClass('alert-' + notification.settings.type);

\t\t\tif (isSameTitle && isSameMsg && isSameType) {
\t\t\t\t//we found the dupe. Set the var and stop checking.
\t\t\t\tisDupe = true;
\t\t\t}
\t\t\treturn !isDupe;
\t\t});

\t\treturn isDupe;
\t}

\tfunction Notify(element, content, options) {
\t\t// Setup Content of Notify
\t\tvar contentObj = {
\t\t\tcontent: {
\t\t\t\tmessage: typeof content === 'object' ? content.message : content,
\t\t\t\ttitle: content.title ? content.title : '',
\t\t\t\ticon: content.icon ? content.icon : '',
\t\t\t\turl: content.url ? content.url : '#',
\t\t\t\ttarget: content.target ? content.target : '-'
\t\t\t}
\t\t};

\t\toptions = \$.extend(true, {}, contentObj, options);
\t\tthis.settings = \$.extend(true, {}, defaults, options);
\t\tthis._defaults = defaults;
\t\tif (this.settings.content.target === \"-\") {
\t\t\tthis.settings.content.target = this.settings.url_target;
\t\t}
\t\tthis.animations = {
\t\t\tstart: 'webkitAnimationStart oanimationstart MSAnimationStart animationstart',
\t\t\tend: 'webkitAnimationEnd oanimationend MSAnimationEnd animationend'
\t\t};

\t\tif (typeof this.settings.offset === 'number') {
\t\t\tthis.settings.offset = {
\t\t\t\tx: this.settings.offset,
\t\t\t\ty: this.settings.offset
\t\t\t};
\t\t}

\t\t//if duplicate messages are not allowed, then only continue if this new message is not a duplicate of one that it already showing
\t\tif (this.settings.allow_duplicates || (!this.settings.allow_duplicates && !isDuplicateNotification(this))) {
\t\t\tthis.init();
\t\t}
\t}

\t\$.extend(Notify.prototype, {
\t\tinit: function () {
\t\t\tvar self = this;

\t\t\tthis.buildNotify();
\t\t\tif (this.settings.content.icon) {
\t\t\t\tthis.setIcon();
\t\t\t}
\t\t\tif (this.settings.content.url != \"#\") {
\t\t\t\tthis.styleURL();
\t\t\t}
\t\t\tthis.styleDismiss();
\t\t\tthis.placement();
\t\t\tthis.bind();

\t\t\tthis.notify = {
\t\t\t\t\$ele: this.\$ele,
\t\t\t\tupdate: function (command, update) {
\t\t\t\t\tvar commands = {};
\t\t\t\t\tif (typeof command === \"string\") {
\t\t\t\t\t\tcommands[command] = update;
\t\t\t\t\t} else {
\t\t\t\t\t\tcommands = command;
\t\t\t\t\t}
\t\t\t\t\tfor (var cmd in commands) {
\t\t\t\t\t\tswitch (cmd) {
\t\t\t\t\t\t\tcase \"type\":
\t\t\t\t\t\t\t\tthis.\$ele.removeClass('alert-' + self.settings.type);
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"progressbar\"] > .progress-bar').removeClass('progress-bar-' + self.settings.type);
\t\t\t\t\t\t\t\tself.settings.type = commands[cmd];
\t\t\t\t\t\t\t\tthis.\$ele.addClass('alert-' + commands[cmd]).find('[data-notify=\"progressbar\"] > .progress-bar').addClass('progress-bar-' + commands[cmd]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"icon\":
\t\t\t\t\t\t\t\tvar \$icon = this.\$ele.find('[data-notify=\"icon\"]');
\t\t\t\t\t\t\t\tif (self.settings.icon_type.toLowerCase() === 'class') {
\t\t\t\t\t\t\t\t\t\$icon.removeClass(self.settings.content.icon).addClass(commands[cmd]);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tif (!\$icon.is('img')) {
\t\t\t\t\t\t\t\t\t\t\$icon.find('img');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\$icon.attr('src', commands[cmd]);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"progress\":
\t\t\t\t\t\t\t\tvar newDelay = self.settings.delay - (self.settings.delay * (commands[cmd] / 100));
\t\t\t\t\t\t\t\tthis.\$ele.data('notify-delay', newDelay);
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"progressbar\"] > div').attr('aria-valuenow', commands[cmd]).css('width', commands[cmd] + '%');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"url\":
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"url\"]').attr('href', commands[cmd]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase \"target\":
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"url\"]').attr('target', commands[cmd]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\tthis.\$ele.find('[data-notify=\"' + cmd + '\"]').html(commands[cmd]);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tvar posX = this.\$ele.outerHeight() + parseInt(self.settings.spacing) + parseInt(self.settings.offset.y);
\t\t\t\t\tself.reposition(posX);
\t\t\t\t},
\t\t\t\tclose: function () {
\t\t\t\t\tself.close();
\t\t\t\t}
\t\t\t};

\t\t},
\t\tbuildNotify: function () {
\t\t\tvar content = this.settings.content;
\t\t\tthis.\$ele = \$(String.format(this.settings.template, this.settings.type, content.title, content.message, content.url, content.target));
\t\t\tthis.\$ele.attr('data-notify-position', this.settings.placement.from + '-' + this.settings.placement.align);
\t\t\tif (!this.settings.allow_dismiss) {
\t\t\t\tthis.\$ele.find('[data-notify=\"dismiss\"]').css('display', 'none');
\t\t\t}
\t\t\tif ((this.settings.delay <= 0 && !this.settings.showProgressbar) || !this.settings.showProgressbar) {
\t\t\t\tthis.\$ele.find('[data-notify=\"progressbar\"]').remove();
\t\t\t}
\t\t},
\t\tsetIcon: function () {

    \t\tthis.\$ele.addClass('alert-with-icon');

\t\t\tif (this.settings.icon_type.toLowerCase() === 'class') {
\t\t\t\tthis.\$ele.find('[data-notify=\"icon\"]').addClass(this.settings.content.icon);
\t\t\t} else {
\t\t\t\tif (this.\$ele.find('[data-notify=\"icon\"]').is('img')) {
\t\t\t\t\tthis.\$ele.find('[data-notify=\"icon\"]').attr('src', this.settings.content.icon);
\t\t\t\t} else {
\t\t\t\t\tthis.\$ele.find('[data-notify=\"icon\"]').append('<img src=\"' + this.settings.content.icon + '\" alt=\"Notify Icon\" />');
\t\t\t\t}
\t\t\t}
\t\t},
\t\tstyleDismiss: function () {
\t\t\tthis.\$ele.find('[data-notify=\"dismiss\"]').css({
\t\t\t\tposition: 'absolute',
\t\t\t\tright: '10px',
\t\t\t\ttop: '50%',
\t\t\t\tmarginTop: '-13px',
\t\t\t\tzIndex: this.settings.z_index + 2
\t\t\t});
\t\t},
\t\tstyleURL: function () {
\t\t\tthis.\$ele.find('[data-notify=\"url\"]').css({
\t\t\t\tbackgroundImage: 'url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)',
\t\t\t\theight: '100%',
\t\t\t\tleft: 0,
\t\t\t\tposition: 'absolute',
\t\t\t\ttop: 0,
\t\t\t\twidth: '100%',
\t\t\t\tzIndex: this.settings.z_index + 1
\t\t\t});
\t\t},
\t\tplacement: function () {
\t\t\tvar self = this,
\t\t\t\toffsetAmt = this.settings.offset.y,
\t\t\t\tcss = {
\t\t\t\t\tdisplay: 'inline-block',
\t\t\t\t\tmargin: '0px auto',
\t\t\t\t\tposition: this.settings.position ? this.settings.position : (this.settings.element === 'body' ? 'fixed' : 'absolute'),
\t\t\t\t\ttransition: 'all .5s ease-in-out',
\t\t\t\t\tzIndex: this.settings.z_index
\t\t\t\t},
\t\t\t\thasAnimation = false,
\t\t\t\tsettings = this.settings;

\t\t\t\$('[data-notify-position=\"' + this.settings.placement.from + '-' + this.settings.placement.align + '\"]:not([data-closing=\"true\"])').each(function () {
\t\t\t\toffsetAmt = Math.max(offsetAmt, parseInt(\$(this).css(settings.placement.from)) + parseInt(\$(this).outerHeight()) + parseInt(settings.spacing));
\t\t\t});
\t\t\tif (this.settings.newest_on_top === true) {
\t\t\t\toffsetAmt = this.settings.offset.y;
\t\t\t}
\t\t\tcss[this.settings.placement.from] = offsetAmt + 'px';

\t\t\tswitch (this.settings.placement.align) {
\t\t\t\tcase \"left\":
\t\t\t\tcase \"right\":
\t\t\t\t\tcss[this.settings.placement.align] = this.settings.offset.x + 'px';
\t\t\t\t\tbreak;
\t\t\t\tcase \"center\":
\t\t\t\t\tcss.left = 0;
\t\t\t\t\tcss.right = 0;
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tthis.\$ele.css(css).addClass(this.settings.animate.enter);
\t\t\t\$.each(Array('webkit-', 'moz-', 'o-', 'ms-', ''), function (index, prefix) {
\t\t\t\tself.\$ele[0].style[prefix + 'AnimationIterationCount'] = 1;
\t\t\t});

\t\t\t\$(this.settings.element).append(this.\$ele);

\t\t\tif (this.settings.newest_on_top === true) {
\t\t\t\toffsetAmt = (parseInt(offsetAmt) + parseInt(this.settings.spacing)) + this.\$ele.outerHeight();
\t\t\t\tthis.reposition(offsetAmt);
\t\t\t}

\t\t\tif (\$.isFunction(self.settings.onShow)) {
\t\t\t\tself.settings.onShow.call(this.\$ele);
\t\t\t}

\t\t\tthis.\$ele.one(this.animations.start, function () {
\t\t\t\thasAnimation = true;
\t\t\t}).one(this.animations.end, function () {
\t\t\t\tif (\$.isFunction(self.settings.onShown)) {
\t\t\t\t\tself.settings.onShown.call(this);
\t\t\t\t}
\t\t\t});

\t\t\tsetTimeout(function () {
\t\t\t\tif (!hasAnimation) {
\t\t\t\t\tif (\$.isFunction(self.settings.onShown)) {
\t\t\t\t\t\tself.settings.onShown.call(this);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, 600);
\t\t},
\t\tbind: function () {
\t\t\tvar self = this;

\t\t\tthis.\$ele.find('[data-notify=\"dismiss\"]').on('click', function () {
\t\t\t\tself.close();
\t\t\t});

\t\t\tthis.\$ele.mouseover(function () {
\t\t\t\t\$(this).data('data-hover', \"true\");
\t\t\t}).mouseout(function () {
\t\t\t\t\$(this).data('data-hover', \"false\");
\t\t\t});
\t\t\tthis.\$ele.data('data-hover', \"false\");

\t\t\tif (this.settings.delay > 0) {
\t\t\t\tself.\$ele.data('notify-delay', self.settings.delay);
\t\t\t\tvar timer = setInterval(function () {
\t\t\t\t\tvar delay = parseInt(self.\$ele.data('notify-delay')) - self.settings.timer;
\t\t\t\t\tif ((self.\$ele.data('data-hover') === 'false' && self.settings.mouse_over === \"pause\") || self.settings.mouse_over != \"pause\") {
\t\t\t\t\t\tvar percent = ((self.settings.delay - delay) / self.settings.delay) * 100;
\t\t\t\t\t\tself.\$ele.data('notify-delay', delay);
\t\t\t\t\t\tself.\$ele.find('[data-notify=\"progressbar\"] > div').attr('aria-valuenow', percent).css('width', percent + '%');
\t\t\t\t\t}
\t\t\t\t\tif (delay <= -(self.settings.timer)) {
\t\t\t\t\t\tclearInterval(timer);
\t\t\t\t\t\tself.close();
\t\t\t\t\t}
\t\t\t\t}, self.settings.timer);
\t\t\t}
\t\t},
\t\tclose: function () {
\t\t\tvar self = this,
\t\t\t\tposX = parseInt(this.\$ele.css(this.settings.placement.from)),
\t\t\t\thasAnimation = false;

\t\t\tthis.\$ele.data('closing', 'true').addClass(this.settings.animate.exit);
\t\t\tself.reposition(posX);

\t\t\tif (\$.isFunction(self.settings.onClose)) {
\t\t\t\tself.settings.onClose.call(this.\$ele);
\t\t\t}

\t\t\tthis.\$ele.one(this.animations.start, function () {
\t\t\t\thasAnimation = true;
\t\t\t}).one(this.animations.end, function () {
\t\t\t\t\$(this).remove();
\t\t\t\tif (\$.isFunction(self.settings.onClosed)) {
\t\t\t\t\tself.settings.onClosed.call(this);
\t\t\t\t}
\t\t\t});

\t\t\tsetTimeout(function () {
\t\t\t\tif (!hasAnimation) {
\t\t\t\t\tself.\$ele.remove();
\t\t\t\t\tif (self.settings.onClosed) {
\t\t\t\t\t\tself.settings.onClosed(self.\$ele);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, 600);
\t\t},
\t\treposition: function (posX) {
\t\t\tvar self = this,
\t\t\t\tnotifies = '[data-notify-position=\"' + this.settings.placement.from + '-' + this.settings.placement.align + '\"]:not([data-closing=\"true\"])',
\t\t\t\t\$elements = this.\$ele.nextAll(notifies);
\t\t\tif (this.settings.newest_on_top === true) {
\t\t\t\t\$elements = this.\$ele.prevAll(notifies);
\t\t\t}
\t\t\t\$elements.each(function () {
\t\t\t\t\$(this).css(self.settings.placement.from, posX);
\t\t\t\tposX = (parseInt(posX) + parseInt(self.settings.spacing)) + \$(this).outerHeight();
\t\t\t});
\t\t}
\t});

\t\$.notify = function (content, options) {
\t\tvar plugin = new Notify(this, content, options);
\t\treturn plugin.notify;
\t};
\t\$.notifyDefaults = function (options) {
\t\tdefaults = \$.extend(true, {}, defaults, options);
\t\treturn defaults;
\t};
\t\$.notifyClose = function (command) {
\t\tif (typeof command === \"undefined\" || command === \"all\") {
\t\t\t\$('[data-notify]').find('[data-notify=\"dismiss\"]').trigger('click');
\t\t} else {
\t\t\t\$('[data-notify-position=\"' + command + '\"]').find('[data-notify=\"dismiss\"]').trigger('click');
\t\t}
\t};

}));
", "assets/bootstrap-notify.js", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/bootstrap-notify.js");
    }
}

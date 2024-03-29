(function() {
  var api = wp.customize;

  api.bind('ready', function() {
    api.control('archive-post-layout').container.remove();
    api.control.remove('archive-post-layout');

    api.control('post-layout').container.remove();
    api.control.remove('post-layout');

    api.control('container-max-width').container.remove();
    api.control.remove('container-max-width');

    api.control('base-font').container.remove();
    api.control.remove('base-font');

    api.control('header-layout').container.remove();
    api.control.remove('header-layout');

    api.control('header-position').container.remove();
    api.control.remove('header-position');

    api.control('breadcrumbs-position').container.remove();
    api.control.remove('breadcrumbs-position');

    api.control('default-page-header-image').container.remove();
    api.control.remove('default-page-header-image');

    api.control('post-eyecatch').container.remove();
    api.control.remove('post-eyecatch');

    api.control('page-eyecatch').container.remove();
    api.control.remove('page-eyecatch');

    api.control('infobar-content').container.remove();
    api.control.remove('infobar-content');

    api.control('mwt-share-buttons-display-position').container.remove();
    api.control.remove('mwt-share-buttons-display-position');
  });
})(jQuery);

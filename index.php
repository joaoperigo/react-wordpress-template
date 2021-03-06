<?php
  $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php $BRC_TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH); ?>
<script src='<?php echo $BRC_TEMPLATE_PATH; ?>/react-src/node_modules/@devloco/create-react-wptheme-utils/wpThemeClient.js'></script>

<script src='<?php echo $BRC_TEMPLATE_PATH; ?>/react-src/node_modules/@devloco/create-react-wptheme-utils/wpThemeErrorOverlay.js'></script>

<script> wpThemeClient.start("ws", "127.0.0.1", "8090"); </script>

<meta charset="utf-8" />
    <link rel="shortcut icon" href="/_docdesk/wordpress/wp-content/themes/react_theme/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-wptheme"
    />
    <link rel="apple-touch-icon" href="<?php echo $TEMPLATE_PATH; ?>/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="<?php echo $TEMPLATE_PATH; ?>/manifest.json" />
    <!--
        If you're reading this from "view source" in your browser, it might not make sense as
        these tokens have already been evaluated and replaced, even in this remark blurb.

        Notice the use of "php echo $TEMPLATE_PATH;" and /_docdesk/wordpress/wp-content/themes/react_theme in the tags above.
        Both will be replaced with the URL of the `public` folder during the build (/_docdesk/wordpress/wp-content/themes/react_theme) or
        at render time (php echo $TEMPLATE_PATH;)
        Only files inside the `public` folder can be referenced like this.

        Unlike "/favicon.ico" or "favicon.ico", "/_docdesk/wordpress/wp-content/themes/react_theme/favicon.ico" will
        work correctly both with client-side routing and a non-root public URL.
        Learn how to configure a non-root public URL by running `npm run wpbuild`.
    -->
    <title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
<link href="/_docdesk/wordpress/wp-content/themes/react_theme/static/css/main.chunk.css?0d87129e5b5f75c40346" rel="stylesheet"></head>
    <body>
    <noscript>
        You need to enable JavaScript to run this app.
    </noscript>
    <div id="root"></div>
    <!--
        This PHP file is a template.
        If you open it directly in the browser, you will see an empty page.

        You can add webfonts, meta tags, or analytics to this file.
        The build step will place the bundled scripts into the <body> tag.

        To begin the development, run `npm run wpstart` or `yarn wpstart`.
        To create a production bundle, use `npm run wpbuild` or `yarn wpbuild`.
    -->
    <script src="/_docdesk/wordpress/wp-content/themes/react_theme/static/js/bundle.js?0d87129e5b5f75c40346"></script><script src="/_docdesk/wordpress/wp-content/themes/react_theme/static/js/1.chunk.js?0d87129e5b5f75c40346"></script><script src="/_docdesk/wordpress/wp-content/themes/react_theme/static/js/main.chunk.js?0d87129e5b5f75c40346"></script></body>
</html>

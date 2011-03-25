<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!--[if IE]>
      <link rel="stylesheet" href="/css/blueprint/ie.css" type="text/css" media="screen, projection">
    <![endif]-->
  </head>
  <body>
    <div id="container">
      <div id="header" class="span-24 last">
        <h1 id="ijani">IJENI</h1>
      </div>
      <hr/>
      <div class="span-6" id="sidebar">
        <?php include_component('common', 'filter') ?>
      </div>
      <div class="span-17 last" id="content">
        <?php echo $sf_content ?>
      </div>
    </div>
  </body>
</html>

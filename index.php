<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Famstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="using famfamfam icons with twitter bootstrap">
        <meta name="author" content="Maxime AILLOUD">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/famstrap.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
    </head>

    <body data-spy="scroll">

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="./index.php">Famstrap</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#overview">Overview</a></li>
                            <li class=""><a href="#icons">Silk icons</a></li>
                            <li class=""><a href="#examples">Examples</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div id="overview" class="hero-unit">
                <h1>Famstrap</h1>
                <p>The famfamfam icons for use with Twitter Bootstrap</p>
                <a class="btn btn-primary btn-large" href="https://github.com/mailloud/famstrap">View project on GitHub</a>
                <a class="btn btn-large" href="https://github.com/mailloud/famstrap/zipball/master">Download Famstrap</a>
            </div>

            <section id="icons">
                <div class="page-header">
                    <h1>Silk icons <small>Provided by <a href="http://www.famfamfam.com/lab/icons/silk/">famfamfam</a></small></h1>
                </div>

                <div class="row">
<?php

$files = new DirectoryIterator(__DIR__ . '/famfamfam_silk_icons_v013/icons');
$i = 0;
foreach($files as $file)
{
    if(false === $file->isDot())
    {
        if(0 === $i || 250 === $i || 500 === $i || 750 === $i)
        {
?>
                    <div class="span3">
                        <ul class="the-icons">
<?php
        }
?>
                            <li><i class="fam_<?php echo $file->getBasename('.png') ?>" role="img"></i> fam_<?php echo $file->getBasename('.png') ?></li>
<?php
        $i++;
        if(0 === $i || 250 === $i || 500 === $i || 750 === $i || 1000 === $i)
        {
?>
                        </ul>
                    </div>
<?php
        }
    }
}
?>
                </div>

                <div class="row">
                    <div class="span4">
                        <h3>Built as a sprite</h3>
                        <p>Instead of making every icon an extra request, we've compiled them into a sprite—a bunch of images in one file that uses CSS to position the images with <code>background-position</code>. This is the same method we use on Twitter.com and it has worked well for us.</p>
                        <p>All icons classes are prefixed with <code>.fam_</code> for proper namespacing and scoping, much like our other components. This will help avoid conflicts with other tools.</p>
                        <p><a href="http://www.famfamfam.com/lab/icons/silk/">famfamfam</a> (current version 1.3) provided a smooth, free icon set, containing over 1000 16-by-16 pixel icons in strokably-soft PNG format. Containing a large variety of icons, you're sure to find something that tickles your fancy. And all for a low low price of $0.00. You can't say fairer than that.</p>
                    </div>
                    <div class="span4">
                        <h3>How to use</h3>
                        <p>Famstrap uses an <code>&lt;i&gt;</code> tag for all icons, but they have no case class—only a shared prefix. To use, place the following code just about anywhere:</p>
                        <pre class="prettyprint linenums">&lt;i class="fam_page_edit" role="img"&gt;&lt;/i&gt;</pre>
                        <p>There are also styles available for inverted (white) icons, made ready with one extra class:</p>
                        <p>There are 1000 classes to choose from for your icons. Just add an <code>&lt;i&gt;</code> tag with the right classes and you're set. You can find the full list in <strong>famfamfam-sprite-icons.css</strong> or right here in this document.</p>
                        <p>
                            <span class="label label-info">Heads up!</span>
                            When using beside strings of text, as in buttons or nav links, be sure to leave a space after the <code>&lt;i&gt;</code> tag for proper spacing.
                        </p>
                    </div>
                    <div class="span4">
                        <h3>Use cases</h3>
                        <p>Icons are great, but where would one use them? Here are a few ideas:</p>
                        <ul>
                            <li>As visuals for your sidebar navigation</li>
                            <li>For a purely icon-driven navigation</li>
                            <li>For buttons to help convey the meaning of an action</li>
                            <li>With links to share context on a user's destination</li>
                        </ul>
                        <p>Essentially, anywhere you can put an <code>&lt;i&gt;</code> tag, you can put an icon.</p>
                    </div>
                </div>

                <section id="integration">
                    <h1>Integration</h1>
                    <p>It's easy to integrate Famstrap into Twitter Bootstrap, or even use it on its own.</p>

                    <div class="row">
                        <div class="span3">
                            <h3>Twitter Bootstrap using CSS</h3>
                            <p>Use this method if integrating with Twitter Bootstrap using CSS.</p>
                        </div>
                        <div class="span9">
                            <ol>
                                <li>Download Twitter Bootstrap.</li>
                                <li>Download Famstrap.</li>
                                <li>Copy famstrap.css and famstrap-sprite-icons.png into your project.</li>
                                <li>
                                    In the <code>&lt;head&gt;</code> of your html, reference the location to your font-awesome.css.
                                    <pre class="prettyprint linenums">&lt;link rel="stylesheet" href="../css/bootstrap.css"&gt;
    &lt;link rel="stylesheet" href="../css/famstrap.css"&gt;</pre>
                                </li>
                                <li>Check out the examples to start using Famstrap with Twitter Bootstrap</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                    <div class="span3">
                        <h3>Not using Bootstrap?</h3>
                        <p>Famstrap works just as well without Twitter Bootstrap.</p>
                    </div>
                    <div class="span9">
                        <ol>
                            <li>Download Famstrap.</li>
                            <li>Copy famstrap.css and famstrap-sprite-icons.png into your project.</li>
                            <li>Check out the examples to start using Famstrap</li>
                        </ol>
                    </div>
                    </div>
                </section>

                <section id="examples">
                    <h1>Examples</h1>
                    <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>

                    <div class="row">
                        <div class="span4">
                            <div class="btn-toolbar" style="margin-bottom: 9px">
                                <div class="btn-group">
                                    <a class="btn" href="#"><i class="fam_text_align_left"></i></a>
                                    <a class="btn" href="#"><i class="fam_text_align_center"></i></a>
                                    <a class="btn" href="#"><i class="fam_text_align_right"></i></a>
                                    <a class="btn" href="#"><i class="fam_text_align_justify"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fam_user"></i> User</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fam_user_edit"></i> Edit</a></li>
                                        <li><a href="#"><i class="fam_user_delete"></i> Delete</a></li>
                                        <li><a href="#"><i class="fam_user_red"></i> Ban</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="i"></i> Make admin</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>
                                <a class="btn" href="#"><i class="fam_arrow_refresh"></i> Refresh</a>
                                <a class="btn btn-success" href="#"><i class="fam_cart"></i> Checkout</a>
                                <a class="btn btn-danger" href="#"><i class="fam_bin_closed"></i> Delete</a>
                            </p>
                            <p>
                                <a class="btn btn-large" href="#"><i class="fam_comment"></i> Comment</a>
                                <a class="btn btn-small" href="#"><i class="fam_cog"></i> Settings</a>
                                <a class="btn btn-small btn-info" href="#"><i class="fam_information"></i> More Info</a>
                            </p>
                        </div>
                        <div class="span4">
                            <div class="well" style="padding: 8px 0;">
                                <ul class="nav nav-list">
                                    <li class="active"><a href="#"><i class="fam_house"></i> Home</a></li>
                                    <li><a href="#"><i class="fam_book"></i> Library</a></li>
                                    <li><a href="#"><i class="fam_pencil"></i> Applications</a></li>
                                    <li><a href="#"><i class="i"></i> Misc</a></li>
                                </ul>
                            </div> <!-- /well -->
                        </div>
                        <div class="span4">
                            <form>
                                <div class="control-group">
                                    <label class="control-label" for="inputIcon">Email address</label>
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="fam_email"></i></span><input class="span2" id="inputIcon" type="text">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </section><!-- /icons -->

            <footer class="footer">
                <p class="pull-right"><a href="">Back to top</a></p>
                <p>Design inspired by twitter bootstrap design page.</p>
                <p>Code licensed under the <a href="http://sam.zoy.org/wtfpl/">WTFPL License</a>.</p>
                <p>Icons from <a href="http://www.famfamfam.com/lab/icons/silk/">famfamfam</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
            </footer>

        </div><!-- /container -->

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/google-code-prettify/prettify.js"></script>
        <script src="assets/js/application.js"></script>

    </body>
</html>

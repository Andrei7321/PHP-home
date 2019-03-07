<?php

/* index.html */
class __TwigTemplate_f01277d029f4a6dbed650c686b668eeb31abe79942001d9f299fac1ac2bd781e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>INSTASEARCH</title>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans:400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css\">
    <link rel=\"stylesheet\" href=\"gallery-clean.css\">


</head>
<body>

<div class=\"container gallery-container\">

    <h1>INSTASEARCH</h1>

    <p class=\"page-description text-center\">Clean Layout With Minimal Styles</p>
    
    <div class=\"tz-gallery\">

        <div class=\"row\">

            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a class=\"lightbox\" href=\"../images/park.jpg\">
                        <img src=\"../images/park.jpg\" alt=\"Park\">
                    </a>
                    <div class=\"caption\">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a class=\"lightbox\" href=\"../images/bridge.jpg\">
                        <img src=\"../images/bridge.jpg\" alt=\"Bridge\">
                    </a>
                    <div class=\"caption\">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a class=\"lightbox\" href=\"../images/tunnel.jpg\">
                        <img src=\"../images/tunnel.jpg\" alt=\"Tuneel\">
                    </a>
                    <div class=\"caption\">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a class=\"lightbox\" href=\"../images/coast.jpg\">
                        <img src=\"../images/coast.jpg\" alt=\"Coast\">
                    </a>
                    <div class=\"caption\">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a class=\"lightbox\" href=\"../images/rails.jpg\">
                        <img src=\"../images/rails.jpg\" alt=\"Rails\">
                    </a>
                    <div class=\"caption\">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <a class=\"lightbox\" href=\"../images/traffic.jpg\">
                        <img src=\"../images/traffic.jpg\" alt=\"Traffic\">
                    </a>
                    <div class=\"caption\">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js\"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\xampp\\htdocs\\PHP-home\\templates\\index.html");
    }
}

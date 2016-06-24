<?php

/* C:\mamp\htdocs\brian-jacobs-golf/themes/bjg/layouts/page.htm */
class __TwigTemplate_8de12b6de805e024bc7d22ddd279b2ac69b57c34678121018f07ec703a3ea680 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " &middot; Brian Jacobs Golf</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Brian Jacobs Golf\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <!--<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\">-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/styles/theme.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/styles/responsive.min.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 18
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 19
        echo "
        <!-- High pixel density displays -->
\t    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/styles/hidpi2x.min.css"));
        echo "\" media=\"only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/styles/hidpi3x.min.css"));
        echo "\" media=\"only screen and (-moz-min-device-pixel-ratio: 3), only screen and (-o-min-device-pixel-ratio: 3/1), only screen and (-webkit-min-device-pixel-ratio: 3), only screen and (min-device-pixel-ratio: 3)\">
    </head>
    <body>
        ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "Home")) {
            // line 26
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("header-home"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("header-page"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <main>
            ";
        // line 32
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 33
        echo "        </main>

        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\mamp\\htdocs\\brian-jacobs-golf/themes/bjg/layouts/page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  101 => 35,  97 => 33,  95 => 32,  91 => 30,  88 => 29,  83 => 28,  80 => 27,  75 => 26,  73 => 25,  67 => 22,  63 => 21,  59 => 19,  56 => 18,  52 => 17,  48 => 16,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{{ this.page.title }} &middot; Brian Jacobs Golf</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="Brian Jacobs Golf">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="generator" content="OctoberCMS">*/
/* */
/*         <!--<link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}">-->*/
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">*/
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link href="{{ 'assets/styles/theme.min.css'|theme }}" rel="stylesheet">*/
/*         <link href="{{ 'assets/styles/responsive.min.css'|theme }}" rel="stylesheet">*/
/*         {% styles %}*/
/* */
/*         <!-- High pixel density displays -->*/
/* 	    <link rel="stylesheet" href="{{ ['assets/styles/hidpi2x.min.css']|theme }}" media="only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)">*/
/* 		<link rel="stylesheet" href="{{ ['assets/styles/hidpi3x.min.css']|theme }}" media="only screen and (-moz-min-device-pixel-ratio: 3), only screen and (-o-min-device-pixel-ratio: 3/1), only screen and (-webkit-min-device-pixel-ratio: 3), only screen and (min-device-pixel-ratio: 3)">*/
/*     </head>*/
/*     <body>*/
/*         {% if this.page.title == "Home" %}*/
/*             {% partial "header-home" %}*/
/*         {% else %}*/
/*             {% partial "header-page" %}*/
/*         {% endif %}*/
/* */
/*         <main>*/
/*             {% page %}*/
/*         </main>*/
/* */
/*         {% partial "footer" %}*/
/* */
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     </body>*/
/* </html>*/

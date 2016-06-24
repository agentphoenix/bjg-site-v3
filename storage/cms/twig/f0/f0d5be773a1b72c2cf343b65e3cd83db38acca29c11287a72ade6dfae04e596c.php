<?php

/* C:\mamp\htdocs\brian-jacobs-golf/themes/bjg/layouts/home.htm */
class __TwigTemplate_9f217f3191532306c9edbaffe9cf36b1665c958378eb34c9beece5131b581942 extends Twig_Template
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
        ";
        // line 16
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 17
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/styles/theme.min.css"));
        // line 19
        echo "\" rel=\"stylesheet\">

        <!-- High pixel density displays -->
\t    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/styles/hidpi2x.min.css"));
        echo "\" media=\"only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/styles/hidpi3x.min.css"));
        echo "\" media=\"only screen and (-moz-min-device-pixel-ratio: 3), only screen and (-o-min-device-pixel-ratio: 3/1), only screen and (-webkit-min-device-pixel-ratio: 3), only screen and (min-device-pixel-ratio: 3)\">
    </head>
    <body>
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header-home"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
        <main>
            ";
        // line 29
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 30
        echo "        </main>

        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\mamp\\htdocs\\brian-jacobs-golf/themes/bjg/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  83 => 32,  79 => 30,  77 => 29,  73 => 27,  69 => 26,  63 => 23,  59 => 22,  54 => 19,  51 => 17,  48 => 16,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/styles/theme.min.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* */
/*         <!-- High pixel density displays -->*/
/* 	    <link rel="stylesheet" href="{{ ['assets/styles/hidpi2x.min.css']|theme }}" media="only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)">*/
/* 		<link rel="stylesheet" href="{{ ['assets/styles/hidpi3x.min.css']|theme }}" media="only screen and (-moz-min-device-pixel-ratio: 3), only screen and (-o-min-device-pixel-ratio: 3/1), only screen and (-webkit-min-device-pixel-ratio: 3), only screen and (min-device-pixel-ratio: 3)">*/
/*     </head>*/
/*     <body>*/
/*         {% partial "header-home" %}*/
/* */
/*         <main>*/
/*             {% page %}*/
/*         </main>*/
/* */
/*         {% partial "footer" %}*/
/*     </body>*/
/* </html>*/

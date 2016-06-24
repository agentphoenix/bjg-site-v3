<?php

/* C:\mamp\htdocs\brian-jacobs-golf/themes/bjg/partials/header-page.htm */
class __TwigTemplate_4beef82b8fe4f905ebb4c26919408c118fdaffe57309c72d6254d8318648bf0d extends Twig_Template
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
        echo "<header class=\"page\">
\t<div class=\"container\">
\t\t";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
\t\t<h1 class=\"visible-xs\">Brian Jacobs Golf</h1>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\mamp\\htdocs\\brian-jacobs-golf/themes/bjg/partials/header-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <header class="page">*/
/* 	<div class="container">*/
/* 		{% partial "nav" %}*/
/* */
/* 		<h1 class="visible-xs">Brian Jacobs Golf</h1>*/
/* 	</div>*/
/* </header>*/

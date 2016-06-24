<?php

/* C:\mamp\htdocs\brian-jacobs-golf/themes/bjg/partials/nav.htm */
class __TwigTemplate_a32eadac98fa1b0638d90e26acd3ea5ed1d6ee74ff40069ba176d626a3545b65 extends Twig_Template
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
        echo "<div class=\"visible-xs\">
\t<nav>
\t\t<div class=\"nav__item\"><a href=\"";
        // line 3
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\" class=\"brand\"></a></div>
\t\t<div class=\"nav__item\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t</div>
\t</nav>
</div>

<div class=\"visible-sm visible-md visible-lg\">
\t<nav>
\t\t<div class=\"nav__item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></div>
\t\t<div class=\"nav__item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->pageFilter("instruction");
        echo "\">Instruction</a></div>
\t\t<div class=\"nav__item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\" class=\"brand\"></a></div>
\t\t<div class=\"nav__item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->pageFilter("youth-golf");
        echo "\">Youth Golf</a></div>
\t\t<div class=\"nav__item\"><a href=\"http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx\" target=\"_blank\">Book Now</a></div>
\t</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\mamp\\htdocs\\brian-jacobs-golf/themes/bjg/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  48 => 19,  44 => 18,  40 => 17,  23 => 3,  19 => 1,);
    }
}
/* <div class="visible-xs">*/
/* 	<nav>*/
/* 		<div class="nav__item"><a href="{{ 'home'|page }}" class="brand"></a></div>*/
/* 		<div class="nav__item">*/
/* 			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/* 				<span class="sr-only">Toggle navigation</span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 			</button>*/
/* 		</div>*/
/* 	</nav>*/
/* </div>*/
/* */
/* <div class="visible-sm visible-md visible-lg">*/
/* 	<nav>*/
/* 		<div class="nav__item"><a href="{{ 'home'|page }}">Home</a></div>*/
/* 		<div class="nav__item"><a href="{{ 'instruction'|page }}">Instruction</a></div>*/
/* 		<div class="nav__item"><a href="{{ 'home'|page }}" class="brand"></a></div>*/
/* 		<div class="nav__item"><a href="{{ 'youth-golf'|page }}">Youth Golf</a></div>*/
/* 		<div class="nav__item"><a href="http://brianjacobsgolf.uschedule.com/OnlineAppointments.aspx" target="_blank">Book Now</a></div>*/
/* 	</nav>*/
/* </div>*/

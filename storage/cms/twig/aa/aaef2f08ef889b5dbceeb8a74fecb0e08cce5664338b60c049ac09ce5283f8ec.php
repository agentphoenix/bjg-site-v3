<?php

/* C:\mamp\htdocs\brian-jacobs-golf/themes/bjg/partials/header-home.htm */
class __TwigTemplate_23123cf9ac67c489b3f9f16cd4f37b58d3ae32f10ea54d4cdab1d654a4322248 extends Twig_Template
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
        echo "<header class=\"home\">
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
</header>

<aside>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"callouts callouts__cascade\">
\t\t\t\t\t<div class=\"callout__item left\">
\t\t\t\t\t\t<div class=\"callout__image\"></div>
\t\t\t\t\t\t<div class=\"callout__body\">
\t\t\t\t\t\t\t<div class=\"callout__content\">
\t\t\t\t\t\t\t\t<h3 class=\"callout__title\">About Us</h3>
\t\t\t\t\t\t\t\t<p>Something else</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"callout__footer\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->pageFilter("about-us");
        echo "\" class=\"btn btn-default btn-lg btn-block\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"callout__item center highlight\">
\t\t\t\t\t\t<div class=\"callout__image\"></div>
\t\t\t\t\t\t<div class=\"callout__body\">
\t\t\t\t\t\t\t<div class=\"callout__content\">
\t\t\t\t\t\t\t\t<h3 class=\"callout__title\">New to Brian Jacobs Golf?</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"callout__footer\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('CMS')->pageFilter("new-student");
        echo "\" class=\"btn btn-primary btn-lg btn-block\">Get Started Today</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"callout__item right\">
\t\t\t\t\t\t<div class=\"callout__image\"></div>
\t\t\t\t\t\t<div class=\"callout__body\">
\t\t\t\t\t\t\t<div class=\"callout__content\">
\t\t\t\t\t\t\t\t<h3 class=\"callout__title\">Start Learning Today!</h3>
\t\t\t\t\t\t\t\t<p>Something else</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"callout__footer\">
\t\t\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-default btn-lg btn-block\">Book Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</aside>";
    }

    public function getTemplateName()
    {
        return "C:\\mamp\\htdocs\\brian-jacobs-golf/themes/bjg/partials/header-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 34,  47 => 22,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <header class="home">*/
/* 	<div class="container">*/
/* 		{% partial "nav" %}*/
/* */
/* 		<h1 class="visible-xs">Brian Jacobs Golf</h1>*/
/* 	</div>*/
/* </header>*/
/* */
/* <aside>*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<div class="callouts callouts__cascade">*/
/* 					<div class="callout__item left">*/
/* 						<div class="callout__image"></div>*/
/* 						<div class="callout__body">*/
/* 							<div class="callout__content">*/
/* 								<h3 class="callout__title">About Us</h3>*/
/* 								<p>Something else</p>*/
/* 							</div>*/
/* 							<div class="callout__footer">*/
/* 								<a href="{{ 'about-us'|page }}" class="btn btn-default btn-lg btn-block">Learn More</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="callout__item center highlight">*/
/* 						<div class="callout__image"></div>*/
/* 						<div class="callout__body">*/
/* 							<div class="callout__content">*/
/* 								<h3 class="callout__title">New to Brian Jacobs Golf?</h3>*/
/* 							</div>*/
/* 							<div class="callout__footer">*/
/* 								<a href="{{ 'new-student'|page }}" class="btn btn-primary btn-lg btn-block">Get Started Today</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="callout__item right">*/
/* 						<div class="callout__image"></div>*/
/* 						<div class="callout__body">*/
/* 							<div class="callout__content">*/
/* 								<h3 class="callout__title">Start Learning Today!</h3>*/
/* 								<p>Something else</p>*/
/* 							</div>*/
/* 							<div class="callout__footer">*/
/* 								<a role="button" class="btn btn-default btn-lg btn-block">Book Now</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </aside>*/

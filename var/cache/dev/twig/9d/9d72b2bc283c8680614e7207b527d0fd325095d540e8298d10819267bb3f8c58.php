<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5c95d4b59b7cd7f363df5b25f5e28c3db5600cd7c5d99ed41d0c7d7e4a357d81 extends Twig_Template
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
        $__internal_0456814b07e6f4eb61ca85bc7c935e684a48bf771748224c01d226f5ad70b445 = $this->env->getExtension("native_profiler");
        $__internal_0456814b07e6f4eb61ca85bc7c935e684a48bf771748224c01d226f5ad70b445->enter($__internal_0456814b07e6f4eb61ca85bc7c935e684a48bf771748224c01d226f5ad70b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0456814b07e6f4eb61ca85bc7c935e684a48bf771748224c01d226f5ad70b445->leave($__internal_0456814b07e6f4eb61ca85bc7c935e684a48bf771748224c01d226f5ad70b445_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}

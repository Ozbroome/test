<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8a5fa0aefcd1fb56347a13550ccc0ed77721cca056c84b6978c420ca8e8cd1be extends Twig_Template
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
        $__internal_72b546167659fa8f3ca172d6416fb4deef8385b54ae2fb58c4c99c10e3c5c212 = $this->env->getExtension("native_profiler");
        $__internal_72b546167659fa8f3ca172d6416fb4deef8385b54ae2fb58c4c99c10e3c5c212->enter($__internal_72b546167659fa8f3ca172d6416fb4deef8385b54ae2fb58c4c99c10e3c5c212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_72b546167659fa8f3ca172d6416fb4deef8385b54ae2fb58c4c99c10e3c5c212->leave($__internal_72b546167659fa8f3ca172d6416fb4deef8385b54ae2fb58c4c99c10e3c5c212_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}

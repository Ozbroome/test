<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4b0f6d31c80062e5721c0278030c8e525bef968ecfa1c2375492556571979582 extends Twig_Template
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
        $__internal_d3fbe30da58306fd2a88cd9472b2493774de081c151b66d869041527b242efd8 = $this->env->getExtension("native_profiler");
        $__internal_d3fbe30da58306fd2a88cd9472b2493774de081c151b66d869041527b242efd8->enter($__internal_d3fbe30da58306fd2a88cd9472b2493774de081c151b66d869041527b242efd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d3fbe30da58306fd2a88cd9472b2493774de081c151b66d869041527b242efd8->leave($__internal_d3fbe30da58306fd2a88cd9472b2493774de081c151b66d869041527b242efd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_70d0cf2e11eeb3c2b5a67e73c44108047f462c6245ee4f468fe092b567620d25 extends Twig_Template
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
        $__internal_aec689bd44e8289825606a0e4f6f0ca9152d1a57b47e56695650e321c2fcab9e = $this->env->getExtension("native_profiler");
        $__internal_aec689bd44e8289825606a0e4f6f0ca9152d1a57b47e56695650e321c2fcab9e->enter($__internal_aec689bd44e8289825606a0e4f6f0ca9152d1a57b47e56695650e321c2fcab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aec689bd44e8289825606a0e4f6f0ca9152d1a57b47e56695650e321c2fcab9e->leave($__internal_aec689bd44e8289825606a0e4f6f0ca9152d1a57b47e56695650e321c2fcab9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}

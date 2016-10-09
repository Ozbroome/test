<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5ab79cf6fe0da58c680651cc638fe5e002f391626f9fe8584cd2146c39bbc788 extends Twig_Template
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
        $__internal_6c4054cc52a363e1b195bdd8c046942a125ab2dd66a18e7045a2e894672131a3 = $this->env->getExtension("native_profiler");
        $__internal_6c4054cc52a363e1b195bdd8c046942a125ab2dd66a18e7045a2e894672131a3->enter($__internal_6c4054cc52a363e1b195bdd8c046942a125ab2dd66a18e7045a2e894672131a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6c4054cc52a363e1b195bdd8c046942a125ab2dd66a18e7045a2e894672131a3->leave($__internal_6c4054cc52a363e1b195bdd8c046942a125ab2dd66a18e7045a2e894672131a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

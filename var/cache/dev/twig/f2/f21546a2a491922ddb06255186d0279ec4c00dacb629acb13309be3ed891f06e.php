<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_53a1dc5fd9449929fc2ad450d41863bbc8098f1b472fb0fc69955956768c6e27 extends Twig_Template
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
        $__internal_9a9d81a05ad35ab96f852bb95bb2477bb6af8593f19ee29fdede8c7d7315ac63 = $this->env->getExtension("native_profiler");
        $__internal_9a9d81a05ad35ab96f852bb95bb2477bb6af8593f19ee29fdede8c7d7315ac63->enter($__internal_9a9d81a05ad35ab96f852bb95bb2477bb6af8593f19ee29fdede8c7d7315ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9a9d81a05ad35ab96f852bb95bb2477bb6af8593f19ee29fdede8c7d7315ac63->leave($__internal_9a9d81a05ad35ab96f852bb95bb2477bb6af8593f19ee29fdede8c7d7315ac63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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

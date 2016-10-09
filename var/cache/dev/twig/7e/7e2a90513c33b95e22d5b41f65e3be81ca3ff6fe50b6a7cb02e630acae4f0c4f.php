<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0af68049058198f61dde11dda60562ac56ab51edc83c108453112a01a4b3cb87 extends Twig_Template
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
        $__internal_38cf9f6cdc5b761af4bd00dcff6296361cb6cccf2b8ee573699802152a4e3f17 = $this->env->getExtension("native_profiler");
        $__internal_38cf9f6cdc5b761af4bd00dcff6296361cb6cccf2b8ee573699802152a4e3f17->enter($__internal_38cf9f6cdc5b761af4bd00dcff6296361cb6cccf2b8ee573699802152a4e3f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_38cf9f6cdc5b761af4bd00dcff6296361cb6cccf2b8ee573699802152a4e3f17->leave($__internal_38cf9f6cdc5b761af4bd00dcff6296361cb6cccf2b8ee573699802152a4e3f17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}

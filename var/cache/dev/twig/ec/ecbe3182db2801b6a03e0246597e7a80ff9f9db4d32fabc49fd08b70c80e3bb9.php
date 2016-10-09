<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c5a771c6f2c6df78f72acb86b90c660e8f57a62ea0a98a9be23e6f9b018182d8 extends Twig_Template
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
        $__internal_f427c3f45e52c7e26a8617d165c5c35ffe17a634cd7b50952b622252f9dca72f = $this->env->getExtension("native_profiler");
        $__internal_f427c3f45e52c7e26a8617d165c5c35ffe17a634cd7b50952b622252f9dca72f->enter($__internal_f427c3f45e52c7e26a8617d165c5c35ffe17a634cd7b50952b622252f9dca72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f427c3f45e52c7e26a8617d165c5c35ffe17a634cd7b50952b622252f9dca72f->leave($__internal_f427c3f45e52c7e26a8617d165c5c35ffe17a634cd7b50952b622252f9dca72f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

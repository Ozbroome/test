<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6a87c3be687e0880c63c8e8e17c3bfd984334fa3fc17f00f9d507810e8cfa839 extends Twig_Template
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
        $__internal_ff5dd432b49ff666f8e185657ca4879373d318ff8288822f1e655080866a6df4 = $this->env->getExtension("native_profiler");
        $__internal_ff5dd432b49ff666f8e185657ca4879373d318ff8288822f1e655080866a6df4->enter($__internal_ff5dd432b49ff666f8e185657ca4879373d318ff8288822f1e655080866a6df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ff5dd432b49ff666f8e185657ca4879373d318ff8288822f1e655080866a6df4->leave($__internal_ff5dd432b49ff666f8e185657ca4879373d318ff8288822f1e655080866a6df4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}

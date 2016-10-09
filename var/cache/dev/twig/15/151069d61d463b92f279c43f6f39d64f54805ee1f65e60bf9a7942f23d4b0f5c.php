<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5ede067bc09a0926cb5e00390ccf93d4595c67cf629832c2b1d542259579f882 extends Twig_Template
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
        $__internal_7975b51ded383ef23b2afd93c2094ce75e516ab86aae5a35e9627b3a6abbde17 = $this->env->getExtension("native_profiler");
        $__internal_7975b51ded383ef23b2afd93c2094ce75e516ab86aae5a35e9627b3a6abbde17->enter($__internal_7975b51ded383ef23b2afd93c2094ce75e516ab86aae5a35e9627b3a6abbde17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7975b51ded383ef23b2afd93c2094ce75e516ab86aae5a35e9627b3a6abbde17->leave($__internal_7975b51ded383ef23b2afd93c2094ce75e516ab86aae5a35e9627b3a6abbde17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}

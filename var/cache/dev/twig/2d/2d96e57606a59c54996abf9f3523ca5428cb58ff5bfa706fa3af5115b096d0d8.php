<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9c00e9bca7be6b7a4aa50b770dbc2dab80202870c0b5776bc5383dd7d7ba59a7 extends Twig_Template
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
        $__internal_46a0f157e92b8c9a1ba80449b6c671a81aea778ce61242f898412f3258eab82c = $this->env->getExtension("native_profiler");
        $__internal_46a0f157e92b8c9a1ba80449b6c671a81aea778ce61242f898412f3258eab82c->enter($__internal_46a0f157e92b8c9a1ba80449b6c671a81aea778ce61242f898412f3258eab82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_46a0f157e92b8c9a1ba80449b6c671a81aea778ce61242f898412f3258eab82c->leave($__internal_46a0f157e92b8c9a1ba80449b6c671a81aea778ce61242f898412f3258eab82c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}

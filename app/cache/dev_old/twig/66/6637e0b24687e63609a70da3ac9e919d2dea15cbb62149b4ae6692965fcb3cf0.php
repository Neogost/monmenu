<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_481de147346e3655cc74db79110fd2f38f42675f149374d0fe10ce8fa41286da extends Twig_Template
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
        $__internal_f54933c9f85ffccf31a5c8e1881551fe9d12362be44a3aa7d426a48939c9d943 = $this->env->getExtension("native_profiler");
        $__internal_f54933c9f85ffccf31a5c8e1881551fe9d12362be44a3aa7d426a48939c9d943->enter($__internal_f54933c9f85ffccf31a5c8e1881551fe9d12362be44a3aa7d426a48939c9d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f54933c9f85ffccf31a5c8e1881551fe9d12362be44a3aa7d426a48939c9d943->leave($__internal_f54933c9f85ffccf31a5c8e1881551fe9d12362be44a3aa7d426a48939c9d943_prof);

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
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
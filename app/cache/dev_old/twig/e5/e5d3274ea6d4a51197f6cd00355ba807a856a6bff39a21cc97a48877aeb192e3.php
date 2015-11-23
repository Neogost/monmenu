<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_944f541670601e4083fd424d9c09ad088c144998a4d52aecdbc7f333e7af8017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d77218f7da3623a93f12e4f4ccf970b9781b8a3ef2ba35a7eedb2515ede81bc6 = $this->env->getExtension("native_profiler");
        $__internal_d77218f7da3623a93f12e4f4ccf970b9781b8a3ef2ba35a7eedb2515ede81bc6->enter($__internal_d77218f7da3623a93f12e4f4ccf970b9781b8a3ef2ba35a7eedb2515ede81bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77218f7da3623a93f12e4f4ccf970b9781b8a3ef2ba35a7eedb2515ede81bc6->leave($__internal_d77218f7da3623a93f12e4f4ccf970b9781b8a3ef2ba35a7eedb2515ede81bc6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d37ab389134e8e9b671cc88f65b29e7efb209450024d7114383aafa3c2a7468 = $this->env->getExtension("native_profiler");
        $__internal_6d37ab389134e8e9b671cc88f65b29e7efb209450024d7114383aafa3c2a7468->enter($__internal_6d37ab389134e8e9b671cc88f65b29e7efb209450024d7114383aafa3c2a7468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d37ab389134e8e9b671cc88f65b29e7efb209450024d7114383aafa3c2a7468->leave($__internal_6d37ab389134e8e9b671cc88f65b29e7efb209450024d7114383aafa3c2a7468_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cb4561bcc0ee8c30781f60f01dd6970c4a9bcb0a596105a5280eb34096af3f2 = $this->env->getExtension("native_profiler");
        $__internal_1cb4561bcc0ee8c30781f60f01dd6970c4a9bcb0a596105a5280eb34096af3f2->enter($__internal_1cb4561bcc0ee8c30781f60f01dd6970c4a9bcb0a596105a5280eb34096af3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cb4561bcc0ee8c30781f60f01dd6970c4a9bcb0a596105a5280eb34096af3f2->leave($__internal_1cb4561bcc0ee8c30781f60f01dd6970c4a9bcb0a596105a5280eb34096af3f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e11907c301d43f4ad9d8e5bda40ea4762d08e9f7f97379ed54c0ea5ba242fb6 = $this->env->getExtension("native_profiler");
        $__internal_4e11907c301d43f4ad9d8e5bda40ea4762d08e9f7f97379ed54c0ea5ba242fb6->enter($__internal_4e11907c301d43f4ad9d8e5bda40ea4762d08e9f7f97379ed54c0ea5ba242fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e11907c301d43f4ad9d8e5bda40ea4762d08e9f7f97379ed54c0ea5ba242fb6->leave($__internal_4e11907c301d43f4ad9d8e5bda40ea4762d08e9f7f97379ed54c0ea5ba242fb6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

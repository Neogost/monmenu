<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2d3087d24c825290c79cb824643e2de74dcf0de2f72910ca0bc8add3f9090a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75bb56616055a70724e37f7697059faf2713ed23844ccd9720684beaa66c8030 = $this->env->getExtension("native_profiler");
        $__internal_75bb56616055a70724e37f7697059faf2713ed23844ccd9720684beaa66c8030->enter($__internal_75bb56616055a70724e37f7697059faf2713ed23844ccd9720684beaa66c8030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bb56616055a70724e37f7697059faf2713ed23844ccd9720684beaa66c8030->leave($__internal_75bb56616055a70724e37f7697059faf2713ed23844ccd9720684beaa66c8030_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18628de12ab69787dc7bc8edd7dbb029a30887de23f598f663517c2217db00cd = $this->env->getExtension("native_profiler");
        $__internal_18628de12ab69787dc7bc8edd7dbb029a30887de23f598f663517c2217db00cd->enter($__internal_18628de12ab69787dc7bc8edd7dbb029a30887de23f598f663517c2217db00cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_18628de12ab69787dc7bc8edd7dbb029a30887de23f598f663517c2217db00cd->leave($__internal_18628de12ab69787dc7bc8edd7dbb029a30887de23f598f663517c2217db00cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_aa0ddaab632d6efeacd823d85caa30f5e2afc7e19c5e6280b4327ddf3fb3ccee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_78d5c52e571c1efee286e7271e981cdd8e262a0892d31b7495c243939a063f75 = $this->env->getExtension("native_profiler");
        $__internal_78d5c52e571c1efee286e7271e981cdd8e262a0892d31b7495c243939a063f75->enter($__internal_78d5c52e571c1efee286e7271e981cdd8e262a0892d31b7495c243939a063f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d5c52e571c1efee286e7271e981cdd8e262a0892d31b7495c243939a063f75->leave($__internal_78d5c52e571c1efee286e7271e981cdd8e262a0892d31b7495c243939a063f75_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebb6ba4ad14d6d1ef9d7f6528177fad2ecf5e4dd439ea911cb1db7d286a62619 = $this->env->getExtension("native_profiler");
        $__internal_ebb6ba4ad14d6d1ef9d7f6528177fad2ecf5e4dd439ea911cb1db7d286a62619->enter($__internal_ebb6ba4ad14d6d1ef9d7f6528177fad2ecf5e4dd439ea911cb1db7d286a62619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ebb6ba4ad14d6d1ef9d7f6528177fad2ecf5e4dd439ea911cb1db7d286a62619->leave($__internal_ebb6ba4ad14d6d1ef9d7f6528177fad2ecf5e4dd439ea911cb1db7d286a62619_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

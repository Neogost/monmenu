<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fe19069ce3550bcedcb663f79a77828942f266f53f9acaa2e0a497f3b0b62a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d98195336af25a6ddb2d3d2ec008242c50295cf8adf3a332172b8163a238098d = $this->env->getExtension("native_profiler");
        $__internal_d98195336af25a6ddb2d3d2ec008242c50295cf8adf3a332172b8163a238098d->enter($__internal_d98195336af25a6ddb2d3d2ec008242c50295cf8adf3a332172b8163a238098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d98195336af25a6ddb2d3d2ec008242c50295cf8adf3a332172b8163a238098d->leave($__internal_d98195336af25a6ddb2d3d2ec008242c50295cf8adf3a332172b8163a238098d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d41b66fd932c5c4682a91ed0252f0ec52641d2d49df31ca7d0a97ca8a3391abc = $this->env->getExtension("native_profiler");
        $__internal_d41b66fd932c5c4682a91ed0252f0ec52641d2d49df31ca7d0a97ca8a3391abc->enter($__internal_d41b66fd932c5c4682a91ed0252f0ec52641d2d49df31ca7d0a97ca8a3391abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d41b66fd932c5c4682a91ed0252f0ec52641d2d49df31ca7d0a97ca8a3391abc->leave($__internal_d41b66fd932c5c4682a91ed0252f0ec52641d2d49df31ca7d0a97ca8a3391abc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

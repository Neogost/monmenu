<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_94f7d9c0885063127424f57627f254075f5d67931b08dae0ac4b83be46bde92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DesmayUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'wordingPage' => array($this, 'block_wordingPage'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DesmayUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f4bb3c744a1009d74f34efe2cb4f2ab30f0f81bf7f737fdd963a54ba7e7fbca = $this->env->getExtension("native_profiler");
        $__internal_9f4bb3c744a1009d74f34efe2cb4f2ab30f0f81bf7f737fdd963a54ba7e7fbca->enter($__internal_9f4bb3c744a1009d74f34efe2cb4f2ab30f0f81bf7f737fdd963a54ba7e7fbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f4bb3c744a1009d74f34efe2cb4f2ab30f0f81bf7f737fdd963a54ba7e7fbca->leave($__internal_9f4bb3c744a1009d74f34efe2cb4f2ab30f0f81bf7f737fdd963a54ba7e7fbca_prof);

    }

    // line 5
    public function block_wordingPage($context, array $blocks = array())
    {
        $__internal_6f5b9c535ff0a75087066b49f327b31db05d7509c5ee0d0082a8fba304f6c769 = $this->env->getExtension("native_profiler");
        $__internal_6f5b9c535ff0a75087066b49f327b31db05d7509c5ee0d0082a8fba304f6c769->enter($__internal_6f5b9c535ff0a75087066b49f327b31db05d7509c5ee0d0082a8fba304f6c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wordingPage"));

        echo "Rejoigner nous, connectez-vous !";
        
        $__internal_6f5b9c535ff0a75087066b49f327b31db05d7509c5ee0d0082a8fba304f6c769->leave($__internal_6f5b9c535ff0a75087066b49f327b31db05d7509c5ee0d0082a8fba304f6c769_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcec9628c2dc0cf7db6dbb88c7f77c59776fb2224395632e3eedffaed2f796c0 = $this->env->getExtension("native_profiler");
        $__internal_bcec9628c2dc0cf7db6dbb88c7f77c59776fb2224395632e3eedffaed2f796c0->enter($__internal_bcec9628c2dc0cf7db6dbb88c7f77c59776fb2224395632e3eedffaed2f796c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    <div class='row'>
        <div class='col s4 offset-s4'>
            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class='input-field' >
                    <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>

                <div class='input-field' >
                    <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                </div>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class='row'>
                    <div class='col s6 offset-s6'>
                        <button type=\"submit\" class=\"btn waves-effect waves-light\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                            Envoyer
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </div>
                <div>
                    Vous n'avez pas de compte ? Cliquer <a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "'>ici</a>
                </div>
            </form>
        </div>

    </div>

";
        
        $__internal_bcec9628c2dc0cf7db6dbb88c7f77c59776fb2224395632e3eedffaed2f796c0->leave($__internal_bcec9628c2dc0cf7db6dbb88c7f77c59776fb2224395632e3eedffaed2f796c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  102 => 30,  96 => 27,  88 => 22,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  62 => 10,  56 => 8,  53 => 7,  47 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends 'DesmayUserBundle::layout.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block wordingPage %}Rejoigner nous, connectez-vous !{% endblock %}*/
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class='row'>*/
/*         <div class='col s4 offset-s4'>*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class='input-field' >*/
/*                     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                 </div>*/
/* */
/*                 <div class='input-field' >*/
/*                     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*                 </div>*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                 <div class='row'>*/
/*                     <div class='col s6 offset-s6'>*/
/*                         <button type="submit" class="btn waves-effect waves-light" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" >*/
/*                             Envoyer*/
/*                             <i class="material-icons right">send</i>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div>*/
/*                     Vous n'avez pas de compte ? Cliquer <a href='{{ path('fos_user_registration_register') }}'>ici</a>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/

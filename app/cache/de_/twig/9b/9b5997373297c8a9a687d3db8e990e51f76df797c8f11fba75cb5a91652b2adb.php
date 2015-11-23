<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_c9c668ddde5b899529244c8c2f1e283e3f7953fdd273e536e0e9efedaeb1a5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e7a8c7e8956bd52ec0ccdbc5c837d698d2f120f4001de04627a84075721bf9 = $this->env->getExtension("native_profiler");
        $__internal_56e7a8c7e8956bd52ec0ccdbc5c837d698d2f120f4001de04627a84075721bf9->enter($__internal_56e7a8c7e8956bd52ec0ccdbc5c837d698d2f120f4001de04627a84075721bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e7a8c7e8956bd52ec0ccdbc5c837d698d2f120f4001de04627a84075721bf9->leave($__internal_56e7a8c7e8956bd52ec0ccdbc5c837d698d2f120f4001de04627a84075721bf9_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_5929dacf9dd2f718c8d57028429195f2068b381e361c0244dff23a02d8bb0f64 = $this->env->getExtension("native_profiler");
        $__internal_5929dacf9dd2f718c8d57028429195f2068b381e361c0244dff23a02d8bb0f64->enter($__internal_5929dacf9dd2f718c8d57028429195f2068b381e361c0244dff23a02d8bb0f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5929dacf9dd2f718c8d57028429195f2068b381e361c0244dff23a02d8bb0f64->leave($__internal_5929dacf9dd2f718c8d57028429195f2068b381e361c0244dff23a02d8bb0f64_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_34fcd3195aa1457a416cdfa653a0bb49a96fd61bcd1326bf0441d62e12fb52b6 = $this->env->getExtension("native_profiler");
        $__internal_34fcd3195aa1457a416cdfa653a0bb49a96fd61bcd1326bf0441d62e12fb52b6->enter($__internal_34fcd3195aa1457a416cdfa653a0bb49a96fd61bcd1326bf0441d62e12fb52b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_34fcd3195aa1457a416cdfa653a0bb49a96fd61bcd1326bf0441d62e12fb52b6->leave($__internal_34fcd3195aa1457a416cdfa653a0bb49a96fd61bcd1326bf0441d62e12fb52b6_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8bf0c5adc941b67fa9e70e7ef83ddd8121508a795c51536d8deed106fcf8364c = $this->env->getExtension("native_profiler");
        $__internal_8bf0c5adc941b67fa9e70e7ef83ddd8121508a795c51536d8deed106fcf8364c->enter($__internal_8bf0c5adc941b67fa9e70e7ef83ddd8121508a795c51536d8deed106fcf8364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_8bf0c5adc941b67fa9e70e7ef83ddd8121508a795c51536d8deed106fcf8364c->leave($__internal_8bf0c5adc941b67fa9e70e7ef83ddd8121508a795c51536d8deed106fcf8364c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
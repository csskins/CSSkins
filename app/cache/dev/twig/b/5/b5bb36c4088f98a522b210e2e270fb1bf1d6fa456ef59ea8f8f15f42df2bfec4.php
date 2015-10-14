<?php

/* AppBundle:Staff:add_staff.html.twig */
class __TwigTemplate_81872236f46ad2bbe98f52174826e414654dc56eced768efa6c3ae4c06b039c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Staff:add_staff.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_344374aa5fac27e3d9993768da0a86a9b41581eef1db4ea4d70a48c09c4070e5 = $this->env->getExtension("native_profiler");
        $__internal_344374aa5fac27e3d9993768da0a86a9b41581eef1db4ea4d70a48c09c4070e5->enter($__internal_344374aa5fac27e3d9993768da0a86a9b41581eef1db4ea4d70a48c09c4070e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Staff:add_staff.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344374aa5fac27e3d9993768da0a86a9b41581eef1db4ea4d70a48c09c4070e5->leave($__internal_344374aa5fac27e3d9993768da0a86a9b41581eef1db4ea4d70a48c09c4070e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ae86a323f5ff2f3953508724b2326c11b9d8f80870881663054d12b2557ce94 = $this->env->getExtension("native_profiler");
        $__internal_3ae86a323f5ff2f3953508724b2326c11b9d8f80870881663054d12b2557ce94->enter($__internal_3ae86a323f5ff2f3953508724b2326c11b9d8f80870881663054d12b2557ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "production")) {
            // line 5
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
            echo "
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'row');
        echo "
    <input type=\"submit\" value=\"submit\"/>
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3ae86a323f5ff2f3953508724b2326c11b9d8f80870881663054d12b2557ce94->leave($__internal_3ae86a323f5ff2f3953508724b2326c11b9d8f80870881663054d12b2557ce94_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Staff:add_staff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  66 => 12,  62 => 11,  58 => 10,  55 => 9,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {% if app.environment == 'production' %}*/
/*         {{ form_start(form) }}*/
/*     {% else %}*/
/*         {{ form_start(form, { 'attr': { novalidate: 'novalidate'}} ) }}*/
/*     {% endif %}*/
/* */
/*     {{ form_row(form.name) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.status) }}*/
/*     <input type="submit" value="submit"/>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/

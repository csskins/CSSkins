<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9ede0c3d517209b62201068f52d381bc9c244225ef10857e0f7a03df176963aa extends Twig_Template
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
        $__internal_bfe63fe324d742a3c56ac26716499b71bebb1667628a8ff4f7c788beaeb0e287 = $this->env->getExtension("native_profiler");
        $__internal_bfe63fe324d742a3c56ac26716499b71bebb1667628a8ff4f7c788beaeb0e287->enter($__internal_bfe63fe324d742a3c56ac26716499b71bebb1667628a8ff4f7c788beaeb0e287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe63fe324d742a3c56ac26716499b71bebb1667628a8ff4f7c788beaeb0e287->leave($__internal_bfe63fe324d742a3c56ac26716499b71bebb1667628a8ff4f7c788beaeb0e287_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d29824854ad697a16b7dd42e4f82fd8b239094b91f564a780fbcb09d13d42a3 = $this->env->getExtension("native_profiler");
        $__internal_6d29824854ad697a16b7dd42e4f82fd8b239094b91f564a780fbcb09d13d42a3->enter($__internal_6d29824854ad697a16b7dd42e4f82fd8b239094b91f564a780fbcb09d13d42a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d29824854ad697a16b7dd42e4f82fd8b239094b91f564a780fbcb09d13d42a3->leave($__internal_6d29824854ad697a16b7dd42e4f82fd8b239094b91f564a780fbcb09d13d42a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f1e89d849d6e5e884a88bd2cb9d510664a6d1d53450172ce2a38a533d6d1bd4 = $this->env->getExtension("native_profiler");
        $__internal_5f1e89d849d6e5e884a88bd2cb9d510664a6d1d53450172ce2a38a533d6d1bd4->enter($__internal_5f1e89d849d6e5e884a88bd2cb9d510664a6d1d53450172ce2a38a533d6d1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f1e89d849d6e5e884a88bd2cb9d510664a6d1d53450172ce2a38a533d6d1bd4->leave($__internal_5f1e89d849d6e5e884a88bd2cb9d510664a6d1d53450172ce2a38a533d6d1bd4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50313674c9683277e0ff4fe7146c930d1d06cc1d24ed5442bf0defa643601e3d = $this->env->getExtension("native_profiler");
        $__internal_50313674c9683277e0ff4fe7146c930d1d06cc1d24ed5442bf0defa643601e3d->enter($__internal_50313674c9683277e0ff4fe7146c930d1d06cc1d24ed5442bf0defa643601e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_50313674c9683277e0ff4fe7146c930d1d06cc1d24ed5442bf0defa643601e3d->leave($__internal_50313674c9683277e0ff4fe7146c930d1d06cc1d24ed5442bf0defa643601e3d_prof);

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

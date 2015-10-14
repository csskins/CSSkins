<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c5a88fa7d84900207388cef2e32e8298ceb2b6a8f1a780a5a5199c4126bc9648 extends Twig_Template
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
        $__internal_38a30f45742acaeb3bb28ee67804fc7f3887ed5b9a6b152c22f770df75313558 = $this->env->getExtension("native_profiler");
        $__internal_38a30f45742acaeb3bb28ee67804fc7f3887ed5b9a6b152c22f770df75313558->enter($__internal_38a30f45742acaeb3bb28ee67804fc7f3887ed5b9a6b152c22f770df75313558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a30f45742acaeb3bb28ee67804fc7f3887ed5b9a6b152c22f770df75313558->leave($__internal_38a30f45742acaeb3bb28ee67804fc7f3887ed5b9a6b152c22f770df75313558_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9595aa8bb48f2c89a0cb65304e2bc49da8ce13a3ffefd9b03b4c28e4e8796d4e = $this->env->getExtension("native_profiler");
        $__internal_9595aa8bb48f2c89a0cb65304e2bc49da8ce13a3ffefd9b03b4c28e4e8796d4e->enter($__internal_9595aa8bb48f2c89a0cb65304e2bc49da8ce13a3ffefd9b03b4c28e4e8796d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9595aa8bb48f2c89a0cb65304e2bc49da8ce13a3ffefd9b03b4c28e4e8796d4e->leave($__internal_9595aa8bb48f2c89a0cb65304e2bc49da8ce13a3ffefd9b03b4c28e4e8796d4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff69d9f9698b620c652368bc29af8f3ecf863f013f19d576a4faaca2b069de5e = $this->env->getExtension("native_profiler");
        $__internal_ff69d9f9698b620c652368bc29af8f3ecf863f013f19d576a4faaca2b069de5e->enter($__internal_ff69d9f9698b620c652368bc29af8f3ecf863f013f19d576a4faaca2b069de5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff69d9f9698b620c652368bc29af8f3ecf863f013f19d576a4faaca2b069de5e->leave($__internal_ff69d9f9698b620c652368bc29af8f3ecf863f013f19d576a4faaca2b069de5e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_607aedc928128c7d2cc40c7410ed4042d0b524e2aa88bb997e8071338968b2db = $this->env->getExtension("native_profiler");
        $__internal_607aedc928128c7d2cc40c7410ed4042d0b524e2aa88bb997e8071338968b2db->enter($__internal_607aedc928128c7d2cc40c7410ed4042d0b524e2aa88bb997e8071338968b2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_607aedc928128c7d2cc40c7410ed4042d0b524e2aa88bb997e8071338968b2db->leave($__internal_607aedc928128c7d2cc40c7410ed4042d0b524e2aa88bb997e8071338968b2db_prof);

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

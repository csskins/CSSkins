<?php

/* AppBundle:Staff:list_all_staff.html.twig */
class __TwigTemplate_3509d21035136a5da1dfe69ef7b5770d9a327f970174ae927dd6ecf608333a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Staff:list_all_staff.html.twig", 1);
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
        $__internal_65e7916c5955400fef2e56206dbb64931bdeac17bd803dd0c2333556a70c62e2 = $this->env->getExtension("native_profiler");
        $__internal_65e7916c5955400fef2e56206dbb64931bdeac17bd803dd0c2333556a70c62e2->enter($__internal_65e7916c5955400fef2e56206dbb64931bdeac17bd803dd0c2333556a70c62e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Staff:list_all_staff.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e7916c5955400fef2e56206dbb64931bdeac17bd803dd0c2333556a70c62e2->leave($__internal_65e7916c5955400fef2e56206dbb64931bdeac17bd803dd0c2333556a70c62e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3b21273c17b237e6f137a3a38756e5fbbf5b9266aa585b8f9bc8f37763b3eea = $this->env->getExtension("native_profiler");
        $__internal_f3b21273c17b237e6f137a3a38756e5fbbf5b9266aa585b8f9bc8f37763b3eea->enter($__internal_f3b21273c17b237e6f137a3a38756e5fbbf5b9266aa585b8f9bc8f37763b3eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<h1>All Staff: </h1>";
        
        $__internal_f3b21273c17b237e6f137a3a38756e5fbbf5b9266aa585b8f9bc8f37763b3eea->leave($__internal_f3b21273c17b237e6f137a3a38756e5fbbf5b9266aa585b8f9bc8f37763b3eea_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Staff:list_all_staff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}<h1>All Staff: </h1>{% endblock %}*/
/* */
/* {#{% block identifier %}#}*/
/*     {#{{ staff_list.getIdentifier }}#}*/
/* {#{% endblock %}#}*/
/* */
/* {#{% block name %}#}*/
/*     {#{{ staff_list.getName }}#}*/
/* {#{% endblock %}#}*/
/* */
/* {#{% block email %}#}*/
/*     {#{{ staff_list.getEmail }}#}*/
/* {#{% endblock %}#}*/
/* */
/* {#{% block status %}#}*/
/*     {#{{ staff_list.getStatus }}#}*/
/* {#{% endblock %}#}*/
/* */
/* */

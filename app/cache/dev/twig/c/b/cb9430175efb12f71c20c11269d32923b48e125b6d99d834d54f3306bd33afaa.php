<?php

/* AppBundle:Staff:admin_page.html.twig */
class __TwigTemplate_aead11f3ffd830453bbf3d8a643ee8733eab770430d160df42f44ca2c4d09fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Staff:admin_page.html.twig", 1);
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
        $__internal_9f2f33c0b4fbe25c641d5876a427a2d9eaef1729d8bdf63fe555d4d5b9b8ca4e = $this->env->getExtension("native_profiler");
        $__internal_9f2f33c0b4fbe25c641d5876a427a2d9eaef1729d8bdf63fe555d4d5b9b8ca4e->enter($__internal_9f2f33c0b4fbe25c641d5876a427a2d9eaef1729d8bdf63fe555d4d5b9b8ca4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Staff:admin_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2f33c0b4fbe25c641d5876a427a2d9eaef1729d8bdf63fe555d4d5b9b8ca4e->leave($__internal_9f2f33c0b4fbe25c641d5876a427a2d9eaef1729d8bdf63fe555d4d5b9b8ca4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16dfdff39d6887e9578093e660b0de772a14f96e1c3791a4da704793b1e705b = $this->env->getExtension("native_profiler");
        $__internal_d16dfdff39d6887e9578093e660b0de772a14f96e1c3791a4da704793b1e705b->enter($__internal_d16dfdff39d6887e9578093e660b0de772a14f96e1c3791a4da704793b1e705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div style=\"text-align: center;\">
        <h1>Hello, your are now logged in as an admin</h1>
        <br>
        <h2>List of all the employees</h2>
        _________________________________
        <br><br><br>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("add_staff");
        echo "\">Add Staff</a>
        <br>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("list_staff");
        echo "\">list Staff</a>
        <br>
        <a href=\"\">Edit Staff</a>
        <br>
        <a href=\"\">Delete Staff</a>
    </div>
";
        
        $__internal_d16dfdff39d6887e9578093e660b0de772a14f96e1c3791a4da704793b1e705b->leave($__internal_d16dfdff39d6887e9578093e660b0de772a14f96e1c3791a4da704793b1e705b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Staff:admin_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div style="text-align: center;">*/
/*         <h1>Hello, your are now logged in as an admin</h1>*/
/*         <br>*/
/*         <h2>List of all the employees</h2>*/
/*         _________________________________*/
/*         <br><br><br>*/
/*         <a href="{{ path("add_staff") }}">Add Staff</a>*/
/*         <br>*/
/*         <a href="{{ path("list_staff") }}">list Staff</a>*/
/*         <br>*/
/*         <a href="">Edit Staff</a>*/
/*         <br>*/
/*         <a href="">Delete Staff</a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {#{{ path("edit_staff") }}#}*/
/* {#{{ path("delete_staff") }}#}*/

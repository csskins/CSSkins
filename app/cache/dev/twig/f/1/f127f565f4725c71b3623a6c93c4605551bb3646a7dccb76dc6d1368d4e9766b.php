<?php

/* AppBundle:Staff:admin_page.html.twig */
class __TwigTemplate_52f7e4d70de4a34d1e624921862b19788ae33a17c0af70fbcbbfc1a18d14a49d extends Twig_Template
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
        $__internal_760ab6dd4402b71ae7f38422415eb720d579aff26666111bfc77b03aee434f97 = $this->env->getExtension("native_profiler");
        $__internal_760ab6dd4402b71ae7f38422415eb720d579aff26666111bfc77b03aee434f97->enter($__internal_760ab6dd4402b71ae7f38422415eb720d579aff26666111bfc77b03aee434f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Staff:admin_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760ab6dd4402b71ae7f38422415eb720d579aff26666111bfc77b03aee434f97->leave($__internal_760ab6dd4402b71ae7f38422415eb720d579aff26666111bfc77b03aee434f97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6986a7f6a996230c6a9d5c3e0544edf159bc523495cb7b9e5b0b3130665ff2f = $this->env->getExtension("native_profiler");
        $__internal_f6986a7f6a996230c6a9d5c3e0544edf159bc523495cb7b9e5b0b3130665ff2f->enter($__internal_f6986a7f6a996230c6a9d5c3e0544edf159bc523495cb7b9e5b0b3130665ff2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6986a7f6a996230c6a9d5c3e0544edf159bc523495cb7b9e5b0b3130665ff2f->leave($__internal_f6986a7f6a996230c6a9d5c3e0544edf159bc523495cb7b9e5b0b3130665ff2f_prof);

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

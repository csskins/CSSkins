<?php

/* base.html.twig */
class __TwigTemplate_d08fcda16946074cf021f5330994d25a21af9a3d2212eeb1f522b09bd7a9e496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8acc31f8e90e9b4004586f636fe0250c5250cebaa77cc18e3ee8aff0e0d523ef = $this->env->getExtension("native_profiler");
        $__internal_8acc31f8e90e9b4004586f636fe0250c5250cebaa77cc18e3ee8aff0e0d523ef->enter($__internal_8acc31f8e90e9b4004586f636fe0250c5250cebaa77cc18e3ee8aff0e0d523ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8acc31f8e90e9b4004586f636fe0250c5250cebaa77cc18e3ee8aff0e0d523ef->leave($__internal_8acc31f8e90e9b4004586f636fe0250c5250cebaa77cc18e3ee8aff0e0d523ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d7a5045e593877597b61d4f3e90fa9279478624ca726f75dddabb3d3a6b7a5 = $this->env->getExtension("native_profiler");
        $__internal_22d7a5045e593877597b61d4f3e90fa9279478624ca726f75dddabb3d3a6b7a5->enter($__internal_22d7a5045e593877597b61d4f3e90fa9279478624ca726f75dddabb3d3a6b7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22d7a5045e593877597b61d4f3e90fa9279478624ca726f75dddabb3d3a6b7a5->leave($__internal_22d7a5045e593877597b61d4f3e90fa9279478624ca726f75dddabb3d3a6b7a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b6d2df71958ff95b6d5ff265e12e0669baf6e793471890ffca808e59e6c70dd = $this->env->getExtension("native_profiler");
        $__internal_6b6d2df71958ff95b6d5ff265e12e0669baf6e793471890ffca808e59e6c70dd->enter($__internal_6b6d2df71958ff95b6d5ff265e12e0669baf6e793471890ffca808e59e6c70dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6b6d2df71958ff95b6d5ff265e12e0669baf6e793471890ffca808e59e6c70dd->leave($__internal_6b6d2df71958ff95b6d5ff265e12e0669baf6e793471890ffca808e59e6c70dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaea133623b0d4b1805910907630049ed23a3afa23aff079a2b23f240c33ea21 = $this->env->getExtension("native_profiler");
        $__internal_aaea133623b0d4b1805910907630049ed23a3afa23aff079a2b23f240c33ea21->enter($__internal_aaea133623b0d4b1805910907630049ed23a3afa23aff079a2b23f240c33ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaea133623b0d4b1805910907630049ed23a3afa23aff079a2b23f240c33ea21->leave($__internal_aaea133623b0d4b1805910907630049ed23a3afa23aff079a2b23f240c33ea21_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a10753c6148d0df8ac80acf1858b034f069873cbc881b781a61a97ed3c9a2208 = $this->env->getExtension("native_profiler");
        $__internal_a10753c6148d0df8ac80acf1858b034f069873cbc881b781a61a97ed3c9a2208->enter($__internal_a10753c6148d0df8ac80acf1858b034f069873cbc881b781a61a97ed3c9a2208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a10753c6148d0df8ac80acf1858b034f069873cbc881b781a61a97ed3c9a2208->leave($__internal_a10753c6148d0df8ac80acf1858b034f069873cbc881b781a61a97ed3c9a2208_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

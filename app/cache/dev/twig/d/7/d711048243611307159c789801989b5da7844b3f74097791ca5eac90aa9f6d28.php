<?php

/* ::base.html.twig */
class __TwigTemplate_ce0cbb1c90725f9dfdcda8f1d10bf398d9b2d1da8607e6dedd23402d4c5697ab extends Twig_Template
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
        $__internal_684dce5fbbde2a191a38edae8ce30d09431dcbbad07f3fa6c8cf80d8b5920ab0 = $this->env->getExtension("native_profiler");
        $__internal_684dce5fbbde2a191a38edae8ce30d09431dcbbad07f3fa6c8cf80d8b5920ab0->enter($__internal_684dce5fbbde2a191a38edae8ce30d09431dcbbad07f3fa6c8cf80d8b5920ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_684dce5fbbde2a191a38edae8ce30d09431dcbbad07f3fa6c8cf80d8b5920ab0->leave($__internal_684dce5fbbde2a191a38edae8ce30d09431dcbbad07f3fa6c8cf80d8b5920ab0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98e2b623d75a7a1e9646db37d8cd73f3181e073cd537c5a36d1e9421736ec2b1 = $this->env->getExtension("native_profiler");
        $__internal_98e2b623d75a7a1e9646db37d8cd73f3181e073cd537c5a36d1e9421736ec2b1->enter($__internal_98e2b623d75a7a1e9646db37d8cd73f3181e073cd537c5a36d1e9421736ec2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98e2b623d75a7a1e9646db37d8cd73f3181e073cd537c5a36d1e9421736ec2b1->leave($__internal_98e2b623d75a7a1e9646db37d8cd73f3181e073cd537c5a36d1e9421736ec2b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a939ee6bf806b2142374007b9a86525f631b54425782711c17ae0f0fe4bce432 = $this->env->getExtension("native_profiler");
        $__internal_a939ee6bf806b2142374007b9a86525f631b54425782711c17ae0f0fe4bce432->enter($__internal_a939ee6bf806b2142374007b9a86525f631b54425782711c17ae0f0fe4bce432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a939ee6bf806b2142374007b9a86525f631b54425782711c17ae0f0fe4bce432->leave($__internal_a939ee6bf806b2142374007b9a86525f631b54425782711c17ae0f0fe4bce432_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_31771f1985d8cb5d2de50b520111beefc7bcc53532078ddaa522ebf4ee2fe2f3 = $this->env->getExtension("native_profiler");
        $__internal_31771f1985d8cb5d2de50b520111beefc7bcc53532078ddaa522ebf4ee2fe2f3->enter($__internal_31771f1985d8cb5d2de50b520111beefc7bcc53532078ddaa522ebf4ee2fe2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31771f1985d8cb5d2de50b520111beefc7bcc53532078ddaa522ebf4ee2fe2f3->leave($__internal_31771f1985d8cb5d2de50b520111beefc7bcc53532078ddaa522ebf4ee2fe2f3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adc285324c3118648ee1797380fae43cddc5a63d76536527150dd6d6cb5bccc2 = $this->env->getExtension("native_profiler");
        $__internal_adc285324c3118648ee1797380fae43cddc5a63d76536527150dd6d6cb5bccc2->enter($__internal_adc285324c3118648ee1797380fae43cddc5a63d76536527150dd6d6cb5bccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_adc285324c3118648ee1797380fae43cddc5a63d76536527150dd6d6cb5bccc2->leave($__internal_adc285324c3118648ee1797380fae43cddc5a63d76536527150dd6d6cb5bccc2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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

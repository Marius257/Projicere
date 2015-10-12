<?php

/* ::base.html.twig */
class __TwigTemplate_d26bfda4af19dcd81bba203a3c601a6a213df1fa183b11f64d59d2d8611e49c2 extends Twig_Template
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
        $__internal_08152d66b56e1f98ec80ae7294094fd5f440c69e7ff0e073c3890225405ffbb3 = $this->env->getExtension("native_profiler");
        $__internal_08152d66b56e1f98ec80ae7294094fd5f440c69e7ff0e073c3890225405ffbb3->enter($__internal_08152d66b56e1f98ec80ae7294094fd5f440c69e7ff0e073c3890225405ffbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_08152d66b56e1f98ec80ae7294094fd5f440c69e7ff0e073c3890225405ffbb3->leave($__internal_08152d66b56e1f98ec80ae7294094fd5f440c69e7ff0e073c3890225405ffbb3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_037ab04b2523bc20812a2b7337d2c3da4a5b432a1d63cf43c5819651931ee448 = $this->env->getExtension("native_profiler");
        $__internal_037ab04b2523bc20812a2b7337d2c3da4a5b432a1d63cf43c5819651931ee448->enter($__internal_037ab04b2523bc20812a2b7337d2c3da4a5b432a1d63cf43c5819651931ee448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_037ab04b2523bc20812a2b7337d2c3da4a5b432a1d63cf43c5819651931ee448->leave($__internal_037ab04b2523bc20812a2b7337d2c3da4a5b432a1d63cf43c5819651931ee448_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9948ae16a1310d4acbea2b290b38346f77eeae88ae0134f3698cb6141a23c99b = $this->env->getExtension("native_profiler");
        $__internal_9948ae16a1310d4acbea2b290b38346f77eeae88ae0134f3698cb6141a23c99b->enter($__internal_9948ae16a1310d4acbea2b290b38346f77eeae88ae0134f3698cb6141a23c99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9948ae16a1310d4acbea2b290b38346f77eeae88ae0134f3698cb6141a23c99b->leave($__internal_9948ae16a1310d4acbea2b290b38346f77eeae88ae0134f3698cb6141a23c99b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d873f8e6a73bbd5de0d2f02079e0a0bcfe5422277e709c5c2514f20c0b005d = $this->env->getExtension("native_profiler");
        $__internal_23d873f8e6a73bbd5de0d2f02079e0a0bcfe5422277e709c5c2514f20c0b005d->enter($__internal_23d873f8e6a73bbd5de0d2f02079e0a0bcfe5422277e709c5c2514f20c0b005d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23d873f8e6a73bbd5de0d2f02079e0a0bcfe5422277e709c5c2514f20c0b005d->leave($__internal_23d873f8e6a73bbd5de0d2f02079e0a0bcfe5422277e709c5c2514f20c0b005d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5266e2f8dae8d5f849137e3aa4bfade08e2f60b3f7e1dbaa55e3076576a26752 = $this->env->getExtension("native_profiler");
        $__internal_5266e2f8dae8d5f849137e3aa4bfade08e2f60b3f7e1dbaa55e3076576a26752->enter($__internal_5266e2f8dae8d5f849137e3aa4bfade08e2f60b3f7e1dbaa55e3076576a26752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5266e2f8dae8d5f849137e3aa4bfade08e2f60b3f7e1dbaa55e3076576a26752->leave($__internal_5266e2f8dae8d5f849137e3aa4bfade08e2f60b3f7e1dbaa55e3076576a26752_prof);

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

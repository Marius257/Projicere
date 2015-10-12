<?php

/* ProjicereCoeurBundle:Principal:pagePrincipal.html.twig */
class __TwigTemplate_39e15e7d8b47dcab9fb21e079d62220dff5e7eb7da88e082debcfd4525339c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjicereCoeurBundle:Principal:pagePrincipal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1a91ae8ada1ed3cf6a2c13b794791340d3e4bcecafd656959247bb9691f1e0e = $this->env->getExtension("native_profiler");
        $__internal_d1a91ae8ada1ed3cf6a2c13b794791340d3e4bcecafd656959247bb9691f1e0e->enter($__internal_d1a91ae8ada1ed3cf6a2c13b794791340d3e4bcecafd656959247bb9691f1e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjicereCoeurBundle:Principal:pagePrincipal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a91ae8ada1ed3cf6a2c13b794791340d3e4bcecafd656959247bb9691f1e0e->leave($__internal_d1a91ae8ada1ed3cf6a2c13b794791340d3e4bcecafd656959247bb9691f1e0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7f66d439e9ce3db03a391c51bd0b92b911cf3a20704e949d3c83bdf4d2e8bba = $this->env->getExtension("native_profiler");
        $__internal_d7f66d439e9ce3db03a391c51bd0b92b911cf3a20704e949d3c83bdf4d2e8bba->enter($__internal_d7f66d439e9ce3db03a391c51bd0b92b911cf3a20704e949d3c83bdf4d2e8bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ProjicereCoeurBundle:Principal:pagePrincipal";
        
        $__internal_d7f66d439e9ce3db03a391c51bd0b92b911cf3a20704e949d3c83bdf4d2e8bba->leave($__internal_d7f66d439e9ce3db03a391c51bd0b92b911cf3a20704e949d3c83bdf4d2e8bba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_523467dc8400174c47451fea1d5d2eb2f64c7e5c8333540ec08441cf072cf3aa = $this->env->getExtension("native_profiler");
        $__internal_523467dc8400174c47451fea1d5d2eb2f64c7e5c8333540ec08441cf072cf3aa->enter($__internal_523467dc8400174c47451fea1d5d2eb2f64c7e5c8333540ec08441cf072cf3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Page Principal</h1>
<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("deconnection");
        echo "\">Deconnection</a>
";
        
        $__internal_523467dc8400174c47451fea1d5d2eb2f64c7e5c8333540ec08441cf072cf3aa->leave($__internal_523467dc8400174c47451fea1d5d2eb2f64c7e5c8333540ec08441cf072cf3aa_prof);

    }

    public function getTemplateName()
    {
        return "ProjicereCoeurBundle:Principal:pagePrincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}

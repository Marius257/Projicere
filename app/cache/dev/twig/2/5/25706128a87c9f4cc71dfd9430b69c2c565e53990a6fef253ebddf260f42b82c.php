<?php

/* ProjicereUtilisateurBundle:Utilisateur:connection.html.twig */
class __TwigTemplate_25706128a87c9f4cc71dfd9430b69c2c565e53990a6fef253ebddf260f42b82c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjicereUtilisateurBundle:Utilisateur:connection.html.twig", 1);
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
        $__internal_d2bb5688b1065c53e7a6fa08d4547ae1c4dc0e813d62e1a04fdf431e71ef6e16 = $this->env->getExtension("native_profiler");
        $__internal_d2bb5688b1065c53e7a6fa08d4547ae1c4dc0e813d62e1a04fdf431e71ef6e16->enter($__internal_d2bb5688b1065c53e7a6fa08d4547ae1c4dc0e813d62e1a04fdf431e71ef6e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjicereUtilisateurBundle:Utilisateur:connection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2bb5688b1065c53e7a6fa08d4547ae1c4dc0e813d62e1a04fdf431e71ef6e16->leave($__internal_d2bb5688b1065c53e7a6fa08d4547ae1c4dc0e813d62e1a04fdf431e71ef6e16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e5c07595161f1011642e1a9bf7dc726d01c14cf45bff999092b36dac423a644 = $this->env->getExtension("native_profiler");
        $__internal_3e5c07595161f1011642e1a9bf7dc726d01c14cf45bff999092b36dac423a644->enter($__internal_3e5c07595161f1011642e1a9bf7dc726d01c14cf45bff999092b36dac423a644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ProjicereUtilisateurBundle:Utilisateur:connection";
        
        $__internal_3e5c07595161f1011642e1a9bf7dc726d01c14cf45bff999092b36dac423a644->leave($__internal_3e5c07595161f1011642e1a9bf7dc726d01c14cf45bff999092b36dac423a644_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e452619bd493729fe5069473997fd17817e027ac38a5814e7b6457381daf75df = $this->env->getExtension("native_profiler");
        $__internal_e452619bd493729fe5069473997fd17817e027ac38a5814e7b6457381daf75df->enter($__internal_e452619bd493729fe5069473997fd17817e027ac38a5814e7b6457381daf75df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
";
        
        $__internal_e452619bd493729fe5069473997fd17817e027ac38a5814e7b6457381daf75df->leave($__internal_e452619bd493729fe5069473997fd17817e027ac38a5814e7b6457381daf75df_prof);

    }

    public function getTemplateName()
    {
        return "ProjicereUtilisateurBundle:Utilisateur:connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_36e79dcfd0db74bcef63de4f0eb67c00e35b5636345a28d42edd1f5e0af5f224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8d138ae7ce63cc6f36f9c55316a13a86dba2fa3543eaa1c23f3e82c2342696f = $this->env->getExtension("native_profiler");
        $__internal_e8d138ae7ce63cc6f36f9c55316a13a86dba2fa3543eaa1c23f3e82c2342696f->enter($__internal_e8d138ae7ce63cc6f36f9c55316a13a86dba2fa3543eaa1c23f3e82c2342696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d138ae7ce63cc6f36f9c55316a13a86dba2fa3543eaa1c23f3e82c2342696f->leave($__internal_e8d138ae7ce63cc6f36f9c55316a13a86dba2fa3543eaa1c23f3e82c2342696f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9015f664d303d502c9f35948dcf7db3ea39dfe76da10d8c6cb1437f99d607694 = $this->env->getExtension("native_profiler");
        $__internal_9015f664d303d502c9f35948dcf7db3ea39dfe76da10d8c6cb1437f99d607694->enter($__internal_9015f664d303d502c9f35948dcf7db3ea39dfe76da10d8c6cb1437f99d607694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9015f664d303d502c9f35948dcf7db3ea39dfe76da10d8c6cb1437f99d607694->leave($__internal_9015f664d303d502c9f35948dcf7db3ea39dfe76da10d8c6cb1437f99d607694_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f4a9b5054a847ba7b9325d434a6c62981118894a0229da825c880955b1512c1 = $this->env->getExtension("native_profiler");
        $__internal_5f4a9b5054a847ba7b9325d434a6c62981118894a0229da825c880955b1512c1->enter($__internal_5f4a9b5054a847ba7b9325d434a6c62981118894a0229da825c880955b1512c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"42\" height=\"30\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 42 30\" enable-background=\"new 0 0 42 30\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M41 10.9c-0.3-0.5-1-0.9-1.5-0.7c-0.9 0.3-1.2 1.7-2.1 1.7c-0.1-0.3 0-0.7 0.1-0.9c0.2-0.3 0.4-0.5 0.5-0.8 c0.3-0.6 0.2-1.3-0.1-1.8c-0.4-0.6-1.3-0.9-1.9-0.6c-0.7 0.3-1.1 1.1-0.8 1.8c0.2 0.5 0.7 0.9 0.9 1.4c0.1 0.3 0 0.8-0.3 0.9 c-0.3 0.1-0.5-0.2-0.8-0.3c-0.3-0.2-0.7-0.1-1 0.1s-0.4 0.6-0.3 0.9c0.2 0.4 0.7 0.6 1.1 0.6s0.9-0.1 1.4 0c0.1 0.4 0 0.8-0.2 1.1 c-0.2 0.3-0.6 0.5-0.9 0.7c-0.6 0.4-1.3 0.7-2 0.9v-3.5v-0.8v-1C33 4.8 28.2 0 22.4 0h-2.8C13.8 0 9 4.8 9 10.6v1v0.8V16 c-0.7-0.2-1.4-0.5-2-0.9c-0.3-0.2-0.7-0.4-0.9-0.7c-0.2-0.3-0.4-0.7-0.2-1.1c0.5-0.1 0.9 0 1.4 0s1-0.2 1.1-0.6 c0.1-0.3 0-0.7-0.3-0.9s-0.7-0.2-1-0.1c-0.2 0.1-0.5 0.3-0.8 0.3C5.9 11.8 5.8 11.3 6 11c0.2-0.5 0.7-0.9 0.9-1.4 c0.3-0.7-0.1-1.5-0.8-1.8c-0.7-0.3-1.5 0-1.9 0.6C3.8 8.9 3.7 9.6 4 10.2c0.1 0.3 0.4 0.5 0.5 0.8c0.2 0.3 0.3 0.6 0.1 0.9 c-0.9 0-1.3-1.4-2.1-1.7C2 10.1 1.3 10.4 1 10.9s-0.2 1.2 0.1 1.8c0.1 0.2 0.3 0.4 0.6 0.6c0.7 0.4 1.6 0 2.4-0.4 c0.1 0 0.2-0.1 0.3-0.1c0.2 0.1 0.2 0.4 0.2 0.6c-0.1 0.7-0.1 1.5 0.1 2.1c0.4 0.9 1.2 1.6 2.1 2C7.5 17.8 8.2 18 9 18.1v6.1 c0 2.1 1.7 3.8 3.8 3.8h0.5c2.1 0 3.8-1.7 3.8-3.8c0 2.1 1.7 3.8 3.8 3.8h0.5c2.1 0 3.8-1.7 3.8-3.8c0 2.1 1.7 3.8 3.8 3.8h0.5 c2.1 0 3.8-1.7 3.8-3.8v-6.1c0.8-0.1 1.5-0.3 2.3-0.6c0.9-0.4 1.7-1.1 2.1-2c0.3-0.7 0.3-1.4 0.1-2.1c0-0.2-0.1-0.6 0.2-0.6 c0.1 0 0.2 0 0.3 0.1c0.7 0.4 1.6 0.8 2.4 0.4c0.2-0.1 0.4-0.3 0.6-0.6C41.2 12.2 41.3 11.5 41 10.9z M12 8.5C12 6.1 13.6 4 15.7 4 s3.7 2 3.7 4.5c0 1.7-0.8 3.2-2 4c0.4-0.4 0.6-0.8 0.6-1.4c0-1.1-0.9-2-2-2s-2 0.9-2 2c0 1 0.7 1.8 1.7 1.9c0 0 0 0 0 0 C13.6 13 12 11 12 8.5z M21 21c-3.3 0-5.9-1.8-6-4.1c0-0.3 0.2-0.6 0.6-0.6c0.4-0.1 0.7 0.1 0.8 0.5l0-0.1c0.5 1.6 2.4 2.8 4.6 2.8 c2.3 0 4.1-1.2 4.6-2.9l0 0.1c0.1-0.3 0.4-0.5 0.8-0.5c0.3 0 0.5 0.2 0.6 0.4c0 0.1 0 0.1 0 0.2C27 19.2 24.3 21 21 21z M26.3 13 C26.3 13 26.3 13 26.3 13c0.9-0.1 1.6-1 1.6-1.9c0-1.1-0.9-2-2-2s-2 0.9-2 2c0 0.5 0.2 1 0.6 1.4c-1.2-0.8-2-2.2-2-4 c0-2.5 1.6-4.5 3.7-4.5s3.7 2 3.7 4.5C30 11 28.4 13 26.3 13z\"/></svg></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
        
        $__internal_5f4a9b5054a847ba7b9325d434a6c62981118894a0229da825c880955b1512c1->leave($__internal_5f4a9b5054a847ba7b9325d434a6c62981118894a0229da825c880955b1512c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5fa6c1a3b52f638b8f77762820c40adba69d4a52ab0e8564012b0ed0b8a934e6 = $this->env->getExtension("native_profiler");
        $__internal_5fa6c1a3b52f638b8f77762820c40adba69d4a52ab0e8564012b0ed0b8a934e6->enter($__internal_5fa6c1a3b52f638b8f77762820c40adba69d4a52ab0e8564012b0ed0b8a934e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5fa6c1a3b52f638b8f77762820c40adba69d4a52ab0e8564012b0ed0b8a934e6->leave($__internal_5fa6c1a3b52f638b8f77762820c40adba69d4a52ab0e8564012b0ed0b8a934e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  109 => 32,  103 => 28,  101 => 27,  97 => 25,  91 => 24,  82 => 20,  78 => 18,  76 => 17,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}

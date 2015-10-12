<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7989be9a6db12befc7b230a2b999226482dbb553dfaaaa9a69acdad3d51855a3 extends Twig_Template
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
        $__internal_57fe47b174b2ffe6a978cf17509f4fc88d504ba758d26e168802764e8df2b1fb = $this->env->getExtension("native_profiler");
        $__internal_57fe47b174b2ffe6a978cf17509f4fc88d504ba758d26e168802764e8df2b1fb->enter($__internal_57fe47b174b2ffe6a978cf17509f4fc88d504ba758d26e168802764e8df2b1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57fe47b174b2ffe6a978cf17509f4fc88d504ba758d26e168802764e8df2b1fb->leave($__internal_57fe47b174b2ffe6a978cf17509f4fc88d504ba758d26e168802764e8df2b1fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f661ad68143330d8edf5d643d92d4207cb181a7041c644bd24d7898d41e3e064 = $this->env->getExtension("native_profiler");
        $__internal_f661ad68143330d8edf5d643d92d4207cb181a7041c644bd24d7898d41e3e064->enter($__internal_f661ad68143330d8edf5d643d92d4207cb181a7041c644bd24d7898d41e3e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f661ad68143330d8edf5d643d92d4207cb181a7041c644bd24d7898d41e3e064->leave($__internal_f661ad68143330d8edf5d643d92d4207cb181a7041c644bd24d7898d41e3e064_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41c6837e312e3864745f00e70aa61e0c37333b556a5db01782fd32cc766def25 = $this->env->getExtension("native_profiler");
        $__internal_41c6837e312e3864745f00e70aa61e0c37333b556a5db01782fd32cc766def25->enter($__internal_41c6837e312e3864745f00e70aa61e0c37333b556a5db01782fd32cc766def25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41c6837e312e3864745f00e70aa61e0c37333b556a5db01782fd32cc766def25->leave($__internal_41c6837e312e3864745f00e70aa61e0c37333b556a5db01782fd32cc766def25_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c150e4a5acb0085ea9e2e00e4a5d710a3e874e79683ef9ba28b1ed46d953c1a1 = $this->env->getExtension("native_profiler");
        $__internal_c150e4a5acb0085ea9e2e00e4a5d710a3e874e79683ef9ba28b1ed46d953c1a1->enter($__internal_c150e4a5acb0085ea9e2e00e4a5d710a3e874e79683ef9ba28b1ed46d953c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c150e4a5acb0085ea9e2e00e4a5d710a3e874e79683ef9ba28b1ed46d953c1a1->leave($__internal_c150e4a5acb0085ea9e2e00e4a5d710a3e874e79683ef9ba28b1ed46d953c1a1_prof);

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

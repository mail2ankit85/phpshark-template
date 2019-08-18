<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forgot.html */
class __TwigTemplate_fe8dd1cce800791708123981910b0511ce2a02d4ea7b3acddf2babe5cd33ccbd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-dialog-center.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base-dialog-center.html", "forgot.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == true))) {
            // line 5
            echo "        <div class=\"p-3\">

            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Success!</strong> A Reset link has been sent to your registered email address. Please check your email.
            </div>

        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == false))) {
            // line 16
            echo "    <div class=\"p-3\">

            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Error!</strong> Sorry! There seems to be some error. Probably your email is not registered with us.
            </div>

        </div>
    ";
        }
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Forgot Password Helper</h3>
        <h6 class=\"d-flex justify-content-center\">Reset your Account</h6>
    </div>
    <hr/>

    ";
        // line 34
        $this->loadTemplate("form-forgot-password.html", "forgot.html", 34)->display($context);
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "forgot.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  95 => 34,  87 => 28,  83 => 27,  70 => 16,  68 => 15,  65 => 14,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-dialog-center.html\" %}

{% block messages %}
    {% if ( ind != null and ind == true  ) %}
        <div class=\"p-3\">

            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Success!</strong> A Reset link has been sent to your registered email address. Please check your email.
            </div>

        </div>
    {% endif %}

    {% if ( ind != null and ind == false ) %}
    <div class=\"p-3\">

            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Error!</strong> Sorry! There seems to be some error. Probably your email is not registered with us.
            </div>

        </div>
    {% endif %}
{% endblock %}

{% block body %}
    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Forgot Password Helper</h3>
        <h6 class=\"d-flex justify-content-center\">Reset your Account</h6>
    </div>
    <hr/>

    {% include 'form-forgot-password.html' %}

{% endblock %}

", "forgot.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/forgot.html");
    }
}

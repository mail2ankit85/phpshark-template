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

/* register.html */
class __TwigTemplate_edb5792888a80414fb3dfbeddd58548e9596dbb15a2ed4472153ec57ee295e28 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base-dialog-center.html", "register.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == true))) {
            // line 5
            echo "            <div class=\"p-3\">

                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Success!</strong> Thank you for registering with us. 
                    A confirmation link has been sent to your registered email address. Please check your email.
                </div>
            
            </div>
        ";
        }
        // line 15
        echo "
        ";
        // line 16
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == false))) {
            // line 17
            echo "            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> Sorry! There seems to be some error with registration process. Please check the mandatory fields.
                </div>

            </div>
        ";
        }
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Register</h3>
        <h6 class=\"d-flex justify-content-center\">Register to your account</h6>
    </div>
    <hr/>

    ";
        // line 35
        $this->loadTemplate("form-register.html", "register.html", 35)->display($context);
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  96 => 35,  88 => 29,  84 => 28,  71 => 17,  69 => 16,  66 => 15,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-dialog-center.html\" %}

{% block messages %}
        {% if ( ind != null and ind == true ) %}
            <div class=\"p-3\">

                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Success!</strong> Thank you for registering with us. 
                    A confirmation link has been sent to your registered email address. Please check your email.
                </div>
            
            </div>
        {% endif %}

        {% if ( ind != null and ind == false ) %}
            <div class=\"p-3\">

                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <strong>Error!</strong> Sorry! There seems to be some error with registration process. Please check the mandatory fields.
                </div>

            </div>
        {% endif %}
{% endblock %}

{% block body %}
    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Register</h3>
        <h6 class=\"d-flex justify-content-center\">Register to your account</h6>
    </div>
    <hr/>

    {% include 'form-register.html' %}

{% endblock %}



", "register.html", "/Applications/MAMP/htdocs/new/crs/wp-content/plugins/phpshark-template/public/register.html");
    }
}

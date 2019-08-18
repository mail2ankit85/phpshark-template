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

/* register-form.html */
class __TwigTemplate_ab95847d45b238f1e3cbb2ec887956f6a62d79d566a3021cb6dcceee4d835193 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form id=\"register-form\" method=\"post\" action=\"\">

<div class=\"form-body my-3 p-2\"> 
    <div class=\"form-row\">
        <div class=\"col-md-6 offset-md-3\">  
                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"email\">Email<span class=\"mandatory\">*</span>:</label>
                    <input id=\"email\" type=\"email\" name=\"email\" class=\"form-control\"/>
                </div>
                
                <div class='form-group'>
                    <label class='form-label' for='firstname'>Firstname<span class=\"mandatory\">*</span>:</label>
                    <input id='firstname' type='text' name='firstname' class='form-control' />
                </div>

                <div class='form-group'>
                    <label class='form-label' for='lastname'>Lastname<span class=\"mandatory\">*</span>:</label>
                    <input id='lastname' type='text' name='lastname' class='form-control'/>
                </div>

                <div class='form-group'>
                    <label class='form-label' for='phone'>Phone:</label>
                    <input id='phone' type='text' name='phone' class='form-control'/>
                </div>

                <div class=\"form-group d-flex flex-column justify-content-between\">
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["resend_url"] ?? null), "html", null, true);
        echo "\" class=\"align-self-center\">Resend confirmation link</a>
                </div>
                
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    <div id=\"g-recaptcha\"></div>
                </div>

                <input class=\"d-none\" name=\"form\" type=\"text\" value=\"register\" />

                <div class=\"form-group d-flex justify-content-center mt-5\">    
                    <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"Register\">Register your account</button>
                </div>
        </div>
    </div>
</div>

</form> ";
    }

    public function getTemplateName()
    {
        return "register-form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"register-form\" method=\"post\" action=\"\">

<div class=\"form-body my-3 p-2\"> 
    <div class=\"form-row\">
        <div class=\"col-md-6 offset-md-3\">  
                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"email\">Email<span class=\"mandatory\">*</span>:</label>
                    <input id=\"email\" type=\"email\" name=\"email\" class=\"form-control\"/>
                </div>
                
                <div class='form-group'>
                    <label class='form-label' for='firstname'>Firstname<span class=\"mandatory\">*</span>:</label>
                    <input id='firstname' type='text' name='firstname' class='form-control' />
                </div>

                <div class='form-group'>
                    <label class='form-label' for='lastname'>Lastname<span class=\"mandatory\">*</span>:</label>
                    <input id='lastname' type='text' name='lastname' class='form-control'/>
                </div>

                <div class='form-group'>
                    <label class='form-label' for='phone'>Phone:</label>
                    <input id='phone' type='text' name='phone' class='form-control'/>
                </div>

                <div class=\"form-group d-flex flex-column justify-content-between\">
                    <a href=\"{{ resend_url }}\" class=\"align-self-center\">Resend confirmation link</a>
                </div>
                
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    <div id=\"g-recaptcha\"></div>
                </div>

                <input class=\"d-none\" name=\"form\" type=\"text\" value=\"register\" />

                <div class=\"form-group d-flex justify-content-center mt-5\">    
                    <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"Register\">Register your account</button>
                </div>
        </div>
    </div>
</div>

</form> ", "register-form.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/register-form.html");
    }
}

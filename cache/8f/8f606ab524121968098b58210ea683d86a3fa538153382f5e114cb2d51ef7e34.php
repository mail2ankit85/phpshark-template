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

/* form-confirmation-resend.html */
class __TwigTemplate_05d5e6070f7314cabf76038c0f8eef1095b95c5dbebc6931b38d57c0859d850f extends \Twig\Template
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
        echo "<form id=\"confirmation-resend-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\"> 
            <div class=\"form-row\">
                <div class=\"col-md-6 offset-md-3\">       
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"email\">Email<span class=\"mandatory\">*</span>:</label>
                        <input id=\"email\" type=\"email\" name=\"email\" class=\"form-control\"/>
                    </div>
    
                    <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div> 
    
                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"forgot\" />
    
                    <div class=\"form-group d-flex justify-content-center mt-3\">    
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"forgot-password\">Login to your account</button>
                    </div>
                </div>
            </div>
        </div>
    
    </form> 
    ";
    }

    public function getTemplateName()
    {
        return "form-confirmation-resend.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"confirmation-resend-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\"> 
            <div class=\"form-row\">
                <div class=\"col-md-6 offset-md-3\">       
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"email\">Email<span class=\"mandatory\">*</span>:</label>
                        <input id=\"email\" type=\"email\" name=\"email\" class=\"form-control\"/>
                    </div>
    
                    <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div> 
    
                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"forgot\" />
    
                    <div class=\"form-group d-flex justify-content-center mt-3\">    
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"forgot-password\">Login to your account</button>
                    </div>
                </div>
            </div>
        </div>
    
    </form> 
    ", "form-confirmation-resend.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/form-confirmation-resend.html");
    }
}

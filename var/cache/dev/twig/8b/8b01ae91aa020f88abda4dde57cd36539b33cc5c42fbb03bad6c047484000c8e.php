<?php

/* AppBundle:Admin:Pages/allLocationSlots.html.twig */
class __TwigTemplate_764d7133f0363e91a5c8628a4b705b7ea24d53ea68c95e145e2af4d1c90aa717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Pages/allLocationSlots.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb387e18246302927583d816a462da47f56e87f764fd84cc5ba38ab9d41ea92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb387e18246302927583d816a462da47f56e87f764fd84cc5ba38ab9d41ea92e->enter($__internal_bb387e18246302927583d816a462da47f56e87f764fd84cc5ba38ab9d41ea92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/allLocationSlots.html.twig"));

        $__internal_0032c61ebe859cdb85d467c1afbf28335f1e08bc56319c1af157fc5acbbcf842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0032c61ebe859cdb85d467c1afbf28335f1e08bc56319c1af157fc5acbbcf842->enter($__internal_0032c61ebe859cdb85d467c1afbf28335f1e08bc56319c1af157fc5acbbcf842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/allLocationSlots.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb387e18246302927583d816a462da47f56e87f764fd84cc5ba38ab9d41ea92e->leave($__internal_bb387e18246302927583d816a462da47f56e87f764fd84cc5ba38ab9d41ea92e_prof);

        
        $__internal_0032c61ebe859cdb85d467c1afbf28335f1e08bc56319c1af157fc5acbbcf842->leave($__internal_0032c61ebe859cdb85d467c1afbf28335f1e08bc56319c1af157fc5acbbcf842_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62623ce1d00ad388b3371ce0699ecebe9bbf68e52ace2db9725c061910f4d921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62623ce1d00ad388b3371ce0699ecebe9bbf68e52ace2db9725c061910f4d921->enter($__internal_62623ce1d00ad388b3371ce0699ecebe9bbf68e52ace2db9725c061910f4d921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a890641965d19bff6181ca48f3bd9c78d4568a060c52fc427cdd2cebfe84223a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a890641965d19bff6181ca48f3bd9c78d4568a060c52fc427cdd2cebfe84223a->enter($__internal_a890641965d19bff6181ca48f3bd9c78d4568a060c52fc427cdd2cebfe84223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <link href = \"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\"
         rel = \"stylesheet\">
      <script src = \"https://code.jquery.com/jquery-1.10.2.js\"></script>
      <script src = \"https://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
      
      <!-- Javascript -->
      <script>
         \$(function() {
            \$( \"#datepicker-13\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
      <style type=\"text/css\">
           html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      </style>
      <script type=\"text/javascript\"
      src=\"https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAqpNRcHCA-YkFDmY4v_TmOAeUltT3-ezY&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />
";
        // line 43
        echo "<!-- Modal -->

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                        <span class=\"pull-right\">
                    ";
        // line 52
        echo "                          
                        </span>
                    </div>
                    <h2>Delivery Locations</h2>

                    <div>
                       
                        <hr>
                        
 <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                     <th>Area</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              ";
        // line 71
        $context["count"] = 1;
        // line 72
        echo "                               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["da"]) {
            // line 73
            echo "                               <tr>
                               <td>";
            // line 74
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo " </td>
                               <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "title", array()), "html", null, true);
            echo "</td>
                             <td>
                              <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delivery_slots", array("id" => $this->getAttribute($context["da"], "id", array()))), "html", null, true);
            echo "\" >
                              <i class=\"fa fa-edit\"></i>
                              </a>
                            </td>
                           </tr>
                        
";
            // line 83
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 84
            echo "                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['da'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                            </tbody>
                        </table>
                    </div>
                   
                    </div>
     
                </div>
            </div>
    </div>
</div>

";
        // line 97
        echo "<div id=\"uploadCSV\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Add New Location</h4>
      </div>
      <div class=\"modal-body\">
        <p>
          
 <div id=\"tool\">
  <div id=\"map_canvas\" style=\" border: 2px solid #3872ac;\"></div><br>
<form method=\"post\"  action=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_location");
        echo "\">

  <div class=\"row dis\"  style=\"\">
     <div class=\"col-12\">
      Name Of The Location  * <br>
    <input type=\"text\" name=\"location\" value=\"\" required placeholder=\"enter name of location\"  class=\"form-control\" />
  </div>
  <div class=\"col-12\"><br>
    <input type=\"text\" name=\"vertices\" value=\"\" id=\"vertices\"  readonly=\"\" class=\"form-control\" required=\"\" /><br>
  </div>

    <div class=\"col-4\"><br>
          <button type=\"submit\" class=\"btn btn-primary \" id=\"save\">Create New Location</button>


  </div>
  </div>
</form>


</div>




        
       </p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>
";
        
        $__internal_a890641965d19bff6181ca48f3bd9c78d4568a060c52fc427cdd2cebfe84223a->leave($__internal_a890641965d19bff6181ca48f3bd9c78d4568a060c52fc427cdd2cebfe84223a_prof);

        
        $__internal_62623ce1d00ad388b3371ce0699ecebe9bbf68e52ace2db9725c061910f4d921->leave($__internal_62623ce1d00ad388b3371ce0699ecebe9bbf68e52ace2db9725c061910f4d921_prof);

    }

    // line 149
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_cc965c8cb42edf43dc48c1e392ffead5fec2aae99bec079abeca2e31e0e64703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc965c8cb42edf43dc48c1e392ffead5fec2aae99bec079abeca2e31e0e64703->enter($__internal_cc965c8cb42edf43dc48c1e392ffead5fec2aae99bec079abeca2e31e0e64703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_a0f335abc0381c1043a16c77afd126113511d43095552f1463b611ac104d183d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f335abc0381c1043a16c77afd126113511d43095552f1463b611ac104d183d->enter($__internal_a0f335abc0381c1043a16c77afd126113511d43095552f1463b611ac104d183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 150
        echo "
    
    <style type=\"text/css\">
 #tool{
  width:100%;
  display:block;
}
#map_canvas {
    height: 500px;
    width:100%;
    margin-right: 10px;
    padding: 0px;
}
#info{ 
  width:100%;
  float: left;
  height: 270px;
  overflow: scroll;
}
button.undo {
    border: navajowhite;
    background: #fff;
}
    </style>
    <script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
</script>
    <script type=\"text/javascript\">

      function CenterControl(controlDiv, map) {

        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.marginTop = '5px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Click to recenter the map';
        controlDiv.appendChild(controlUI);

        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
                controlUI.style.backgroundColor = '#fff';

        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '0px';
        controlText.style.padding = '9px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = '<button onclick=\"removeLineSegment()\" class=\"undo\">undo</button>';
        controlUI.appendChild(controlText);

        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          map.setCenter(chicago);
        });

      }
    if(!!navigator.geolocation) {
        
  var map;
  var reset=\$('#resetPolygon');
  var geocoder;
  var polygonArray = [];
  var overlays = [];
var lastOverlay;
  var mapOptions = {
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  navigator.geolocation.getCurrentPosition(function(position) {
          
            var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            
            var infowindow = new google.maps.InfoWindow({
              map: map,
              position: geolocate,
              content:
                '<h4>You are here!!</h4>' +
                '<p>Latitude: ' + position.coords.latitude + '</p>' +
                '<p>Longitude: ' + position.coords.longitude + '</p>'
            });
            
            map.setCenter(geolocate);
            
          });      
            var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);

        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);  
} 
else
{
  document.getElementById('map_canvas').innerHTML = 'No Geolocation Support.';
}
var poly;

function initializeDrawer() {
    var drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.POLYGON,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
    
            // google.maps.drawing.OverlayType.CIRCLE,
            google.maps.drawing.OverlayType.POLYGON
            ]
        },
        markerOptions: {
            icon: 'images/car-icon.png'
        },
        circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1
        },
        polygonOptions: {
            fillColor: '#BCDCF9',
            fillOpacity: 0.5,
            strokeWeight: 2,
            strokeColor: '#57ACF9',
            clickable: false,
            editable: true,
            draggab: 1,
            zIndex: 1

        }
    });
    drawingManager.setMap(map);
     google.maps.event.addListener(drawingManager, \"overlaycomplete\", function(event){
     overlayClickListener(event.overlay);
      overlays.push(event); // store reference to added overlay
              
    \$('#vertices').val(JSON.stringify(event.overlay.getPath().getArray()));
 
         event.overlay.overlayType = event.type;
    lastOverlay = event.overlay; // Save it
    drawingManager.setDrawingMode(null); // Return to 'hand' mode 

            });
        }


function overlayClickListener(overlay) {
    google.maps.event.addListener(overlay, \"mouseup\", function(event){
        \$('#vertices').val(overlay.getPath().getArray());
    });
    }

// undo the last line segment of a polyline
function removeLineSegment() {
  
    var lastOverlay = overlays.length > 0 ? overlays[overlays.length - 1] : null;    
  if (lastOverlay && lastOverlay.type === \"polygon\") {
    var path = lastOverlay.overlay.getPath();
    path.pop(); // remove last line segment
  }
    if (lastOverlay && lastOverlay.type === \"polyline\") {
    var path = lastOverlay.overlay.getPath();
    path.pop(); // remove last line segment
  }
      if (lastOverlay && lastOverlay.type === \"rectangle\") {
    var path = lastOverlay.overlay.getPath();
    path.pop(); // remove last line segment
  }
}


// Initialize the drawer tool
google.maps.event.addDomListener(window, \"load\", initializeDrawer);
</script>
";
        
        $__internal_a0f335abc0381c1043a16c77afd126113511d43095552f1463b611ac104d183d->leave($__internal_a0f335abc0381c1043a16c77afd126113511d43095552f1463b611ac104d183d_prof);

        
        $__internal_cc965c8cb42edf43dc48c1e392ffead5fec2aae99bec079abeca2e31e0e64703->leave($__internal_cc965c8cb42edf43dc48c1e392ffead5fec2aae99bec079abeca2e31e0e64703_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Pages/allLocationSlots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 150,  232 => 149,  186 => 111,  170 => 97,  157 => 85,  151 => 84,  149 => 83,  140 => 77,  135 => 75,  131 => 74,  128 => 73,  123 => 72,  121 => 71,  100 => 52,  90 => 43,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AppBundle/Admin/base.html.twig' %}

{% block body %}
      <link href = \"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\"
         rel = \"stylesheet\">
      <script src = \"https://code.jquery.com/jquery-1.10.2.js\"></script>
      <script src = \"https://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
      
      <!-- Javascript -->
      <script>
         \$(function() {
            \$( \"#datepicker-13\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
      <style type=\"text/css\">
           html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      </style>
      <script type=\"text/javascript\"
      src=\"https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyAqpNRcHCA-YkFDmY4v_TmOAeUltT3-ezY&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />
{# {{ dump(res) }} #}
<!-- Modal -->

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                        <span class=\"pull-right\">
                    {#      <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#uploadCSV\">Upload CSV</a> #}
                          
                        </span>
                    </div>
                    <h2>Delivery Locations</h2>

                    <div>
                       
                        <hr>
                        
 <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                     <th>Area</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              {% set count = 1 %}
                               {% for da in data %}
                               <tr>
                               <td>{{ count }} </td>
                               <td>{{ da.title }}</td>
                             <td>
                              <a class=\"btn btn-primary btn-xs\" href=\"{{ path('delivery_slots',{'id':da.id}) }}\" >
                              <i class=\"fa fa-edit\"></i>
                              </a>
                            </td>
                           </tr>
                        
{% set count = count+1 %}
                               {% endfor %}
                            </tbody>
                        </table>
                    </div>
                   
                    </div>
     
                </div>
            </div>
    </div>
</div>

{# modal #}
<div id=\"uploadCSV\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Add New Location</h4>
      </div>
      <div class=\"modal-body\">
        <p>
          
 <div id=\"tool\">
  <div id=\"map_canvas\" style=\" border: 2px solid #3872ac;\"></div><br>
<form method=\"post\"  action=\"{{ path('add_location') }}\">

  <div class=\"row dis\"  style=\"\">
     <div class=\"col-12\">
      Name Of The Location  * <br>
    <input type=\"text\" name=\"location\" value=\"\" required placeholder=\"enter name of location\"  class=\"form-control\" />
  </div>
  <div class=\"col-12\"><br>
    <input type=\"text\" name=\"vertices\" value=\"\" id=\"vertices\"  readonly=\"\" class=\"form-control\" required=\"\" /><br>
  </div>

    <div class=\"col-4\"><br>
          <button type=\"submit\" class=\"btn btn-primary \" id=\"save\">Create New Location</button>


  </div>
  </div>
</form>


</div>




        
       </p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>
{# end modal #}
{% endblock %}

{% block scripts %}

    
    <style type=\"text/css\">
 #tool{
  width:100%;
  display:block;
}
#map_canvas {
    height: 500px;
    width:100%;
    margin-right: 10px;
    padding: 0px;
}
#info{ 
  width:100%;
  float: left;
  height: 270px;
  overflow: scroll;
}
button.undo {
    border: navajowhite;
    background: #fff;
}
    </style>
    <script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
</script>
    <script type=\"text/javascript\">

      function CenterControl(controlDiv, map) {

        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.marginTop = '5px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Click to recenter the map';
        controlDiv.appendChild(controlUI);

        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
                controlUI.style.backgroundColor = '#fff';

        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '0px';
        controlText.style.padding = '9px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = '<button onclick=\"removeLineSegment()\" class=\"undo\">undo</button>';
        controlUI.appendChild(controlText);

        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          map.setCenter(chicago);
        });

      }
    if(!!navigator.geolocation) {
        
  var map;
  var reset=\$('#resetPolygon');
  var geocoder;
  var polygonArray = [];
  var overlays = [];
var lastOverlay;
  var mapOptions = {
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  navigator.geolocation.getCurrentPosition(function(position) {
          
            var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            
            var infowindow = new google.maps.InfoWindow({
              map: map,
              position: geolocate,
              content:
                '<h4>You are here!!</h4>' +
                '<p>Latitude: ' + position.coords.latitude + '</p>' +
                '<p>Longitude: ' + position.coords.longitude + '</p>'
            });
            
            map.setCenter(geolocate);
            
          });      
            var centerControlDiv = document.createElement('div');
        var centerControl = new CenterControl(centerControlDiv, map);

        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);  
} 
else
{
  document.getElementById('map_canvas').innerHTML = 'No Geolocation Support.';
}
var poly;

function initializeDrawer() {
    var drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.POLYGON,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
    
            // google.maps.drawing.OverlayType.CIRCLE,
            google.maps.drawing.OverlayType.POLYGON
            ]
        },
        markerOptions: {
            icon: 'images/car-icon.png'
        },
        circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1
        },
        polygonOptions: {
            fillColor: '#BCDCF9',
            fillOpacity: 0.5,
            strokeWeight: 2,
            strokeColor: '#57ACF9',
            clickable: false,
            editable: true,
            draggab: 1,
            zIndex: 1

        }
    });
    drawingManager.setMap(map);
     google.maps.event.addListener(drawingManager, \"overlaycomplete\", function(event){
     overlayClickListener(event.overlay);
      overlays.push(event); // store reference to added overlay
              
    \$('#vertices').val(JSON.stringify(event.overlay.getPath().getArray()));
 
         event.overlay.overlayType = event.type;
    lastOverlay = event.overlay; // Save it
    drawingManager.setDrawingMode(null); // Return to 'hand' mode 

            });
        }


function overlayClickListener(overlay) {
    google.maps.event.addListener(overlay, \"mouseup\", function(event){
        \$('#vertices').val(overlay.getPath().getArray());
    });
    }

// undo the last line segment of a polyline
function removeLineSegment() {
  
    var lastOverlay = overlays.length > 0 ? overlays[overlays.length - 1] : null;    
  if (lastOverlay && lastOverlay.type === \"polygon\") {
    var path = lastOverlay.overlay.getPath();
    path.pop(); // remove last line segment
  }
    if (lastOverlay && lastOverlay.type === \"polyline\") {
    var path = lastOverlay.overlay.getPath();
    path.pop(); // remove last line segment
  }
      if (lastOverlay && lastOverlay.type === \"rectangle\") {
    var path = lastOverlay.overlay.getPath();
    path.pop(); // remove last line segment
  }
}


// Initialize the drawer tool
google.maps.event.addDomListener(window, \"load\", initializeDrawer);
</script>
{% endblock %}
", "AppBundle:Admin:Pages/allLocationSlots.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Pages/allLocationSlots.html.twig");
    }
}

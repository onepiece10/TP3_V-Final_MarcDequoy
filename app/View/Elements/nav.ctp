<?php if(!Configure::read('Application.maintenance')){?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php echo $this->Html->link(
			Configure::read('Application.name'),
			AuthComponent::user('id') ? "/home" : "/"
			, array('class' => 'navbar-brand')) ?>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<?php if(AuthComponent::user('id')){?>
			<ul class="nav navbar-nav side-nav">
				<li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Users <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>users"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>users/add"><i class="fa fa-plus"></i> Register new user</a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'planets' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Planets <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>planets"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>planets/add"><i class="fa fa-plus"></i> Add new planet</a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'shippings' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Shippings <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>shippings"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>shippings/add"><i class="fa fa-plus"></i> Add new shippings</a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'products' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Products <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>products"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>products/add"><i class="fa fa-plus"></i> Add new products</a></li>
					</ul>
				</li>
			</ul>
			<li><a href="<?php echo $this->params->webroot . 'fra' ?>/planets">Francais</a>
			<a href="<?php echo $this->params->webroot . 'eng' ?>/planets"> English</a></li>

		<?php } ?>



		<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="<?php echo $this->params->webroot?>me/edit"><i class="fa fa-gear"></i> Settings</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> Log Out</a></li>
				</ul>
			</li>
		</ul>
		<?php }?>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php } ?>

<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="80mm"
   height="57mm"
   id="svg3884"
   version="1.1"
   inkscape:version="0.48.5 r10040"
   sodipodi:docname="mspLogo.svg">
  <defs
     id="defs3886" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.49497475"
     inkscape:cx="387.14286"
     inkscape:cy="673.49478"
     inkscape:document-units="px"
     inkscape:current-layer="layer1"
     showgrid="false"
     inkscape:window-width="1680"
     inkscape:window-height="988"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata3889">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Calque 1"
     inkscape:groupmode="layer"
     id="layer1">
    <path
       sodipodi:type="arc"
       style="fill:#37c8ab;fill-opacity:1;stroke:none"
       id="path3910"
       sodipodi:cx="377.85715"
       sodipodi:cy="522.36218"
       sodipodi:rx="360.71429"
       sodipodi:ry="350"
       d="m 738.57144,522.36218 a 360.71429,350 0 1 1 -721.428587,0 360.71429,350 0 1 1 721.428587,0 z"
       transform="matrix(0.15987316,0,0,0.15987316,14.157066,-11.28966)" />
    <path
       style="fill:#2ca089;stroke:none"
       d="m 36.310918,65.9413 18.042828,17.81444 -1.484537,1.71293 15.530536,15.64473 -2.740683,5.02458 22.953217,20.21254 c 0,0 33.459171,-6.16654 42.138001,-42.0238 l -30.03332,-30.26171 0.45678,2.62649 -1.256144,2.51229 -12.333072,10.96273 c 0,0 -6.851707,0.57098 -7.308488,0.57098 -0.45678,0 -5.595561,-2.16971 -5.595561,-2.16971 l -1.484536,-4.682 -0.799365,-3.54005 0.342585,-0.68517 -1.827121,-1.02775 z"
       id="path3946"
       inkscape:connector-curvature="0" />
    <g
       id="g3913"
       transform="matrix(0.26288544,0.375209,-0.375209,0.26288544,83.896782,21.14284)"
       style="fill:#ffffff">
      <path
         id="path3915"
         d="m 21.433,140.989 c 4.53,-8.033 18.945,-32.03 32.31,-37.461 -2.799,-7.086 -3.118,-14.61 -0.692,-19.817 -0.771,-4.58 -1.297,-9.345 -1.579,-14.242 -9.104,7.101 -29.64,27.81 -31.394,71.151 -0.067,1.656 0.542,1.812 1.355,0.369 z"
         inkscape:connector-curvature="0"
         style="fill:#ffffff" />
      <path
         id="path3917"
         d="m 128.687,140.033 c 0.814,1.443 1.422,1.287 1.355,-0.369 -1.759,-43.441 -22.387,-64.148 -31.459,-71.203 -0.265,5.251 -0.806,10.357 -1.629,15.25 2.327,4.993 2.119,12.115 -0.368,18.939 13.305,5.595 27.594,29.392 32.101,37.383 z"
         inkscape:connector-curvature="0"
         style="fill:#ffffff" />
      <path
         id="path3919"
         d="m 85.639,13.878 c -0.784,-1.237 -1.601,-2.342 -2.448,-3.302 -2.513,-2.849 -5.28,-4.432 -8.188,-4.432 -2.908,0 -5.675,1.583 -8.188,4.432 -0.847,0.96 -1.664,2.065 -2.448,3.302 2.266,1.645 6.094,2.895 10.636,2.895 4.542,0 8.37,-1.251 10.636,-2.895 z"
         inkscape:connector-curvature="0"
         style="fill:#ffffff" />
      <path
         id="path3921"
         d="m 75.003,66.926 c 5.797,0 10.513,-7.013 10.513,-15.634 0,-8.621 -4.716,-15.634 -10.513,-15.634 -5.797,0 -10.514,7.013 -10.514,15.634 0,8.621 4.716,15.634 10.514,15.634 z m 0,-26.237 c 4.099,0 7.422,4.747 7.422,10.603 0,5.856 -3.323,10.603 -7.422,10.603 -4.099,0 -7.422,-4.747 -7.422,-10.603 0,-5.856 3.323,-10.603 7.422,-10.603 z"
         inkscape:connector-curvature="0"
         style="fill:#ffffff" />
      <path
         id="path3923"
         d="m 56.037,83.326 c 0.048,0.286 0.092,0.579 0.142,0.863 -0.029,0.05 -0.052,0.106 -0.08,0.157 -2.517,4.573 -2.093,11.762 0.54,18.308 2.708,6.736 7.751,12.778 14.345,14.57 L 68.487,84.36 c -0.063,-0.833 0.223,-1.654 0.791,-2.267 0.568,-0.612 1.365,-0.961 2.2,-0.961 h 9.678 c 0.835,0 1.632,0.348 2.2,0.961 0.568,0.613 0.854,1.434 0.791,2.267 l -2.421,31.863 c 5.55,-2.643 9.741,-8.348 11.996,-14.485 2.297,-6.251 2.578,-12.94 0.229,-17.302 -0.043,-0.08 -0.079,-0.167 -0.125,-0.246 0.083,-0.469 0.157,-0.95 0.235,-1.426 0.84,-5.112 1.396,-10.621 1.61,-16.4 0.066,-1.77 0.105,-3.561 0.105,-5.377 0,-17.375 -3.064,-32.852 -7.84,-42.9 -3.196,2.139 -7.765,3.466 -12.934,3.466 -5.169,0 -9.738,-1.327 -12.934,-3.466 -4.776,10.048 -7.84,25.525 -7.84,42.9 0,2.16 0.05,4.289 0.142,6.384 0.25,5.623 0.824,10.981 1.667,15.955 z M 75.003,32.791 c 7.378,0 13.381,8.299 13.381,18.501 0,10.202 -6.003,18.502 -13.381,18.502 -7.379,0 -13.381,-8.3 -13.381,-18.502 0,-10.202 6.002,-18.501 13.381,-18.501 z"
         inkscape:connector-curvature="0"
         style="fill:#ffffff" />
      <path
         id="path3925"
         d="m 74.031,117.722 0.115,1.513 0.114,1.505 1.73,22.766 c 0.09,0.823 0.209,1.235 0.327,1.235 0.118,0 0.237,-0.412 0.327,-1.235 l 1.753,-23.071 0.118,-1.551 0.119,-1.567 2.521,-33.183 h -9.678 l 2.554,33.588 z"
         inkscape:connector-curvature="0"
         style="fill:#ffffff" />
    </g>
    <path d="M 0,70 A 65,70 0 0,0 65,0 5,5 0 0,1 75,0 75,70 0 0,1 0,70Z" fill="#FFF">
        <animateTransform attributeName="transform" type="rotate" from="90 10 -10" to="50 40 250" dur="1s" repeatCount="indefinite" />
    </path>
    <text
       xml:space="preserve"
       style="font-size:26.15764809px;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;line-height:125%;letter-spacing:0px;word-spacing:0px;fill:#ffffff;fill-opacity:1;stroke:none;font-family:Bebas Neue;-inkscape-font-specification:Bebas Neue"
       x="56.70652"
       y="46.741341"
       id="text3948"
       sodipodi:linespacing="125%">

    <tspan
         sodipodi:role="line"
         id="tspan3950"
         x="46.70652"
         y="46.741341">MSP</tspan>
    </text>
  </g>
</svg>


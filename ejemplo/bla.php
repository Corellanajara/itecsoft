

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/.php">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JpGraph - Most powerful PHP-driven charts</title>
<link href="/css/default.css" rel="stylesheet" type="text/css" media="screen,tv" />
<script type="text/javascript" src="/js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.dropdownPlain.js"></script>
<script type="text/javascript" language="javascript" src="/js/heightLine.js"></script>
<script type="text/javascript" language="javascript" src="/js/original.js"></script>
</head>

<body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-526750-21']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div id="wrapper">

  <div id="header_wrapper">
    <div id="header" class="clearfix">
      <p class="asial"><a href="http://www.asial.co.jp/" target="_blank">powered by Asial</a></p>
      <p class="logomark"><a href="/">JpGraph</a></p>
      <h2><a href="/">Most powerful PHP-driven charts</a></h2>
      <h1><a href="/">JpGraph</a></h1>
    </div>
  </div>

  <div id="menu_wrapper">
    <div id="menu" class="clearfix">
      <ul class="global">
        <li><a href="/">Home</a></li>
        <li><a href="/news/">News</a></li>

        <li><a href="/features/" class="on">Features</a>
    <ul class="sub">
      <li><a href="/features/gallery.php">Gallery</a></li>
      <li><a href="/features/comparison.php">Product Comparison</a></li>
    </ul>
        </li>

        <li><a href="/download/">Download</a>
    <ul class="sub">
      <li><a href="/download/">Download JpGraph</a></li>
      <li><a href="/download/release.php">Release Info</a></li>
    </ul>
        </li>

        <li><a href="/pro/">Professional Version</a>
    <ul class="sub">
      <li><a href="/pro/">Buy Professional Version</a></li>
      <li><a href="/pro/login.php">Pro Login</a></li>
      <li><a href="/pro/pro_release.php">Release Info</a></li>
    </ul>
        </li>

        <li><a href="/doc/">Docs</a>
    <ul class="sub">
      <li><a href="/download/manuals">Documentation Portal</a></li>
      <li><a href="/doc/howto.php">HowTo's</a></li>
      <li><a href="/doc/faq.php">FAQ</a></li>
    </ul>
        </li>

        <li><a href="https://groups.google.com/forum/?hl=en-GB#!forum/jpgraph">Community Forum</a>
    <ul class="sub">
      <li><a href="https://groups.google.com/forum/?hl=en-GB#!forum/jpgraph">Google Groups</a></li>
    </ul>
        </li>

        <li><a href="/contact/">Contact</a>
    <ul class="sub">
      <li><a href="/contact/about.php">About us</a></li>
    </ul>
        </li>
      </ul>
    </div>
  </div>
<!--[if !IE]>↓↓↓メイン↓↓↓<![endif]-->
<div id="contents" class="clearfix">

  <!--[if !IE]>↓↓↓左側↓↓↓<![endif]-->
	<div id="left_side" class="heightLine">

    <!--[if !IE]>↓↓↓パンくず↓↓↓<![endif]-->
    <div id="bread">
      <ul>
    	  <li><a href="/">Home</a></li>
        <li>&gt;</li>
        <li><a href="/features/">Features</a></li>
				<li>&gt;</li>
        <li>Gallery</li>
      </ul>
    </div>
    <!--[if !IE]>↓↓↓パンくず↓↓↓<![endif]-->

    <!--[if !IE]>↓↓↓テキスト↓↓↓<![endif]-->
    <div class="main_sentense">
      <h3>Gallery</h3>

      <div class="chapter">
        <h4 id="line1">Line Plots</h4>
        <p class="txt">Line plots can be easily adapted to almost any needs, it is possible to adjust colors, transparency levels, line weight, line type (solid, dotted, dashed etc), backgrounds, scale, axis positions and formatting.</p>
        <div class="grafico"><a href="src/show-example.php?target=new_line1.php"><img src="grafico.php" alt="Line Plot" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="line2">Filled Line Plots</h4>
        <p class="txt">Line pots can also be filled both with a solid color, a semi transparent color or a gradient fill (both horizontal and vertical). The fill can also be one or several vertical band between two X-values.</p>
        <div class="images"><a href="src/show-example.php?target=new_line2.php"><img src="src/new_line2.php" alt="Filled Line Plots" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="step1">Step Line Plots</h4>
        <p class="txt">A variant of plain line plot is the stepped line plot where each data point is connected by two 90 degrees link as is illustrated below.</p>
        <div class="images"><a href="src/show-example.php?target=new_step1.php"><img src="src/new_step1.php" alt="Filled Line Plots" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="line3">Line Plots With Markers</h4>
        <p class="txt">Data values for line plots, scatter plots, radar plots etc. can be emphasized with either one of the multiple builtin markers (both plain and 3D) or if that is not enough it is also possible to use an arbitrary image as marker. When using an image as a marker it is also easy to set a specific scaling factor for the image to get a proper size without first having to manipulate the image in an external drawing program. The library will also cache any scaled image to reduce plot time and the need to do re-scaling for every data position.</p>
        <div class="images"><a href="src/show-example.php?target=new_line3.php"><img src="src/new_line3.php" alt="" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="line4">Line Plots With Inverted Y-axis</h4>
        <p class="txt">As an example of usage of the scale formatting callback routines it is possible to further adjust the scaling in (almost) any way that is desired. In the example below we have used a small "trick" to invert the Y-axis to show a dive profile curve.</p>
        <div class="images"><a href="src/show-example.php?target=new_line5.php"><img src="src/new_line5.php" alt="" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="line5">Line Plots With Values</h4>
        <p class="txt">It is of course possible to show the value of each data point for both line, bar, pie plots etc. No matter what type of plot is used the interface to the formatting of the values are identical, Formatting can be done either automatically, by specifying a formatting string (in the style of "printf">, or by using the more advanced method of specifying a callback formatting function that will be called upon for each data point to create the desired display value.</p>
        <div class="images"><a href="src/show-example.php?target=new_line4.php"><img src="src/new_line4.php" alt="" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="bar1">Standard Bar plots</h4>
        <p class="txt">Bar plots is also well catered for. Size of bars, fill colors, fill gradients, fill patterns etc are all configurable settings. It is also possible to use both accumulated, group or just plain bar graphs. For enhanced visual appearance it is also possible to use alpha blending and backgrounds. In the second image below a callback function for the formatting of the Y-axis values is used to format the label as a number with thousand separator.</p>
        <div class="images">
          <div class="images"><a href="src/show-example.php?target=new_bar1.php"><img src="src/new_bar1.php" alt="" /></a></div>

                    <div class="images"><a href="src/show-example.php?target=new_bar3.php"><img src="src/new_bar3.php" alt="" /></a></div>
        </div>
      </div>

      <div class="chapter">
        <h4 id="bar2">Adding backgrounds and patterns to bar plots</h4>
        <p class="txt">In the examples below we show two more formatting possibilities. The first example shows the addition of one of the pre-defined country flags as a background and the second example shows the addition of a background pattern between 2 Y-values.</p>
        <div class="images"><a href="src/show-example.php?target=new_bar4.php"><img src="src/new_bar4.php" alt="" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="bar3">Combined Line and Bar plots</h4>
        <p class="txt">As a final example of Bar plots we show some examples on how it is possible to combine bar and line plots. When adding a line plot to a bar graph it is possible to choose which point on the bar would correspond to the data point for the line (left, right or center position). In the examples below we have chosen to align the line with the center of the bars. In the last graph we have also added a vertical pattern to show how it is possible to emphasize a particular interval.</p>
        <div class="images"><a href="src/show-example.php?target=new_bar6.php"><img src="src/new_bar6.php" alt="" width="660"/></a></div>
      </div>

      <div class="chapter">
        <h4 id="pie1">Pie Plots</h4>
        <p class="txt">For Pie plots all the ordinary formatting (colors, size etc) is of course available. In addition it is also possible to specify details such as, angle for first slice, the use of themes to automatically select a color set, position of pie, explode one or several slices. Pie plots also use Hare-Niemer integer compensation to make sure that all displayed values on slices always add up to 100%.</p>
        <div class="images"><a href="src/show-example.php?target=new_pie1.php"><img src="src/new_pie1.php" alt="" /></a>
        <a href="src/show-example.php?target=new_pie2.php"><img src="src/new_pie2.php" alt="" /></a>
        </div>
      </div>

      <div class="chapter">
        <h4 id="pie2">3D Pie plots</h4>
        <p class="txt">A variant of Pie plot is to display the Pie in a 3D perspective. This has all the formatting of the 2D pie but in addition it is possible to define the inclination of the Pie to adjust the perspective.</p>
        <div class="images"><a href="src/show-example.php?target=new_pie3.php"><img src="src/new_pie3.php" alt="" /></a><a href="src/show-example.php?target=new_pie4.php"><img src="src/new_pie4.php" alt="" /></a></div>
      </div>

      <div class="chapter">
        <h4 id="pie3">Exploding Pie plots</h4>
        <p class="txt">s a final example we show how to emphasize certain values by exploding one or several Pie slices. This formatting is available for both 2- and 3D Pie plots.</p>
        <div class="images"><!-- img src="/images/gallery/pie5.gif" width="400" height="300" alt="" / --><img src="/images/gallery/pie6.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="ring1">Ring Plots</h4>
        <p class="txt">A variant of the Pie plot is the ring plot. As can be expected this has all the formatting of the ordinary Pie but in addition it is possible to format a ring in the middle. The center ring can also display an arbitrary text and have a user specified color.</p>
        <div class="images"><img src="/images/gallery/ring1.gif" width="400" height="300" alt="" /><img src="/images/gallery/ring2.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="scatter1">Scatter plots</h4>
        <p class="txt">Scatter plots is very similar to Line plots. They are used to display a number of data points that are defined by it's X- and Y-value. Each data point can be illustrated by one of the available plot-marks.</p>
        <div class="images"><img src="/images/gallery/scatter1.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="scatter2">Linked scatter plots</h4>
        <p class="txt">A variant of the scatter plot is the linked scatter plot. By enable the links a line will be drawn that connects the data points in order. As usual color, weight and style of the lines can be adjusted. In the right graph we have also illustrated one of the pre-defined style of axis positioning/formatting.</p>
        <div class="images"><img src="/images/gallery/scatter2.gif" width="400" height="300" alt="" /><img src="/images/gallery/scatter3.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="impulse1">Impulse Plots</h4>
        <p class="txt">Impulse plots is in a way similar to scatter and line plots. It is often used in signal processing to illustrate a sampled analogue signal which consists of a weighted pulse train. In the example below we show a typical damped impulse response.</p>
        <div class="images"><img src="/images/gallery/impulse.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="field1">Field Plots</h4>
        <p class="txt">Field plots is a scatter plot with a twist. By associating a callback function to plot it is possible to easily create images of various fields (e.g. for example magnetic, motion of air or fluids).</p>
        <div class="images"><img src="/images/gallery/field.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="spline1">Spline Curves</h4>
        <p class="txt">The library also contains helper function to create smooth data from one or several control points, a.k.a spline plots. By default the library creates natural splines (2:nd derivate==0).</p>
        <div class="images"><img src="/images/gallery/spline.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="geo1">Geographic Map Plots</h4>
        <p class="txt">By combining a background image (that displays a map) with a scatter plot using plot-marks it is possible to create dynamic maps to illustrate various information. In the images below we have used the built-in "pushpin" plot-marks for a scatter plot.</p>
        <div class="images"><img src="/images/gallery/pin1.gif" width="400" height="300" alt="" /><br /><br /><img src="/images/gallery/pin2.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="stock1">Stock Plots</h4>
        <p class="txt">Another type of plots is the so-called Stock plots. The most common use of these graphs is to display values from the stock market. Each data point can display 4 values which are normally take as the open-close-high-low values of various stocks.</p>
        <div class="images"><img src="/images/gallery/stock1.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="polar1">Polar Plots (180 degrees)</h4>
        <p class="txt">Polar plots is used to display a magnitude value in a specific direction. The polar plots have two variants; a full 360-degree plot and a half 180-degree plot. The magnitude can be displayed in either linear or logarithmic scale. Each polar graph can also have one or several plots. </p>
        <div class="images"><img src="/images/gallery/polar1.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="polar2">Polar Plots (360 degrees)</h4>
        <p class="txt">Polar plots can also have plot-marks which are shown in the second example below. The formatting of the axis can also be adjusted for how the labels and tick marks are displayed. Some possible variants are also shown in the images below.</p>
        <div class="images"><img src="/images/gallery/polar2.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="error1">Error plots</h4>
        <p class="txt">Error plot is primarily used to display an error interval for each data point. Usually a line plots is combined with an error plot to show the errors for each data point.</p>
        <div class="images"><img src="/images/gallery/error1.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="balloon1">Balloon plots</h4>
        <p class="txt">Balloon plot is basically a variant of the scatter plot where a call back function is used to give the "third dimension" of the plot, i.e. the size and color of each balloon.</p>
        <div class="images"><img src="/images/gallery/baloon.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="rader1">Radar Plots</h4>
        <p class="txt">Radar plots are often used to visualize how a number of measurements compares with goals. The human capabilities of detecting unregular vs regular shapes makes this type of plot a very powerful way to illustrate progress for a number of parameters.</p>
        <div class="images"><img src="/images/gallery/rader1.gif" width="400" height="300" alt="" /><img src="/images/gallery/rader2.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="gantt1">Gantt Charts</h4>
        <p class="txt">The Gantt chart is standard way to illustrate project plans or any activities that is layed out in time. The Gantt charts in JpGraph are extremely flexible and can easily be used to create very complex illustration of timed activities. </p>
        <div class="images"><img src="/images/gallery/gant1.png" alt="" /><br /><br /><img src="/images/gallery/gant2.png" alt="" /><br /><br /><img src="/images/gallery/gant3.png" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="contour1">Contour plots</h4>
        <p class="txt">Contour plots is a way to show isobars (height-curves) in a data set. The data set is specified as a 2D matrice.</p>
        <div class="images"><img src="/images/gallery/contour.gif" width="400" height="300" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="canvas1">Canvas plots</h4>
        <p class="txt">This type is not really a standard plot. It gives a convenient way to create arbitrary shapes on a canvas. It will allow the usage of easily created scales and access to all the convenience methods and functions available in JpGraph.</p>
        <div class="images"><img src="/images/gallery/canvas1.png" alt=""><img src="/images/gallery/canvas2.png" alt=""><img src="/images/gallery/canvas3.png" alt=""></div>
      </div>

      <div class="chapter">
        <h4 id="spam1">Spam challenge images</h4>
        <p class="txt">This is used to create images of what is very hard to read letters and digits that can be used to prohibit automatic signup to mail-lists and online communities.</p>
        <div class="images"><img src="/images/gallery/spam1.jpg" alt="" /></div>
      </div>

      <div class="chapter">
        <h4 id="pro1">Additional plots available in the Pro-Version</h4>
        <p class="txt">More information about these types of plots are available in the information for the Pro-version of JpGraph. The additional graph types available are Windrose plots, Odometer plots and barcodes (both linear and 2-dimensional.)</p>
        <div class="images"><img src="/images/gallery/odo1.png" alt="" /><br /><br /><img src="/images/gallery/wind1.png" alt="" /><br /><br /><img src="/images/gallery/barcode2.png" alt="" /><br /><br /><img src="/images/gallery/barcode1.png" alt="" /></div>
      </div>


    </div>
    <!--[if !IE]>↑↑↑テキスト↑↑↑<![endif]-->

		<div id="page_top"><a href="#header">&uarr;&nbsp;PAGE TOP&nbsp;&uarr;</a></div>

  </div>
  <!--[if !IE]>↑↑↑左側↑↑↑<![endif]-->


	<div id="right_side" class="heightLine">

    <h3>About</h3>
    <p class="txt">JpGraph is an Object-Oriented Graph creating library for PHP5 (>=5.1) and PHP7.0  The library is completely written in PHP and ready to be used in any PHP scripts (both CGI/APXS/CLI versions of PHP are supported).</p>

    <h3>Latest Pro-release</h3>
			    <p class ="txt">
		  <span class="sub_ttl">23 Feb: JpGraph-4.0.3-pro&nbsp;(4.0.3-pro)</span><br />
		fixed error of datamatrix
	    </p>
			    <p class ="txt">
		  <span class="sub_ttl">16 Dec: JpGraph-4.0.2-pro&nbsp;(4.0.2-pro)</span><br />
		Fixed plot bar's value positioning bug.
Fixed bug of dmexception.
	    </p>
		    <p class="more"><a href="/pro/">More Details</a></p>

    <h3>Latest Free-release</h3>
					<p class="txt">
		  <span class="sub_ttl">16 Dec: JpGraph-4.0.2&nbsp;(4.0.2)</span><br />
			Fixed plot bar's value positioning bug.
	    </p>
			<br></br>
					<p class="txt">
		  <span class="sub_ttl">09 Aug: JpGraph-4.0.1&nbsp;(4.0.1)</span><br />
			Fixed displaying labels of y-axis
	    </p>
			<br></br>

    <p class="more"><a href="/download/">Download Page</a></p>

    <h3>Latest News</h3>
    	    <p class="txt">
		  <span class="sub_ttl">21 Jun: JpGraph-4.0.0 released</span><br />
		We are happy to announce that the new 4.0.0 release is available. This version supports PHP5 (>=...
	    </p>
    	    <p class="txt">
		  <span class="sub_ttl">07 Oct: JpGraph 3.5.0b1 released</span><br />
		We are happy to announce that the new 3.5.0b1 release is available. This is a beta release with a...
	    </p>
        <p class="more"><a href="/news/">more</a></p>

  </div>
</div>
<!--[if !IE]>↑↑↑メイン↑↑↑<![endif]-->


  <div id="footer_wrapper" class="clearfix">
    <div id="footer">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/news/">News</a></li>
        <li><a href="/features/">Features</a></li>
        <li><a href="/download/">Download</a></li>
        <li><a href="/pro/">Professional Version</a></li>
        <li><a href="/doc/">Docs</a></li>
        <li><a href="/contact/">Contact</a></li>
      </ul>
      <p class="copyright">&copy; Copyright <a href="http://www.asial.co.jp/" target="_blank">Asial Corporation</a>. All rights reserved.</p>
    </div>
  </div>

</div>

</body>
</html>

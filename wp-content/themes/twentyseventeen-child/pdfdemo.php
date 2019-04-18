<?php
/*Template name: pdfdemo Template */
?> 
<div class="row">
			<div class="col-sm-3 rightBR">
				<div class="sidebar_Filter">
					<div class="form-group">
						<label>Home Price</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
  <input min="10000" max="10000000" value="250000" class="slider slider1" id="myRange" onchange="mon_mortage(this.value);" oninput="demo.value=myRange.value" type="range">
  </div>
 <p class="price-figure"><span class="dollar">$</span><input class="cmn_input" id="demo" oninput="myRange.value=demo.value" onchange="mon_mortage(this.value);" type="text">
						</p>

						<hr>
						<label>Down Payment</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
  <input min="1000" max="1000000" value="50000" class="slider slider2" id="myRange2" onchange="mon_mortage(this.value);" oninput="demo2.value=myRange2.value" type="range">
  </div>
  <p class="price-figure"><span class="dollar">$</span><input class="cmn_input" id="demo2" oninput="myRange2.value=demo2.value" onchange="mon_mortage(this.value);" type="text">
						</p>
						<hr>
						<label>Mortgage Interest Rate</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
  <input min="1" max="12" value="6.375" class="slider slider3" id="myRange3" onchange="mon_mortage(this.value);" oninput="demo3.value=myRange3.value" step="0.01" type="range">
  </div>
						<p class="price-figure">
							<input class="cmn_input" id="demo3" type="text">
							<span class="percent" oninput="myRange3.value=demo3.value" onchange="mon_mortage(this.value);">%</span>
						</p>
						<hr>
						<label>Loan Term</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<select class="form-control" id="loan_term" onchange="mon_mortage(this.value);">
							<option value="15">15</option>
							<option value="18">18</option> 
							<option value="30">30</option> 
						</select>
						
					</div>
					<div class="show_advance_view_acc">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									 <h4 class="panel-title">
										 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											 Show Advance View
										 </a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
									<div class="loc-sec">
										<label>Location</label> 
										<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
											<i class="fa fa-question-circle" aria-hidden="true"></i>
										</a>
										<input class="form-control" placeholder="Location" id="location" onchange="mon_mortage(this.value);" type="text">
										<div class="location">
											
										</div>
									</div>
									<hr>

						<label>Annual tax rate</label> 
						<input min="0" max="15" value="0.96" class="slider slider4" id="myRange4" onchange="mon_mortage(this.value);" oninput="demo4.value=myRange4.value" step="0.01" type="range">
						<p class="price-figure"><input class="cmn_input" id="demo4" oninput="myRange4.value=demo4.value" onchange="mon_mortage(this.value);" type="text"><span class="percent">%</span>
						</p>


						
										<div class="form-group">
											<label>Homeowner Insurance</label> 
											<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
												<i class="fa fa-question-circle" aria-hidden="true"></i>
											</a>
											<div class="slidecontainer">
					  <input min="0" max="15000" value="1200" class="slider slider5" id="myRange5" onchange="mon_mortage(this.value);" oninput="demo5.value=myRange5.value" type="range">
					  </div>
						<p class="price-figure"><span class="dollar">$</span><input class="cmn_input" id="demo5" oninput="myRange5.value=myRange5.value" onchange="mon_mortage(this.value);" type="text">
						</p>
						<!-- <input type="text" class="form-control" placeholder="insurance" id="myRange4" onchange="mon_mortage(this.value);"> -->
						<hr>
						<label>Homeowner Association(HOA)</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
					  		<input min="0" max="15000" value="0" class="slider slider6" id="myRange6" onchange="mon_mortage(this.value);" oninput="demo6.value=myRange6.value" type="range">
					  	</div>
						<p class="price-figure"><span class="dollar">$</span><input class="cmn_input" id="demo6" oninput="myRange6.value=demo6.value" onchange="mon_mortage(this.value);" type="text">
						</p>
											<hr>
											<a href="http://172.10.1.5:8047/pdf/" class="btn btn-primary btn-common" id="report">report</a>
											<button type="button" class="btn btn-primary btn-common">save calculation</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 rightBR">
				<div class="monthly_payment_calaculation">
					<div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Monthly Payment</a></li>
                                        <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Amortization</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                        	<div id="chartContainer2" style="height: 300px; width: 100%;"><div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto;"><canvas class="canvasjs-chart-canvas" width="514" height="300" style="position: absolute;"></canvas><canvas class="canvasjs-chart-canvas" width="514" height="300" style="position: absolute; cursor: default;"></canvas><div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"></div><div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 0px; left: 153px; bottom: -77px; transition: left 0s ease-out 0s, bottom 0s ease-out 0s;"><div style="width: auto; height: auto; min-width: 50px; margin: 0px; padding: 5px; font-family: Trebuchet MS, Helvetica, sans-serif; font-weight: normal; font-style: normal; font-size: 14px; color: black; text-shadow: rgba(0, 0, 0, 0.1) 1px 1px 1px; text-align: left; border: 1px solid rgb(27, 164, 186); background: rgba(255, 255, 255, 0.9) none repeat scroll 0% 0%; text-indent: 0px; white-space: nowrap; border-radius: 0px; -moz-user-select: none;"><b>Taxes &amp; Other Fees 5557.4688:</b> 5,557.4688 (16.33%)</div></div><a class="canvasjs-chart-credit" title="JavaScript Charts" style="outline:none;margin:0px;position:absolute;right:2px;top:286px;color:dimgrey;text-decoration:none;font-size:11px;font-family: Calibri, Lucida Grande, Lucida Sans Unicode, Arial, sans-serif" tabindex="-1" target="_blank" href="https://canvasjs.com/">CanvasJS.com</a></div></div>

									                                            </div>
                                        <div role="tabpanel" class="tab-pane" id="profile" style="">

                                        	<div class="line_chart">
		                                        <div id="container" data-highcharts-chart="0"><div id="highcharts-6p3y5p3-0" style="position: relative; overflow: hidden; width: 514px; height: 400px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0px;" dir="ltr" class="highcharts-container "><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="514" height="400" viewBox="0 0 514 400"><desc>Created with Highcharts 6.1.4</desc><defs><clipPath id="highcharts-6p3y5p3-1"><rect x="0" y="0" width="320" height="320" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="514" height="400" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="73" y="45" width="320" height="320"></rect><g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1"><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 112.5 45 L 112.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 152.5 45 L 152.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 192.5 45 L 192.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 232.5 45 L 232.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 272.5 45 L 272.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 312.5 45 L 312.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 352.5 45 L 352.5 365" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 392.5 45 L 392.5 365" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 73 365.5 L 393 365.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 73 285.5 L 393 285.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 73 205.5 L 393 205.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 73 125.5 L 393 125.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 73 44.5 L 393 44.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="73" y="45" width="320" height="320"></rect><g class="highcharts-axis highcharts-xaxis " data-z-index="2"><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 112.5 365 L 112.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 152.5 365 L 152.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 192.5 365 L 192.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 232.5 365 L 232.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 272.5 365 L 272.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 312.5 365 L 312.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 352.5 365 L 352.5 375" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 393.5 365 L 393.5 375" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 73 365.5 L 393 365.5"></path></g><g class="highcharts-axis highcharts-yaxis " data-z-index="2"><text x="24" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(270 24 205)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="205"><tspan>Number of Employees</tspan></text><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 73 45 L 73 365"></path></g><g class="highcharts-series-group" data-z-index="3"><g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0 " transform="translate(73,45) scale(1 1)" clip-path="url(#highcharts-6p3y5p3-1)"><path fill="none" d="M 20 319.968 L 60 319.68 L 100 318.4 L 140 305.6 L 180 304 L 220 297.6 L 260 64 L 300 0" class="highcharts-graph" data-z-index="1" stroke="#7cb5ec" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 10 319.968 L 20 319.968 L 60 319.68 L 100 318.4 L 140 305.6 L 180 304 L 220 297.6 L 260 64 L 300 0 L 310 0" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22" visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0 highcharts-tracker " transform="translate(73,45) scale(1 1)"><path fill="#7cb5ec" visibility="hidden" d="M 100 318.4 A 0 0 0 1 1 100 318.4 Z" class="highcharts-halo highcharts-color-0" data-z-index="-1" fill-opacity="0.25"></path><path fill="#7cb5ec" d="M 24 320 A 4 4 0 1 1 23.99999800000017 319.99600000066664 Z" class="highcharts-point highcharts-color-0"></path><path fill="#7cb5ec" d="M 64 320 A 4 4 0 1 1 63.99999800000017 319.99600000066664 Z" class="highcharts-point highcharts-color-0"></path><path fill="#7cb5ec" d="M 104 318.4 A 4 4 0 1 1 103.99999800000016 318.3960000006666 Z" class="highcharts-point highcharts-color-0 " stroke-width="0.00008882380959551739"></path><path fill="#7cb5ec" d="M 144 305.6 A 4 4 0 1 1 143.99999800000018 305.59600000066666 Z" class="highcharts-point highcharts-color-0 " stroke-width="0.000047308659474425835"></path><path fill="#7cb5ec" d="M 184 304 A 4 4 0 1 1 183.99999800000018 303.99600000066664 Z" class="highcharts-point highcharts-color-0 " stroke-width="0.000009869571931497845"></path><path fill="#7cb5ec" d="M 224 297.6 A 4 4 0 1 1 223.99999800000018 297.59600000066666 Z" class="highcharts-point highcharts-color-0 " stroke-width="0.0001448898960186018"></path><path fill="#7cb5ec" d="M 264 64 A 4 4 0 1 1 263.9999980000002 63.99600000066666 Z" class="highcharts-point highcharts-color-0"></path><path fill="#7cb5ec" d="M 304 0 A 4 4 0 1 1 303.9999980000002 -0.003999999333335683 Z" class="highcharts-point highcharts-color-0 " stroke-width="0.00010005463149553862"></path></g></g><g class="highcharts-exporting-group" data-z-index="3"><g class="highcharts-button highcharts-contextbutton" stroke-linecap="round" transform="translate(480,10)"><title>Chart context menu</title><rect fill="#ffffff" class=" highcharts-button-box" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect><path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" class="highcharts-button-symbol" data-z-index="1" stroke="#666666" stroke-width="3"></path><text x="0" data-z-index="1" style="font-weight:normal;color:#333333;cursor:pointer;fill:#333333;" y="12"></text></g></g><g class="highcharts-label" opacity="1" data-z-index="3" transform="translate(376,48)"><path fill="none" class="highcharts-label-box" d="M 0 0" stroke="#7cb5ec" stroke-width="1"></path><text x="0" data-z-index="1" style="font-weight:bold;color:#7cb5ec;fill:#7cb5ec;" y="12">Installation</text></g><text x="257" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"><tspan>Chart title</tspan></text><text x="257" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="44"></text><g class="highcharts-legend" data-z-index="7" transform="translate(405,185)"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="99" height="25" visibility="visible"></rect><g data-z-index="1"><g><g class="highcharts-legend-item highcharts-line-series highcharts-color-0 highcharts-series-0" data-z-index="1" transform="translate(8,3)"><path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#7cb5ec" stroke-width="2"></path><path fill="#7cb5ec" d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z" class="highcharts-point"></path><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" data-z-index="2" y="15"><tspan>Installation</tspan></text></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7"><text x="93" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2010</text><text x="133" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2011</text><text x="173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2012</text><text x="213" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2013</text><text x="253" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2014</text><text x="293" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2015</text><text x="333" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2016</text><text x="373" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="384" opacity="1">2017</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7"><text x="58" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="370" opacity="1">0</text><text x="58" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="290" opacity="1">2.5M</text><text x="58" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="210" opacity="1">5M</text><text x="58" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="130" opacity="1">7.5M</text><text x="58" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="50" opacity="1">10M</text></g><text x="504" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-0" style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(109,-9999)" opacity="0" visibility="visible"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 126.5 0.5 C 129.5 0.5 129.5 0.5 129.5 3.5 L 129.5 40.5 C 129.5 43.5 129.5 43.5 126.5 43.5 L 69.5 43.5 63.5 49.5 57.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 126.5 0.5 C 129.5 0.5 129.5 0.5 129.5 3.5 L 129.5 40.5 C 129.5 43.5 129.5 43.5 126.5 43.5 L 69.5 43.5 63.5 49.5 57.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 126.5 0.5 C 129.5 0.5 129.5 0.5 129.5 3.5 L 129.5 40.5 C 129.5 43.5 129.5 43.5 126.5 43.5 L 69.5 43.5 63.5 49.5 57.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 126.5 0.5 C 129.5 0.5 129.5 0.5 129.5 3.5 L 129.5 40.5 C 129.5 43.5 129.5 43.5 126.5 43.5 L 69.5 43.5 63.5 49.5 57.5 43.5 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#7cb5ec" stroke-width="1"></path><text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20"><tspan style="font-size: 10px">2012</tspan><tspan style="fill:#7cb5ec" x="8" dy="15">●</tspan><tspan dx="0"> Installation: </tspan><tspan style="font-weight:bold" dx="0">50 000</tspan></text></g></svg></div></div>
		                                    </div>

                                        </div>
                                        
                                    </div>
					</div>
					<hr>
					<div id="ammort_table">
					</div>
					<div class="share_link">
						<ul>
							<li>
								<a href="#" class=""> <i class="fa fa-facebook facebook"></i></a>
							</li>
							<li>
								<a href="#" class=""> <i class="fa fa-twitter twitter"></i> </a>
							</li>
							<li>
								<a href="#" class=""> <i class="fa fa-google-plus google-plus"></i> </a>
							</li>
							<li>
								<a href="#" class=""> <i class="fa fa-linkedin linkedin"></i> </a>
							</li>
						</ul>
					</div>
					<div class="FAQ_acc">
						<label>FAQ</label>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									 <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	

						
					</div>
				</div>
			
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-check'></i> Forms</h1>
        </div>
        <!-- Page Heading End-->	

        <!-- Your awesome content goes here -->
       <!-- <div class="row">

            <!--<div class="col-sm-6 portlets">

                <!--<div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong>Default</strong> Form</h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content padding">							
                        <div id="basic-form">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="file" class="btn btn-default" title="Search for a file to add">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>-->

            <!--<div class="col-sm-6 portlets">

                <div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong>Horizontal</strong> Form</h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content padding">						
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>-->

        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Busca</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <form class="form-inline" role="form" action ='<?php echo base_url('Control_Dashuser/cargainformacionsubcat') ?>' method='POST'>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="criterio" name="criterio">
                    </div>
                    <!--<div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                    </div>-->
                    <!--<div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>-->
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <!--<a class="btn btn-primary md-trigger" data-modal="form-modal">Form in Modal</a>-->
                </form>
            </div>
        </div>


        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Resultados</strong> </h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <!--<form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">Input text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-text" placeholder="Input text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Input text with help</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-text-help" placeholder="Input text placeholder">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-text-disabled" class="col-sm-2 control-label">Disabled</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-text-disabled" placeholder="Input text" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Static Control</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">email@example.com</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Radio</label>
                        <div class="col-sm-10">
                            <div class="radio iradio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="radio iradio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Checkbox</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Inline Checkbox</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline icheckbox">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                            </label>
                            <label class="checkbox-inline icheckbox">
                                <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                            </label>
                            <label class="checkbox-inline icheckbox">
                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Select</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <select multiple class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Custom Select</label>
                        <div class="col-sm-10">
                            <select class="form-control selectpicker">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label for="input-text-has-success" class="col-sm-2 control-label">Input Success</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-text-has-success">
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label for="input-text-has-warning" class="col-sm-2 control-label">Input Warning</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-text-has-warning">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label for="input-text-has-error" class="col-sm-2 control-label">Input Error</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-text-has-error">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Input Size</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-sm" placeholder="input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="default">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-lg" placeholder="input-lg">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Column</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder=".col-xs-2">
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder=".col-xs-3">
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" placeholder=".col-xs-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Input group</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox">
                                        </span>
                                        <input type="text" class="form-control">
                                    </div><!-- /input-group --
                                </div><!-- /.col-lg-6 --
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>!-- /input-group --
                                </div>!-- /.col-lg-6 --
                            </div>!-- /.row --
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>!-- /input-group --
                                </div>!-- /.col-lg-6 --
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div><!-- /input-group --
                                </div>!-- /.col-lg-6 --
                            </div><!-- /.row --
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group --
                                        <input type="text" class="form-control">
                                    </div><!-- /input-group --
                                </div><!-- /.col-lg-6 --
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group --
                                    </div><!-- /input-group --
                                </div><!-- /.col-lg-6 --
                            </div><!-- /.row --
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">File Input</label>
                        <div class="col-sm-10">
                            <input type="file" class="btn btn-default" title="Select file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Datepicker</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker-input">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Datepicker with mask</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Input mask</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" data-mask="999999" placeholder="999999">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" data-mask="aaaaaa" placeholder="******">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" data-mask="999.999.999" placeholder="999.999.999">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" data-mask="99:99:99" placeholder="99:99:99">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">WYSWYG</label>
                        <div class="col-sm-10">
                            <textarea class="summernote"></textarea>
                        </div>
                    </div>
                </form>-->
            </div>

        
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
                <script>jQuery(document).ready(function(){
                            $("button[type=submit]").click(function(){
                                alert('submit has been click');
                                $( ".first-column" ).append( "<div class='widget'> \
                                                              <div class='widget-header'> \
                                                              <h2><strong>Variable Box</strong> Portlet</h2> \
                                                              <div class='additional-btn'> \
                                                                <a href='#' class='hidden reload'><i class='icon-ccw-1'></i></a> \
                                                                <a href='#' class='widget-toggle'><i class='icon-down-open-2'></i></a> \
                                                                <a href='#' class='widget-close'><i class='icon-cancel-3'></i></a> \
                                                              </div> \
                                                              </div> \
                                                              <div class='widget-content padding'> \
                                                              <!-- check box --> \
                                                                <form class='form-horizontal' role='form'> \
                                                                <div class='form-group'>                    \
                                                                    <div class='col-sm-10'> \
                                                                        <div class='checkbox'> \
                                                                          <label> \
                                                                            <input type='checkbox' value=''> \
                                                                            Option one is this \
                                                                          </label> \
                                                                        </div>\
                                                                        <div class='checkbox'>\
                                                                          <label>\
                                                                            <input type='checkbox' value=''>\
                                                                            Option one is this \
                                                                          </label>\
                                                                        </div>\
                                                                        <div class='checkbox'>\
                                                                          <label>\
                                                                            <input type='checkbox' value=''>\
                                                                            Option one is this \
                                                                          </label>\
                                                                        </div>\
                                                                    </div>\
                                                                </div>\
                                                                </form>\
                                                                <!-- end check box -->\
                                                                 </div>\
                                                              </div></div>");
                            })
                        });
                </script>  
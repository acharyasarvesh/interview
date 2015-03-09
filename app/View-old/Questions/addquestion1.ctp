<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add New Question</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post">
                                      <fieldset>
                                        <legend>Add a Question</legend>
										
                                        <div class="control-group">
                                          <label class="control-label" for="question_title">Enter Question</label>
                                          <div class="controls">
                                            <input type="text" class="span9" id="question_title" name="question_title">
                                          </div>
										  <div id="question_title_message" style="color: red;font-size: 11px;margin-left: 21%;"></div>
                                        </div>
										
										
                                        <div class="control-group">
                                          <label class="control-label" for="category_selected">Select Question Category</label>
                                          <div class="controls">
                                            <select name="category_selected">
											<?php foreach($courses as $key => $value) { ?>
											<option value="<?php echo $key ?>"><?php echo $value ?></option>
											<?php }?>
											</select>
                                          </div>
                                        </div>
                                       
                                         <div class="control-group">
                                          <label class="control-label" for="question_level">Select Level of Question</label>
                                          <div class="controls">
                                            <select name="question_level">
											<option>Biggner</option>
											<option>Intermediate</option>
											<option>Advanced</option></select>
                                          </div>
                                        </div>
                                       										
										
                                       <!-- <div class="control-group">
                                          <label class="control-label" for="typeahead">Select Answer Type </label>
                                          <div class="controls">
                                             <select>
											 <option>- Select Answer Type -</option>
											 <option>Multiple Choice</option>
											<option>Yes / No</option>
											<option>More then one answers</option></select>
                                            
                                          </div>
                                        </div> -->
										
										  <div class="control-group">
                                          <label class="control-label" for="option_one"> </label>
                                          <div class="controls">
                                            <input type="radio" id="answer" name="answer" value="option_one">  <input type="text" class="span5" id="option_one" name="option_one" > <button type="button" class="btn" style="font-size:12px;padding:4px">Answer Option 1</button>
                                          </div>
										  <div id="option_one_message" style="color: red;font-size: 11px;margin-left: 21%;"></div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="option_two"> </label>
                                          <div class="controls">
                                            <input type="radio" id="answer" name="answer" value="option_two">  <input type="text" class="span5" id="option_two" name="option_two"  > <button type="button" class="btn" style="font-size:12px;padding:4px">Answer Option 2</button>
                                          </div>
										  <div id="option_two_message" style="color: red;font-size: 11px;margin-left: 21%;"></div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="option_three"> </label>
                                          <div class="controls">
                                            <input type="radio" id="answer" name="answer" value="option_three">  <input type="text" class="span5" id="option_three" name="option_three"  > <button type="button" class="btn" style="font-size:12px;padding:4px">Answer Option 3</button>
                                          </div>
										  <div id="option_three_message" style="color: red;font-size: 11px;margin-left: 21%;"></div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="option_four"> </label>
                                          <div class="controls">
                                            <input type="radio" id="answer" name="answer" value="option_four">  <input type="text" class="span5" id="option_four" name="option_four"  > <button type="button" class="btn" style="font-size:12px;padding:4px">Answer Option 4</button>
                                          </div>
										  <div id="option_four_message" style="color: red;font-size: 11px;margin-left: 21%;"></div>
                                        </div>
										<div id="radio_message" style="color: red;font-size: 11px;margin-left: 21%;"></div>
                                        <div class="form-actions">
                                          <button id="submit" type="submit" class="btn btn-primary">Publish a Question</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
				<script type="text/javascript">
					$(document).ready(function(){
						
					  var str = "";
					  
					  $("#question_title").blur(function(){
						if($(this).val() == ""){
						str = "Question Cannot be Empty";
						//alert("Question Cannot be Empty");
						$( "#question_title_message" ).text( str );
						}else{
						str = "";
						$( "#question_title_message" ).text( str );
						}
						});
					  
					  $("#option_one").blur(function(){
						if($(this).val() == ""){
						str = "Option one cannot be Empty";
						//alert("Option one cannot be Empty");
						$( "#option_one_message" ).text( str );
						}else{
						str = "";
						$( "#option_one_message" ).text( str );
						}
						});
						
					$("#option_two").blur(function(){
						if($(this).val() == ""){
						str = "Option two cannot be Empty";
						//alert("Option one cannot be Empty");
						$( "#option_two_message" ).text( str );
						}else{
						str = "";
						$( "#option_two_message" ).text( str );
						}
					  });
					  
					  $("#option_three").blur(function(){
						if($(this).val() == ""){
						str = "Option three cannot be Empty";
						//alert("Option three cannot be Empty");
						$( "#option_three_message" ).text( str );
						}else{
						str = "";
						$( "#option_three_message" ).text( str );
						}
					  });
					  
					  $("#option_four").blur(function(){
						if($(this).val() == ""){
						str = "Option four cannot be Empty";
						//alert("Option four cannot be Empty");
						$( "#option_four_message" ).text( str );
						}else{
						str = "";
						$( "#option_four_message" ).text( str );
						}
					  });
					  
					  $("#submit").on('click',function(){
						var value = $("form input[type='radio']:checked").val();
						if(value == undefined ){
						str = "Select atleast one answer";
						$( "#radio_message" ).text( str );
						return false;
						} else {
						str = "";
						$( "#radio_message" ).text( str );
						}
					  });
					  
					});
					
				</script>
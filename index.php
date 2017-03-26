<?php
include 'config.php';
include 'function.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>小狼毫注音輸入法 編輯器</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" href="//pulipulichen.github.io/blogger/posts/2016/12/semantic/semantic.min.css">
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<script src="//pulipulichen.github.io/blogger/posts/2016/12/semantic/semantic.min.js"></script>

<!-- ------------------------------------ -->

<form class="file-process-framework ui form">

  <div class="ui two column doubling grid">
    <div class="column">
	<div class="ui segment">
	
    
<h1 class="ui horizontal divider header">
  Input
</h1>

    <div class="ui top attached tabular menu">
      <div class="active item" data-tab="textarea">Textarea</div>
      <!-- <div class="item" data-tab="file">File</div> -->
    </div>

<!-- --------------------------------- -->

<div class="ui bottom attached active tab segment" data-tab="textarea">
    
<div class="fields">
    <div class="eight wide field">
        <label for="url_title">Title</label>
        <input type="text" value="實作學習單：" id="url_title" />
    </div>
</div> <!-- <div class="inline fields"> -->
    
  <div class="field">
    <label for="input_mode_textarea">Paste text here: </label>
    <textarea class="input-mode textarea" id="input_mode_textarea" 
              style='min-height: 6em;height: 6em;' 
              onfocus="this.select()"
              >https://docs.google.com/document/d/1j_7ZEWzIUiwutXmmeAZlhH263IDzKvbL1V8Za3sP4ZI/edit?usp=sharing</textarea>
  </div>
  <!--
  <div class="field">
      <button type="button" class="ui primary button process-textarea">Submit</button>
  </div>
  -->
    
</div>

<!-- --------------------------------- -->

<div class="ui bottom attached tab segment" data-tab="file">
  <div class="field">
      <label for="files">Please select a TXT file in UTF8 encoding: </label>
    </div>
    <div class="field">
      <input class="myfile" name="files[]" id="files" multiple="" type="file" />
      <div class="ui pointing inverted blue large basic label">
        <a href="http://blog.pulipuli.info/2016/12/utf-8notepad-how-to-convert-plain-text.html" target="notepad" style="display: block">How to Convert TXT file to UTF8 encoding?</a>
      </div>
    </div>

  
  <div class="inline field">
    <input type="checkbox" name="autodownload" id="autodownload" />
    <label for="autodownload">Download Processed File Automatically</label>
  </div>


</div> <!-- <div class="ui bottom attached tab segment" data-tab="file"> -->
  

    <!-- -------------------------------------- -->
    
		</div> <!-- <div class="ui segment"> -->
	</div> <!-- <div class="column"> -->
  <!-- -------------------------------------- -->
  
    <div class="column">
  <div class="ui segment display-result" style="">
  <!-- <div class="display-result"> -->
  
    <h2 class="ui horizontal divider header">
      Result
    </h2>
    <div class="field" style="display: none;">
      <button type="button" class="fluid ui large right labeled icon green button download-file">
        <i class="right download icon"></i>
        DOWNLOAD
      </button>
    </div>

    <div class="field" style="display: none;">
      <label for="filename">File Name: </label>
      <input type="text" onfocus="this.select()" id="filename" class="filename" style="width: calc(100% - 15em)" />
    </div>
    
    <div class="field" style="display: none;">
      <label for="preview">
        Result Preview: 
        <div class="ui  pointing below  medium blue basic label encoding" style="margin-left: 1em">
          Get error encoding text? <a href="http://blog.pulipuli.info/2016/12/utf-8notepad-how-to-convert-plain-text.html" target="notepad" >Try to Convert TXT file to UTF8 encoding?</a>
        </div>
      </label>
        
      <textarea id="preview" class="preview" onfocus="this.select();"></textarea>
    </div>
    
      <div id="html_preview"></div>
  </div>
    </div> <!-- <div class="column"> -->
  </div> <!-- <div class="ui two column doubling grid"> -->
</form>

 </body>
</html>

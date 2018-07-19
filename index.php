<?php

// https://semantic-ui.com/collections/form.html
// pulipulichen.github.io/blogger/posts/2017/03/popup.html?_=&icon=http://icons.iconarchive.com/icons/dtafalonso/android-lollipop/512/Dictionary-icon.png&url=http://localhost/terra_pinyin_dict_editor/index.php

include 'config.php';
include 'function.php';

$dicts = get_dict();
?><!DOCTYPE html>

<html>
    <head>
        <title>小狼毫注音輸入法 編輯器</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="http://pulipulichen.github.io/blogger/posts/2017/03/icon/rime2.png" type="image/png">
    </head>
    <body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" href="//pulipulichen.github.io/blogger/posts/2016/12/semantic/semantic.min.css">
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<script src="//pulipulichen.github.io/blogger/posts/2016/12/semantic/semantic.min.js"></script>

<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

<!-- ------------------------------------ -->

<form class="file-process-framework ui form" method="post" action="save.php">

  <div class="ui two column doubling grid">
    <div class="column">
	<div class="ui segment">
	
    
<h1 class="ui horizontal divider header">
  小狼毫字典
</h1>

<!-- --------------------------------- -->

<div class="ui bottom attached active tab segment" data-tab="textarea">
    <div class="instruction">
        <strong>悉</strong>: xi1 一聲 1</strong> / <strong>夾</strong>: jia2 <strong>二聲 2</strong> / <strong>什</strong>: shen3 <strong>三聲 3</strong> /
    <br /> <strong>砲</strong>: pao4 <strong>四聲 4</strong> / <strong>子</strong>: zi5 <strong>輕聲 5</strong>
    </div>
    <div class="table-wrapper" style="overflow-y: auto;
    max-height: calc(100vh - 230px);
    margin-bottom: 1em;">
    <table class="ui table">
        <thead>
            <tr>
                <th>字詞</th>
                <th>發音</th>
                <th style="min-width: 100px;">管理</th>
            </tr>
        </thead>
        <tbody>
<?php
foreach ($dicts AS $dict) {
    ?>
            <tr>
                <td>
                    <input type="text" name="dict_key" value="<?php echo $dict[0]; ?>" />
                </td>
                <td>
                    <input type="text" name="dict_value" value="<?php echo $dict[1]; ?>" />
                </td>
                <td>
                    <button type="button" class="add-button tiny ui icon button">
                        <i class="right plus icon"></i>
                    </button>
                    <button type="button" class="delete-button tiny ui icon button">
                        <i class="right remove icon"></i>
                    </button>
                </td>
            </tr>
    <?php
}
?>
        </tbody>
    </table>
    </div>
    <div class="field">
        <button type="sumit" class="fluid ui large right labeled icon button download-file" id="save_button">
        <i class="right save icon"></i>
        儲存
      </button>
    </div>
</div>

<!-- --------------------------------- -->

    <!-- -------------------------------------- -->
    
		</div> <!-- <div class="ui segment"> -->
	</div> <!-- <div class="column"> -->
  <!-- -------------------------------------- -->
  
    <div class="column">
  <div class="ui segment display-result" style="">
  <!-- <div class="display-result"> -->
  
    <h2 class="ui horizontal divider header">
      萌典
    </h2>
      <div id="moe_dicts" style="
    overflow-y: auto;
    max-height: calc(100vh - 100px);
"></div>
  </div>
    </div> <!-- <div class="column"> -->
  </div> <!-- <div class="ui two column doubling grid"> -->
</form>

<div class="loading-cover"><div class="loading-image"></div></div>

</body>
</html>

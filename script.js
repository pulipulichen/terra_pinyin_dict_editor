$(function () {
    var _panel = $(".file-process-framework");
    
    _panel.find("button.delete-button").click(function () {
        var _has_value = false;
        $(this).parents("tr:first").find('input[type="text"]').each(function (_i, _ele) {
            var _value = _ele.value.trim();
            if (_value !== "") {
                _has_value = true;
            }
        });
        
        if (_has_value === false) {
            $(this).parents("tr:first").remove();
        }
        else if (window.confirm("確定刪除？")) {
            $(this).parents("tr:first").remove();
        }
    });
    
    _panel.find("button.add-button").click(function () {
        var _tr = $(this).parents("tr:first");
        var _another_tr = _tr.clone(true);
        _tr.after(_another_tr);
        _another_tr.find('input[type="text"]').val("");
    });
    
    var _create_moe_dict_iframe = function () {
        var _words = this.value.trim().split("");
        
        var _moe_dict_preview = $("#moe_dicts").empty();
        
        for (var _i = 0; _i < _words.length; _i++) {
            var _word = _words[_i];
            // https://www.moedict.tw/%E9%81%8E
            //var _url = "https://www.moedict.tw/" + escape(_word);
            var _url = "https://www.moedict.tw/" + _word;
            _moe_dict_preview.append('<iframe src="' + _url + '" width="100%" height="250px"></iframe>');
        }
    };
    
    _panel.find('input[name="dict_key"]').change(_create_moe_dict_iframe)
        .focus(_create_moe_dict_iframe);
  
    _panel.submit(function () {
        var _error = false;
        var _form = $(this);
//        _form.find("tbody > tr").each(function (_i, _tr) {
//            _tr = $(_tr);
//            if (_tr.find('input[name="dict_key"]').val().trim() === "" 
//                    && _tr.find('input[name="dict_value"]').val().trim() === "" ) {
//                _tr.remove();
//            }
//        });
        
        _form.find('input[type="text"]').each(function (_i, _input) {
            if (_input.value.trim() === "") {
                var _tr = $(_input).parents("tr:first");
                if (_tr.find('input[name="dict_key"]').val().trim() === "" 
                    && _tr.find('input[name="dict_value"]').val().trim() === "" ) {
                    //_tr.remove();
                    return;
                }
                
                if (_error === false) {
                    window.alert("尚未填寫資料");
                }
                _error = true;
                _input.focus();
            }
            //console.log(_input.name);
        });
        
        if (_error === true) {
            return false;
        }
        
        _form.find('input[name="dict_key"]').each(function (_i, _input) {
            _input.name = _input.name + "_" + _i;
            //console.log(_input.name);
        });
        
        _form.find('input[name="dict_value"]').each(function (_i, _input) {
            _input.name = _input.name + "_" + _i;
        });
        
        if (_error === false) {
            return true;
        }
        else {
            return false;
        }
    });
});
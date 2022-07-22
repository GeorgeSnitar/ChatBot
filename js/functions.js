var callback = function (valueData){
      return valueData;
}

function formInner(form, message){
      return form.innerHTML += message;
}

 async function uploadfile(valueData, form){
      await fetch('/message.php', {
            method: "POST",
            data: "text=" + valueData,
            success: function(result){
                  var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                  formInner(form, replay);
            }
      });
}


export var clickFunc = function (data, form, message){ 
      var valueData = data.value;
      formInner(form, message);
      callback(valueData);
      
      //Begin AJAX code here
      
      uploadfile(data, form);
}
var callback = function (valueData){
      return valueData;
}

async function uploadfile(valueData){
      await fetch('/message.php', {
            method: "POST",
            data: "text=" + valueData,
            success: function(){}
      });
}

export var clickFunc = function (data, form, message){ 
      var valueData = data.value;
      form.innerHTML += message;
      callback(valueData);
      
      //Begin AJAX code here
      
      uploadfile(valueData);
}
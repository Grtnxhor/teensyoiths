

  callbacks: {
       onPaste: function (e) {
      var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('text/html');
      e.preventDefault();
      var div = $('<div />');
      div.append(bufferText);
      div.find('*').removeAttr('style');
      setTimeout(function () {
        document.execCommand('insertHtml', false, div.html());
      }, 10);



       callbacks: {
    // Clear all formatting of the pasted text
    onPaste: function (e) {
    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
    e.preventDefault();
    setTimeout(function () {
        document.execCommand('insertText', false, bufferText);
    }, 10);
    }
  }


   data-parsley-pattern="/<\s*((p|span|ul|li|i|u|b)1?)[>]*\s*>/"


   
 toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']]
  ]
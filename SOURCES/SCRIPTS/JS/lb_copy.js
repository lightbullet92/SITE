$(function()
{
  function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }

  var array=["#LBPaper", "#LBPaperTest", "#LBFabric", "#LBOrigins", "#LBReclaim", "#LBNewPaper", "#LBNewFabric", "#LBSAMP"];
  array.forEach(function(elem) {
    $(elem).on("click", function() {
      copyToClipboard(elem);
    });
  });
});
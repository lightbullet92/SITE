$(function()
{
  function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }

  var array=["#LBPaper", "#LBVanilla", "#LB404", "#LBHUB", "#LBPaperTest", "#LBFabric", "#LBOrigins", "#LBVoid", "#LBReclaim", "#LBNewPaper", "#LBNewFabric", "#LBVelocity", "#LBSAMP", "#LBTest", "#LBIbra"];
  array.forEach(function(elem) {
    $(elem).on("click", function() {
      copyToClipboard(elem);
    });
  });
});
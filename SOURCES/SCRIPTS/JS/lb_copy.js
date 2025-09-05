$(function()
{
  function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }

  var array=["#LBPaper", "#LBVanilla", "#LB25w31a", "#LBPaperTest", "#LBFabric", "#LBOrigins", "#LBVoid", "#LBReclaim", "#LBNewPaper", "#LBNewFabric", "#LBVelocity", "#LBSAMP"];
  array.forEach(function(elem) {
    $(elem).on("click", function() {
      copyToClipboard(elem);
    });
  });
});
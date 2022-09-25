$(function(){
    var subPage = new Array;
    subPage[0] = "community_4_1";
    subPage[1] = "community_4_2";
    subPage[2] = "community_4_3";
    var url = location.href;
    var getAr0 = url.indexOf(subPage[0]);
    var getAr1 = url.indexOf(subPage[1]);
    var getAr2 = url.indexOf(subPage[2]);
    if(getAr0 != -1){
        $("li:eq(7) a").addClass("on")
    };
    if(getAr1 != -1){
        $("li:eq(8) a").addClass("on")
    };
    if(getAr2 != -1){
        $("li:eq(9) a").addClass("on")
    };
});
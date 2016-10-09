 // set all models in #model_select Select Box
function createSelectList(respModels, selected_Model){
    console.log(respModels);
    $.each(respModels, function(key, value){
        if(selected_Model !== null && selected_Model == value.id){
            $("#model_select ").append('<option value="'+value.id+'"selected = "selected">'+value.model+'</option>');
        }
        else {
            $("#model_select ").append('<option value="' + value.id + '">' + value.model + '</option>');
        }
    });
}

 // send request to all models of the brand
function modelRecuest(brand_id, selected_Model=null) {
    var resModels_;
    var url = 'http://codingtask.ddns.net/getmodel/'+brand_id;
        $.ajax({
            method : 'get',
            url: url,
            dataType: 'json',
        }).success(function (respModels) {
            createSelectList(respModels, selected_Model);
        }).error(function(data) {
            // alert('erorr')
        });
}

$(function () {
    // Attach on 'Click' for live update
    $("#brand_select").click(function() {
        var brand = $(this).val()[0].toLowerCase();
        $("#model_select option").remove();
        models = modelRecuest(brand);

    });

    if ( $("#model_select option[selected='selected']").length ){
        var selectedBrand = $("#brand_select option[selected='selected']").val();
        var selectedModel = $("#model_select option[selected='selected']").val();
        $("#model_select option").remove();
        modelRecuest(selectedBrand, selectedModel);
    }

});
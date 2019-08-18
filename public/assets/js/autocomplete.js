(function($){
    var options = {

        url: gbl_phpshark_baseUrl + "membership/api?source=drop-field-posts",
      
        getValue: "name",
      
        list: {	
          match: {
            enabled: true
          }
        }
      };
      
      $("#select-post-field").easyAutocomplete(options);

})(jQuery);

(function($) {
    $(document).on("submit", "#logform", function(event){
        event.preventDefault();
        var serialized = $(this).serializeArray();
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: serialized,
            url: ajax_url,
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Giriş Başarılı Yönlendiriliyorsunuz");

                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });
})(jQuery);

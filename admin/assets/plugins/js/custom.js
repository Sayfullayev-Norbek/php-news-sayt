$(document).ready(function (e){
    $('.upload').change(function(){
        var input = this;
        var url = $(this).val();
        var targetImage = $(this).parent().find('img');
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
        {
            var reader = new FileReader();

            reader.onload = function (e) {
                targetImage.attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        else
        {
            alert("Faqat rasm yuklashingiz mumkin!");
            targetImage.attr('src', '/upload/img.png');
        }
    });

});


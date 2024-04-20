$('#mattruoccccd').click(function () {
    jQuery('#mattruoccccd').find('input[type="file"]').click();
});
// Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#mattruoccccd').attr('style', 'background-image:url("' + e.target.result + '")');
            $('.textmattr').attr('style', 'display:none');
            $('#iconmattr').attr('style', 'display:none');

        }
        reader.readAsDataURL(input.files[0]);
    }
}

$('#matsaucccd').click(function () {
    jQuery('#matsaucccd').find('input[type="file"]').click();
});
// Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#matsaucccd').attr('style', 'background-image:url("' + e.target.result + '")');
            $('.textmatsau').attr('style', 'display:none');
            $('#iconmatsaucancuoc').attr('style', 'display:none');

        }
        reader.readAsDataURL(input.files[0]);
    }
}

$('#anhmattruocthe').click(function () {
    jQuery('#anhmattruocthe').find('input[type="file"]').click();
});
// Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#anhmattruocthe').attr('style', 'background-image:url("' + e.target.result + '")');
            $('.textanhtruocthe').attr('style', 'display:none');
            $('#iconmattruocthe').attr('style', 'display:none');

        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('#anhmatsauthe').click(function () {
    jQuery('#anhmatsauthe').find('input[type="file"]').click();
});
// Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#anhmatsauthe').attr('style', 'background-image:url("' + e.target.result + '")');
            $('.textanhsauthe').attr('style', 'display:none');
            $('#iconmatsauthe').attr('style', 'display:none');

        }
        reader.readAsDataURL(input.files[0]);
    }
}

// Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
$("#mattruoc").change(function () {
    readURL(this);
});
$("#matsau").change(function () {
    readURL2(this);
});
$("#mattruoc_card").change(function () {
    readURL3(this);
});
$("#matsau_card").change(function () {
    readURL4(this);
});

// $('#service').submit(function (e) {
//     e.preventDefault();
//     $('.loader').show()

//     $('#service').submit();
// });

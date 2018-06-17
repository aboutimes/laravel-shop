<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\InvalidRequestException;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws InvalidRequestException
     */
    public function emailVerifyNotice(Request $request)
    {
        $user = $request->user();
        // 判断用户是否已经激活
        if ($user->email_verified) {
            throw new InvalidRequestException('您已经验证过邮箱了');
        }
        return view(
            'pages.email_verify_notice',
            [
                'msg' => '邮箱未验证',
                'link' => route('email_verify_send'),
                'link_desc' => '发送验证邮件'
            ]
        );
    }
}

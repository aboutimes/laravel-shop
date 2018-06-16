<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * Show email_verify_notice page.
     *
     * @return \Illuminate\Http\Response
     */
    public function emailVerifyNotice(Request $request)
    {
        $user = $request->user();
        // 判断用户是否已经激活
        if ($user->email_verified) {
            return view(
                'pages.email_verify_notice',
                [
                    'msg' => '您已经验证过邮箱了',
                    'link' => route('home'),
                    'link_desc' => '返回首页'
                ]
            );
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

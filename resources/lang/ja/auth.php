<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => '認証情報と一致するレコードがありません。',
    'throttle' => 'ログインの試行回数が多すぎます。:seconds 秒後にお試しください。',
    'not_authorized' => 'You are not authorized to execute this action',
    'signup_disabled' => 'Registration is currently disabled',
    'signup_error' => 'An error occured trying to register the user',
    'back_homepage' => 'Back to homepage',
    'mfa_auth_otp' => 'Authenticate with your two factor device',
    'mfa_auth_webauthn' => 'Authenticate with a security key (WebAuthn)',
    '2fa_title' => 'Two Factor Authentication',
    '2fa_wrong_validation' => 'The two factor authentication has failed.',
    '2fa_one_time_password' => 'Two factor authentication code',
    '2fa_recuperation_code' => 'Enter a two factor recovery code',
    '2fa_otp_help' => 'Open up your two factor authentication mobile app and copy the code',

    'login_to_account' => '貴方のアカウントにログインしてください。',
    'login_with_recovery' => 'Login with a recovery code',
    'login_again' => 'Please login again to your account',
    'email' => 'Email',
    'password' => 'パスワード',
    'recovery' => 'Recovery code',
    'login' => 'ログイン',
    'button_remember' => 'Remember Me',
    'password_forget' => 'Forget your password?',
    'password_reset' => 'Reset your password',
    'use_recovery' => 'Or you can use a <a href=":url">recovery code</a>',
    'signup_no_account' => 'Don’t have an account?',
    'signup' => '新規登録',
    'create_account' => 'Create the first account by <a href=":url">signing up</a>',
    'change_language_title' => '言語を切り替える',
    'change_language' => 'Change language to :lang',

    'password_reset_title' => 'パスワードをリセット',
    'password_reset_email' => 'メール アドレス',
    'password_reset_send_link' => 'Send Password Reset Link',
    'password_reset_password' => 'パスワード',
    'password_reset_password_confirm' => 'パスワードの確認',
    'password_reset_action' => 'Reset Password',
    'password_reset_email_content' => 'Click here to reset your password:',

    'register_title_welcome' => 'Welcome to your newly installed Monica instance',
    'register_create_account' => 'You need to create an account to use Monica',
    'register_title_create' => 'アカウント作成',
    'register_login' => '<a href=":url">Log in</a> if you already have an account.',
    'register_email' => 'Enter a valid email address',
    'register_email_example' => 'you@home',
    'register_firstname' => '名',
    'register_firstname_example' => '例：ジョン',
    'register_lastname' => '姓',
    'register_lastname_example' => 'eg. Doe',
    'register_password' => 'パスワード',
    'register_password_example' => 'Enter a secure password',
    'register_password_confirmation' => 'Password confirmation',
    'register_action' => 'Register',
    'register_policy' => 'Signing up signifies you’ve read and agree to our <a href=":url" hreflang=":hreflang">Privacy Policy</a> and <a href=":urlterm" hreflang=":hreflang">Terms of use</a>.',
    'register_invitation_email' => 'For security purposes, please indicate the email of the person who’ve invited you to join this account. This information is provided in the invitation email.',

    'confirmation_title' => 'Verify Your Email Address',
    'confirmation_fresh' => 'A fresh verification link has been sent to your email address.',
    'confirmation_check' => 'Before proceeding, please check your email for a verification link.',
    'confirmation_request_another' => 'If you did not receive the email <a :action>click here to request another</a>.',

    'confirmation_again' => 'If you want to change your email address you can <a href=":url" class="alert-link">click here</a>.',
    'email_change_current_email' => 'Current email address:',
    'email_change_title' => 'Change your email address',
    'email_change_new' => '新しいEメールアドレス',
    'email_changed' => 'Your email address has been changed. Check your mailbox to validate it.',
];

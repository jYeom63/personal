## 問い合わせ対応用のタイプリスト
> ユーザーのステータス、チャージの詳細などは[ここ](https://admin.pollet.tech/)でチェック

#### User Type
```
'new_user';           // 新規ユーザ
'site_authenticated'; // 初回サイト認証完了済
'charge_requested';   // 初回チャージ申請完了済
'waiting_issue';      // 発番待ち
'issued';             // 発番済
'activated';          // アクティベート完了
'sign-out';           // ログアウト済み(アクティベートはされている)
'removed';            // 削除済み
```
#### Charge Type
```
    const STATUS_UNPROCESSED_FIRST_CHARGE = 'unprocessed_first_charge'; // 初回チャージ申請を受けてアクティベート待ち状態
    const STATUS_READY                    = 'ready'; // チャージ準備OK(バッチがカードに入金すると判断するステータス)
    const STATUS_IS_MAKING_PAYMENT_FILE   = 'is_making_payment_file'; // セディナに送るようのファイルを作っている状態
    const STATUS_MADE_PAYMENT_FILE        = 'made_payment_file'; // セディナに送るようのファイルが完成しチャージしようとしている状態
    const STATUS_REQUESTED_CHARGE         = 'requested_charge'; // セディナにチャージをお願いしている状態
    const STATUS_APPLIED_CHARGE           = 'applied_charge'; // チャージ完了状態
    const STATUS_CANCELLED_CHARGE         = 'cancelled_charge'; // 何らかの理由でチャージがキャンセルされた
```
#### 20180607
- SQL作業の時は、ペア作業しましょう
> - Card is issued multiple times, and user cannot log in to the right card account. The old card account must be released.
> - https://github.com/oz-sysb/wasabi/issues/1609

#### DB transaction
- use `begin`, `commit`

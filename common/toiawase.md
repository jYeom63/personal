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
    const STATUS_ACCEPTED_RECEPTION = 'accepted_reception'; // 交換受け付けが完了し、承認リクエストもしくはユーザー認証待ち状態
    const STATUS_WAITING_APPLY      = 'waiting_apply'; // 交換受け付けがと、ユーザー認証が完了し、承認リクエスト待ち状態
    
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

#### scarecrow
- mg.hapitas.jp

#### snoot
- http://snoop.hapitas.jp

#### redash
- http://redash.hapitas.jp

#### 参考用
- https://github.com/oz-sysb/wasabi/issues/1710 : db transaction example(begin, select, delete, exit)
- https://github.com/oz-sysb/wasabi/issues/1700 : 本人認証がうまく行かなかった。本人認証のURLが有効ではなくなっている。URLの再登録必要。繋がってないポレットIDでまた再インストールされている
- https://github.com/oz-sysb/wasabi/issues/1665 : ドットマネーのチャージ完了のリンク作り

#### カードが二枚発行されているか確認する
```
[ec2-user@ip-172-29-16-194 ~]$ cat /var/hulft/app/receive_numbered_cedyna_id/complete/201812* | grep 37481
"D","409336379017138468","0002846360033918","37481","0001","20181219","20181220","20"
"D","409336505766691936","0002625390866343","37481","0001","20181220","20181221","20"
```
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
(追加予定) 

#### 20180607
- SQL作業の時は、ペア作業しましょう
> - Card is issued multiple times, and user cannot log in to the right card account. The old card account must be released.
> - https://github.com/oz-sysb/wasabi/issues/1609

#### DB transaction
- use `begin`, `commit`